<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Facebook;

class GraphController extends Controller
{
  private $api;
  public function __construct(Facebook $fb)
  {
      $this->middleware(function ($request, $next) use ($fb) {
          $fb->setDefaultAccessToken(Auth::user()->token);
          $this->api = $fb;
          return $next($request);
      });
  }

  public function getPageAccessToken($page_id){
      try {
           // Get the \Facebook\GraphNodes\GraphUser object for the current user.
           // If you provided a 'default_access_token', the '{access-token}' is optional.
           $response = $this->api->get('/me/accounts', Auth::user()->token);
      } catch(FacebookResponseException $e) {
          // When Graph returns an error
          echo 'Graph returned an error: ' . $e->getMessage();
          exit;
      } catch(FacebookSDKException $e) {
          // When validation fails or other local issues
          echo 'Facebook SDK returned an error: ' . $e->getMessage();
          exit;
      }

      try {
          $pages = $response->getGraphEdge()->asArray();
          foreach ($pages as $key) {
              if ($key['id'] == $page_id) {
                  return $key['access_token'];
              }
          }
      } catch (FacebookSDKException $e) {
          dd($e); // handle exception
      }
  }

    public function publishToPage(Request $request, $title){

        $page_id = '100491714886173';

        try {
            $post = $this->api->post('/' . $page_id . '/feed', array('message' => $title), $this->getPageAccessToken($page_id));

            $post = $post->getGraphNode()->asArray();

            dd($post);

        } catch (FacebookSDKException $e) {
            dd($e); // handle exception
        }
    }
}

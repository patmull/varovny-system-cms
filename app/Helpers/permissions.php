<?php

function check_user_permissions($request, $actionName = null, $id = null){
  // getting current user
  $currentUser = $request->user();
  // dd($actionName);
  if($actionName){
    $currentActionName = $actionName;
  } else {

      $currentActionName = $request->route()->getActionName();
  }

  //dd($currentActionName);

  // dd($currentUser);
  list($controller, $method) = explode('@', $currentActionName);
  $controller = str_replace(["App\\Http\\Controllers\\Administration\\", "Controller"], "", $controller);

//  dd("$controller, $method");

  $crudPermissionsMap = [
//    'create' => ['create', 'store'],
//    'update' => ['edit', 'update'],
//    'delete' => ['destroy', 'store', 'forceDestroy'],
//    'read' => ['index', 'view'],
    'crud' => ['create', 'store', 'edit', 'update', 'destroy', 'restore', 'forceDestroy', 'index', 'view']
  ];

  $classesMap = [
    'Post' => 'posts',
    'Category' => 'categories',
    'User' => 'users'
  ];

  foreach ($crudPermissionsMap as $permission => $methods) {
      // check permiddion if current method exists
     if(in_array($method, $methods) && isset($classesMap[$controller])){
      //if(in_array($method, $methods)){

          $className = $classesMap[$controller];

          if($className == 'posts' && in_array($method, ['edit', 'update', 'destroy', 'restore', 'forceDestroy'])){
            // if current user has not update/delete permission
            // user can update only own's posts (if he has no permission for that)

            // dd($request->route('posts'));

            $id = !is_null($id) ? $id : $request->route('posts');

            if($id && (!$currentUser->can('update-others-posts') || !$currentUser->can("delete-others-posts"))) {
                $postFound = \App\Post::withTrashed()->findOrFail($id);
                if($postFound->author_id !== $currentUser->id){
                    return false;
                }
            }
          } elseif(!$currentUser->can(strtolower("{$permission}-${className}"))) {
             return false;
          }

          break;
      }
  }

  return true;
}

 ?>

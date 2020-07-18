<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use NotificationChannels\Twitter\TwitterChannel;
use NotificationChannels\Twitter\TwitterStatusUpdate;

class ArticlePublishedTwitter extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
    //    return [FacebookPosterChannel::class];
        return [TwitterChannel::class];
    }


     public function toTwitter($post) {
           return new TwitterStatusUpdate('NOVÉ ZPRÁVA kategorie: '.$post->category->title.' | '.$post->title.'. Více podrobností na https://varovny-system.herokuapp.com/varovani/'.$post->slug.'.');
     }


    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}

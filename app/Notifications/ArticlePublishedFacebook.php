<?php

namespace App\Notifications;

use App\Blog;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use NotificationChannels\FacebookPoster\FacebookPosterChannel;
use NotificationChannels\FacebookPoster\FacebookPosterPost;

class ArticlePublishedFacebook extends Notification
{
    use Queueable;

    /**+
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [FacebookPosterChannel::class];
    }

    /**
     * @param $blog
     */
    public function toFacebookPoster($post)
    {
        return with(new FacebookPosterPost('NOVÉ ZPRÁVA kategorie: '.$post->category->title.' | '.$post->title.'. Více podrobností v odkazu.'))->withLink('https://varovny-system.herokuapp.com/varovani/'.$post->slug);
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

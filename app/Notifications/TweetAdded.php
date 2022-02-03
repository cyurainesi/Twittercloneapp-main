<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class TweetAdded extends Notification
{
    use Queueable;
    public $tweet;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($tweet)
    {
        return $this->tweet=$tweet;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('New Notification.')
                    ->action('new notification added now', url('http://twitter.web/home'))
                    ->line('Thank you for using our application!');
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
            'Ntype'=>'tweet',
            'user'=>auth()->user()->username,
            'tweet_id'=>$this->tweet->id,
            'user_id' =>$this->tweet->user_id,
            'image'=>$this->tweet->image,
            'body' => $this->tweet->body
        ];
    }
}

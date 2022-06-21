<?php

namespace App\Notifications;

use App\Models\Collaboration;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CollaborationAnswer extends Notification
{
    use Queueable;
    public $collaboration;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Collaboration $collaboration)
    {
        $this->collaboration = $collaboration;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
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
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
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
            "business_username"=>$this->collaboration->Business->name,
            "business_profile_picture"=>$this->collaboration->Business->profile_picture,
            "collaboration_answer"=>$this->collaboration->is_accepted,

        ];
    }
}

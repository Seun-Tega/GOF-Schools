<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactAdminNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(protected $admin, protected $data)
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
             ->greeting('Hello ' . $this->admin->name)
            ->line('This is to notify you that someone has submitted a contact us form with the following details:')
            ->line('Name: ' . $this->data['firstname'] . ' ' . $this->data['lastname'])
            ->line('Email: ' . $this->data['email'])
            ->line('Phone: ' . $this->data['phone'])
            ->line('Subject: ' . $this->data['subject'])
            ->line('Message: ' . $this->data['message'])
            ->action('View Messages', url('/'))
            ->line('Kindly treat as urgent!!');
            
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}

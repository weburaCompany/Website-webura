<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewContact extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    protected $name;
    protected $email;
    protected $phone;
    protected $company;
    protected $message;

    public function __construct($name, $email, $phone, $company, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->company = $company;
        $this->message = $message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        $via = [];
        if (!is_null($notifiable->channel_type)) {
            $via = explode(',', $notifiable->channel_type);
        }
        return $via;
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->line('Name: ' . $this->name)
            ->line('Email: ' . $this->email)
            ->line('Phone: ' . $this->phone)
            ->line('Company: ' . $this->company)
            ->line('Message: ' . $this->message);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'company' => $this->company,
            'message' => $this->message
        ];
    }
}

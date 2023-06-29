<?php

namespace App\Notifications;

use App\Subscription;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewSubscriptionNotification extends Notification
{
    use Queueable;

    public $subscription;

    public function __construct(Subscription $subscription)
    {
        $this->subscription = $subscription;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('New Subscription')
            ->line('A new subscription has been created.')
            ->line('Email: ' . $this->subscription->email)
            ->action('View Subscriptions', route('subscriptions.index'));
    }
}

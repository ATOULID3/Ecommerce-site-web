<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\DatabaseMessage;

class NewOrderNotification extends Notification
{
    use Queueable;

    protected $order;

    /**
     * Create a new notification instance.
     */
    public function __construct($order)
    {
        $this->order = $order;
    }

    /**
     * Get the notification's delivery channels.
     */
    public function via($notifiable)
    {
        return ['database']; // You can also add 'mail' or other channels
    }

    /**
     * Get the array representation of the notification.
     */
    public function toDatabase($notifiable)
    {
        return [
            'order_id' => $this->order->id,
            'customer_name' => $this->order->customer_name,
            'total_price' => $this->order->total_price,
            'created_at' => $this->order->created_at,
        ];
    }

    /**
     * Get the mail representation of the notification (optional).
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('A new order has been placed.')
                    ->action('View Order', url('/admin/orders/' . $this->order->id))
                    ->line('Thank you for using our application!');
    }
}


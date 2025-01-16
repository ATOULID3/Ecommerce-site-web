<?php

namespace App\Listeners;

use App\Events\OrderPlaced;
use App\Mail\OrderConfirmation;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendOrderConfirmation
{
        /**
     * Handle the event.
     *
     * @param OrderPlaced $event
     * @return void
     */
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(OrderPlaced $event)
    {
        $order = $event->order;

        // Send email to the customer
        Mail::to($order->customer_email)->send(new OrderConfirmation($order));
    }
}

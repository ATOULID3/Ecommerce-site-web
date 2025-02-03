<?php

namespace App\Mail;

use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewProductMail extends Mailable
{
    use Queueable, SerializesModels;
    public $product;


    /**
     * Create a new message instance.
     */
    public function __construct(Product $product)
    {
        $this->product = $product;

    }

    public function build()
    {
        return $this->subject('New Product Available!')
                    ->view('emails.new_product')
                    ->with([
                        'name' => $this->product->name,
                        'price' => $this->product->price,
                        'image' => $this->product->image,
                        'link' => url('/product/' . $this->product->id),
                    ]);
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DailyNewsEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $newsContent;

    public function __construct($newsContent)
    {
        $this->newsContent = $newsContent;
    }

    public function build()
    {
        return $this->subject('📰 Daily News Update from Our App')
                    ->view('emails.daily_news')
                    ->with([
                        'newsContent' => $this->newsContent,
                    ]);
    }
}


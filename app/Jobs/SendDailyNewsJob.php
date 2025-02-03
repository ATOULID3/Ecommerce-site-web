<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\DailyNewsEmail;
use App\Models\Client;

class SendDailyNewsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct() {}

    public function handle()
    {
        $newsContent = "🔥 Exciting updates! Check out the latest features in our app.";

        $clients = Client::all()->pluck('email');

        foreach ($clients as $email) {
            Mail::to($email)->queue(new DailyNewsEmail($newsContent));
        }
    }
}


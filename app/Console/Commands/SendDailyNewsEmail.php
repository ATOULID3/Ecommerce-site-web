<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\Client;
use App\Mail\DailyNewsEmail;
use App\Jobs\SendDailyNewsJob;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendDailyNewsEmail extends Command
{
    protected $signature = 'email:daily-news';
    protected $description = 'Send daily news updates to all clients';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        SendDailyNewsJob::dispatch();
        $this->info('✅ Daily news job dispatched successfully!');
    }
}


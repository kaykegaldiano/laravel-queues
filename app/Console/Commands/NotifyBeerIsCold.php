<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Notifications\BeerIsCold;
use Illuminate\Console\Command;

class NotifyBeerIsCold extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify-beer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user = User::first();
        $user->notify(new BeerIsCold());
    }
}

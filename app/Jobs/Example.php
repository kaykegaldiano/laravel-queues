<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class Example implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct() {}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        echo 'Running job: ' . now();
        sleep(5);
        logger('SUCCESSFULLY DONE! ' . now());
    }

    public function backoff(): int
    {
        return 5;
    }

    public function failed(\Throwable $t)
    {
        echo 'Failed: ' . $t->getMessage();
    }
}

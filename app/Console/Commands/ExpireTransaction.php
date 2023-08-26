<?php

namespace App\Console\Commands;

use App\Models\Transaction;
use Carbon\Carbon;
use DateInterval;
use Illuminate\Console\Command;
use Illuminate\Log\Logger;
use Illuminate\Support\Facades\Log;

class ExpireTransaction extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'transactions:expire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Handle Transaction status that already have exceeded the expiration time';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Log::info(Carbon::now());
        $transactions = Transaction::where('status', 'ON_PROGRESS')->get();
        foreach ($transactions as $transaction) {
            $createdAt = Carbon::parse($transaction->created_at);
            Log::info($createdAt);
            Log::info(Carbon::now()->between($createdAt, $createdAt->addMinutes(1), true));

            if (!Carbon::now()->between($createdAt, $createdAt->addMinutes(1), true)) {
                Transaction::where('invoice_id', $transaction->invoice_id)->update(['status' => 'FAILED']);
            }
        }
    }
}

<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Borrowed_Book;
use App\Book;

class backLeasedBooks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backLeasedBooks';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Borrowed_Book::where('library_received',false)->each(function ($item) {
            if((int)date("d",strtotime($item->created_at)) + $item->number_of_days == (int)date('d'))
            {
                $item->library_received = true;
                Book::find($item->book_id)->increment('copies_number',1);
                $item->save();
            }
        });
    }
}

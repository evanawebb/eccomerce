<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\imports\ExcelImport;

class ImportExcel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:excel
                            {path=/public/RED-122896/RED-122896-metadata.csv : path to excel file}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import excel sheet at given path, specifically for products.';

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
        (new ExcelImport)->import($this->argument('path'));
    }
}

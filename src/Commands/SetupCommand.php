<?php
namespace Tifoysal\BangladeshUniversities\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class SetupCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'BangladeshUniversity:setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Load all universities name.';

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
     * @return int
     */
    public function handle()
    {
        $this->info('Setting up Laravel Bangladesh Universities list');
        $this->info('Database migrating..');
        Artisan::call('migrate', ['--path' => 'packages/tifoysal/bangladesh-universities/src/Migrations']);
        $this->info('Database successfully migrated');

        $this->info('Seeding Universities List');
        Artisan::call('db:seed', array('--class' => 'Tifoysal\BangladeshUniversities\Seeders\UniversitiesTableSeeder'));

        $this->info('Publishing service provider..');
        Artisan::call('vendor:publish', array('--provider' => 'Tifoysal\BangladeshUniversities\BangladeshUniversitiesServiceProvider'));
        $this->info('Setup Successful');
    }
}


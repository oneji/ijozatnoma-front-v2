<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\File;

class CreateServiceClass extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:service {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to create a basic service class';

    /**
     * Filesystem instance
     * 
     * @var string
     */
    protected $filesystem;

    /**
     * Default folder
     * 
     * @var string
     */
    protected $folder = 'App\Http\Services';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Filesystem $filesystem)
    {
        parent::__construct();

        $this->filesystem = $filesystem;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // Get the service name
        $this->serviceName = $this->argument('name');

        // Check if the folder exists
        if(!File::exists($this->folder)) {
            File::makeDirectory($this->folder);
        }

        // Check if the service class already created
        if ($this->filesystem->exists(app_path("Http/Services/{$this->serviceName}.php"))){
            return $this->error('The given service already exists!');
        }

        $this->createFile(
            app_path('Console/Stubs/DummyService.stub'),
            app_path("Http/Services/{$this->serviceName}.php")
        );

        $this->info('Service class ' . $this->serviceName . ' created.');
    }

    /**
     * Create service class file
     * 
     * @param  string $dummy        
     * @param  string $destinationPath
     * @return void
     */
    protected function createFile($dummySource, $destinationPath)
    {
        $dummyService = $this->filesystem->get($dummySource);
        $serviceContent = str_replace('DummyService', $this->serviceName, $dummyService);
        $this->filesystem->put($dummySource, $serviceContent);
        $this->filesystem->copy($dummySource, $destinationPath);
        $this->filesystem->put($dummySource, $dummyService);
    }
}

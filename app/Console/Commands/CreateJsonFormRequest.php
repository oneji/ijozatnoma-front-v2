<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\File;

class CreateJsonFormRequest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:json-request {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to create JSON form request class';

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
    protected $folder = 'App\Http\JsonRequests';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(FileSystem $filesystem)
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
        // Get the form request class name
        $this->requestName = $this->argument('name');
        
        // Check if the folder exists
        if(!File::exists($this->folder)) {
            File::makeDirectory($this->folder);
        }

        // Check if the service class already created
        if ($this->filesystem->exists(app_path("Http/JsonRequests/{$this->requestName}.php"))){
            return $this->error('The given json form request class already exists!');
        }

        $this->createFile(
            app_path('Console/Stubs/DummyJsonRequest.stub'),
            app_path("Http/JsonRequests/{$this->requestName}.php")
        );

        $this->info('JSON form request class ' . $this->requestName . ' created.');
    }

    /**
     * Create json form request class file
     * 
     * @param  string $dummySource
     * @param  string $destinationPath
     * @return void
     */
    protected function createFile($dummySource, $destinationPath)
    {
        $dummyJsonRequest = $this->filesystem->get($dummySource);
        $jsonRequestContent = str_replace('DummyJsonRequest', $this->requestName, $dummyJsonRequest);
        $this->filesystem->put($dummySource, $jsonRequestContent);
        $this->filesystem->copy($dummySource, $destinationPath);
        $this->filesystem->put($dummySource, $dummyJsonRequest);
    }
}

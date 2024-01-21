<?php 

namespace Commands;

use Core\Helper;
use Illuminate\Console\GeneratorCommand;

use Illuminate\Support\Str;



class MakeControllerCommand extends GeneratorCommand
{

    public $rootNamespace = 'App\Http\Controllers';

    protected $name = 'make:controller';


    protected $description = 'Create a new a class';

    protected $type = 'class';


    protected function getStub()
    {

        return Helper::base_path('storage/stubs/MakeController.stub');

        // return dirname(__DIR__) .'/';
    }

    protected function userProviderModel() {}

    protected function rootNamespace()
    {
        return $this->rootNamespace;
    }

    protected function getDefaultNamespace($rootNamespace)
    {

        // dd($rootNamespace);
        
        return $rootNamespace;
    }

    protected function getPath($name)
    {
        $name = Str::replaceFirst($this->rootNamespace(), '', $name);

        return dirname(__DIR__). '/app/Http/Controllers'.str_replace('\\', '/', $name).'.php';
    }

}
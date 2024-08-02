<?php

namespace Mutane\VueTable\Commands;

use Illuminate\Console\GeneratorCommand;

class GenerateTableCommand extends GeneratorCommand
{
    protected $signature = 'table:vue-generate {name}';

    protected $description = 'Generate a new table class';

    protected $type = 'Vue Inertia Table';


    protected function getStub(): string
    {
        return __DIR__.'/../../stubs/table.stub';
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace.'\Tables';
    }

    protected function buildClass($name): string
    {
        $stub = parent::buildClass($name);
        return str_replace(array('DummyNamespace', 'DummyClass'), array($this->getNamespace($name), $this->getNameInput()), $stub);
    }

}

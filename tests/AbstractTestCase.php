<?php namespace Code\CodeTag\Tests;

use Orchestra\Testbench\TestCase;

Abstract Class AbstractTestCase extends TestCase
{

    public function migrate()
    {
        $this->artisan('migrate',['--realpath' => realpath(__DIR__.'/../src/Resources/Migrations')]);
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        // Setup default database to use sqlite :memory:
        $app['config']->set('database.default', 'testbench');
        $app['config']->set('database.connections.testbench', [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ]);
    }


    public function getPackageProviders($app)
    {
        return  [
            \Orchestra\Database\ConsoleServiceProvider::class,
        ];
    }
}
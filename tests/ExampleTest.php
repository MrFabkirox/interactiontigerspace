<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Due to my current interrest to php');
    }

    public function testForm()
    {
        $this->visit('/page2')
             ->type('something', '#name')
             ->press('say it')
             ->see('something')
             ->onPage('/page2back');
    }
}

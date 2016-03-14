<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class primoTest extends TestCase
{
    public function testBasicExample()
    {
       $this->visit('/membri/atoli16');
    }
}

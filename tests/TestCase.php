<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function setUp()
    {
    	parent::setUp();
        config([
        	'mailcare.auth' => false,
        	'mailcare.automations' => false,
        ]);
    }
}

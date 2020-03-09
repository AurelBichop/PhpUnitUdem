<?php

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

class UserTest extends TestCase
{
    public function testReturnsFullName()
    {

        $user = new User();

        $user->first_name = "Raphaëlle";
        $user->surname = "Baker";

        $this->assertEquals("Raphaëlle Baker", $user->getFullName());
    }

    public function testFullNameIsEmptyByDefault()
    {
        $user = new User();
        $this->assertEquals("", $user->getFullName());
    }
}

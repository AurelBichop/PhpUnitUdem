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

    public function testNotificationIsSent()
    {
        $user = new User();

        $mock_mailer = $this->createMock(Mailer::class);

        $mock_mailer
            ->expects($this->once())
            ->method('sendMessage')
            ->with($this->equalTo('adrien.bb@exemple.com'), $this->equalTo('i love you'))
            ->willReturn(true);

        $user->setMailer($mock_mailer);

        $user->email = 'adrien.bb@exemple.com';

        $this->assertTrue($user->notify("i love you"));
    }

    public function testCanNotifyUserWithNoEmail()
    {
        $user = new User;
        $mock_mailer = $this->getMockBuilder(Mailer::class)
            ->setMethods(null)
            ->getMock();

        $user->setMailer($mock_mailer);

        $this->expectException(Exception::class);

        $user->notify("Hello");
    }
}

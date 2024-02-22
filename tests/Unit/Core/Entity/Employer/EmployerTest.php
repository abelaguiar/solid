<?php

declare(strict_types=1);

namespace Tests\Unit\Core\Entity\Employer;

use PHPUnit\Framework\TestCase;
use Solid\Core\Entity\Employer\Employer;
use Solid\Core\Entity\Employer\Type\LegalPerson;
use Solid\Core\Entity\Employer\Type\PhysicalPerson;
use Solid\Core\Entity\Employer\Type\Trainee;

class EmployerTest extends TestCase
{
    public function testInitClassForTypeLegalPerson() : void
    {
        $expected = [
            'name' => 'Test',
            'email' => 'test@mail.com',
            'type' => (new LegalPerson())
        ];

        $employer = new Employer(
            $expected['name'],
            $expected['email'],
            $expected['type']
        );

        $this->assertEquals($expected['name'], $employer->getName());
        $this->assertIsString($employer->getName());
        $this->assertEquals($expected['email'], $employer->getEmail());
        $this->assertIsString($employer->getEmail());
        $this->assertEquals($expected['type'], $employer->getType());
        $this->assertInstanceOf(LegalPerson::class, $employer->getType());
    }

    public function testInitClassForTypePhysicalPerson() : void
    {
        $expected = [
            'name' => 'Test',
            'email' => 'test@mail.com',
            'type' => (new PhysicalPerson())
        ];

        $employer = new Employer(
            $expected['name'],
            $expected['email'],
            $expected['type']
        );

        $this->assertEquals($expected['name'], $employer->getName());
        $this->assertIsString($employer->getName());
        $this->assertEquals($expected['email'], $employer->getEmail());
        $this->assertIsString($employer->getEmail());
        $this->assertEquals($expected['type'], $employer->getType());
        $this->assertInstanceOf(PhysicalPerson::class, $employer->getType());
    }

    public function testInitClassForTypeTrainee() : void
    {
        $expected = [
            'name' => 'Test',
            'email' => 'test@mail.com',
            'type' => (new Trainee())
        ];

        $employer = new Employer(
            $expected['name'],
            $expected['email'],
            $expected['type']
        );

        $this->assertEquals($expected['name'], $employer->getName());
        $this->assertIsString($employer->getName());
        $this->assertEquals($expected['email'], $employer->getEmail());
        $this->assertIsString($employer->getEmail());
        $this->assertEquals($expected['type'], $employer->getType());
        $this->assertInstanceOf(Trainee::class, $employer->getType());
    }
}
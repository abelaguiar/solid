<?php

declare(strict_types=1);

namespace Test\Unit\Core\Entity\Employer\Type;

use PHPUnit\Framework\TestCase;
use Solid\Core\Entity\Employer\Type\PhysicalPerson;

class PhysicalPersonTest extends TestCase
{
    public function testConstants() : void
    {
        $class = new \ReflectionClass(PhysicalPerson::class);
        $this->assertArrayHasKey('NAME', $class->getConstants());
        $this->assertArrayHasKey('SALARY', $class->getConstants());
    }

    public function testConstantsValues() : void
    {
        $expected = [
            'name' => 'PHYSICAL PERSON',
            'salary' => 2500
        ];

        $physicalPerson = new PhysicalPerson();

        $this->assertEquals($expected['name'], $physicalPerson->getName());
        $this->assertEquals($expected['salary'], $physicalPerson->getSalary());
    }

    public function testConstantsValuesFails() : void
    {
        $expected = [
            'name' => 'PHYSICAL PERSON FAIL',
            'salary' => 300000
        ];

        $physicalPerson = new PhysicalPerson();

        $this->assertNotEquals($expected['name'], $physicalPerson->getName());
        $this->assertNotEquals($expected['salary'], $physicalPerson->getSalary());
    }
}
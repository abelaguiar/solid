<?php

declare(strict_types=1);

namespace Test\Unit\Core\Entity\Employer\Type;

use PHPUnit\Framework\TestCase;
use Solid\Core\Entity\Employer\Type\LegalPerson;

class LegalPersonTest extends TestCase
{
    public function testConstants() : void
    {
        $class = new \ReflectionClass(LegalPerson::class);
        $this->assertArrayHasKey('NAME', $class->getConstants());
        $this->assertArrayHasKey('SALARY', $class->getConstants());
    }

    public function testConstantsValues() : void
    {
        $expected = [
            'name' => 'LEGAL PERSON',
            'salary' => 5000
        ];

        $legalPerson = new LegalPerson();

        $this->assertEquals($expected['name'], $legalPerson->getName());
        $this->assertEquals($expected['salary'], $legalPerson->getSalary());
    }

    public function testConstantsValuesFails() : void
    {
        $expected = [
            'name' => 'LEGAL PERSON FAIL',
            'salary' => 5233000
        ];

        $legalPerson = new LegalPerson();

        $this->assertNotEquals($expected['name'], $legalPerson->getName());
        $this->assertNotEquals($expected['salary'], $legalPerson->getSalary());
    }
}
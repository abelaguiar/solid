<?php

declare(strict_types=1);

namespace Tests\Unit\Core\Entity\Employer\Type;

use PHPUnit\Framework\TestCase;
use Solid\Core\Entity\Employer\Type\Trainee;

class TraineeTest extends TestCase
{
    public function testConstants() : void
    {
        $class = new \ReflectionClass(Trainee::class);
        $this->assertArrayHasKey('NAME', $class->getConstants());
        $this->assertArrayHasKey('SALARY', $class->getConstants());
    }

    public function testConstantsValues() : void
    {
        $expected = [
            'name' => 'TRAINEE',
            'salary' => 1000
        ];

        $trainee = new Trainee();

        $this->assertEquals($expected['name'], $trainee->getName());
        $this->assertEquals($expected['salary'], $trainee->getSalary());
    }

    public function testConstantsValuesFails() : void
    {
        $expected = [
            'name' => 'TRAINEE FAIL',
            'salary' => 323223
        ];

        $trainee = new Trainee();

        $this->assertNotEquals($expected['name'], $trainee->getName());
        $this->assertNotEquals($expected['salary'], $trainee->getSalary());
    }
}
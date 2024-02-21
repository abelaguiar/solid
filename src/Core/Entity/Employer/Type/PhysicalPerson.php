<?php

declare(strict_types=1);

namespace Solid\Core\Entity\Employer\Type;

use Solid\Core\Entity\Employer\Interface\EmployerTypeInterface;

class PhysicalPerson implements EmployerTypeInterface
{
    CONST NAME = 'PHYSICAL PERSON';
    CONST SALARY = 2500;

    public function getName(): string
    {
        return self::NAME;
    }

    public function getSalary(): float
    {
        return self::SALARY;
    }
}
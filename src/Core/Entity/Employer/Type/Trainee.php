<?php

declare(strict_types=1);

namespace Solid\Core\Entity\Employer\Type;

use Solid\Core\Entity\Employer\Interface\EmployerTypeInterface;

class Trainee implements EmployerTypeInterface
{
    CONST NAME = 'TRAINEE';
    CONST SALARY = 1000;

    public function getName(): string
    {
        return self::NAME;
    }

    public function getSalary(): float
    {
        return self::SALARY;
    }
}
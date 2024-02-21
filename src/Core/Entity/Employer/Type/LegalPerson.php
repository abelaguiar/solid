<?php

declare(strict_types=1);

namespace Solid\Core\Entity\Employer\Type;

use Solid\Core\Entity\Employer\Interface\EmployerTypeInterface;

class LegalPerson implements EmployerTypeInterface
{
    CONST NAME = 'LEGAL PERSON';
    CONST SALARY = 5000;

    public function getName(): string
    {
        return self::NAME;
    }

    public function getSalary(): float
    {
        return self::SALARY;
    }
}
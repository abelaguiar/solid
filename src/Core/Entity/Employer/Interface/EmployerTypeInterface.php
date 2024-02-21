<?php

declare(strict_types=1);

namespace Solid\Core\Entity\Employer\Interface;

interface EmployerTypeInterface
{
    public function getName(): string;
    public function getSalary(): float;
}
<?php

declare(strict_types=1);

namespace Solid\Core\Entity\Employer;

use Solid\Core\Entity\Employer\Interface\EmployerTypeInterface;

class Employer
{
    private string $name;

    private string $email;

    private EmployerTypeInterface $type;

    public function __construct(
        string $name,
        string $email,
        EmployerTypeInterface $type
    ) {
        $this->name = $name;
        $this->email = $email;
        $this->type = $type;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getType(): EmployerTypeInterface
    {
        return $this->type;
    }
}
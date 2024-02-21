<?php

declare(strict_types=1);

namespace Solid\Core\Model;

use Solid\Core\Entity\Employer\Employer;

class PaymentEmployerModel
{
    private Employer $employer;
    private bool $paid;

    public function __construct(
        Employer $employer, 
        bool $paid
    ) {
        $this->employer = $employer;
        $this->paid = $paid;
    }

    public function getEmployer(): Employer
    {
        return $this->employer;
    }

    public function getPaid(): bool
    {
        return $this->paid;
    }
}
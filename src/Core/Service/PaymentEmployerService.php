<?php

declare(strict_types=1);

namespace Solid\Core\Service;

use Solid\Core\Entity\Employer\Employer;
use Solid\Core\Model\PaymentEmployerModel;

class PaymentEmployerService
{
    public function paySalary(Employer $employer): PaymentEmployerModel
    {
        $salary = $employer->getType()->getSalary();

        //Logic payments salary

        return new PaymentEmployerModel(
            $employer,
            true
        );
    }
}
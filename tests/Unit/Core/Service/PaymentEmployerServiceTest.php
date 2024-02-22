<?php

declare(strict_types=1);

namespace Tests\Unit\Core\Service;

use PHPUnit\Framework\TestCase;
use Solid\Core\Entity\Employer\Employer;
use Solid\Core\Entity\Employer\Type\LegalPerson;
use Solid\Core\Model\PaymentEmployerModel;
use Solid\Core\Service\PaymentEmployerService;

class PaymentEmployerServiceTest extends TestCase
{
    public function testPaySalary() : void
    {
        $expected = [
            'name' => 'Test',
            'email' => 'test@mail.com',
            'type' => (new LegalPerson())
        ];

        $employer = new Employer(
            $expected['name'],
            $expected['email'],
            $expected['type']
        );

        $service = new PaymentEmployerService();

        $paymentEmployerModel = $service->paySalary($employer);

        $this->assertInstanceOf(PaymentEmployerModel::class, $paymentEmployerModel);
        $this->assertEquals($paymentEmployerModel->getEmployer()->getName(), $expected['name']);
        $this->assertEquals($paymentEmployerModel->getEmployer()->getEmail(), $expected['email']);
        $this->assertInstanceOf(LegalPerson::class, $paymentEmployerModel->getEmployer()->getType());
        $this->assertEquals($paymentEmployerModel->getEmployer()->getType()->getSalary(), 5000);
    }
}
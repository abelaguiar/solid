<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Solid\Core\Entity\Employer\Employer;
use Solid\Core\Entity\Employer\Type\LegalPerson;
use Solid\Core\Entity\Employer\Type\PhysicalPerson;
use Solid\Core\Entity\Employer\Type\Trainee;
use Solid\Core\Service\PaymentEmployerService;

$employerLegalPerson = new Employer(
    'Person One',
    'test.one@mail.com',
    (new LegalPerson())
);

$employerPhysicalPerson = new Employer(
    'Person Two',
    'test.two@mail.com',
    (new PhysicalPerson())
);

$employerTrainee = new Employer(
    'Person Three',
    'test.three@mail.com',
    (new Trainee())
);

$service = new PaymentEmployerService();

$service->paySalary($employerLegalPerson);
$service->paySalary($employerPhysicalPerson);
$service->paySalary($employerTrainee);

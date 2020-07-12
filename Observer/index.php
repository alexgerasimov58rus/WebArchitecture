<?php

require_once 'vacancy/IVacancyListener.php';
require_once 'vacancy/VacancyManager.php';
require_once 'vacancy/JavaVacancy.php';
require_once 'vacancy/PhpVacancy.php';

require_once 'seekers/Seeker.php';
require_once 'seekers/JuniorSeeker.php';
require_once 'seekers/MiddleSeeker.php';

$phpVacancy = new PhpVacancy();
$javaVacancy = new JavaVacancy();

$juniorSeeker = new JuniorSeeker("Alex", "1@ru", 0);
$middleSeeker = new MiddleSeeker("Ivan", "2@ru", 1);

$juniorSeeker->subscribe($phpVacancy);
$juniorSeeker->subscribe($javaVacancy);
$middleSeeker->subscribe($phpVacancy);
$middleSeeker->subscribe($javaVacancy);

$phpVacancy->updateVacancies();
$javaVacancy->updateVacancies();

echo "//-------------------------------------" . PHP_EOL;
$juniorSeeker->unsubscribe($phpVacancy);
$middleSeeker->unsubscribe($phpVacancy);

$phpVacancy->updateVacancies();
$javaVacancy->updateVacancies();



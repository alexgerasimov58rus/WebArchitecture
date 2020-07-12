<?php


class JuniorSeeker extends Seeker
{
    public function __construct(string $name, string $email, int $experience)
    {
        parent::__construct($name, $email, $experience);
    }

    public function update(VacancyManager $vacancy)
    {
        foreach ($vacancy->getVacancies() as $description => $salary){
            //Junior разработчику интересна любая вакансия
            echo "Junior разработчик $this->name готовит резюме на вакансию $description" . PHP_EOL;
        }
    }
}
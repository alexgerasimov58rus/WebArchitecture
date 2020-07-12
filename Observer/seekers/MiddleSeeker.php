<?php


class MiddleSeeker extends Seeker
{
    public function __construct(string $name, string $email, int $experience)
    {
        parent::__construct($name, $email, $experience);
    }

    public function update(VacancyManager $vacancy)
    {
        foreach ($vacancy->getVacancies() as $description => $salary){
            //Middle разработчику интересна вакансия от 200$
            if( $salary >= 200){
                echo "Middle разработчик $this->name готовит резюме на вакансию $description" . PHP_EOL;
            }
        }
    }
}
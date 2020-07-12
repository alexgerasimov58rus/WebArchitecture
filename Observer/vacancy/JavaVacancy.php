<?php


class JavaVacancy extends VacancyManager
{
    public function updateVacancies()
    {
        $this->vacancies = [];
        echo "проверяем БД на обновленные вакансии по Java" . PHP_EOL;
        //  и находим одну
        $this->vacancies = [
            "Java developer in 'Samsung phones' company" => 220  // фирма, зарплата в $
        ];

        if( count($this->vacancies) > 0)  $this->notify();
    }
}
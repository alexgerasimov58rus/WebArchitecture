<?php


class PhpVacancy extends VacancyManager
{
    public function updateVacancies()
    {
        $this->vacancies = [];
        echo "проверяем БД на обновленные вакансии по PHP" . PHP_EOL;
        //  и находим две вакансии
        $this->vacancies = [
            "PHP developer in 'Nike shops' company" => 150, // фирма, зарплата в $
            "PHP developer in 'Alpha bank' company" => 250
        ];

        if( count($this->vacancies) > 0)  $this->notify();
    }
}
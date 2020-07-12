<?php


abstract class Seeker implements IVacancyListener
{
    protected $name = "";
    protected $email= "";
    protected $experience = 0;

    /**
     * Seeker constructor.
     * @param string $name
     * @param string $email
     * @param int $experience
     */
    public function __construct(string $name, string $email, int $experience)
    {
        $this->name = $name;
        $this->email = $email;
        $this->experience = $experience;
    }

    // Мне кажется, так выглядит логичней.
    // Когда пользователи сами подписываются на события (и отписываются)

    public function subscribe(VacancyManager $vacancy){
        $vacancy->addListener($this);
    }

    public function unsubscribe(VacancyManager $vacancy){
        $vacancy->removeListener($this);
    }
}
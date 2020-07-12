<?php


abstract class VacancyManager
{
    protected $listeners = [];
    protected $vacancies = [];

    /**
     * @return array
     */
    public function getVacancies(): array
    {
        return $this->vacancies;
    }

    public function addListener(IVacancyListener $listener){
        if(!in_array($listener, $this->listeners)){
            $this->listeners[] = $listener;
        }
    }

    public function removeListener(IVacancyListener $listener){
        $ind = array_search($listener, $this->listeners);
        if( $ind !== FALSE){
            array_splice($this->listeners, $ind, 1);
        }
    }

    protected function notify(){
        foreach ($this->listeners as $listener){
            $listener->update($this);
        }
    }

    public abstract function updateVacancies();
}
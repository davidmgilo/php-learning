<?php

/*
 * POPO: Plain Old PHP Object | Contenedor de tasques | Model
 * Només emmagatzema una tasca.
 */

namespace Davidmgilo\Phplearning;

class Task {

    public $description;

    public $completed;

    public function __construct($description,$completed)
    {
        $this->description = $description;
        $this->completed = $completed;
    }
//MËTODES. No funcions!!
    public function complete(){
        $this->completed = true;
    }

    public function description ($description){
        $this->description = $description;
    }

    public function isComplete(){
        return $this->completed;
    }

}


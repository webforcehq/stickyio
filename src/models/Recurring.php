<?php

namespace WebforceHQ\Stickyio\Models;

class Recurring extends StickyioModel
{

    protected $cycle_type_id;
    protected $terminating_cycle_type_id;
    


    /**
     * Get the value of terminating_cycle_type_id
     */ 
    public function getTerminatingCycleTypeId()
    {
        return $this->terminating_cycle_type_id;
    }

    /**
     * Set the value of terminating_cycle_type_id
     *
     * @return  self
     */ 
    public function setTerminatingCycleTypeId(int $terminating_cycle_type_id)
    {
        $this->terminating_cycle_type_id = $terminating_cycle_type_id;

        return $this;
    }

    /**
     * Get the value of cycle_type_id
     */ 
    public function getCycleTypeId()
    {
        return $this->cycle_type_id;
    }

    /**
     * Set the value of cycle_type_id
     *
     * @return  self
     */ 
    public function setCycleTypeid(int $cycle_type_id)
    {
        $this->cycle_type_id = $cycle_type_id;

        return $this;
    }
}

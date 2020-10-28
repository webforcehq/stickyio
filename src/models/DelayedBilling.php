<?php

namespace WebforceHQ\Stickyio\Models;

class DelayedBilling extends StickyioModel
{

    protected $days;
    protected $price;
    protected $default_days;
    protected $is_custom_price;
    


    /**
     * Get the value of days
     */ 
    public function getDays()
    {
        return $this->days;
    }

    /**
     * Set the value of days
     *
     * @return  self
     */ 
    public function setDays(int $days)
    {
        $this->days = $days;

        return $this;
    }

    /**
     * Get the value of is_custom_price
     */ 
    public function getIsCustomPrice()
    {
        return $this->is_custom_price;
    }

    /**
     * Set the value of is_custom_price
     *
     * @return  self
     */ 
    public function setIsCustomPrice($is_custom_price)
    {
        $this->is_custom_price = $is_custom_price;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice(float $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of default_days
     */ 
    public function getDefaultDays()
    {
        return $this->default_days;
    }

    /**
     * Set the value of default_days
     *
     * @return  self
     */ 
    public function setDefaultDays(int $default_days)
    {
        $this->default_days = $default_days;

        return $this;
    }
}

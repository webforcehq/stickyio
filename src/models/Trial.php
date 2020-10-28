<?php

namespace WebforceHQ\Stickyio\Models;

class Trial extends StickyioModel
{

    protected $days;
    protected $price;
    protected $is_custom_price;
    protected $delayed_billing;
    protected $is_custom_duration;
    protected $is_delayed_billing;


    /**
     * Get the value of is_custom_duration
     */ 
    public function getIsCustomDuration()
    {
        return $this->is_custom_duration;
    }

    /**
     * Set the value of is_custom_duration
     *
     * @return  self
     */ 
    public function setIsCustomDuration(int $is_custom_duration)
    {
        $this->is_custom_duration = $is_custom_duration;

        return $this;
    }

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
    public function setIsCustomPrice(bool $is_custom_price)
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
     * Get the value of is_delayed_billing
     */ 
    public function getIsDelayedBilling()
    {
        return $this->is_delayed_billing;
    }

    /**
     * Set the value of is_delayed_billing
     *
     * @return  self
     */ 
    public function setIsDelayedBilling(bool $is_delayed_billing)
    {
        $this->is_delayed_billing = $is_delayed_billing;

        return $this;
    }

    /**
     * Get the value of delayed_billing
     */ 
    public function getDelayedBilling()
    {
        return $this->delayed_billing;
    }

    /**
     * Set the value of delayed_billing
     *
     * @return  self
     */ 
    public function setDelayedBilling(DelayedBilling $delayed_billing)
    {
        $this->delayed_billing = $delayed_billing;

        return $this;
    }
}

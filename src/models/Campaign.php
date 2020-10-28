<?php

namespace WebforceHQ\Stickyio\Models;

class Campaign extends StickyioModel
{
    protected $id;
    protected $name;
    protected $offers;
    protected $countries;
    protected $channel_id;
    protected $gateway_id;
    protected $description;
    protected $payment_methods;
    protected $return_profiles;
    protected $coupon_profiles;
    protected $shipping_profiles;
    protected $postback_profiles;
    protected $is_prepaid_blocked;

    public function __construct()
    {

    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription(string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of is_prepaid_blocked
     */ 
    public function getIsPrepaidBlocked()
    {
        return $this->is_prepaid_blocked;
    }

    /**
     * Set the value of is_prepaid_blocked
     *
     * @return  self
     */ 
    public function setIsPrepaidBlocked(bool $is_prepaid_blocked)
    {
        $this->is_prepaid_blocked = $is_prepaid_blocked;

        return $this;
    }

    /**
     * Get the value of channel_id
     */ 
    public function getChannelId()
    {
        return $this->channel_id;
    }

    /**
     * Set the value of channel_id
     *
     * @return  self
     */ 
    public function setChannelId(int $channel_id)
    {
        $this->channel_id = $channel_id;

        return $this;
    }

    /**
     * Get the value of gateway_id
     */ 
    public function getGatewayId()
    {
        return $this->gateway_id;
    }

    /**
     * Set the value of gateway_id
     *
     * @return  self
     */ 
    public function setGatewayId(int $gateway_id)
    {
        $this->gateway_id = $gateway_id;

        return $this;
    }

    /**
     * Get the value of payment_methods
     */ 
    public function getPaymentMethods()
    {
        return $this->payment_methods;
    }

    /**
     * Set the value of payment_methods
     *
     * @return  self
     */ 
    public function setPaymentMethods(array $payment_methods)
    {
        $this->payment_methods = $payment_methods;

        return $this;
    }

    /**
     * Get the value of offers
     */ 
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * Set the value of offers
     *
     * @return  self
     */ 
    public function setOffers(array $offers)
    {
        $this->offers = $offers;

        return $this;
    }

    /**
     * Get the value of countries
     */ 
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * Set the value of countries
     *
     * @return  self
     */ 
    public function setCountries(array $countries)
    {
        $this->countries = $countries;

        return $this;
    }

    /**
     * Get the value of shipping_profiles
     */ 
    public function getShippingProfiles()
    {
        return $this->shipping_profiles;
    }

    /**
     * Set the value of shipping_profiles
     *
     * @return  self
     */ 
    public function setShippingProfiles(array $shipping_profiles)
    {
        $this->shipping_profiles = $shipping_profiles;

        return $this;
    }

    /**
     * Get the value of return_profiles
     */ 
    public function getReturnProfiles()
    {
        return $this->return_profiles;
    }

    /**
     * Set the value of return_profiles
     *
     * @return  self
     */ 
    public function setReturnProfiles(array $return_profiles)
    {
        $this->return_profiles = $return_profiles;

        return $this;
    }

    /**
     * Get the value of coupon_profiles
     */ 
    public function getCouponProfiles()
    {
        return $this->coupon_profiles;
    }

    /**
     * Set the value of coupon_profiles
     *
     * @return  self
     */ 
    public function setCouponProfiles(array $coupon_profiles)
    {
        $this->coupon_profiles = $coupon_profiles;

        return $this;
    }

    /**
     * Get the value of postback_profiles
     */ 
    public function getPostbackProfiles()
    {
        return $this->postback_profiles;
    }

    /**
     * Set the value of postback_profiles
     *
     * @return  self
     */ 
    public function setPostbackProfiles(array $postback_profiles)
    {
        $this->postback_profiles = $postback_profiles;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}

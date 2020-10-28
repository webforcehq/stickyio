<?php

namespace WebforceHQ\Stickyio\Models;

class Offer extends StickyioModel
{

    
    protected $name;
    protected $price;
    protected $trial;
    protected $variant;
    protected $isTrial;
    protected $offer_id;
    protected $position;
    protected $quantity;
    protected $children;
    protected $step_num;
    protected $products;
    protected $recurring;
    protected $product_id;
    protected $prepaid_cycles;
    protected $preserve_price;
    protected $billing_models;
    protected $billing_model_id;
    protected $offer_configuration_id;


    /**
     * Attributes for the Offer Request to Sticky.io
     */   
    public function __construct()
    {

    }


    /**
     * Get the value of offer_configuration_id
     */ 
    public function getOfferConfigurationId()
    {
        return $this->offer_configuration_id;
    }

    /**
     * Set the value of offer_configuration_id
     *
     * @return  self
     */ 
    public function setOfferConfigurationId($offer_configuration_id)
    {
        $this->offer_configuration_id = $offer_configuration_id;

        return $this;
    }

    /**
     * Get the value of offer_id
     */ 
    public function getOfferId()
    {
        return $this->offer_id;
    }

    /**
     * Set the value of offer_id
     *
     * @return  self
     */ 
    public function setOfferId($offer_id)
    {
        $this->offer_id = $offer_id;

        return $this;
    }

    /**
     * Get the value of billing_model_id
     */ 
    public function getBillingModelId()
    {
        return $this->billing_model_id;
    }

    /**
     * Set the value of billing_model_id
     *
     * @return  self
     */ 
    public function setBillingModelId(int $billing_model_id)
    {
        $this->billing_model_id = $billing_model_id;

        return $this;
    }

    /**
     * Get the value of product_id
     */ 
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * Set the value of product_id
     *
     * @return  self
     */ 
    public function setProductId($product_id)
    {
        $this->product_id = $product_id;

        return $this;
    }

    /**
     * Get the value of position
     */ 
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set the value of position
     *
     * @return  self
     */ 
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get the value of prepaid_cycles
     */ 
    public function getPrepaidCycles()
    {
        return $this->prepaid_cycles;
    }

    /**
     * Set the value of prepaid_cycles
     *
     * @return  self
     */ 
    public function setPrepaidCycles($prepaid_cycles)
    {
        $this->prepaid_cycles = $prepaid_cycles;

        return $this;
    }

    /**
     * Get the value of quantity
     */ 
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     *
     * @return  self
     */ 
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

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
     * Get the value of variant
     */ 
    public function getVariant()
    {
        return $this->variant;
    }

    /**
     * Set the value of variant
     *
     * @return  self
     */ 
    public function setVariant(array $variant)
    {
        $this->variant = $variant;

        return $this;
    }

    /**
     * Get the value of preserve_price
     */ 
    public function getPreservePrice()
    {
        return $this->preserve_price;
    }

    /**
     * Set the value of preserve_price
     *
     * @return  self
     */ 
    public function setPreservePrice(int $preserve_price)
    {
        $this->preserve_price = $preserve_price;

        return $this;
    }

    /**
     * Get the value of children
     */ 
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set the value of children
     *
     * @return  self
     */ 
    public function setChildren(array $children)
    {
        $this->children = $children;

        return $this;
    }


    /**
     * Get the value of step_num
     */ 
    public function getStepNum()
    {
        return $this->step_num;
    }

    /**
     * Set the value of step_num
     *
     * @return  self
     */ 
    public function setStepNum($step_num)
    {
        $this->step_num = $step_num;

        return $this;
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
     * Get the value of billing_models
     */ 
    public function getBillingModels()
    {
        return $this->billing_models;
    }

    /**
     * Set the value of billing_models
     *
     * @return  self
     */ 
    public function setBillingModels(array $billing_models)
    {
        
        $this->billing_models = $billing_models;

        return $this;
    }

    /**
     * Get the value of products
     */ 
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set the value of products
     *
     * @return  self
     */ 
    public function setProducts(array $products)
    {
        $this->products = $products;

        return $this;
    }

    /**
     * Get the value of recurring
     */ 
    public function getRecurring()
    {
        return $this->recurring;
    }

    /**
     * Set the value of recurring
     *
     * @return  self
     */ 
    public function setRecurring(Recurring $recurring)
    {

        $this->recurring = $recurring;

        return $this;
    }

    /**
     * Get the value of isTrial
     */ 
    public function getIsTrial()
    {
        return $this->isTrial;
    }

    /**
     * Set the value of isTrial
     *
     * @return  self
     */ 
    public function setIsTrial(bool $isTrial)
    {
        $this->isTrial = $isTrial;

        return $this;
    }

    /**
     * Get the value of trial
     */ 
    public function getTrial()
    {
        return $this->trial;
    }

    /**
     * Set the value of trial
     *
     * @return  self
     */ 
    public function setTrial(Trial $trial)
    {
        $this->trial = $trial;

        return $this;
    }
    
}

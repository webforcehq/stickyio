<?php

namespace WebforceHQ\Stickyio\Models;

use WebforceHQ\Stickyio\Models\StickyioModel;

class StickyCriteria extends StickyioModel
{

    protected $start_date;
    protected $end_date;
    protected $campaign_id;
    protected $criteria = 'all';
    protected $search_type = "any";
    

    

    /**
     * Get the value of startDate
     */ 
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * Set the value of startDate
     *
     * @return  self
     */ 
    public function setStartDate($startDate, $format = "m/d/y")
    {
        
        $this->start_date = date($format,strtotime($startDate));

        return $this;
    }

    /**
     * Get the value of endDate
     */ 
    public function getEndDate()
    {
        
        return $this->end_date;

    }

    /**
     * Set the value of endDate
     *
     * @return  self
     */ 
    public function setEndDate( string $endDate, $format = "m/d/y")
    {

        $this->end_date = date($format,strtotime($endDate));
        
        return $this;
    }

    /**
     * Get the value of campaignId
     */ 
    public function getCampaignId()
    {
        return $this->campaign_id;
    }

    /**
     * Set the value of campaignId
     *
     * @return  self
     */ 
    public function setCampaignId(int $campaignId)
    {
        $this->campaign_id = $campaignId;

        return $this;
    }

    /**
     * Get the value of criteria
     */ 
    public function getCriteria()
    {
        return $this->criteria;
    }

    /**
     * Set the value of criteria
     *
     * @return  self
     */ 
    public function setCriteria(array $criteria)
    {

        $this->criteria = $criteria;
        
        if( empty($criteria) || ! $criteria ){
            
            $this->criteria = "all";

        }

        return $this;
    }

    /**
     * Get the value of search_type
     */ 
    public function getSearch_type()
    {
        return $this->search_type;
    }

    /**
     * Set the value of search_type
     *
     * @return  self
     */ 
    public function setSearchType($search_type)
    {   
        $valid = ["any","all"];
        if( ! in_array($search_type,$valid) ){
            $search_type = 'any';
        }
        
        $this->search_type = $search_type;

        return $this;
    }

    public function setDynamicProperty($key, $value){
        
        $this->{$key} = $value;
        
        return $this;

    }


}

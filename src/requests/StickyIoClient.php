<?php

namespace WebforceHQ\Stickyio\Requests;
use WebforceHQ\Stickyio\Requests\OrderRequest;
use WebforceHQ\Stickyio\Requests\ValidateRequest;

class StickyIoClient
{
    protected $username;
    protected $password;
    protected $mainUrl;

    public function __construct($username, $password, $mainUrl)
    {
        $this->mainUrl   = $mainUrl;
        $this->username  = $username;
        $this->password  = $password;

    }    

    public function validateCredentials()
    {

        return (new ValidateRequest($this->username, $this->password, $this->mainUrl))->validateIdentity();
        
    }

    public function ordersApi()
    {
        
        return new OrderRequest($this->username, $this->password, $this->mainUrl);

    }
   
}

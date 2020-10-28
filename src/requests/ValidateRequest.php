<?php

namespace WebforceHQ\Stickyio\Requests;

use WebforceHQ\Stickyio\Requests\StickyIoRequest;

class ValidateRequest extends StickyIoRequest
{

    private const ENDPOINT = 'validate_credentials';
    
    public function __construct($username, $password, $url)
    {
       $this->url       = $url;
       $this->username  = $username;
       $this->password  = $password;
       $this->setUpHttpClient();
    }

    public function validateIdentity()
    {
        return $this->post($this->apiV1.self::ENDPOINT,[]);
    }

}

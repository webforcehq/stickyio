<?php

namespace WebforceHQ\Stickyio\Exceptions;

use Exception;

class StickyIoUnsetIdentifierException extends Exception
{

    protected $message = "Identifier (ID) element has not been set and is a required parameter";

    public function __construct($msg = null)
    {
        if ($msg) {
            $this->message = $msg;
        }
    }
}

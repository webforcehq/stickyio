<?php

namespace WebforceHQ\Stickyio\Exceptions;

use Exception;

class UpdateOrdersArrayEmpty extends Exception
{

    protected $message = "We need at least one order set to make an update request, any order has been set for updating";

    public function __construct($msg = null)
    {
        if ($msg) {
            $this->message = $msg;
        }
    }
}

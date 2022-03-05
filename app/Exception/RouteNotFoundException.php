<?php

namespace App\Exception;

use Exception;

class RouteNotFoundException extends Exception
{
    protected $message = "Cette route n'existe pas.";
}
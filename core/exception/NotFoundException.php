<?php

namespace app\core\exception;

use Exception;

class NotFoundException extends Exception
{
    protected $message = 'Page no found';
    protected $code = 404;

}
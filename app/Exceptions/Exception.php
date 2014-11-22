<?php namespace Asmr\Exceptions;

use \Exception as Base;

abstract class Exception extends Base  {

    public function __construct($message = '', $errors = [], $code = 0)
    {
        $this->errors = $errors;

        parent::__construct($message, $code);
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function getJson()
    {
        return json_encode($this->errors);
    }

}
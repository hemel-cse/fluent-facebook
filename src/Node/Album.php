<?php

namespace Iluminar\Fluent\Node;

use Iluminar\Fluent\Core\Node;
use Iluminar\Fluent\Core\Request;

/**
* This class represents a album in facebook graph api
*/
class Album extends Node
{
    public $id;
    public $endpoint;

    public function __construct($token, $id)
    {
        parent::setToken($token);
        $this->id = $id;
        $this->endpoint = $this->id;
    }

    public function __call($method, $parameters)
    {
        return $this->createClass($method);
    }
}
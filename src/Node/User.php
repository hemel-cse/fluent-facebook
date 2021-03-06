<?php

namespace Iluminar\Fluent\Node;

use Iluminar\Fluent\Core\Node;

/**
 * This class represents a user in facebook graph api.
 */
class User extends Node
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

    public function posts()
    {
        $this->endpoint .= '/'.__FUNCTION__;

        return $this;
    }

    public function feed()
    {
        $this->endpoint .= '/'.__FUNCTION__;

        return $this;
    }

    public function photos()
    {
        $this->endpoint .= '/'.__FUNCTION__;

        return $this;
    }

    public function albums()
    {
        $this->endpoint .= '/'.__FUNCTION__;

        return $this;
    }

    public function books()
    {
        $this->endpoint .= '/'.__FUNCTION__;

        return $this;
    }

    public function groups()
    {
        $this->endpoint .= '/'.__FUNCTION__;

        return $this;
    }

    public function likes()
    {
        $this->endpoint .= '/'.__FUNCTION__;

        return $this;
    }
}

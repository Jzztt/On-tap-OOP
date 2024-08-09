<?php

namespace Admin\OopPhp\Commons;

class Model
{
    protected $pdo;
    public function __construct()
    {
    }
    public function __destruct()
    {
        $this->pdo = null;
    }
}

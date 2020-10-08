<?php

namespace App\Repositories;

use Dotenv\Repository;

abstract class AbstractRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = $this->resolveModel();
    }

    protected function resolveModel()
    {
        return app($this->model);
    }

    public function all()
    {        
        return $this->model->all();
    }


}

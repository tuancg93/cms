<?php

namespace App\Repositories\User;

use App\Enums\CommonEnum;
use App\User;
use App\Repositories\AbstractBaseRepository;

/**
 * Class ExampleEloquentRepository
 * @package App\Repositories
 */
class UserEloquentRepository extends AbstractBaseRepository implements UserRepositoryInterface
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }
}
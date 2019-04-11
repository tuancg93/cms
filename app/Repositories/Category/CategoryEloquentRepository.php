<?php

namespace App\Repositories\Category;

use App\Models\CategoriesPackage;
use App\Models\Category;
use App\Models\Content;
use App\Models\Package;
use App\Repositories\AbstractBaseRepository;
use DB;
use Mockery\Exception;

/**
 * Class ExampleEloquentRepository
 * @package App\Repositories
 */
class CategoryEloquentRepository extends AbstractBaseRepository implements CategoryRepositoryInterface
{

    public function __construct(Category $model)
    {
        parent::__construct($model);
    }





}
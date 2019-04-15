<?php

namespace App\Repositories\Category;

use App\Enums\CommonEnum;
use App\Models\Category;
use App\Repositories\AbstractBaseRepository;

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

    public function changeStatus($cat_ids)
    {
        if (is_array($cat_ids))
            foreach ($cat_ids as $cat_id) {
                $check = $this->findOneById($cat_id);
                $update_param = [
                    'status' => $check->status == CommonEnum::active ? CommonEnum::deactive : CommonEnum::active
                ];
                $this->updateOneById($cat_id, $update_param);
            }

        return true;
    }
    public function search($search)
    {

        if(empty($search['s'])){
            $data = $this->paginate();
        }else{
            $data = $this->model->where('name',"like","%".$search['s']."%")->paginate();
        }

        return $data;
    }
    public function deleteManyByIds(array $ids)
    {
        foreach ($ids as $id){
            $this->deleteOneById($id);
            $this->updateManyBy('parent_id',$id,['parent_id' => CommonEnum::cat_parent]);
        }
        return true;
    }


}
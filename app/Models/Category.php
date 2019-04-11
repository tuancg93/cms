<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 31 Jul 2018 09:22:42 +0700.
 */

namespace App\Models;

use App\Models\BaseModel as Eloquent;

/**
 * Class Category
 * 
 * @property int $id
 * @property int $id_parent
 * @property string $category_name
 *
 * @package App\Models
 */
class Category extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'id_parent' => 'int'
	];
    public function group()
    {
        return $this->hasMany('App\Models\CategoriesPackage');
    }

	protected $fillable = [
		'id_parent',
		'category_name'
	];
}

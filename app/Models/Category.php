<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 31 Jul 2018 09:22:42 +0700.
 */

namespace App\Models;

use App\Models\BaseModel as Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;

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
    use SoftDeletes;
    public $timestamps = true;

    protected $table = 'categories';

    protected $fillable = [
        'name', 'parent_id', 'description', 'status', 'lang', 'image'
    ];
}

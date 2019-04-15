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
class Upload extends Eloquent
{
    use SoftDeletes;
    public $timestamps = true;

    protected $table = 'uploads';

    protected $fillable = [
        'id',
        'filename',
        'resized_name',
        'original_name',
        'created_at',
        'updated_at',

    ];
}

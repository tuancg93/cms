<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = true;

    protected $table = 'role';

    protected $fillable = [
        'id',
        'title',
        'created_at',
        'updated_at'
    ];

    public function permission(){
        return $this->belongsToMany(Permission::class,'role_permission','permission_id','role_id');
    }
}

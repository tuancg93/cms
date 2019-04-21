<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public $timestamps = true;

    protected $table = 'permission';

    protected $fillable = [
        'id',
        'title',
        'created_at',
        'updated_at'
    ];

    public function role(){
        return $this->belongsToMany(Role::class,'role_permission','permission_id','role_id');
    }
}

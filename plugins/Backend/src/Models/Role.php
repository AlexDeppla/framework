<?php

namespace AcmeCorp\Backend\Models;

use Nova\Database\ORM\Model as BaseModel;


class Role extends BaseModel
{
    protected $table = 'roles';

    protected $primaryKey = 'id';

    protected $fillable = array('name', 'slug', 'description');


    public function users()
    {
        return $this->hasMany('AcmeCorp\Backend\Models\User', 'role_id', 'id');
    }

}

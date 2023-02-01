<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Role extends Model
{
    //use HasFactory;

  public $table = 'role';

  protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
  ];

  protected $fillable = [
        'title',
        'created_at',
        'updated_at',
        'deleted_at',
  ];

  public function permissions_role()
  {
      return $this->hasMany('App\Models\ManagementAccess\PermissionsRole', 'role_id');
  }

  public function role_user()
  {
      return $this->hasMany('App\Models\ManagementAccess\RoleUser', 'role_id');
  }

}

<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Permissions extends Model
{
    //use HasFactory;

  public $table = 'permissions';

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
      return $this->hasMany('App\Models\ManagementAccess\PermissionsRole', 'permissions_id');
  }
}

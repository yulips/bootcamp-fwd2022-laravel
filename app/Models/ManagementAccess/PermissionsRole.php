<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class PermissionsRole extends Model
{
    //use HasFactory;

  public $table = 'permissions_role';

  protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
  ];

  protected $fillable = [
        'permissions_id',
        'role_id',
        'created_at',
        'updated_at',
        'deleted_at',
  ];
}

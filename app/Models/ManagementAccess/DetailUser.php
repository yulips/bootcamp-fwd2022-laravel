<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUser extends Model
{
  //use HasFactory;

  public $table = 'detail_user';

  protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
  ];

  protected $fillable = [
        'user_id',
        'type_user_id',
        'contact',
        'address',
        'photo',
        'gender',
        'created_at',
        'updated_at',
        'deleted_at',
  ];

  //function hasMany atau hasOne
  public function type_user()
  {
      //3 parameter('path', 'field fk', 'field pk from tabel hasMany/hasOne')
      return $this->belongsTo('App\Models\MasterData\TypeUser.php', 'type_user_id', 'id');
  }

  public function user()
  {
      return $this->belongsTo('App\Models\User', 'user_id', 'id');
  }
}

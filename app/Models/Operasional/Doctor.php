<?php

namespace App\Models\Operasional;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    //use HasFactory;

  public $table = 'doctor';

  protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
  ];

  protected $fillable = [
        'specialist_id',
        'name',
        'fee',
        'photo',
        'created_at',
        'updated_at',
        'deleted_at',
  ];

  public function specialist()
  {
      return $this->belongsTo('App\Models\MasterData\Specialist', 'specialist_id', 'id');
  }

  public function appointment()
  {
      return $this->hasMany('App\Models\Operasional\Appointment', 'doctor_id');
  }
}

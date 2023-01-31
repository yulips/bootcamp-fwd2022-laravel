<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Consultation extends Model
{
    //use HasFactory;

  public $table = 'consultation';

  protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
  ];

  protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
  ];

  public function appointment()
  {
      return $this->hasMany('App\Models\Operasional\Appointment.php', 'cosultation_id');
  }
}

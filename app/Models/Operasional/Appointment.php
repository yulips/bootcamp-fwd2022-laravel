<?php

namespace App\Models\Operasional;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    //use HasFactory;

  public $table = 'appointment';

  protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
  ];

  protected $fillable = [
        'doctor_id',
        'user_id',
        'consultation_id',
        'level',
        'date',
        'time',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
  ];

  public function doctor()
  {
      return $this->belongsTo('App\Models\Operasional\Doctor', 'doctor_id', 'id');
  }

  public function consultation()
  {
      return $this->belongsTo('App\Models\MasterData\Consultation', 'consultation_id', 'id');
  }  

  public function users()
  {
      return $this->belongsTo('App\Models\User.', 'user_id', 'id');
  }  

  public function transaction()
  {
      return $this->hasOne('App\Models\Operasional\Transaction', 'appointment_id');
  }

  

}

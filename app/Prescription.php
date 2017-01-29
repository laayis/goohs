<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Prescription extends Model
{
    protected $fillable = [
    'code', 'medicines', 'note', 'patient_id', 'appointment_id', 'procedure',
    'medicine1_id', 'medicine2_id', 'medicine3_id', 'medicine4_id', 'medicine5_id',
    'medicine6_id', 'med1_qty', 'med2_qty', 'med3_qty', 'med4_qty', 'med5_qty',
    'med6_qty', 'clinic_id'
    ];
    // Relationships
    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }

    public function appointment()
    {
        return $this->belongsTo('App\Appointment');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function medicine1()
    {
        return $this->belongsTo('App\Medicine', 'medicine1_id');
    }

    public function medicine2()
    {
        return $this->belongsTo('App\Medicine', 'medicine2_id');
    }

    public function medicine3()
    {
        return $this->belongsTo('App\Medicine', 'medicine3_id');
    }

    public function medicine4()
    {
        return $this->belongsTo('App\Medicine', 'medicine4_id');
    }

    public function medicine5()
    {
        return $this->belongsTo('App\Medicine', 'medicine5_id');
    }

    public function medicine6()
    {
        return $this->belongsTo('App\Medicine', 'medicine6_id');
    }
}

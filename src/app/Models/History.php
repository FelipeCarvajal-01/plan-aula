<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $table = 'histories';

    protected $fillable = [
        'id_course',
        'id_profile_competition_ra',
        'id_general_objective',
        'id_specific_objective',
        'id_general_reference',
        'id_institutional_reference',
        'id_evaluations',
        'id_update_histories',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'id_course');
    }
    public function profile_competition_ra()
    {
        return $this->belongsTo(Profile_competition_ra::class, 'id_profile_competition_ra');
    }
    public function general_objective()
    {
        return $this->belongsTo(General_objective::class, 'id_general_objective');
    }
    public function specific_objective()
    {
        return $this->belongsTo(Specific_objective::class, 'id_specific_objective');
    }
    public function general_reference()
    {
        return $this->belongsTo(General_reference::class, 'id_general_reference');
    }
    public function institutional_reference()
    {
        return $this->belongsTo(Institucional_reference::class, 'id_institutional_reference');
    }
    public function evaluations()
    {
        return $this->belongsTo(Evaluation::class, 'id_evaluations');
    }
    public function update_histories()
    {
        return $this->belongsTo(Update_history::class, 'id_update_histories');
    }
}

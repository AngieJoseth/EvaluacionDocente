<?php

namespace App\Models\TeacherEval;

use App\Models\Ignug\State;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluationType extends Model 
{
    
    protected $connection = 'pgsql-teacher-eval';
    protected $fillable=[
        'name',
        'code',
        'percentage',
        'global_percentage'
    ];
    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function parent()
    {
        return $this->belongsTo(EvaluationType::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(EvaluationType::class, 'parent_id');
    }

    public function tasks()
    {
        return $this->hasMany(Catalogue::class, 'parent_id');
    }
}

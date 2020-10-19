<?php


namespace App\Models\TeacherEval;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use App\Models\TeacherEval\EvaluationType;
use App\Models\Ignug\State;
use App\Models\Ignug\Catalogue;
use App\Models\Ignug\Teacher;

class Evaluation extends Model 
{
    protected $connection = 'pgsql-teacher-eval';
    protected $fillable=[
        'result'        
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }
    public function evaluationType()
    {
        return $this->belongsTo(EvaluationType::class);
    }


    public function pairResult()
    {
        return $this->hasMany(PairResult::class);
    }

}

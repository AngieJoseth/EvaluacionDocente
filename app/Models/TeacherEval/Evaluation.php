<?php


namespace App\Models\TeacherEval;

use App\Models\Ignug\State;
use App\Models\Ignug\Teacher;
use App\Models\TeacherEval\EvaluationType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    public function evaluation_type()
    {
        return $this->belongsTo(EvaluationType::class);
    }

}

<?php

namespace App\Models\TeacherEval;

use App\Models\Ignug\State;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use App\Models\Ignug\SubjectTeacher;
use App\Models\Ignug\Student;


class StudentResult extends Model 
{
    
    protected $connection = 'pgsql-teacher-eval';

    public function subjectTeacher()
    {
        return $this->belongsTo(SubjectTeacher::class);
    }
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function state()
    {
        return $this->belongsTo(State::class);
    }
    public function answerQuestion(){
        return $this->belongsTo(AnswerQuestion::class);
    }


}
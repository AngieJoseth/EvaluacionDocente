<?php

namespace App\Models\TeacherEval;

use App\Models\Ignug\State;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class StudentResult extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $connection = 'pgsql-teacher-eval';

    public function subject_teacher()
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


}
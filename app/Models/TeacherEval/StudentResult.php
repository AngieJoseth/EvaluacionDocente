<?php

<<<<<<< HEAD
namespace App\Models;

use App\Models\Ignug\State;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentResult extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $connection = 'pgsql-teacher-eval';
    public function answer_question()
    {
        return $this->belongsTo(AnswerQuestion::class);
    }
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


=======
namespace App\Models\TeacherEval;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentResult extends Model
{
    use HasFactory;
>>>>>>> e6a024fa36c780b4b4b9f3451952b4f75f743fe9
}

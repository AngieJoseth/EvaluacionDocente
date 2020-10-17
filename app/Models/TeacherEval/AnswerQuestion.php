<?php

namespace App\Models\TeacherEval;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerQuestion extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $connection = 'pgsql-teacher-eval';
   
    public function answer()
    {
        return $this->belongsTo(Answer::class);
    }
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
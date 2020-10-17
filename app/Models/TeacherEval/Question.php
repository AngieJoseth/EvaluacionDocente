<?php

namespace App\Models\TeacherEval;
use App\Models\Ignug\State;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $connection = 'pgsql-teacher-eval';
    protected $fillable=[
        'code',
        'order',
        'name'
    ];
    public function state()
    {
        return $this->belongsTo(State::class);
    }
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function evaluation_type()
    {
        return $this->belongsTo(EvaluationType::class);
    }
}

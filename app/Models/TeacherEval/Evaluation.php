<?php

namespace App\Models\TeacherEval;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use App\Models\Ignug\State;
use App\Models\Ignug\Catalogue;
use App\Models\Ignug\Teacher;

class Evaluation extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use HasFactory;

    protected $connection = 'pgsql-teacher-eval';

    protected $fillable = [
        'percentage',
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

    public function type()
    {
        return $this->belongsTo(Catalogue::class);
    }

    public function pairResult()
    {
        return $this->hasMany(PairResult::class);
    }

}

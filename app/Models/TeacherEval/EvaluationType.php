<?php

namespace App\Models;

use App\Models\Ignug\State;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluationType extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
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
        return $this->belongsTo(Parent::class);
    }
}

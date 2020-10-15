<?php

<<<<<<< HEAD
namespace App\Models;

use App\Models\Ignug\State;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
=======
namespace App\Models\TeacherEval;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use App\Models\Ignug\State;


>>>>>>> e6a024fa36c780b4b4b9f3451952b4f75f743fe9

class EvaluationType extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
<<<<<<< HEAD
    protected $connection = 'pgsql-teacher-eval';
    protected $fillable=[
        'name',
        'code',
        'percentage',
        'global_percentage'
    ];
=======
    use HasFactory;

    protected $connection = 'pgsql-teacher-eval';

    protected $fillable = [
        'name',
        'code',
        'percentage',
        'global_percentage',
    ];

>>>>>>> e6a024fa36c780b4b4b9f3451952b4f75f743fe9
    public function state()
    {
        return $this->belongsTo(State::class);
    }
<<<<<<< HEAD
    public function parent()
    {
        return $this->belongsTo(Parent::class);
=======

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
>>>>>>> e6a024fa36c780b4b4b9f3451952b4f75f743fe9
    }
}

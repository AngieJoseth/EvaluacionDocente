<?php

namespace App\Models\TeacherEval;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelfAppraisal extends Model
{
    use \OwenIt\Auditing\Auditable;
    use HasFactory;

    protected $connection = 'pgsql-ignug';
}

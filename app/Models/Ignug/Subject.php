<?php

namespace App\Models\Ignug;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $connection = 'pgsql-ignug';
    
    public function subjectTeacher()
    {
        return $this->hasMany(SubjectTeacher::class);
    }

}

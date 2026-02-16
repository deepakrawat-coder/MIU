<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Program;

class Course extends Model
{



// Relationship
public function program()
{
    return $this->belongsTo(Program::class);
}

}

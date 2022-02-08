<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table='user';

    public function cat()
    {
        return $this->hasOne(Category::class,'id','catid');
    }

    public function dept()
    {
        return $this->hasOne(Department::class,'id','deptid');
    }
}

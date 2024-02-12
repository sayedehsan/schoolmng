<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentModel extends Model
{
    use HasFactory;
    protected $table = "Users";

    static public function getById($id){
        return self::find($id);
    }
}

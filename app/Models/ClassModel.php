<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    use HasFactory;
    protected $table = "class";

    static public function getAll(){
        return ClassModel::select('class.*','users.name as creator')
                        ->join('users','users.id','class.created_by')
                        ->where('class.trash','=','no')
                        ->orderBy('class.id','desc')
                        ->paginate(20);
    }
    static public function getById($id){
        return ClassModel::find($id);

    }
}

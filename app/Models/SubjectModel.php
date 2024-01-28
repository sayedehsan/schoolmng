<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectModel extends Model
{
    use HasFactory;
    protected $table = "subjects";

    static public function getAll()
    {
        return self::select('subjects.*','users.name as creator')
            ->join('users', 'users.id', 'subjects.created_by')
            ->where('subjects.trash', '=', 'no')
            ->paginate(20);
    }

    static public function getById($id)
    {
        return self::find($id);
    }
}

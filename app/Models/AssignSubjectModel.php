<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignSubjectModel extends Model
{
    use HasFactory;
    protected $table = "assign_subjects";
    static public function getAll()
    {
        return self::select('assign_subjects.*', 'class.id as class_id', 'class.name as class_name', 'subjects.id as subject_id', 'subjects.name as subject_name', 'users.name as creator')
            ->leftJoin('class', 'class.id', 'assign_subjects.class_id')
            ->leftJoin('subjects', 'subjects.id', 'assign_subjects.subject_id')
            ->leftJoin('users', 'users.id', 'assign_subjects.created_by')
            ->where('assign_subjects.trash', '=', 'no')
            ->paginate(20);
    }
    static public function getById($id)
    {
        return self::find($id);
    }

    static public function getByClassSubjectId($classId, $subjectId)
    {
        return self::where('class_id', "=", $classId)->where('subject_id', "=", $subjectId)->first();
    }

    static public function getAssignedSub($classId)
    {
        return self::where('class_id','=',$classId)->where('trash','=', 'no')->get();
    }

    static public function deleteSubject($classId){
        return self::where('class_id','=',$classId)->delete();
    }
}

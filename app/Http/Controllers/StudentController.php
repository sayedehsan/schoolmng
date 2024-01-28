<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use App\Models\StudentModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class StudentController extends Controller
{
    public function list()
    {
        $data['getRecords'] = User::getStudent();
        $data['header_title'] = "Student List";
        return view('admin.student.list', $data);
    }

    public function add()
    {
        $data['classList'] = ClassModel::getAll();
        $data['header_title'] = "Student Add";
        return view('admin.student.add', $data);
    }

    public function insert(Request $request)
    {
        $data = new User();
        $data->name = $request->name;
        $data->last_name = $request->last_name;

        if (!empty($request->admission_num)) {
            $data->admission_num = $request->admission_num;
        }

        if (!empty($request->roll_num)) {
            $data->roll_num = $request->roll_num;
        }

        $data->class_id = $request->class_id;
        $data->gender = $request->gender;
        $data->dob = $request->dob;
        $data->religion = $request->religion;

        if (!empty($request->adm_date)) {
            $data->adminssion_date = $request->adm_date;
        }
        if (!empty($request->img)) {
            $ext = $request->file('img')->getClientOriginalExtension();
            $file = $request->file('img');
            // dd($file);
            $randomStr = date('ymdhis') . Str::random(8);
            $fileName = strtolower($randomStr) . "." . $ext;
            $file->move('upload/profile/', $fileName);
            $data->img = $fileName;
        }
        $data->blood_grp = $request->blood_grp;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->type = 4;
        $data->save();
        return redirect('student/list')->with('success', 'Student Data inserted Successfully.');
    }
    public function edit($id)
    {
        $getStudent = StudentModel::getById($id);
        if (!empty($getStudent)) {
            $data['classList'] = ClassModel::getAll();
            $data['data'] = $getStudent;
            return view('admin.student.edit', $data);
        }
    }

    public function update($id, Request $request)
    {

        $data = StudentModel::getById($id);
        $data->name = $request->name;
        $data->last_name = $request->last_name;

        if (!empty($request->admission_num)) {
            $data->admission_num = $request->admission_num;
        }

        if (!empty($request->roll_num)) {
            $data->roll_num = $request->roll_num;
        }

        $data->class_id = $request->class_id;
        $data->gender = $request->gender;
        $data->dob = $request->dob;
        $data->religion = $request->religion;

        if (!empty($request->adm_date)) {
            $data->adminssion_date = $request->adm_date;
        }
        if (!empty($request->img)) {
            $ext = $request->file('img')->getClientOriginalExtension();
            $file = $request->file('img');
            $randomStr = date('Ymdhis') . Str::random(8);
            $fileName = strtolower($randomStr) . "." . $ext;
            $file->move('upload/profile/', $fileName);
            $data->img = $fileName;
        }
        $data->blood_grp = $request->blood_grp;
        $data->phone = $request->phone;
        $data->email = $request->email;
        if ($request->password) {
            $data->password = Hash::make($request->password);
        }
        $data->save();
        return redirect('student/list')->with('success', 'Student Data Updated Successfully!');
    }

    public function delete($id){

        $data = StudentModel::getById($id);
        $data->is_delete = 1;
        $data->save();
        return back()->with('warning','Student Data deleted!');

    }
}

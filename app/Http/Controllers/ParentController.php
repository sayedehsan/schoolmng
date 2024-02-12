<?php

namespace App\Http\Controllers;

use App\Models\ParentModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ParentController extends Controller
{
    public function list()
    {
        $data['getRecords'] = User::getParent();
        $data['header_title'] = "Parent List";
        return view('admin.parents.list', $data);
    }

    public function add(){
        $data['header_title'] = "Parent Info";
        return view('admin/parents/add',$data);
    }

    public function insert(Request $request)
    {
        $data = new User();
        $data->name = $request->name;
        $data->last_name = $request->last_name;

        $data->gender = $request->gender;
        $data->occupation = $request->occupation;
        $data->religion = $request->religion;

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
        $data->type = 3;
        $data->save();
        return redirect('parent/list')->with('success', 'Parent Data inserted Successfully.');
    }

    public function edit($id)
    {
        $getParents = ParentModel::getById($id);
        if (!empty($getParents)) {
            $data['data'] = $getParents;
            return view('admin.parents.edit', $data);
        }
    }

    public function update($id, Request $request)
    {
        $data = ParentModel::getById($id);
        $data->name = $request->name;
        $data->last_name = $request->last_name;

        $data->gender = $request->gender;
        $data->dob = $request->dob;
        $data->religion = $request->religion;
        $data->occupation = $request->occupation;

        
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
        return redirect('parent/list')->with('success', 'Parent Data Updated Successfully!');
    }

    public function delete($id){

        $data = ParentModel::getById($id);
        $data->is_delete = 1;
        $data->save();
        return back()->with('warning','Parent Data deleted!');

    }
}

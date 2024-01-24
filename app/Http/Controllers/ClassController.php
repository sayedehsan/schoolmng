<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\ClassModel;

class ClassController extends Controller
{
    public function list()
    {
        $data['getRecords'] = ClassModel::getAll();
        $data['header_title'] = "Class List";
        return view('admin.class.list', $data);
    }
    public function add()
    {
        $data['header_title'] = "Add Class";
        return view('admin.class.add', $data);
    }
    public function insert(Request $request)
    {
        $data = new ClassModel();
        $data->name = $request->name;
        $data->status = $request->name;
        $data->created_by = Auth::User()->id;
        $data->save();
        return redirect('class/list')->with('success', 'Class Data inserted Successfully.');
    }
    public function edit($id)
    {
        $getRecord = ClassModel::getById($id);
        if (!empty($getRecord)) {
            $data['header_title'] = "Edit Class";
            $data['data'] = $getRecord;
            return view('admin.class.edit', $data);
        }
        abort(404);
    }
    public function update($id, Request $request)
    {
        $data = ClassModel::getById($id);
        $data->name = $request->name;
        $data->status = $request->status;
        $data->save();
        return redirect('class/list');
    }
    public function delete($id)
    {
        $data = ClassModel::getById($id);
        $data->trash = "yes";
        $data->save();
        return redirect('class/list');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\SubjectModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{
    public function list()
    {
        $data['getRecords'] = SubjectModel::getAll();
        $data['header_title'] = "Subject List";
        return view('admin.subject.list', $data);
    }

    public function add()
    {
        $data['header_title'] = "Subject Add";
        return view('admin.subject.add', $data);
    }

    public function insert(Request $request)
    {
        $data = new SubjectModel();
        $data->name = trim($request->name);
        $data->type = trim($request->type);
        $data->status = trim($request->status);
        $data->created_by = Auth::user()->id;
        $data->save();
        return redirect('subject/list')->with('success', 'Subject added Successfully.');
    }

    public function  edit($id)
    {
        $getData = SubjectModel::getById($id);
        if (!empty($getData)) {
            $data['header_title'] = "Edit Subject";
            $data['data'] = $getData;
            return view('admin.subject.edit', $data);
        }
        abort(404);
    }

    public function update($id, Request $request)
    {
        $data = SubjectModel::getById($id);
        $data->name = trim($request->name);
        $data->type = trim($request->type);
        $data->status = trim($request->status);
        $data->save();
        return redirect('subject/list')->with('success', 'Subject updated Successfully.');
    }

    public function delete($id)
    {
        $data = SubjectModel::getById($id);
        $data->trash = "yes";
        $data->save();
        return redirect('subject/list')->with('warning', 'Subject Deleted.');
    }
}

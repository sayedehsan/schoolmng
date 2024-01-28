<?php

namespace App\Http\Controllers;

use App\Models\AssignSubjectModel;
use App\Models\ClassModel;
use App\Models\SubjectModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssignSubjectController extends Controller
{
    public function list()
    {
        $data['getRecords'] = AssignSubjectModel::getAll();
        $data['header_title'] = "Subject Assign List";
        return view('admin.assign_subject.list', $data);
    }

    public function add()
    {
        $data['classList'] = ClassModel::getAll();
        $data['subjectList'] = SubjectModel::getAll();
        $data['header_title'] = "Subject Assign List";
        return view('admin.assign_subject.add', $data);
    }

    public function insert(Request $request)
    {
        if (!empty($request->subjects)) {
            foreach ($request->subjects as $subject_id) {
                $checkSubject = AssignSubjectModel::getByClassSubjectId($request->class_id, $subject_id);
                if (empty($checkSubject)) {
                    $data = new AssignSubjectModel();
                    $data->class_id = $request->class_id;
                    $data->subject_id = $subject_id;
                    $data->status = $request->status;
                    $data->created_by = Auth::User()->id;
                    $data->save();
                }
            }
            return redirect('assgsub/list')->with('success', 'Subject assigned Successfully.');
        }
        return redirect('assgsub/list')->with('error', 'Subject not assigned.');
    }

    public function edit($id)
    {
        $getRecord = AssignSubjectModel::getById($id);
        if (!empty($getRecord)) {
            $data['assignSubList'] = AssignSubjectModel::getAssignedSub($getRecord->class_id);
            $data['classList'] = ClassModel::getAll();
            $data['subjectList'] = SubjectModel::getAll();
            $data['data'] = $getRecord;
            $data['header_title'] = "Assign Subject Edit";
            return view('admin.assign_subject.edit', $data);
        }
        abort(404);
    }
    public function update($id, Request $request)
    {
        $data = AssignSubjectModel::getById($id);

        if (!empty($request->subjects)) {
            foreach ($request->subjects as $subject_id) {
                $checkSubject = AssignSubjectModel::getByClassSubjectId($request->class_id, $subject_id);
                if (!empty($checkSubject)) {
                    $checkSubject->status = $request->status;
                    $checkSubject->save();
                } else {
                    $data = new AssignSubjectModel();
                    $data->class_id = $request->class_id;
                    $data->subject_id = $subject_id;
                    $data->status = $request->status;
                    $data->created_by = Auth::User()->id;
                    $data->save();
                }
            }
            return redirect('assgsub/list')->with('success', 'Subject assigned updated Successfully.');
        }
    }

    public function delete($id)
    {
        $data = AssignSubjectModel::getById($id);
        $data->trash = "yes";
        $data->save();

        return redirect()->back()->with('warning', 'Subject Deleted!');
    }
}

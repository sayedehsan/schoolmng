<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Hash;

class AdminController extends Controller
{
    public function list()
    {
        $data['getRecords'] = User::getAdmin();
        $data['header_title'] = "Admin List";
        return view('admin.list', $data);
    }
    public function add()
    {
        $data['header_title'] = "Add Admin";
        return view('admin.add', $data);
    }
    public function insert(Request $request)
    {
        $user = new User();
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->type = 1;
        $user->save();
        return redirect('admin/list')->with('success', 'Admin successfully created');
    }

    public function edit($id)
    {
        $data['data'] = User::getSingle($id);
        if (!empty($data)) {
            $data['header_title'] = "Edit Admin";
            return view('admin.edit', $data);
        } else {
            abort(404);
        }
    }

    public function update($id, Request $request){
        $user = User::getSingle($id);
        $user->name = $request->name;
        $user->email= $request->email;
        if($request->password){
            $user->password = Hash::make($request->password);
        }
        $user->save();
        return redirect('admin/list')->with('success','admin Data updated Successfully!');
    }

    public function delete($id){
        $user = User::getSingle($id);
        $user->is_delete = 1;
        $user->save();
        return redirect('admin/list')->with('success','Admin Data Deleted!');
    }
}

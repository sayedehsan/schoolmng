@extends('layouts.app')
@section('context')
<div class="card">
    <div class="card-header header-elements-inline">
        <div class="row flex">
            <div class="col-sm-6"><h5 class="card-title">Admin List</h5></div>
            <div class="col-sm-6" style="text-align: right;"><a href="{{url('admin/add')}}" type="button" class="btn bg-teal-400 btn-labeled btn-labeled-left">Add Admin</a></div>
        </div>
    </div>

    <table class="table datatable-basic">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Created Date</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($getRecords as $data)
                <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->created_at}}</td>
                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="{{ url('admin/edit/'.$data->id) }}" class="dropdown-item text-primary">Edit</a>
                                <a href="{{ url('admin/delete/'.$data->id) }}" class="dropdown-item text-danger">Delete</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>
@endsection
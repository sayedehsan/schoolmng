@extends('layouts.app')
@section('context')
<div class="card">
    <div class="card-header header-elements-inline">
        <div class="row">
            <div class="col-md-6"><h5 class="card-title">Class List</h5></div>
            <div class="col-md-6"><a href="{{url('class/add')}}" type="button" class="btn bg-teal-400 btn-labeled">Add</a></div>
        </div>
    </div>

    <table class="table datatable-basic">
        <thead>
            <tr>
                <th>Name</th>
                <th>Status</th>
                <th>Created By</th>
                <th>Created Date</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($getRecords as $data)
                <tr>
                <td>{{$data->name}}</td>
                <td>{{Str::ucfirst($data->status)}}</td>
                <td>{{Str::ucfirst($data->creator)}}</td>
                <td>{{date('d-m-Y H:i A',strtotime($data->created_at))}}</td>
                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="{{ url('class/edit/'.$data->id) }}" class="dropdown-item text-primary">Edit</a>
                                <a href="{{ url('class/delete/'.$data->id) }}" class="dropdown-item text-danger">Delete</a>
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
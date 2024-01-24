@extends('layouts.app')
@section('context')
<div class="card">
    <div class="card-body">
        <form action="" method="post">
            {{ csrf_field() }}
            <fieldset class="mb-3">
                <legend class="text-uppercase font-size-sm font-weight-bold">Subject Information Update</legend>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Name</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="name" value="{{$data->name}}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Type</label>
                    <div class="col-lg-10">
                       <select class="form-control" name="type" required>
                        <option value="" disabled>Select Subject Type</option>
                        <option value="theory" {{ $data->type == "theory" ? "selected" : "" }}>Theory</option>
                        <option value="practical" {{ $data->type == "practical"? "selected" : "" }}>Practical</option>
                       </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Status</label>
                    <div class="col-lg-10">
                       <select class="form-control" name="status" required>
                        <option value="" disabled>Select Status Type</option>
                        <option value="active" {{ $data->status == "active" ? "selected" : "" }}>Active</option>
                        <option value="inactive" {{ $data->status == "inactive"? "selected" : "" }}>Inactive</option>
                       </select>
                    </div>
                </div>
            </fieldset>
            <div class="text-right">
                <button type="submit" class="btn btn-primary">Update<i class="icon-paperplane ml-2"></i></button>
            </div>
        </form>
    </div>
</div>
@endsection


			
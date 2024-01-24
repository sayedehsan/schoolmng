@extends('layouts.app')
@section('context')
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Class Edit Form</h5>
    </div>

    <div class="card-body">
        <form action="" method="post">
            {{ csrf_field() }}
			@include('_message')
            <fieldset class="mb-3">
                <legend class="text-uppercase font-size-sm font-weight-bold">CLass Information Update</legend>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Name</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="name" value="{{$data->name}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Status</label>
                    <div class="col-lg-10">
                       <select class="form-control" name="status" id="">
                        <option value="active" @if($data->status == "active") selected @endif>Active</option>
                        <option value="inactive" @if($data->status == "inactive") selected @endif>Inactive</option>
                       </select>
                    </div>
                </div>
            </fieldset>
            <div class="text-right">
                <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
            </div>
        </form>
    </div>
</div>
@endsection


			
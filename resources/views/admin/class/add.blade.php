@extends('layouts.app')
@section('context')
<div class="card">
    <div class="card-body">
        <form action="{{url('class/add')}}" method="post">
            {{ csrf_field() }}
			@include('_message')
            <fieldset class="mb-3">
                <legend class="text-uppercase font-size-sm font-weight-bold">Class Information</legend>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Name</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="name">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Status</label>
                    <div class="col-lg-10">
                       <select class="form-control" name="status" id="">
                        <option value="active" selected>Active</option>
                        <option value="inactive">Inactive</option>
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


			
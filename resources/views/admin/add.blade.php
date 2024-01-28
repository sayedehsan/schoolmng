@extends('layouts.app')
@section('context')
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Admin Input Form</h5>
    </div>

    <div class="card-body">
        <form action="{{url('admin/add')}}" method="post">
            {{ csrf_field() }}
            <fieldset class="mb-3">
                <legend class="text-uppercase font-size-sm font-weight-bold">Admin Information</legend>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Name</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="name">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Email</label>
                    <div class="col-lg-10">
                        <input type="email" class="form-control" name="email">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Password</label>
                    <div class="col-lg-10">
                        <input type="password" class="form-control" name="password">
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


			
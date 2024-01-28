@extends('layouts.app')
@section('context')
<div class="card">
    <div class="card-body">
        <form action="{{url('assgsub/add')}}" method="post">
			@include('_message')
            {{ csrf_field() }}
            <fieldset class="mb-3">
                <legend class="text-uppercase font-size-sm font-weight-bold">Assign Subject Form</legend>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Class</label>
                    <div class="col-lg-10">
                       <select class="form-control" name="class_id" required>
                        <option value="" selected>Select Class</option>
                        @foreach ($classList as $class)
                        <option value="{{$class->id}}">{{$class->name}}</option>
                        @endforeach
                       </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Subject</label>
                    <div class="col-lg-10">
                        @foreach ($subjectList as $subject)
                        <label><input type="checkbox" name="subjects[]" value="{{$subject->id}}"> {{$subject->name}}</label>
                            
                        @endforeach
                       </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Status</label>
                    <div class="col-lg-10">
                       <select class="form-control" name="status" required>
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


			
@extends('layouts.app')
@section('context')
<div class="card">
    <div class="card-body">
        <form action="" method="post">
            {{ csrf_field() }}
            <fieldset class="mb-3">
                <legend class="text-uppercase font-size-sm font-weight-bold">Assign Subject Update</legend>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Class</label>
                    <div class="col-lg-10">
                       <select class="form-control" name="class_id" required>
                        <option value="" selected>Select Class</option>
                        @foreach ($classList as $class)
                            {{$selected =  $class->id == $data->class_id ? "selected" : ""}}
                            <option value="{{$class->id}}" {{$selected}}>{{$class->name}}</option>
                        @endforeach
                       </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Subject</label>
                    <div class="col-lg-10">
                        @foreach ($subjectList as $subject)
                        @php $checked = "" @endphp
                            @foreach ($assignSubList as $dataSub)
                                @if($dataSub->subject_id == $subject->id)  @php $checked = "checked" @endphp @endif
                                @endforeach
                                <input type="checkbox" {{$checked}} name="subjects[]" value="{{$subject->id}}" >{{$subject->name}}
                            
                        @endforeach
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


			
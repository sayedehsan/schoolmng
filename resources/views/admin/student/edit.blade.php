@extends('layouts.app')
@section('context')
<div class="card">
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <fieldset class="mb-3">
                <legend class="text-uppercase font-size-sm font-weight-bold">Edit Student Information</legend>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">First Name</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" value="{{old('name',$data->name)}}" name="name" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Last Name</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" value="{{old('last_name',$data->last_name)}}" name="last_name" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
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
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Admission No</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" value="{{old('admission_num',$data->admission_num)}}" name="admission_num" >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Roll Number</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" value="{{old('roll_num',$data->roll_num)}}" name="roll_num" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Gender</label>
                            <div class="col-lg-10">
                                <select class="form-control" name="gender" required>
                                    <option value="" disabled> Select Gender</option>
                                    <option value="male" {{$data->gender == "male" ? "selected" : ""}}>Male</option>
                                    <option value="famale" {{$data->gender == "female" ? "selected" : ""}}>Female</option>
                                    <option value="other" {{$data->gender == "other" ? "selected" : ""}}>Other</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Date of Birth</label>
                            <div class="col-lg-10">
                                <input type="date" class="form-control" value="{{old('dob',$data->dob)}}" name="dob" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Religion</label>
                            <div class="col-lg-10">
                            <select class="form-control" name="religion">
                                <option value="" disabled></option>
                                <option value="islam" {{$data->gender == "islam" ? "selected" : ""}}>Islam</option>
                                <option value="hindu" {{$data->gender == "hindu" ? "selected" : ""}}>Hindu</option>
                                <option value="budda" {{$data->gender == "budda" ? "selected" : ""}}>Budda</option>
                                <option value="cristan" {{$data->gender == "cristan" ? "selected" : ""}}>Cristan</option>
                                <option value="other" {{$data->gender == "other" ? "selected" : ""}}>Other</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Blood Group</label>
                            <div class="col-lg-10">
                                <select class="form-control" name="blood_grp">
                                    <option value="A+" {{$data->gender == "A+" ? "selected" : ""}} >A+</option>
                                    <option value="B+" {{$data->gender == "B+" ? "selected" : ""}} >B+</option>
                                    <option value="A-" {{$data->gender == "A-" ? "selected" : ""}} >A-</option>
                                    <option value="B-" {{$data->gender == "B-" ? "selected" : ""}} >B-</option>
                                    <option value="AB+" {{$data->gender == "AB+" ? "selected" : ""}} >AB+</option>
                                    <option value="AB-" {{$data->gender == "AB-" ? "selected" : ""}} >AB-</option>
                                    <option value="O+" {{$data->gender == "O+" ? "selected" : ""}} >O+</option>
                                    <option value="O-" {{$data->gender == "O-" ? "selected" : ""}} >O-</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Image</label>
                            <div class="col-lg-10">
                                <input type="file" class="form-control" value="{{old('img',$data->img)}}" name="img" >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Phone</label>
                            <div class="col-lg-10">
                                <input type="phone" class="form-control" value="{{old('phone',$data->phone)}}" name="phone" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Admission Date</label>
                            <div class="col-lg-10">
                                <input type="date" class="form-control" value="{{old('adm_date',$data->adminssion_date)}}" name="adm_date" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Email</label>
                            <div class="col-lg-10">
                                <input type="email" class="form-control" value="{{old('email',$data->email)}}" name="email" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Password</label>
                            <div class="col-lg-10">
                                <input type="password" class="form-control" value="" name="password">
                                <small style="color: red;">Enter Password if you want to update it.</small>
                            </div>
                        </div>
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


			
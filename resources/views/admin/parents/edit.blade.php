@extends('layouts.app')
@section('context')
<div class="card">
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <fieldset class="mb-3">
                <legend class="text-uppercase font-size-sm font-weight-bold">Edit Parent Information</legend>
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
                            <label class="col-form-label col-lg-2">Occupation</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" value="{{old('occupation',$data->occupation)}}" name="occupation" required>
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


			
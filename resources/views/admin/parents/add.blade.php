@extends('layouts.app')
@section('context')
<div class="card">
    <div class="card-body">
        <form action="{{url('parent/add')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <fieldset class="mb-3">
                <legend class="text-uppercase font-size-sm font-weight-bold">Parent Information Form</legend>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">First Name</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" value="{{old('name')}}" name="name" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Last Name</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" value="{{old('last_name')}}" name="last_name" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Gender</label>
                            <div class="col-lg-10">
                                <select class="form-control" name="gender" required>
                                    <option value="" selected disabled> Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="famale">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Occupation</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" value="{{old('occupation')}}" name="occupation" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Religion</label>
                            <div class="col-lg-10">
                            <select class="form-control" name="religion">
                                <option value="" selected disabled></option>
                                <option value="islam">Islam</option>
                                <option value="hindu">Hindu</option>
                                <option value="budda">Budda</option>
                                <option value="cristan">Cristan</option>
                                <option value="other">Other</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Blood Group</label>
                            <div class="col-lg-10">
                                <select class="form-control" name="blood_grp">
                                    <option value="A+">A+</option>
                                    <option value="B+">B+</option>
                                    <option value="A-">A-</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Image</label>
                            <div class="col-lg-10">
                                <input type="file" class="form-control" value="{{old('img')}}" name="img" >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Phone</label>
                            <div class="col-lg-10">
                                <input type="email" class="form-control" value="{{old('phone')}}" name="phone" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Email</label>
                            <div class="col-lg-10">
                                <input type="email" class="form-control" value="{{old('email')}}" name="email" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Password</label>
                            <div class="col-lg-10">
                                <input type="password" class="form-control" value="{{old('password')}}" name="password" required>
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


			
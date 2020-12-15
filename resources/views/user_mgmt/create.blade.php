@extends('layout.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create User Page</div>

                <div class="card-body">
 <form class="form-horizontal form-material" method="POST" action="{{route('admin.user.store')}}">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-12">Name</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Name" class="form-control form-control-line"
                                    name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">Email</label>
                            <div class="col-md-12">
                                <input type="email" placeholder="Email" class="form-control form-control-line"
                                    name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" value="Cumi" class="form-control form-control-line" name="company"
                                value="{{Auth::user()->company}}">
                            <input type="hidden" value="" class="form-control form-control-line" name="">
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Mobile No</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Mobile No" class="form-control form-control-line"
                                    name="mobile_number" maxlength="10">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Location</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Location" class="form-control form-control-line"
                                    name="location">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12">Role</label>
                            <div class="col-sm-12">
                                <select class="form-control form-control-line" name="role">
                                    <option value="1">Customer</option>
                                    <option value="2">Delivery Agent</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
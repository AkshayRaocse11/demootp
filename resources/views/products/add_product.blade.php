@extends('layout.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Product Page</div>

                <div class="card-body">
                    <form class="form-horizontal form-material" method="POST" action="{{route('admin.product.store')}}">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-12">Product Name</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Product" class="form-control form-control-line"
                                    name="product">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">Price</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Price" class="form-control form-control-line"
                                    name="price">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12">Delievery Status</label>
                            <div class="col-sm-12">
                                <select class="form-control form-control-line" name="delievery_status">
                                    <option value="Success">Success</option>
                                    <option value="Pending">Pending</option>
                                </select>
                            </div>
                        </div>    
                        <div class="form-group">
                            <label class="col-sm-12">Date</label>
                            <div class="col-sm-12">
                                <input type="date" name="date" class="form-control">
                            </div>
                        </div>                            
                        <button type="submit" class="btn btn-sm btn-success float-right">Submit</button>
                    </form>                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
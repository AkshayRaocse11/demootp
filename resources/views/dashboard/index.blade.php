@extends('layout.master')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                            Newly Registered Users
                       <div class="table-responsive">
                        <table class="table table-bordered" id="my_Table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Mobile</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($user_data as $user)
                                @if ($user->email != Auth::user()->email)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                    @if($user->role == 1 ){
                                    Customer
                                    }
                                    @else{
                                        Delievery Agent
                                    }
                                    @endif
                                    
                                    
                                    </td>
                                    <td>{{ $user->mobile_number }}</td>
                                    <td>{{ $user->location }}</td>
                                    <td>
                                      
                                       {{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }}
                                    </td>
                                </tr>
                                @endif
                                @empty
                                <tr>
                                    <td colspan="2">No records found.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive mt-3">
                         Product Delievery Status
                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Delievery Status</th>
                                    <th scope="col">Order Placed Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($product_data as $item)
                                <tr>
                                    <td>{{ $item->product }}</td>
                                    <td>Rs.{{ $item->price }}</td>
                                    <td>
                                    
                                    @if ($item->delievery_status=='Pending')
                                <button class="btn btn-sm btn-danger">{{ $item->delievery_status }}</button>                                        
                                    @else
                                    <button class="btn btn-sm btn-success">{{ $item->delievery_status }}</button>                                          
                                    @endif    
                                    
                                  
                                    </td>
                                    <td>
                                      
                                       {{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="2">No records found.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
  <script>
  $(document).ready(function() {
    $('#my_Table').DataTable( {
        "order": [[ 6, "desc" ]]
    } );
} );    
      
  </script>  
@endsection

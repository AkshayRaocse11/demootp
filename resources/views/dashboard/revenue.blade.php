@extends('layout.master')

@section('content')

    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                            Revenue Data DateWise
                    <div class="table-responsive mt-3">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Delievery Status</th>
                                    <th scope="col">Order Placed Date</th>
                                    <th> Download </th>
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
                                      
                                       {{ $item->date}}
                                    </td>
                                    <th>
                                        <a href="" class="btn btn-sm btn-info">
                                           
                                            <i class="mdi mdi-eye"></i> Download
                                        </a>
                                    </th>
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

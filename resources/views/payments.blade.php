@extends('layouts.admin', ['title' => 'User Accounts'])
				
@section('content')

<!-- Add CSS files -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css">

<!-- Add JavaScript files -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    // Initialize DataTable
    var table = $('#example5').DataTable();

    // Add search functionality
    $('#example5_filter').prepend('<label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example5" id="search-input"></label>');

    $('#search-input').on('keyup', function() {
        table.search(this.value).draw();
    });

    // Add pagination buttons
    $('#table-container').append('<div class="pagination-container"></div>');
    table.on('draw.dt', function () {
        $('.pagination-container').html(table.buttons().container());
    });
});
$(document).ready(function() {
    var table = $('#example5').DataTable({
        paging: true, // Enable pagination
        ordering: true // Enable column sorting
    });
});
</script>

<div class="content-body">
            <div class="container-fluid">

                  <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <!-- <span>Activities</span> -->
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Detail</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Payment</a></li>
                        </ol>
                    </div>
                </div>


					<div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Payments</h4> 
                                 <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#loginModal">Make Payment</button> -->
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                  <table id="example5" class="table display table-row-bordered align-middle">
                    <!--begin::Head-->
                    <thead class="fs-7 text-gray-400 text-uppercase">
                        <tr>

                            <th class="min-w-50px">Id</th>
                            <th class="min-w-50px">Email</th>
                            <th class="min-w-50px">price</th>
                            <!-- <th class="min-w-50px">Booking_number</th> -->
                            <th class="min-w-50px">Status</th>
                            <th class="min-w-50px ">Action</th>
                        </tr>
                    </thead>
                    <!--end::Head-->
                    <!--begin::Body-->
                    <tbody class="fs-6">
                        
                        @foreach ($data as $data)
                            <tr>

                                <td>
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Wrapper-->
                                        <div class="me-5 position-relative">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                
                                            </div>
                                            <!--end::Avatar-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Info-->
                                        <div class="d-flex flex-column justify-content-center">
                                            <a href=""
                                                class="fs-6 text-gray-800 text-hover-primary">{{ $data->id }}</a>

                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::User-->
                                </td>
                               
                                 
                                <td>
                                     {{$data->email}}

                                </td>
                                 <td>
                                     {{$data->amount}}

                                </td> 
                            
                              

                                <td>
                                    @if ($data->status == 'pending')
                                        <span class="badge badge-light-info fw-bolder px-4 py-3">Inactive</span>
                                    @elseif($data->status == 'Approved')
                                        <span class="badge badge-light-success fw-bolder px-4 py-3">Active</span>
                                    @endif
                                </td>

                               <td>
                                   
                                    @if ($data->status == 'Approved')
                                        <a href="{{ route('hidePayment', ['id' => $data->id]) }}" class="btn btn-info btn-sm">
									        <i class="fa fa-eye"></i> Hide
									    </a>
                                    @elseif($data->status == 'pending')
                                        <a href="{{ route('unhidePayment', ['id' => $data->id]) }}"
                                            class="btn btn-light btn-sm">Unhide</a>
                                    @endif
                                     <a href="{{ route('deletePayment', ['id' => $data->id]) }}" class="btn btn-danger btn-sm">
      				 				 <i class="fa fa-trash"></i> Delete
   									 </a>
                               </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                    <!--end::Body-->
                </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


	</div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js"></script>



@endsection
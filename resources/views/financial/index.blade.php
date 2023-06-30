@extends('layouts.admin',  ['title' => 'Dashboard'])

@section('content')

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
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Schedule</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Financials</a></li>
                        </ol>
                    </div>
                </div>


					<div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Financial Schedules</h4>
                                  <button class="btn btn-primary" data-toggle="modal" data-target="#loginModal">ADD SERMON</button>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                  <table id="example5" style="min-width:99% "  class="table display table-row-bordered align-middle">
                    <!--begin::Head-->
                    <thead class="fs-7 text-gray-400 text-uppercase">
                        <tr>
                            <th class="min-w-50px">Name</th>
                            <th class="min-w-50px">Amount</th>
                            <th class="min-w-20px">Date</th>
                            <th class="min-w-20px">Status</th>
                            <th class="min-w-150px ">Action</th>
                        </tr>
                    </thead>
                    <!--end::Head-->
                    <!--begin::Body-->
                    <tbody class="fs-6">
                        
                        @foreach ($data as $data)
                            <tr>



                                <td>
                                     {{$data->name}}

                                </td>  
                                <td>
                                     {{$data->amount}}

                                </td> 

                                <td>
                                     {{ \Carbon\Carbon::parse($data->date)->diffForHumans() }}

                                </td>                
                              

                                <td>
                                    @if ($data->status == 0)
                                        <span class="badge badge-light-info fw-bolder px-4 py-3">Inactive</span>
                                    @elseif($data->status == 1)
                                        <span class="badge badge-light-success fw-bolder px-4 py-3">Active</span>
                                    @endif
                                </td>

                               <td>
                                    <a href="{{ route('editFinancial', ['id' => $data->id]) }}"
                                        class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Edit</a>

                                    @if ($data->status == 1)
                                        <a href="{{ route('hideFinancial', ['id' => $data->id]) }}"
                                            class="btn btn-danger btn-sm"><i class="fa fa-eye"></i> Hide</a>
                                    @elseif($data->status == 0)
                                        <a href="{{ route('unhideFinancial', ['id' => $data->id]) }}"
                                            class="btn btn-light btn-sm">Unhide</a>
                                    @endif
                                    <a href="{{ route('deleteFinancial', ['id' => $data->id]) }}"
                                        class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
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



 <div class="modal fade bd-example-modal-lg" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="loginModalLabel">Financial Sermon</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Login Form -->
                        <form id="loginForm" action="{{route('addFinancial')}}" method="POST"enctype="multipart/form-data" >
                        @csrf
                        @method('post')
                        
                              <div class="form-group">
                                <label for="name">name:</label>
                                <input type="text" class="form-control" id="name" 
                               name="name" required>
                               @error('name')
                                     <div class="mb-5">
                                     <label class="fs-6 form-label fw-bolder " style="color:red" >{{ $message }}</label>
                                      </div>
                                @enderror
                            </div>

                               <div class="form-group">
                                <label for="amount">amount:</label>
                                <input type="number" class="form-control" id="amount" 
                               name="amount"  required> 
                               @error('amount')
                                     <div class="mb-5">
                                     <label class="fs-6 form-label fw-bolder " style="color:red" >{{ $message }}</label>
                                      </div>
                                @enderror
                            </div>


                             <div class="form-group">
                                <label for="date">date:</label>
                                <input type="date" class="form-control" id="origin" 
                               name="date" accept="image/*" required>
                               @error('date')
                                     <div class="mb-5">
                                     <label class="fs-6 form-label fw-bolder " style="color:red" >{{ $message }}</label>
                                      </div>
                                @enderror
                            </div>

                          
                          
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

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
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Posts</a></li>
                        </ol>
                    </div>
                </div>


					<div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Post Schedules</h4>
                                  <button class="btn btn-primary" data-toggle="modal" data-target="#loginModal">ADD SERMON</button>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                  <table id="example5" style="min-width:99% "  class="table display table-row-bordered align-middle">
                    <!--begin::Head-->
                    <thead class="fs-7 text-gray-400 text-uppercase">
                        <tr>
                            <th class="min-w-50px">image</th>
                            <th class="min-w-50px">TITLE</th>
                            <th class="min-w-50px">Description</th>
                            <th class="min-w-20px">audio</th>
                            <th class="min-w-20px">Status</th>
                            <th class="min-w-150px ">Action</th>
                        </tr>
                    </thead>
                    <!--end::Head-->
                    <!--begin::Body-->
                    <tbody class="fs-6">
                        
                        @foreach ($data as $data)
                            <tr>



                               <td style="width: 100px;">
                                   <img width="100%"src="{{asset('/sermon/'.$data->Image)}}"> 

                                </td> 
                                <td>
                                     {{$data->Title}}

                                </td> 

                                <td>
                                     {!!  substr(($data->Description),0,20) !!}..

                                </td> 
                                
                              <td>
                                     {{$data->Audio}}

                                </td> 
                              

                                <td>
                                    @if ($data->status == 0)
                                        <span class="badge badge-light-info fw-bolder px-4 py-3">Inactive</span>
                                    @elseif($data->status == 1)
                                        <span class="badge badge-light-success fw-bolder px-4 py-3">Active</span>
                                    @endif
                                </td>

                               <td>
                                    <a href="{{ route('editPost', ['id' => $data->id]) }}"
                                        class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Edit</a>

                                    @if ($data->status == 1)
                                        <a href="{{ route('hidePost', ['id' => $data->id]) }}"
                                            class="btn btn-danger btn-sm"><i class="fa fa-eye"></i> Hide</a>
                                    @elseif($data->status == 0)
                                        <a href="{{ route('unhidePost', ['id' => $data->id]) }}"
                                            class="btn btn-light btn-sm">Unhide</a>
                                    @endif
                                    <a href="{{ route('deletePost', ['id' => $data->id]) }}"
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
                        <h5 class="modal-title" id="loginModalLabel">Post Sermon</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Login Form -->
                        <form id="loginForm" action="{{route('addPost')}}" method="POST"enctype="multipart/form-data" >
                        @csrf
                        @method('post')
                        
                              <div class="form-group">
                                <label for="Title">Title:</label>
                                <input type="text" class="form-control" id="Title" 
                               name="Title" required>
                               @error('Title')
                                     <div class="mb-5">
                                     <label class="fs-6 form-label fw-bolder " style="color:red" >{{ $message }}</label>
                                      </div>
                                @enderror
                            </div>

                               <div class="form-group">
                                <label for="Description">Description:</label>
                                <textarea type="text" class="form-control" style="height: 150px;" id="Description" 
                               name="Description" > </textarea>
                               @error('Description')
                                     <div class="mb-5">
                                     <label class="fs-6 form-label fw-bolder " style="color:red" >{{ $message }}</label>
                                      </div>
                                @enderror
                            </div>


                             <div class="form-group">
                                <label for="Image">Image:</label>
                                <input type="file" class="form-control" id="origin" 
                               name="Image" accept="image/*" required>
                               @error('Image')
                                     <div class="mb-5">
                                     <label class="fs-6 form-label fw-bolder " style="color:red" >{{ $message }}</label>
                                      </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="Audio">Audio:</label>
                                <input type="file" class="form-control" id="origin" 
                               name="Audio" accept="audio/*" required>
                               @error('Audio')
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

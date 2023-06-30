    @extends('layouts.admin', ['title' => 'User Accounts'])
                    
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
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Staff</a></li>
                                <li class="breadcrumb-item active"><a href="javascript:void(0)">Activities</a></li>
                            </ol>
                        </div>
                    </div>

                        <div class="row">
                            <div class=" col-md-4 col-sm-6">
                                <div class="card overflow-hidden">
                                    <a href="{{route('indexPost')}}" class="card-body d-flex align-items-center justify-content-around"
                                        >

                                        <div class="p-md-3">
                                            <img class="img-fluid" src="{{ asset('/images/airplane-ticket.png') }}"
                                                alt="">
                                        </div>
                                         @php $data=DB::table('posts')->get(); $count=count($data) @endphp
                                        <h2 id="count" class="text-primary ms-lg-2 mb-0 mt-3 me-5 me-md-0  display-5">{{$count}}</h2>
                                        <br>SERMONS
                                    </a>
                                    
                                    
                                </div>
                            </div>  
                            <div class=" col-md-4 col-sm-6">
                                <div class="card overflow-hidden">
                                    <a href="{{route('indexEvent')}}" class="card-body d-flex align-items-center justify-content-around">
                                        {{-- <div class="row">
                                            <div class="col"> --}}
                                        <div class="p-md-3">
                                            <!-- <a href=""> -->
                                                <img class="img-fluid" src="{{ asset('/images/viewrequest.png') }}"
                                                    alt="">
                                            <!-- </a> -->
                                        </div>
                                        @php $data=DB::table('events')->get(); $count=count($data) @endphp
                                         <h2 id="count" class="text-primary ms-lg-2 mb-0 mt-3 me-5 me-md-0  display-5">{{$count}}</h2>
                                        {{-- </div>
                                        </div> --}}
                                    </a>
                                    <!-- <p class="text-center mt-md-n4 btn-primary">View Request</p> -->
                                     <button class="btn-primary" data-toggle="modal" >
                                    Events</button>
                                </div>
                            </div>

                            <div class=" col-md-4 col-sm-6">
                                <div class="card overflow-hidden">
                                    <a href="{{route('paymentList')}}" >  <div type="button"
                                        class="card-body d-flex align-items-center justify-content-around" data-toggle="modal"
                                        data-target="#paymentModal">
                                        <div class="p-md-3">
                                            <img class="img-fluid" src="{{ asset('/images/cashless-payment .png') }}"
                                                alt="">
                                        </div>
                                         @php $data=DB::table('payments')->get(); $count=count($data) @endphp
                                         <h2 id="count" class="text-primary ms-lg-2 mb-0 mt-3 me-5 me-md-0  display-5">{{$count}}</h2>
                                    </a>
                                    <p class="text-center mt-md-n4"><a href="{{route('paymentList')}}" >Payment</a></p>
                                </div>
                            </div>
                        </div>
<!--                             <div class=" col-md-4 col-sm-6">
                                <div class="card overflow-hidden">
                                    <div type="button" class="card-body d-flex align-items-center justify-content-around"
                                        data-toggle="modal" data-target="#addModal">
                                        <div class="p-md-3 col-8">
                                            <img class="img-fluid" src="{{ asset('/images/add-friend.png') }}" alt="">
                                        </div>
                                    </div>
                                    <p class="text-center mt-md-n4">Add Guest</p>
                                </div>
                            </div> -->
                         
                            <div class=" col-md-4 col-sm-6">
                                <div class="card overflow-hidden">
                                    <div class="card-body d-flex align-items-center justify-content-">
                                        {{-- <div class="row">
                                            <div class="col"> --}}
                                        <div class="p-md-3 col-8">
                                            <a href="{{route('contacts')}}">
                                                <img class="img-fluid" src="{{ asset('/images/help-desk 1.png') }}"
                                                    alt="">
                                            </a>
                                        </div> @php $data=DB::table('contacts')->where('status',0)->get(); $count=count($data) @endphp
                                         <h2 id="count" class="text-primary ms-lg-2 mb-0 mt-3 me-5 me-md-0  display-5">{{$count}}</h2>
                                        {{-- <p class="text-primary ms-lg-2 mb-0 mt-3 me-5 me-md-0  display-5">17</p> --}}
                                        {{-- </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>


    @endsection



@extends('theme')

@section('title')
gallery

@endsection

@section('content')
    <div class="row">
        
        <div class="col-md-6">
            <fieldset style="border:2px solid grey; border-radius:10%; padding: 20px;">
<form action="{{ route('members_store') }}" method="POST">
    @csrf
                            <div class="form-group">
                                <label for="Name">Full Name:</label>
                                <input type="text" class="form-control" id="Name" 
                               name="Name" placeholder="eg. meyorpop" required>
                               @error('Name')
                                     <div class="mb-5">
                                     <label class="fs-6 form-label fw-bolder " style="color:red" >{{ $message }}</label>
                                      </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" 
                               name="email" placeholder="eg. meyorpop@gmail.com" required>
                               @error('email')
                                     <div class="mb-5">
                                     <label class="fs-6 form-label fw-bolder " style="color:red" >{{ $message }}</label>
                                      </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number:</label>
                                <input type="number" min="0" class="form-control" id="phone" 
                               name="phone" placeholder="09074694221" required>
                               @error('phone')
                                     <div class="mb-5">
                                     <label class="fs-6 form-label fw-bolder " style="color:red" >{{ $message }}</label>
                                      </div>
                                @enderror
                            </div>

                             <div class="form-group">
                                <label for="dob">Date of Birth:</label>
                                <input type="date" min="0" class="form-control" id="address" 
                               name="address" placeholder="OTA Ogun" required>
                               @error('address')
                                     <div class="mb-5">
                                     <label class="fs-6 form-label fw-bolder " style="color:red" >{{ $message }}</label>
                                      </div>
                                @enderror
                            </div>

                             <div class="form-group">
                                <label for="address">Home Address:</label>
                                <input type="text" min="0" class="form-control" id="phone" 
                               name="phone" placeholder="OTA Ogun" required>
                               @error('phone')
                                     <div class="mb-5">
                                     <label class="fs-6 form-label fw-bolder " style="color:red" >{{ $message }}</label>
                                      </div>
                                @enderror
                            </div>
    
    <div>
        <button type="submit">Register</button>
    </div>
</form>
</fieldset>
</div>
<div class="col-md-6"> shsshhhssh</div>
</div>
@endsection


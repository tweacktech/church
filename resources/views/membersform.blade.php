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
                               name="name" placeholder="eg. meyorpop" required>
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
                                <input type="date" min="0" class="form-control" id="dob" 
                               name="dob" placeholder="OTA Ogun" required>
                               @error('dob')
                                     <div class="mb-5">
                                     <label class="fs-6 form-label fw-bolder " style="color:red" >{{ $message }}</label>
                                      </div>
                                @enderror
                            </div>

                             <div class="form-group">
                                <label for="address">Home Address:</label>
                                <input type="text" min="0" class="form-control" id="address" 
                               name="address" placeholder="OTA Ogun" required>
                               @error('address')
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
<div  id="services" class="col-md-6"> 

    <ul class="nospace group grid-3">
    @php $data=DB::table('posts')->latest()->paginate(3);   @endphp
            @foreach($data as $s)
        <li class="col-md-6">
          <article><a href="{{url('sermon',$s->id)}}"><i class="fas fa-spray-can"></i></a>
            <h6 class="heading">{{$s->Title}}</h6>
            <ul class="nospace meta clear"><br>
                <li><i class="fas fa-user"></i> Admin</li>
                <li>
                  <time datetime="2045-04-06T08:15+00:00">{{ \Carbon\Carbon::parse($s->created_at)->diffForHumans() }}</time>
                </li>
              </ul><br>
            <p>{{substr($s->Description,0,30) }}..</p>
            <footer><a href="{{url('sermon',$s->id)}}">More Details &raquo;</a></footer>
          </article>
        </li>
        @endforeach
      </ul></div>
</div>
@endsection


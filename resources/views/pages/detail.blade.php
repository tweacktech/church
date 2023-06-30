@extends('theme')

@section('title')
Detail ''{{$data->Title}}''

@endsection

@section('content')
  
   
   <section id="services" class="col-12">
      <div class="sectiontitle">
        <p class="nospace font-xs">Mauris tempor aliquam venenatis</p>
        <h6 class="heading">Curabitur at odio sed enim</h6>
      </div>
      <ul class="nospace group grid-3">
            
        <li class="col-md-12">
         
         <article id="points" class="group">
        <div class="col-md-12">
            <figure>
                <img style="width: 100%; max-height: 500px;" src="/sermon/{{$data->Image}}" alt="Image"/>
            </figure>
            <h3 class="mt-5">Topic: {{$data->Title}}</h3>
            <p class="col-12 mt-5">{{$data->Description}}</p>
            <audio class="mt-5" controls>
                <source src="/sermon/{{$data->Audio}}" type="audio/mp3">
                Your browser does not support the audio element.
            </audio>
            <br>

            <a href="/sermon/{{$data->Audio}}" download>Download Audio</a>
        </div>
        <div class="one_third last">
            <a class="imgover" href="#"><img src="images/demo/348x394.png" alt=""></a>
        </div>
    </article>
        </li>
       
      </ul>
    </section>

@endsection
@extends('theme')

@section('title')
Detail ''{{$data->Title}}''

@endsection

@section('content')
  
   
  <section class="hoc container clear"> 
    <div class="sectiontitle">
        <h6 class="heading" style="text-decoration-style: bold;">{{$data->Title}}</h6>
    </div>
    <article id="points" class="group">
        <div class="col-12">
            <figure>
                <img style="width: 100%; max-height: 500px;" src="/sermon/{{$data->Image}}" alt="Image"/>
            </figure>
            <p>{{$data->Description}}</p>
            <audio controls>
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
</section>

@endsection
@extends('theme')

@section('title')
Detail ''{{$data->Title}}''

@endsection

@section('content')
  
   
  <section class="hoc container clear"> 
    <div class="sectiontitle">
      <!-- <p class="nospace font-xs">Nisi velit nec turpis nullam vitae</p> -->
      <h6 class="heading">{{$data->Title}}</h6>
    </div>
    <article id="points" class="group">
      <div class="two_third first">
        <!-- <h6 class="heading">Sapien tempor placerat</h6> -->
         <figure>
        <img src="uploads/{{$data->Image}}" alt="/images/demo/348x261.png"/>
      </figure>
        <p>{{$data->Description}}</p>
    <audio controls>
  <source src="path/to/audio.mp3" type="audio/mp3">
  <source src="path/to/audio.ogg" type="audio/ogg">
  Your browser does not support the audio element.
  <a href="#" onclick="downloadAudio('path/to/audio.mp3')">Download</a>
</audio>

<script>
function downloadAudio(url) {
  var a = document.createElement('a');
  a.href = url;
  a.download = url.split('/').pop();
  document.body.appendChild(a);
  a.click();
  document.body.removeChild(a);
}
</script>

      </div>
      <div class="one_third last"><a class="imgover" href="#"><img src="images/demo/348x394.png" alt=""></a></div>
    </article>
   
  </section>
@endsection
@extends('theme')

@section('title')
gallery

@endsection

@section('content')
    
    <style type="text/css">
      #con img.zoomed {
  transform: scale(1.5);
}  </style>
     
    <div class="sectiontitle">
      <p class="nospace font-xs">Odio duis ut est quis nisl consequat</p>
       <header class="heading">Gallery Title Goes Here</header>
      <br>
    </div>
     
      <div class="row">
        @foreach($data as $l)
        <div class="col-12 col-sm-4">
          <figure><ul>
            <div id="con">
            <img id="con" src="uploads/{{$l->Image}}" alt="">
          </div>
              <figcaption class="pl-5">{{$l->Name}}</figcaption>
            </ul>
          </figure>
        </div>
@endforeach
       
      </div><br>
      
     
<center>

          <div class="row">
            <div class="col-10">
              {{$data->links()}}

            </div>
          </div>
      </nav>
</center><br>
<!-- Scrollable modal -->
<script>
document.getElementById('container').addEventListener('click', function(e) {
  const tgt = e.target;
  tgt.classList.toggle('zoomed')
})
</script>


    
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
@endsection


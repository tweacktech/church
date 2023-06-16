@extends('theme')

@section('title')
Sermons

@endsection

@section('content')
    

  <section class="hoc container clear"> 
    
    <div class="sectiontitle">
      <p class="nospace font-xs">Odio duis ut est quis nisl consequat</p>
      <h6 class="heading">Gravida donec non erat eget</h6>
      <br>
    </div>

   <div class="row">   
@foreach($data as $s)

  <div class="col-12 col-sm-4">  
        <article>
          <figure><a class="imgover" href="{{url('sermon',$s->id)}}"><img src="uploads/{{$s->Image}}" alt="images/demo/348x261.png"></a>
            <figcaption>
              <ul class="nospace meta clear"><br>
                <li><i class="fas fa-user"></i> Admin</li>
                <li>
                  <time datetime="2045-04-06T08:15+00:00">{{date($s->created_at)}}</time>
                </li>
              </ul>
              <h6 class="heading"><a href="{{url('sermon',$s->id)}}">{{$s->Title}}</a></h6>
            </figcaption>
          </figure>
          <p>{{substr($s->Description,0,60) }}</p>
          <footer><a href="{{url('sermon',$s->id)}}">More Details &raquo;</a></footer>
        </article><br>
      
  </div>
@endforeach
</div>
  </section><br>

<center>

          <div class="row">
            <div class="col-10">
              {{$data->links()}}

            </div>
          </div>
      </nav>
</center>

    @endsection
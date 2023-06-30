@extends('theme')

@section('title')
Sermons

@endsection

@section('content')
    

    </style>
    <section id="services" class="col-12">
      <div class="sectiontitle">
        <p class="nospace font-xs">Mauris tempor aliquam venenatis</p>
        <h6 class="heading">Curabitur at odio sed enim</h6>
      </div>
      <ul class="nospace group grid-3">
            @foreach($data as $s)
        <li class="col-md-4">
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
      </ul>
    </section>
    <div class="row">
            <div class="col-10">
              {{$data->links()}}

            </div>
          </div>
    
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

    @endsection
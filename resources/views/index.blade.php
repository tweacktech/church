@extends('theme')

@section('title')
Home

@endsection

@section('content')
    <style type="text/css">
      #m{
    background-image: url('/images/demo/348x394.png');
    
    
}
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


<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/2.png');">
  <section class="hoc container clear"> 
    
    <div class="sectiontitle">
      <p class="nospace font-xs">MISSION &amp; VISION</p>
      <h6 class="heading">MISSION &amp; VISION</h6>
    </div>
    <div class="row">
    <article id="points" class="col-12">
      <center>
      <div class="col-md-6" id="m" style="">
        <a class="imgover" href="#">
          <div class="image-overlay">
            <h3>MISSION</h3>
            <!-- <img src="images/demo/348x394.png" alt=""/> -->
            <div class="overlay-text">Sometimes the terms “mission statement” and “vision statement” are used interchangeably or even combined into a single statement.

But they mean two very different things. Your mission statement is what your company is doing right now, while your vision statement is what you hope to achieve in the future – where you are in this moment versus where you’re going. 

Let’s bring this home: if someone asks you, “So, what do you do?” you might say, “I’m a software developer at a mid-size software company” or “I’m a circus clown.”

But, what if they asked you, “What do you want to be doing five or 10 years from now?” Your answer might be a bit different, right?

Maybe you’d say, “My goal is to move into a management position where I oversee all of the company’s developers” or “Ultimately, I’d like to be a world-famous clown and the choice entertainer at birthday parties for celebrities’ kids.”</div>
          </div>
        </a>
      </div>

      <div class="col-md-6" id="m" style="">
        <a class="imgover" href="#">
          <div class="image-overlay">
            <h3>VISSION</h3>
            <!-- <img src="images/demo/348x394.png" alt=""/> -->
            <div class="overlay-text">Sometimes the terms “mission statement” and “vision statement” are used interchangeably or even combined into a single statement.

But they mean two very different things. Your mission statement is what your company is doing right now, while your vision statement is what you hope to achieve in the future – where you are in this moment versus where you’re going. 

Let’s bring this home: if someone asks you, “So, what do you do?” you might say, “I’m a software developer at a mid-size software company” or “I’m a circus clown.”

But, what if they asked you, “What do you want to be doing five or 10 years from now?” Your answer might be a bit different, right?

Maybe you’d say, “My goal is to move into a management position where I oversee all of the company’s developers” or “Ultimately, I’d like to be a world-famous clown and the choice entertainer at birthday parties for celebrities’ kids.”</div>
          </div>
        </a>
      </div></center>
    </article>
    </div>
    
  </section>
</div>



@endsection

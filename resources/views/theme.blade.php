<!DOCTYPE html>

<html lang="">

<head>
<title>@yield('title')</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="{{asset('layout/styles/layout.css')}}" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Lets talk the Gosple and new life">
    <meta name="author" content="Meyor">
    <meta name="keywords" content="HIEPANG,preach,COCIN,lcc,worship,sermon,service,youth,pray,cancelling,God">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- refrenced from metatags.io -->

</head>
<body id="top">
<!-- Top Background Image Wrapper -->
<div class="bgded overlay padtop" style="background-image:url('images/demo/backgrounds/2.png');"> 

  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left"> 
     
      <h1><a href="{{url('/')}}">COCIN LCC New Karu</a></h1>
      
    </div>
    <nav id="mainav" class="fl_right"> 
      
      <ul class="clear">
        <li class="active"><a href="{{url('/')}}">Home</a></li>
        <li><a class="drop" href="#">Event</a>
          <ul>
            <li><a href="pages/sidebar-right.html">EVENT</a></li>
            <li><a href="pages/basic-grid.html">FINANCIAL</a></li>
            <!-- <li><a href="pages/font-icons.html#">Font Icons</a></li> -->
          </ul>
        </li>
            <li><a href="{{url('sermons')}}">Sermons</a></li>
            <li><a href="{{url('/gallery')}}">Gallery</a></li>
            <li><a href="{{url('/contact')}}">Contact</a></li>
            <li><a href="{{url('about')}}">About</a></li>
            <li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tithe</button>
             <li><a href="{{url('members_form')}}">New</a></li>
        </ul>
      
    </nav>
  </header>
   
  <div id="pageintro" class="hoc clear"> 
    
    <article>
      <h3 class="heading">@yield('title')</h3>
            <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn" href="#sub">Subscribe</a></li>
        </ul>
      </footer>
    </article>
    
  </div>
  
</div>
<!-- End Top Background Image Wrapper -->


<div class="wrapper row1">
  <section id="ctdetails" class="hoc clear"> 
    
    <ul class="nospace clear">
      <li class="one_quarter first">
        <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Give us a call:</strong> +2340009</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Send us a mail:</strong> church@domain.com</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong> Mon. - Sat.:</strong> 08.00am - 18.00pm</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-map-marker-alt"></i></a> <span><strong>Come visit us:</strong> Directions to <a href="#">our location</a></span></div>
      </li>
    </ul>
    
  </section>



<div class="wrapper row3">
  <main class="hoc container clear"> 

  @yield('content')
    
    <!-- / main body -->
    <br>
    <div class="clear"></div>
  </main>
</div>

<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    
    <div class="one_quarter first">
      <!-- [<a href="#">&hellip;</a>] -->
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fab fa-whatsapp"></i></a></li>
         
      </ul>
    </div>
    <div class="one_quarter">
      <ul><h6s >Activities</h6s>
        <li>sunday: 8:00AM - 11:00AM</li>
        <li>Tuesday: 5:00PM - 6:00PM</li>
        <li>Wednesday: 5:00PM - 6:00PM</li>
      </ul>

    </div>
    <div class="one_quarter last" id="sub">
                     
      <form action="{{url('/sub')}}" method="POST">
        @csrf
        <fieldset>
           <p >News feed.. subscibe with your email we will keep you updated</p>
          <legend>Post Update:</legend>
          <div class="row">
          <input class="btmspace-15"  name="email" type="email"  value="" placeholder="Email" required>
          <button class="btn" type="submit">Submit</button>
          </div>
        </fieldset>
      </form>
    </div>
    
  </footer>
</div>
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; 2022 - All Rights Reserved - <a href="#">TweackTech</a></p>
    <p class="fl_right"> <a href="{{url('/contact')}}">Contact</a>
            <a href="#">About</a> </p>
  </div>
</div>
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>


    <div class="modal fade" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header"> 
                  <h4 class="modal-title">Payment of Tithe</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">

                  <form id="paymentForm">
  <div class="form-group">
    <label for="inputName">Name</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" required>
  </div>
  <div class="form-group">
    <label for="inputEmail">Email address</label>
    <input type="email" name="email" class="form-control" id="email-address" placeholder="Enter your email address" required>
  </div>
  <div class="form-group">
    <label for="inputMessage">Message</label>
    <input type="number" name="amount" min="100" class="form-control" id="amount" rows="3" placeholder="Enter your Amount">
  </div>
  <button type="submit" class="btn btn-primary" onclick="payWithPaystack()">Submit</button>
</form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>





<script>
$(document).ready(function(){
    $('#myModal').modal('hide');
});
</script>


    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        const paymentForm = document.getElementById('paymentForm');

paymentForm.addEventListener("submit", payWithPaystack, false);

function payWithPaystack(e) {
    e.preventDefault();

    const name = document.getElementById("name").value;
    const email = document.getElementById("email-address").value;
    const amount = document.getElementById("amount").value;

    let handler = PaystackPop.setup({
        key: 'pk_test_7ce279d181176a0c0af488855daf72c19ca5ff8e', // Replace with your public key
        email: email,
        amount: amount * 100,
        ref: '' + Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
        // label: "Optional string that replaces customer email"
        onClose: function() {
            alert('Window closed.');
        },
        callback: function(response) {
            let message = response.reference;
            window.location.href = "verify-payment/" + message + "?name=" + encodeURIComponent(name);
        }
    });

    handler.openIframe();
}

    </script>
</body>
</html>
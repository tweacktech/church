@extends('theme')

@section('title')
TITHE

@endsection

@section('content')

<article>
    <div class="one_third last"><a class="imgover" href="#">
<h4>
    Tithing is not just about giving money to the church, it's an act of faith and obedience to God. When you give your tithe, you're saying, "God, I trust you to provide for me.
</h4>
</a>
    </div>
</article>


					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Open Modal</button>
					<div class="modal fade" id="myModal">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header"> 
					        <h4 class="modal-title">Payment of Tithe</h4>
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					      </div>
					      <div class="modal-body">

					      	<form>
  <div class="form-group">
    <label for="inputName">Name</label>
    <input type="text" class="form-control" id="inputName" placeholder="Enter your name" required>
  </div>
  <div class="form-group">
    <label for="inputEmail">Email address</label>
    <input type="email" class="form-control" id="inputEmail" placeholder="Enter your email address" required>
  </div>
  <div class="form-group">
    <label for="inputMessage">Message</label>
    <input type="number" min="100" class="form-control" id="amount" rows="3" placeholder="Enter your Amount">
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




@endsection
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


            let handler = PaystackPop.setup({

                key: 'pk_test_7ce279d181176a0c0af488855daf72c19ca5ff8e', // Replace with your public key

                email: document.getElementById("email-address").value,

                amount: document.getElementById("amount").value * 100,

                ref: '' + Math.floor((Math.random() * 1000000000) +
                    1
                ), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you

                // label: "Optional string that replaces customer email"

                onClose: function() {

                    alert('Window closed.');

                },

                callback: function(response) {

                    let message = response.reference;

                    window.location.href = "verify-payment/" + message;

                }

            });


            handler.openIframe();

        }
    </script>
<?php
// Vars
$page = "home";
$pagetitle = "Home | Junk Removal";
$description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum non euismod dolor. Integer sapien ipsum, dapibus eget bibendum sed nullam sodales.";




include("template-parts/header.php");
?>

<!-- HERO -->
<section class="hero">
  <div class="hero-card">
    <h2 style="color:var(--eco-green)">Top junk removal services</h2>
    <p>
      Getting rid of junk has never been easier. We offer free estimates,
      same-day service, and friendly pros who do all the heavy lifting for you.
      Our bigger trucks mean more value, and we recycle or donate whenever possible
      to keep things green.
    </p>
    <p>⭐⭐⭐⭐⭐ Customer Rating</p>
    <button class="btn-eco scroll-form">Schedule an appointment</button>
  </div>
</section>

<!-- WHAT WE DO -->
<section class="bg-light">
  <h2 class="text-center mb-5" style="color:var(--eco-green)">What we do</h2>
  <div class="container">
    <div class="row g-4">
      <div class="col-md-4">
        <div class="service-card">
          <img src="https://dummyimage.com/400x400/000/fff">
          <h5 class="mt-3">Full-Service Junk Removal</h5>
          <ul>
            <li>Free estimates</li>
            <li>Same day appointments</li>
            <li>Pay only for the space you use</li>
            <li>Eco-friendly</li>
            <li>18 cubic yards truck capacity</li>
          </ul>
        </div>
      </div>

      <div class="col-md-4">
        <div class="service-card">
          <img src="https://dummyimage.com/400x400/000/fff">
          <h5 class="mt-3">Dumpster Rental</h5>
          <ul>
            <li>Fill at your own pace</li>
            <li>Convenient drop-off</li>
            <li>Driveway friendly</li>
            <li>12 cubic yards</li>
          </ul>
        </div>
      </div>

      <div class="col-md-4">
        <div class="service-card">
          <img src="https://dummyimage.com/400x400/000/fff">
          <h5 class="mt-3">Dumpster Bag Pickup</h5>
          <ul>
            <li>Buy it, store it & fill it</li>
            <li>Self-service</li>
            <li>Easy online scheduling</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- REVIEWS -->
<section id="reviews">
  <h2 class="text-center mb-4">Reviews</h2>
  <div class="container review-slider">
    <button class="slider-btn prev">&#10094;</button>
    <button class="slider-btn next">&#10095;</button>

    <div class="review-track">
      <!-- 6 review cards -->

      	<div class="review-card">
		  <div class="card text-center">
		    <img src="https://dummyimage.com/80x80/000/fff" class="review-img rounded-circle mx-auto mb-2">
		    <h6 class="mb-1">Customer 1</h6>
		    <p class="review-text mb-2">
		      Excellent service, fast and friendly!
		    </p>
		    ⭐⭐⭐⭐⭐
		  </div>
		</div>

		<div class="review-card">
		  <div class="card text-center">
		    <img src="https://dummyimage.com/80x80/000/fff" class="review-img rounded-circle mx-auto mb-2">
		    <h6 class="mb-1">Customer 1</h6>
		    <p class="review-text mb-2">
		      Excellent service, fast and friendly!
		    </p>
		    ⭐⭐⭐⭐⭐
		  </div>
		</div>

		<div class="review-card">
		  <div class="card text-center">
		    <img src="https://dummyimage.com/80x80/000/fff" class="review-img rounded-circle mx-auto mb-2">
		    <h6 class="mb-1">Customer 1</h6>
		    <p class="review-text mb-2">
		      Excellent service, fast and friendly!
		    </p>
		    ⭐⭐⭐⭐⭐
		  </div>
		</div>

		<div class="review-card">
		  <div class="card text-center">
		    <img src="https://dummyimage.com/80x80/000/fff" class="review-img rounded-circle mx-auto mb-2">
		    <h6 class="mb-1">Customer 1</h6>
		    <p class="review-text mb-2">
		      Excellent service, fast and friendly!
		    </p>
		    ⭐⭐⭐⭐⭐
		  </div>
		</div>

		<div class="review-card">
		  <div class="card text-center">
		    <img src="https://dummyimage.com/80x80/000/fff" class="review-img rounded-circle mx-auto mb-2">
		    <h6 class="mb-1">Customer 1</h6>
		    <p class="review-text mb-2">
		      Excellent service, fast and friendly!
		    </p>
		    ⭐⭐⭐⭐⭐
		  </div>
		</div>

		<div class="review-card">
		  <div class="card text-center">
		    <img src="https://dummyimage.com/80x80/000/fff" class="review-img rounded-circle mx-auto mb-2">
		    <h6 class="mb-1">Customer 1</h6>
		    <p class="review-text mb-2">
		      Excellent service, fast and friendly!
		    </p>
		    ⭐⭐⭐⭐⭐
		  </div>
		</div>


    </div>
  </div>
</section>

<!-- HOW IT WORKS -->
<section id="how" class="bg-light">
  <h2 class="text-center mb-3">How it works</h2>
  <p class="text-center container">
    Junk Removal takes the stress out of junk removal for your home or business.
    Our friendly, professional haulers show up, size up the job, and give you a free estimate.
    Say yes, and we’ll usually haul it away right away.
  </p>
</section>

<!-- FAQ -->
<section>
  <h2 class="text-center mb-4">FAQ</h2>
  <div class="container accordion" id="faq">
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#q1">
          How does junk removal work?
        </button>
      </h2>
      <div id="q1" class="accordion-collapse collapse show">
        <div class="accordion-body">
          Junk removal professionals arrive, provide an estimate, and haul away items once approved.
        </div>
      </div>
    </div>

    <div class="accordion-item">
	  <h2 class="accordion-header">
	    <button class="accordion-button collapsed"
	            data-bs-toggle="collapse"
	            data-bs-target="#q2">
	      What items can junk removal take?
	    </button>
	  </h2>

	  <div id="q2" class="accordion-collapse collapse" data-bs-parent="#faq">
	    <div class="accordion-body">
	      Junk removal can take furniture, appliances, mattresses, electronics,
	      yard waste, construction debris, and most non-hazardous household items.
	      If you’re unsure, just ask—we’re happy to help.
	    </div>
	  </div>
	</div>


  </div>
</section>

<!-- FORM -->
<section id="form" class="bg-light">
  <h2 class="text-center mb-4">Schedule an appointment now</h2>
  <div class="container">
    <form class="row g-3 main-form">
      <div class="response-container">
      </div>

      <div class="col-md-6"><input class="form-control firstname" placeholder="First name"></div>
      <div class="col-md-6"><input class="form-control lastname" placeholder="Last name"></div>
      <div class="col-md-6"><input class="form-control email" placeholder="Email"></div>
      <div class="col-md-6"><input class="form-control phone" placeholder="Phone number"></div>
      <div class="col-md-12"><input class="form-control zipcode" placeholder="Zip code"></div>
      <div class="col-12 text-center">
        <button class="btn-eco submit-btn">Submit and we will call you</button>
      </div>
    </form>
  </div>
</section>

<script type="text/javascript">
  jQuery( document ).ready(function(){


    jQuery(".submit-btn").on("click", function(e){
      e.preventDefault();

      var firstname = jQuery(".main-form .firstname").val();
      var lastname = jQuery(".main-form .lastname").val();

      var phone = jQuery(".main-form .phone").val();
      var email = jQuery(".main-form .email").val();
      var zipcode = jQuery(".main-form .zipcode").val();


      $.ajax({
        method: "POST",
        url: "",
        data: { 
          action:"entry", 
          firstname: firstname, 
          lastname: lastname , 
          email: email, 
          phone: phone,
          zipcode: zipcode

        }
      }).done(function( response ) {
          if( response == "success" ){
            //location.reload();


            jQuery(".main-form .firstname").val("");
            jQuery(".main-form .lastname").val("");
            jQuery(".main-form .email").val("");
            jQuery(".main-form .phone").val("");
            jQuery(".main-form .zipcode").val("");

            jQuery(".response-container").show();
            jQuery(".response-container").html("<p>Your form submitted successfully, we will send you an email shortly. <br>Thank you</p>");

          } else {
            jQuery(".response-container").show();
            jQuery(".response-container").html(response);
          }
      });



    });



  });
</script>

<?php include("template-parts/footer.php"); ?>
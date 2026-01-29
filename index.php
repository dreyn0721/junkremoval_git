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
<section class="section-props">


  <h2 class="text-center mb-5" style="color:var(--eco-green)">What we do</h2>
  <div class="container">
    <div class="row g-4">
      <div class="col-md-4">
        <div class="service-card">
          <img src="<?php echo $base_url; ?>/assets/img/eco-friendly disposal.png">
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
          <img src="<?php echo $base_url; ?>/assets/img/construction and debris removal.png">
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
          <img src="<?php echo $base_url; ?>/assets/img/junk removal.png">
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
<section id="reviews" class="section-glow">
  <h2 class="text-center mb-4">Reviews</h2>
  <div class="container review-slider">
    <button class="slider-btn prev">&#10094;</button>
    <button class="slider-btn next">&#10095;</button>

    <div class="review-track">
      <!-- 6 review cards -->

      	<div class="review-card">
		  <div class="card text-center">
		    <img src="<?php echo $base_url;?>/assets/img/default-profile.jpg" class="review-img rounded-circle mx-auto mb-2">
		    <h6 class="mb-1">Michael R. Dawson</h6>
		    <p class="review-text mb-2">
		      “Fast, professional, and affordable. They cleared out my garage in less than an hour and even swept afterward. Scheduling was easy and the crew was super friendly.”
		    </p>
		    ⭐⭐⭐⭐⭐
		  </div>
		</div>

		<div class="review-card">
		  <div class="card text-center">
		    <img src="<?php echo $base_url;?>/assets/img/default-profile.jpg" class="review-img rounded-circle mx-auto mb-2">
		    <h6 class="mb-1">Amanda L. Brooks</h6>
		    <p class="review-text mb-2">
		      “I called in the morning and they were able to come the same day. Great communication and fair pricing. I highly recommend them for any junk removal needs.”
		    </p>
		    ⭐⭐⭐⭐⭐
		  </div>
		</div>

		<div class="review-card">
		  <div class="card text-center">
		    <img src="<?php echo $base_url;?>/assets/img/default-profile.jpg" class="review-img rounded-circle mx-auto mb-2">
		    <h6 class="mb-1">Jason P. Miller
</h6>
		    <p class="review-text mb-2">
		      “Outstanding service from start to finish. They removed old furniture and appliances without any hassle. The team was respectful and worked quickly.”
		    </p>
		    ⭐⭐⭐⭐⭐
		  </div>
		</div>

		<div class="review-card">
		  <div class="card text-center">
		    <img src="<?php echo $base_url;?>/assets/img/default-profile.jpg" class="review-img rounded-circle mx-auto mb-2">
		    <h6 class="mb-1">Stephanie K. Turner</h6>
		    <p class="review-text mb-2">
		      “I’ve used other junk removal companies before, but this one was by far the best. On time, transparent pricing, and no mess left behind.”
		    </p>
		    ⭐⭐⭐⭐⭐
		  </div>
		</div>

		<div class="review-card">
		  <div class="card text-center">
		    <img src="<?php echo $base_url;?>/assets/img/default-profile.jpg" class="review-img rounded-circle mx-auto mb-2">
		    <h6 class="mb-1">Robert J. Coleman</h6>
		    <p class="review-text mb-2">
		      “Excellent experience. They helped clean out a rental property and handled everything efficiently. Saved me a lot of time and stress.”
		    </p>
		    ⭐⭐⭐⭐⭐
		  </div>
		</div>

		<div class="review-card">
		  <div class="card text-center">
		    <img src="<?php echo $base_url;?>/assets/img/default-profile.jpg" class="review-img rounded-circle mx-auto mb-2">
		    <h6 class="mb-1">Lisa M. Hernandez</h6>
		    <p class="review-text mb-2">
		      “Very impressed with their professionalism. Booking was simple, and the crew arrived exactly when promised. I will definitely use them again.”
		    </p>
		    ⭐⭐⭐⭐⭐
		  </div>
		</div>


    </div>
  </div>
</section>

<!-- HOW IT WORKS -->
<section id="how" class="section-fade">
  <h2 class="text-center mb-3">How it works</h2>
  <p class="text-center container">
    Getting rid of unwanted junk has never been easier. Simply schedule your junk removal appointment online or by phone, and our friendly team will confirm a time that works best for you—often with same-day or next-day availability. When we arrive, just point to the items you want removed and we’ll take care of all the heavy lifting, loading, and cleanup, so you don’t have to lift a finger. Before we begin, you’ll receive a clear, upfront price based on the volume and type of junk, with no hidden fees or surprises. Once approved, our fully licensed and insured crew efficiently removes everything from furniture and appliances to yard waste and construction debris. After loading, we sweep the area clean and ensure your space is left neat and clutter-free. Whenever possible, we responsibly recycle or donate usable items, minimizing landfill waste and helping local communities. From start to finish, our process is fast, transparent, and stress-free—designed to give you peace of mind and a clean space in just one visit.
  </p>
</section>

<!-- FAQ -->
<section>
  <h2 class="text-center mb-4">FAQ</h2>
  <div class="container accordion" id="faq">
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#q1">
          What items do you remove?
        </button>
      </h2>
      <div id="q1" class="accordion-collapse collapse show">
        <div class="accordion-body">
          We remove most non-hazardous items, including furniture, appliances, mattresses, electronics, yard waste, construction debris, and general household junk. If you’re unsure about a specific item, just give us a call.
        </div>
      </div>
    </div>

    <div class="accordion-item">
       <h2 class="accordion-header">
          <button class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#q2">
            Do you offer same-day or next-day service?
          </button>
       </h2>

      <div id="q2" class="accordion-collapse collapse" data-bs-parent="#faq">
        <div class="accordion-body">
          Yes! We offer same-day and next-day junk removal in most areas, depending on availability. Call us early for the best chance at same-day pickup.
        </div>
      </div>
    </div>




    

    <div class="accordion-item">
       <h2 class="accordion-header">
          <button class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#q3">
            How much does junk removal cost?
          </button>
       </h2>

      <div id="q3" class="accordion-collapse collapse" data-bs-parent="#faq">
        <div class="accordion-body">
          Pricing is based on the volume of junk, item type, and labor required. We provide upfront, no-obligation quotes before starting any work—no hidden fees.
        </div>
      </div>
    </div>


    

    <div class="accordion-item">
       <h2 class="accordion-header">
          <button class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#q4">
            Do I need to be present during the pickup?
          </button>
       </h2>

      <div id="q4" class="accordion-collapse collapse" data-bs-parent="#faq">
        <div class="accordion-body">
          Not always. As long as we have clear access to the items and prior approval, we can remove your junk even if you’re not on-site.
        </div>
      </div>
    </div>


    

    <div class="accordion-item">
       <h2 class="accordion-header">
          <button class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#q5">
            Are you licensed and insured?
          </button>
       </h2>

      <div id="q5" class="accordion-collapse collapse" data-bs-parent="#faq">
        <div class="accordion-body">
          Yes. We are fully licensed and insured, so your property is protected while we work.
        </div>
      </div>
    </div>


    

    <div class="accordion-item">
       <h2 class="accordion-header">
          <button class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#q6">
            Do you recycle or donate items?
          </button>
       </h2>

      <div id="q6" class="accordion-collapse collapse" data-bs-parent="#faq">
        <div class="accordion-body">
          Absolutely. We make every effort to recycle, donate, or responsibly dispose of items whenever possible to minimize landfill waste.
        </div>
      </div>
    </div>


    

    <div class="accordion-item">
       <h2 class="accordion-header">
          <button class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#q7">
            What items can’t you take?
          </button>
       </h2>

      <div id="q7" class="accordion-collapse collapse" data-bs-parent="#faq">
        <div class="accordion-body">
          We cannot remove hazardous materials such as chemicals, paint, asbestos, medical waste, or flammable liquids. Contact us if you’re unsure—we’ll guide you.
        </div>
      </div>
    </div>


    

    <div class="accordion-item">
       <h2 class="accordion-header">
          <button class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#q8">
            How do I schedule a pickup?
          </button>
       </h2>

      <div id="q8" class="accordion-collapse collapse" data-bs-parent="#faq">
        <div class="accordion-body">
          You can schedule online through our booking form or call us directly. Our team will confirm the time and provide a clear quote before removal.
        </div>
      </div>
    </div>


    

    <div class="accordion-item">
       <h2 class="accordion-header">
          <button class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#q9">
            Do you handle commercial junk removal?
          </button>
       </h2>

      <div id="q9" class="accordion-collapse collapse" data-bs-parent="#faq">
        <div class="accordion-body">
          Yes. We offer junk removal for businesses, offices, retail spaces, property managers, and construction sites.
        </div>
      </div>
    </div>


    

    <div class="accordion-item">
       <h2 class="accordion-header">
          <button class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#q10">
            Will you clean up after removing the junk?
          </button>
       </h2>

      <div id="q10" class="accordion-collapse collapse" data-bs-parent="#faq">
        <div class="accordion-body">
          Yes. After removal, we sweep and clean the area, leaving your space neat and clutter-free.
        </div>
      </div>
    </div>


  </div>
</section>

<!-- FORM -->
<section id="form" class="bg-light" style="padding-top: 170px;">
  <h2 class="text-center mb-4">Schedule an appointment now</h2>
  <div class="container">
    <form class="row g-3 main-form" id="contactForm">
      <div class="response-container">
      </div>

      <div class="col-md-6"><input class="form-control firstname" placeholder="First name"></div>
      <div class="col-md-6"><input class="form-control lastname" placeholder="Last name"></div>
      <div class="col-md-6"><input class="form-control email" placeholder="Email"></div>
      <div class="col-md-6"><input class="form-control phone" placeholder="Phone number"></div>
      <div class="col-md-12"><input class="form-control zipcode" placeholder="Zip code"></div>

      <div class="col-md-12 radio-input-container mt-5">
        <h3>Select Service</h3>
        <div class="radio-group">



          <label class="radio-card">
            <input type="radio" name="serviceType" class="radio-input-service" value="Junk Removal" required>
            <span class="radio-content">
              <strong>Junk Removal</strong>
            </span>
          </label>

          <label class="radio-card">
            <input type="radio" name="serviceType" class="radio-input-service" value="Move-Out & Cleanout Services" required>
            <span class="radio-content">
              <strong>Move-Out & Cleanout Services</strong>
            </span>
          </label>

          <label class="radio-card">
            <input type="radio" name="serviceType" class="radio-input-service" value="Estate & Property Cleanouts" required>
            <span class="radio-content">
              <strong>Estate & Property Cleanouts</strong>
            </span>
          </label>

          <label class="radio-card">
            <input type="radio" name="serviceType" class="radio-input-service" value="Construction Debris Removal" required>
            <span class="radio-content">
              <strong>Construction Debris Removal</strong>
            </span>
          </label>

          <label class="radio-card">
            <input type="radio" name="serviceType" class="radio-input-service" value="Appliance & Furniture Handling" required>
            <span class="radio-content">
              <strong>Appliance & Furniture Handling</strong>
            </span>
          </label>

          <label class="radio-card">
            <input type="radio" name="serviceType" class="radio-input-service" value="Eco-Friendly Disposal" required>
            <span class="radio-content">
              <strong>Eco-Friendly Disposal</strong>
            </span>
          </label>

          <label class="radio-card">
            <input type="radio" name="serviceType" class="radio-input-service" value="Commercial Services" required>
            <span class="radio-content">
              <strong>Commercial Services</strong>
              <small>Office cleanouts Retail space cleanouts Warehouse &. light industrial hauling</small>
            </span>
          </label>

          <label class="radio-card">
            <input type="radio" name="serviceType" class="radio-input-service" value="Property Management Support" required>
            <span class="radio-content">
              <strong>Property Management Support</strong>
              <small>Turnover cleanouts Maintenance debris hauling Ongoing service contracts</small>
            </span>
          </label>

          <label class="radio-card">
            <input type="radio" name="serviceType" class="radio-input-service" value="Real Estate Support Services" required>
            <span class="radio-content">
              <strong>Real Estate Support Services</strong>
              <small> Pre-listing cleanouts Post-closing junk removal Investor flip cleanouts</small>
            </span>
          </label>



        </div>
      </div>

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


      var service = jQuery('input[name="serviceType"]:checked').val();


      $.ajax({
        method: "POST",
        url: "",
        data: { 
          action:"entry", 
          firstname: firstname, 
          lastname: lastname , 
          email: email, 
          phone: phone,
          zipcode: zipcode,
          service: service

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
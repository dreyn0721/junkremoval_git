<?php 
include("init/database.php");
include("init/main-functions.php"); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
	<script src="assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
	<script src="assets/js/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">


	<link href="assets/main.css" rel="stylesheet" crossorigin="anonymous">

	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<meta name="description" content="<?=$description;?>">
	<meta name="author" content="<?=$author;?>" />
	<title><?=$pagetitle;?></title>



	<style>
    :root{
      --eco-green:#2f8f46;
      --secondary:black;
      --light:#f2f4f5;
    }

    body{scroll-behavior:smooth;}

    /* HEADER */
    header{
      position:sticky;
      top:0;
      z-index:999;
      background:white;
      box-shadow:0 2px 5px rgba(0,0,0,.1);
    }

    .logo{text-align:center;padding:10px;}

    .nav-link{color:black;font-weight:500;}
    .nav-link:hover{color:var(--eco-green);}

    .btn-eco{
      background:var(--eco-green);
      color:white;
      border-radius:30px;
      padding:10px 20px;
      border:none;
    }
    .btn-eco:hover{opacity:.9;}

    /* PROMO BAR */
    .promo{
      background:red;
      color:white;
      text-align:center;
      padding:10px;
      font-weight:bold;
    }

    /* HERO */
    .hero{
      background:
        linear-gradient(to right, rgba(47,143,70,.8), transparent),
        url("https://dummyimage.com/800x400/000/fff") center/cover no-repeat;
      padding:80px 20px;
    }

    .hero-card{
      background:white;
      border-radius:15px;
      padding:30px;
      max-width:50%;
    }

    @media(max-width:768px){
      .hero-card{max-width:100%;}
    }

    /* SECTIONS */
    section{padding:70px 20px;}
    .bg-light{background:var(--light);}
    .bg-green{background:var(--eco-green);color:white;}

    /* CARDS */
    .service-card img{width:100%;border-radius:10px;}
    .service-card{
      background:white;
      border-radius:15px;
      padding:20px;
      height:100%;
    }

    /* REVIEWS */
    .review-slider{overflow:hidden;position:relative;}
    .review-track{
      display:flex;
      transition:.4s;
    }
    .review-card{
	  min-width:33.33%;
	  padding:10px;
	}

	.review-card .card{
	  padding:15px;
	  font-size:0.95rem;
	}

    @media(max-width:768px){
      .review-card{min-width:100%;}
    }

    .slider-btn{
      position:absolute;
      top:50%;
      transform:translateY(-50%);
      background:var(--eco-green);
      color:white;
      border:none;
      width:40px;height:40px;
      border-radius:50%;
      z-index: 100;
    }
    .prev{left:0;}
    .next{right:0;}

    /* FOOTER */
    footer{background:var(--eco-green);color:white;padding:40px 20px;}
    footer a{color:white;text-decoration:none;}
    footer a:hover{text-decoration:underline;}

    .copyright{
      background:#cfd0d1;
      text-align:center;
      padding:10px;
    }

    .promo{
	  transition: all 0.3s ease;
	}









    


  </style>



</head>
<body>

	<header>
	  <div class="logo">
	    <img src="https://dummyimage.com/200x80/000/fff&text=LOGO" alt="logo">
	  </div>

	  <nav class="navbar navbar-expand-lg">
	    <div class="container">
	      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
	        <span class="navbar-toggler-icon"></span>
	      </button>

	      <div class="collapse navbar-collapse justify-content-center" id="navMenu">
	        <ul class="navbar-nav gap-3 align-items-center">
	          <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>">Home</a></li>
	          <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>/blog.php">Blogs</a></li>
	          <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>#reviews">Reviews</a></li>
	          <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>#how">How it works</a></li>

		        <?php if( logged_in() ): ?>
						<li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>/logout.php">Logout</a></li>
				<?php else: ?>
					<li class="nav-item">
						<a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#authModal">
							Login
						</a>
					</li>
				<?php endif; ?>
				
	          <li class="nav-item">
	            <a href="<?php echo $base_url; ?>#contactForm" class="btn-eco scroll-form">Schedule an appointment</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="tel:1111111"><i class="fa fa-phone"></i> 1-111-111</a>
	          </li>


	        </ul>
	      </div>
	    </div>
	  </nav>

		<div class="promo" id="promoBar">
			Special promo today, book a service now and save 20%!
		</div>
	</header>
	<?php include("template-parts/auth-modal.php"); ?>

<!-- FOOTER -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4 logo">
        <img class="" src="<?php echo $base_url; ?>/assets/img/logoipsum-410.png"><br>
      </div>
      <div class="col-md-4">
        <h5>Services</h5>
        <ul class="list-unstyled">
          <li>Junk Removal</li>
          <li>Move-Out & Cleanout Services</li>
          <li>Estate & Property Cleanouts</li>
          <li>Construction Debris Removal</li>
          <li>Appliance & Furniture Handling</li>
          <li>Eco-Friendly Disposal</li>
          <li>Commercial Services</li>
          <li>Property Management Support</li>
          <li>Real Estate Support Services</li>
        </ul>
      </div>
      <div class="col-md-4">
        <h5>Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="<?php echo $base_url;?>/blog.php">Blog</a></li>
          <li><a class="scroll-form" href="<?php echo $base_url;?>#form">Contact us</a></li>
          <li><a href="#">Terms</a></li>
          <li><a href="#">Privacy</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

<div class="copyright">
  &copy;<?=date("Y");?> Junk Removal. All Rights Reserved.
</div>





<script>
  // smooth scroll
  $('.scroll-form').click(function(){
    $('html,body').animate({scrollTop:$('#form').offset().top - 100},600);
  });

  // slider
  let index=0;
  const track=document.querySelector('.review-track');
  const cards=document.querySelectorAll('.review-card').length;
  document.querySelector('.next').onclick=()=>{index=Math.min(index+1,cards-3);track.style.transform=`translateX(-${index*33.33}%)`;}
  document.querySelector('.prev').onclick=()=>{index=Math.max(index-1,0);track.style.transform=`translateX(-${index*33.33}%)`;}
</script>



<script>
  const promoBar = document.getElementById('promoBar');

  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      promoBar.style.transform = 'translateY(-100%)';
      promoBar.style.display = 'none';
    } else {
      promoBar.style.transform = 'translateY(0)';
      promoBar.style.display = 'block';
    }
  });
</script>

</body>
</html>

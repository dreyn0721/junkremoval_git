
<!-- FOOTER -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <img src="https://dummyimage.com/200x80/000/fff&text=LOGO"><br>
        Junk removal
      </div>
      <div class="col-md-4">
        <h6>Services</h6>
        <ul>
          <li>Residential</li>
          <li>Commercial</li>
        </ul>
      </div>
      <div class="col-md-4">
        <h6>Quick Links</h6>
        <ul>
          <li><a href="#">About us</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Media</a></li>
          <li><a class="scroll-form" href="#">Contact us</a></li>
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
      promoBar.style.opacity = '0';
    } else {
      promoBar.style.transform = 'translateY(0)';
      promoBar.style.opacity = '1';
    }
  });
</script>

</body>
</html>

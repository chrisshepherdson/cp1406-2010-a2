    <div class="footer-wrapper ">
      <footer class="site-footer container">
      <div class="content">
        <div class="footer-logo"><a href="index.php"><img src="images/logo.png" width="147px" height="98px" alt="logo" /></a></div>
        <ul class="footer-navigation">
          <li><a href="index.php">Home</a></li>
          <li><a href="events.php">Events</a></li>
          <li><a href="bulletinboard.php">Bulletin Board</a></li>
          <li><a href="artists.php">Artists</a></li>
          <li><a href="members.php">Members</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <ul class="footer-contact">
          <li class="footer-contact-address">41 Boundary Street, Townsville</li>
          <li class="footer-contact-email"> <a href="mailto:admin@townsvillemusic.org.au?Subject=Enquiry" target="_top">admin@townsvillemusic.org.au</a> </li>
          <li class="footer-contact-phone">Phone: 07 4724 2086</li>
        </ul>
        <div class="footer-facebook">
          <a href="https://www.facebook.com/pages/Townsville-Community-Music-Centre/159636880763534" target="_blank">
            <div class="fb-icon"></div>
            <img src="images/fb2.png" style="display: none;" />
          </a>
        </div>
      </footer>
    </div>
    
  </div>
  <!-- END .inner --> 
  
</div>
<!-- END #boxed-content -->

<script type="text/javascript">
  $(document).ready(function(){
    $('header #show-menu').click(function(e){
      e.preventDefault();
      $('header nav.site-navigation').toggle('slow');
    });

    $( window ).resize(function(){
      if(window.innerWidth > 1024) {
        $("header nav.site-navigation").removeAttr("style");
      }
    });
  });
</script>

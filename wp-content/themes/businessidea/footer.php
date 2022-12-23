<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Business_Idea
 */

?>

<!-- footer -->
<footer class="bg-secondary position-relative">
  <img src="<?php bloginfo('stylesheet_directory'); ?>/themelib/images/backgrounds/map.png" class="img-fluid overlay-image" alt="">
  <div class="section">
    <div class="container">
      <div class="row align-items-center">

        <div class="col-md-3 col-6">
          <h4 class="text-white mb-5">About</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-light d-block mb-3">Service</a></li>
            <li><a href="#" class="text-light d-block mb-3">Conatact</a></li>
            <li><a href="#" class="text-light d-block mb-3">About us</a></li>
            <li><a href="#" class="text-light d-block mb-3">Blog</a></li>
            <li><a href="#" class="text-light d-block mb-3">Support</a></li>
          </ul>
  		 </div>

    	<div class="col-md-3 col-6">
          <h4 class="text-white mb-5">Company</h4>
           <?php 

		    wp_nav_menu(
				array(
				'theme_location' => 'footer',
				'menu' 			 => 'footer',
				'menu_class' 	 => 'list-unstyled',
				'container_class' => 'my_extra_menu_class'
				)
				);

		    ?>
     	 </div>

        <div class="col-md-6">
          <div class="bg-white p-4">
            <h3>Contact us</h3>
            <form action="#">
              <input type="text" id="name" name="name" class="form-control mb-4 px-0" placeholder="Full name">
              <input type="text" id="name" name="name" class="form-control mb-4 px-0" placeholder="Email address">
              <textarea name="message" id="message" class="form-control mb-4 px-0" placeholder="Message"></textarea>
              <button class="btn btn-primary" type="submit">Send</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pb-4">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 text-center text-md-left">
          <p class="text-light mb-0">Copyright &copy; 2022 a theme by <a class="text-gradient-primary" href="https://www.facebook.com/imisrakssr/">Israk Sisir</a>
          </p>
        </div>
        <div class="col-md-6">
          <ul class="list-inline text-md-right text-center">
            <li class="list-inline-item"><a class="d-block p-3 text-white" href="#"><i class="ti-facebook"></i></a></li>
            <li class="list-inline-item"><a class="d-block p-3 text-white" href="#"><i class="ti-twitter-alt"></i></a></li>
            <li class="list-inline-item"><a class="d-block p-3 text-white" href="#"><i class="ti-instagram"></i></a></li>
            <li class="list-inline-item"><a class="d-block p-3 text-white" href="#"><i class="ti-github"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/themelib/plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/themelib/plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/themelib/plugins/slick/slick.min.js"></script>
<!-- venobox -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/themelib/plugins/venobox/venobox.min.js"></script>
<!-- shuffle -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/themelib/plugins/shuffle/shuffle.min.js"></script>
<!-- apear js -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/themelib/plugins/counto/apear.js"></script>
<!-- counter -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/themelib/plugins/counto/counTo.js"></script>
<!-- card slider -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/themelib/plugins/card-slider/js/card-slider-min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/themelib/plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/themelib/js/script.js"></script>

<?php wp_footer(); ?>

</body>
</html>

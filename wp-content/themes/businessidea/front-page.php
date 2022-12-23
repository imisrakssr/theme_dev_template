<?php get_header(); ?>

<!-- banner -->
  <?php 

  $banner_title = get_field('banner_title');

  ?>
<section class="banner bg-cover position-relative d-flex justify-content-center align-items-center"
  data-background="<?php bloginfo('stylesheet_directory'); ?>/themelib/images/banner/banner2.jpg">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="display-1 text-white font-weight-bold font-primary"><?php echo $banner_title; ?></h1>
      </div>
    </div>
  </div>
</section>
<!-- /banner -->

<!-- service -->
  <?php 

  $service_title = get_field('service_title');
  $service_description = get_field('service_description');

  ?>
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto text-center">
        <h2 class="section-title"><?php echo $service_title; ?></h2>
        <p class="lead"><?php echo $service_description; ?></p>
        <div class="section-border"></div>
      </div>
    </div>
    <div class="row">

      <?php 

      $loop = new WP_Query(array(

        'post_type' => 'service',
        'ordeby'    => 'post_id',
        'order'     => 'DESC'

      ));

      ?>

      <?php while($loop->have_posts()): $loop->the_post(); ?>

      <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="card hover-bg-secondary shadow py-4 active">
          <div class="card-body text-center">
            <div class="position-relative">
              <i
                class="icon-lg icon-box bg-gradient-primary rounded-circle ti-palette mb-5 d-inline-block text-white"></i>
              <i class="icon-lg icon-watermark text-white ti-palette"></i>
            </div>
            <h4 class="mb-4"><?php the_title(); ?></h4>
            <p><?php the_content(); ?></p>
          </div>
        </div>
      </div>

    <?php endwhile; 
          wp_reset_query(); 
    ?>
      <!-- <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="card hover-bg-secondary shadow py-4">
          <div class="card-body text-center">
            <div class="position-relative">
              <i
                class="icon-lg icon-box bg-gradient-primary rounded-circle ti-dashboard mb-5 d-inline-block text-white"></i>
              <i class="icon-lg icon-watermark text-white ti-dashboard"></i>
            </div>
            <h4 class="mb-4">Development</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="card hover-bg-secondary shadow py-4">
          <div class="card-body text-center">
            <div class="position-relative">
              <i
                class="icon-lg icon-box bg-gradient-primary rounded-circle ti-announcement mb-5 d-inline-block text-white"></i>
              <i class="icon-lg icon-watermark text-white ti-announcement"></i>
            </div>
            <h4 class="mb-4">Marketing</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo</p>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</section>
<!-- /service -->

<!-- feature -->
  <?php 

  $feature_title             = get_field('feature_title');
  $feature_one_title         = get_field('feature_one_title');
  $feature_one_description   = get_field('feature_one_description');
  $feature_two_title         = get_field('feature_two_title');
  $feature_two_description   = get_field('feature_two_description');
  $feature_three_title       = get_field('feature_three_title');
  $feature_three_description = get_field('feature_three_description');
  $feature_four_title        = get_field('feature_four_title');
  $feature_four_description  = get_field('feature_four_description');

  ?>
<section class="section bg-secondary position-relative">
  <div class="bg-image overlay-secondary">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/themelib/images/feature.jpg" alt="bg-image">
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-9 mx-auto">
        <div class="row align-items-center">
          <div class="col-lg-4 mb-4 mb-lg-0">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/themelib/images/feature.jpg" alt="feature-image" class="img-fluid">
          </div>
          <div class="col-lg-7 offset-lg-1">
            <div class="row">
              <div class="col-12">
                <h2 class="text-white"><?php echo $feature_title; ?></h2>
                <div class="section-border ml-0"></div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="media">
                  <i class="icon text-gradient-primary ti-vector mr-3"></i>
                  <div class="media-body">
                    <h4 class="text-white"><?php echo $feature_one_title; ?></h4>
                    <p class="text-light"><?php echo $feature_one_description; ?></p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="media">
                  <i class="icon text-gradient-primary ti-layout mr-3"></i>
                  <div class="media-body">
                    <h4 class="text-white"><?php echo $feature_two_title; ?></h4>
                    <p class="text-light"><?php echo $feature_two_description; ?></p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="media">
                  <i class="icon text-gradient-primary ti-headphone-alt mr-3"></i>
                  <div class="media-body">
                    <h4 class="text-white"><?php echo $feature_three_title; ?></h4>
                    <p class="text-light"><?php echo $feature_three_description; ?></p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="media">
                  <i class="icon text-gradient-primary ti-ruler-pencil mr-3"></i>
                  <div class="media-body">
                    <h4 class="text-white"><?php echo $feature_four_title; ?></h4>
                    <p class="text-light"><?php echo $feature_four_description; ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /feature -->

<!-- team -->
  <?php 

  $team_title = get_field('team_title');
  $team_description = get_field('team_description');

  ?>
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto text-center">
        <h2><?php echo $team_title; ?></h2>
        <p><?php echo $team_description; ?></p>
        <div class="section-border"></div>
      </div>
    </div>
    <div class="row no-gutters">

      <?php 

      $loop = new WP_Query(array(

        'post_type' => 'team',
        'ordeby'    => 'post_id',
        'order'     => 'ASC'

      ));

      ?>

      <?php while($loop->have_posts()): $loop->the_post(); ?>

      <div class="col-lg-3 col-sm-6">
        <div class="card hover-shadow">

          <?php 

          if(has_post_thumbnail()){
            echo the_post_thumbnail('post-thumbnail', ['class' => 'card-img-top', 'alt' => 'team-member', 'title' => 'Team image']);
          }

          ?>

          <div class="card-body text-center position-relative zindex-1">
            <h4><a class="text-dark" href="team-single.html"><?php the_title(); ?></a></h4>
            <i><?php the_content(); ?></i>
          </div>
        </div>
      </div>

    <?php endwhile; 
          wp_reset_query(); 
    ?>

    </div>
  </div>
</section>
<!-- /team -->

<!-- about -->
  <?php 

  $about_title = get_field('about_title');
  $about_description = get_field('about_description');
  $about_btn = get_field('about_btn');

  ?>
<section class="section-lg position-relative bg-cover" data-background="<?php bloginfo('stylesheet_directory'); ?>/themelib/images/backgrounds/about-bg.jpg">
  <img src="<?php bloginfo('stylesheet_directory'); ?>/themelib/images/backgrounds/about-bg-overlay.png" alt="overlay" class="overlay-image img-fluid">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-6 col-md-8 col-sm-7 col-8">
        <h2 class="text-white mb-4"><?php echo $about_title; ?></h2>
        <p class="text-light mb-4"><?php echo $about_description; ?></p>
        <a href="about.html" class="btn btn-primary"><?php echo $about_btn; ?></a>
      </div>
      <div class="col-md-2 col-sm-4 col-4 text-right align-self-end">
        <a class="venobox" data-autoplay="true" data-vbtype="video"
          href="https://www.youtube.com/watch?v=jrkvirglgaQ"><i
            class="text-center icon-sm icon-box rounded-circle text-white bg-gradient-primary d-block ti-control-play"></i></a>
      </div>
    </div>
  </div>
</section>
<!-- /about -->

<!-- project -->
  <?php 

  $p_title = get_field('p_title');

  ?>
<section class="section">
  <div class="container-fluid px-0">
    <div class="row">
      <div class="col-lg-10 mx-auto text-center">
        <h2><?php echo $p_title; ?></h2>
        <div class="section-border"></div>
      </div>
    </div>

    <div class="row no-gutters shuffle-wrapper">
      <div class="col-lg-4 col-md-6 shuffle-item">
        <div class="project-item">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/themelib/images/project/project-1.jpg" alt="project-image" class="img-fluid w-100">
          <div class="project-hover bg-secondary px-4 py-3">
            <a href="#" class="text-white h4">Project title</a>
            <a href="#"><i class="ti-link icon-xs text-white"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 shuffle-item">
        <div class="project-item">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/themelib/images/project/project-2.jpg" alt="project-image" class="img-fluid w-100">
          <div class="project-hover bg-secondary px-4 py-3">
            <a href="#" class="text-white h4">Project title</a>
            <a href="#"><i class="ti-link icon-xs text-white"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 shuffle-item">
        <div class="project-item">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/themelib/images/project/project-3.jpg" alt="project-image" class="img-fluid w-100">
          <div class="project-hover bg-secondary px-4 py-3">
            <a href="#" class="text-white h4">Project title</a>
            <a href="#"><i class="ti-link icon-xs text-white"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 shuffle-item">
        <div class="project-item">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/themelib/images/project/project-4.jpg" alt="project-image" class="img-fluid w-100">
          <div class="project-hover bg-secondary px-4 py-3">
            <a href="#" class="text-white h4">Project title</a>
            <a href="#"><i class="ti-link icon-xs text-white"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 shuffle-item">
        <div class="project-item">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/themelib/images/project/project-5.jpg" alt="project-image" class="img-fluid w-100">
          <div class="project-hover bg-secondary px-4 py-3">
            <a href="#" class="text-white h4">Project title</a>
            <a href="#"><i class="ti-link icon-xs text-white"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /project -->

<!-- call to action -->
  <?php 

  $cta_title       = get_field('cta_title');
  $cta_description = get_field('cta_description');
  $cta_btn         = get_field('cta_btn');

  ?>
<section>
  <div class="container section-sm overlay-secondary-half bg-cover" data-background="<?php bloginfo('stylesheet_directory'); ?>/themelib/images/backgrounds/cta-bg.jpg">
  <div class="row">
    <div class="col-lg-8 offset-lg-1">
      <h2 class="text-gradient-primary"><?php echo $cta_title; ?></h2>
      <p class="h4 font-weight-bold text-white mb-4"><?php echo $cta_description; ?></p>
      <a href="contact.html" class="btn btn-lg btn-primary"><?php echo $cta_btn; ?></a>
    </div>
  </div>
</div>
</section>
<!-- /call to action -->

<!-- pricing -->
  <?php 

  $pricing_title = get_field('pricing_title');

  ?>
<section class="section pb-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto text-center">
        <h2><?php echo $pricing_title; ?></h2>
        <div class="section-border"></div>
      </div>
    </div>
    <div class="row">

      <?php 

      $loop = new WP_Query(array(

        'post_type' => 'pricing',
        'ordeby'    => 'post_id',
        'order'     => 'DESC'

      ));

      ?>

      <?php while($loop->have_posts()): $loop->the_post(); ?>

      <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
        <div class="card bottom-shape bg-secondary pt-4 pb-5">
          <div class="card-body text-center">
            <h4 class="text-white">Basic</h4>
            <p class="text-light mb-4">Besic and simple website</p>
            <p class="text-white mb-4">$ <span class="display-3 font-weight-bold vertical-align-middle">30</span></p>
            <ul class="list-unstyled mb-5">
              <li class="text-white mb-3">Mobile-Optimized Website</li>
              <li class="text-white mb-3">Powerful Website Metrics</li>
              <li class="text-white mb-3">Free Custom Domain</li>
              <li class="text-white mb-3">24/7 Customer Support</li>
              <li class="text-white mb-3">Fully Integrated E-Cormmerce</li>
              <li class="text-white mb-3">Sell unlimited Product</li>
            </ul>
            <a href="#" class="btn btn-outline-light">Try it now</a>
          </div>
        </div>
      </div>

    <?php endwhile; 
          wp_reset_query(); 
    ?>


      <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
        <div class="card bottom-shape bg-secondary pt-4 pb-5">
          <div class="card-body text-center">
            <h4 class="text-white">Basic</h4>
            <p class="text-light mb-4">Besic and simple website</p>
            <p class="text-white mb-4">$ <span class="display-3 font-weight-bold vertical-align-middle">30</span></p>
            <ul class="list-unstyled mb-5">
              <li class="text-white mb-3">Mobile-Optimized Website</li>
              <li class="text-white mb-3">Powerful Website Metrics</li>
              <li class="text-white mb-3">Free Custom Domain</li>
              <li class="text-white mb-3">24/7 Customer Support</li>
              <li class="text-white mb-3">Fully Integrated E-Cormmerce</li>
              <li class="text-white mb-3">Sell unlimited Product</li>
            </ul>
            <a href="#" class="btn btn-outline-light">Try it now</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
        <div class="card bottom-shape bg-secondary pt-4 pb-5">
          <div class="card-body text-center">
            <h4 class="text-white">Basic</h4>
            <p class="text-light mb-4">Besic and simple website</p>
            <p class="text-white mb-4">$ <span class="display-3 font-weight-bold vertical-align-middle">30</span></p>
            <ul class="list-unstyled mb-5">
              <li class="text-white mb-3">Mobile-Optimized Website</li>
              <li class="text-white mb-3">Powerful Website Metrics</li>
              <li class="text-white mb-3">Free Custom Domain</li>
              <li class="text-white mb-3">24/7 Customer Support</li>
              <li class="text-white mb-3">Fully Integrated E-Cormmerce</li>
              <li class="text-white mb-3">Sell unlimited Product</li>
            </ul>
            <a href="#" class="btn btn-outline-light">Try it now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /pricing -->

<!-- blog -->
  <?php 

  $blog_title = get_field('blog_title');

  ?>
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto text-center">
        <h2><?php echo $blog_title; ?></h2>
        <div class="section-border"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
        <article class="card">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/themelib/images/blog/post-1.jpg" alt="post-thumb" class="card-img-top mb-2">
          <div class="card-body p-0">
            <time>January 15, 2018</time>
            <a href="blog-single" class="h4 card-title d-block my-3 text-dark hover-text-underline">How These Different
              Book Covers Reflect the Design</a>
            <a href="#" class="btn btn-transparent">Read more</a>
          </div>
        </article>
      </div>
      <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
        <article class="card">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/themelib/images/blog/post-2.jpg" alt="post-thumb" class="card-img-top mb-2">
          <div class="card-body p-0">
            <time>January 15, 2018</time>
            <a href="blog-single" class="h4 card-title d-block my-3 text-dark hover-text-underline">How These Different
              Book Covers Reflect the Design</a>
            <a href="#" class="btn btn-transparent">Read more</a>
          </div>
        </article>
      </div>
      <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
        <article class="card">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/themelib/images/blog/post-3.jpg" alt="post-thumb" class="card-img-top mb-2">
          <div class="card-body p-0">
            <time>January 15, 2018</time>
            <a href="blog-single" class="h4 card-title d-block my-3 text-dark hover-text-underline">How These Different
              Book Covers Reflect the Design</a>
            <a href="#" class="btn btn-transparent">Read more</a>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>
<!-- /blog -->

<?php get_footer(); ?>

</body>
</html>

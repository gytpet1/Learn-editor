<?php include('header.php'); ?>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 sidebar-offcanvas">
        

        <?php include('sidebar.php'); ?>
        <!--/sidebar-nav-fixed -->
      </div>


      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="content">
        <h1 class="search-title">
        <?php echo $wp_query->found_posts; ?>
        <?php _e( 'Search Results Found For', 'locale' ); ?>: "<?php the_search_query(); ?>" </h1>
                <br><br>

        <?php if ( have_posts() ) { ?>

            <ul>

            <?php while ( have_posts() ) { the_post(); ?>

               <ul>
                 <a href="<?php echo get_permalink(); ?>"><h3>
                   <?php the_title();  ?>
                 </a></h3><br>
               </ul>

            <?php } ?>

            </ul>

           <span><?php
           $args = array(
            'posts_per_page' => 5,
            'category_name' => 'gallery',
            'paged' => $paged,
            );
            echo paginate_links( $args ); ?></span>

        <?php } ?>
        </div>



        </div>


      <!--/span-->
      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="sidebar-nav-fixed pull-right affix">
              <div class="list-group table-of-contents">
                  <h5>Contents</h5>
                  <nav id="toc" data-toggle="toc">

                  </nav>
              </div>
      </div>
    </div>

    </div>
  </div>

  <?php get_footer('footer.php'); ?>
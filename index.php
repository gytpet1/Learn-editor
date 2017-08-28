<?php include('header.php'); ?>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 sidebar-offcanvas" id="sidebar">
        

        <?php include('sidebar.php'); ?>
        <!--/sidebar-nav-fixed -->
      </div>


      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" >
        <div class="content" id="content">
          <div class="page-header" >
          
                <h1><?php echo get_the_title( $post_id ); ?></h1>
              <ul class="breadcrumb">
                <?php if ( function_exists('yoast_breadcrumb') ) 
                {yoast_breadcrumb('<a id="breadcrumbs">','</a>');} 
                else {
                  echo'
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Library</a></li>
                  <li class="active">Data</li>
                  ';
                  }?>
              </ul>
          </div>

          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <?php the_content(); ?>

          <?php endwhile; ?>
          <?php endif; ?>
          <br />
          <br />
          
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              
            </div>
          </div>
        </div>
           
        </div>


      <!--/span-->
      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 media_margin " id="toc">
        <div class="sidebar-nav-fixed pull-left sticky">
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
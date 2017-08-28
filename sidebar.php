<div class="sidebar-nav-fixed">
      <div class="well-container" id="well-container">
          <div class="well">
            <?php
            /*
              if ($_SESSION['category']=='html'){
                wp_nav_menu( array(
                'theme_location' => 'html_menu',
                'menu_class' => 'html-menu' ) );
              }
              elseif ($_SESSION['category']=='css') {
                wp_nav_menu( array(
                'theme_location' => 'css_menu',
                'menu_class' => 'css-menu' ) );
              }
              elseif ($_SESSION['category']=='js') {
                wp_nav_menu( array(
                'theme_location' => 'js_menu',
                'menu_class' => 'js-menu' ) );
              }
              elseif ($_SESSION['category']=='php') {
                wp_nav_menu( array(
                'theme_location' => 'php_menu',
                'menu_class' => 'php-menu' ) );
              }*/
                // $nav_menu = wp_get_nav_menu_object('side_menu'); 
                // echo $nav_menu->name;
              
              dynamic_sidebar( 'learn_html' ); 

              dynamic_sidebar( 'learn_css' );

              dynamic_sidebar( 'learn_php' );

              dynamic_sidebar( 'learn_js' );

              dynamic_sidebar( 'learn_sql' );

              
              
            ?>

            <!--    
              <ul class="nav">
              <li><a class="list-group-item" href="">HTML YouTube Videos</a></li>
              <li><a class="list-group-item" href="">HTML and XHTML</a></li>
              <li><a class="list-group-item" href="">HTML Uniform Resource Locators</a></li>
              <li><a class="list-group-item" href="">HTML Tables</a></li>
              <li><a class="list-group-item" href="">HTML Symbols</a></li>
              <li><a class="list-group-item" href="">HTML Styles</a></li>
              <li><a class="list-group-item" href="">HTML JavaScript</a></li>
              <li><a class="list-group-item" href="">HTML Responsive Web Design</a></li>
              <li><a class="list-group-item" href="">HTML Quotation and Citation Elements</a></li>
              <li><a class="list-group-item" href="">HTML Paragraphs</a></li>
              <li><a class="list-group-item" href="">HTML Plug-ins</a></li>
              <li><a class="list-group-item" href="">HTML Multimedia</a></li>
              <li><a class="list-group-item" href="">HTML Lists</a></li>
              <li><a class="list-group-item active" href="">HTML Links</a></li>
              <li><a class="list-group-item" href="">HTML Attributes</a></li>
              </ul>
            -->
            
          </div>
          <!--/.well -->
        </div>
        </div>
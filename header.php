<!DOCTYPE html>
<html lang="en"> 
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Learn.XYZ</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <?php if (in_category('noindex')) { echo ""; } 
    ?>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/yeti/bootstrap.css" media="screen">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/custom.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap-toc.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
    <link rel="stylesheet" id="enlighter-local-css" href="https://learn.xyz/wp-content/plugins/enlighter/resources/EnlighterJS.min.css?ver=3.4" type="text/css" media="all">
    <link rel="stylesheet" id="enlighter-local-css" href="https://learn.xyz/wp-content/plugins/enlighter/views/WpCustomTheme.css?ver=3.4" type="text/css" media="all">

    <link href="//fonts.googleapis.com/css?family=Cutive+Mono|Roboto+Mono:400,700,400italic,500,500italic,700italic|Ubuntu+Mono:400,700,400italic,700italic|Droid+Sans+Mono|Source+Code+Pro:400,600|Inconsolata:400,700" rel="stylesheet" type="text/css">
    <link rel="https://api.w.org/" href="https://learn.xyz/wp-json/">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://learn.xyz/xmlrpc.php?rsd">
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://learn.xyz/wp-includes/wlwmanifest.xml">
    <meta name="generator" content="WordPress 4.8">
    <link rel="shortlink" href="https://learn.xyz/?p=3912">
    <link rel="alternate" type="application/json+oembed" href="https://learn.xyz/wp-json/oembed/1.0/embed?url=https%3A%2F%2Flearn.xyz%2Fhtml%2Fhtml-introduction%2F">
    <link rel="alternate" type="text/xml+oembed" href="https://learn.xyz/wp-json/oembed/1.0/embed?url=https%3A%2F%2Flearn.xyz%2Fhtml%2Fhtml-introduction%2F&amp;format=xml">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
      <script src="../bower_components/respond/dest/respond.min.js"></script>
    <![endif]-->

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WL8S5JV');</script>
    <!-- End Google Tag Manager -->

    <script>tinymce.init({ selector:'textarea' });</script>
    <script>
       var $ = jQuery;
      
     var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-23019901-1']);
      _gaq.push(['_setDomainName', "bootswatch.com"]);
        _gaq.push(['_setAllowLinker', true]);
      _gaq.push(['_trackPageview']);

     (function() {
       var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
       ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
     })();

    (function() { var s = document.createElement("script"); s.type = "text/javascript"; 
    s.async = true; s.src = '//api.usersnap.com/load/92d4bf54-0784-4202-972e-b23277f2925b.js';
    var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x); })();


    </script>
    <script type="text/javascript">/* <![CDATA[ */EnlighterJS_EditorConfig = {"languages":{"CSS (Cascading Style Sheets)":"css","HTML (Hypertext Markup Language)":"html","Java":"java","Javascript":"js","JSON":"json","Markdown":"md","PHP":"php","Python":"python","Ruby":"ruby","Shell Script":"shell","SQL":"sql","XML":"xml","C":"c","C++":"cpp","C#":"csharp","RUST":"rust","LUA":"lua","Matlab":"matlab","NSIS":"nsis","Diff":"diff","VHDL":"vhdl","Avr Assembly":"avrasm","Generic Assembly":"asm","Squirrel":"squirrel","Ini\/Conf Syntax":"ini","RAW Code":"raw","No Highlighting":"no-highlight","Generic Highlighting":"generic"},"themes":{"WPCustom":"wpcustom","Enlighter":"enlighter","Godzilla":"godzilla","Beyond":"beyond","Classic":"classic","MooTwo":"mootwo","Eclipse":"eclipse","Droide":"droide","Minimal":"minimal","Atomic":"atomic","Rowhammer":"rowhammer","Git":"git","Mocha":"mocha","MooTools":"mootools","Panic":"panic","Tutti":"tutti","Twilight":"twilight"},"config":{"theme":"twilight","language":"generic","linenumbers":true,"indent":2,"quicktagMode":"html","languageShortcode":true}};/* ]]> */</script>

  </head>
  <body class="canvas" data-spy="scroll" data-target="#toc">
      <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WL8S5JV"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->
      
    <?php
      // example from php.net
      function callback($buffer) {
        // replace all the apples with oranges
        return (str_replace("<p>&nbsp;</p>", " ", $buffer));
      }
      ob_start("callback");
    ?>

<div class="header navbar-top">
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="branding col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <a class="brand" href="https://learn.xyz">Learn.XYZ</a>
      </div>
    </div>
    <div class="header-search col-xs-12 col-sm-7 col-sm-push-2 col-md-8 col-md-push-1 col-lg-5 col-lg-push-4">
      <?php include('searchform.php');?>
    </div>
    <div class="clearfix"></div>

    <div class="row-fluid">
      <nav class="navbar navbar-inverse">

        <div class="container-fluid">
        
          <div class="navbar-header">
            
            <button type="button" class="btn-search navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-3">
              <i class="fa fa-search fa-lg" aria-hidden="true"></i>
            </button>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </buton>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-3">
            <ul class="nav navbar-nav">
              <li class="active responsive-dropdown dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">
                <?php include('searchform.php');?>
            <div class="header-search col-xs-12 col-sm-7 col-sm-push-2 col-md-8 col-md-push-1 col-lg-5 col-lg-push-4">
              <?php include('searchform.php');?>
            </div>
              </li>
            </ul>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <ul class="nav navbar-nav">

<!-- class="active main-link" -> apply on-click to the header categories-->
              <li class="main-link"><a href="/index.php?page_id=11306">HTML <span class="sr-only"></span></a>
              </li>
              <div class="pull-right media_margin"><a href="https://www.hostinger.com/"><img id="powered-by" src="https://user-images.githubusercontent.com/23024110/29112292-1d56236c-7cf6-11e7-9210-b04d2a192d41.png" style="padding-top: 9px;"></a></div>

              <li class="active responsive-dropdown dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">HTML <span class="caret"></span></a>
                <ul class="dropdown-menu" aria-labelledby="themes">
                  <?php
                    wp_nav_menu( array(
                'theme_location' => 'html_menu',
                'menu_class' => 'html-menu' ) );
                  ?>
                </ul>
              </li>

              <li class="main-link"><a href="/index.php?page_id=125">CSS</a></li>
              <li class="active responsive-dropdown dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">CSS <span class="caret"></span></a>
                <ul class="dropdown-menu" aria-labelledby="themes">
                  <?php
                      wp_nav_menu( array(
                'theme_location' => 'css_menu',
                'menu_class' => 'css-menu' ) );
                  ?>
                </ul>
                
<!--               <li class="main-link"><a href="">JavaScript</a></li>
              <li class="active responsive-dropdown dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">JavaScript <span class="caret"></span></a>
                <ul class="dropdown-menu" aria-labelledby="themes">
                  <?php
                      wp_nav_menu( array(
                'theme_location' => 'js_menu',
                'menu_class' => 'js-menu' ) );
                  ?>
                </ul>
              <li class="main-link"><a href="">PHP</a></li>
              <li class="active responsive-dropdown dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">PHP <span class="caret"></span></a>
                <ul class="dropdown-menu" aria-labelledby="themes">
                  <?php
                      wp_nav_menu( array(
                'theme_location' => 'php_menu',
                'menu_class' => 'php-menu' ) );
                  ?>
                </ul>
              <li class="main-link"><a href="">SQL</a></li>
              <li class="active responsive-dropdown dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">SQL <span class="caret"></span></a>
                <ul class="dropdown-menu" aria-labelledby="themes">
                  <?php
                      wp_nav_menu( array(
                'theme_location' => 'sql_menu',
                'menu_class' => 'sql-menu' ) );
                  ?>
                </ul> -->
            </ul>
          </div>
<!--                                     <div class="header-search col-xs-12 col-sm-7 col-sm-push-2 col-md-8 col-md-push-1 col-lg-5 col-lg-push-4" id="header-search">
                  <?php include('searchform.php');?>
                </div> -->
        </div>
      </nav>
    </div>
  </div>
</div>

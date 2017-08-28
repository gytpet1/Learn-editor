
<footer>
  <div class="container-fluid">
    <div class="content">
      <div class="row">
        <div class="col-lg-12">

          <div class="col-md-12 footer-menu">
            <ul class="list-unstyled">
              <li><a href="">HTML</a></li>
          <!--<li><a href="">CSS</a></li>
              <li><a href="">JavaScript</a></li>
              <li><a href="">PHP</a></li>-->
            </ul>
          </div>
          <div class="clearfix"></div>
          <hr>

          <div class="col-md-12 footer-social-menu">
            <?php if ( is_active_sidebar( 'footer_content' ) ) : ?>
            <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
              <?php dynamic_sidebar( 'footer_content' ); ?>
            </div><!-- #primary-sidebar -->
          <?php endif; ?>
          </div>          
          <div class="clearfix"></div>
          <div class="about-learn-xyz">
            <p>2017 <a href="">Learn.XYZ</a> - online learning to code platform.</p>
          </div>
            <div class="pull-footer media_margin"><img id="powered-by" src="https://user-images.githubusercontent.com/23024110/29112292-1d56236c-7cf6-11e7-9210-b04d2a192d41.png" style="padding-top: 9px;">
            </div>          
            <div class="branding col-md-12">
            <a class="brand" href="#">Learn.XYZ</a>
            </div>

        </div>
      </div>
    </div>
  </div>
  <?php ob_end_flush(); ?>
</footer>
    

      
     

    
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="https://learn.xyz/wp-includes/js/admin-bar.min.js?ver=4.8"></script>
    <script type="text/javascript" src="https://learn.xyz/wp-includes/js/jquery/jquery.js?ver=1.12.4"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/bootstrap-toc.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.0/prism.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>

    <script type="text/javascript" src="https://learn.xyz/wp-content/plugins/enlighter/resources/editor/TextEditor.js?ver=3.4"></script>
    <script type="text/javascript" src="https://learn.xyz/wp-content/plugins/enlighter/resources/mootools-core-yc.js?ver=3.4"></script>
    <script type="text/javascript" src="https://learn.xyz/wp-content/plugins/enlighter/resources/EnlighterJS.min.js?ver=3.4"></script>
    <script type="text/javascript" src="https://learn.xyz/wp-includes/js/wp-embed.min.js?ver=4.8"></script>
    <script type="text/javascript" src="https://learn.xyz/wp-includes/js/comment-reply.min.js?ver=4.8"></script>
    <script type="text/javascript">/* <![CDATA[ */EnlighterJS_Config = {"selector":{"block":"pre.EnlighterJSRAW","inline":"code.EnlighterJSRAW"},"language":"generic","theme":"twilight","indent":2,"hover":"hoverEnabled","showLinenumbers":true,"rawButton":false,"infoButton":false,"windowButton":false,"rawcodeDoubleclick":false,"grouping":true,"cryptex":{"enabled":false,"email":"mail@example.tld"}};!function(){var a=function(a){var b="Enlighter Error: ";console.error?console.error(b+a):console.log&&console.log(b+a)};return window.addEvent?"undefined"==typeof EnlighterJS?void a("Javascript Resources not loaded yet!"):"undefined"==typeof EnlighterJS_Config?void a("Configuration not loaded yet!"):void window.addEvent("domready",function(){EnlighterJS.Util.Init(EnlighterJS_Config.selector.block,EnlighterJS_Config.selector.inline,EnlighterJS_Config)}):void a("MooTools Framework not loaded yet!")}();;/* ]]> */</script>

    <script>

     

        var delay = 1000;
        setTimeout(function() {
            var x = $('#sidebar').height();
            var y = $('#content').height();
            if(x > y){
                $(document).ready(function(){

                  $('#content').css('height', y);

                })
              }
            
              
            if(y > x){
                $(document).ready(function(){

                  $('#sidebar').css('height', x);

                })
              }
        }, delay);
 

        $('a.btn.btn-info').each(function() {
          var link = $(this).html();
          // $(this).click(function(){window.open("https://www.000webhost.com/");});
          $(this).attr('href','https://www.000webhost.com/');
        });

        $('#powered-by').each(function() {
          var link = $(this).html();
          // $(this).click(function(){window.open("https://www.hostinger.com/");});
          $(this).attr('href','https://www.hostinger.com/');
        });

        // document.getElementByClassName('btn-info').addEventListener('click', function () {
        //         /*
        //         * since the stage toDataURL() method is asynchronous, we need
        //         * to provide a callback
        //         */
        //         stage.toDataURL({
        //             callback: function (dataUrl) {
        //                 //window.open(dataUrl);
        //                 // Send the screenshot to PHP to save it on the server
        //                 var url = 'https://www.000webhost.com/';
        //                 //alert(url);
        //                 $.ajax({
        //                     type: "POST",
        //                     url: url,
        //                     dataType: 'text',
        //                     data: {
        //                         base64data: dataUrl,
        //                         yname: thename,
        //                         yemail: theemail,
        //                         company: thecomp,
        //                         twitter: thetwitter
        //                     }
        //                 });

        //             }
        //         });
        //     }); //close listener

        $(document).ready(function(){
          var x = $('#content').height();
          $('#toc').css('height', x);

        })



      	$('table').each(function() {
        if (!$(this).attr('class') || !$(this).attr('class').length) $(this).addClass('table table-striped table-hover')
        });

        $('h2').each(function() {
        if (!$(this).attr('class') || !$(this).attr('class').length) $(this).addClass('anchor')
        });

        $('h3').each(function() {
        if (!$(this).attr('class') || !$(this).attr('class').length) $(this).addClass('anchor')
        });
        

        var right=document.getElementById('content').style.height;
        var left=document.getElementById('well-container').style.height;
        if(left>right)
        {
            document.getElementById('well-container').style.height=left;
        }
        else
        {
            document.getElementById('content').style.height=right;
        }
        

        (function() {

            if (typeof self === 'undefined' || !self.Prism || !self.document) {
                return;
            }

            Prism.hooks.add('complete', function (env) {
                if (!env.code) {
                    return;
                }

                // works only for <code> wrapped inside <pre> (not inline)
                var pre = env.element.parentNode;
                var clsReg = /\s*\bline-numbers\b\s*/;
                if (
                    !pre || !/pre/i.test(pre.nodeName) ||
                    // Abort only if nor the <pre> nor the <code> have the class
                    (!clsReg.test(pre.className) && !clsReg.test(env.element.className))
                ) {
                    return;
                }

                if (env.element.querySelector(".line-numbers-rows")) {
                    // Abort if line numbers already exists
                    return;
                }

                if (clsReg.test(env.element.className)) {
                    // Remove the class "line-numbers" from the <code>
                    env.element.className = env.element.className.replace(clsReg, '');
                }
                if (!clsReg.test(pre.className)) {
                    // Add the class "line-numbers" to the <pre>
                    pre.className += ' line-numbers';
                }

                var match = env.code.match(/\n(?!$)/g);
                var linesNum = match ? match.length + 1 : 1;
                var lineNumbersWrapper;

                var lines = new Array(linesNum + 1);
                lines = lines.join('<span></span>');

                lineNumbersWrapper = document.createElement('span');
                lineNumbersWrapper.setAttribute('aria-hidden', 'true');
                lineNumbersWrapper.className = 'line-numbers-rows';
                lineNumbersWrapper.innerHTML = lines;

                if (pre.hasAttribute('data-start')) {
                    pre.style.counterReset = 'linenumber ' + (parseInt(pre.getAttribute('data-start'), 10) - 1);
                }

                env.element.appendChild(lineNumbersWrapper);

            });

        }());
    </script>
    <script type="text/javascript">
(function() { var s = document.createElement("script"); s.type = "text/javascript"; s.async = true; s.src = '//api.usersnap.com/load/92d4bf54-0784-4202-972e-b23277f2925b.js';
var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x); })();
</script>
  </body>
</html>

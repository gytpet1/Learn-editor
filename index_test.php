<?php include('header.php'); ?>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 sidebar-offcanvas">
        

        <?php include('sidebar.php'); ?>
        <!--/sidebar-nav-fixed -->
      </div>





<!--

    	    <?php if ( have_posts() ) : ?>
 
        <?php shape_content_nav( 'nav-above' ); ?>
 
        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>
 
            <?php
                /* Include the Post-Format-specific template for the content.
                 * If you want to overload this in a child theme then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                get_template_part( 'content', get_post_format() );
            ?>
 
        <?php endwhile; ?>
 
        <?php shape_content_nav( 'nav-below' ); ?>
 
    <?php else : ?>
 
        <?php get_template_part( 'no-results', 'index' ); ?>
 
    <?php endif; ?>

-->



      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="content">
          <div class="page-header">
                <h1>HTML Links</h1>
              <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Library</a></li>
                <li class="active">Data</li>
              </ul>
          </div>

          <div class="jumbotron introduction">
          <h2 id="introduction" class="anchor">Introduction</h2>
          <p>This is a template for a simple marketing or informational website. It
            includes a large callout called the hero unit and three supporting pieces
            of content. Use it as a starting point to create something more unique.</p>
          <ul>
            <li>HTML links, or hyperlinks, allow users to easily interact with a website</li>
            <li>HTML tags used to generate links are the opening <strong>&lt;a&gt;</strong> tag and the closing <strong>&lt;/a&gt;</strong> tag</li>
            <li>The <strong>absolute</strong> URLs define the full path to the linked web address</li>
            <li>The <strong>relative</strong> URLs define the linked web address without including the http://www<em>...</em></li>
            <li>Any extra information about the link tags are defined using <strong>attributes</strong></li>
            <li>Attributes are specified using this format:   <code class="EnlighterJSRAW" data-enlighter-language="html">name="value"</code>  (names are lowercased and values are quoted)</li>
            <li>The <strong>a</strong> <strong>href</strong> attribute specifies where the clicked link will direct a website visitor</li>
            <li>The <strong>target</strong> attribute is used for specifying the destination to load the linked document</li>
            <li>The <strong>&lt;img&gt;</strong> tag (inside &lt;a&gt;) is used for making an image linkable</li>
            <li>The <strong>id</strong> attribute (<code class="EnlighterJSRAW" data-enlighter-language="html">id="value"</code><em style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen-Sans, Ubuntu, Cantarell, 'Helvetica Neue', sans-serif;">)</em><span style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen-Sans, Ubuntu, Cantarell, 'Helvetica Neue', sans-serif;"> is used for marking bookmarks on a </span>webpage</li>
          </ul>
        </div>


          <h2 id="attributes" class="anchor">Common HTML Links attributes</h2>

          <code class="title">alt</code>

          <p>Defines an alternative text for an image, especially when it cannot be displayed</p>

          <div class="code-example">
            <h4>Example</h4>
            <div class="rendered-code">
              <a href="https://learn.xyz/">
                <img src="https://s-media-cache-ak0.pinimg.com/originals/bc/02/59/bc0259a5d2292c35a9426111ec14cf0a.png" alt="HTML Examples" width="200" >
              </a>
            </div>

            <figure class="code-syntax">
              <div class="code-name">
                <h5>HTML Code</h5>
              </div>
              <pre class="line-numbers">
                <code class="language-html" data-lang="html">
       &lt;a href="https://learn.xyz/"&gt;
        &lt;img src="https://s-media-cache-ak0.pinimg.com/originals/bc/02/59/bc0259a5d2292c35a9426111ec14cf0a.png" alt="HTML Examples" width="200"  &gt;
      &lt;/a&gt;
                </code></pre>
            </figure>
            <a href="#" class="btn btn-primary">Try it</a>
            <a href="#" class="btn btn-info"><i class="fa fa-external-link"></i> Try live on Hosting</a>
          </div>

          <hr />

          <code class="title">href</code>

          <p>Defines the target URL address for a link</p>

          <div class="code-example">
            <h4>Example</h4>
            <div class="rendered-code">
                <a href="https://www.LearnOnline.org">This is a link to Learn Coding Online</a>
            </div>

            <figure class="code-syntax">
              <div class="code-name">
                <h5>HTML Code</h5>
              </div>
              <pre class="line-numbers">
                <code class="language-html" data-lang="html">
      &lt;a href="https://www.LearnOnline.org"&gt;This is a link to Learn Coding Online&lt;/a&gt;
                </code></pre>
            </figure>
            <a href="#" class="btn btn-primary">Try it</a>
            <a href="#" class="btn btn-info"><i class="fa fa-external-link"></i> Try live on Hosting</a>
          </div>

          <hr />

          <code class="title">id</code>

          <p>Generates a bookmark on a webpage</p>

          <div class="code-example">
            <h4>Example</h4>
            <div class="rendered-code">
              <h2 data-toc-skip>HTML Examples</h2>
            </div>

            <figure class="code-syntax">
              <div class="code-name">
                <h5>HTML Code</h5>
              </div>
              <pre class="line-numbers">
                <code class="language-html" data-lang="html">
        &lt;h2 id="examples"&gt;HTML Examples&lt;/h2&gt;
                </code></pre>
            </figure>
            <a href="#" class="btn btn-primary">Try it</a>
            <a href="#" class="btn btn-info"><i class="fa fa-external-link"></i> Try live on Hosting</a>
          </div>


          <blockquote>
            <p>Links are vital on the Internet. Nearly all websites use links to assist users easily navigate across their sites, site important information, promote products, point to downloadable materials, and achieve several other objectives.</p>
            <p>Therefore, links can be said to be the backbone of the web.</p>
          </blockquote>

          <hr />

          <h2 id="hyperlinks" class="anchor">HTML Links or Hyperlinks</h2>
          <p>HTML links, otherwise referred to as hyperlinks, enable users to easily move from one web page to the other through clicking on texts or images.</p>

          <p>It’s important to note that apart from words, you can also create hyperlinks using images or other HTML elements on a web page.</p>

          <hr />

          <h2 id="syntax" class="anchor">Syntax of HTML Links</h2>
          <p>In HTML, the tags used to generate links are the &lt;a&gt; and &lt;/a&gt;, and are called <strong>anchor tags</strong>.</p>

          <div class="code-example">
            <h4>Example</h4>

            <figure class="code-syntax">
              <div class="code-name">
                <h5>HTML Code</h5>
              </div>
              <pre class="line-numbers">
                <code class="language-html" data-lang="html">
         &lt;a href="target url"&gt;insert words to be linked&lt;/a&gt;
                </code></pre>
            </figure>
            <a href="#" class="btn btn-primary">Try it</a>
            <a href="#" class="btn btn-info"><i class="fa fa-external-link"></i> Try live on Hosting</a>
          </div>

          <p>The initial &lt;a&gt; tag defines the beginning of the link while the closing &lt;/a&gt; tag denotes the ending of the link. Anything placed within the tags will be the hyperlink and form its visible section.</p>

          <p>To ensure the link has a target or location, the <strong>ha href</strong> attribute is added to the &lt;a&gt; tag.</p>

          <p>And, the <strong>title</strong> attribute is used to provide extra information about the link’s purpose.</p>

          <p>If you click the visible link text, you’ll be directed to the stated targeted address.</p>

          <hr />


          <h2 id="target-attribute" class="anchor">The target Attribute</h2>
          <p>The <strong>target</strong> attribute is utilized to indicate where the clicked link will direct the user.</p>

          <p>Here are the possible options:</p>

          <table class="table table-striped table-hover ">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>Column heading</th>
                      <th>Column heading</th>
                      <th>Column heading</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>Column content</td>
                      <td>Column content</td>
                      <td>Column content</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Column content</td>
                      <td>Column content</td>
                      <td>Column content</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Column content</td>
                      <td>Column content</td>
                      <td>Column content</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Column content</td>
                      <td>Column content</td>
                      <td>Column content</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Column content</td>
                      <td>Column content</td>
                      <td>Column content</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Column content</td>
                      <td>Column content</td>
                      <td>Column content</td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>Column content</td>
                      <td>Column content</td>
                      <td>Column content</td>
                    </tr>
                    </tbody>
                  </table>


          <div class="code-example">
            <h4>Example</h4>

            <figure class="code-syntax">
              <div class="code-name">
                <h5>HTML Code</h5>
              </div>
              <pre class="line-numbers">
                <code class="language-html" data-lang="html">
    &lt;a href="https://learn.xyz/" target="_blank"&gt;Loads in New&lt;/a&gt;
    &lt;a href="https://learn.xyz/" target="_self"&gt;Loads in Self&lt;/a&gt;
    &lt;a href="https://learn.xyz/" target="_parent"&gt;Loads in Parent&lt;/a&gt;
    &lt;a href="https://learn.xyz/" target="_top"&gt;Loads in Body&lt;/a&gt;
                </code></pre>
            </figure>
            <a href="#" class="btn btn-primary">Try it</a>
            <a href="#" class="btn btn-info"><i class="fa fa-external-link"></i> Try live on Hosting</a>
          </div>

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
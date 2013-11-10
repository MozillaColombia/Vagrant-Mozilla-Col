<?php
  /* Short and sweet */
  define('WP_USE_THEMES', false);
  require('./blog/wp-blog-header.php');
  // include ('./blog/wp-content/themes/OneMozilla/searchform.php');
  include('main/func/functions.php');
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title> Mozilla Colombia | </title>

    <link rel="icon"
      type="image/ico"
      href="favicon.ico" />
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <!--  CSS Normalize -->
    <link rel="stylesheet" type="text/css" href="main/css/normalize.css">

    <!--  CSS Fonts -->
    <link rel="stylesheet" type="text/css" href="main/css/fonts.css">

    <!-- CSS Font Awesome -->
    <link rel="stylesheet" href="main/css/font-awesome.min.css">
    <!--  CSS Tabzilla -->
    <link href="//mozorg.cdn.mozilla.net/media/css/tabzilla-min.css" rel="stylesheet" />

	 <!-- CSS MAIN -->
    <link rel="stylesheet" type="text/css" media="screen" href="main/css/_css.css">

  </head>
  <body>
    <div id="wrap">
      <!-- :::::: Header -->
      <header id="header">
        <!-- Tabzilla -->
        <a href="http://www.mozilla.org/" id="tabzilla" data-locale="es-ES">mozilla</a>

        <div id="logo-mc"></div>
        <!-- <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/mozilla-colombia-logo.png" alt=""> -->
        <h1><?php echo get_bloginfo('name'); ?></h1>
        <h2><?php echo get_bloginfo('description'); ?></h2>

        <!-- <div id="searchbox"><?php get_search_form(); ?></div> -->

        <!-- Mozilla Hispano -->
        <ul>
          <a target="_blank" href="http://www.mozilla-hispano.org/">
            <li><span class="box-six"></span></li>
          </a>
        </ul>
      </header>

      <!-- ::::::: Mosaico -->
      <div id="mosaico"></div>

      <!-- ::::::: Content -->
      <div id="content">
        <!--  News -->
        <div id="banner-news">
          <?php
            global $post;
            $args = array( 'posts_per_page' => 1, 'category' => 12 );
            $myposts = get_posts( $args );
            foreach( $myposts as $post ) :  setup_postdata($post); ?>
            <a id="link_title" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>

            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
           <?php the_post_thumbnail(array(100)); ?></a>
            <?php endforeach; ?>
        </div>

        <!--  Menu -->
        <div class="sec1">
          <nav>
            <ul>
              <a href="./blog">
                <li><span class="box-tree"></span> <p>Blog</p> </li>
              </a>
              <a href="./blog/web-abierta">
                <li><span class="box-four"></span> <p>Web Abierta</p> </li>
              </a>
              <a href="./blog/universo-mozilla">
                <li><span class="box-five"></span> <p>Universo Mozilla</p> </li>
              </a>
            </ul>
          </nav>
        </div>

        <div class="sec2">

<!--           <div style="width:195px; text-align:center;" ><iframe  src="http://www.eventbrite.es/calendar-widget?eid=7290864171" frameborder="0" height="320" width="195" marginheight="0" marginwidth="0" scrolling="no" allowtransparency="true"></iframe>
          </div> -->

        <!-- Eventbrite -->
        <h4>Proximos Eventos:</h4>
         <div class="event_list"><a href="http://eventbrite.com/org/4284610789"></a></div>

        </div>

        <div class="sec3">

          <!-- Colabora-->
          <a href="./blog/comunidad/" class="button_colabora">PARTICIPA &nbsp; <i class="icon-chevron-right"></i> </a>

          <!-- Facebook -->
          <!-- <div class="fb-like" data-href="http://facebook.com/mozillacolombia" data-send="false" data-width="300" data-show-faces="false"></div> -->
          <div class="fb-like" data-href="http://facebook.com/mozillacolombia" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false" ></div>

          <!-- Twitter-->
          <a href="https://twitter.com/MozillaColombia" class="twitter-follow-button" data-show-count="false" data-lang="es" data-dnt="true" width="150px" >Seguir a @MozillaColombia</a>

          <!-- Tweeter -->
          <a class="twitter-timeline" href="https://twitter.com/mozillacolombia" data-widget-id="355369031546589184" data-tweet-limit="1" width="300px" height="300px" data-chrome="nofooter noheader" ></a>

          </div>

      </div><!-- END Content -->

      <!-- :::::: Comunidad -->
      <div id="comunity">
        <h4>Comunidad Mozilla Colombia</h4>
    <?php
      if (function_exists('comunidad')) {
        comunidad ();
      }
    ?>
      </div>
      <!-- :::::: Productos -->
      <div id="products">
        <h4>Productos Mozilla</h4>
        <div id="prod_01" class="productos"><a href="https://www.mozilla.org/firefox/" target="BLANK"></a></div>
        <div id="prod_02" class="productos"><a href="http://www.mozilla.org/es-ES/firefox/os/" target="BLANK"></a></div>
        <div id="prod_03" class="productos"><a href="https://www.marketplace.firefox.com/" target="BLANK"></a></div>
        <div id="prod_04" class="productos"><a href="https://www.mozilla.org/persona/" target="BLANK"></a></div>
        <div id="prod_05" class="productos"><a href="https://www.mozilla.org/thunderbird/" target="BLANK"></a></div>
        <div id="prod_06" class="productos"><a href="https://webmaker.org/" target="BLANK"></a></div>
      </div>

      <!-- :::::: Footer -->
      <div id="footer-wrap">
          <footer id="colophon">

            <div class="row">
              <div class="footer-logo">
                <a target="_blank" href="http://mozilla.org"> <img alt="mozilla" src="//mozorg.cdn.mozilla.net/media/img/sandstone/footer-mozilla.png"></a>
              </div>

              <div class="footer-license">
                <a target="_blank" href="http://www.mozilla.org/es-ES/about/manifesto/">
                   ... Creamos comunidades de personas dedicadas a lograr una mejor experiencia en Internet para todos. ... &nbsp;&nbsp;&nbsp;¿Conoces el manifiesto de Mozilla?
                </a>
              </div>

              <div class="footer-nav">
                <a target="_blank" href="http://www.mozilla.org/mission/">
                  <img src="main/img/love-the-web.png" alt="">
                </a>
              </div>

            </div>
        </footer>
        <div class="credits">made by: <a target="_blank" href="http://www.leclub.co">m★</a> & <a target="_blank" href="http://digitalfredy.wordpress.com/">digitalfredy</a></div>
      </div><!-- END Footer -->

    </div><!-- END Wrap -->

    <!-- :::::::
    :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
    <!-- JS live -->
    <!-- // <script src="js/live.js"></script> -->

    <!-- JS Tabzilla -->
    <!-- <script src="//mozorg.cdn.mozilla.net/tabzilla/tabzilla.js"></script> -->
    <script src="//mozorg.cdn.mozilla.net/es/tabzilla/tabzilla.js"></script>

    <!-- JS jQuery -->
    <script src="main/js/jquery.js"></script>

    <!-- JS MAIN -->
    <script src="main/js/_js.js"></script>

    <!-- JS Twitter -->
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

    <!-- JS Twitter -->
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

    <!-- JS Facebook -->
    <script>
          (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- JS Eventbrite -->
    <script src="main/js/Eventbrite.jquery.js"></script>

    <!-- JS Eventbrite -->
    <script>
      $(document).ready(function() {
        Eventbrite({'app_key': "K3VRRTPS6WTWSAPKCJ"}, function(eb){
            var options = {
                'id'    : "4284610789"
            };

            eb.organizer_list_events( options, function( response ){
                $('.event_list').html(eb.utils.eventList( response, eb.utils.eventListRow ));
            });
        });
      });
    </script>

  </body>
</html>

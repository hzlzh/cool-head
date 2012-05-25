<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title><?php
        // Logic of printing the <title> tag 
        global $page, $paged;
        echo trim(wp_title( '', false, 'right' ));
        if ( !is_home() ) echo " | ";
      bloginfo( 'name' );
        // Add the blog description only for home.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && is_home() && !$paged )
            echo " | $site_description";
        // Paged format
        if ( $paged >= 2 || $page >= 2 )
      echo ' - ' . sprintf( __( 'Page %s', 'dot-b' ), max( $paged, $page ) );
        ?></title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="robots" content="noindex,nofollow" />
  <meta name="Rating" content="Safe For Kids" />
  <meta name="Distribution" content="Global" />
  <meta name="revisit-after" content="1 days" />
  <meta name="author" content="" />
  <meta name="copyright" content="Copyright (c) 2012. All Rights Reserved." />
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="shortcut icon" href="/favicon.ico" />
  <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png" />
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <script type="text/javascript">
  // here the pre-load JS starts.
  var Hello = 'World!';
  // Google analytics code
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-00000000-0']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

  </script>
  <?php wp_head(); ?>
</head>
<body>
  <p>body</p>
  <script type="text/javascript">
    // here the post-load JS starts.
  </script>
</body>
</html>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>

  <style type="text/css">

    header{
      background-color: white;
      width:100%;
      height:100px;
      border-bottom: 5px solid gold;
      display: flex;
      flex-direction: row;
      align-items:center;
      justify-content:space-between;
    }

    header a{
      text-decoration:none;
      color:black;
      height:100%;
      padding:10px;
      ackground-color: #ccc;
      transition:0.5s;
    }

    header a:hover{
      background-color: #aaa;
      transition:0.5s;
    }

    header ul{
      list-style-type:none;
    }

  </style>

</head>
<body <?php body_class(); ?>>
  <header>
    <div>
      <?php
      the_custom_logo();
      if ( is_front_page() && is_home() ) :
        ?>

  <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
<?php
else :
  ?>
  <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
<?php
endif;
$theme_description = get_bloginfo( 'description', 'display' );
if ( $theme_description || is_customize_preview() ) :
  ?>
  <p class="site-description"><?php echo $theme_description; /* WPCS: xss ok. */ ?></p>
<?php endif; ?>
</div><!-- .site-branding -->

</nav><!-- #site-navigation -->

</header><!-- #masthead -->


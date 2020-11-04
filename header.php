<?php 
/**
 * Header
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel="shortcut icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.png' ); ?>"/>
    
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&amp;family=Source+Code+Pro:wght@400;700&amp;display=swap&amp;family=Crimson+Pro" media="all" onload="this.media='all'">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <header id="top" class="page-header">
        <nav class="nav">
        <a href="/">
                <img
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.svg' ); ?>"
                    alt="Binyamin Green"
                    width="48"
                    height="48"
                />
            </a>
            <div class="nav-wrapper">
                <button class="nav-btn" aria-label="Menu">
                    <span class="nav-btn__bar"></span>
                    <span class="nav-btn__bar"></span>
                    <span class="nav-btn__bar"></span>
                </button>
                <ul class="nav-menu">
                    <li><a href="/me" class="nav-link">Me</a></li>
                    <li><a href="/blog" class="nav-link">Articles</a></li>
                    <li><a href="/notes" class="nav-link">Notes</a></li>
                    <li><a href="/contact" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>
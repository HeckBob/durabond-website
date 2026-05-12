<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- TOP BAR -->
<div class="topbar">
  <div class="container">
    <div class="topbar-left">
      <a href="tel:18665358759" class="topbar-phone">
        <i class="fas fa-phone-alt"></i> Call for a free estimate at (866) 535-8759
      </a>
    </div>
    <div class="topbar-right">
      <a href="#">Careers</a>
      <a href="#">Blog</a>
      <a href="#">Our Green Policy</a>
    </div>
  </div>
</div>

<!-- HEADER -->
<header class="header" id="header">
  <div class="container">
    <div class="header-inner">
      <a href="<?php echo home_url('/'); ?>" class="logo">
        <div class="logo-mark">Dur<span class="logo-a">A</span>bond</div>
        <div class="logo-sub">JANITORIAL SERVICES</div>
      </a>
      <nav class="nav" id="nav">
        <ul class="nav-list">
          <li><a href="<?php echo home_url('/about'); ?>"    class="nav-link">ABOUT US</a></li>
          <li><a href="<?php echo home_url('/sectors'); ?>"  class="nav-link">SECTORS</a></li>
          <li><a href="<?php echo home_url('/services'); ?>" class="nav-link">SERVICES</a></li>
          <li><a href="<?php echo home_url('/contact'); ?>"  class="nav-link">CONTACT US</a></li>
        </ul>
      </nav>
      <div class="header-actions">
        <a href="<?php echo home_url('/contact'); ?>" class="btn btn-red">Get An Estimate</a>
        <a href="https://durabond-7115212.hs-sites.com/tickets-view" class="btn btn-red" target="_blank">Customer Portal</a>
        <button class="hamburger" id="hamburger" aria-label="Toggle menu">
          <span></span><span></span><span></span>
        </button>
      </div>
    </div>
  </div>
</header>

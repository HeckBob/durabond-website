<?php
/**
 * Template Name: About Page
 */
get_header(); ?>

<div class="page-hero">
  <div class="container">
    <div class="page-hero-content">
      <div class="breadcrumb"><a href="<?php echo home_url('/'); ?>">Home</a><i class="fas fa-chevron-right"></i><span>About Us</span></div>
      <h1>About Durabond</h1>
      <p>Setting the standard for janitorial excellence in Southern Ontario since 1986.</p>
    </div>
  </div>
</div>

<section class="section about-intro">
  <div class="container">
    <div class="grid-2" style="align-items:start;gap:52px">
      <div class="about-text reveal">
        <div class="section-tag">Our Story</div>
        <h2>Durabond Janitorial Services Ltd.</h2>
        <p>We have proudly served Southern Ontario since 1986, consistently outperforming the competition in both industrial and commercial sectors — large and small.</p>
        <p>At Durabond, our cleaning standards far exceed typical industry expectations, enabling us to maintain long-term relationships with clients — often for over a decade at a time.</p>
        <p>With decades of experience and extensive industry knowledge, we service <strong>over 18 million square feet nightly</strong> across Southern Ontario. By truly listening to our clients' needs, we have built a reputation for reliability, excellence, and unmatched service quality.</p>
        <p>Our team of over 200 well-trained professionals ensures that your staff enter a fresh, clean, and safe environment every day.</p>
        <p style="margin-top:12px"><strong>Durabond Doesn't Just Clean — We Care.</strong> Unlike many companies in the industry, our owners and supervisors have hands-on experience as cleaners. We know first-hand what it takes to work hard, safely, and deliver high-quality results.</p>
      </div>
      <div class="reveal reveal-delay-2">
        <div class="about-highlights">
          <h4>By The Numbers</h4>
          <div class="highlight-item"><div class="highlight-num">18<span style="font-size:1.1rem;color:var(--red)">M+</span></div><div class="highlight-desc">Square feet serviced nightly across Southern Ontario</div></div>
          <div class="highlight-item"><div class="highlight-num">200<span style="font-size:1.1rem;color:var(--red)">+</span></div><div class="highlight-desc">Well-trained cleaning professionals on our team</div></div>
          <div class="highlight-item"><div class="highlight-num">30<span style="font-size:1.1rem;color:var(--red)">+</span></div><div class="highlight-desc">Years refining our craft throughout Southern Ontario</div></div>
          <div class="highlight-item"><div class="highlight-num" style="font-size:1.5rem">1986</div><div class="highlight-desc">Founded in Burlington — proudly local ever since</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="clean-values">
  <div class="container">
    <div class="section-header reveal">
      <div class="section-tag">Our Core Values</div>
      <h2>Our C.L.E.A.N Values</h2>
      <p>Five principles that guide every job, every day — no exceptions.</p>
    </div>
    <div class="clean-grid">
      <div class="clean-card"><div class="clean-letter">C</div><div class="clean-word">Care</div><div class="clean-desc">We truly care — for our customers, employees, and the environment.</div></div>
      <div class="clean-card"><div class="clean-letter">L</div><div class="clean-word">Love What We Do</div><div class="clean-desc">Our passion for cleaning sets us apart from every competitor.</div></div>
      <div class="clean-card"><div class="clean-letter">E</div><div class="clean-word">Excellence</div><div class="clean-desc">We have one standard: excellence — every task, every time.</div></div>
      <div class="clean-card"><div class="clean-letter">A</div><div class="clean-word">Approach</div><div class="clean-desc">Our presentation, professionalism, and attitude are second to none.</div></div>
      <div class="clean-card"><div class="clean-letter">N</div><div class="clean-word">Noticeable</div><div class="clean-desc">From top to bottom, every clean is completed with pride and attention to detail.</div></div>
    </div>
  </div>
</section>

<section class="section philosophy">
  <div class="container">
    <div class="section-header reveal"><div class="section-tag">Our Philosophy</div><h2>Mission &amp; Vision</h2></div>
    <div class="mv-cards">
      <div class="mv-card reveal"><h4>Our Mission</h4><p>"Improve the quality of our service by working as a team, developing innovative solutions for our customers, and building long-term relationships for the future with trust and personal responsibility."</p></div>
      <div class="mv-card vision reveal reveal-delay-2"><h4>Our Vision</h4><p>"To service all of Ontario, achieving the highest standards of cleanliness — and setting the benchmark that every janitorial company aspires to reach."</p></div>
    </div>
  </div>
</section>

<section class="section specialties">
  <div class="container">
    <div class="section-header reveal"><div class="section-tag">What We Do</div><h2>Our Specialties</h2><p>A comprehensive suite of services — all under one trusted roof.</p></div>
    <div class="spec-grid">
      <div class="spec-item"><i class="fas fa-broom"></i><span>Facility Maintenance</span></div>
      <div class="spec-item"><i class="fas fa-hammer"></i><span>Handyman Services</span></div>
      <div class="spec-item"><i class="fas fa-tint"></i><span>Professional Power-Washing</span></div>
      <div class="spec-item"><i class="fas fa-virus-slash"></i><span>Pandemic Cleaning</span></div>
      <div class="spec-item"><i class="fas fa-warehouse"></i><span>Warehouse Cleaning</span></div>
      <div class="spec-item"><i class="fas fa-hockey-puck"></i><span>Arena Cleaning</span></div>
      <div class="spec-item"><i class="fas fa-layer-group"></i><span>Floor Maintenance</span></div>
      <div class="spec-item"><i class="fas fa-rug"></i><span>Carpet Cleaning</span></div>
      <div class="spec-item"><i class="fas fa-window-maximize"></i><span>Window Cleaning</span></div>
    </div>
  </div>
</section>

<section class="section team">
  <div class="container">
    <div class="section-header reveal"><div class="section-tag">The People Behind The Clean</div><h2>Our Team</h2><p>Experienced leaders with a shared commitment to excellence.</p></div>
    <div class="team-grid">
      <?php
      $team = [
        ['Chris Douridas','CEO','30 years facilities experience'],
        ['Tom Douridas','VP Operations','20 years facilities experience'],
        ['Chris Hornibrook','Operations Manager','3 years facilities experience'],
        ['Steve Mark','Operations Manager','16 years facilities experience'],
        ['Tom Knez','Operations Manager','7 years facilities experience'],
        ['Alex Kallinikos','Sales',''],
        ['Natalia Forward','Senior Account Executive',''],
        ['Kathleen Medwyk','Sales',''],
        ['Ella Starcevic','Accounting',''],
        ['Storm Taylor','Human Resources',''],
        ['Sandra Dunston','Bookkeeper',''],
      ];
      foreach ($team as $member) : ?>
      <div class="team-card">
        <div class="team-photo"><i class="fas fa-user-tie"></i></div>
        <div class="team-name"><?php echo esc_html($member[0]); ?></div>
        <div class="team-role"><?php echo esc_html($member[1]); ?></div>
        <?php if ($member[2]) : ?><div class="team-exp"><?php echo esc_html($member[2]); ?></div><?php endif; ?>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="cta-banner">
  <div class="container">
    <div class="section-tag" style="color:rgba(255,255,255,.4)">Work With Us</div>
    <h2>Ready to Experience the Durabond Difference?</h2>
    <p>Let's build a cleaning program tailored to your facility. No obligation, no pressure.</p>
    <div class="btn-group">
      <a href="<?php echo home_url('/contact'); ?>" class="btn btn-red">Get a Free Estimate</a>
      <a href="tel:18665358759" class="btn btn-outline"><i class="fas fa-phone-alt" style="margin-right:8px"></i>Call (866) 535-8759</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>

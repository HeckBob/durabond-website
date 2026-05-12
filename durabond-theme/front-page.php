<?php get_header(); ?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="hero-content">
      <div class="hero-tag">Southern Ontario's Trusted Since 1986</div>
      <h1>Raising the<br><span>Standard</span> of Clean</h1>
      <p class="hero-sub">Durabond delivers unmatched janitorial and building maintenance across Southern Ontario. We listen, adapt, and deliver excellence — every time.</p>
      <div class="hero-actions">
        <a href="<?php echo home_url('/contact'); ?>" class="btn btn-red">Get a Free Estimate</a>
        <a href="<?php echo home_url('/about'); ?>"   class="btn btn-outline">Learn More</a>
      </div>
    </div>
  </div>
</section>

<!-- STATS STRIP -->
<div class="stats-strip">
  <div class="stats-grid">
    <div class="stat-item">
      <div class="stat-number"><span class="stat-count" data-target="18" data-suffix="M+">18M+</span></div>
      <div class="stat-label">Sq Ft Serviced Nightly</div>
    </div>
    <div class="stat-item">
      <div class="stat-number"><span class="stat-count" data-target="200" data-suffix="+">200+</span></div>
      <div class="stat-label">Trained Professionals</div>
    </div>
    <div class="stat-item">
      <div class="stat-number"><span class="stat-count" data-target="30" data-suffix="+">30+</span></div>
      <div class="stat-label">Years of Excellence</div>
    </div>
    <div class="stat-item">
      <div class="stat-number"><span class="stat-count" data-target="1986" data-from="1970" data-dur="1600" data-suffix="" data-noformat="true">1986</span></div>
      <div class="stat-label">Year Founded</div>
    </div>
  </div>
</div>

<!-- FEATURES -->
<section class="section features">
  <div class="container">
    <div class="section-header reveal">
      <div class="section-tag">Why Durabond</div>
      <h2>Everything You Need, Nothing You Don't</h2>
      <p>From daily janitorial to complex facility management — we build custom solutions around your needs.</p>
    </div>
    <div class="grid-3">
      <div class="feature-card">
        <div class="feature-icon"><i class="fas fa-building"></i></div>
        <h3>Industries We Service</h3>
        <ul>
          <li>Office Buildings</li><li>Educational Facilities</li><li>Industrial Complexes</li>
          <li>Healthcare Institutions</li><li>Civic Centres</li><li>High-Rise Residential</li>
        </ul>
        <a href="<?php echo home_url('/sectors'); ?>" class="btn btn-navy">Explore Sectors</a>
      </div>
      <div class="feature-card">
        <div class="feature-icon"><i class="fas fa-leaf"></i></div>
        <h3>Our Service Solutions</h3>
        <ul>
          <li>Janitorial Services</li><li>Customizable Building Maintenance</li><li>Green Housekeeping</li>
          <li>Supply Order Management</li><li>Emergency Flood Services</li><li>And much more</li>
        </ul>
        <a href="<?php echo home_url('/services'); ?>" class="btn btn-navy">View All Services</a>
      </div>
      <div class="feature-card">
        <div class="feature-icon"><i class="fas fa-award"></i></div>
        <h3>The Durabond Difference</h3>
        <ul>
          <li>Solutions Provider</li><li>Digital Reporting</li><li>Value-Added Partnerships</li>
          <li>Committed Managed Services</li><li>High Level of Excellence</li><li>Local Staff</li>
        </ul>
        <a href="<?php echo home_url('/about'); ?>" class="btn btn-navy">Read More</a>
      </div>
    </div>
  </div>
</section>

<!-- SECTORS SHOWCASE -->
<section class="section sectors-showcase" style="padding-top:0">
  <div class="container">
    <div class="section-header reveal">
      <div class="section-tag">Sectors We Serve</div>
      <h2>Cleaning Solutions for Every Industry</h2>
      <p>From high-rise residential to complex healthcare environments — we bring the highest standards to every facility.</p>
    </div>
    <div class="sectors-grid">
      <div class="sector-card wide reveal" onclick="location.href='<?php echo home_url('/sectors'); ?>'">
        <img src="https://images.unsplash.com/photo-1486325212027-8081e485255e?w=900&q=80&auto=format&fit=crop" alt="High-Rise Residential" loading="lazy">
        <div class="sector-overlay"><div class="sector-label">High-Rise Residential</div></div>
      </div>
      <div class="sector-card reveal reveal-delay-1" onclick="location.href='<?php echo home_url('/sectors'); ?>'">
        <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=600&q=80&auto=format&fit=crop" alt="Healthcare" loading="lazy">
        <div class="sector-overlay"><div class="sector-label">Healthcare</div></div>
      </div>
      <div class="sector-card reveal reveal-delay-2" onclick="location.href='<?php echo home_url('/sectors'); ?>'">
        <img src="https://images.unsplash.com/photo-1497366412874-3415097a27e7?w=600&q=80&auto=format&fit=crop" alt="Common Spaces" loading="lazy">
        <div class="sector-overlay"><div class="sector-label">Common Spaces</div></div>
      </div>
      <div class="sector-card reveal reveal-delay-1" onclick="location.href='<?php echo home_url('/sectors'); ?>'">
        <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=600&q=80&auto=format&fit=crop" alt="Industrial" loading="lazy">
        <div class="sector-overlay"><div class="sector-label">Industrial</div></div>
      </div>
      <div class="sector-card reveal reveal-delay-2" onclick="location.href='<?php echo home_url('/sectors'); ?>'">
        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=600&q=80&auto=format&fit=crop" alt="Office Buildings" loading="lazy">
        <div class="sector-overlay"><div class="sector-label">Office Buildings</div></div>
      </div>
      <div class="sector-card reveal reveal-delay-3" onclick="location.href='<?php echo home_url('/sectors'); ?>'">
        <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=600&q=80&auto=format&fit=crop" alt="Education" loading="lazy">
        <div class="sector-overlay"><div class="sector-label">Education</div></div>
      </div>
      <div class="sector-card reveal reveal-delay-4" onclick="location.href='<?php echo home_url('/sectors'); ?>'">
        <img src="https://images.unsplash.com/photo-1568992687947-868a62a9f521?w=600&q=80&auto=format&fit=crop" alt="Civic" loading="lazy">
        <div class="sector-overlay"><div class="sector-label">Civic</div></div>
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<section class="cta-banner">
  <div class="container">
    <div class="section-tag" style="color:rgba(255,255,255,.4)">Get Started Today</div>
    <h2>Ready for a Cleaner Workplace?</h2>
    <p>Contact us for a free, no-obligation estimate. We'll tailor a solution specifically for your facility.</p>
    <div class="btn-group">
      <a href="<?php echo home_url('/contact'); ?>"  class="btn btn-red">Get a Free Estimate</a>
      <a href="tel:18665358759" class="btn btn-outline"><i class="fas fa-phone-alt" style="margin-right:8px"></i>Call (866) 535-8759</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>

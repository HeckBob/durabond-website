<?php
/**
 * Template Name: Contact Page
 */
get_header(); ?>

<div class="page-hero">
  <div class="container"><div class="page-hero-content">
    <div class="breadcrumb"><a href="<?php echo home_url('/'); ?>">Home</a><i class="fas fa-chevron-right"></i><span>Contact Us</span></div>
    <h1>Contact Us</h1>
    <p>We'd love to hear from you. Get in touch for a free estimate, career opportunities, or any questions about our services.</p>
  </div></div>
</div>

<section class="section contact-wrap">
  <div class="container">
    <div class="contact-grid">

      <!-- FORM PANEL -->
      <div class="reveal">
        <div class="form-tabs">
          <div class="form-tab active" data-target="tab-sales"><i class="fas fa-chart-line"></i> Sales Inquiries</div>
          <div class="form-tab" data-target="tab-careers"><i class="fas fa-briefcase"></i> Careers</div>
          <div class="form-tab" data-target="tab-general"><i class="fas fa-comment-dots"></i> General</div>
          <div class="form-tab" data-target="tab-support"><i class="fas fa-headset"></i> Support</div>
        </div>

        <!-- Sales -->
        <div class="form-panel active" id="tab-sales">
          <p class="panel-desc">Want to learn more about using Durabond at your company? Use the form below to request information. We look forward to hearing from you and will respond as soon as possible. <strong>Email:</strong> services@durabond.ca</p>
          <form class="contact-form" novalidate>
            <div class="form-row">
              <div class="form-group">
                <label>Name <span>*</span></label>
                <input type="text" class="form-control" placeholder="Your full name" required>
              </div>
              <div class="form-group">
                <label>Phone <span>*</span></label>
                <input type="tel" class="form-control" placeholder="(xxx) xxx-xxxx" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label>Email <span>*</span></label>
                <input type="email" class="form-control" placeholder="you@company.com" required>
              </div>
              <div class="form-group">
                <label>Company</label>
                <input type="text" class="form-control" placeholder="Your company name">
              </div>
            </div>
            <div class="form-group">
              <label>Message <span>*</span></label>
              <textarea class="form-control" placeholder="Tell us about your facility and cleaning needs..." required></textarea>
            </div>
            <button type="submit" class="btn btn-red">Request Response</button>
          </form>
        </div>

        <!-- Careers -->
        <div class="form-panel" id="tab-careers">
          <p class="panel-desc">Interested in joining the Durabond team? We're always looking for dedicated, hard-working individuals to join our 200+ member team across Southern Ontario.</p>
          <div style="background:var(--off-white);border-radius:var(--r-lg);padding:32px;text-align:center">
            <i class="fas fa-briefcase" style="font-size:2.5rem;color:var(--navy);margin-bottom:16px;display:block"></i>
            <h3 style="margin-bottom:10px;color:var(--navy)">Visit Our Careers Page</h3>
            <p style="color:var(--muted);margin-bottom:20px">Browse current openings and submit your application through our dedicated careers portal.</p>
            <a href="#" class="btn btn-navy">View Open Positions</a>
          </div>
        </div>

        <!-- General -->
        <div class="form-panel" id="tab-general">
          <p class="panel-desc">Use the form below for general inquiries or to share feedback with our team.</p>
          <form class="contact-form" novalidate>
            <div class="form-row">
              <div class="form-group">
                <label>Name <span>*</span></label>
                <input type="text" class="form-control" placeholder="Your full name" required>
              </div>
              <div class="form-group">
                <label>Email <span>*</span></label>
                <input type="email" class="form-control" placeholder="you@example.com" required>
              </div>
            </div>
            <div class="form-group">
              <label>Phone</label>
              <input type="tel" class="form-control" placeholder="(xxx) xxx-xxxx">
            </div>
            <div class="form-group">
              <label>Message <span>*</span></label>
              <textarea class="form-control" placeholder="Your message..." required></textarea>
            </div>
            <button type="submit" class="btn btn-red">Send Message</button>
          </form>
        </div>

        <!-- Support -->
        <div class="form-panel" id="tab-support">
          <p class="panel-desc">Complete the form below with as much detail as possible. Include your company name, location, and a brief description of your request or issue. Our support team will review your submission and respond as soon as possible.</p>
          <p class="panel-desc" style="font-style:italic">If this is urgent, please contact your Operations manager directly.</p>
          <h3 style="text-align:center;margin:24px 0 8px;color:var(--navy)">Contact Our Support Team</h3>
          <p style="text-align:center;color:var(--muted);margin-bottom:20px">Fill out the form below, and we'll get back to you</p>
          <iframe src="https://share.hsforms.com/24lTu0sQWRMCxsSKHS8wDUQ48i4s" style="width:100%;min-height:600px;border:none;" title="Customer Support Form"></iframe>
        </div>
      </div><!-- /form panel -->

      <!-- SIDEBAR -->
      <div class="reveal reveal-delay-2">
        <div class="contact-info">
          <h3>Durabond Janitorial Services Ltd.</h3>
          <div class="ci-location">
            <div class="ci-city">Toll Free</div>
            <div class="ci-phone"><a href="tel:18665358759">(866) 535-8759</a></div>
          </div>
          <div class="ci-divider"></div>
          <div class="ci-location">
            <div class="ci-city">Burlington</div>
            <div class="ci-addr">4380 South Service Rd., Unit 8<br>Burlington, ON&nbsp; L7L 5Y6</div>
            <div class="ci-phone"><a href="tel:19056319600">(905) 631-9600</a></div>
          </div>
          <div class="ci-divider"></div>
          <div class="ci-location">
            <div class="ci-city">Toronto</div>
            <div class="ci-addr">First Canadian Place<br>100 King Street West, Suite 5600<br>Toronto, ON&nbsp; M5X 1C9</div>
            <div class="ci-phone"><a href="tel:14164795465">(416) 479-5465</a></div>
          </div>
          <div class="ci-divider"></div>
          <div class="ci-location">
            <div class="ci-city">Oakville</div>
            <div class="ci-phone"><a href="tel:19058475750">(905) 847-5750</a></div>
          </div>
          <div class="ci-divider"></div>
          <div class="ci-location">
            <div class="ci-city">Mississauga</div>
            <div class="ci-phone"><a href="tel:19052705103">(905) 270-5103</a></div>
          </div>
          <div class="ci-email">
            <i class="fas fa-envelope"></i>
            <a href="mailto:services@durabond.ca">services@durabond.ca</a>
          </div>
        </div>
      </div>

    </div><!-- /contact-grid -->
  </div>
</section>

<!-- LOCATIONS STRIP -->
<div class="locations">
  <div class="container">
    <div class="section-header reveal" style="margin-bottom:36px">
      <div class="section-tag">Find Us</div>
      <h2>Our Locations</h2>
    </div>
    <div class="loc-cards">
      <div class="loc-card">
        <h4><i class="fas fa-map-marker-alt" style="color:var(--red);margin-right:6px"></i>Burlington</h4>
        <p>4380 South Service Rd.<br>Unit 8<br>Burlington, ON&nbsp; L7L 5Y6</p>
        <a href="tel:19056319600">(905) 631-9600</a>
      </div>
      <div class="loc-card">
        <h4><i class="fas fa-map-marker-alt" style="color:var(--red);margin-right:6px"></i>Toronto</h4>
        <p>First Canadian Place<br>100 King St. W., Suite 5600<br>Toronto, ON&nbsp; M5X 1C9</p>
        <a href="tel:14164795465">(416) 479-5465</a>
      </div>
      <div class="loc-card">
        <h4><i class="fas fa-map-marker-alt" style="color:var(--red);margin-right:6px"></i>Oakville</h4>
        <p>Serving Oakville<br>and surrounding areas</p>
        <a href="tel:19058475750">(905) 847-5750</a>
      </div>
      <div class="loc-card">
        <h4><i class="fas fa-map-marker-alt" style="color:var(--red);margin-right:6px"></i>Mississauga</h4>
        <p>Serving Mississauga<br>and surrounding areas</p>
        <a href="tel:19052705103">(905) 270-5103</a>
      </div>
    </div>
  </div>
</div>

<!-- PRIVACY NOTE -->
<div style="background:var(--off-white);padding:32px 0">
  <div class="container">
    <p style="font-size:0.82rem;color:var(--muted);max-width:780px;line-height:1.65">
      <strong style="color:var(--text)">Disclaimer &amp; Privacy:</strong>
      By providing your phone number to Durabond Janitorial Services Ltd., you agree and acknowledge that
      Durabond may send a single SMS reply to your wireless phone number. Message and data rates may apply.
      Reply "STOP" to opt out. No mobile information will be shared with third parties or affiliates for
      marketing or promotional purposes.
    </p>
  </div>
</div>

<?php get_footer(); ?>

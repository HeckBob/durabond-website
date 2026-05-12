<?php
/**
 * Template Name: Services Page
 */
get_header(); ?>

<div class="page-hero" style="background-image: linear-gradient(135deg,rgba(6,30,56,.94) 0%,rgba(11,61,110,.82) 55%,rgba(16,81,140,.60) 100%), url('https://images.unsplash.com/photo-1581578731548-c64695cc6952?w=1400&q=80&auto=format&fit=crop'); background-size:cover; background-position:center">
  <div class="container"><div class="page-hero-content">
    <div class="breadcrumb"><a href="<?php echo home_url('/'); ?>">Home</a><i class="fas fa-chevron-right"></i><span>Services</span></div>
    <h1>Our Services</h1>
    <p>We specialize in customizable solutions for your unique building maintenance needs.</p>
  </div></div>
</div>

<section class="section services-cats">
  <div class="container">

    <?php
    $categories = [
      [
        'icon' => 'fa-broom',
        'title' => 'Janitorial &amp; General Cleaning',
        'services' => [
          ['fa-broom','Janitorial Services','At Durabond, we\'ve built our company on the simple idea that customers can tell how much we care. There is no such thing as "just another office" or "just another day."'],
          ['fa-hammer','Building Maintenance Solutions','We treat your property like it\'s our own. Precision and attention to detail are at the heart of everything we do — and have been since we were founded nearly three decades ago.'],
          ['fa-user-check','Day Porter Coverage','Having a day porter ensures your business maintains a constant clean look all day long — perfect for high-traffic areas like washrooms, kitchens, boardrooms, and reception.'],
          ['fa-home','Residential Cleaning','Servicing Oakville, Burlington, and Hamilton. Book directly through our DuraClean residential cleaning portal for consistent, dependable home cleaning.'],
          ['fa-calendar-check','Special Event Coverage','Durabond offers pre and post-cleaning for all of your special events. Call our 24-hour toll-free hotline and let us know when you need us.'],
          ['fa-restroom','Restroom Hygiene','Our Washroom Hygiene Program provides a deep clean service using specialized chemicals — focusing on toilets, urinals, sinks, walls, floors, and drains to eliminate bacterial growth.'],
        ],
      ],
      [
        'icon' => 'fa-layer-group',
        'title' => 'Floor &amp; Carpet Care',
        'services' => [
          ['fa-water','Carpet Steam Cleaning','For commercial and high-traffic carpeted areas, we use rotary extraction deep steam cleaning — the most thorough method of carpet cleaning available.'],
          ['fa-soap','Carpet Shampooing','Our deep carpet shampoo method brings life back to heavily soiled carpets — removing dirt and odours and leaving behind a light, fresh scent.'],
          ['fa-rug','Carpet Nap Setting','Our pile brush works on both a sweeping and vacuum action. The 4.5-inch brush reaches down to carpet fibers to break up and remove caked, embedded soils and dry particulates.'],
          ['fa-paint-roller','Floor Stripping, Waxing &amp; Restoration','Our "wet-look" floor system uses high-solids (20%) non-yellowing, ultra-durable floor wax. Low-odour formulation safe for hospitals, nursing homes, and confined spaces.'],
          ['fa-parking','Parking Lot &amp; Garage Cleaning','Build-up of sand, salt, and debris causes premature deterioration. We use industrial floor-sweeping equipment to provide a low-cost, efficient maintenance solution.'],
          ['fa-grip-lines','Floor Mats','Let Durabond custom-order and maintain your office floor mats — ensuring a professional appearance and effective dirt capture at every entrance.'],
        ],
      ],
      [
        'icon' => 'fa-shield-virus',
        'title' => 'Specialty &amp; Deep Clean',
        'services' => [
          ['fa-cloud','Vapor Steam Cleaning','A chemical-free alternative for cleaning and disinfecting kitchens and bathrooms. Superior steam temperature with variable pressure control — an ideal eco-friendly option for daily commercial use.'],
          ['fa-flask','GMP / Clean Room Services','Effectively sanitizing a GMP environment requires strict compliance with clean room regulations. Our experienced team follows clean room protocol to the letter.'],
          ['fa-virus-slash','Pandemic Cleaning Programs','During an influenza outbreak or pandemic, thorough cleaning of touchable surfaces is critical. We use proper techniques and disinfectants to make surfaces safe and prevent viral spread.'],
          ['fa-tint','Emergency Flood Service','Call our 24-hour emergency hotline to have our crew handle your flood clean-up quickly and professionally — minimizing damage and getting your facility back to normal fast.'],
          ['fa-hard-hat','Post-Construction Cleaning','Whether it\'s a new build or a renovation, our post-construction cleaning takes care of the dirt, dust, and debris — leaving your facility ready for occupancy.'],
        ],
      ],
      [
        'icon' => 'fa-building',
        'title' => 'Building Exterior &amp; Maintenance',
        'services' => [
          ['fa-window-maximize','Low &amp; High-Rise Window Cleaning','We offer the highest level of professional window cleaning for both interior and exterior of your building — with a drip-free and streak-free guarantee on every job.'],
          ['fa-spray-can','Power Washing','We provide power washing for factories, plants, warehouses, shopping centres, restaurants, and residential/condominium projects — covering all surfaces, storefronts, and sidewalks.'],
          ['fa-industry','Power Sweeping','Full power sweeping services for your shop, warehouse, or parking areas. We cover any surface quickly and safely with minimal disruption to day-to-day operations.'],
          ['fa-ruler-combined','Light Construction','Ideal for larger scale needs including wall frame construction, wood trim work, and floor tile replacement — all completed by our skilled, experienced crew.'],
        ],
      ],
      [
        'icon' => 'fa-tools',
        'title' => 'Facility Management',
        'services' => [
          ['fa-boxes','Supply Order Management','Over 30 years in business allows Durabond to purchase a wide array of supplies at lower rates, which we pass on to our customers. We handle ordering and delivery so you don\'t have to.'],
          ['fa-trash-alt','Waste Management &amp; Disposal','From individual waste receptacles to full-size bin removal — let Durabond take care of your complete waste management needs with a reliable, efficient program.'],
          ['fa-recycle','Recycle Disposal','Alongside our waste management services, Durabond can provide and manage a full recycling program — good for business and good for the environment.'],
          ['fa-wrench','Handyman Service','Perfect for challenging tasks around your facility — drywall repair, painting, light electrical/plumbing, dispenser replacement, and much more handled by our in-house team.'],
          ['fa-lightbulb','Light Bulb Replacement','No matter the type, size, or location, Durabond handles both the ordering and installation of your light bulbs as part of our comprehensive building maintenance services.'],
          ['fa-paint-brush','Painting','Professional painting for your facility — whether an entire building, individual department, or a touch-up. We hire only experienced painters who deliver a beautiful finish and a spotless worksite.'],
        ],
      ],
    ];

    foreach ($categories as $cat) : ?>
    <div class="svc-category">
      <div class="cat-header reveal">
        <div class="cat-icon"><i class="fas <?php echo $cat['icon']; ?>"></i></div>
        <h3><?php echo $cat['title']; ?></h3>
      </div>
      <div class="svc-cards">
        <?php foreach ($cat['services'] as $svc) : ?>
        <div class="svc-card">
          <div class="svc-icon"><i class="fas <?php echo $svc[0]; ?>"></i></div>
          <h4><?php echo $svc[1]; ?></h4>
          <p><?php echo $svc[2]; ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <?php endforeach; ?>

  </div>
</section>

<section class="cta-banner">
  <div class="container">
    <div class="section-tag" style="color:rgba(255,255,255,.4)">Custom Solutions</div>
    <h2>Need a Service Not Listed Here?</h2>
    <p>We build fully customized maintenance programs. Contact us to discuss what your facility needs.</p>
    <div class="btn-group">
      <a href="<?php echo home_url('/contact'); ?>" class="btn btn-red">Get a Free Estimate</a>
      <a href="tel:18665358759" class="btn btn-outline"><i class="fas fa-phone-alt" style="margin-right:8px"></i>Call (866) 535-8759</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>

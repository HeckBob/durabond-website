<?php
/**
 * Template Name: Sectors Page
 */
get_header(); ?>

<div class="page-hero">
  <div class="container"><div class="page-hero-content">
    <div class="breadcrumb"><a href="<?php echo home_url('/'); ?>">Home</a><i class="fas fa-chevron-right"></i><span>Sectors</span></div>
    <h1>Sectors We Serve</h1>
    <p>Specialized cleaning and maintenance solutions for every type of facility across Southern Ontario.</p>
  </div></div>
</div>

<section class="section sectors-full">
  <div class="container">

    <?php
    $sectors = [
      ['01','High-Rise Residential','https://images.unsplash.com/photo-1486325212027-8081e485255e?w=900&q=80&auto=format&fit=crop',
        'Residents of high-rise buildings deserve a spotless, welcoming environment every time they come home. Durabond delivers consistent, professional cleaning services for lobbies, hallways, amenity spaces, and underground garages — keeping your property looking its best around the clock.',
        ['Lobby & entrance cleaning','Corridor & elevator maintenance','Amenity rooms & party rooms','Parkade & underground garage sweeping','Laundry room & mailroom upkeep']],
      ['02','Common Spaces','https://images.unsplash.com/photo-1497366412874-3415097a27e7?w=900&q=80&auto=format&fit=crop',
        'First impressions matter. Whether it\'s a shared lobby, a co-working lounge, or a building atrium, Durabond ensures your common areas always project professionalism and cleanliness for tenants, visitors, and staff alike.',
        ['Reception & lobby areas','Boardrooms & meeting rooms','Kitchens & break rooms','Washroom hygiene programs','Day porter coverage available']],
      ['03','Healthcare','https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=900&q=80&auto=format&fit=crop',
        'Healthcare environments demand the highest standards of hygiene and infection control. Our trained teams follow strict protocols to ensure clinical cleanliness in hospitals, clinics, nursing homes, and medical offices.',
        ['Hospital & clinic cleaning','Infection control protocols','Nursing home & long-term care','Medical office maintenance','Low-odour, hospital-grade products']],
      ['04','Industrial','https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=900&q=80&auto=format&fit=crop',
        'Warehouses, manufacturing plants, and industrial complexes require specialized equipment and a safety-first approach. Durabond delivers thorough industrial cleaning that keeps your facility compliant, safe, and operating efficiently.',
        ['Warehouse & manufacturing floors','GMP / clean room services','Power sweeping & scrubbing','Loading dock & exterior cleaning','Waste & recycling management']],
      ['05','Office Buildings','https://images.unsplash.com/photo-1497366216548-37526070297c?w=900&q=80&auto=format&fit=crop',
        'A clean office boosts productivity and morale. Durabond provides flexible janitorial programs for single-tenant offices to large multi-floor commercial towers — tailored to your schedule, your team, and your budget.',
        ['Nightly janitorial services','Floor stripping, waxing & buffing','Interior window cleaning','Supply ordering & management','Digital reporting & quality audits']],
      ['06','Education','https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=900&q=80&auto=format&fit=crop',
        'Schools, colleges, and universities are high-traffic environments that need consistent, reliable cleaning. Durabond understands the unique challenges of educational facilities and delivers safe, thorough cleaning programs.',
        ['Classrooms & lecture halls','Gymnasiums & athletic facilities','Cafeterias & food service areas','Washroom sanitation programs','Summer deep-clean & restoration']],
      ['07','Civic & Public Spaces','https://images.unsplash.com/photo-1568992687947-868a62a9f521?w=900&q=80&auto=format&fit=crop',
        'Government buildings, community centres, libraries, and arenas serve the public every day. Durabond provides dependable, professional cleaning services that reflect the pride communities take in their public spaces.',
        ['Municipal buildings & city halls','Community & recreation centres','Libraries & public galleries','Arena & event venue cleaning','Special event pre/post cleaning']],
    ];

    foreach ($sectors as $i => $s) :
      $flip = ($i % 2 !== 0) ? ' flip' : '';
    ?>
    <div class="sector-row<?php echo $flip; ?> reveal">
      <div class="sector-row-img">
        <img src="<?php echo esc_url($s[2]); ?>" alt="<?php echo esc_attr($s[1]); ?>" loading="lazy">
      </div>
      <div class="sector-row-body">
        <div class="section-tag">Sector <?php echo $s[0]; ?></div>
        <h3><?php echo $s[1]; ?></h3>
        <p><?php echo $s[3]; ?></p>
        <div class="sector-bullets">
          <?php foreach ($s[4] as $b) : ?>
          <div class="sector-bullet"><?php echo esc_html($b); ?></div>
          <?php endforeach; ?>
        </div>
        <a href="<?php echo home_url('/contact'); ?>" class="btn btn-navy">Get an Estimate</a>
      </div>
    </div>
    <?php endforeach; ?>

  </div>
</section>

<section class="cta-banner">
  <div class="container">
    <div class="section-tag" style="color:rgba(255,255,255,.4)">Your Sector, Our Expertise</div>
    <h2>Don't See Your Industry?</h2>
    <p>We work with many types of facilities not listed here. Contact us to discuss a custom solution.</p>
    <div class="btn-group">
      <a href="<?php echo home_url('/contact'); ?>" class="btn btn-red">Get a Free Estimate</a>
      <a href="<?php echo home_url('/services'); ?>" class="btn btn-outline">View All Services</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>

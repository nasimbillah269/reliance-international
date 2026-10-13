@extends(welcomeTheme().'layouts.app') @section('title')
<title>{{$page->seo_title?:websiteTitle($page->name)}}</title>
@endsection @section('SEO')
<meta name="title" property="og:title" content="{{$page->seo_title?:websiteTitle($page->name)}}" />
<meta name="description" property="og:description" content="{!!$page->seo_description?:general()->meta_description!!}" />
<meta name="keywords" content="{{$page->seo_keyword?:general()->meta_keyword}}" />
<meta name="image" property="og:image" content="{{asset($page->image())}}" />
<meta name="url" property="og:url" content="{{route('pageView',$page->slug?:'no-title')}}" />
<link rel="canonical" href="{{route('pageView',$page->slug?:'no-title')}}" />
@endsection @push('css')
<style></style>
@endpush @section('contents')

@include(welcomeTheme().'layouts.pageHeader', ['title' => $page->name, 'banner' => $page->bannerFile ? $page->banner() : null])
<div class="section-space">

<div class="mechinery">
 <div class="container">

    <!-- Title -->
    <div class="section-title">
      <h2>Elitara Global: <span class="text-primary">Machinery Wings</span></h2>
    </div>

    <!-- Founder Info -->
    <div class="founder-card mb-4">
      <h4 class="text-primary">🧵 About the Founder</h4>
      <p>
        With over <strong>33 years</strong> of dynamic experience in the textile and apparel industry,
        <strong>Md. Rafiqul Islam Raju</strong> is a visionary leader and the driving force behind Elitara Global.
        His career spans across all major segments of the value chain—including knitwear, woven garments, denim,
        washing technology, and garment manufacturing—equipping him with a rare depth of technical expertise
        and market insight.
      </p>
      <p>
        Having worked with leading local and international companies, Mr. Raju has developed a strong command
        over production optimization, machinery sourcing, quality control, and global supply chain integration.
        His strategic foresight, hands-on knowledge, and passion for innovation have earned him a solid reputation
        in the industry.
      </p>
      <p>
        With the launch of Elitara Global, Mr. Raju aims to bridge the gap between global machinery innovation
        and local industrial needs, helping Bangladeshi factories thrive through advanced technology,
        trusted partnerships, and sustainable solutions.
      </p>
    </div>

    <!-- Machinery List -->
    <div class="machinery-list">
      <h4 class="text-primary">🛠️ Machineries We Offer</h4>
      <ul class="list-unstyled mt-3">
        <li>1. Circular / Flat Knitting</li>
        <li>2. Fabric Inspection Machine</li>
        <li>3. Dyeing Machine</li>
        <li>4. Compactor Machine (Tubular & Open Width)</li>
        <li>5. Stenter Machine</li>
        <li>6. Relax Dryer</li>
        <li>7. Balloon Squeezer</li>
        <li>8. Scouring & Bleaching Machine</li>
        <li>9. Mercerizing Machine</li>
        <li>10. Rope Dyeing Machine</li>
        <li>11. Sublimation Printing Machine</li>
        <li>12. Laser Engraving Machine</li>
        <li>13. Garments Washing & Dyeing Machine</li>
        <li>14. Ozone Machine</li>
        <li>15. Sand Blasting Machine</li>
        <li>16. ETP Plant</li>
        <li>17. Boiler</li>
        <li>18. Automatic Dispensing System for Knit dyeing, Yarn Dyeing and Washing units</li>
      </ul>
    </div>

  </div>
</div>

<div class="mechinaryBottom">
<div class="container">
    <!-- Future of Textile Machinery Innovation -->
    <div class="p-4 bg-white shadow rounded">
  <h4 class="text-primary mb-3">🚀 The Future is Now: A New Era of Textile Machinery Innovation</h4>
  <p>
    The textile and garment industry is undergoing a quiet revolution—and at the heart of this transformation is innovation in machinery. 
    What once took hours of manual labor and guesswork is now accomplished with precision, speed, and sustainability—thanks to next-generation 
    textile and washing technologies. At <strong>Elitara Global</strong>, we are proud to bring these global innovations to Bangladesh, 
    connecting local factories with the tools of tomorrow.
  </p>

  <h5 class="text-secondary mt-4">Smart, Automated, and Connected</h5>
  <ul>
    <li>Touchscreen control panels and multilingual interfaces</li>
    <li>Auto-adjusting sensors for fabric weight and tension</li>
    <li>AI-driven process optimization for energy savings and defect reduction</li>
    <li>Real-time data reporting for production analytics and remote monitoring</li>
  </ul>
  <p>
    These innovations don’t just improve speed—they enhance quality, minimize waste, and empower management to make better decisions with data.
  </p>

  <h5 class="text-success mt-4">🌱 Sustainability Built In</h5>
  <p>
    Today’s washing and dyeing machines are designed to reduce water, steam, and chemical use by up to 40% or more. With technologies like:
  </p>
  <ul>
    <li>Low Liquor Ratio Washing Systems</li>
    <li>Ozone and Nano-Bubble Wash Units</li>
    <li>Closed-loop dye recovery systems</li>
  </ul>
  <p>
    Factories can now meet global compliance standards while lowering their operational costs.
  </p>

  <h5 class="text-info mt-4">🧠 Customization Meets Efficiency</h5>
  <p>
    One size no longer fits all. Innovative machinery now allows for mass customization—supporting flexible lot sizes, design changes on the fly, 
    and ultra-fast sampling. This helps Bangladeshi factories meet the growing demand for fast fashion, on-demand orders, and private label production.
  </p>

  <h5 class="text-dark mt-4">🏭 Elitara Global: Your Innovation Partner</h5>
  <p>
    At <strong>Elitara Global</strong>, we do more than just supply machines—we bring the future of textile production to your factory floor.
    Whether you’re building a new unit or upgrading an old line, we help you integrate these smart systems seamlessly—with the right guidance, 
    training, and support.
  </p>
  <h4 class="bottomTitle">
    The future of fashion is smart, green, and fast. And the future is already here—with <span class="text-primary">Elitara Global</span> by your side.
  </h4>
</div>
</div>
</div>

</div>
@endsection @push('js') @endpush
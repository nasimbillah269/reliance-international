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



<div id="worldwide" class="worldWideSection">
    <div class="worldWideSectionBg" style="background-color: #f8f8f8;
                                           background-repeat: no-repeat;
                                           background-image: url('{{ asset(assetLink().'/images/taawt-o2-1.jpg') }}');
                                           background-position: 50% 50%;
                                           background-attachment: scroll;">
        <div class="worldWeideBgOverly">
            <div class="container">
                <div class="worldWideContent" style="position: relative;">
                    <h2 class="sectionTitle">Major Garment Manufacturing Zones in Bangladesh</h2>
                    <img src="{{ asset(assetLink().'/images/asmara/Picture7.png') }}" alt="about company" style="height: auto;">

                    <!-- Marker container -->
                    <div class="map-marker" style="position: absolute; top: 41%; left: 46%;" data-tooltip="Spain"></div>
                    <div class="map-marker" style="position: absolute; top: 51%; left: 51%;" data-tooltip="Egypt"></div>
                    <div class="map-marker" style="position: absolute; top: 43%; left: 53%;" data-tooltip="Turkey"></div>
                    <div class="map-marker" style="position: absolute; top: 47%; left: 58%;" data-tooltip="Pakistan"></div>
                    <div class="map-marker" style="position: absolute; top: 43%; left: 65%;" data-tooltip="China"></div>
                    <div class="map-marker" style="position: absolute; top: 49%; left: 69%;" data-tooltip="Hong Kong"></div>
                    <div class="map-marker" style="position: absolute; top: 65%; left: 71%;" data-tooltip="Indonesia"></div>
                    <div class="map-marker" style="position: absolute; top: 59%; left: 67%;" data-tooltip="Cambodia"></div>
                    <div class="map-marker" style="position: absolute; top: 49%; left: 61%;" data-tooltip="India | Gurgaon"></div>
                    <div class="map-marker" style="position: absolute; top: 53%; left: 61%;" data-tooltip="India | Bangalore"></div>
                    <div class="map-marker" style="position: absolute; top: 56%; left: 63%;" data-tooltip="India | Chennai"></div>
                    <div class="map-marker" style="position: absolute; top: 57%; left: 60%;" data-tooltip="India | Triupur"></div>
                    <div class="map-marker" style="position: absolute; top: 61%; left: 62%;" data-tooltip="Sri Lanka"></div>
                    <div class="map-marker" style="position: absolute; top: 51%; left: 64%;" data-tooltip="Bangladesh"></div>
                    <div class="map-marker" style="position: absolute; top: 56%; left: 65%;" data-tooltip="Myanmar"></div>
                    <div class="map-marker" style="position: absolute; top: 57%; left: 69%;" data-tooltip="Vietnam | HCMC"></div>
                    <div class="map-marker" style="position: absolute; top: 54%; left: 68%;" data-tooltip="Vietnam | Hanoi"></div>
                    <!-- Add more markers as needed -->
                </div>
                
                <div class="asmaraMarker">
                    <div class="asMark"></div>
                    <p>Alitra presence</p>
                </div>
                <ul class="worldWideCuntryList">
                    <li>Bangladesh</li>
                    <li>Cambodia</li>
                    <li>China</li>
                    <li>Egypt</li>
                    <li>Hong Kong</li>
                    <li>India | Bangalore</li>
                    <li>India | Chennai</li>
                    <li>India | Gurgaon</li>
                    <li>India | Triupur</li>
                    <li>Indonesia</li>
                    <li>Myanmar</li>
                    <li>Pakistan</li>
                    <li>Spain</li>
                    <li>Sri Lanka</li>
                    <li>Turkey</li>
                    <li>Vietnam | Hanoi</li>
                    <li>Vietnam | HCMC</li>
                </ul>
            </div>
        </div>
    </div>
</div>

 <div class="overViewGarment mt-4">
     <div class="container">
         <h2 class="sectionTitle">Overview of Bangladesh's Garment Manufacturing Industry</h2>
         <div class="row">
             <div class="col-md-8">
                 <div class="overViewGarLeft">
                      <img src="{{ asset(assetLink().'/images/asmara/Picture4.png') }}" alt="over view">
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="overViewGarRight">
                      <img src="{{ asset(assetLink().'/images/asmara/Picture5.png') }}" alt="over view">
                 </div>
                 <div class="overViewGarRight">
                      <img src="{{ asset(assetLink().'/images/asmara/Picture6.png') }}" alt="over view">
                 </div>
             </div>
         </div>
         <ul>
             <li>
                 <b>1. Export Volume </b>
                 <p>
                     In 2023, Bangladesh's Ready-Made Garment (RMG) sector achieved record export earnings of $47.38 billion, 
                     comprising $25.73 billion from knitwear and $21.25 billion from woven garments. RMG Bangladesh

                 </p>

             </li>
             <li>
                 <b>1. Export Volume </b>
                 <p>
                     In 2023, Bangladesh's Ready-Made Garment (RMG) sector achieved record export earnings of $47.38 billion, 
                     comprising $25.73 billion from knitwear and $21.25 billion from woven garments. RMG Bangladesh

                 </p>

             </li>
             <li>
                 <b>2. Contribution to GDP </b>

                 <p>
                    The RMG sector contributes approximately 10.35% to Bangladesh's GDP. BB

                 </p>

             </li>
             <li>
                 <b>3. Workforce Size</b>

                 <p>
                     The garment industry employs over 5 million workers, with women constituting more than 55% of the workforce. Textile Focus

                 </p>

             </li>
             <li>
                 <b>4. Global Standing</b>

                 <p>
                     The garment industry employs over 5 million workers, with women constituting more than 55% of the workforce.
                     Textile FocusBangladesh is the world's second-largest garment exporter after China. SlideServe+2United Nations University+2ResearchGate+2

                 </p>

             </li>
             <li>
                 <b>5. Industry Highlights</b>

                 <p>
                   <b> Sustainability and Compliance:</b> Bangladesh hosts numerous eco-friendly factories certified by international standards, emphasizing sustainable and ethical manufacturing practices. <br>
                   <b> Skilled Workforce:</b> The sector benefits from a large, skilled, and cost-effective labor force, contributing to its competitive advantage. <br>
                    <b>Infrastructure Development:</b> Continuous improvements in infrastructure and logistics have enhanced the efficiency of the supply chain.


                 </p>

             </li>
         </ul>
     </div>
 </div>
 
 {{-- <div id="service" class="ourServiceMain">
     <div class="container">
        <h2 class="sectionTitle">Strengths of Garment Manufacturing in Bangladesh</h2>
        </h1>
         <div class="row">
             <div class="col-md-4">
                 <div class="ourSeriveGrid">
                       <img src="{{ asset(assetLink().'/images/asmara/service-icon/s1.svg') }}" alt="service icon">
                      <div class="ourServiceGridTitle">
                        <h4>Skilled & Abundant Labor Force</h4>
                    </div>
                     <p>
                         Bangladesh’s large pool of experienced and semi-skilled workers—particularly
                         women—ensures high-quality production and consistent output across various garment categories.
                     </p>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="ourSeriveGrid">
                      <img src="{{ asset(assetLink().'/images/asmara/service-icon/s2.svg') }}" alt="service icon">
                      <div class="ourServiceGridTitle">
                         <h4>Competitive Production Costs</h4>
                     </div>
                     <p>
                        With relatively low labor and operational costs, Bangladesh offers 
                        exceptional value to international buyers without compromising on quality.
                     </p>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="ourSeriveGrid">
                      <img src="{{ asset(assetLink().'/images/asmara/service-icon/s3.svg') }}" alt="service icon">
                     <div class="ourServiceGridTitle">
                          <h4>Diverse Production Capabilities  </h4>
                       <button data-url="{{ asset(assetLink().'/images/asmara/asmara-offices_sourcing.pdf') }}"  class="plus-button"><span>+</span></button>
                     </div>
                    
                     <p>
                        The country produces a wide range of products including knitwear, woven garments,
                        denim, outerwear, and lingerie—serving brands from fast fashion to premium segments.
                     </p>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="ourSeriveGrid">
                      <img src="{{ asset(assetLink().'/images/asmara/service-icon/s4.svg') }}" alt="service icon">
                     <div class="ourServiceGridTitle">
                          <h4>Strong Focus on Compliance & Sustainability </h4>
                       <button data-url="{{ asset(assetLink().'/images/asmara/asmara-good_products.pdf') }}"  class="plus-button"><span>+</span></button>
                     </div>
                    
                     <p>
                       Home to some of the world’s most eco-friendly and ethically certified factories, 
                       Bangladesh maintains high standards in labor rights, workplace safety, 
                       and environmental sustainability.
                     </p>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="ourSeriveGrid">
                      <img src="{{ asset(assetLink().'/images/asmara/service-icon/s5.svg') }}" alt="service icon">
                     <div class="ourServiceGridTitle">
                          <h4>Government Support & Infrastructure Development</h4>
                     </div>
                    
                     <p>
                           Proactive government policies, tax incentives,
                           and improved port and transport infrastructure 
                           continue to enhance the industry’s global competitiveness.

                     </p>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="ourSeriveGrid">
                      <img src="{{ asset(assetLink().'/images/asmara/service-icon/s6.svg') }}" alt="service icon">
                     <div class="ourServiceGridTitle">
                          <h4>our strength</h4>
                     </div>
                    
                     <p>
                        are our people, who are at home in three worlds. As humans on our planet; together in 
                        the world of fashion; and on our digital platform that connects us all, our customers
                        and manufacturers, as well as farmers. Together we work for the future of fashion.
                     </p>
                 </div>
             </div>
             </div>
            
         </div>
     </div>
 </div>--}}
 

<div class="factoryRelatedTableView">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tableView">
                    <h3>Factory Selection Checklist</h3>
                    <div class="tableMain table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead class="table-head">
                                <tr>
                                    <th scope="col">Criteria</th>
                                    <th scope="col">What to Look For</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Production Capacity</td>
                                    <td>Monthly output, number of lines, lead times</td>
                                </tr>
                                <tr>
                                    <td>Product Specialization</td>
                                    <td>Factory’s strength in specific garments (e.g., denim, lingerie)</td>
                                </tr>
                                <tr>
                                    <td>Quality Standards</td>
                                    <td>QC process, inspection stages, audit records</td>
                                </tr>
                                <tr>
                                    <td>Certifications</td>
                                    <td>WRAP, BSCI, OEKO-TEX, GOTS, ISO, LEED, etc.</td>
                                </tr>
                                <tr>
                                    <td>Compliance & Sustainability</td>
                                    <td>Labor practices, environmental policies, green initiatives</td>
                                </tr>
                                <tr>
                                    <td>Communication</td>
                                    <td>Responsiveness, transparency, language fluency</td>
                                </tr>
                                <tr>
                                    <td>Minimum Order Quantities (MOQs)</td>
                                    <td>Alignment with your order scale and flexibility</td>
                                </tr>
                                <tr>
                                    <td>References & Reputation</td>
                                    <td>Past buyers, client testimonials, global brand experience</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="tableView">
                    <h3 class="mt-4">Resources and Information</h3>
                    <div class="tableMain table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead class="table-head">
                                <tr>
                                    <th scope="col">Term</th>
                                    <th scope="col">Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>MOQ</td>
                                    <td>Minimum Order Quantity</td>
                                </tr>
                                <tr>
                                    <td>FOB</td>
                                    <td>Free on Board</td>
                                </tr>
                                <tr>
                                    <td>GSM</td>
                                    <td>Grams per Square Meter (fabric weight)</td>
                                </tr>
                                <tr>
                                    <td>Lead Time</td>
                                    <td>Time from order to delivery</td>
                                </tr>
                                <tr>
                                    <td>CM/CMT</td>
                                    <td>Cut and Make / Cut, Make, Trim</td>
                                </tr>
                                <tr>
                                    <td>QA/QC</td>
                                    <td>Quality Assurance / Quality Control</td>
                                </tr>
                                <tr>
                                    <td>CSR</td>
                                    <td>Corporate Social Responsibility</td>
                                </tr>
                                <tr>
                                    <td>Tech Pack</td>
                                    <td>Technical specifications for production</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tableViewRight">
                     <img src="{{asset(assetLink().'/images/asmara/Picture11.png')}}" alt="featured">
                </div>
            </div>
        </div>
        
         <div class="row">
            <div class="col-md-12">
                <div class="tableView">
                    <h3 class="mt-4">Guide to Fabric Types and Usage</h3>
                    <div class="tableMain table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead class="table-head">
                                <tr>
                                    <th scope="col">Fabric</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Common Uses</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cotton</td>
                                    <td>Soft, breathable, natural fiber</td>
                                    <td>T-shirts, casualwear, kidswear</td>
                                </tr>
                                <tr>
                                    <td>Polyester</td>
                                    <td>Durable, wrinkle-resistant</td>
                                    <td>Sportswear, outerwear</td>
                                </tr>
                                <tr>
                                    <td>Denim</td>
                                    <td>Sturdy cotton twill</td>
                                    <td>Jeans, jackets</td>
                                </tr>
                                <tr>
                                    <td>Viscose/Rayon</td>
                                    <td>Lightweight, drapey</td>
                                    <td>Dresses, blouses</td>
                                </tr>
                                <tr>
                                    <td>Lycra/Spandex</td>
                                    <td>Stretchy synthetic</td>
                                    <td>Activewear, leggings</td>
                                </tr>
                                <tr>
                                    <td>Linen</td>
                                    <td>Natural, breathable, textured</td>
                                    <td>Summerwear, shirts</td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        
         <div class="row">
            <div class="col-md-12">
                <div class="tableView">
                    <h3 class="mt-4">Useful Contacts and Organizations</h3>
                    <div class="tableMain table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead class="table-head">
                                <tr>
                                    <th scope="col">Organization</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Contact</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>BGMEA (Bangladesh Garment Manufacturers & Exporters Association)</td>
                                    <td>Industry body supporting garment exporters</td>
                                    <td><a href="http://www.bgmea.com.bd/" target="_blank">www.bgmea.com.bd</a></td>
                                </tr>
                                <tr>
                                    <td>BKMEA (Knitwear Manufacturers & Exporters Association)</td>
                                    <td>Focused on knit sector</td>
                                     <td><a href="http://www.bkmea.com/" target="_blank">www.bkmea.com</a></td>
                                </tr>
                                <tr>
                                    <td>EPB (Export Promotion Bureau)</td>
                                    <td>Government trade facilitation</td>
                                   <td><a href="http://www.epb.gov.bd/" target="_blank">www.epb.gov.bd</a></td>
                                </tr>
                                <tr>
                                    <td>BTTI (Bangladesh Textile & Training Institute)</td>
                                    <td>Training and skill development</td>
                                     <td><a href="http://www.btti.gov.bd/" target="_blank">btti.gov.bd</a></td>
                                </tr>
                                <tr>
                                    <td>RMG Sustainability Council (RSC)</td>
                                    <td>Monitors safety and sustainability in factories</td>
                                     <td><a href="http://www.rsc-bd.org//" target="_blank">www.rsc-bd.org</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
         <div class="row">
            <div class="col-md-12">
                <div class="tableView">
                    <h3 class="mt-4">Our Services for Buyers</h3>
                    <div class="tableMain table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead class="table-head">
                                <tr>
                                    <th scope="col">Service</th>
                                    <th scope="col">Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Factory Identification</td>
                                    <td>Match with vetted suppliers by product type, capacity, and certifications</td>
                                </tr>
                                <tr>
                                    <td>Due Diligence & Auditing)</td>
                                    <td>Pre-sourcing factory checks: compliance, performance, safety</td>
                                </tr>
                                <tr>
                                    <td>Sample Coordination</td>
                                    <td>Manage sample development and buyer feedback</td>
                                </tr>
                                <tr>
                                    <td>Negotiation Support</td>
                                    <td>Price, terms, MOQs, and delivery discussion</td>
                                </tr>
                                <tr>
                                    <td>Production Oversight</td>
                                    <td>Track progress, resolve bottlenecks, maintain timelines</td>
                                </tr>
                                <tr>
                                    <td>Quality Control Management</td>
                                    <td>Inline & final inspections based on AQL or buyer standards</td>
                                </tr>
                                <tr>
                                    <td>Documentation & Compliance</td>
                                    <td>Export docs, buyer SOPs, product testing coordination</td>
                                </tr>
                                <tr>
                                    <td>Logistics Coordination</td>
                                    <td>Shipment planning, booking, and follow-through</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
</div>


 {{--<div id="production" class="ourProduction">
     <div class="container">
         <h2 class="sectionTitle">Why Partner with Bangladeshi Garment Factories?</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="productionGrid">
                    <img src="{{ asset(assetLink().'/images/asmara/service-icon/s7.svg') }}" alt="service icon">
                           <div class="ourServiceGridTitle">
                              <h4>Cost-Effectiveness </h4>
                           <button data-url="{{ asset(assetLink().'/images/asmara/asmara-offices_sourcing.pdf') }}"  class="plus-button"><span>+</span></button>
                         </div>
                        <p>
                            Benefit from some of the world’s most competitive production costs without 
                            sacrificing quality—thanks to a highly efficient, large-scale workforce
                            and affordable infrastructure
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="productionGrid">
                    <img src="{{ asset(assetLink().'/images/asmara/service-icon/s8.svg') }}" alt="service icon">
                           <div class="ourServiceGridTitle">
                              <h4>Large-Scale Production Capacity  </h4>
                           <button data-url="{{ asset(assetLink().'/images/asmara/asmara-offices_sourcing.pdf') }}"  class="plus-button"><span>+</span></button>
                         </div>
                        <p>
                            Home to thousands of export-ready factories, Bangladesh can meet
                            high-volume orders with consistent lead times and global delivery 
                            capabilities.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="productionGrid">
                    <img src="{{ asset(assetLink().'/images/asmara/service-icon/s9.svg') }}" alt="service icon">
                           <div class="ourServiceGridTitle">
                              <h4>Wide Range of Product Offerings </h4>
                         </div>
                        <p>
                            From basic tees to complex fashionwear, denim to 
                            outerwear—Bangladeshi manufacturers cater to diverse 
                            market needs across all segments
                        </p>
                    </div>
                </div>
            </div>
            
     </div>
 </div>--}}
 {{--<div id="products" class="goodProduct">
        <div class="container">
            <div class="googProductRow">
                <div class="row">
                    
                    <div class="col-md-7">
                        <div class="goodProductGrid">
                            <div class="peopleTitle" style="padding-bottom: 0;">
                              <h3> Case Studies / Success Stories  </h3>
                              <button data-url="{{ asset(assetLink().'/images/asmara/asmara-sustainability_fabrics.pdf') }}" class="plus-button"><span>+</span></button>
                            </div>
                            
                            <p><b>Case Study 1: Fast Turnaround for a Fashion Retailer</b></p>
                            
                             <p>
                                 A European fast fashion retailer faced delays with previous suppliers.
                                 We on boarded a Dhaka-based factory capable of delivering 30,000
                                 pcs within 25 days—resulting in a 25% faster turnaround and 10% cost savings.
                             </p>
                             
                             <p><b>Case Study 2: Sustainable Sourcing for an Eco-Conscious Brand</b></p>
                             <p>
                                 
                                 We helped an Australian startup identify a GOTS and OEKO-TEX certified knitwear supplier.
                                 Within 3 months, they launched their organic kidswear line with full traceability
                                 and RSL compliance.
                             </p>
                             
                             <p><b> Case Study 3: MOQs Aligned with Growth Goals</b></p>
                             
                             <p>
                                 A North American brand entering the South Asian market needed flexible MOQs.
                                 We aligned them with a mid-sized, compliant unit allowing scalable growth 
                                 without overstock risks.
                             </p>
                             
                             <div class="goodIcon">
                                 
                               <button data-url="{{ asset(assetLink().'/images/asmara/asmara-sustainability_fabrics.pdf') }}" class="plus-button"> <img src="{{ asset(assetLink().'/images/asmara/service-icon/OUTDOOR.svg') }}" alt="service icon"></button>
                               <button data-url="{{ asset(assetLink().'/images/asmara/asmara-sustainability_fabrics.pdf') }}" class="plus-button"><img src="{{ asset(assetLink().'/images/asmara/service-icon/SHOE_V02.svg') }}" alt="service icon"></button>
                             </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="goodProductImg">
                            <img src="{{ asset(assetLink().'/images/asmara/2022_08_03_asmara_2978-1.jpg.webp') }}" alt="service icon">
                        </div>
                    </div>
                    <div class="col-md-2">
                        
                    </div>
                </div>
            </div>
        </div>
 </div>--}}






</div>
@endsection @push('js') @endpush
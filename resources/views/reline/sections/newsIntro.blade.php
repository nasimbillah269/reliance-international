@push('css')
<style>
    .news-intro__card { height: 100%; background: var(--visanet-gray, #f4f4f4); border-radius: 20px; padding: 40px; border-top: 4px solid var(--visanet-base, #e50c37); }
    .news-intro__card h3 { font-size: 26px; margin-bottom: 15px; display: flex; align-items: center; gap: 12px; }
    .news-intro__card h3 i { color: var(--visanet-base, #e50c37); }
    .news-intro__card, .news-intro__card p, .news-intro__card h3 { color: #fff; }
    .news-intro__card p:last-child { margin-bottom: 0; }
</style>
@endpush
<div class="row gutter-y-30 mb-5">
    <div class="col-lg-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="100">
        <div class="news-intro__card">
            <h3><i class="icon-paper-plane"></i> News</h3>
            <p>Welcome to the News section of Reliance International. Here we share company updates, recruitment news, and industry insights for employers and candidates.</p>
            <p>Stay informed about new recruitment opportunities, partnerships, training initiatives, and important updates in the global labor market. We aim to keep our clients and partners connected as we build trusted global employment opportunities.</p>
        </div>
    </div>
    <div class="col-lg-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="200">
        <div class="news-intro__card">
            <h3><i class="icon-comment-2"></i> Blog</h3>
            <p>Welcome to the Reliance International Blog, where we share insights on international recruitment, workforce planning, industry trends, skills development, and global employment opportunities.</p>
            <p>Our goal is to provide valuable information that supports both employers and candidates in making informed decisions. Explore our latest articles and discover how professional recruitment and workforce solutions can help your business grow.</p>
        </div>
    </div>
</div>

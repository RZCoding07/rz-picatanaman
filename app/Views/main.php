<?= $this->extend('layouts/master_public'); ?>

<?= $this->section('content') ?>
<section class="featured-section">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                <div class="custom-block bg-white shadow-lg">
                    <a href="topics-detail.html">
                        <div class="d-flex">
                            <div>
                                <h5 class="mb-2">PICA</h5>

                                <p class="mb-0">PICA adalah Alat Kontrol bagi setiap organisasi dalam mengamati Proses PDCA yang dijalankan sesuai dengan Rencana atau masih banyak kendala yang dihadapi.</p>
                            </div>

                            <span class="badge bg-design rounded-pill ms-auto">14</span>
                        </div>

                        <img src="images/topics/undraw_Remote_design_team_re_urdx.png" class="custom-block-image img-fluid" alt="">
                    </a>
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <div class="custom-block custom-block-overlay">
                    <div class="d-flex flex-column h-100">
                        <img src="images/businesswoman-using-tablet-analysis.jpg" class="custom-block-image img-fluid" alt="">

                        <div class="custom-block-overlay-text d-flex">
                            <div>
                                <h5 class="text-white mb-2">Problem Identification and Corrective Action</h5>

                                <p class="text-white">Problem Identification adalah cara untuk melihat atau menganalisis masalah yang menyebabkan Rencana (Plan) tidak dapat berjalan dengan baik atau menyimpang dan berpotensi mengakibatkan Target dan Tujuan tidak sesuai dengan yang diharapkan. Identifikasi Masalah harus memperhatikan aspek internal ataupun eksternal. </p>

                                <a href="topics-detail.html" class="btn custom-btn mt-2 mt-lg-3">Learn More</a>
                            </div>

                            <span class="badge bg-finance rounded-pill ms-auto">25</span>
                        </div>

                        <div class="social-share d-flex">
                            <p class="text-white me-4">Share:</p>

                            <ul class="social-icon">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-facebook"></a>
                                </li>
                        </div>

                        <div class="section-overlay"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="contact-section section-padding section-bg" id="section_5">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 text-center">
                <h2 class="mb-5">Get in touch</h2>
            </div>

            <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2595.065641062665!2d-122.4230416990949!3d37.80335401520422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858127459fabad%3A0x808ba520e5e9edb7!2sFrancisco%20Park!5e1!3m2!1sen!2sth!4v1684340239744!5m2!1sen!2sth" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-3 mb-lg- mb-md-0 ms-auto">
                <h4 class="mb-3">Head office</h4>

                <p>Bay St &amp;, Larkin St, San Francisco, CA 94109, United States</p>

                <hr>

                <p class="d-flex align-items-center mb-1">
                    <span class="me-2">Phone</span>

                    <a href="tel: 305-240-9671" class="site-footer-link">
                        305-240-9671
                    </a>
                </p>

                <p class="d-flex align-items-center">
                    <span class="me-2">Email</span>

                    <a href="mailto:info@company.com" class="site-footer-link">
                        info@company.com
                    </a>
                </p>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mx-auto">
                <h4 class="mb-3">Dubai office</h4>

                <p>Burj Park, Downtown Dubai, United Arab Emirates</p>

                <hr>

                <p class="d-flex align-items-center mb-1">
                    <span class="me-2">Phone</span>

                    <a href="tel: 110-220-3400" class="site-footer-link">
                        110-220-3400
                    </a>
                </p>

                <p class="d-flex align-items-center">
                    <span class="me-2">Email</span>

                    <a href="mailto:info@company.com" class="site-footer-link">
                        info@company.com
                    </a>
                </p>
            </div>

        </div>
    </div>
</section>

<?= $this->endSection() ?>
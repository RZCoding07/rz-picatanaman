<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - PICA TANAMAN</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/templatemo-topic-listing.css" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body id="top">


    <main>
        <section class="faq-section section-padding" id="section_4">
            <div class="container" style="position: relative;">
                <div class="row">


                    <div class="clearfix"></div>

                    <div class="col-12 text-center">
                        <img src="images/logo_ptpn.png" alt="Logo Ptpn 4" height="170" class="pb-2" style="text-shadow: grey 1px 4px 10px;">
                        <h3 style="font-family: 'Montserrat', sans-serif;  text-shadow: grey 1px 4px 10px;
" class="text-secondary pb-2 ">PICA TANAMAN</h3>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-5">
                            <div class="login-form card p-5 border-0 shadow-lg bg-body rounded" data-aos="fade-up">

                                <h2 class="text-center mb-4 text-secondary" style="font-family: 'Montserrat', sans-serif;">Login</h2>
                                <form action="/login" method="POST">

                                    <div class="mb-3">
                                        <label for="formUsername" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="formUsername" placeholder="name@example.com">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="fromPassword" placeholder="password" name="password">
                                    </div>
                                    <div class="text-center pt-4">
                                        <button type="submit" class="btn btn-outline-success form-control p-3">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center pt-4">
                        <h3 style="font-family: 'Nunito', 'Segoe UI', Arial; font-size: 14px; text-shadow: grey 1px 1px 5px;" class="text-secondary pb-2">&copy; <?php echo date("Y"); ?> PT Perkebunan Nusantara IV</h3>

                    </div>

                </div>
            </div>
            <div id="particles-js" style="position: absolute;
    top: 0;
    left: 0;
    z-index: -100;
    width: 100%;
    height: 100%;"></div>
        </section>

    </main>




    <!-- JAVASCRIPT FILES -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script>
    <!-- <script src="js/lib/stats.js"></script> -->
    <script>
        var count_particles, stats, update;
        stats = new Stats;
        stats.setMode(0);
        stats.domElement.style.position = 'absolute';
        stats.domElement.style.left = '0px';
        stats.domElement.style.top = '0px';
        document.body.appendChild(stats.domElement);
        count_particles = document.querySelector('.js-count-particles');
        update = function() {
            stats.begin();
            stats.end();
            if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
                count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
            }
            requestAnimationFrame(update);
        };
        requestAnimationFrame(update);
    </script>

</body>

</html>
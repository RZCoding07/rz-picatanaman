<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Monitoring PICA</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/templatemo-topic-listing.css" rel="stylesheet">
    <!--

TemplateMo 590 topic listing

https://templatemo.com/tm-590-topic-listing

-->
</head>

<body class="topics-listing-page" id="top">

    <main>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="<?php base_url(); ?>">
                    <!-- <i class="bi-back"></i>
                    <span>Topic</span> -->
                    <img src="images/logo_ptpn.png" alt="Logo ptpn 4" height="100">
                </a>

                <div class="d-lg-none ms-auto me-4">
                    <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5 me-lg-auto header-megamenu">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="<?= base_url('/') ?>">Beranda</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="<?= base_url('/monitoring-pica') ?>">Monitoring Pica</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href=" <?= base_url('/grafik-kuadran') ?>">Kuadran Grafik</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href=" <?= base_url('/rank-kebun') ?>">Rank Kebun</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href=" <?= base_url('/histori-kinerja') ?>">History Kinerja</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href=" <?= base_url('/identifikasi-masalah') ?>">Identifikasi Masalah</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href=" <?= base_url('/program-kerja') ?>">Program Kerja</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href=" <?= base_url('/dashboard-eksekutif') ?>">Dashboard Eksekutif</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href=" <?= base_url('/lokasi-kebun') ?>">Lokasi Kebun</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href=" <?= base_url('/dashboard') ?>">Dashboard</a>
                        </li>

                    </ul>

                    <div class="d-none d-lg-block">
                        <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
                </div>
            </div>
        </nav>



        <header class="site-header d-flex flex-column justify-content-center align-items-center">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-5 col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Beranda</a></li>

                                <li class="breadcrumb-item active" aria-current="page">Monitoring PICA</li>
                            </ol>
                        </nav>

                        <h2 class="text-white">Monitoring PICA</h2>
                    </div>

                </div>
            </div>
        </header>


        <section class="section-padding section-bg">
            <div class="container">
                <div class="row">

                    <!-- <div class="col-lg-12 col-12">
                        <h3 class="mb-4 pb-2">We'd love to hear from you</h3>
                    </div> -->


                    <div class="card">
                        <div class="card-body">
                            <div class="section-title text-dark">
                                <!-- <h2 class="text-center">Beranda</h2> -->
                                <h6 class="text-center">Problem Identification</h6>
                                <div class="container-fluid">
                                    <div class="row justify-content-center align-items-center">
                                        <!-- <div class="col-md-3">
                                            <div class="mb-3">
                                                <label for="kebun" class="form-label">Kebun</label>
                                                <select class="form-select" name="rpc" id="rpc">
                                                </select>


                                            </div>
                                        </div> -->
                                        <!-- <div class="col-md-3">
                                            <div class="mb-3">
                                                <label for="kebun" class="form-label">Kebun</label>
                                                <select class="form-select" name="kebun" id="kebun" onchange="onKebunChanges()">
                                                </select>


                                            </div>
                                        </div> -->
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label for="rpc" class="form-label seleksi">Regional</label>
                                                <select class="form-select" name="rpc" id="rpc">

                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label for="kebun" class="form-label seleksi">Kebun</label>
                                                <select class="form-select" name="kebun" id="kebun">

                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label for="tahun" class="form-label seleksi">Tahun</label>
                                                <select class="form-select" name="tahun" id="tahun">
                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label for="bulan" class="form-label seleksi">S.D. Bulan</label>
                                                <select class="form-select" name="bulan" id="bulan" onchange="onDataChange()">
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="container-fluid gx-2">
                                <div class="section-title mt-3">
                                    <h6 class="text-center">
                                        <!-- Keseluruhan PKS -->
                                    </h6>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div id="testing-chart" class="echarts-quadrant align-self-center overflow-visible" style="width:100%;height:100%;min-width: 300px;min-height: 300px;">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div id="testing-chart2" class="echarts-quadrant align-self-center overflow-visible" style="width:100%;height:100%;min-width: 300px;min-height: 300px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div id="testing-chart3" class="echarts-quadrant align-self-center overflow-visible" style="width:100%;height:100%;min-width: 300px;min-height: 300px;">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div id="testing-chart4" class="echarts-quadrant align-self-center overflow-visible" style="width:100%;height:100%;min-width: 300px;min-height: 300px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div id="testing-chart5" class="echarts-quadran align-self-center overflow-visible" style="width:100%;height:100%;min-width: 300px;min-height: 300px;">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div id="testing-chart6" class="echarts-quadran align-self-center overflow-visible" style="width:100%;height:100%;min-width: 300px;min-height: 300px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-12 mb-4 pb-2">
                    <a class="navbar-brand mb-2" href="<?php base_url(); ?>">
                        <!-- <i class="bi-back"></i> -->
                        <img src="images/logo_ptpn.png" alt="Logo ptpn 4" height="100">
                        <!-- <p>PT Perkebunan Nusantara IV</p> -->
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <h6 class="site-footer-title mb-3">Resources</h6>

                    <ul class="site-footer-links">
                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Beranda</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Monitoring Pica</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Grafik Kuadran</a>
                        </li>

                        <!-- <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Contact</a>
                        </li> -->
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                    <h6 class="site-footer-title mb-3">Information</h6>

                    <p class="text-white d-flex mb-1">
                        <a href="tel: 6281-1617-1900" class="site-footer-link">
                            +62 81-1617-1900
                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <a href="mailto:pengaduan@ptpn4.co.id" class="site-footer-link">
                            pengaduan@ptpn4.co.id
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 ms-auto">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            English</button>

                        <ul class="dropdown-menu">
                            <li><button class="dropdown-item" type="button">Thai</button></li>

                            <li><button class="dropdown-item" type="button">Myanmar</button></li>

                            <li><button class="dropdown-item" type="button">Arabic</button></li>
                        </ul>
                    </div>

                    <p class="copyright-text mt-lg-5 mt-4">Copyright &copy; <?php echo date("Y"); ?> PT Perkebunan Nusantara IV Regional II. All rights reserved.
                        <br><br>Design: With Love by <a href="https://github.com/sayahafidz">Muhammad Hafidz Alfatih Ginting</a>
                        And <a href="https://github.com/RZCoding07">Muhammad Rizky Lubis</a>
                    </p>

                </div>

            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="js/echarts.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/custom.js"></script>
    <script>
        var chartMap = new Map();
    </script>
    <?php
    $chartData = [
        [
            'id' => 'testing-chart',
            'title' => 'PalmCo',
            'subtext' => 'Tanaman Menghasilkan'
        ],
        [
            'id' => 'testing-chart2',
            'title' => 'Muda',
            'subtext' => 'Tanaman Menghasilkan'
        ],
        [
            'id' => 'testing-chart3',
            'title' => 'Dewasa',
            'subtext' => 'Tanaman Menghasilkan'
        ],
        [
            'id' => 'testing-chart4',
            'title' => 'Tua',
            'subtext' => 'Tanaman Menghasilkan'
        ],
        [
            'id' => 'testing-chart5',
            'title' => 'Remaja',
            'subtext' => 'Tanaman Menghasilkan'
        ],
        [
            'id' => 'testing-chart6',
            'title' => 'Renta',
            'subtext' => 'Tanaman Menghasilkan'
        ]
    ];
    $i = 0;
    foreach ($chartData as $data) {
        $chartId[] = $data['id'];
        $chartTitle = $data['title'];
        $chartSubtext = $data['subtext'];
    ?>
        <script>
            var chartDom = document.getElementById('<?php echo $chartId[$i]; ?>');
            var myChart = echarts.init(chartDom);
            var option;
            // var colour = ['gold', 'black', 'red', 'yellow', 'green'];
            // Define colors for each kriteria
            var colors = [
                '#FFD700', // Gold
                '#333333', // Black
                '#FF0000', // Red
                '#FFFF00', // Yellow
                '#008000' // Green
            ];

            option = {
                toolbox: {
                    show: true,
                    feature: {
                        saveAsImage: {
                            show: true,
                            title: 'Save As Image'
                        }
                    }
                },
                title: {
                    text: '<?php echo $chartTitle; ?>',
                    subtext: '<?php echo $chartSubtext; ?>',
                    left: 'center',
                    top: -5
                },
                tooltip: {
                    trigger: 'item'
                },
                legend: {
                    orient: 'vertical',
                    left: 'left',
                    show: false
                },
                series: [{
                    name: 'Luas HA',
                    type: 'pie',
                    radius: '50%',
                    avoidLabelOverlap: false,
                    emphasis: {
                        itemStyle: {
                            shadowBlur: 10,
                            shadowOffsetX: 0,
                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                    },
                    data: []
                }]
            };

            myChart.setOption(option);
            chartMap.set('<?php echo $i; ?>', myChart);
            <?php $i++; ?>
        </script>
    <?php
    }
    ?>


    <script>
        function fetchData(url) {
            return fetch(url)
                .then(response => response.json());
        }

        const fetchTahun = fetchData('<?= base_url() ?>picaTahun');
        const fetchBulan = fetchData('<?= base_url() ?>picaBulan');
        const fetchKebun = fetchData('<?= base_url() ?>picaKebun');
        const fetchRpc = fetchData('<?= base_url() ?>picaRpc');

        Promise.all([fetchTahun, fetchBulan, fetchKebun, fetchRpc])
            .then(([tahunData, bulanData, kebunData, rpcData]) => {
                const tahunSelect = document.getElementById('tahun');
                tahunData.forEach(item => {
                    const option = document.createElement('option');
                    option.value = item.Realisasi_Tahun;
                    option.text = item.Realisasi_Tahun;
                    tahunSelect.appendChild(option);
                });

                const bulanSelect = document.getElementById('bulan');
                bulanData.forEach(item => {
                    const option = document.createElement('option');
                    option.value = item.Realisasi_Bulan;
                    option.text = item.Realisasi_Bulan;
                    bulanSelect.appendChild(option);
                });

                const kebunSelect = document.getElementById('kebun');
                const defaultKebunOption = document.createElement('option');
                defaultKebunOption.value = '99';
                defaultKebunOption.text = 'All Kebun';
                kebunSelect.appendChild(defaultKebunOption);
                kebunData.forEach(item => {
                    const option = document.createElement('option');
                    option.value = item.Kebun;
                    option.text = item.Kebun;
                    kebunSelect.appendChild(option);
                });

                const rpcSelect = document.getElementById('rpc');
                const defaultRpcOption = document.createElement('option');
                defaultRpcOption.value = '99';
                defaultRpcOption.text = 'All Region';
                rpcSelect.appendChild(defaultRpcOption);
                rpcData.forEach(item => {
                    const option = document.createElement('option');
                    option.value = item.RPC;
                    option.text = item.RPC;
                    rpcSelect.appendChild(option);
                });

                // Call onDataChange after all data is populated
                onDataChange();
            })
            .catch(error => console.error('Error:', error));

        function onDataChange() {
            const tahun = document.getElementById('tahun').value;
            const bulan = document.getElementById('bulan').value;
            const rpc = document.getElementById('rpc').value;
            const kebun = document.getElementById('kebun').value;
            console.log(tahun, bulan);

            const formData = new FormData();
            formData.append('tahun', tahun);
            formData.append('bulan', bulan);
            formData.append('rpc', rpc);
            formData.append('kebun', kebun);

            fetch('<?= base_url() ?>pica', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    let i = 0;
                    for (let idx in data) {
                        let row = data[idx];
                        console.log(idx);
                        let option = {
                            series: [{
                                data: [{
                                        value: row[0].value,
                                        name: row[0].name,
                                        itemStyle: {
                                            color: colors[0]
                                        }
                                    },
                                    {
                                        value: row[1].value,
                                        name: row[1].name,
                                        itemStyle: {
                                            color: colors[1]
                                        }
                                    },
                                    {
                                        value: row[2].value,
                                        name: row[2].name,
                                        itemStyle: {
                                            color: colors[2]
                                        }
                                    },
                                    {
                                        value: row[3].value,
                                        name: row[3].name,
                                        itemStyle: {
                                            color: colors[3]
                                        }
                                    },
                                    {
                                        value: row[4].value,
                                        name: row[4].name,
                                        itemStyle: {
                                            color: colors[4]
                                        }
                                    }
                                ],
                            }]
                        };

                        let chart = chartMap.get(`${i}`);
                        i++;
                        chart.setOption(option);
                        console.log(chart); // Check if chart is defined before logging it
                    }
                })
                .catch(error => console.error('Error:', error));
        }
    </script>

</body>

</html>
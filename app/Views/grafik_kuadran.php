<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Grafik Kuadran</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/templatemo-topic-listing.css" rel="stylesheet">
    <style>
        .hasil {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
        }

        .color-box {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .color-box:hover {
            transform: translateY(-5px);

        }

        .color-label {
            font-weight: bold;
            font-size: 1.2em;
            margin: 0;
        }

        .color-text {
            margin: 10px 0 0;
            font-size: 1em;
            transition: opacity 0.5s ease-in-out;
        }
    </style>
</head>

<body class="topics-listing-page" id="top">

    <main>

        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
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
            <div class="container-fluid">
                <div class="row align-items-center">

                    <div class="col-lg-5 col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Beranda</a></li>

                                <li class="breadcrumb-item active" aria-current="page">Grafik Kuadran</li>
                            </ol>
                        </nav>

                        <h2 class="text-white">Grafik Kuadran</h2>
                    </div>

                </div>
            </div>
        </header>


        <section class="section-padding section-bg">
            <div class="">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <div class="section-title text-dark">
                                <!-- <h2 class="text-center">Beranda</h2> -->
                                <h6 class="text-center">Problem Identification</h6>
                                <div class="container-fluid">
                                    <form>
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="rpc" class="form-label">Region</label>
                                                    <select class="form-select" name="rpc" id="rpc">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="tahun" class="form-label">Tahun</label>
                                                    <select class="form-select" name="tahun" id="tahun" onchange="onTahunChanges($(this))">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="bulan" class="form-label">Bulan</label>
                                                    <select class="form-select" name="bulan" id="bulan" onchange="onBulanChange()">
                                                        <!-- <option value="1">Januari</option> -->
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="section-title">
                                <!-- <h2 class="text-center">Beranda</h2> -->
                                <!-- <h6 class="text-center">Problem Identification</h6> -->
                                <div class="container-fluid">
                                    <div class="hasil text-center">
                                        <div class="color-box" style="background-color: green;color: white;">
                                            <p class="color-label" style="color: white;">Hijau:</p>
                                            <p id="green_text" class="color-text" style="color: white;"></p>
                                        </div>
                                        <div class="color-box" style="background-color: yellow; ">
                                            <p class="color-label" style="color: black;">Kuning:</p>
                                            <p id="yellow_text" class="color-text" style="color: black;"></p>
                                        </div>
                                        <div class="color-box" style="background-color: orange;color: white;">
                                            <p class="color-label" style="color: white;">Orange:</p>
                                            <p id="orange_text" class="color-text" style="color: white;"></p>
                                        </div>
                                        <div class="color-box" style="background-color: red;color: white;">
                                            <p class="color-label" style="color: white;">Merah:</p>
                                            <p id="red_text" class="color-text" style="color: white;"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="container-fluid gx-2">
                                <section id="cashcost_quadrant" data-category="cascosCategory" data-chart='cashcost_chart'>
                                    <div class="card mx-1 h-100 mb-2 px-0">
                                        <div class="d-flex justify-content-end">

                                            <div class="align-self-end d-block mx-3">
                                                <label class="form-label">Tampilkan Data: </label> <br>
                                                <div id="cashcost-show" class="btn-group"><label onclick="changeCategory($(this))" class="btn border-secondary active">
                                                        <div class="form-check"><input data-id="pks" type="radio" id="rendpks" name="customRadioRend" class="form-check-input text-white" checked=""><label class="form-check-label" for="rendpks">PKS</label></div>
                                                    </label><label onclick="changeCategory($(this))" class="btn border-secondary">
                                                        <div class="form-check"><input data-id="manajer" type="radio" id="rendmanajer" name="customRadioRend" class="form-check-input"><label class="form-check-label" for="rendmanajer">Manajer</label></div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body shadow h-100 d-flex justify-content-center">
                                            <div style="top:16%; left:13%; border: 1px solid red; padding: 5px; border-radius: 10px; " class="position-absolute"><span style="height: 15px;width:15px;background-color:red;opacity:0.4" class="rounded me-2 d-inline-block"></span><small>Cash Cost &gt;2500 Nilai PICA &lt;3</small>
                                            </div>
                                            <div style="top:16%; right:8%; border: 1px solid orange; padding: 5px; border-radius: 10px;" class="position-absolute"><span style="height: 15px;width:15px;background-color:orange;opacity:0.4" class="rounded me-2 d-inline-block"></span><small>Cash Cost &gt;2500 Nilai PICA &gt;3</small>
                                            </div>
                                            <div style="bottom:5%; right:8%; border: 1px solid green; padding: 5px; border-radius: 10px;" class="position-absolute"><span style="height: 15px;width:15px;background-color:green;opacity:0.4" class="rounded me-2 d-inline-block"></span><small>Cash Cost &lt;2500 Nilai PICA &gt;3</small>
                                            </div>
                                            <div style="bottom:5%; left:13%; border: 1px solid yellow; padding: 5px; border-radius: 10px;" class="position-absolute"><span style="height: 15px;width:15px;background-color:yellow;opacity:0.4" class="rounded me-2 d-inline-block"></span><small>Cash Cost &lt;2500 Nilai PICA &lt;3 </small>
                                            </div>
                                            <div class="d-block">
                                                <div id="testing-chart" class="echarts-quadrant align-self-center" style="width:100cqw;height:600px">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
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
                        And <a href="https://github.com/kaizo-kn">Prayogi</a>
                    </p>

                </div>

            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="/js/ecstat.js" type="text/javascript"></script>e
    <script src="https://fastly.jsdelivr.net/npm/echarts@5/dist/echarts.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/custom.js"></script>
    <script>
        var chartDom = document.getElementById('testing-chart');
        var myChart = echarts.init(chartDom);
        var option;

        // option = {
        //     xAxis: {
        //         type: 'category',
        //         data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
        //     },
        //     yAxis: {
        //         type: 'value'
        //     },
        //     series: [{
        //         symbolSize: 20,
        //         data: [
        //             [10.0, 8.04],
        //             [8.07, 6.95],
        //             [13.0, 7.58],
        //             [9.05, 8.81],
        //             [11.0, 8.33],
        //             [14.0, 7.66],
        //             [13.4, 6.81],
        //             [10.0, 6.33],
        //             [14.0, 8.96],
        //             [12.5, 6.82],
        //             [9.15, 7.2],
        //             [11.5, 7.2],
        //             [3.03, 4.23],
        //             [12.2, 7.83],
        //             [2.02, 4.47],
        //             [1.05, 3.33],
        //             [4.05, 4.96],
        //             [6.03, 7.24],
        //             [12.0, 6.26],
        //             [12.0, 8.84],
        //             [7.08, 5.82],
        //             [5.02, 5.68]
        //         ],
        //         type: 'scatter'
        //     }]
        // };

        var CLUSTER_COUNT = 4;
        var DIENSIION_CLUSTER_INDEX = 2;
        var COLOR_ALL = [
            'green',
            'lime',
            'cyan',
            'yellow',
            'orange',
            'red',
            'brown'
        ];

        xMinValue = 1
        xMaxValue = 1000
        yMinValue = 1
        yMaxValue = 3000
        const Setopacity = 0.3;
        const centerCoord = [2.5, 534];

        const markAreaData = [
            // First quadrant
            [{
                    coord: [centerCoord[0], centerCoord[1]], //x0, y0
                    itemStyle: {
                        color: 'orange',
                        opacity: Setopacity
                    }
                },
                {
                    coord: [xMaxValue, yMaxValue] //x1, y1
                }
            ],
            // Second quadrant
            [{
                    coord: [xMinValue, yMaxValue], //1-2
                    itemStyle: {
                        color: 'red',
                        opacity: Setopacity
                    }
                },
                {
                    coord: [centerCoord[0], centerCoord[1]] //3-4
                }
            ],
            // Third quadrant
            [{
                    coord: [xMinValue, 534],
                    itemStyle: {
                        color: 'yellow',
                        opacity: Setopacity
                    }
                },
                {
                    coord: [centerCoord[0], 0]
                }
            ],
            // Forth quadrant
            [{
                    coord: [centerCoord[0], centerCoord[1]],
                    itemStyle: {
                        color: 'green',
                        opacity: Setopacity
                    }
                },
                {
                    coord: [xMaxValue, yMaxValue]
                }
            ]
        ];

        var pieces = ['hafidz'];
        option = {
            title: [{
                text: 'Cash Cost (Rp/Kg)',
                left: '3%', // custom x position by percentage
                top: '5%',
                margin: [8, 16, 8, 8],
                textStyle: {
                    fontSize: 14,
                    fontWeight: 'light',
                    color: 'black',
                },
            }, {
                text: 'Empat Kuadran Korelasi PICA vs Cash Cost',
                left: 'center', // custom x position by percentage
                top: '1%',
                textStyle: {
                    fontSize: 18,
                    fontWeight: 'bold',
                    color: 'gray'
                },
            }, ],
            dataset: [{
                    source: [
                        [10.0, 8.04],
                        [8.07, 6.95],
                        [13.0, 7.58],
                        [9.05, 8.81],
                        [11.0, 8.33],
                        [14.0, 7.66],
                        [13.4, 6.81],
                        [10.0, 6.33],
                        [14.0, 8.96],
                        [12.5, 6.82],
                        [9.15, 7.2],
                        [11.5, 7.2],
                        [3.03, 4.23],
                        [12.2, 7.83],
                        [2.02, 4.47],
                        [1.05, 3.33],
                        [4.05, 4.96],
                        [6.03, 7.24],
                        [12.0, 6.26],
                        [12.0, 8.84],
                        [7.08, 5.82],
                        [5.02, 5.68]
                    ],

                },
                {
                    transform: {
                        type: 'ecStat:clustering',
                        // print: true,
                        config: {
                            clusterCount: CLUSTER_COUNT,
                            outputType: 'single',
                            outputClusterIndexDimension: DIENSIION_CLUSTER_INDEX
                        }
                    }
                }
            ],
            // tooltip: {
            //     trigger: 'item',
            //     formatter: function(params) {
            //         if (params.data[0] == undefined || params.data[1] == undefined) {
            //             $('#testing-chart > div:nth-child(2)').hide()
            //             return '';
            //         }
            //         return cashcostQuadChart.chartOptionLabels[params.dataIndex] + '<br>' + 'Nilai PICA: ' + params.data[0] + '<br>Cash Cost: ' + params.data[1];
            //     }
            // },
            toolbox: {
                show: true,
                right: '3%',
                feature: {
                    restore: {
                        show: true
                    },
                    saveAsImage: {
                        show: true
                    }
                }
            },
            visualMap: {
                type: 'piecewise',
                top: 'middle',
                min: 0,
                max: CLUSTER_COUNT,
                left: 10,
                splitNumber: CLUSTER_COUNT,
                dimension: DIENSIION_CLUSTER_INDEX,
                pieces: pieces,
                show: false
            },
            grid: {
                left: '5%',
                right: '5%'
            },
            xAxis: {
                min: xMinValue,
                max: xMaxValue,
                interval: 0.5,
            },
            yAxis: {
                min: yMinValue,
                max: yMaxValue,
                splitNumber: 20,
                granularity: 50
            },
            series: {
                type: 'scatter',
                encode: {
                    tooltip: [0, 1]
                },
                symbolSize: 10,
                itemStyle: {
                    borderColor: '#555'
                },
                datasetIndex: 1,
                markArea: {
                    data: markAreaData //here
                },
                label: {
                    show: true, // Menampilkan label
                    // formatter: function(params) {
                    //     return cashcostQuadChart.chartOptionLabels[params.dataIndex] ||
                    //         'n/a'; // Isi label dapat disesuaikan sesuai kebutuhan
                    // },
                    position: 'right',
                    textShadow: '0', // Menghapus bayangan teks pada label,
                    color: 'black',
                    // padding: [10, 10, 10, 10],
                    emphasis: {
                        show: true
                    }

                },
                // add click action to symbol
                emphasis: {
                    focus: 'series',
                    blurScope: 'self',
                    select: {
                        color: '#333',
                        borderColor: '#333',
                        borderWidth: 5,
                    },
                    selectMode: 'multiple',
                }
            }
        };

        // option && myChart.setOption(option);
        console.log(option);
    </script>
    <script>
        window.onload = function() {
            // fetch('<?= base_url() ?>kuadranRpc')
            //     .then(response => response.json())
            //     .then(data => {
            //         const select = document.getElementById('rpc');
            //         data.forEach(item => {
            //             const option = document.createElement('option');
            //             option.value = item.rpc;
            //             option.text = item.rpc;
            //             select.appendChild(option);
            //         });
            //     })
            //     .catch(error => console.error('Error:', error));

            // fetch('<?= base_url() ?>kuadranTahun')
            //     .then(response => response.json())
            //     .then(data => {
            //         const select = document.getElementById('tahun');
            //         data.forEach(item => {
            //             const option = document.createElement('option');
            //             option.value = item.tahun;
            //             option.text = item.tahun;
            //             select.appendChild(option);
            //         });
            //     })
            //     .catch(error => console.error('Error:', error));

            // fetch('<?= base_url() ?>kuadranBulan')
            //     .then(response => response.json())
            //     .then(data => {
            //         const select = document.getElementById('bulan');
            //         data.forEach(item => {
            //             const option = document.createElement('option');
            //             option.value = item.bulan;
            //             option.text = item.bulan;
            //             select.appendChild(option);
            //         });
            //     })
            //     .catch(error => console.error('Error:', error));\
            cashCostChart()
        };
    </script>
    <script>
        function fetchDataAndUpdateChart() {
            const rpc = document.getElementById('rpc').value;
            const tahun = document.getElementById('tahun').value;
            const bulan = document.getElementById('bulan').value;

            fetch('<?= base_url() ?>kuadran', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'form-data',
                    },
                    body: JSON.stringify({
                        rpc: rpc,
                        tahun: tahun,
                        bulan: bulan,
                    }),
                })
                .then(response => response.json())
                .then(data => {
                    // const transformedData = data.map(item => [parseFloat(item.pica), parseFloat(item.cashcost)]);
                    // Update your chart with the transformedData here
                    console.log(data);
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
        }

        // Attach the function to the 'change' event of the dropdowns

        $('#rpc,#bulan,#tahun').on('change', async function(e) {
            let form = $(e.target).closest('form');
            let formData = new FormData(form[0]);
            let response = $.ajax({
                url: '<?= base_url() ?>kuadran',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                dataType: 'json',
            }).fail((err) => {
                console.log(err);
            }).done((res) => {
                console.log(res);
                cashCostChart(res);
                setTextForColorBoxes(res);
            });
        });

        function onBulanChange() {
            console.log(1);
        };

        function setTextForColorBoxes(data) {
            const {
                kriteria
            } = data;

            console.log(kriteria.MERAH);

            const greenText = kriteria.HIJAU;
            const yellowText = kriteria.KUNING;
            const orangeText = kriteria.ORANGE;
            const redText = kriteria.MERAH;

            // console.log(res['kriteria']);

            document.getElementById('green_text').textContent = greenText;
            document.getElementById('yellow_text').textContent = yellowText;
            document.getElementById('orange_text').textContent = orangeText;
            document.getElementById('red_text').textContent = redText;
        }
    </script>

    <!-- kuadran chart testing -->
    <script>
        var chartMap = new Map()
        async function cashCostChart(chartData) {
            // let tahun = $('#tahunFilter').val();
            // let bulan = $('#bulanFilter').val();
            // let regional = $('#cashcost_entity').find('.active input').val();
            // let jenis = 2;
            // if (regional == 9999) {
            //     jenis = 2
            // } else if (regional == 0) {
            //     regional = $("#cashcost_regional").val()
            //     jenis = 0
            // } else if (regional == 1) {
            //     regional = $("#cashcost_regional").val()
            //     jenis = 1
            // }

            if (!chartData) return
            let type = $('#cashcost-show').find('input:checked').data('id');
            let manajerList = chartData.lbl // ['Manajer 1', 'Manajer 2', 'Manajer 3', 'Manajer 4', 'Manajer 5']
            let kebunList = chartData.lbl //Nama PKS (['PKS 1', 'PKS 2', 'PKS 3', 'PKS 4', 'PKS 5'])
            let pksIds = chartData.kebunList // ['1', '2', '3', '4', '5']
            let labels = kebunList
            // if (type === 'manajer') {
            //     labels = manajerList
            // }

            let fdata = chartData.res
            //Kalkulasi ymin, ymax, xmin, xmax
            let xMinValue = Math.min(...fdata.map(d => d[0]));
            let xMaxValue = Math.max(...fdata.map(d => d[0]));
            let yMinValue = Math.min(...fdata.map(d => d[1]));
            let yMaxValue = Math.max(...fdata.map(d => d[1]));

            // Data Padding agar tidak offset ke batas chart
            xMinValue = (xMinValue - 0.2).toFixed(1)
            xMaxValue = (xMaxValue + 0.2).toFixed(1)
            yMinValue = (Math.floor(yMinValue / 10) * 10).toFixed(1) - 100
            yMaxValue = ((Math.ceil(yMaxValue / 3) * 3.3) - 3).toFixed(1)
            // xMinValue = 1
            // xMaxValue = 5
            // yMinValue = 0
            // yMaxValue = 16500
            let cashcostQuadChart = []
            let chartOption = {}
            cashcostQuadChart = echarts.init(document.getElementById('testing-chart'));
            cashcostQuadChart.pksIds = pksIds
            cashcostQuadChart.pksLabel = kebunList
            cashcostQuadChart.manajerLabel = manajerList
            cashcostQuadChart.chartOptionLabels = labels
            echarts.registerTransform(ecStat.transform.clustering);
            const data = fdata || [];
            var CLUSTER_COUNT = 4;
            var DIENSIION_CLUSTER_INDEX = 2;
            var COLOR_ALL = [
                'green',
                'lime',
                'cyan',
                'yellow',
                'orange',
                'red',
                'brown'
            ];
            var pieces = [];
            for (var i = 0; i < CLUSTER_COUNT; i++) {
                pieces.push({
                    value: i,
                    label: 'Cluster ' + i,
                    show: false,
                    color: COLOR_ALL[2]
                });
            }
            //-----------Your require----------
            const Setopacity = 0.3;
            const centerCoord = [3, 2500];
            const markAreaData = [
                // First quadrant
                [{
                        coord: [centerCoord[0], centerCoord[1]], //x0, y0
                        itemStyle: {
                            color: 'orange',
                            opacity: Setopacity
                        }
                    },
                    {
                        coord: [xMaxValue, yMaxValue] //x1, y1
                    }
                ],
                // Second quadrant
                [{
                        coord: [xMinValue, yMaxValue], //1-2
                        itemStyle: {
                            color: 'red',
                            opacity: Setopacity
                        }
                    },
                    {
                        coord: [centerCoord[0], centerCoord[1]] //3-4
                    }
                ],
                // Third quadrant
                [{
                        coord: [0, centerCoord[1]],
                        itemStyle: {
                            color: 'yellow',
                            opacity: Setopacity
                        }
                    },
                    {
                        coord: [centerCoord[0], yMinValue]
                    }
                ],
                // Forth quadrant
                [{
                        coord: [centerCoord[0], centerCoord[1]],
                        itemStyle: {
                            color: 'green',
                            opacity: Setopacity
                        }
                    },
                    {
                        coord: [50, 50]
                    }
                ]
            ];

            chartOption = {
                title: [{
                    text: 'Cash Cost (Rp/Kg)',
                    left: '3%', // custom x position by percentage
                    top: '5%',
                    margin: [8, 16, 8, 8],
                    textStyle: {
                        fontSize: 14,
                        fontWeight: 'light',
                        color: 'black',
                    },
                }, {
                    text: 'Empat Kuadran Korelasi PICA vs Cash Cost',
                    left: 'center', // custom x position by percentage
                    top: '1%',
                    textStyle: {
                        fontSize: 18,
                        fontWeight: 'bold',
                        color: 'gray'
                    },
                }, ],
                dataset: [{
                        source: data
                    },
                    {
                        transform: {
                            type: 'ecStat:clustering',
                            // print: true,
                            config: {
                                clusterCount: CLUSTER_COUNT,
                                outputType: 'single',
                                outputClusterIndexDimension: DIENSIION_CLUSTER_INDEX
                            }
                        }
                    }
                ],
                tooltip: {
                    trigger: 'item',
                    formatter: function(params) {
                        if (params.data[0] == undefined || params.data[1] == undefined) {
                            $('#testing-chart > div:nth-child(2)').hide()
                            return '';
                        }
                        return cashcostQuadChart.chartOptionLabels[params.dataIndex] + '<br>' + 'Nilai PICA: ' + params.data[0] + '<br>Cash Cost: ' + params.data[1];
                    }
                },
                toolbox: {
                    show: true,
                    right: '3%',
                    feature: {
                        restore: {
                            show: true
                        },
                        saveAsImage: {
                            show: true
                        }
                    }
                },
                visualMap: {
                    type: 'piecewise',
                    top: 'middle',
                    min: 0,
                    max: CLUSTER_COUNT,
                    left: 10,
                    splitNumber: CLUSTER_COUNT,
                    dimension: DIENSIION_CLUSTER_INDEX,
                    pieces: pieces,
                    show: false // Menyembunyikan visual map (legend)
                },
                grid: {
                    left: '5%',
                    right: '5%'
                },
                xAxis: {
                    min: xMinValue,
                    max: xMaxValue,
                    interval: 0.5,
                },
                yAxis: {
                    min: yMinValue,
                    max: yMaxValue,
                    splitNumber: 20,
                    granularity: 50
                },
                series: {
                    type: 'scatter',
                    encode: {
                        tooltip: [0, 1]
                    },
                    symbolSize: 10,
                    itemStyle: {
                        borderColor: '#555'
                    },
                    datasetIndex: 1,
                    markArea: {
                        data: markAreaData //here
                    },
                    label: {
                        show: true, // Menampilkan label
                        formatter: function(params) {
                            return cashcostQuadChart.chartOptionLabels[params.dataIndex] ||
                                'n/a'; // Isi label dapat disesuaikan sesuai kebutuhan
                        },
                        position: 'right',
                        textShadow: '0', // Menghapus bayangan teks pada label,
                        color: 'black',
                        // padding: [10, 10, 10, 10],
                        emphasis: {
                            show: true
                        }

                    },
                    // add click action to symbol
                    emphasis: {
                        focus: 'series',
                        blurScope: 'self',
                        select: {
                            color: '#333',
                            borderColor: '#333',
                            borderWidth: 5,
                        },
                        selectMode: 'multiple',
                    }
                }
            };
            cashcostQuadChart.setOption(chartOption);
            cashcostQuadChart.chartOption = chartOption
            let timeoutId;
            cashcostQuadChart.off('click');
            cashcostQuadChart.on('click', function(params) {
                // Batalkan eksekusi yang sebelumnya
                clearTimeout(timeoutId);
                // Jadwalkan eksekusi baru dalam 500ms
                timeoutId = setTimeout(function() {
                    if (params.componentType === 'series') {
                        // Jika yang diklik adalah pada series
                        // console.log(params);
                        showChartDetails(cashcostQuadChart.pksIds[params.dataIndex])
                    }
                }, 500);
            });
            chartMap.set('testing-chart', cashcostQuadChart)
        }

        function getUniqueItems(data, property) {
            var uniqueItems = [];
            data.forEach(function(entry) {
                if (!uniqueItems.includes(entry[property])) {
                    uniqueItems.push(entry[property]);
                }
            });
            return uniqueItems;
        }

        async function processChartData() {
            let data = [{
                    "id": "60",
                    "PKS": "PKS SAWIT SEBERANG",
                    "HPP1": "455.21",
                    "Rendemen_CPO": "22.36",
                    "Nilai_PICA": "1.5",
                    "Bulan": "2",
                    "Tahun": "2024",
                    "manajer": "Henry Sitanggang",
                    "no_hp": "082162796418",
                    "manajer_dan_no_hp": "Henry Sitanggang\n082162796418",
                    "regional_id": "9",
                    "jenis": "1",
                    "hidden_pica_cost": "1",
                    "hidden_pica_cpo": "1",
                    "warna_cascos": "yellow",
                    "warna_rencpo": "red"
                },
                {
                    "id": "61",
                    "PKS": "PKS SAWIT HULU",
                    "HPP1": "589.6",
                    "Rendemen_CPO": "22.53",
                    "Nilai_PICA": "2.1",
                    "Bulan": "2",
                    "Tahun": "2024",
                    "manajer": "Edi Sutendi Daulay",
                    "no_hp": "08116326677",
                    "manajer_dan_no_hp": "Edi Sutendi Daulay\n08116326677",
                    "regional_id": "9",
                    "jenis": "1",
                    "hidden_pica_cost": "1",
                    "hidden_pica_cpo": "1",
                    "warna_cascos": "red",
                    "warna_rencpo": "red"
                },
                {
                    "id": "62",
                    "PKS": "PKS KWALA SAWIT",
                    "HPP1": "310.14",
                    "Rendemen_CPO": "23.22",
                    "Nilai_PICA": "1.8",
                    "Bulan": "2",
                    "Tahun": "2024",
                    "manajer": "Harry Oktavianus Sinaga",
                    "no_hp": "081248911128",
                    "manajer_dan_no_hp": "Harry Oktavianus Sinaga\n081248911128",
                    "regional_id": "9",
                    "jenis": "1",
                    "hidden_pica_cost": "1",
                    "hidden_pica_cpo": "1",
                    "warna_cascos": "yellow",
                    "warna_rencpo": "orange"
                },
                {
                    "id": "63",
                    "PKS": "PKS PAGAR MERBAU",
                    "HPP1": "383.81",
                    "Rendemen_CPO": "20.38",
                    "Nilai_PICA": "2.1",
                    "Bulan": "2",
                    "Tahun": "2024",
                    "manajer": "Irfan Syahrizal Siregar",
                    "no_hp": "085261037120",
                    "manajer_dan_no_hp": "Irfan Syahrizal Siregar\n085261037120",
                    "regional_id": "9",
                    "jenis": "1",
                    "hidden_pica_cost": "1",
                    "hidden_pica_cpo": "1",
                    "warna_cascos": "yellow",
                    "warna_rencpo": "red"
                },
                {
                    "id": "70",
                    "PKS": "PKS LUWU",
                    "HPP1": "468.38",
                    "Rendemen_CPO": "21.42",
                    "Nilai_PICA": "2.2",
                    "Bulan": "2",
                    "Tahun": "2024",
                    "manajer": "FAHMI YULIZAR",
                    "no_hp": "081396320345",
                    "manajer_dan_no_hp": "FAHMI YULIZAR\n081396320345",
                    "regional_id": "9",
                    "jenis": "1",
                    "hidden_pica_cost": "1",
                    "hidden_pica_cpo": "1",
                    "warna_cascos": "yellow",
                    "warna_rencpo": "red"
                }
            ]
            let z = [{
                    "id": "30",
                    "rpc": "RPC2",
                    "kebun": "Hapesong",
                    "pica": "4.2584360658688",
                    "cashcost": "2433.3061738258",
                    "kriteria": "HIJAU",
                    "tahun": "2024",
                    "bulan": "Januari"
                },
                {
                    "id": "31",
                    "rpc": "RPC2",
                    "kebun": "Batang Toru",
                    "pica": "3.1812631177256",
                    "cashcost": "3706.2367234744",
                    "kriteria": "ORANGE",
                    "tahun": "2024",
                    "bulan": "Januari"
                },
                {
                    "id": "32",
                    "rpc": "RPC2",
                    "kebun": "Bandar Selamat",
                    "pica": "4.8537599207042",
                    "cashcost": "1763.7330262791",
                    "kriteria": "HIJAU",
                    "tahun": "2024",
                    "bulan": "Januari"
                },
                {
                    "id": "33",
                    "rpc": "RPC2",
                    "kebun": "Bahjambi",
                    "pica": "4.2026038879971",
                    "cashcost": "2753.298064033",
                    "kriteria": "ORANGE",
                    "tahun": "2024",
                    "bulan": "Januari"
                }
            ]

            if (data && data.length > 0) {
                var uniquePKSArray = getUniqueItems(data, 'kebun');
                pksLabel = uniquePKSArray
                var uniqueArray = calculateAverage(data);
                var pksIds = uniqueArray.map((obj) => obj.id);
                var testing = convertToArray(uniqueArray)
                return {
                    'testing': testing,
                    'pksIds': pksIds,
                    'kebunList': uniquePKSArray,
                }
                return false
            }
            Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                }
            }).fire({
                icon: 'error',
                title: 'Data tidak ditemukan'
            })
            console.error('Invalid or empty data received');
            return false
        }

        function removeThirdElement(arrays) {
            return arrays.map(array => [array[0], array[1]]);
        }

        function getUniqueItems(data, property) {
            var uniqueItems = [];
            data.forEach(function(entry) {
                if (!uniqueItems.includes(entry[property])) {
                    uniqueItems.push(entry[property]);
                }
            });
            return uniqueItems;
        }

        function calculateAverage(data) {
            const uniqueData = {};

            // Sum up the data for each unique PKS value
            data.forEach(obj => {
                const {
                    pks_id,
                    PKS,
                    HPP1,
                    Rendemen_CPO,
                    Nilai_PICA
                } = obj;
                if (uniqueData[PKS]) {
                    uniqueData[PKS].pks_id = obj.id;
                    uniqueData[PKS].Nilai_PICA += parseFloat(Nilai_PICA);
                    uniqueData[PKS].count += 1; // Increment count for PKS entry
                } else {
                    uniqueData[PKS] = {
                        pks_id: obj.id,
                        Rendemen_CPO: parseFloat(Rendemen_CPO),
                        Nilai_PICA: parseFloat(Nilai_PICA),
                        count: 1 // Initialize count for PKS entry
                    };
                }
            });

            const averages = {};
            for (const PKS in uniqueData) {
                const {
                    pks_id,
                    HPP1,
                    Rendemen_CPO,
                    Nilai_PICA,
                    count
                } = uniqueData[PKS];
                averages[PKS] = {
                    pks_id: uniqueData[PKS].pks_id,
                    averageHPP1: HPP1 / count,
                    averageRendemen_CPO: Rendemen_CPO / count,
                    averageNilai_PICA: Nilai_PICA / count
                };
            }

            return Object.values(averages);
        }

        function convertToArray(averagesObject) {
            return Object.values(averagesObject).map(averages => [
                averages.averageNilai_PICA,
                averages.averageHPP1,
                averages.averageRendemen_CPO
            ]);
        }
    </script>
    <script>
        // Fetch data from the API
        fetch('<?= base_url() ?>kuadranRpc')
            .then(response => response.json())
            .then(data => {
                // Get the select element
                const select = document.getElementById('rpc');

                // Create new option elements for each data item
                data.forEach(item => {
                    const option = document.createElement('option');
                    option.value = item.rpc;
                    option.text = item.rpc;

                    // Append the option to the select element
                    select.appendChild(option);
                });

                // Add default option with value 99
                const defaultOption = document.createElement('option');
                defaultOption.value = '99';
                defaultOption.text = 'All Region';
                select.appendChild(defaultOption);
            })
            .catch(error => console.error('Error:', error));
    </script>
    <script>
        // Fetch data from the API
        fetch('<?= base_url() ?>kuadranBulan')
            .then(response => response.json())
            .then(data => {
                // Get the select element
                const select = document.getElementById('bulan');

                // Create new option elements for each data item
                data.forEach(item => {
                    const option = document.createElement('option');
                    option.value = item.bulan;
                    option.text = item.bulan;

                    // Append the option to the select element
                    select.appendChild(option);
                });
            })
            .catch(error => console.error('Error:', error));
    </script>
    <script>
        setTimeout(() => {
            $('#bulan').trigger('change');
        }, 500);
        // Fetch data from the API
        fetch('<?= base_url() ?>kuadranTahun')
            .then(response => response.json())
            .then(data => {
                // Get the select element
                const select = document.getElementById('tahun');

                // Create new option elements for each data item
                data.forEach(item => {
                    const option = document.createElement('option');
                    option.value = item.tahun;
                    option.text = item.tahun;

                    // Append the option to the select element
                    select.appendChild(option);
                });
            })
            .catch(error => console.error('Error:', error));
    </script>

</body>

</html>
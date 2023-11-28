<?php include APPPATH . 'views/header.php'; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <h1>loading...</h1>
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a href="/" role="button">
                        <span>logout</span>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a class="brand-link">
                <span class="brand-text font-weight-light">SEBAWEB</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="/laporan-grafik" class="nav-link active">
                                <i class="nav-icon fas fa-columns"></i>
                                <p>
                                    Home
                                </p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Data
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/dashboard" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Layanan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/barang" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Barang</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/customer" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Customer</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/users" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data User</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/supplier" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Supplier</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Transaksi
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/transaksi-pembelian" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pembelian Barang</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/laporan-penjualan" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laporan Penjualan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/transaksi-penjualan" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Penjualan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/laporan-pembelian" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laporan Pembelian</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>ChartJS</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">ChartJS</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <main>
                        <div class="container-fluid px-4">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <i class="fas fa-chart-area me-1"></i>
                                            Grafik Transaksi Penjualan
                                            <div class="col-sm-2 mt-3">
                                                <input type="number" id="tahun-trans" class="form-control" value="<?= date('Y') ?>" onchange="chartTransaksi()">
                                            </div>
                                        </div>
                                        <div class="card-body"><canvas id="chartTransaksi" width="100%" height="40"></canvas></div>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-outline-primary btn-sm" onclick="downloadChartTransaksi('PDF')">Unduh PDF</button>
                                            <a id="download-trans" download="chart-transaksi.png">
                                                <button class="btn btn-outline-secondary btn-sm" onclick="downloadChartTransaksi('PNG')">Unduh PNG</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <i class="fas fa-chart-bar me-1"></i>
                                            Grafik Customer
                                            <div class="col-sm-2 mt-3">
                                                <input type="number" id="tahun-cust" class="form-control" value="<?= date('Y') ?>" onchange="chartCustomer()">
                                            </div>
                                        </div>
                                        <div class="card-body"><canvas id="chartCust" width="100%" height="40"></canvas></div>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-outline-primary btn-sm" onclick="downloadChartCustomer('PDF')">Unduh PDF</button>
                                            <a id="download-cust" download="chart-customer.png">
                                                <button class="btn btn-outline-secondary btn-sm" onclick="downloadChartCustomer('PNG')">Unduh PNG</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <i class="fas fa-chart-area me-1"></i>
                                            Grafik Transaksi Pembelian
                                            <div class="col-sm-2 mt-3">
                                                <input type="number" id="tahun-pemb" class="form-control" value="<?= date('Y') ?>" onchange="chartPembelian()">
                                            </div>
                                        </div>
                                        <div class="card-body"><canvas id="chartPembelian" width="100%" height="40"></canvas></div>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-outline-primary btn-sm" onclick="downloadChartPembelian('PDF')">Unduh PDF</button>
                                            <a id="download-pemb" download="chart-pembelian.png">
                                                <button class="btn btn-outline-secondary btn-sm" onclick="downloadChartPembelian('PNG')">Unduh PNG</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <i class="fas fa-chart-bar me-1"></i>
                                            Grafik Supplier
                                            <div class="col-sm-2 mt-3">
                                                <input type="number" id="tahun-supp" class="form-control" value="<?= date('Y') ?>" onchange="chartSupplier()">
                                            </div>
                                        </div>
                                        <div class="card-body"><canvas id="chartSupp" width="100%" height="40"></canvas></div>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-outline-primary btn-sm" onclick="downloadChartSupplier('PDF')">Unduh PDF</button>
                                            <a id="download-supp" download="chart-supplier.png">
                                                <button class="btn btn-outline-secondary btn-sm" onclick="downloadChartSupplier('PNG')">Unduh PNG</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">New Supplier</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="layananForm" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="nama" class="col-form-label">Nama Supplier:</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="col-form-label">Alamat Supplier:</label>
                                <textarea class="form-control" id="alamat" name="alamat"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="no_hp" class="col-form-label">No HP Supplier:</label>
                                <input type="text" class="form-control" id="no_hp" name="no_hp">
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="submitBtn">Submit</button>
                    </div>
                </div>
            </div>
        </div>



        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <?php include APPPATH . 'views/footer.php'; ?>
    <script>

    </script>
</body>
<script>
    $(document).ready(function() {
        chartTransaksi()
        chartCustomer()
        chartPembelian()
        chartSupplier()
    });

    // ==================== TRANSAKSI ================================= //
    function setLineChart1(dataset) {
        // Get the existing chart instance
        var existingChart = Chart.getChart("chartTransaksi");

        // If there is an existing chart, destroy it
        if (existingChart) {
            existingChart.destroy();
        }

        // Create a new Chart instance
        var ctx = document.getElementById("chartTransaksi");
        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des"],
                datasets: [{
                    label: "Total",
                    lineTension: 0.3,
                    backgroundColor: "rgba(2,117,216,0.2)",
                    borderColor: "rgba(2,117,216,1)",
                    pointRadius: 5,
                    pointBackgroundColor: "rgba(2,117,216,1)",
                    pointBorderColor: "rgba(255,255,255,0.8)",
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(2,117,216,1)",
                    pointHitRadius: 50,
                    pointBorderWidth: 2,
                    data: dataset,
                }],
            },
            options: {
                scales: {
                    xAxes: [{
                        time: {
                            unit: 'date'
                        },
                        gridLines: {
                            display: false
                        },
                        ticks: {
                            maxTicksLimit: 7
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            maxTicksLimit: 5
                        },
                        gridLines: {
                            color: "rgba(0, 0, 0, .125)",
                        }
                    }],
                },
                legend: {
                    display: false
                }
            }
        });
    }


    function chartTransaksi() {
        var tahun = $('#tahun-trans').val();
        $.ajax({
            url: "/chart-transaksi",
            method: "POST",
            data: {
                'tahun': tahun,
            },
            success: function(response) {
                var result = JSON.parse(response)

                dataset = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ]
                $.each(result.data, function(i, val) {
                    dataset[val.month - 1] = val.total
                });
                setLineChart1(dataset)
            }
        });
    }

    // ==================== CUSTOMER ================================= //
    function setBarChart1(dataset) {
        // Bar Chart Example
        var ctx = document.getElementById("chartCust");
        var myLineChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Oct", "Nov", "Des"],
                datasets: [{
                    label: "Jumlah",
                    backgroundColor: "rgba(2,117,216,1)",
                    borderColor: "rgba(2,117,216,1)",
                    data: dataset,
                }],
            },
            options: {
                scales: {
                    xAxes: [{
                        time: {
                            unit: 'month'
                        },
                        gridLines: {
                            display: false
                        },
                        ticks: {
                            maxTicksLimit: 6
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            maxTicksLimit: 5
                        },
                        gridLines: {
                            display: true
                        }
                    }],
                },
                legend: {
                    display: false
                }
            }
        });
    }

    function chartCustomer() {
        var tahun = $('#tahun-cust').val();
        $.ajax({
            url: "/chart-customer",
            method: "POST",
            data: {
                'tahun': tahun,
            },
            success: function(response) {
                var result = JSON.parse(response)

                dataset = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ]
                $.each(result.data, function(i, val) {
                    dataset[val.month - 1] = val.total
                });
                setBarChart1(dataset)
            }
        });
    }

    // ==================== PEMBELIAN ================================= //
    function setLineChart(dataset) {
        // Area Chart Example
        var ctx = document.getElementById("chartPembelian");
        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des"],
                datasets: [{
                    label: "Total",
                    lineTension: 0.3,
                    backgroundColor: "rgba(2,117,216,0.2)",
                    borderColor: "rgba(2,117,216,1)",
                    pointRadius: 5,
                    pointBackgroundColor: "rgba(2,117,216,1)",
                    pointBorderColor: "rgba(255,255,255,0.8)",
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(2,117,216,1)",
                    pointHitRadius: 50,
                    pointBorderWidth: 2,
                    data: dataset,
                }],
            },
            options: {
                scales: {
                    xAxes: [{
                        time: {
                            unit: 'date'
                        },
                        gridLines: {
                            display: false
                        },
                        ticks: {
                            maxTicksLimit: 7
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            maxTicksLimit: 5
                        },
                        gridLines: {
                            color: "rgba(0, 0, 0, .125)",
                        }
                    }],
                },
                legend: {
                    display: false
                }
            }
        });
    }

    function chartPembelian() {
        var tahun = $('#tahun-pemb').val();
        $.ajax({
            url: "/chart-pembelian",
            method: "POST",
            data: {
                'tahun': tahun,
            },
            success: function(response) {
                var result = JSON.parse(response)

                dataset = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ]
                $.each(result.data, function(i, val) {
                    dataset[val.month - 1] = val.total
                });
                setLineChart(dataset)
            }
        });
    }

    // ==================== SUPPLIER ================================= //
    function setBarChart(dataset) {
        // Bar Chart Example
        var ctx = document.getElementById("chartSupp");
        var myLineChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Oct", "Nov", "Des"],
                datasets: [{
                    label: "Jumlah",
                    backgroundColor: "rgba(2,117,216,1)",
                    borderColor: "rgba(2,117,216,1)",
                    data: dataset,
                }],
            },
            options: {
                scales: {
                    xAxes: [{
                        time: {
                            unit: 'month'
                        },
                        gridLines: {
                            display: false
                        },
                        ticks: {
                            maxTicksLimit: 6
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            maxTicksLimit: 5
                        },
                        gridLines: {
                            display: true
                        }
                    }],
                },
                legend: {
                    display: false
                }
            }
        });
    }

    function chartSupplier() {
        var tahun = $('#tahun-cust').val();
        $.ajax({
            url: "/chart-supplier",
            method: "POST",
            data: {
                'tahun': tahun,
            },
            success: function(response) {
                var result = JSON.parse(response)

                dataset = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ]
                $.each(result.data, function(i, val) {
                    dataset[val.month - 1] = val.total
                });
                setBarChart(dataset)
            }
        });
    }

    function downloadChartImg(download, chart) {
        var img = chart.toDataURL("image/jpg", 1.0).replace("image/jpg", "image/octet-stream")
        download.setAttribute("href", img)
    }

    function downloadChartPDF(chart, name) {
        html2canvas(chart, {
            onrendered: function(canvas) {
                var img = canvas.toDataURL("image/jpg", 1.0)
                var doc = new jsPDF('p', 'pt', 'A4')
                var lebarKonten = canvas.width
                var tinggiKonten = canvas.height
                var tinggiPage = lebarKonten / 592.28 * 841.89
                var leftHeight = tinggiKonten
                var position = 0
                var imgWidth = 595.28
                var imgHeight = 592.28 / lebarKonten * tinggiKonten
                if (leftHeight < tinggiPage) {
                    doc.addImage(img, 'PNG', 0, 0, imgWidth, imgHeight)
                } else {
                    while (leftHeight > 0) {
                        doc.addImage(img, 'PNG', 0, position, imgWidth, imgHeight)
                        leftHeight -= tinggiPageposition -= 841.89
                        if (leftHeight > 0) {
                            pdf.addPage()
                        }
                    }
                }
                doc.save(name)
            }
        });
    }

    function downloadChartTransaksi(type) {
        var download = document.getElementById('download-trans')
        var chart = document.getElementById('chartTransaksi')

        if (type == "PNG") {
            downloadChartImg(download, chart)
        } else {
            downloadChartPDF(chart, "Chart-Transaksi.pdf")
        }
    }

    function downloadChartCustomer(type) {
        var download = document.getElementById('download-cust')
        var chart = document.getElementById('chartCust')

        if (type == "PNG") {
            downloadChartImg(download, chart)
        } else {
            downloadChartPDF(chart, "Chart-Customer.pdf")
        }
    }

    function downloadChartPembelian(type) {
        var download = document.getElementById('download-pemb')
        var chart = document.getElementById('chartPembelian')

        if (type == "PNG") {
            downloadChartImg(download, chart)
        } else {
            downloadChartPDF(chart, "Chart-Pembelian.pdf")
        }
    }

    function downloadChartSupplier(type) {
        var download = document.getElementById('download-supp')
        var chart = document.getElementById('chartSupp')

        if (type == "PNG") {
            downloadChartImg(download, chart)
        } else {
            downloadChartPDF(chart, "Chart-Supplier.pdf")
        }
    }
</script>

</html>
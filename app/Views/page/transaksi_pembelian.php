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
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Transaksi
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/transaksi-pembelian" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pembelian Barang</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/barang" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Penjualan Barang</p>
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
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard v2</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v2</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div style="text-align: right; padding: 12px">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal" id="loginBtn" style="--bs-btn-padding-y: 0.49rem; --bs-btn-padding-x: 18.5rem; background-color:aliceblue;">Tambah</button>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Transaksi Pembelian Barang</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped table-dark">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Id Transaksi</th>
                                                <th>Jumlah Barang</th>
                                                <th>Total Pemesanan</th>
                                                <th>Tanggal Transaksi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
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
        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Create Transaksi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="layananForm" enctype="multipart/form-data">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                        <label for="tanggal">Tanggal:</label>
                                        <input type="text" class="form-control" id="tanggal" disabled>
                                    </div>
                                    <div class="col-sm">
                                        <div class="form-group">
                                            <label for="nama_supplier">Nama Supplier:</label>
                                            <select class="form-select" id="supplier" name="supplier" required>
                                                <option value="" disabled selected>== PILIH SUPPLIER ==</option>
                                                <?php foreach ($supplier as $suppliers) : ?>
                                                    <option value="<?= $suppliers['id_supplier'] ?>"><?= $suppliers['nama'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <div class="invalid-feedback">
                                                Pilih supplier yang valid.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <label for="nama_customer">Produk:</label>
                                        <select class="form-select" id="produk" name="produk"></select>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                        <label for="jumlah_stok">Jumlah:</label>
                                        <input type="text" class="form-control" id="jumlah_stok" />
                                    </div>
                                    <div class="col-sm" style="padding-top:32px;">
                                        <button type="button" class="btn btn-primary" id="addproduk">add produk</button>
                                    </div>
                                    <div class="col-sm">
                                    </div>
                                    <div class="col-sm">
                                    </div>
                                </div>
                            </div>

                            <!-- Added Table Section -->
                            <h2 class="fs-5 mt-4">Product Information</h2>
                            <table class="table" id="tableinformation">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Id Produk</th>
                                        <th>Nama Produk</th>
                                        <th>Jumlah Barang</th>
                                        <th>Harga Satuan</th>
                                        <th>Total Harga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Add rows dynamically using JavaScript or populate from server-side -->
                                </tbody>
                            </table>
                            <!-- End of Table Section -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                        <label for="total_pembayaran">Total Pembayaran:</label>
                                        <span id="total_pembayaran">Rp. 0.00</span>
                                    </div>
                                    <div class="col-sm">
                                        <label for="jumlah_all_stok">Jumlah:</label>
                                        <span id="jumlah_all_stok">0</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column">
                                <div style="margin-left: 65%;">
                                    <label for="pembayaran">Pembayaran:</label>
                                    <input type="text" class="form-control" value="0" id="pembayaran" oninput="calculateKembalian()" />
                                </div>
                                <div style="margin-left: 65%;">
                                    <label for="kembalian">Kembalian:</label>
                                    <input type="text" class="form-control" id="kembalian" disabled />
                                </div>
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

        <!-- Modal for Transaction Details -->
        <div class="modal" id="detailModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Transaction Details</h5>
                        <button type="button" class="close" aria-label="Close" onclick="closeDetailModal()">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table" id="detailTable">
                            <!-- Table content will be dynamically populated by Ajax -->
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" onclick="closeDetailModal()">Close</button>
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
            let total_pembayaran = 0
            let stok = 0
            $(document).ready(function() {
                $('#tanggal').datepicker({
                    autoclose: true,
                    format: 'yyyy-mm-dd',
                    startDate: new Date() // Disable past dates
                }).datepicker("setDate", new Date()); // Set the default value to the current date
            });

            $('#jumlah_stok').on('input', function() {
                // Menghapus karakter selain angka menggunakan regular expression
                $(this).val(function(_, value) {
                    return value.replace(/\D/g, '');
                });
            });

            $('#pembayaran').on('input', function() {
                // Menghapus karakter selain angka menggunakan regular expression
                $(this).val(function(_, value) {
                    return value.replace(/\D/g, '');
                });
            });


            function calculateKembalian() {
                // Get the total pembayaran and pembayaran values
                var totalPembayaran = parseFloat($('#total_pembayaran').text().replace('Rp. ', '').replace(',', '')) || 0;
                var pembayaran = parseFloat($('#pembayaran').val()) || 0;

                // Calculate kembalian
                var kembalian = pembayaran - totalPembayaran;

                // Format kembalian with "Rp." and update the kembalian input field
                $('#kembalian').val('Rp. ' + kembalian.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,')); // Formats the number with commas for thousands
            }

            $(document).ready(function() {
                // Counter for row numbers
                var rowCounter = 1;

                // Event listener for the "Add Produk" button
                $('#addproduk').click(function() {
                    // Get the selected supplier_id
                    var supplierId = $('#supplier').val();

                    // Validate if supplier_id is provided
                    if (!supplierId) {
                        alert('Pilih supplier terlebih dahulu.');
                        return;
                    }

                    var jumlahStok = $('#jumlah_stok').val();

                    // Validate if jumlahStok is provided
                    if (!jumlahStok) {
                        alert('Masukkan jumlah stok terlebih dahulu.');
                        return;
                    }

                    var selectedOption = $('#produk option:selected');
                    var selectedProductId = $('#produk').val();

                    // Retrieve the values using data()
                    var namaProduk = selectedOption.data('nama_produk');
                    var harga = selectedOption.data('harga_product');
                    // var stock = selectedOption.data('stock');,

                    let total = 0
                    // Append rows to the table
                    total = harga * jumlahStok;

                    // Append row to the table
                    $('tbody').append('<tr>' +
                        '<td>' + rowCounter++ + '</td>' +
                        '<td>' + selectedProductId + '</td>' +
                        '<td>' + namaProduk + '</td>' +
                        '<td>' + jumlahStok + '</td>' +
                        '<td>' + harga + '</td>' +
                        '<td>' + total + '</td>' +
                        '<td><button type="button" class="btn btn-danger btn-sm removeRow">Remove</button></td>' +
                        '</tr>');


                    total_pembayaran = total_pembayaran + total
                    stok = stok + parseInt(jumlahStok)

                    // Update the total_pembayaran span
                    $('#total_pembayaran').text('Rp. ' + total_pembayaran);
                    $('#jumlah_all_stok').text(stok);
                    // Clear input values
                    $('#jumlah_stok').val('');


                });

                // Event listener to remove a row
                $('#example1 tbody').on('click', 'a.detail-link', function() {
                    var id_transaksi = $(this).data('id');

                    // Perform Ajax request to get transaction details
                    $.ajax({
                        url: '/get-transaction-details', // Update with your actual route
                        method: 'GET',
                        data: {
                            id_transaksi: id_transaksi
                        },
                        dataType: 'json',
                        success: function(data) {
                            // Populate the modal table with the retrieved details
                            var modalTable = $('#detailTable');
                            modalTable.empty(); // Clear previous content

                            // Add headers to the table
                            modalTable.append('<thead><tr><th>ID Detail</th><th>ID Transaksi</th><th>ID Produk</th><th>Jumlah Barang</th><th>Total</th></tr></thead>');

                            // Add rows with details
                            $.each(data, function(index, detail) {
                                // Format the total with currency symbol
                                var formattedTotal = 'Rp. ' + parseFloat(detail.total).toLocaleString('id-ID');

                                modalTable.append('<tr><td>' + detail.id_detail_transaksi + '</td><td>' + detail.id_transaksi + '</td><td>' + detail.id_produk + '</td><td>' + detail.jumlah_barang + '</td><td>' + formattedTotal + '</td></tr>');
                                // Add more columns as needed
                            });

                            // Show the modal
                            $('#detailModal').modal('show');
                        },
                        error: function(error) {
                            console.error('Error fetching transaction details:', error);
                        }
                    });

                });
            });

            $('#submitBtn').click(function() {
                // Calculate kembalian
                var totalPembayaran = parseFloat($('#total_pembayaran').text().replace('Rp. ', '').replace(',', '')) || 0;
                var pembayaran = parseFloat($('#pembayaran').val()) || 0;
                var kembalian = pembayaran - totalPembayaran;

                // Check if kembalian is negative
                if (kembalian < 0) {
                    // Display an alert
                    alert('Kembalian tidak valid. Pembayaran tidak mencukupi.');
                    return; // Stop further processing
                }

                // Create an array to store the table data
                var list_data = [];
                // Iterate through each row in the table
                $('#tableinformation tbody tr').each(function() {
                    // Extract data from the row
                    var row = $(this);
                    var no = row.find('td:eq(0)').text();
                    var id_produk = row.find('td:eq(1)').text();
                    var produk = row.find('td:eq(2)').text();
                    var stock = row.find('td:eq(3)').text();
                    var harga = row.find('td:eq(4)').text();
                    var total = row.find('td:eq(5)').text();

                    // Create a data object for each row
                    var row_data = {
                        "no": no,
                        "id_produk": id_produk,
                        "produk": produk,
                        "jumlah_barang": stock,
                        "harga": harga,
                        "total": total
                    };

                    // Push the data object to the list_data array
                    list_data.push(row_data);
                });

                // Prepare the JSON request data
                var jsonData = {
                    'total_pembayaran': total_pembayaran,
                    'total_jumlah': stok,
                    'kembalian': kembalian, // Include kembalian in the request data
                    'list_data': list_data
                };

                // Send the AJAX request

                $.ajax({
                    url: '/submit-transaction', // Update with your actual endpoint
                    method: 'POST', // Assuming you want to use POST
                    contentType: 'application/json',
                    data: JSON.stringify(jsonData),
                    success: function(response) {
                        // Handle success
                        Toastify({
                            text: "sukses menambahkan transaksi",
                            duration: 1000,
                            close: true,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                            stopOnFocus: true,
                            callback: function() {
                                window.location.href = "/transaksi-pembelian";
                            }
                        }).showToast();
                    },
                    error: function(error) {
                        // Handle error
                        console.error('Error:', error);
                    }
                });
            });


            $(document).ready(function() {
                // When the supplier dropdown changes
                $('#supplier').change(function() {
                    // Get the selected supplier_id
                    var supplierId = $(this).val();

                    // Clear the products dropdown
                    $('#produk').empty();

                    // If a supplier is selected
                    if (supplierId !== '') {
                        // Fetch products using AJAX
                        $.ajax({
                            url: '/product-by-supplier', // Update with your actual route
                            method: 'GET',
                            data: {
                                supplier_id: supplierId
                            },
                            dataType: 'json',
                            success: function(data) {
                                // Populate the products dropdown with the fetched data
                                $.each(data, function(index, product) {
                                    $('#produk').append('<option data-nama_produk="' + product.nama_product + '" data-harga_product="' + product.harga_product + '" data-stock="' + product.stock + '" value="' + product.id_product + '">' + product.nama_product + '</option>');
                                });
                            },
                            error: function(error) {
                                console.error('Error fetching products:', error);
                            }
                        });
                    }
                });
            });


            $('#no_hp').on('input', function() {
                // Menghapus karakter selain angka menggunakan regular expression
                $(this).val(function(_, value) {
                    return value.replace(/\D/g, '');
                });
            });

            function closeDetailModal() {
                $('#detailModal').modal('hide');
            }


            $(document).ready(function() {
                if ($.fn.DataTable.isDataTable('#example1')) {
                    $('#example1').DataTable().destroy();
                }

                var table = $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                });

                <?php $index = 1; ?>


                <?php foreach ($transaksi as $trx) : ?>
                    <?php
                    $id_transaksi = esc($trx['id_transaksi']);
                    $id = $index++;
                    $total_harga = esc($trx['total_harga']);
                    $jumlah_barang = esc($trx['jumlah_barang']);
                    $tanggal_transaksi = date('d F Y', strtotime(esc($trx['tanggal_transaksi'])));
                    ?>
                    table.row.add([
                        '<?= $id ?>',
                        '<?= $id_transaksi ?>',
                        '<?= $jumlah_barang ?>',
                        '<span> <?= 'Rp. ' . number_format($total_harga, 0, ',', '.'); ?> </span>',
                        '<?= $tanggal_transaksi ?>',
                        '<a href="javascript:void(0);" class="detail-link" data-id="<?= $id_transaksi ?>"><i class="fa-solid fa-circle-info" aria-hidden="true"></i> Detail</a>'
                    ]).draw(false);
                <?php endforeach; ?>

                $('#example1 tbody').on('click', 'a.detail-link', function() {
                    var id_transaksi = $(this).data('id');
                });

                $('#example1 tbody').on('click', 'a.edit-link', function() {
                    var id_supplier = $(this).data('id');
                    var nama = table.row($(this).closest('tr')).data()[1];
                    var alamat = table.row($(this).closest('tr')).data()[2];
                    var no_hp = table.row($(this).closest('tr')).data()[3];


                    // Populate the modal with the existing data
                    $('#nama').val(nama);
                    $('#alamat').val(alamat);
                    $('#no_hp').val(no_hp);

                    // Update the submit button to act as an update button
                    $('#submitBtn').text('Update').data('id', id_supplier);

                    // Show the modal
                    $('#exampleModal').modal('show');
                });

                // document.getElementById('submitBtn').addEventListener('click', function() {
                //     var form = document.getElementById('layananForm');
                //     var formData = new FormData(form);

                //     var id_supplier = $(this).data('id');
                //     var actionUrl = id_supplier ? '<?= base_url('/supplier/update') ?>' : '<?= base_url('supplier/add') ?>';

                //     formData.append('id_supplier', id_supplier);

                //     $.ajax({
                //         url: actionUrl,
                //         type: 'POST',
                //         data: formData,
                //         contentType: false,
                //         processData: false,
                //         success: function(data) {
                //             Toastify({
                //                 text: id_supplier ? "berhasil edit supplier" : "berhasil menambahkan supplier",
                //                 duration: 3000,
                //                 close: true,
                //                 gravity: "top",
                //                 position: "right",
                //                 backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                //                 stopOnFocus: true,
                //                 callback: function() {
                //                     window.location.href = "/supplier";
                //                 }
                //             }).showToast();
                //         },
                //         error: function(error) {
                //             console.error('Error:', error);
                //             // Handle errors here (e.g., show an error message)
                //             alert('Error adding product. Please try again.');
                //         }
                //     });
                // });


                // document.getElementById('submitBtn').addEventListener('click', function() {
                //     var form = document.getElementById('layananForm');
                //     var formData = new FormData(form);

                //     $.ajax({
                //         url: '/product/add',
                //         type: 'POST',
                //         data: formData,
                //         contentType: false,
                //         processData: false,
                //         success: function(data) {
                //             Toastify({
                //                 text: "berhasil menambahkan barang",
                //                 duration: 3000,
                //                 close: true,
                //                 gravity: "top",
                //                 position: "right",
                //                 backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                //                 stopOnFocus: true,
                //                 callback: function() {
                //                     window.location.href = "/dashboard";
                //                 }
                //             }).showToast();
                //         },
                //         error: function(error) {
                //             console.error('Error:', error);
                //             // Handle errors here (e.g., show an error message)
                //             alert('Error adding product. Please try again.');
                //         }
                //     });
                // });
            });
        </script>
</body>

</html>
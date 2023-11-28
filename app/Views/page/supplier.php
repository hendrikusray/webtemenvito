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
                            <a href="/laporan-grafik" class="nav-link">
                                <i class="nav-icon fas fa-columns"></i>
                                <p>
                                    Home
                                </p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
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
                                    <h3 class="card-title">Data Barang</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped table-dark">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Supplier</th>
                                                <th>Alamat Supplier</th>
                                                <th>No Telpon Supplier</th>
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
        function deleteSupplier(id_supplier) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                // If the user clicks "Yes," proceed with deletion
                if (result.isConfirmed) {
                    $.ajax({
                        url: '<?= base_url('supplier/delete') ?>',
                        type: 'DELETE',
                        dataType: 'json',
                        data: {
                            id: id_supplier
                        },
                        success: function(response) {
                            if (response.success) {
                                Toastify({
                                    text: "sukses menghapus",
                                    duration: 1000,
                                    close: true,
                                    gravity: "top",
                                    position: "right",
                                    backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                                    stopOnFocus: true,
                                    callback: function() {
                                        window.location.href = "/supplier";
                                    }
                                }).showToast();
                            } else {
                                Toastify({
                                    text: "gagal menghapus",
                                    duration: 1000,
                                    close: true,
                                    gravity: "top",
                                    position: "right",
                                    backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                                    stopOnFocus: true,
                                }).showToast();
                            }
                        },
                        error: function(error) {
                            console.error('Error during deletion', error);
                        }
                    });
                }
            });
        }

        function showDetailSupplier(id_supplier, nama_supplier, alamat_supplier, no_hp) {
            Swal.fire({
                title: 'Detail Supplier',
                html: `
            <table style="width: 100%; text-align: left;">
                <tr>
                    <td><strong>ID Supplier:</strong></td>
                    <td>${id_supplier}</td>
                </tr>
                <tr>
                    <td><strong>Nama Supplier:</strong></td>
                    <td>${nama_supplier}</td>
                </tr>
                <tr>
                    <td><strong>Alamat Supplier:</strong></td>
                    <td>${alamat_supplier}</td>
                </tr>
                <tr>
                    <td><strong>No Hp Supplier:</strong></td>
                    <td>${no_hp}</td>
                </tr>
            </table>
        `,
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: false,
                confirmButtonText: 'OK',
            });
        }


        $('#no_hp').on('input', function() {
            // Menghapus karakter selain angka menggunakan regular expression
            $(this).val(function(_, value) {
                return value.replace(/\D/g, '');
            });
        });


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

            <?php foreach ($supplier as $suppliers) : ?>
                <?php
                $id_supplier = esc($suppliers['id_supplier']);
                $id = $index++;
                $nama_supplier = esc($suppliers['nama']);
                $alamat_supplier = esc($suppliers['alamat_supplier']);
                $no_hp_supplier =  esc($suppliers['no_telp_supplier']);
                ?>
                table.row.add([
                    '<?= $id ?>',
                    '<?= $nama_supplier ?>',
                    '<?= $alamat_supplier ?>',
                    '<?= $no_hp_supplier ?>',
                    '<a href="javascript:void(0);" class="delete-link" data-id="<?= $id_supplier ?>"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</a> | <a href="javascript:void(0);" class="detail-link" data-id="<?= $id_supplier ?>"><i class="fa-solid fa-circle-info" aria-hidden="true"></i> Detail</a> | <a href="javascript:void(0);" class="edit-link" data-id="<?= $id_supplier ?>"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>'
                ]).draw(false);
            <?php endforeach; ?>

            $('#example1 tbody').on('click', 'a.delete-link', function() {
                var id_supplier = $(this).data('id');
                deleteSupplier(id_supplier);
            });

            $('#example1 tbody').on('click', 'a.detail-link', function() {
                var id_supplier = $(this).data('id');
                var nama_supplier = table.row($(this).closest('tr')).data()[1];
                var alamat_supplier = table.row($(this).closest('tr')).data()[2];
                var no_hp_supplier = table.row($(this).closest('tr')).data()[3];

                showDetailSupplier(id_supplier, nama_supplier, alamat_supplier, no_hp_supplier);
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

            document.getElementById('submitBtn').addEventListener('click', function() {
                var form = document.getElementById('layananForm');
                var formData = new FormData(form);

                var id_supplier = $(this).data('id');
                var actionUrl = id_supplier ? '<?= base_url('/supplier/update') ?>' : '<?= base_url('supplier/add') ?>';

                formData.append('id_supplier', id_supplier);

                $.ajax({
                    url: actionUrl,
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        Toastify({
                            text: id_supplier ? "berhasil edit supplier" : "berhasil menambahkan supplier",
                            duration: 3000,
                            close: true,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                            stopOnFocus: true,
                            callback: function() {
                                window.location.href = "/supplier";
                            }
                        }).showToast();
                    },
                    error: function(error) {
                        console.error('Error:', error);
                        // Handle errors here (e.g., show an error message)
                        alert('Error adding product. Please try again.');
                    }
                });
            });


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
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
                                    <a href="/barang" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Barang</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/tables/jsgrid.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Customer</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/tables/jsgrid.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data User</p>
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
                                                <th>Nama</th>
                                                <th>Gambar</th>
                                                <th>Harga</th>
                                                <th>Stock</th>
                                                <th>Jenis Produk</th>
                                                <th>Diskon</th>
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
                        <h1 class="modal-title fs-5" id="exampleModalLabel">New Product</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="layananForm" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="nama_produk" class="col-form-label">Product Name:</label>
                                <input type="text" class="form-control" id="nama_produk" name="nama_produk">
                            </div>
                            <div class="mb-3">
                                <label for="jenis_produk" class="col-form-label">Product Type:</label>
                                <textarea class="form-control" id="jenis_produk" name="jenis_produk"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="harga_produk" class="col-form-label">Product Price:</label>
                                <input type="number" class="form-control" id="harga_produk" name="harga_produk">
                            </div>
                            <div class="mb-3">
                                <label for="jumlah_stok" class="col-form-label">Stock Quantity:</label>
                                <input type="number" class="form-control" id="jumlah_stok" name="jumlah_stok">
                            </div>
                            <div class="mb-3">
                                <label for="jumlah_stok" class="col-form-label">diskon:</label>
                                <input type="number" class="form-control" id="diskon" name="jumlah_stok">
                            </div>
                            <div class="mb-3">
                                <label for="foto" class="col-form-label">Product Photo:</label>
                                <input type="file" class="form-control" id="foto" name="foto">
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
        function deleteProduct(id_layanan) {
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
                        url: '<?= base_url('product/delete') ?>',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            id: id_layanan
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
                                        window.location.href = "/barang";
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

        function showDetailProduct(id_product, nama_product, jenis_product, harga_product, gambar_product, diskon) {
            Swal.fire({
                title: 'Detail Layanan',
                html: `
            <table style="width: 100%; text-align: left;">
                <tr>
                    <td colspan="2" style="text-align: center;"><img src="${gambar_product}" style="max-width: 200px; max-height: 200px;"/></td>
                </tr>
                <tr>
                    <td><strong>ID Product:</strong></td>
                    <td>${id_product}</td>
                </tr>
                <tr>
                    <td><strong>Nama Product:</strong></td>
                    <td>${nama_product}</td>
                </tr>
                <tr>
                    <td><strong>Jenis Product:</strong></td>
                    <td>${jenis_product}</td>
                </tr>
                <tr>
                    <td><strong>Harga Product:</strong></td>
                    <td>Rp. ${harga_product}</td>
                </tr>
                <tr>
                    <td><strong>Diskon:</strong></td>
                    <td>${diskon}</td>
                </tr>
            </table>
        `,
                icon: 'info',
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: false,
                confirmButtonText: 'OK',
            });
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

            <?php foreach ($products as $product) : ?>
                <?php
                $id_produk = esc($product['id_product']);
                $id = $index++;
                $nama_produk = esc($product['nama_product']);
                $harga_produk = esc($product['harga_product']);
                $jumlah_stok = esc($product['stock']);
                $jenis_produk = esc($product['jenis_product']);
                $gambar_produk = esc($product['gambar_product']);
                $diskon = esc($product['diskon']);
                ?>
                table.row.add([
                    '<?= $id ?>',
                    '<?= $nama_produk ?>',
                    '<img src="<?= base_url('writable/uploads/' . $gambar_produk) ?>" style="max-width: 100px; max-height: 100px;">',
                    '<?= $harga_produk ?>',
                    '<?= $jumlah_stok ?>',
                    '<?= $jenis_produk ?>',
                    '<?= $diskon ?>',
                    '<a href="javascript:void(0);" class="delete-link" data-id="<?= $id_produk ?>"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</a> | <a href="javascript:void(0);" class="detail-link" data-id="<?= $id_produk ?>"><i class="fa-solid fa-circle-info" aria-hidden="true"></i> Detail</a> | <a href="javascript:void(0);" class="edit-link" data-id="<?= $id_produk ?>"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>'
                ]).draw(false);
            <?php endforeach; ?>

            $('#example1 tbody').on('click', 'a.delete-link', function() {
                var id_layanan = $(this).data('id');
                deleteProduct(id_layanan);
            });

            $('#example1 tbody').on('click', 'a.detail-link', function() {
                var id_product = $(this).data('id');
                var nama_product = table.row($(this).closest('tr')).data()[1];
                var harga_product = table.row($(this).closest('tr')).data()[3];
                var jumlah_stock = table.row($(this).closest('tr')).data()[4];
                var jenis_product = table.row($(this).closest('tr')).data()[5];
                var gambar_product = $(this).closest('tr').find('img').attr('src');
                var diskon = table.row($(this).closest('tr')).data()[6];

                showDetailProduct(id_product, nama_product, jenis_product, harga_product, gambar_product, diskon);
            });

            $('#example1 tbody').on('click', 'a.edit-link', function() {
                var id_product = $(this).data('id');
                var nama_product = table.row($(this).closest('tr')).data()[1];
                var harga_product = table.row($(this).closest('tr')).data()[3];
                var jumlah_stock = table.row($(this).closest('tr')).data()[4];
                var jenis_product = table.row($(this).closest('tr')).data()[5];
                var gambar_product = $(this).closest('tr').find('img').attr('src');
                var diskon = table.row($(this).closest('tr')).data()[6];

                // Populate the modal with the existing data
                $('#nama_produk').val(nama_product);
                $('#jenis_produk').val(jenis_product);
                $('#harga_produk').val(harga_product);
                $('#jumlah_stok').val(jumlah_stock);
                $('#diskon').val(diskon);

                // Update the submit button to act as an update button
                $('#submitBtn').text('Update').data('id', id_product);

                // Show the modal
                $('#exampleModal').modal('show');
            });

            document.getElementById('submitBtn').addEventListener('click', function() {
                var form = document.getElementById('layananForm');
                var formData = new FormData(form);

                var id_produk = $(this).data('id');
                var actionUrl = id_produk ? '<?= base_url('/layanan/update') ?>' : '<?= base_url('layanan/add') ?>';

                formData.append('id_produk', id_produk);
                formData.append('type', 2);


                $.ajax({
                    url: actionUrl,
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        Toastify({
                            text: id_produk ? "berhasil edit barang" : "berhasil menambahkan barang",
                            duration: 3000,
                            close: true,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                            stopOnFocus: true,
                            callback: function() {
                                window.location.href = "/barang";
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
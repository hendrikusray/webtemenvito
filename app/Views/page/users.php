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
                                    <a href="/users" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data User</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/supplier" class="nav-link">
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
                                    <a href="/transaksi-penjualan" class="nav-link">
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
                                    <h3 class="card-title">Customer</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped table-dark">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Username</th>
                                                <th>Role</th>
                                                <th>Status Karyawan</th>
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
                        <h1 class="modal-title fs-5" id="exampleModalLabel">New Users</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="layananForm" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="name" class="col-form-label">Name:</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="no_telp_customer" class="col-form-label">Email:</label>
                                <input class="form-control" id="email" name="email"></input>
                            </div>
                            <div class="mb-3">
                                <label for="alamat_customer" class="col-form-label">Username:</label>
                                <input type="text" class="form-control" id="username" name="username"> </input>
                            </div>
                            <div class="mb-3">
                                <label for="role_user" class="col-form-label">Role:</label>
                                <select class="form-select" id="role" name="role">
                                    <?php foreach ($roles as $role) : ?>
                                        <option value="<?= $role['id_role'] ?>"><?= $role['nama_role'] ?></option>
                                    <?php endforeach; ?>
                                </select>
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
        function isActive(id_users, status, status_id) {
            Swal.fire({
                title: `Apakah Anda yakin untuk user ini ${status}?`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, !',
                cancelButtonText: 'Batal'
            }).then((result) => {
                // If the user clicks "Yes," proceed with deletion
                if (result.isConfirmed) {
                    $.ajax({
                        url: '<?= base_url('users/update-active') ?>',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            id: id_users,
                            is_active : status_id, 
                        },
                        success: function(response) {
                            if (response.success) {
                                Toastify({
                                    text: "sukses mengedit",
                                    duration: 1000,
                                    close: true,
                                    gravity: "top",
                                    position: "right",
                                    backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                                    stopOnFocus: true,
                                    callback: function() {
                                        window.location.href = "/users";
                                    }
                                }).showToast();
                            } else {
                                Toastify({
                                    text: "gagal mengedit",
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

        $('#no_telp_customer').on('input', function() {
            // Menghapus karakter selain angka menggunakan regular expression
            $(this).val(function(_, value) {
                return value.replace(/\D/g, '');
            });
        });

        function showDetailCustomer(id_users, nama_user, email_user, username_user, role_user) {
            Swal.fire({
                title: 'Detail Users',
                html: `
            <table style="width: 100%; text-align: left;">
                <tr>
                    <td><strong>ID users:</strong></td>
                    <td>${id_users}</td>
                </tr>
                <tr>
                    <td><strong>Nama Users:</strong></td>
                    <td>${nama_user}</td>
                </tr>
                <tr>
                    <td><strong>Email Users:</strong></td>
                    <td>${email_user}</td>
                </tr>
                <tr>
                    <td><strong>Username:</strong></td>
                    <td>${username_user}</td>
                </tr>
                <tr>
                    <td><strong>Role:</strong></td>
                    <td>${role_user}</td>
                </tr>
            </table>
        `,
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

            <?php foreach ($users as $cus) : ?>
                <?php
                $id_users = esc($cus->id_users);
                $id = $index++;
                $nama_user = esc($cus->nama);
                $role_user = esc($cus->nama_role);
                $username_user = esc($cus->username);
                $email_user = esc($cus->email);
                $is_active = esc($cus->is_active);
                ?>
                table.row.add([
                    '<?= $id ?>',
                    '<?= $nama_user ?>',
                    '<?= $email_user ?>',
                    '<?= $username_user ?>',
                    '<?= $role_user ?>',
                    '<?= ($is_active == 1) ? "Aktif" : "Tidak Aktif" ?>',
                    '<a href="javascript:void(0);" class="delete-link" data-id="<?= $id_users ?>"><i class="fa fa-trash" aria-hidden="true"></i> <?= ($is_active == 1) ? "Tidak Aktif" : "Aktif" ?> </a> | <a href="javascript:void(0);" class="detail-link" data-id="<?= $id_users ?>"><i class="fa-solid fa-circle-info" aria-hidden="true"></i> Detail</a>'
                ]).draw(false);
            <?php endforeach; ?>



            $('#example1 tbody').on('click', 'a.delete-link', function() {
                var id_users = $(this).data('id');
                var status = table.row($(this).closest('tr')).data()[5];
                let status_data = status == 'Aktif' ? 0 : 1
                isActive(id_users,status,status_data);
            });

            $('#example1 tbody').on('click', 'a.detail-link', function() {
                var id_users = $(this).data('id');
                var nama_user = table.row($(this).closest('tr')).data()[1];
                var email_user = table.row($(this).closest('tr')).data()[2];
                var username_user = table.row($(this).closest('tr')).data()[3];
                var role_user = table.row($(this).closest('tr')).data()[4];

                showDetailCustomer(id_users, nama_user, email_user, username_user, role_user);
            });

            $('#example1 tbody').on('click', 'a.edit-link', function() {
                var id_users = $(this).data('id');
                var nama_user = table.row($(this).closest('tr')).data()[1];
                var email_user = table.row($(this).closest('tr')).data()[2];
                var username_user = table.row($(this).closest('tr')).data()[3];
                var role_user = table.row($(this).closest('tr')).data()[4];

                // Populate the modal with the existing data
                $('#name_customer').val(name_customer);
                $('#no_telp_customer').val(no_telp);
                $('#email_customer').val(email);
                $('#alamat_customer').val(alamat);
                $('#status_customer').val(status_final);

                // Update the submit button to act as an update button
                $('#submitBtn').text('Update').data('id', id_product);

                // Show the modal
                $('#exampleModal').modal('show');
            });

            document.getElementById('submitBtn').addEventListener('click', function() {
                var form = document.getElementById('layananForm');
                var formData = new FormData(form);

                var id_customers = $(this).data('id');
                var actionUrl = id_customers ? '<?= base_url('/customer/update') ?>' : '<?= base_url('/users/add') ?>';

                formData.append('id_users', id_customers);

                $.ajax({
                    url: actionUrl,
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        console.log(data)
                        // Toastify({
                        //     text: id_customers ? "berhasil edit customers" : "berhasil menambahkan customers",
                        //     duration: 3000,
                        //     close: true,
                        //     gravity: "top",
                        //     position: "right",
                        //     backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                        //     stopOnFocus: true,
                        //     callback: function() {
                        //         window.location.href = "/users";
                        //     }
                        // }).showToast();
                    },
                    error: function(error) {
                        console.error('Error:', error);
                        // Handle errors here (e.g., show an error message)
                        alert('Error adding product. Please try again.');
                    }
                });
            });

        });
    </script>
</body>

</html>
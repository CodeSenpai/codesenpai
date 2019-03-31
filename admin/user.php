<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../bootstrap/css/style.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="/admin/admin.css">
    <title>Tika Catering</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" Style="background-color:#79c67b">
        <a class="navbar-brand " href="#">SELAMAT DATANG ADMIN | <b>TIKA CATERING</b> </a>


        <div class="icon ml-4 my-2 my-lg-0 ml-auto ">
            <h5>
                <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Surat Masuk"></i>
                <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notifikasi"></i>
                <i class="fas fa-sign-out-alt mr-3" data-toggle="tooltip" title="Signout"></i>
            </h5>
        </div>
    </nav>
    </nav>

    <div class="row no-gutters mt-5">
        <div class="col-md-2 badge-dark mt-2 mpr-3 pt-4">
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                    <a class="nav-link active text-white" href="dashboard.php"><i
                            class="fas fa-tachometer-alt mr-1"></i>Dashboard</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="user.php"><i class="fas fa-user-alt"></i> User</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="paket.php"><i class="fas fa-box-open"></i> Paket</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="bukti.php"><i class="fas fa-money-check-alt"></i> Bukti
                        Pembayaran</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="laporan.php"><i class="fas fa-chart-bar"></i> Laporan</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="logout.php"><i class="fas fa-logout"></i> Logout</a>
                    <hr class="bg-secondary">
                </li>
            </ul>
        </div>
        <div class="col-md-10 p-4 pt-2">
            <h3><i class="fas fa-user-alt mr-2"></i> USER</h3>
            <hr>
            <a href="" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-2"></i>TAMBAH DATA USER</a>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">ALAMAT</th>
                        <th scope="col">NO.TELPON</th>
                        <th colspan="3" scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Rian</td>
                        <td>Sipayungrian@gmail.com</td>
                        <td>Silandoyung</td>
                        <td>082276696491</td>
                        <td> <a href="" class="btn btn-primary">Detail</a></td>
                        <td><i class="fas fa-edit bg-success p-2 text-white rounded" data-toggle="tooltip"
                                title="Edit"></i></td>
                        <td><i class="fas fa-trash bg-danger p-2 text-white rounded" data-toggle="tooltip"
                                title="Delete"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Rian</td>
                        <td>Sipayungrian@gmail.com</td>
                        <td>Silandoyung</td>
                        <td>082276696491</td>
                        <td> <a href="" class="btn btn-primary">Detail</a></td>
                        <td><i class="fas fa-edit bg-success p-2 text-white rounded" data-toggle="tooltip"
                                title="Edit"></i></td>
                        <td><i class="fas fa-trash bg-danger p-2 text-white rounded" data-toggle="tooltip"
                                title="Delete"></i></td>
                    </tr>

                    <tr>
                        <th scope="row">3</th>
                        <td>Rian</td>
                        <td>Sipayungrian@gmail.com</td>
                        <td>Silandoyung</td>
                        <td>082276696491</td>
                        <td> <a href="" class="btn btn-primary">Detail</a></td>
                        <td><i class="fas fa-edit bg-success p-2 text-white rounded" data-toggle="tooltip"
                                title="Edit"></i></td>
                        <td><i class="fas fa-trash bg-danger p-2 text-white rounded" data-toggle="tooltip"
                                title="Delete"></i></td>
                    </tr>

                    <tr>
                        <th scope="row">4</th>
                        <td>Rian</td>
                        <td>Sipayungrian@gmail.com</td>
                        <td>Silandoyung</td>
                        <td>082276696491</td>
                        <td> <a href="" class="btn btn-primary">Detail</a></td>
                        <td><i class="fas fa-edit bg-success p-2 text-white rounded" data-toggle="tooltip"
                                title="Edit"></i></td>
                        <td><i class="fas fa-trash bg-danger p-2 text-white rounded" data-toggle="tooltip"
                                title="Delete"></i></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>


</html>
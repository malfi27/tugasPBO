<html>

<head>
    <title>Aplikasi Pembayaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
    

</head>

<style>
    body {
        background-color: #fff;
        height: auto;
    }
    .myInfo {
        text-align: center;
    }
    .myInfo .name {
        font-weight: 600;
        font-size: 32px;
        color: #fff;
    }
    .myInfo .kelas {
        font-weight: 500;
        font-size: 22px;
        color: #fff;
    }
    .welcome {
        font-weight: 600;
        color: #fff;
        margin-bottom: 2rem;
    }
    .nav-link,.navbar-brand {
        font-weight: 700;
        color: #fff;
    }
    .nav-link:hover,.navbar-brand:hover {
        color: #01937C;
    }
    .navbar-brand {
        font-size: 32px;
    }
    .navbar {
        background-color: #22577A;
        padding: 2rem 1rem;
    }
    .jumbotron {
        margin: 3rem 5rem;
        background: #11698E;
        border-radius: 16px;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
    }
    .cardBackground {
        background: #11698E;
    }
    .card-header {
        color: #fff;
        font-weight: 600;
        font-size: 32px;
        background: #4B778D;
    }
    .deleteBtn {
        background: #dc3545;
        color: #fff;
    }
    .card-title {
        color: #fff;
        font-weight: 700;
    }
    .addDataBtn {
        background: #28B5B5;
        color: #fff;
        margin-top: 3rem;
        margin-bottom: 1rem;
    }
    .addDataBtn:hover {
        color: #fff;
    }
    table thead tr th {
        color: #fff;
    }

    table tbody tr td {
        color: #fff;
    }
</style>

<body>

    <nav class="navbar navbar-expand-lg ">
        <a class="navbar-brand" href="main.php">MALFI</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="main.php?menu=<?php echo base64_encode('id_s') ?>">Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="main.php?menu=<?php echo base64_encode('id_k') ?>">Kelas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="main.php?menu=<?php echo base64_encode('id_sp') ?>">Spp</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="main.php?menu=<?php echo base64_encode('id_pet') ?>">Petugas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="main.php?menu=<?php echo base64_encode('id_pem') ?>">Pembayaran</a>
                </li>

            </ul>
        </div>
    </nav>

    <br>

    <div class="container-fluid">
        <?php
        if (isset($_GET['menu'])) {
            $id = base64_decode($_GET['menu']);
        } else {
            $id = "";
        }

        if ($id == 'id_k') {
            include('View_kelas.php');
        } elseif ($id == 'id_po_k') {
            include('View_post_kelas.php');
        } elseif ($id == 'id_pu_k') {
            include('View_put_kelas.php');
        } elseif ($id == 'id_s') {
            include('View_siswa.php');
        } elseif ($id == 'id_po_s') {
            include('View_post_siswa.php');
        } elseif ($id == 'id_pu_s') {
            include('View_put_siswa.php');
        } elseif ($id == 'id_sp') {
            include('View_spp.php');
        } elseif ($id == 'id_po_sp') {
            include('View_post_spp.php');
        } elseif ($id == 'id_pu_sp') {
            include('View_put_spp.php');
        } elseif ($id == 'id_pet') {
            include('View_petugas.php');
        } elseif ($id == 'id_po_pet') {
            include('View_post_petugas.php');
        } elseif ($id == 'id_pu_pet') {
            include('View_put_petugas.php');
        } elseif ($id == 'id_pem') {
            include('View_pembayaran.php');
        } elseif ($id == 'id_po_pem') {
            include('View_post_pembayaran.php');
        } elseif ($id == 'id_pu_pem') {
            include('View_put_pembayaran.php');
        } else {
            include('Home.php');
        }
        ?>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>

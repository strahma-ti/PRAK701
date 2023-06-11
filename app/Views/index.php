<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body {
            padding-top: 50px;
        }
        h1 {
            margin-bottom: 20px;
        }
        .btn-logout {
            margin-top: 10px;
        }
        .btn-tambah {
            margin-bottom: 10px;
        }

        /* Tambahkan gaya untuk baris tabel yang berbeda */
        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="text-center">
            <h1>Selamat Datang di Perpustakaan</h1>
        </div>
        <div class="text-end">
            <a href="<?= base_url('/logout') ?>" class="btn btn-danger btn-logout">Logout</a>
        </div>

        <!-- Membuat tabel list buku -->
        <div class="row">
            <div class="col-12">
                <h2>Daftar Buku</h2>
                <a class="btn btn-success btn-tambah" href="<?= base_url("/tambahdata") ?>">Tambah Data</a>
            </div>

            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data as $row): ?>
                            <tr>
                                <td><?= $row['judul'] ?></td>
                                <td><?= $row['penulis'] ?></td>
                                <td><?= $row['penerbit'] ?></td>
                                <td><?= $row['tahun_terbit'] ?></td>
                                <td>
                                    <a href="<?= base_url('/editdata/'.$row['id']) ?>" class="btn btn-warning">Edit</a>
                                    <form action="<?= base_url('/hapusdata/'.$row['id']) ?>" method="post" style="display: inline-block">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger" type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>


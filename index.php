<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website galeri foto | UKK 2024</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>HALAMAN UTAMA</h1>
    <div class="marquee">
        <!-- UBAH TEKS BERJALAN DISINI!! -->
        <span>WEBSITE GALERI FOTO UKK 2024</span>
    </div>
    <?php
    session_start();
    if (!isset($_SESSION['userid'])) {
    ?>
        <ul>
            <li><a href="register.php">Register</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    <?php
    } else {
    ?>
        <p>Selamat datang <b><?= $_SESSION['namalengkap'] ?></b></p>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="album.php">Album</a></li>
            <li><a href="foto.php">Foto</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    <?php
    }
    ?>


    <table width="100%" border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Foto</th>
            <th>Uploader</th>
            <th>Jumlah Like</th>
            <th>Aksi</th>
        </tr>
        <?php
        include "koneksi.php";
        $sql = mysqli_query($conn, "select * from foto,user where foto.userid=user.userid");
        while ($data = mysqli_fetch_array($sql)) {
        ?>
            <tr class="datatabel">
                <td><?= $data['judulfoto'] ?></td>
                <td><?= $data['deskripsifoto'] ?></td>
                <td>
                    <img src="gambar/<?= $data['lokasifile'] ?>" width="200px">
                </td>
                <td><?= $data['namalengkap'] ?></td>
                <td>
                    <?php
                    $fotoid = $data['fotoid'];
                    $sql2 = mysqli_query($conn, "select * from likefoto where fotoid='$fotoid'");
                    echo mysqli_num_rows($sql2);
                    ?>
                </td>
                <td>
                    <a href="like.php?fotoid=<?= $data['fotoid'] ?>" class="aksi">💗</a><br>
                    <a href="komentar.php?fotoid=<?= $data['fotoid'] ?>" class="aksi2">💬</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>
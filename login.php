<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Galeri Foto | UKK 2024</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
    <h1>Halaman Login</h1>
    <form action="proses_login.php" method="post" class="bg">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Masuk">
        <p>Belum mempunyai akun? 
            <br><p><button class="btn"><a href="register.php">Ayo Daftar Dulu</a></button></p>
            
        </p>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
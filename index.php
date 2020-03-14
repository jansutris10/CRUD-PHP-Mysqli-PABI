<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h3>Pendaftaran Mahasiswa Baru IT Del</h3>
        <h1>IT Del</h1>    
    </header>

    <nav>
        <ul>
            <li> <a href = "form-daftar.php">Daftar Baru </a> </li>
            <li> <a href = "list-mahasiswa.php">Pendaftar </a> </li>
        </ul>
    </nav>

    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>

</body>
</html>
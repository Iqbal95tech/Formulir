<!DOCTYPE html>
<html>
<head>
    <title>Hasil Penilaian</title>
    <link rel="stylesheet" href="action.css">
</head>
<body>
    <div class="container">
        <h1>Hasil Penilaian</h1>

        <?php
        // Ambil data dari form
        $namaSiswa = $_POST['name'];
        $nilaiSiswa = $_POST['nilai'];

        // Aturan kelulusan
        if ($nilaiSiswa >= 70) {
            $status = "Lulus";
        } elseif ($nilaiSiswa < 70) {
            $status = "Tidak Lulus";
        } 
        
        // Tampilkan hasil
        echo "Nama: " . $namaSiswa . "<br>";
        echo "Nilai: " . $nilaiSiswa . "<br>";
        echo "Status: " . $status;
        ?>

        <br><br>
        <a href="form.php">Kembali ke Form</a>
    </div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Nilai</title>
    <style>
        .result {
            font-size: 20px;
            font-weight: bold;
        }
        .pass {
            color: green;
        }
        .fail {
            color: red;
        }
    </style>
</head>
<body>
<form method="post" action="">
    Masukkan nilai Anda: <input type="number" name="nilai" required>
    <input type="submit" value="Periksa">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nilai = $_POST['nilai'];

    
    if ($nilai >= 80 && $nilai <= 100) {
        $nilai_huruf = 'A';
        $nilai_numerik = 4.0;
    } elseif ($nilai >= 76 && $nilai < 80) {
        $nilai_huruf = 'A-';
        $nilai_numerik = 3.67;
    } elseif ($nilai >= 68 && $nilai < 76) {
        $nilai_huruf = 'B+';
        $nilai_numerik = 3.33;
    } elseif ($nilai >= 65 && $nilai < 68) {
        $nilai_huruf = 'B';
        $nilai_numerik = 3.0;
    } elseif ($nilai >= 62 && $nilai < 65) {
        $nilai_huruf = 'B-';
        $nilai_numerik = 2.67;
    } elseif ($nilai >= 57 && $nilai < 62) {
        $nilai_huruf = 'C+';
        $nilai_numerik = 2.33;
    } elseif ($nilai >= 55 && $nilai < 57) {
        $nilai_huruf = 'C';
        $nilai_numerik = 2.0;
    } elseif ($nilai >= 51 && $nilai < 55) {
        $nilai_huruf = 'C-';
        $nilai_numerik = 1.67;
    } elseif ($nilai >= 43 && $nilai < 51) {
        $nilai_huruf = 'D+';
        $nilai_numerik = 1.33;
    } elseif ($nilai >= 40 && $nilai < 43) {
        $nilai_huruf = 'D';
        $nilai_numerik = 1.0;
    } else {
        $nilai_huruf = 'E';
        $nilai_numerik = 0;
    }
    
    echo "Nilai huruf: $nilai_huruf\n";
    echo "Nilai numerik: $nilai_numerik\n";
    
}
?>

</body>
</html>

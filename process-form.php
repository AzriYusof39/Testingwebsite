<?php
// Connect to the database
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "wataniah";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Get the form data

    $no_tentera = $_POST["no_tentera"];
    $pkt = $_POST["pkt"];
    $nama = $_POST["nama"];
    $no_kp = $_POST["no_kp"];
    $jantina = $_POST["jantina"];
    $tempat_lahir = $_POST["tempat_lahir"];
    $negeri_lahir = $_POST["negeri_lahir"];
    $no_sijil = $_POST["no_sijil"];
    $agama = $_POST["agama"];
    $bangsa = $_POST["bangsa"];
    $nama_bapa_isteri = $_POST["nama_bapa_isteri"];
    $nama_ibu_anak = $_POST["nama_ibu_anak"];
    $status_kawin = $_POST["status"];
    $kelulusan = $_POST["kelulusan"];
    $tahun = $_POST["tahun"];
    $tarikh_angkat_sumpah = $_POST["tarikh_angkat_sumpah"];
    $tempoh_khidmat = $_POST["tempoh_khidmat"];
    $tempat_angkat_sumpah = $_POST["tempat_angkat_sumpah"];



// Insert the data into the database
$sql = "INSERT INTO daftar (NO_TENTERA, PKT, NAMA_PENUH, NO_KP, JANTINA, TEMPAT_LAHIR, NEGERI_LAHIR, NO_SIJIL_LAHIR, AGAMA, BANGSA, NAMA_BAPA_ISTERI, NAMA_IBU_ANAK, STATUS_KAWIN, KELULUSAN, TAHUN, TARIKH_ANGKAT_SUMPAH, TEMPOH_KHIDMAT, TEMPAT_ANGKAT_SUMPAH) 
VALUES ('$no_tentera', '$pkt', '$nama', '$no_kp', '$jantina', '$tempat_lahir', '$negeri_lahir', '$no_sijil', '$agama', '$bangsa', '$nama_bapa_isteri', '$nama_ibu_anak', '$status_kawin', '$kelulusan', '$tahun', '$tarikh_angkat_sumpah', '$tempoh_khidmat', '$tempat_angkat_sumpah')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
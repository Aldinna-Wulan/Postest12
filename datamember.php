<?php
    echo "<head><title>Data Member</head></title>";
    $fp = fopen("DataMember.txt", "a+");
    $idmember = $_POST["idmember"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $email = $_POST["email"];
    $nohp = $_POST["nohp"];
    
    fputs($fp, "$idmember|$nama|$alamat|$email|$nohp\n");
    fclose($fp);

    echo "Anda Telah Terdaftar Sebagai Member :)<br>";
    echo "Terima Kasih<br><br>";
    echo "<a href='cekdata.php'> Lihat Data Member </a><br>";
    echo "<a href='kasir/kasir.php'> Kembali Ke Cashier</a><br>";
    echo "<a href='utama.php'> Kembali Ke Menu Utama</a><br>";
    
?>
<?php
    echo "<head><title> Cek Data Memberk</title></head>";
    $fp = fopen("DataMember.txt", "r");
    echo "<table border='0'>";

    while($isi = fgets($fp))
    {
        $pisah = explode("|", $isi);
        echo"<tr><td>Id Member </td><td>: $pisah[0]</td></tr>"; 
        echo"<tr><td>Nama </td><td>: $pisah[1]</td></tr>"; 
        echo"<tr><td>Alamat </td><td>: $pisah[2]</td></tr>";
        echo"<tr><td>Email </td><td>: $pisah[3]</td></tr>";
        echo"<tr><td>No Handphone </td><td>: $pisah[4]</td></tr>";
        echo "<tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
    }

    echo "</table>";
    echo "<a href='formmember.html'>Daftar Member Baru</a><br>";
    echo "<a href='utama.php'>Kembali Ke Menu Awal</a><br> ";
    echo "<a href='hapusdata.php'>Hapus Data Member</a>";
    ?>
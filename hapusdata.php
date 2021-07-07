<?php
$file = 'DataMember.txt';
if ( file_exists( $file ) ) {
  unlink( $file );
  echo 'File berhasil di hapus';
}else{
  echo 'File tidak ditemukan / File Kosong';
}

echo "<br><a href='formmember.html'>Daftar Member Baru</a><br>";
echo "<a href='utama.php'>Kembali Ke Menu Awal</a> ";
?>
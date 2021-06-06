<?php

$sql = mysqli_query($con,"INSERT INTO kelas_ujian (id_ujian,id_kelas,id_jurusan,aktif) VALUES('$_GET[ujian]','$_GET[kelas]','$_GET[jurusan]','Y') ");
if ($sql) {
    echo "
    <script>
    window.location='?page=ujian';
    </script>
    
    ";
}

?>

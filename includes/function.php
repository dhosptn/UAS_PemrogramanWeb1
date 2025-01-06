<?php
function inputData($data)
{
    // Menghapus spasi di awal dan akhir string
    $data = trim($data);

    // Menghapus garis miring terbalik (\) dari string
    $data = stripslashes($data);

    // Mengonversi karakter khusus menjadi entitas HTML untuk mencegah XSS
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');

    // Menghapus tag HTML dan PHP dari string
    $data = strip_tags($data);

    return $data;
}
?>
<?php
    include "koneksi.php";

    $sql = "INSERT INTO user
    (
        id,
        nama,
        role,
        availability,
        age,
        location,
        years_experience,
        email
    ) VALUE
    (
        '1',
        'Kamila',
        'Student',
        'Full Time',
        '16',
        'malang',
        '2',
        'aisyahkamilaelsavira3@gmail.com'
    )";

    if($koneksi->query($sql) == TRUE){
        echo "Insert data telah berhasil";
    } else {
        echo "Insert data gagal";
    }
?>
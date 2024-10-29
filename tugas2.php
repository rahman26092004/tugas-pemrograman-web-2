<?php
$headers = [
    "No", 
    "Nama", 
    "Gambar", 
    "Habitat", 
    "Status", 
    "Ancaman" 
];

$flora_fauna = [
    [
        "Nama" => "Harimau Sumatera",
        "Habitat" => "Hutan tropis",
        "Status" => "Terancam Punah",
        "Ancaman" => "Perburuan, Kehilangan Habitat",
        "Gambar" => "img/harimau_sumatera.jpg"
    ],
    [
        "Nama" => "Rusa Bawean",
        "Habitat" => "Hutan Bawean",
        "Status" => "Kritis",
        "Ancaman" => "Perburuan, Kehilangan Habitat",
        "Gambar" => "img/rusa_bawean.jpg"
    ],
    [
        "Nama" => "Orangutan Kalimantan",
        "Habitat" => "Hutan Hujan Tropis",
        "Status" => "Terancam Punah",
        "Ancaman" => "Deforestasi",
        "Gambar" => "img/orangutan_kalimantan.jpg"
    ],
    [
        "Nama" => "Bunga Raflesia",
        "Habitat" => "Hutan Tropis",
        "Status" => "Terancam",
        "Ancaman" => "Kerusakan Habitat",
        "Gambar" => "img/raflesia.jpg"
    ],
    [
        "Nama" => "Gajah Sumatera",
        "Habitat" => "Hutan Sumatera",
        "Status" => "Terancam Punah",
        "Ancaman" => "Perburuan, Deforestasi",
        "Gambar" => "img/gajah_sumatera.jpg"
    ],
    [
        "Nama" => "Burung Cendrawasih",
        "Habitat" => "Hutan Hujan",
        "Status" => "Terancam",
        "Ancaman" => "Kehilangan Habitat",
        "Gambar" => "img/cendrawasih.jpg"
    ],
    [
        "Nama" => "Penyu Hijau",
        "Habitat" => "Lautan",
        "Status" => "Terancam Punah",
        "Ancaman" => "Perburuan, Polusi",
        "Gambar" => "img/penyu_hijau.jpg"
    ],
    [
        "Nama" => "Badak Jawa",
        "Habitat" => "Hutan",
        "Status" => "Kritis",
        "Ancaman" => "Perburuan, Kehilangan Habitat",
        "Gambar" => "img/badak_jawa.jpg"
    ],
    [
        "Nama" => "Kuda Nil",
        "Habitat" => "Sungai dan Danau",
        "Status" => "Terancam",
        "Ancaman" => "Perburuan, Kehilangan Habitat",
        "Gambar" => "img/kuda_nila.jpg"
    ],
    [
        "Nama" => "Kakatua Jambul Kuning",
        "Habitat" => "Hutan Hujan",
        "Status" => "Terancam Punah",
        "Ancaman" => "Perdagangan Ilegal, Kehilangan Habitat",
        "Gambar" => "img/kakatua.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flora dan Fauna Terancam Punah</title>
    <style>
        table {
            width: 100%; 
        }
        td, th {
            text-align: center; 
        }
    </style>
</head>
<body>
    <table border="2" cellpadding="3" cellspacing="3">
        <tr>
            <?php foreach($headers as $header): ?>
                <th><?= $header ?></th>
            <?php endforeach; ?>
        </tr>
        <?php foreach($flora_fauna as $index => $item) : ?>
            <tr>
                <td><?= $index + 1 ?></td> 
                <td><?= $item['Nama'] ?></td>
                <td style="display: flex; justify-content: center;"><img src="<?= $item['Gambar'] ?>" width="50" height="50"></td>
                <td><?= $item['Habitat'] ?></td>
                <td><?= $item['Status'] ?></td>
                <td><?= $item['Ancaman'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

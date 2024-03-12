<?php
//menangkap value form berdasarkan unique name & simpan kedalam varible
$nim = $_POST['nim']; 
$nama = $_POST['nama']; 
$jk = $_POST['jk']; 
$prodi = $_POST['prodi']; 
$skill = $_POST['skill']; 
$domisili = $_POST['domisili']; 
$email = $_POST['email']; 

$nilai = 0;
foreach ($skill as $data) {
    switch ($data) {
        case 'html':
            $nilai += 10;
            break;
        case 'css':
            $nilai += 10;
            break;
        case 'javascript':
            $nilai += 20;
            break;
        case 'rwd':
            $nilai += 20;
            break;
        case 'php':
            $nilai += 30;
            break;
        case 'java':
            $nilai += 30;
            break;
        case 'phyton':
            $nilai += 50;
            break;
        default:
            # code...
            break;
    }
}
//Tampilan value kedalam web browser
echo "<style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        td {
            border: 1px solid #dddddd;
        }
        .tidak-memadai {
            color: red;
        }
        .kurang {
            color: orange;
        }
        .cukup {
            color: yellow;
        }
        .baik {
            color: green;
        }
        .sangat-baik {
            color: darkgreen;
        }
    </style>";

echo "<h4>Informasi Yang Dikirim</h4>";
echo "<table border='1'>";
echo "<tr><th>Detail</th><th>Informasi</th></tr>";
echo "<tr><td>NIM</td><td>$nim</td></tr>";
echo "<tr><td>Nama</td><td>$nama</td></tr>";
echo "<tr><td>Jenis Kelamin</td><td>$jk</td></tr>";
echo "<tr><td>Program Studi</td><td>$prodi</td></tr>";
echo "<tr><td>Skill</td><td>" . implode(", ", $skill) . "</td></tr>";
echo "<tr><td>Domisili</td><td>$domisili</td></tr>";
echo "<tr><td>Email</td><td>$email</td></tr>";
echo "<tr><td>Nilai skill</td><td>$nilai</td></tr>";
echo "<tr><td>Keterangan</td><td>";

if ($nilai == 0) {
    echo "<span class='tidak-memadai'>Tidak memadai</span>";
} elseif ($nilai <= 40) {
    echo "<span class='kurang'>Kurang</span>";
} elseif ($nilai <= 60) {
    echo "<span class='cukup'>Cukup</span>";
} elseif ($nilai <= 100) {
    echo "<span class='baik'>Baik</span>";
} elseif ($nilai <= 150) {
    echo "<span class='sangat-baik'>Sangat baik</span>";
}

echo "</td></tr>";
echo "</table>";

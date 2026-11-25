<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 2 - Daftar Nilai Mahasiswa</title>
</head>
<body>

    <h2>Daftar Nilai Mahasiswa</h2>

    <?php
    // 1. Array data 5 mahasiswa dengan index: npm, nama, nilai
    $mahasiswa = [
        [
            "npm" => "001",
            "nama" => "Chayra",
            "nilai" => 80
        ],
        [
            "npm" => "002",
            "nama" => "Archelia",
            "nilai" => 75
        ],
        [
            "npm" => "003",
            "nama" => "Lalan",
            "nilai" => 50
        ],
        [
            "npm" => "004",
            "nama" => "Fuji",
            "nilai" => 90
        ],
        [
            "npm" => "005",
            "nama" => "Alwan",
            "nilai" => 45
        ]
    ];

    // 2. Function untuk mengecek kelulusan
    // Catatan: Di contoh gambar nilai 50 = Tidak Lulus (berarti syarat lulus > 50 / <= 50 tidak lulus)
    function cekKelulusan($nilai) {
        if ($nilai <= 50) {
            return "Tidak Lulus";
        } else {
            return "Lulus";
        }
    }
    ?>

    <!-- 3. Output ditampilkan dalam table HTML -->
    <table border="1" cellpadding="5" cellspacing="2">
        <thead>
            <tr>
                <th>NO</th>
                <th>NPM</th>
                <th>NAMA MAHASISWA</th>
                <th>NILAI</th>
                <th>KETERANGAN</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($mahasiswa as $mhs) :
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $mhs["npm"]; ?></td>
                    <td><?= $mhs["nama"]; ?></td>
                    <td><?= $mhs["nilai"]; ?></td>
                    <td><?= cekKelulusan($mhs["nilai"]); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
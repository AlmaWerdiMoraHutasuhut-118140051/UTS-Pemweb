<?php include("header.php") ?>
<?php include("data_dummy.php") ?>
<header>
    <h1>Tambah Data Penduduk</h1>
</header>
<div class="container">
    <aside class="sidebar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="halaman_input.php">Tambah Data</a></li>
            <li><a href="halaman_tabel.php">Tabel Data</a></li>
        </ul>
    </aside>
    <main class="main-content">
        <h2>Tambah Data Baru</h2>
        <p>Silahkan isi form dibawah ini untuk mendaftarkan data baru</p>
        <form method="get" action="" enctype="multipart/form-data">
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="gender" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <select class="form-control" id="gender" name="gender">
                        <option value="" selected disabled>-</option>
                        <option value="Laki - Laki">Laki - Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                <div class="col-sm-10">
                    <select class="form-control" id="agama" name="agama">
                        <option value="" selected disabled>-</option>
                        <option value="Islam">Islam</option>
                        <option value="Protestan">Kristen Protestan</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="birth" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="birth" name="birth" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nation" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                <div class="col-sm-10">
                    <select class="form-control" id="nation" name="nation">
                        <option value="" selected disabled>-</option>
                        <option value="WNI">WNI</option>
                        <option value="WNA">WNA</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <input type="submit" name="simpan" value="Submit Data" class="btn btn-primary">
                </div>
            </div>
        </form>
    </main>
</div>
<?php

if (!empty($_GET)) {
    if (empty($_GET['nama']) || empty($_GET['gender']) || empty($_GET['agama']) || empty($_GET['birth']) || empty($_GET['nation'])) {
        echo "Mohon lengkapi data";
        exit;
    }

    $input1 = htmlspecialchars($_GET['nama']);
    $input2 = htmlspecialchars($_GET['gender']);
    $input3 = htmlspecialchars($_GET['agama']);
    $input4 = htmlspecialchars($_GET['birth']);
    $input5 = htmlspecialchars($_GET['nation']);

    $newData = [
        'nama' => $input1,
        'gender' => $input2,
        'agama' => $input3,
        'tanggal_lahir' => $input4,
        'kewarganegaraan' => $input5
    ];

    array_push($data, $newData);

    echo "Data Sukses ditambahkan";
}
?>
<?php include("footer.php") ?>
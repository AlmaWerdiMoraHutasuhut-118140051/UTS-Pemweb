<?php include("header.php") ?>
<?php include("data_dummy.php") ?>

<header>
    <h1>Tabel Data Penduduk</h1>
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
        <h2>Data Penduduk</h2>
        <p>Berikut data penduduk yang telah tercatat</p>
        <table class="table-container">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Tanggal Lahir</th>
                    <th>Kewarganegaraan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data as $key => $item) {
                ?>
                    <tr>
                        <td><?php echo ($key + 1) ?></td>
                        <td><?php echo ($item['nama']) ?></td>
                        <td><?php echo ($item['gender']) ?></td>
                        <td><?php echo ($item['agama']) ?></td>
                        <td><?php echo ($item['tanggal_lahir']) ?></td>
                        <td><?php echo ($item['kewarganegaraan']) ?></td>
                    </tr>
                <?php
                }
                ?>
                </tr>
            </tbody>
        </table>
    </main>
</div>
<?php include("footer.php") ?>
<?php
// Load file koneksi.php
include "config.php";
?>
<html>
<head>
    <title>Data Karyawan</title>
    <link rel="stylesheet" href="plugin/jquery-ui/jquery-ui.min.css" /> <!-- Load file css jquery-ui -->
    <script src="js/jquery.min.js"></script> <!-- Load file jquery -->
</head>
<body>
    <h2>Data Karyawan</h2><hr>
    <form method="get" action="">
        <label>Filter Berdasarkan</label><br>
        <select name="filter" id="filter">
            <option value="">Pilih</option>
            <!-- <option value="1">Per Tanggal</option> -->
            <option value="2">Per Bulan</option>
            <option value="3">Per Tahun</option>
        </select>
        <br /><br />
        <div id="form-tanggal">
            <label>Tanggal</label><br>
            <input type="date" name="tanggal" class="input-tanggal" />
            <br /><br />
        </div>
        <div id="form-bulan">
            <label>Bulan</label><br>
            <select name="bulan">
                <option value="">Pilih</option>
                <option value="1">Januari</option>
                <option value="2">Februari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="7">Juli</option>
                <option value="8">Agustus</option>
                <option value="9">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
            </select>
            <br /><br />
        </div>
        <div id="form-tahun">
            <label>Tahun</label><br>
            <select name="tahun">
                <option value="">Pilih</option>
                <?php
$query = "SELECT YEAR(bulan) AS tahun FROM data_karyawan GROUP BY YEAR(bulan)"; // Tampilkan tahun sesuai di tabel transaksi
$sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
while ($data = mysqli_fetch_array($sql)) {
	// Ambil semua data dari hasil eksekusi $sql
	echo '<option value="' . $data['tahun'] . '">' . $data['tahun'] . '</option>';
}
?>
            </select>
            <br /><br />
        </div>
        <button type="submit">Tampilkan</button>
        <a href="index.php?page=anggota">Kembali</a>
    </form>
    <hr />
    <?php
if (isset($_GET['filter']) && !empty($_GET['filter'])) {
	// Cek apakah user telah memilih filter dan klik tombol tampilkan
	$filter = $_GET['filter']; // Ambil data filder yang dipilih user
	if ($filter == '1') {
		// Jika filter nya 1 (per tanggal)
		$tgl = date('d-m-y', strtotime($_GET['tanggal']));
		echo '<b>Data Transaksi Tanggal ' . $tgl . '</b><br /><br />';
		echo '<a href="print.php?filter=1&tanggal=' . $_GET['tanggal'] . '">Cetak PDF</a><br /><br />';
		$query = "SELECT * FROM gaji g JOIN data_karyawan d ON g.NUPTK = d.NUPTK='" . $_GET['tanggal'] . "'"; // Tampilkan data transaksi sesuai tanggal yang diinput oleh user pada filter
	} else if ($filter == '2') {
		// Jika filter nya 2 (per bulan)
		$nama_bulan = array('', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
		echo '<b>Data Transaksi Bulan ' . $nama_bulan[$_GET['bulan']] . ' ' . $_GET['bulan'] . '</b><br /><br />';
		echo '<a href="print.php?filter=2&bulan=' . $_GET['bulan'] . '&tahun=' . $_GET['tahun'] . '">Cetak PDF</a><br /><br />';
		$query = "SELECT NUPTK, nama, jabatan, tunjangan_jabatan, gaji_pokok, eskul, bonus, total_gaji, bulan FROM data_karyawan WHERE MONTH(bulan)='" . $_GET['bulan'] . "' AND YEAR(bulan)='" . $_GET['tahun'] . "'"; // Tampilkan data transaksi sesuai bulan dan tahun yang diinput oleh user pada filter
		$query2 = $koneksi->query("SELECT sum(eskul) as e, sum(bonus) as b, sum(gaji_pokok) as gj ,sum(tunjangan_jabatan) as tj, SUM(total_gaji) as total FROM data_karyawan WHERE NONTH(bulan)");
	} else {
		// Jika filter nya 3 (per tahun)
		echo '<b>Data Transaksi Tahun ' . $_GET['tahun'] . '</b><br /><br />';
		echo '<a href="print.php?filter=3&tahun=' . $_GET['tahun'] . '">Cetak PDF</a><br /><br />';
		$query = "SELECT NUPTK, nama, jabatan, tunjangan_jabatan, gaji_pokok, eskul, bonus, total_gaji, bulan FROM data_karyawan  WHERE YEAR(bulan)='" . $_GET['tahun'] . "'"; // Tampilkan data transaksi sesuai tahun yang diinput oleh user pada filter
		$query2 = $koneksi->query("SELECT sum(eskul) as e, sum(bonus) as b, sum(gaji_pokok) as gj ,sum(tunjangan_jabatan) as tj, SUM(total_gaji) as total FROM data_karyawan WHERE YEAR(bulan)");
	}
} else {
	// Jika user tidak mengklik tombol tampilkan
	echo '<b>Data Karyawan</b><br /><br />';
	echo '<a href="cetak.php">Cetak PDF</a><br /><br />';
	$query = "SELECT NUPTK, nama, jabatan, tunjangan_jabatan, gaji_pokok, eskul, bonus, total_gaji, bulan FROM data_karyawan ORDER BY bulan"; // Tampilkan semua data transaksi diurutkan berdasarkan tanggal
	$query2 = $koneksi->query("SELECT sum(eskul) as e, sum(bonus) as b, sum(gaji_pokok) as gj ,sum(tunjangan_jabatan) as tj, SUM(total_gaji) as total FROM data_karyawan ORDER BY bulan");
}
?>
    <table border="1" cellpadding="8">
    <tr>
        <th>NUPTK</th>
        <th>Nama Karyawan</th>
        <th>Jabatan</th>
        <th>Tunjangan Jabatan</th>
        <th>Gaji Pokok</th>
        <th>Eskul</th>
        <th>Bonus</th>
        <th>Gaji</th>
        <th>Bulan</th>
    </tr>
    <?php
$sql = mysqli_query($koneksi, $query);
$row = mysqli_num_rows($sql);
if ($row > 0) {
	// Jika jumlah data lebih sama dengan dari 1 (Berarti jika data ada)
	while ($data = mysqli_fetch_array($sql)) {
		// Ambil semua data dari hasil eksekusi $sql
		$tgl = date('M-Y', strtotime($data['bulan'])); // Ubah format tanggal jadi dd-mm-yyyy
		echo "<tr>";
		echo "<td>" . $data['NUPTK'] . "</td>";
		echo "<td>" . $data['nama'] . "</td>";
		echo "<td>" . $data['jabatan'] . "</td>";
		echo "<td>Rp. " . number_format($data['tunjangan_jabatan']) . "</td>";
		echo "<td>Rp. " . number_format($data['gaji_pokok']) . "</td>";
		echo "<td>Rp. " . number_format($data['eskul']) . "</td>";
		echo "<td>Rp. " . number_format($data['bonus']) . "</td>";
		echo "<td>Rp. " . number_format($data['total_gaji']) . "</td>";
		echo "<td>" . $tgl . "</td>";
		echo "</tr>";
	}
	$total = 0;
	$tj = 0;
	$gj = 0;
	$b = 0;
	$e = 0;
	while ($data2 = $query2->fetch_assoc()) {
		echo "<tr>
        <td colspan='3'>TOTAL</td>
        <td>Rp. " . number_format($data2['tj']) . "</td>
        <td>Rp. " . number_format($data2['gj']) . "</td>
        <td>Rp. " . number_format($data2['e']) . "</td>
        <td>Rp. " . number_format($data2['b']) . "</td>
        <td>Rp. " . number_format($data2['total']) . "</td>
        </tr>";
	}
} else {
	// Jika data tidak ada
	echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
}

?>
    </table>
    <script>
    $(document).ready(function(){ // Ketika halaman selesai di load
        $('.input-tanggal').datepicker({
            dateFormat: 'yy-mm-dd' // Set format tanggalnya jadi yyyy-mm-dd
        });
        $('#form-tanggal, #form-bulan, #form-tahun').hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya
        $('#filter').change(function(){ // Ketika user memilih filter
            if($(this).val() == '1'){ // Jika filter nya 1 (per tanggal)
                $('#form-bulan, #form-tahun').hide(); // Sembunyikan form bulan dan tahun
                $('#form-tanggal').show(); // Tampilkan form tanggal
            }else if($(this).val() == '2'){ // Jika filter nya 2 (per bulan)
                $('#form-tanggal').hide(); // Sembunyikan form tanggal
                $('#form-bulan, #form-tahun').show(); // Tampilkan form bulan dan tahun
            }else{ // Jika filternya 3 (per tahun)
                $('#form-tanggal, #form-bulan').hide(); // Sembunyikan form tanggal dan bulan
                $('#form-tahun').show(); // Tampilkan form tahun
            }
            $('#form-tanggal input, #form-bulan select, #form-tahun select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun
        })
    })
    </script>
    <script src="plugin/jquery-ui/jquery-ui.min.js"></script> <!-- Load file plugin js jquery-ui -->
</body>
</html>
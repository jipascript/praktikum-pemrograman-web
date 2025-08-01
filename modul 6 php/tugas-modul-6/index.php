<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Produk Toko</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            padding: 40px;
            font-size: 16px;
            color: #333;
        }

        h2 {
            text-align: center;
            color: #0056b3;
            font-size: 24px;
        }

        .container {
            width: 80%;
            margin: auto;
            background: #fff;
            padding: 25px;
            box-shadow: 0 0 12px rgba(0,0,0,0.1);
            border-radius: 10px;
        }

        .btn {
            display: inline-block;
            background-color: #007BFF;
            color: white;
            padding: 10px 18px;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 15px;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background-color: #fff;
            font-size: 15px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px 15px;
            text-align: center;
        }

        th {
            background-color: #007BFF;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #eef5ff;
        }

        .aksi a {
            color: #007BFF;
            text-decoration: none;
            margin: 0 6px;
            font-weight: bold;
        }

        .aksi a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Daftar Produk Toko</h2>
        <a href="tambah.php" class="btn">+ Tambah Produk Baru</a>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM produk";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>{$row['id_produk']}</td>";
                        echo "<td>{$row['nama_produk']}</td>";
                        echo "<td>Rp " . number_format($row['harga'], 0, ',', '.') . "</td>";
                        echo "<td>{$row['stok']}</td>";
                        echo "<td class='aksi'>
                                <a href='edit.php?id={$row['id_produk']}'>Edit</a> | 
                                <a href='hapus.php?id={$row['id_produk']}' onclick='return confirm(\"Yakin ingin menghapus produk ini?\")'>Hapus</a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Tidak ada data produk.</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>

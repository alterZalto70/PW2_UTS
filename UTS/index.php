<?php
// A

$products = [
    [
        'id' => 1,
        'product' => 'Minyak Telon',
        'price' => 30000,
        'stock' => 20,
        'total' => 600000,
    ],
    [
        'id' => 2,
        'product' => 'Diapers',
        'price' => 51000,
        'stock' => 15,
        'total' => 765000,
    ],
    [
        'id' => 3,
        'product' => 'Baby Oil',
        'price' => 16000,
        'stock' => 10,
        'total' => 160000,
    ],
    [
        'id' => 4,
        'product' => 'Shampo Baby',
        'price' => 20000,
        'stock' => 5,
        'total' => 100000,
    ],
    [
        'id' => 5,
        'product' => 'Bedak',
        'price' => 15000,
        'stock' => 18,
        'total' => 270000,
    ],
    [
        'id' => 6,
        'product' => 'Baju Bayi',
        'price' => 35500,
        'stock' => 20,
        'total' => 710000,
    ],
    [
        'id' => 7,
        'product' => 'Jumper',
        'price' => 50000,
        'stock' => 25,
        'total' => 1250000,
    ],
];

echo '<table>';
echo '<thead>';
echo '<tr>';
echo '<th>ID</th>';
echo '<th>Produk</th>';
echo '<th>Harga</th>';
echo '<th>Stok</th>';
echo '<th>Jumlah</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

foreach ($products as $product) {
    echo '<tr>';
    echo '<td>' . $product['id'] . '</td>';
    echo '<td>' . $product['product'] . '</td>';
    echo '<td>' . $product['price'] . '</td>';
    echo '<td>' . $product['stock'] . '</td>';
    echo '<td>' . $product['total'] . '</td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';

echo "================================= </br>";
?>

        <?php
        // B
        $baju_bayi = "Baju Bayi (1x35500)";
        $diapers = "Diapers (3x51000)";
        $bedak = "Bedak(1x15.000)";
        $minyak_telon = "Minyak telon (2x30000)";
        $total_pembelian = 263500;

        if ($total_pembelian >= 200000) {
            $diskon = $total_pembelian * 0.2;
        } else if ($total_pembelian >= 150000) {
            $diskon = $total_pembelian * 0.1;
        } else {
            $diskon = 0;
        }

        $total_pembayaran = $total_pembelian - $diskon;

        echo "Tanggal Transaksi : 06 November 2023";
        echo "<br> </br>";
        echo "Produk : " ."<br>" .  $baju_bayi . "<br>" . $diapers . "<br>" . $bedak ."<br>". $minyak_telon ."<br>";
        echo"</br>";
        echo "Total pembelian: ".$total_pembelian;
        echo "<br>";
        echo "Diskon: ".$diskon;
        echo "<br>";
        echo "Total pembayaran: ".$total_pembayaran;
        echo"<br> </br>";
        echo "=================================";
        ?>

                <?php
                // C
                $tabel_harga_barang = array(
                    1 => array("Produk" => "Minyak Telon", "Stok" => 20, "Harga" => 30000, "Jumlah" => 0),
                    2 => array("Produk" => "Diapers", "Stok" => 15, "Harga" => 51000, "Jumlah" => 0),
                    3 => array("Produk" => "Baby Oil", "Stok" => 10, "Harga" => 16000, "Jumlah" => 0),
                    4 => array("Produk" => "Shampo Baby", "Stok" => 18, "Harga" => 20000, "Jumlah" => 0),
                    5 => array("Produk" => "Bedak", "Stok" => 15, "Harga" => 15000, "Jumlah" => 0),
                    6 => array("Produk" => "Baju Bayi", "Stok" => 20, "Harga" => 35500, "Jumlah" => 0),
                    7 => array("Produk" => "Jumper", "Stok" => 25, "Harga" => 50000, "Jumlah" => 0)
                );
                $total_jumlah = 0;
                $total_pembelian = 0;
                
                foreach ($tabel_harga_barang as $key => $produk) {
                    $tabel_harga_barang[$key]['Jumlah'] = $produk['Stok'] * $produk['Harga'];
                    $total_jumlah += $produk['Jumlah'];
                };

                echo "<h2>Tabel Harga Barang</h2>";
                echo "<table border='1'>";
                echo "<tr><th>ID</th><th>Produk</th><th>Stok</th><th>Harga</th><th>Jumlah</th></tr>";
                foreach ($tabel_harga_barang as $key => $produk) {
                    echo "<tr>";
                    echo "<td>$key</td>";
                    echo "<td>{$produk['Produk']}</td>";
                    echo "<td>{$produk['Stok']}</td>";
                    echo "<td>{$produk['Harga']}</td>";
                    echo "<td>{$produk['Jumlah']}</td>";
                    echo "</tr>";
                ;}
                ?>

<?php
// A
$harga_barang = array(
    array("Minyak Telon", 30000),
    array("Diapers", 51000),
    array("Baby Oil", 16000),
    array("Shampo Baby", 20000),
    array("Bedak", 15000),
    array("Baju Bayi", 35500),
    array("Jumper", 50000)
);

$total_jumlah = 0;
foreach ($harga_barang as $barang) {
    $total_jumlah += $barang[1];
}

echo "Total jumlah: ".$total_jumlah;
echo"<br> </br>";
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
                $harga_barang = array(
                    array("Produk", "Stok", "Harga"),
                    array("Minyak Telon", 30, 30000),
                    array("Diapers", 20, 51000),
                    array("Baby Oil", 15, 16000),
                    array("Shampo Baby", 18, 20000),
                    array("Bedak", 15, 15000),
                    array("Baju Bayi", 20, 35500),
                    array("Jumper", 18, 50000)
                );

                echo "<table border='1'>";
                foreach ($harga_barang as $barang) {
                    echo "<tr>";
                    foreach ($barang as $kolom) {
                        echo "<td>".$kolom."</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
                ?>

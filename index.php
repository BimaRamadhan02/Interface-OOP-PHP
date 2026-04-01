<?php
require_once 'TransferBank.php';
require_once 'EWallet.php';
// Jika kamu sudah membuat QRIS.php, tambahkan di sini:
// require_once 'QRIS.php';

// Membuat Objek (Instansiasi)
$transfer = new TransferBank(100000);
$ewallet = new EWallet(50000);

// Output Transfer Bank
echo $transfer->prosesPembayaran();
echo "<br>";
echo $transfer->cetakStruk();

echo "<hr>";

// Output E-Wallet
echo $ewallet->prosesPembayaran();
echo "<br>";
echo $ewallet->cetakStruk();

echo "<hr>";
echo "<h3>Metode: Transfer Bank</h3>";
echo $transfer->prosesPembayaran() . "<br>";
echo $transfer->cetakStruk();

echo "<hr>";

echo "<h3>Metode: E-Wallet</h3>";
echo $ewallet->prosesPembayaran() . "<br>";
echo $ewallet->cetakStruk();
?>

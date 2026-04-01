<?php
require_once 'Pembayaran.php';
require_once 'Cetak.php';

# Penggunaan Class QRIS dari Extend
class QRIS extends Pembayaran implements Cetak {

    public function prosesPembayaran() {
        if ($this->validasi()) {
            return "Pembayaran QRIS sebesar Rp {$this->jumlah} berhasil diproses";
        }
        return "Jumlah tidak valid";
    }

    public function cetakStruk() {
        return "Struk QRIS: Rp {$this->jumlah}";
    }
}
?>
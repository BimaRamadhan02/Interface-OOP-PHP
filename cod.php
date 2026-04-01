<?php
require_once 'Pembayaran.php';
require_once 'cetak.php';

class Cod extends Pembayaran implements Cetak {
    private $biayaAdmin = 5000;

    public function prosesPembayaran() {
        if ($this->validasi()) {
            $total = $this->jumlah + $this->biayaAdmin;
            return "Metode COD: Silakan bayar tunai sebesar Rp $total (termasuk biaya admin Rp {$this->biayaAdmin}) saat barang sampai.";
        }
        return "Jumlah tidak valid";
    }

    public function cetakStruk() {
        $total = $this->jumlah + $this->biayaAdmin;
        return "Struk COD - Total Tagihan: Rp $total";
    }
}
?>
<?php
require_once 'Pembayaran.php';
require_once 'cetak.php';

class VirtualAccount extends Pembayaran implements Cetak {
    private $nomorVA;

    public function __construct($jumlah) {
        parent::__construct($jumlah);
        // Simulasi pembuatan nomor VA acak
        $this->nomorVA = "8808" . rand(10000000, 99999999);
    }

    public function prosesPembayaran() {
        if ($this->validasi()) {
            return "Virtual Account Berhasil Dibuat. Silakan transfer Rp {$this->jumlah} ke nomor VA: **{$this->nomorVA}**";
        }
        return "Jumlah tidak valid";
    }

    public function cetakStruk() {
        return "Struk VA - Nomor: {$this->nomorVA} | Total: Rp {$this->jumlah}";
    }
}
?>
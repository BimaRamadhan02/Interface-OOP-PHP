<?php
# Penggunaan Abstrak Class
abstract class Pembayaran {
    protected $jumlah;

    public function __construct($jumlah) {
        $this->jumlah = $jumlah;
    }

    // method wajib yang harus ada di class turunan
    abstract public function prosesPembayaran();

    // method umum untuk validasi
    public function validasi() {
        return $this->jumlah > 0;
    }
}
?>
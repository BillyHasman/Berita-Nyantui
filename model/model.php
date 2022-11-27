<?php
    class Berita{
        private $_id;
        private $_url;
        private $_judul;
        private $_isi;
        private $_tanggal;
        private $_kategori;

        public function setID($ID) {$this -> _id = $ID;}
        public function setUrl($URL) {$this -> _url = $URL;}
        public function setJudul($judul) {$this -> _judul = $judul;}
        public function setisi($isi) {$this -> _isi = $isi;}
        public function setTanggal($Tgl) {$this -> _tanggal = $Tgl;}
        public function setKategori($Kategori) {$this->_kategori = $Kategori;}

        public function getID() {return $this->_id;}
        public function getUrl() {return $this -> _url;}
        public function getJudul() {return $this -> _judul;}
        public function getisi() {return $this -> _isi;}
        public function getTanggal() {return $this -> _tanggal;}
        public function getKategori() {return $this->_kategori;}
    }
?>
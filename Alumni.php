<?php

require_once 'mahasiswa.php';

// extends adalah mewarisi semua fungsi dan semua property dalam class parrent
// Mahasiswa adalah class parrent
class Alumni extends Mahasiswa
{
    // membuat method baru yang hanya berfungsi pada class alumni
    // sendangkan class mahasiswa tidak bisa menggunakan method ini
    public function getProdiMahasiswa()
    {
        return $this->prodi;
    }
}

$alumni1 = new Alumni(20200555003, 'Zoro', 'Laki-Laki', 'Teknik', 'Mesin');
// disini kita gunakan method yang ada pada class mahasiswa
echo $alumni1->getNamaMahasiswa();
// echo '<br>';
// echo $alumni1->getProdiMahasiswa();

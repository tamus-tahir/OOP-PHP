<?php

// membuat class
// meskipun classnya kosong tp ini penulisan yang benar dan tidak error
class Mahasiswa
{
    // membuat property
    // memberikan nilai default
    public $nim,
        $nama,
        $gender,
        $fakultas,
        $prodi;

    // membuat constructor 
    public function __construct($nim = 'NIM', $nama = 'Nama', $gender = 'Gender', $fakultas = 'Fakultas', $prodi = 'Prodi')
    {
        // $this->nim akan menerima nilai dari paramater $nim pada construct
        $this->nim = $nim;
        $this->nama = $nama;
        $this->gender = $gender;
        $this->fakultas = $fakultas;
        $this->prodi = $prodi;
    }

    // membuat method
    public function getNamaMahasiswa()
    {
        return $this->nama;
    }
}

// membuat object
$mahasiswa1 = new Mahasiswa(2020055003, 'Luffy', 'Laki-Laki', 'Teknik', 'Informatika');
// $mahasiswa1->nim = '2020055003';
// $mahasiswa1->nama = 'Monkey D Luffy';
$mahasiswa2 = new Mahasiswa(2020055025, 'Nami', 'Perempuan', 'Teknik', 'Elektro');

// paramater  bisa tidak dikirimkan karena nilai default pada construrtor sudah ada
$mahasiswa3 = new Mahasiswa();

// mencetak object
// var_dump($mahasiswa3);

// echo '<br>';

// mencetak salah satu nilai object
// echo $mahasiswa1->nama;

// echo '<br>';

// mencetak method
// echo $mahasiswa1->getNamaMahasiswa();

<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});


$alumni1 = new Alumni(20200555029, 'Sanji', 'Laki-Laki', 'Teknik', 'Elektro');
echo $alumni1->getProdiMahasiswa();

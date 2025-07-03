<?php
function hitungUmur($tahunLahir, $tahunSekarang) {
    return $tahunSekarang - $tahunLahir;
}

echo "Umur saya adalah ". hitungUmur(2000, 2025);
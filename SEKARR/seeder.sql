-- Buat database toko sepatu
CREATE DATABASE IF NOT EXISTS tokosepatu;

-- Pilih database yang akan digunakan
USE tokosepatu;

-- Buat tabel pembeli
CREATE TABLE IF NOT EXISTS pembeli (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    pesanan VARCHAR(255) NOT NULL
);

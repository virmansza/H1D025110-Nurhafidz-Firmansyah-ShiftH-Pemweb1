<?php

const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';      
const DB_NAME = 'latihan';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $db->set_charset('utf8mb4');
} catch (mysqli_sql_exception $ex) {
    // Detail teknis → log server (hanya dibaca pengembang).
    error_log('Koneksi DB gagal: ' . $ex->getMessage());
    // Pesan umum → pengguna (tanpa nama host, user, atau sandi).
    http_response_code(500);
    exit('Layanan sedang tidak tersedia. Coba lagi nanti.');
}

create database paket;

use paket;

CREATE TABLE `barang`(
    `id` int(11) NOT NULL auto_increment,
    `nama` char(100),
    `harga` varchar(1000),
    PRIMARY KEY (`id`)
);

CREATE TABLE `pembeli`(
    `id` int(11) NOT NULL auto_increment,
    `nama` char(100),
    `nomor_hp` varchar(15),
    `alamat` varchar(200),
    PRIMARY KEY (`id`)
);

CREATE TABLE `kurir`(
    `id` int(11) NOT NULL auto_increment,
    `nama` char(100),
    `nomor_hp` varchar(15),
    PRIMARY KEY (`id`)
);

INSERT INTO barang (id, nama, harga) VALUES
(1, 'Gergaji', 100000),
(2, 'Pulpen', 5000),
(3, 'Laptop', 8000000);

INSERT INTO pembeli (id, nama, no_hp, alamat) VALUES
(1, 'Muflih', '0891234567', 'Karangreja rt01/06'),
(2, 'Romi', '085273931131', 'Parakancanggah RT01/30'),
(3, 'Anin', '0852739311', 'Purbalingga,Jawa Tengah');

INSERT INTO kurir (id, nama, no_hp) VALUES
(1, 'Althaaf', '089915042'),
(2, 'Irsyad', '08912345672'),
(3, 'Ilhan', '08371813724');
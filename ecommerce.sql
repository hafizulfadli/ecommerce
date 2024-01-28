-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jan 2024 pada 08.31
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `longitude` decimal(10,8) DEFAULT NULL,
  `latitude` decimal(10,8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `city`
--

INSERT INTO `city` (`id`, `name`, `longitude`, `latitude`) VALUES
(1, 'Jakarta', 99.99999999, -6.17539200),
(2, 'Bandung', 99.99999999, -6.91746300),
(3, 'Surabaya', 99.99999999, -7.27727200),
(4, 'Medan', 98.65595300, 3.55051100),
(5, 'Semarang', 99.99999999, -7.00833300),
(6, 'Palembang', 99.99999999, -2.99916700),
(7, 'Makassar', 99.99999999, -5.14766400),
(8, 'Denpasar', 99.99999999, -8.65000000),
(9, 'Yogyakarta', 99.99999999, -7.79444400),
(10, 'Padang', 99.99999999, -0.91666700);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_status`
--

CREATE TABLE `master_status` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `master_status`
--

INSERT INTO `master_status` (`id`, `name`, `description`) VALUES
(1, 'Pending', 'Pesanan menunggu pembayaran'),
(2, 'Paid', 'Pesanan telah dibayar'),
(3, 'Processing', 'Pesanan sedang diproses'),
(4, 'Shipped', 'Pesanan telah dikirim'),
(5, 'Delivered', 'Pesanan telah diterima'),
(6, 'Cancelled', 'Pesanan dibatalkan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `merchant`
--

CREATE TABLE `merchant` (
  `id` int(11) NOT NULL,
  `merchant_name` varchar(30) NOT NULL,
  `city_id` int(11) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `expired_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `merchant`
--

INSERT INTO `merchant` (`id`, `merchant_name`, `city_id`, `address`, `phone`, `expired_date`) VALUES
(1, 'Toko Sembako Jaya', 1, 'Jl. Merdeka 1', '08123456789', '2024-03-31'),
(2, 'Butik Cantik', 2, 'Jl. Sudirman 2', '08123456790', '2024-04-30'),
(3, 'Restoran Sederhana', 3, 'Jl. Diponegoro 3', '08123456791', '2024-05-31'),
(4, 'Kafe Kekinian', 4, 'Jl. Thamrin 4', '08123456792', '2024-06-30'),
(5, 'Toko Elektronik Murah', 5, 'Jl. Gatot Subroto 5', '08123456793', '2024-07-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_items`
--

CREATE TABLE `order_items` (
  `date` date DEFAULT NULL,
  `order_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `order_items`
--

INSERT INTO `order_items` (`date`, `order_id`, `quantity`, `product_id`, `user_id`) VALUES
('2023-11-14', 1, 2, 1, 1),
('2023-11-14', 2, 1, 3, 2),
('2023-11-15', 3, 3, 2, 1),
('2023-11-15', 4, 1, 4, 3),
('2023-11-16', 5, 2, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_status`
--

CREATE TABLE `order_status` (
  `order_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `order_status`
--

INSERT INTO `order_status` (`order_id`, `status_id`) VALUES
(NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `merchant_id` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`product_id`, `name`, `merchant_id`, `price`) VALUES
(1, 'Beras 5kg', 1, 50000.00),
(2, 'Minyak Goreng 2 liter', 2, 25000.00),
(3, 'Gula Pasir 1kg', 1, 12000.00),
(4, 'Telur Ayam 1kg', 3, 20000.00),
(5, 'Tepung Terigu 1kg', 1, 10000.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `full_name` varchar(50) NOT NULL,
  `address` text DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `date_of_birth`, `full_name`, `address`, `phone`, `email`, `active`) VALUES
(0, '1994-05-05', 'Bruce Wayne', 'Jl. Kelelawar 5', '08123456793', 'brucewayne@example.com', 1),
(1, '1990-01-01', 'John Doe', 'Jl. Melati 1', '08123456789', 'johndoe@example.com', 1),
(2, '1991-02-02', 'Jane Doe', 'Jl. Mawar 2', '08123456790', 'janedoe@example.com', 1),
(3, '1992-03-03', 'Peter Parker', 'Jl. Tulip 3', '08123456791', 'peterparker@example.com', 0),
(4, '1993-04-04', 'Mary Jane', 'Jl. Anggrek 4', '08123456792', 'maryjane@example.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_status`
--
ALTER TABLE `master_status`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `merchant`
--
ALTER TABLE `merchant`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `master_status`
--
ALTER TABLE `master_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `merchant`
--
ALTER TABLE `merchant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `order_items`
--
ALTER TABLE `order_items`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

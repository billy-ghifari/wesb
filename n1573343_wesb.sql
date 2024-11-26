-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 11 Mar 2023 pada 23.01
-- Versi server: 10.5.18-MariaDB-cll-lve
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `n1573343_wesb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner_headers`
--

CREATE TABLE `banner_headers` (
  `id` int(11) NOT NULL,
  `img_banner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_04_044916_create_posts_table', 1),
(6, '2023_03_04_044917_create_kategori_posts_table', 1),
(7, '2023_03_04_044941_create_produks_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pakets`
--

CREATE TABLE `pakets` (
  `id` int(11) NOT NULL,
  `nama_paket` varchar(255) NOT NULL,
  `img_paket` varchar(255) DEFAULT NULL,
  `deskripsi_paket` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pakets`
--

INSERT INTO `pakets` (`id`, `nama_paket`, `img_paket`, `deskripsi_paket`) VALUES
(1, 'Edukasi Proses Edukasi Susu', 'pkt-edukasisusu.jpg', 'Para pengunjung akan dibekali ilmu tentang pengolahan susu dan sapi di dalam ruang presentasi kurang lebih 45 menit. teman-teman juga akan diberikan smimulasi pemerahan yang baik dan benar sesuai dengan SOP di wisata edukasi susu batu'),
(2, 'Kunjungan Outlet Rumah Susu', 'pkt-outlet.jpg', 'Pengunjung akan diajak langsung untuk melihat proses produksi pada pabik pengolahan susu yang ada di wisata edukasi susu batu dimana beberapa parik tersebut yaitu pabrik susu pasteurisasi, pabrik ice cream, pabrik keju dan butter.'),
(3, 'Edukasi Lebah Dan Madu', 'pkt-madu.jpg', 'Pengunjung akan diberikan edukasi tentang lebah dan madu dimana WESB mempunyai penangkaran ratu lebah sendiri yang dibudidaya sendiri dengan penghasil madu terbaik di kota batu, teman-teman juga bisa berinteraksi langsung dengan lebah-lebah kami yang ada di WESB.'),
(4, 'Biogas Dan Farm House', 'pkt-biogas.jpg', 'Pengunjung akan diberikan edukasi tengtang BIOGAS diana kami memanfaatkan limbah kotoran sapi menjadi biogas yang berfungsi sama dengan LPG, karena ini sangat ramah lingkungan dan efisien.'),
(5, 'Kunjungan Pabrik Susu Pasteurisasi', 'pkt-susu.jpg', 'Pengunjung akan diajak langsung untuk melihat proses produksi pada pabik pengolahan susu yang ada di wisata edukasi susu batu dimana beberapa parik tersebut yaitu pabrik susu pasteurisasi, pabrik ice cream, pabrik keju dan butter.'),
(6, 'Kunjungan Pabrik Ice Cream', 'pkt-ice.jpg', 'Pengunjung akan diajak langsung untuk melihat proses produksi pada pabik pengolahan susu yang ada di wisata edukasi susu batu dimana beberapa parik tersebut yaitu pabrik susu pasteurisasi, pabrik ice cream, pabrik keju dan butter.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penggunas`
--

CREATE TABLE `penggunas` (
  `id` int(11) NOT NULL,
  `nama_pengguna` varchar(255) NOT NULL,
  `email_pengguna` varchar(255) NOT NULL,
  `nomor_pengguna` text NOT NULL,
  `kritik_saran` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `penggunas`
--

INSERT INTO `penggunas` (`id`, `nama_pengguna`, `email_pengguna`, `nomor_pengguna`, `kritik_saran`, `created_at`, `updated_at`) VALUES
(4, 'Billy', 'ghifari.billy7@gmail.com', '081249193324', '', '2023-03-07 20:49:28', '2023-03-07 20:49:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_post` varchar(255) NOT NULL,
  `isi_post` text NOT NULL,
  `img_post` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `kategori` enum('Artikel','Berita') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `judul_post`, `isi_post`, `img_post`, `created_at`, `updated_at`, `kategori`) VALUES
(3, 'eggsegs', 'gesgesgesg', '20230306193802.jpg', '2023-03-06 12:38:02', '2023-03-06 12:38:02', 'Artikel'),
(4, 'Testing', 'Hallo', '20230307203636.jpg', '2023-03-06 12:54:30', '2023-03-07 13:36:36', 'Berita'),
(5, 'fwsfwa', 'hrtehkrkjprkjr56jkl;rhnerhmer\r\nherikhjerjhrekhrjh\r\nweahrjenhlenjalmhjklmerth\r\nwerhkrmgenlhtnle\r\nhjerknhrenlhne\r\nhkenhelh\r\njmertkjkle', '20230306195552.png', '2023-03-06 12:55:52', '2023-03-06 12:55:52', 'Artikel'),
(8, 'fwsfwa', 'Jadi begini\r\n\r\naku bingung mau isi apa tapi ya sudah lah', '20230307201531.jpg', '2023-03-07 13:15:31', '2023-03-07 13:15:31', 'Artikel'),
(9, 'Bismillah', 'Jadi begini\r\n\r\naku bingung mau isi apa tapi ya sudah lah', '20230307203623.jpg', '2023-03-07 13:19:56', '2023-03-07 13:36:23', 'Artikel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `img_produk` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produks`
--

INSERT INTO `produks` (`id`, `nama_produk`, `deskripsi_produk`, `img_produk`, `created_at`, `updated_at`) VALUES
(1, 'Ice Cream Nandhi', 'Ice Cream Nandhi merupakan olahan dari turunan susu Pasteurisasi. Ice cream ini memiliki 5 jenis rasa dengan ukuran 100mL.', '20230310005309.png', '2023-03-07 12:39:33', '2023-03-09 17:53:09'),
(3, 'Balok Susu Kota Batu', 'Balok Susu Kota Batu adalah kue susu coklat dengan rasa original chocolava dengan lelehan coklat didalamnya.', '20230310005256.png', '2023-03-07 18:38:55', '2023-03-09 17:52:56'),
(4, 'Butter Nandhi', 'Butter Nandhi hadir dengan olahan susu yang dibuat menjadi bentuk krim. Produk butter tersedia dengan 200gram.', '20230310004928.png', '2023-03-09 17:49:28', '2023-03-09 17:49:28'),
(5, 'Madu Queen Bee', 'Madu Queen Bee adalah produk KUD BATU Asli madu dari peternakan sendiri. Saat ini tersedia dengan 6 jenis dengan berbagai ukuran yang tersedia', '20230310005002.png', '2023-03-09 17:50:02', '2023-03-09 17:50:02'),
(6, 'Keju Mozarella', 'Keju Mozarella merupakan keju lunak yang proses pembuatannya tidak dimatangkan atau disebut dengan keju segar (fresh cheese). Keju Mozarella tersedia 200gram.', '20230310005033.png', '2023-03-09 17:50:33', '2023-03-09 17:50:33'),
(7, 'Yoghurt', 'Yoghurt adalah olahan susu paesteurisasi yang di fermentasi dengan bakteri. Yoghurt tersedia dengan 4 varian dengan ukuran 160 mLdan 1L.', '20230310005337.png', '2023-03-09 17:53:37', '2023-03-09 17:53:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin.wesb@gmail.com', NULL, '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL, NULL),
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$.gB70C0EUrfrWwPZPSdsP.IOPkkXBFbwHqsQ04FC9Hh6f1y.68tG.', NULL, '2023-03-04 16:34:50', '2023-03-04 16:34:50');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `banner_headers`
--
ALTER TABLE `banner_headers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pakets`
--
ALTER TABLE `pakets`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `penggunas`
--
ALTER TABLE `penggunas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `banner_headers`
--
ALTER TABLE `banner_headers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pakets`
--
ALTER TABLE `pakets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `penggunas`
--
ALTER TABLE `penggunas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

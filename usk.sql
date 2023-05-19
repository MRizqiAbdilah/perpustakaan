-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Mar 2023 pada 05.44
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Fiksi', 'fiksi', '2023-03-06 20:19:52', '2023-03-06 20:19:52'),
(2, 'NonFiksi', 'non-fiksi', '2023-03-06 20:19:52', '2023-03-06 20:19:52'),
(3, 'novel', 'novel', '2023-03-06 21:26:49', '2023-03-06 21:26:49');

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
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('anggota') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id`, `name`, `username`, `email`, `tempat_lahir`, `tanggal_lahir`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'rizqi', 'rizqiabdilah12123', 'rizqi@gmail.com', NULL, NULL, '$2y$10$P27YYpnnk3sxoAl/hUs8p.P.H4dTKj6KBZRWYmjBoJ1BQIYnKMS8y', 'anggota', '2023-03-06 20:46:53', '2023-03-06 20:46:53'),
(2, 'Meliana', 'meliii', 'meliana@gmail.com', NULL, NULL, '$2y$10$sQ9CjHQVUwZ/fR.xLkwfnuHEmPTgkjibzARVlB3bHnDVWKrOtHFQy', 'anggota', '2023-03-06 21:33:36', '2023-03-06 21:33:36');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_26_200113_create_posts_table', 1),
(6, '2023_02_28_033855_create_categories_table', 1),
(7, '2023_03_03_132153_create_laporans_table', 1),
(8, '2023_03_05_041000_anggota', 1),
(9, '2023_03_05_092806_peminjaman', 1),
(10, '2023_03_07_010116_member', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `member_id`, `post_id`, `tanggal_peminjaman`, `tanggal_kembali`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '2023-03-07', '2023-03-11', '2023-03-06 20:47:12', '2023-03-06 20:47:12'),
(2, 1, 5, '2023-03-07', '2023-03-10', '2023-03-06 21:31:07', '2023-03-06 21:31:07'),
(3, 2, 4, '2023-03-07', '2023-03-10', '2023-03-06 21:33:55', '2023-03-06 21:33:55');

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
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `excerpt` text NOT NULL,
  `description` text NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `slug`, `author`, `publisher`, `image`, `excerpt`, `description`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Naruto', 'naruto', 'Masashi Kishimoto', 'Shonen Jump', NULL, 'Lorem ipsum dolor sit amet consectetur', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quasi sunt dolores reiciendis excepturi magni voluptas eius harum? Impedit, nemo? Facere necessitatibus at dignissimos cumque error earum ad ipsam ea!</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe voluptate nam aliquam ad minima eveniet dolores facilis ratione corrupti enim ea deserunt, dolorem error fugiat magni rem fuga facere excepturi provident incidunt. Amet quaerat adipisci, facilis doloremque, ipsam modi labore rerum saepe dolorum cupiditate laborum placeat quia consequatur voluptatibus necessitatibus.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum ab tempore laudantium, nihil optio doloremque? Minus ducimus quos corporis vero doloribus architecto vel odio officiis. Reprehenderit officia totam molestiae dolor architecto repudiandae aut laboriosam nesciunt quae! Fuga enim ab accusamus quae laudantium sint minima! Nam, tempora! Quae amet quidem vel?</p>', NULL, '2023-03-06 20:19:52', '2023-03-06 20:19:52'),
(2, 1, 1, 'One Piece', 'one-piece', 'Eichiro Oda', 'Shonen Jump', NULL, 'Lorem ipsum dolor sit amet consectetur', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quasi sunt dolores reiciendis excepturi magni voluptas eius harum? Impedit, nemo? Facere necessitatibus at dignissimos cumque error earum ad ipsam ea!</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe voluptate nam aliquam ad minima eveniet dolores facilis ratione corrupti enim ea deserunt, dolorem error fugiat magni rem fuga facere excepturi provident incidunt. Amet quaerat adipisci, facilis doloremque, ipsam modi labore rerum saepe dolorum cupiditate laborum placeat quia consequatur voluptatibus necessitatibus.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum ab tempore laudantium, nihil optio doloremque? Minus ducimus quos corporis vero doloribus architecto vel odio officiis. Reprehenderit officia totam molestiae dolor architecto repudiandae aut laboriosam nesciunt quae! Fuga enim ab accusamus quae laudantium sint minima! Nam, tempora! Quae amet quidem vel?</p>', NULL, '2023-03-06 20:19:52', '2023-03-06 20:19:52'),
(3, 2, 2, 'Investasi Saham Ala Fundamentalis Dunia', 'investasi-saham-ala-fundamentalis-dunia', 'Ryan Filbert', 'PT Elex Komputindo', NULL, 'Lorem ipsum dolor sit amet consectetur', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quasi sunt dolores reiciendis excepturi magni voluptas eius harum? Impedit, nemo? Facere necessitatibus at dignissimos cumque error earum ad ipsam ea!</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe voluptate nam aliquam ad minima eveniet dolores facilis ratione corrupti enim ea deserunt, dolorem error fugiat magni rem fuga facere excepturi provident incidunt. Amet quaerat adipisci, facilis doloremque, ipsam modi labore rerum saepe dolorum cupiditate laborum placeat quia consequatur voluptatibus necessitatibus.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum ab tempore laudantium, nihil optio doloremque? Minus ducimus quos corporis vero doloribus architecto vel odio officiis. Reprehenderit officia totam molestiae dolor architecto repudiandae aut laboriosam nesciunt quae! Fuga enim ab accusamus quae laudantium sint minima! Nam, tempora! Quae amet quidem vel?</p>', NULL, '2023-03-06 20:19:52', '2023-03-06 20:19:52'),
(4, 2, 2, 'Technical Analysis for Mega Profit', 'techinical-analysis-for-mega-profit', 'Edianto Ong', 'PT Gramedia Pustaka Utama', NULL, 'Lorem ipsum dolor sit amet consectetur', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quasi sunt dolores reiciendis excepturi magni voluptas eius harum? Impedit, nemo? Facere necessitatibus at dignissimos cumque error earum ad ipsam ea!</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe voluptate nam aliquam ad minima eveniet dolores facilis ratione corrupti enim ea deserunt, dolorem error fugiat magni rem fuga facere excepturi provident incidunt. Amet quaerat adipisci, facilis doloremque, ipsam modi labore rerum saepe dolorum cupiditate laborum placeat quia consequatur voluptatibus necessitatibus.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum ab tempore laudantium, nihil optio doloremque? Minus ducimus quos corporis vero doloribus architecto vel odio officiis. Reprehenderit officia totam molestiae dolor architecto repudiandae aut laboriosam nesciunt quae! Fuga enim ab accusamus quae laudantium sint minima! Nam, tempora! Quae amet quidem vel?</p>', NULL, '2023-03-06 20:19:52', '2023-03-06 20:19:52'),
(5, 3, 11, 'Indonesia The Best', 'indonesia-the-best', 'perdian', 'PT Gramedia Pustaka Utama', 'post-images/EbajkeGmCNhIIptgwS3kSeWRBW6O8Q6OwpedQWrA.png', 'asd', 'asd', NULL, '2023-03-06 21:29:11', '2023-03-06 21:29:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','pustakawan','anggota') NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Megumin-Chan', 'KonosubaMegumin', 'megumin@gmail.com', NULL, '$2y$10$tj6FJ68T06WtND1t07f9MuLDOf8c7wHjS/vGajS4KkNqdrZuAiKHK', 'admin', NULL, '2023-03-06 20:19:52', '2023-03-06 20:19:52'),
(2, 'Sri-Chan', 'SriChan', 'sri@gmail.com', NULL, '$2y$10$WESDes/znQlevKA1LQtCGOjmgtp4Il8tVwpLzp/RIm9EKaL7zXm7C', 'admin', NULL, '2023-03-06 20:19:52', '2023-03-06 20:19:52'),
(3, '123', '123123', '1231231@gmail.com', NULL, '$2y$10$KnYq/u.MxY.qVD43EKjReemSXJJdS2jNl4pnB9caAKLXiiYj0ivQi', 'anggota', NULL, '2023-03-06 20:20:08', '2023-03-06 20:20:08'),
(4, 'rizqi1', 'rizqiabdilah', 'rizqi1@gmail.com', NULL, '$2y$10$E6AhqjhSaNIdkKEpBsJMJutK9/W4yqL/cjVyvrBR1uF8JpWYxuJ7O', 'pustakawan', NULL, '2023-03-06 20:22:10', '2023-03-06 20:22:10'),
(5, 'rizqi', '0050637489', 'rizqi2@gmail.com', NULL, '$2y$10$te92FKMU1u9y51LQeL63f.fjNi2NvA64Oc7RBTdKTboSgyrCT54ya', 'anggota', NULL, '2023-03-06 20:22:29', '2023-03-06 20:22:29'),
(6, 'rizqi3', 'rizqi3', 'rizqi3@gmail.com', NULL, '$2y$10$3egqm4d1wcHOfnv/eiFp5eb7bEkq2T1dkOWFkvXUYCGy8RMGI1pm6', 'admin', NULL, '2023-03-06 20:34:04', '2023-03-06 20:34:04'),
(7, 'rizqi4', 'rizqiabdilah12', 'rizqi4@gmail.com', NULL, '$2y$10$IoFUip3gDha38skktGfskOlqHCEz83j9MN3xYeISovelzd59dvjT.', 'admin', NULL, '2023-03-06 20:36:13', '2023-03-06 20:36:13'),
(8, 'admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$ODgI628hYMmcPOqtkzm1Reo15kZEx1HixXOADbzHiSzfseVn0KmOy', 'admin', NULL, '2023-03-06 21:08:24', '2023-03-06 21:08:24'),
(9, 'pustakawan', 'pustakawan', 'pustakawan@gmail.com', NULL, '$2y$10$1j/So94a3WHuK4ObIlm7COVQo2M12d8QLC4teDe.Z1YiiNkL/DVBe', 'pustakawan', NULL, '2023-03-06 21:08:45', '2023-03-06 21:08:45'),
(10, 'anggota', 'anggota', 'anggota@gmail.com', NULL, '$2y$10$EyGVN2hvukWkHwNADtbauOVhscz892WYS3N4Womuo6aeQHIi4hIcS', 'anggota', NULL, '2023-03-06 21:09:05', '2023-03-06 21:09:05'),
(11, 'admin1', 'admin1', 'admin1@gmail.com', NULL, '$2y$10$Yl/m4GulHyTi2INnpEH9M.02MxcceyCGOnap/pW/q/ePGYI8/vqxu', 'admin', NULL, '2023-03-06 21:09:56', '2023-03-06 21:09:56'),
(12, 'pustakawan1', 'pustakawan1', 'pustakawan1@gmail.com', NULL, '$2y$10$qAT/o4mfjEDNNMmu.c1rDuDpVlMKUoVg0eWIzJL2BOuSCwOIMBtiW', 'pustakawan', NULL, '2023-03-06 21:10:41', '2023-03-06 21:10:41'),
(13, 'anggota1', 'anggota1', 'anggota1@gmail.com', NULL, '$2y$10$zP0CgVrSomujgMUighy6dupl5FJQRzGbL.IjIKa7vnpg8cBC55LCW', 'anggota', NULL, '2023-03-06 21:11:08', '2023-03-06 21:11:08'),
(14, 'Meliana', 'meliana', 'meliana@gmail.com', NULL, '$2y$10$edro4dIaKHogG5/iLgvZ7.mm0JsT2.q4i6rbiOHo4TuFSrbK0msTW', 'pustakawan', NULL, '2023-03-06 21:35:33', '2023-03-06 21:35:33');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `member_username_unique` (`username`),
  ADD UNIQUE KEY `member_email_unique` (`email`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

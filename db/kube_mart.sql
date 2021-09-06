-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Sep 2021 pada 09.57
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kube_mart`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quantity` bigint(20) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(7, 1, 7, 3, '2021-08-10 00:06:41', '2021-08-10 00:11:03'),
(44, 3, 10, 1, '2021-09-05 19:31:55', '2021-09-05 19:31:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Agriculture', NULL, NULL, NULL),
(2, 'Food', NULL, NULL, NULL),
(3, 'Souvenir', NULL, NULL, NULL),
(4, 'Farm', NULL, NULL, NULL),
(5, 'craft', NULL, NULL, NULL),
(6, 'art', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories_store`
--

CREATE TABLE `categories_store` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories_store`
--

INSERT INTO `categories_store` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Agriculture', NULL, NULL),
(2, 'Food', NULL, NULL),
(3, 'Souvenir', NULL, NULL),
(4, 'Farm', NULL, NULL),
(5, 'Craft', NULL, NULL),
(6, 'Art', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_07_18_160331_create_table_stores', 1),
(4, '2021_07_18_160332_create_users_table', 1),
(5, '2021_07_18_161307_create_table_categories', 1),
(6, '2021_07_18_161340_create_table_products', 1),
(7, '2021_07_18_161400_create_table_carts', 1),
(8, '2021_07_18_161425_create_table_transactions', 1),
(9, '2021_07_18_161454_create_table_product_transactions', 1),
(10, '2021_07_29_182404_create_categories_store', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint(20) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `stock`, `description`, `photo`, `store_id`, `user_id`, `weight`, `category_id`, `created_at`, `updated_at`) VALUES
(10, 'Croco vintage Shoulderbag', 45000, 17, '🏵 Matt : Croco glossy & Doff\r\n🏵 Inner : Spunbond putih\r\n🏵 Detail :\r\n- 1 resleting utama\r\n- ada kunci penutup dibagian depan\r\n- Tali full bahan\r\n- Tali permanen\r\n- Tali tidak bisa adjust (panjang-pendek)\r\n🏵 Size ( P x L x T ) : 26 x 6 x 15cm\r\n🏵️ P.Tali : 59cm\r\n🏵 Berat : 200g\r\n- Wahana 1kg = 4pcs\r\n- JNE/POS/Lion/Tiki : 6pcs\r\n🏵 Varian Warna :\r\n- Hitam (Doff)\r\n- Lavender (Doff)\r\n- Pink salem (Doff)\r\n- Putih (Doff)\r\n- Maroon (Glossy)\r\n- Coklat tua (Glossy)\r\n- Abu (Glossy)\r\nHarga produsen wa 081382433432', 'product/613506f389386bag-2728000_1920.png', 2, 1, '200 gram', 3, '2021-08-10 00:13:12', '2021-09-05 13:19:06'),
(11, 'Sepatu buatan UMKM', 80000, 25, 'sepatu untuk nikahan atau kondangan lucu sekali dan keren ketika di pakai ada hak nya', 'product/613507ec3ade8fashion-1284496_1920.jpg', 2, 1, '300 gram', 3, NULL, '2021-09-05 13:19:06'),
(12, 'Wayang Golek', 750000, 4, 'Wayang golek .. Lestarikan budaya indonesia.. Asli kerajinan tangan warga tegalwaru .. Harga 750rb / wayang .. Bs PO tokoh wayang yg di suk', 'product/6135096ac462d67488986_2284462808329089_8993978615259463680_n.jpg', 1, 3, '800 gram', 5, '2021-09-05 11:16:11', '2021-09-05 11:16:11'),
(14, 'Aneka kerajinan daur ulang kertas', 20000, 3, 'Aneka kerajinan daur ulamg kertas.. Bs pesan bentuk harga murah.. Celengan 10rb/buah .kotak tisue 20rb/ kotak dll.. PO wa 081382433432 \r\nProduk hasil pemberdayaan anak yatim \r\n#sekolahakubisamandiri', 'product/61350a60abed154405403_1945815602193813_6399468839741947904_n.jpg', 2, 1, '100 Gram', 5, '2021-09-05 11:20:16', '2021-09-05 11:20:16'),
(15, 'Bunga Kertas', 150000, 80, 'Produk pemberdayaan Ibu2 .. Bunga Kertas untuk dekoraai rumah / kamar jg untuk peseta \r\nPesanan tergantung bentuk, 1 set kisaran harga 150rb - 250rb \r\nOrder hub 081382433432', 'product/61350ac31d80346447546_1781671765274865_2720987525773524992_n.jpg', 2, 1, '200 Gram', 6, '2021-09-05 11:21:55', '2021-09-05 11:21:55'),
(16, 'Selingan kopi', 15000, 15, 'Selingan kopi .. \r\nBuat para emak agr suami tetap bisa \'ngopi\' sehat sangat baik menyediakan minuman keluarga Wedang Secang ( Wedang Uwuh ) .. Selain meningkatkan fitalitas, sangat baik juga utk daya tahan tubuh di musim pandemi Covid 19 ini.. \r\nCara buat tingal smua bahan2 di rebus tambh gula merah dan jahe di memarkan.. Mendidih languang di hidangkan.. \r\nBerminat silahkan inbox hrga hanya 15rb madein Kebun Herbal Sari Sehat  Desa Tegalwaru  ..', 'product/61350bb1b74ac120232357_3275080079267352_6130425269730430305_n.jpg', 2, 1, '69', 2, '2021-09-05 11:25:54', '2021-09-05 11:25:54'),
(17, 'Ranginang', 9000, 27, 'Dicari reseller .. Renginang mini aneka rasa hanya 9000/bungkus', 'product/61350be9a1653137199054_3552040261571331_6781675108092182364_n.jpg', 2, 1, '200 gram', 2, '2021-09-05 11:26:49', '2021-09-05 11:27:09'),
(18, 'Sosis Solo', 1298, 80, 'Tersedia Sosis Solo bisa pemesanan curah atw perkemasan isi 10. Hasil karya Usaha Ibu Mandiri .. Pemesanan inbox harga 1300/buah bisa utk di jual dan di kemas sdr..', 'product/61350c222073b147655821_3626174000824623_382030885498350512_n.jpg', 2, 1, '200 gram', 2, '2021-09-05 11:27:46', '2021-09-05 11:27:46'),
(19, 'Hiasan rumah ala shaby', 64999, 11, 'Hiasan rumah ala shaby ..Unik, cantik, lucu bikin rumah jd seger.. material bingkai dari kayu dijamin tahan lama \r\nSPESIFIKASI\r\n- Kertas Art Cartoon 230 gr dengan laminasi doff\r\n- Art Cartoon ditempel pada kayu pipih bingkai yang kuat\r\n- Ditempel dengan lem tembak / lem bakar\r\n- Bingkai bahan Fiber\r\n- Ukuran bingkai 31 x 22 cm (A4)\r\nDicari reseller seluruh Indonesia bisa custom model tulisan hanya 65k .. hub 081382433432', 'product/61350cf0c6d4922008143_1321207704654609_8798420746933371482_n.jpg', 2, 1, '600 gram', 6, '2021-09-05 11:31:14', '2021-09-05 13:06:12'),
(20, 'Domba Qurban', 1800000, 2, 'Kampung Kurban Desa Tegalwaru menyediakan dan menyalurkan hewan qurban .. harga lbh murah Dr pasaran karena kami berternak sendiri \r\nHarga kisaran 1.8 juta hingga 2.5 juta hg 35 kg .. hub 081382433432', 'product/61350d3b88e5b21078378_1294967843945262_1598078876096670923_n.jpg', 2, 1, '35 Kg', 4, '2021-09-05 11:32:27', '2021-09-05 11:32:27'),
(21, 'Sapi Qurban', 3200000, 3, 'Kampung Kurban Desa Tegalwaru menyediakan dan menyalurkan hewan qurban .. harga lbh murah Dr pasaran karena kami berternak sendiri', 'product/61350e5bd802bbeef-3509716_1920.jpg', 2, 1, '50 Kg', 4, '2021-09-05 11:37:16', '2021-09-05 11:37:16'),
(22, 'Jagung', 5000, 68, 'Jagung adalah tanaman model yang menarik, khusunya dibidang pertanian dan biologi. Tanaman jagung memiliki reaksi yang khas dan dramatis', 'product/61350eba000bdcorn-on-the-cob-2941068_1920.jpg', 2, 1, '300 Gram', 1, '2021-09-05 11:38:50', '2021-09-05 11:39:08'),
(23, 'Beras', 12000, 90, 'Beras adalah salah satu produk makanan pokok paling penting di dunia', 'product/61350f5901603rice-3506194_1920.jpg', 2, 1, '1 Kg', 1, '2021-09-05 11:41:29', '2021-09-05 11:41:29'),
(24, 'Sepatu', 100000, 4, 'Sepatu multifungsi bisa untuk main, untuk ke kampus, dll', 'product/613526c8ce62aboots-1638873_1920.jpg', 18, 20, '700 Gram', 3, '2021-09-05 13:21:28', '2021-09-05 13:21:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_transactions`
--

CREATE TABLE `product_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` bigint(20) NOT NULL DEFAULT 1,
  `review` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `transaction_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product_transactions`
--

INSERT INTO `product_transactions` (`id`, `price`, `quantity`, `review`, `product_id`, `transaction_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 10, NULL, 10, 6, '2021-08-21 14:16:55', '2021-08-21 14:16:55'),
(2, NULL, 10, NULL, 10, 8, '2021-08-21 15:28:21', '2021-08-21 15:28:21'),
(3, NULL, 10, NULL, 10, 10, '2021-08-21 15:39:52', '2021-08-21 15:39:52'),
(4, 20000, 1, NULL, 10, 14, '2021-08-21 16:05:25', '2021-08-21 16:05:25'),
(5, 20000, 1, NULL, 10, 16, '2021-08-21 16:07:20', '2021-08-21 16:07:20'),
(6, 20000, 1, NULL, 10, 19, '2021-08-21 16:09:03', '2021-08-21 16:09:03'),
(7, 20000, 1, NULL, 10, 21, '2021-08-21 16:09:57', '2021-08-21 16:09:57'),
(8, 20000, 1, NULL, 10, 23, '2021-08-21 16:10:28', '2021-08-21 16:10:28'),
(9, 20000, 1, NULL, 10, 25, '2021-08-21 16:11:56', '2021-08-21 16:11:56'),
(10, 20000, 1, NULL, 10, 26, '2021-08-21 16:12:24', '2021-08-21 16:12:24'),
(11, 20000, 1, NULL, 10, 28, '2021-08-21 16:13:09', '2021-08-21 16:13:09'),
(12, 20000, 1, NULL, 10, 29, '2021-08-21 16:13:43', '2021-08-21 16:13:43'),
(13, 757, 1, NULL, 11, 30, '2021-08-21 16:15:37', '2021-08-21 16:15:37'),
(14, 20000, 1, NULL, 10, 30, '2021-08-21 16:15:38', '2021-08-21 16:15:38'),
(15, 20000, 1, NULL, 10, 33, '2021-08-21 16:19:09', '2021-08-21 16:19:09'),
(16, 757, 1, NULL, 11, 33, '2021-08-21 16:19:09', '2021-08-21 16:19:09'),
(17, 20000, 2, NULL, 10, 35, '2021-08-21 16:26:13', '2021-08-21 16:26:13'),
(18, 757, 1, NULL, 11, 35, '2021-08-21 16:26:13', '2021-08-21 16:26:13'),
(19, 20000, 1, NULL, 10, 36, '2021-08-21 16:27:27', '2021-08-21 16:27:27'),
(20, 757, 1, NULL, 11, 36, '2021-08-21 16:27:27', '2021-08-21 16:27:27'),
(21, 757, 3, NULL, 11, 37, '2021-08-22 11:51:47', '2021-08-22 11:51:47'),
(22, 757, 1, NULL, 11, 38, '2021-08-22 11:58:52', '2021-08-22 11:58:52'),
(23, 757, 1, NULL, 11, 45, '2021-08-22 12:08:00', '2021-08-22 12:08:00'),
(24, 20000, 1, NULL, 10, 47, '2021-08-22 12:08:42', '2021-08-22 12:08:42'),
(25, 20000, 1, NULL, 10, 63, '2021-08-22 12:24:16', '2021-08-22 12:24:16'),
(26, 20000, 2, NULL, 10, 64, '2021-08-23 13:41:46', '2021-08-23 13:41:46'),
(27, 20000, 2, NULL, 10, 65, '2021-08-23 22:33:54', '2021-08-23 22:33:54'),
(28, 20000, 1, NULL, 10, 68, '2021-09-03 16:11:45', '2021-09-03 16:11:45'),
(29, 757, 1, NULL, 11, 69, '2021-09-04 11:21:10', '2021-09-04 11:21:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stores`
--

CREATE TABLE `stores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `langitude` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_store_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `stores`
--

INSERT INTO `stores` (`id`, `name`, `photo`, `address`, `phone`, `description`, `langitude`, `longitude`, `category_store_id`, `created_at`, `updated_at`) VALUES
(1, 'Sukapura Mart', NULL, 'Jln. Sukapura Ds. Sukapura Jawa Barat Kel/Ds. Kec. Dayeuhkolot - Bandung Jawa Barat.', '0872633556', 'Sukapura menyediakan berbagai macam pangan', NULL, NULL, 5, '2021-08-17 22:56:19', '2021-09-05 12:29:17'),
(2, 'Herbal Sari Sehat', NULL, 'Tegalwaru Street, Tegal Waru, Ciampea District, Bogor, West Java 16620', '082113114115', 'Herbal Sari Sehat is the latest breakthrough product in the traditional medicine market', '-6.8976', '107.634', 2, NULL, '2021-09-05 12:23:48'),
(3, 'Amet optio iure se', NULL, NULL, NULL, NULL, NULL, NULL, 4, '2021-08-17 22:56:50', '2021-08-17 22:56:50'),
(18, 'Sukabirus Mart', NULL, 'Jl Telekomunikasi', '0876253344', 'Sukabirus menyediakan berbagai makanan', NULL, NULL, 3, '2021-09-05 13:15:08', '2021-09-05 13:19:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receipt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `courier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_prove` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `approval_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` enum('Waitingprovepayment','Rejected','Confirm','shipping','complete') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transactions`
--

INSERT INTO `transactions` (`id`, `address`, `province`, `city`, `postal_code`, `country`, `receipt`, `courier`, `phone`, `payment_prove`, `user_id`, `approval_user_id`, `status`, `invoice`, `created_at`, `updated_at`) VALUES
(1, 'Aliquip in reprehend', 'West Java', 'Bandung', 'Voluptatem deleniti', 'Irure obcaecati maxi', '-', 'JNE', '+1 (747) 903-8237', NULL, 1, NULL, NULL, '1629580264', '2021-08-21 14:11:04', '2021-08-21 14:11:04'),
(7, 'Est nostrum quo null', 'West Java', 'Bandung', 'Ut eum assumenda mag', 'Amet non aliquam at', '-', 'JNE', '+1 (206) 251-4252', NULL, 1, NULL, NULL, '1629580688', '2021-08-21 14:18:08', '2021-08-21 14:18:08'),
(8, 'Laboriosam ut quo p', 'West Java', 'Bandung', 'Adipisicing dolore s', 'Id illum sit vitae', '-', 'JNE', '+1 (172) 305-5316', NULL, 1, NULL, NULL, '1629584901', '2021-08-21 15:28:21', '2021-08-21 15:28:21'),
(9, 'Aut accusamus ea con', 'West Java', 'Bandung', 'Tempore porro labor', 'Labore id a delectu', '-', 'JNE', '+1 (352) 815-2475', NULL, 1, NULL, NULL, '1629585331', '2021-08-21 15:35:31', '2021-08-21 15:35:31'),
(10, 'Consectetur ab ea sa', 'West Java', 'Bandung', 'Consequatur anim ea', 'Quia ut dolores dese', '-', 'JNE', '+1 (336) 857-2591', NULL, 1, NULL, NULL, '1629585592', '2021-08-21 15:39:52', '2021-08-21 15:39:52'),
(11, 'Voluptates soluta Na', 'West Java', 'Bandung', 'Beatae sint nihil qu', 'Nisi non nostrud acc', '-', 'JNE', '+1 (829) 445-1306', NULL, 1, NULL, NULL, '1629585653', '2021-08-21 15:40:53', '2021-08-21 15:40:53'),
(12, 'Fugiat eu voluptatem', 'West Java', 'Bandung', 'Inventore ea sit eum', 'Iste molestiae sed n', '-', 'JNE', '+1 (327) 374-8997', NULL, 1, NULL, NULL, '1629585764', '2021-08-21 15:42:44', '2021-08-21 15:42:44'),
(13, 'Fugiat eu voluptatem', 'West Java', 'Bandung', 'Inventore ea sit eum', 'Iste molestiae sed n', '-', 'JNE', '+1 (327) 374-8997', NULL, 1, NULL, NULL, '1629585802', '2021-08-21 15:43:22', '2021-08-21 15:43:22'),
(14, 'Sequi veniam pariat', 'West Java', 'Bandung', 'Dolore animi mollit', 'Aliqua In harum pos', '-', 'JNE', '+1 (241) 759-2939', NULL, 1, NULL, NULL, '1629587125', '2021-08-21 16:05:25', '2021-08-21 16:05:25'),
(15, 'Sequi veniam pariat', 'West Java', 'Bandung', 'Dolore animi mollit', 'Aliqua In harum pos', '-', 'JNE', '+1 (241) 759-2939', NULL, 1, NULL, NULL, '1629587203', '2021-08-21 16:06:43', '2021-08-21 16:06:43'),
(16, 'Excepteur voluptates', 'West Java', 'Bandung', 'Placeat dolorem mol', 'Nostrum omnis nostru', '-', 'JNE', '+1 (136) 537-1148', NULL, 1, NULL, NULL, '1629587240', '2021-08-21 16:07:20', '2021-08-21 16:07:20'),
(17, 'Excepteur voluptates', 'West Java', 'Bandung', 'Placeat dolorem mol', 'Nostrum omnis nostru', '-', 'JNE', '+1 (136) 537-1148', NULL, 1, NULL, NULL, '1629587300', '2021-08-21 16:08:20', '2021-08-21 16:08:20'),
(18, 'Excepteur voluptates', 'West Java', 'Bandung', 'Placeat dolorem mol', 'Nostrum omnis nostru', '-', 'JNE', '+1 (136) 537-1148', NULL, 1, NULL, NULL, '1629587322', '2021-08-21 16:08:42', '2021-08-21 16:08:42'),
(19, 'Est voluptatem dol', 'West Java', 'Bandung', 'Neque possimus opti', 'Deserunt eu iure dol', '-', 'JNE', '+1 (532) 164-9852', NULL, 1, NULL, NULL, '1629587343', '2021-08-21 16:09:03', '2021-08-21 16:09:03'),
(20, 'Est voluptatem dol', 'West Java', 'Bandung', 'Neque possimus opti', 'Deserunt eu iure dol', '-', 'JNE', '+1 (532) 164-9852', NULL, 1, NULL, NULL, '1629587377', '2021-08-21 16:09:37', '2021-08-21 16:09:37'),
(21, 'Numquam dolor odit d', 'West Java', 'Bandung', 'Non ad ipsum nisi e', 'Odit sed fuga Tempo', '-', 'JNE', '+1 (265) 877-5401', NULL, 1, NULL, NULL, '1629587397', '2021-08-21 16:09:57', '2021-08-21 16:09:57'),
(22, 'Numquam dolor odit d', 'West Java', 'Bandung', 'Non ad ipsum nisi e', 'Odit sed fuga Tempo', '-', 'JNE', '+1 (265) 877-5401', NULL, 1, NULL, NULL, '1629587414', '2021-08-21 16:10:14', '2021-08-21 16:10:14'),
(23, 'Vero quo ipsam repel', 'West Java', 'Bandung', 'Culpa obcaecati vol', 'Illum ut aut earum', '-', 'JNE', '+1 (885) 677-1909', NULL, 1, NULL, NULL, '1629587428', '2021-08-21 16:10:28', '2021-08-21 16:10:28'),
(24, 'Vero quo ipsam repel', 'West Java', 'Bandung', 'Culpa obcaecati vol', 'Illum ut aut earum', '-', 'JNE', '+1 (885) 677-1909', NULL, 1, NULL, NULL, '1629587502', '2021-08-21 16:11:42', '2021-08-21 16:11:42'),
(25, 'Sed dicta dolor veri', 'West Java', 'Bandung', 'Praesentium in excep', 'Duis culpa minim sol', '-', 'JNE', '+1 (546) 291-3131', NULL, 1, NULL, NULL, '1629587516', '2021-08-21 16:11:56', '2021-08-21 16:11:56'),
(26, 'Neque dolor sint mag', 'West Java', 'Bandung', 'Consequatur Praesen', 'Ullamco optio duis', '-', 'JNE', '+1 (897) 439-9622', NULL, 1, NULL, NULL, '1629587544', '2021-08-21 16:12:24', '2021-08-21 16:12:24'),
(27, 'Neque dolor sint mag', 'West Java', 'Bandung', 'Consequatur Praesen', 'Ullamco optio duis', '-', 'JNE', '+1 (897) 439-9622', NULL, 1, NULL, NULL, '1629587574', '2021-08-21 16:12:54', '2021-08-21 16:12:54'),
(28, 'Minus quidem qui nul', 'West Java', 'Bandung', 'Voluptatem irure et', 'Consequatur lorem ac', '-', 'JNE', '+1 (627) 656-4426', NULL, 1, NULL, NULL, '1629587588', '2021-08-21 16:13:09', '2021-08-21 16:13:09'),
(29, 'Incidunt officia ob', 'West Java', 'Bandung', 'Aut harum unde volup', 'Magnam saepe tempora', '-', 'JNE', '+1 (562) 695-1998', NULL, 1, NULL, NULL, '1629587623', '2021-08-21 16:13:43', '2021-08-21 16:13:43'),
(30, 'In fugiat voluptas', 'West Java', 'Bandung', 'A inventore dicta su', 'Aliqua Enim blandit', '-', 'JNE', '+1 (548) 228-3385', NULL, 1, NULL, NULL, '1629587737', '2021-08-21 16:15:37', '2021-08-21 16:15:37'),
(31, 'In fugiat voluptas', 'West Java', 'Bandung', 'A inventore dicta su', 'Aliqua Enim blandit', '-', 'JNE', '+1 (548) 228-3385', NULL, 1, NULL, NULL, '1629587855', '2021-08-21 16:17:35', '2021-08-21 16:17:35'),
(32, 'Dolores molestiae la', 'West Java', 'Bandung', 'Voluptas suscipit la', 'Delectus et ut temp', '-', 'JNE', '+1 (126) 402-1975', NULL, 1, NULL, NULL, '1629587867', '2021-08-21 16:17:47', '2021-08-21 16:17:47'),
(33, 'Veritatis nemo archi', 'West Java', 'Bandung', 'Ducimus quaerat vol', 'Obcaecati deserunt e', '-', 'JNE', '+1 (493) 399-2949', NULL, 1, NULL, NULL, '1629587949', '2021-08-21 16:19:09', '2021-08-21 16:19:09'),
(34, 'Veritatis nemo archi', 'West Java', 'Bandung', 'Ducimus quaerat vol', 'Obcaecati deserunt e', '-', 'JNE', '+1 (493) 399-2949', NULL, 1, NULL, NULL, '1629588337', '2021-08-21 16:25:37', '2021-08-21 16:25:37'),
(35, 'Cupiditate et evenie', 'West Java', 'Bandung', 'Culpa voluptatem et', 'Et hic eum provident', '-', 'JNE', '+1 (532) 717-9602', NULL, 1, NULL, NULL, '1629588373', '2021-08-21 16:26:13', '2021-08-21 16:26:13'),
(36, 'Sint temporibus eu s', 'West Java', 'Bandung', 'In excepturi ipsum c', 'Dolorem veniam recu', '-', 'JNE', '+1 (848) 183-2955', NULL, 1, NULL, NULL, '1629588447', '2021-08-21 16:27:27', '2021-08-21 16:27:27'),
(37, 'Aliquam numquam moll', 'West Java', 'Bandung', 'Consequat Labore su', 'Laboris hic facilis', '-', 'JNE', '+1 (593) 271-8445', NULL, 1, NULL, NULL, '1629658307', '2021-08-22 11:51:47', '2021-08-22 11:51:47'),
(38, 'Ab est provident co', 'West Java', 'Bandung', 'Iste in laborum Vel', 'Cupiditate in in acc', '-', 'JNE', '+1 (864) 471-4734', NULL, 1, NULL, NULL, '1629658732', '2021-08-22 11:58:52', '2021-08-22 11:58:52'),
(39, 'Ab est provident co', 'West Java', 'Bandung', 'Iste in laborum Vel', 'Cupiditate in in acc', '-', 'JNE', '+1 (864) 471-4734', NULL, 1, NULL, NULL, '1629658745', '2021-08-22 11:59:05', '2021-08-22 11:59:05'),
(40, 'Ab est provident co', 'West Java', 'Bandung', 'Iste in laborum Vel', 'Cupiditate in in acc', '-', 'JNE', '+1 (864) 471-4734', NULL, 1, NULL, NULL, '1629658850', '2021-08-22 12:00:50', '2021-08-22 12:00:50'),
(41, 'Ab est provident co', 'West Java', 'Bandung', 'Iste in laborum Vel', 'Cupiditate in in acc', '-', 'JNE', '+1 (864) 471-4734', NULL, 1, NULL, NULL, '1629658876', '2021-08-22 12:01:16', '2021-08-22 12:01:16'),
(42, 'Ab est provident co', 'West Java', 'Bandung', 'Iste in laborum Vel', 'Cupiditate in in acc', '-', 'JNE', '+1 (864) 471-4734', NULL, 1, NULL, NULL, '1629658924', '2021-08-22 12:02:04', '2021-08-22 12:02:04'),
(43, 'Ab est provident co', 'West Java', 'Bandung', 'Iste in laborum Vel', 'Cupiditate in in acc', '-', 'JNE', '+1 (864) 471-4734', NULL, 1, NULL, NULL, '1629659219', '2021-08-22 12:07:00', '2021-08-22 12:07:00'),
(44, 'Ab est provident co', 'West Java', 'Bandung', 'Iste in laborum Vel', 'Cupiditate in in acc', '-', 'JNE', '+1 (864) 471-4734', NULL, 1, NULL, NULL, '1629659238', '2021-08-22 12:07:18', '2021-08-22 12:07:18'),
(45, 'Commodi sint illum', 'West Java', 'Bandung', 'Eos accusantium eos', 'Sed sed ut nostrud e', '-', 'JNE', '+1 (422) 386-4539', NULL, 1, NULL, NULL, '1629659280', '2021-08-22 12:08:00', '2021-08-22 12:08:00'),
(46, 'Commodi sint illum', 'West Java', 'Bandung', 'Eos accusantium eos', 'Sed sed ut nostrud e', '-', 'JNE', '+1 (422) 386-4539', NULL, 1, NULL, NULL, '1629659298', '2021-08-22 12:08:18', '2021-08-22 12:08:18'),
(47, 'Impedit est qui no', 'West Java', 'Bandung', 'Sint eum aut do fuga', 'Sit voluptatum ad e', '-', 'JNE', '+1 (885) 502-2638', NULL, 1, NULL, NULL, '1629659322', '2021-08-22 12:08:42', '2021-08-22 12:08:42'),
(48, 'Impedit est qui no', 'West Java', 'Bandung', 'Sint eum aut do fuga', 'Sit voluptatum ad e', '-', 'JNE', '+1 (885) 502-2638', NULL, 1, NULL, NULL, '1629659395', '2021-08-22 12:09:55', '2021-08-22 12:09:55'),
(49, 'Impedit est qui no', 'West Java', 'Bandung', 'Sint eum aut do fuga', 'Sit voluptatum ad e', '-', 'JNE', '+1 (885) 502-2638', NULL, 1, NULL, NULL, '1629659434', '2021-08-22 12:10:34', '2021-08-22 12:10:34'),
(50, 'Impedit est qui no', 'West Java', 'Bandung', 'Sint eum aut do fuga', 'Sit voluptatum ad e', '-', 'JNE', '+1 (885) 502-2638', NULL, 1, NULL, NULL, '1629659563', '2021-08-22 12:12:43', '2021-08-22 12:12:43'),
(51, 'Impedit est qui no', 'West Java', 'Bandung', 'Sint eum aut do fuga', 'Sit voluptatum ad e', '-', 'JNE', '+1 (885) 502-2638', NULL, 1, NULL, NULL, '1629659598', '2021-08-22 12:13:18', '2021-08-22 12:13:18'),
(52, 'Impedit est qui no', 'West Java', 'Bandung', 'Sint eum aut do fuga', 'Sit voluptatum ad e', '-', 'JNE', '+1 (885) 502-2638', NULL, 1, NULL, NULL, '1629659635', '2021-08-22 12:13:55', '2021-08-22 12:13:55'),
(53, 'Impedit est qui no', 'West Java', 'Bandung', 'Sint eum aut do fuga', 'Sit voluptatum ad e', '-', 'JNE', '+1 (885) 502-2638', NULL, 1, NULL, NULL, '1629659653', '2021-08-22 12:14:13', '2021-08-22 12:14:13'),
(54, 'Impedit est qui no', 'West Java', 'Bandung', 'Sint eum aut do fuga', 'Sit voluptatum ad e', '-', 'JNE', '+1 (885) 502-2638', NULL, 1, NULL, NULL, '1629659689', '2021-08-22 12:14:49', '2021-08-22 12:14:49'),
(55, 'Impedit est qui no', 'West Java', 'Bandung', 'Sint eum aut do fuga', 'Sit voluptatum ad e', '-', 'JNE', '+1 (885) 502-2638', NULL, 1, NULL, NULL, '1629659704', '2021-08-22 12:15:04', '2021-08-22 12:15:04'),
(56, 'Impedit est qui no', 'West Java', 'Bandung', 'Sint eum aut do fuga', 'Sit voluptatum ad e', '-', 'JNE', '+1 (885) 502-2638', NULL, 1, NULL, NULL, '1629659755', '2021-08-22 12:15:55', '2021-08-22 12:15:55'),
(57, 'Impedit est qui no', 'West Java', 'Bandung', 'Sint eum aut do fuga', 'Sit voluptatum ad e', '-', 'JNE', '+1 (885) 502-2638', NULL, 1, NULL, NULL, '1629659800', '2021-08-22 12:16:40', '2021-08-22 12:16:40'),
(58, 'Impedit est qui no', 'West Java', 'Bandung', 'Sint eum aut do fuga', 'Sit voluptatum ad e', '-', 'JNE', '+1 (885) 502-2638', NULL, 1, NULL, NULL, '1629659819', '2021-08-22 12:16:59', '2021-08-22 12:16:59'),
(59, 'Impedit est qui no', 'West Java', 'Bandung', 'Sint eum aut do fuga', 'Sit voluptatum ad e', '-', 'JNE', '+1 (885) 502-2638', NULL, 1, NULL, NULL, '1629659876', '2021-08-22 12:17:56', '2021-08-22 12:17:56'),
(60, 'Impedit est qui no', 'West Java', 'Bandung', 'Sint eum aut do fuga', 'Sit voluptatum ad e', '-', 'JNE', '+1 (885) 502-2638', NULL, 1, NULL, NULL, '1629659919', '2021-08-22 12:18:39', '2021-08-22 12:18:39'),
(61, 'Impedit est qui no', 'West Java', 'Bandung', 'Sint eum aut do fuga', 'Sit voluptatum ad e', '-', 'JNE', '+1 (885) 502-2638', NULL, 1, NULL, NULL, '1629660066', '2021-08-22 12:21:06', '2021-08-22 12:21:06'),
(62, 'Impedit est qui no', 'West Java', 'Bandung', 'Sint eum aut do fuga', 'Sit voluptatum ad e', '-', 'JNE', '+1 (885) 502-2638', NULL, 1, NULL, NULL, '1629660120', '2021-08-22 12:22:00', '2021-08-22 12:22:00'),
(63, 'Voluptate vero asper', 'West Java', 'Bandung', 'Quia ipsum molestiae', 'Quo qui architecto c', '-', 'JNE', '+1 (204) 525-4776', NULL, 1, NULL, NULL, '1629660256', '2021-08-22 12:24:16', '2021-08-22 12:24:16'),
(64, 'Id ea id et culpa vo', 'West Java', 'Bandung', 'Laudantium qui volu', 'Reprehenderit et acc', '-', 'JNE', '+1 (425) 348-3151', NULL, 1, NULL, NULL, '1629751305', '2021-08-23 13:41:45', '2021-08-23 13:41:45'),
(65, 'Soluta consectetur', 'West Java', 'Bandung', 'Non sunt odit ut est', 'Nisi neque fugiat f', '-', 'JNE', '+1 (889) 826-2019', NULL, 1, NULL, NULL, '1629783234', '2021-08-23 22:33:54', '2021-08-23 22:33:54'),
(66, 'Soluta consectetur', 'West Java', 'Bandung', 'Non sunt odit ut est', 'Nisi neque fugiat f', '-', 'JNE', '+1 (889) 826-2019', NULL, 1, NULL, NULL, '1629783499', '2021-08-23 22:38:21', '2021-08-23 22:38:21'),
(67, 'Soluta consectetur', 'West Java', 'Bandung', 'Non sunt odit ut est', 'Nisi neque fugiat f', '-', 'JNE', '+1 (889) 826-2019', NULL, 1, NULL, NULL, '1629783514', '2021-08-23 22:38:34', '2021-08-23 22:38:34'),
(68, 'Enim sit aut provid', 'West Java', 'Bandung', 'Quis rerum ducimus', 'Qui eaque officia il', '-', 'JNE', '+1 (573) 603-5952', NULL, 3, NULL, NULL, '1630710705', '2021-09-03 16:11:45', '2021-09-03 16:11:45'),
(69, 'Beatae minus consequ', 'West Java', 'Bandung', 'Enim mollitia ipsa', 'Quia anim aut evenie', '343425465', 'JNE', '+1 (584) 746-5051', NULL, 3, NULL, 'shipping', '1630779670', '2021-09-04 11:21:10', '2021-09-05 13:23:06'),
(70, 'In nihil sit qui con', 'West Java', 'Bandung', 'Veritatis consequatu', 'Molestiae omnis eum', '-', 'JNE', '+1 (771) 572-1423', 'payment_prove/61346bd8a3867KTMDIGITAL.PNG', 3, NULL, NULL, '1630825433', '2021-09-05 00:03:53', '2021-09-05 00:03:53'),
(71, 'Fugiat nemo officiis', 'West Java', 'Bandung', 'Dolore esse volupta', 'Et illo veritatis eu', '-', 'JNE', '+1 (823) 715-4355', 'payment_prove/61346c27e7893FOTO FORMAL.jpeg', 3, NULL, NULL, '1630825511', '2021-09-05 00:05:11', '2021-09-05 00:05:11'),
(72, 'Jl Telekomunikasi', 'West Java', 'Bandung', '22413', 'Indonesia', '-', 'JNE', '0876253344', 'payment_prove/613523333cc55rice-3506194_1920.jpg', 3, NULL, NULL, '1630872371', '2021-09-05 13:06:11', '2021-09-05 13:06:11'),
(73, 'Nisi error in omnis', 'West Kalimantan', 'Kupang', 'Quasi adipisicing re', 'Eaque est id modi m', '-', 'JNE', '+1 (383) 275-4046', 'payment_prove/613523e699e78edible-fruit-1938193_1920.jpg', 1, NULL, NULL, '1630872550', '2021-09-05 13:09:10', '2021-09-05 13:09:10'),
(74, 'Jl Telekomunikasi', 'West Java', 'Bandung', '22413', 'Indonesia', '-', 'JNE', '0876253344', 'payment_prove/613526393a482pistachios-3223610_1920.jpg', 20, NULL, NULL, '1630873145', '2021-09-05 13:19:05', '2021-09-05 13:19:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('Kube','Admin') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `address`, `role`, `photo`, `store_id`, `created_at`, `updated_at`) VALUES
(1, 'Ela Nadila', 'ela@mail.com', '$2y$10$BNgDmgYKKHSlB2Qq0YaLe.Z/eVsmoOLcHHXNTWQIxNE8Gpf6mN89u', '081234567', 'Sukapura telkom university', 'Kube', NULL, 2, NULL, NULL),
(3, 'Shantika', 'shantika@mail.com', '$2y$10$0uQdb3G3unXK2lhbsSJ1UOUQbhhuHO/aOmHSawWRobha/9TojQpiK', '0834343434', 'Jalan Radio telkom university', 'Kube', NULL, 1, NULL, NULL),
(4, 'Admin Utama', 'admin@mail.com', '$2y$10$EpHr3V6LQrO1chP7OevXOuwrss4.J4UKJ0bVE/AwyjIXkn/R1zlXa', '08989898989', 'Bojong Soang telkom university', 'Admin', NULL, 4, NULL, NULL),
(20, 'Bagaskara', 'bagas@mail.com', '$2y$10$sGs3QuDfH9cozbcqs3ZLzu2hx0zyd6w9Wr00QFocyxOUUG6N6Ozs6', NULL, NULL, 'Kube', NULL, 18, '2021-09-05 13:15:08', '2021-09-05 13:15:08');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `categories_store`
--
ALTER TABLE `categories_store`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product_transactions`
--
ALTER TABLE `product_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transactions`
--
ALTER TABLE `transactions`
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
-- AUTO_INCREMENT untuk tabel `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `categories_store`
--
ALTER TABLE `categories_store`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `product_transactions`
--
ALTER TABLE `product_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `stores`
--
ALTER TABLE `stores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

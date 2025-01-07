-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Des 2023 pada 16.36
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cibarcell`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`adminid`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `customerid` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `zipcode` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`customerid`, `firstname`, `lastname`, `address`, `country`, `zipcode`, `mobile`, `email`, `password`) VALUES
(1, 'Aziz', 'Maulana', 'depok kabupaten cirebon', 'jawa barat', '45155', '0831487134738', 'aziz@gmail.com', 'aziz123'),
(5, 'kui', 'lana', 'jawa', 'jawar', '4515', '08382408245', 'kui@gmail.com', 'kui123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `customerid` text NOT NULL,
  `pkirim` text NOT NULL,
  `address` text NOT NULL,
  `amount` text NOT NULL,
  `order_id` text NOT NULL,
  `transaction_status` text NOT NULL,
  `transaction_id` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_color` varchar(50) NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_color`, `product_image`, `brand`, `category`) VALUES
(162, 'Casing Magsafe Lens iPhone 11 12 13 14 15 PRO MAX ', '120000', 'Deep Purple', '16508083686620041Casing Magsafe Lens iPhone 11 12 13 14 15 PRO MAX PLUS Deep Purple 120.000.jpg', 'Paradise', 'football'),
(668, 'Casing Magsafe Lens iPhone 11 12 13 14 15 PRO MAX ', '120000', 'Deep Purple', '7236174877751977Casing Magsafe Lens iPhone 11 12 13 14 15 PRO MAX PLUS Deep Purple 120.000.jpg', 'Apple', 'feature'),
(679, 'Aolon 15W Qi Charger iPhone Wireless Charger', '56000', 'Black', '15534215241385201Aolon 15W Qi Charger iPhone Wireless Charger hitam 56.000.jpg', 'Aolon', 'football'),
(701, 'Samsung Galaxy Buds Pro R190', '155000', 'Purple', '56104305478280676Samsung Galaxy Buds Pro R190 purple 155.000.jpg', 'Samsung', 'feature'),
(748, 'Sarung Jempol Memo FS04 isi 2 pcs Gaming Elastis A', '35000', 'Silver', '39386181197776195Sarung Jempol Memo FS04 isi 2 pcs Finger Sleeves Gaming Elastis Anti Keringat PUBG ML FF silver 25.000.jpg', 'SJ Group', 'football'),
(880, 'Samsung Galaxy watch Active 2 44 mm', '1950000', 'Silver', '79797685217349725Samsung Galaxy watch Active 2 44 mm silver 1.950.000.jpg', 'Samsung', 'feature'),
(971, 'IPhone 14 Pro Max 128GB', '19699000', 'Black', '7502559371807iphone 14 promax.jpg', 'Apple', 'basketball'),
(1119, 'IPad Pro 12,9 inci (gen-5) 1TB', '30999000', 'Silver', '35870173238551939iphad.jpg', 'Apple', 'basketball'),
(2849, 'Samsung Galaxy A23 5G Smartphone [8/128 GB/N]', '2899000', 'Black', '22545161915383870galaxy a23.jpg', 'Samsung', 'basketball'),
(4144, 'Samsung Galaxy watch Active 2 44 mm', '1950000', 'Silver', '91030261001359493Samsung Galaxy watch Active 2 44 mm silver 1.950.000.jpg', 'Samsung', 'Running'),
(4172, 'POWER BANK ROBOT RT180 10000mAh', '115000', 'Green', '9417103426024694POWER BANK ROBOT RT180 10000mAh green 115.000.jpg', 'Robot', 'football'),
(4411, 'Apple Watch Ultra with Alpine Loop', '13999000', 'Orange', '5108740727780349Apple Watch Ultra with Alpine Loop orange 13.999.000.jpg', 'Apple', 'Running'),
(4709, 'Softcase SAMSUNG S23 S22 S21 S23FE S23+ S23Ultra S', '93000', 'Transparent', '69771289710894201oftcase TEMPAT KARTU SAMSUNG S23 S22 S21 S23FE S23+ S23Ultra S22+ S22 Ultra transparent 93.000.jpg', 'Samsung', 'football'),
(6073, 'Samsung Galaxy S23 Ultra 12/256GB RAM 12GB ROM 256', '17099000', 'Phantom Black', '5134266773745992galaxy s23ultra.jpg', 'Samsung', 'feature'),
(6811, 'Joystick X3', '83555', 'Black', '44268814303240659Joystick X3 hitam 83.555.jpg', 'Importin', 'football'),
(7832, 'Xiaomi Redmi Watch 3 Bluetooth Phone Call 1.75 inc', '1109000', 'Black', '63192930388308898Xiaomi Redmi Watch 3 Bluetooth Phone Call 1.75 inch AMOLED with GPS black 1.109.000.jpg', 'Xiaomi', 'Running'),
(9099, 'Charger Xiaomi 120 Watt Type C', '96046', 'White', '11740617434128773Charger Xiaomi 120 Watt Type C putih 96.046.jpg', 'Xiaomi', 'football'),
(65693, 'Redmi Buds 4 Lite True Wireless Bluetooth Earphone', '199000', 'Black', '14767825769760846Redmi Buds 4 Lite True Wireless Bluetooth Earphones TWS black 199.000.jpg', 'Xiaomi', 'feature'),
(67817, 'Samsung Galaxy Buds Pro R190', '155000', 'Purple', '69264823575053598Samsung Galaxy Buds Pro R190 purple 155.000.jpg', 'Samsung', 'football'),
(70076, 'Apple Watch Series 8', '6999000', 'Silver', '4223420124372070Apple Watch Series 8 silver 6.999.000.jpg', 'Apple', 'Running'),
(75070, 'Samsung Galaxy S23 Ultra 12/256GB RAM 12GB ROM 256', '17099000', 'Phantom Black', '93866292756651189galaxy s23ultra.jpg', 'Samsung', 'basketball'),
(377429, 'Redmi Buds 4 Lite True Wireless Bluetooth Earphone', '199000', 'Black', '69856479905899653Redmi Buds 4 Lite True Wireless Bluetooth Earphones TWS black 199.000.jpg', 'Xiaomi', 'football'),
(386949, 'SAMSUNG GEAR SPORT SMARTWATCH FULLSET', '1300000', 'Black', '25757348198835650SAMSUNG GEAR SPORT SMARTWATCH FULLSET RESMI SEIN NEW OLD STOCK black 1.300.000.jpg', 'Samsung', 'Running'),
(406916, 'Xiaomi Smart Band 8 AMOLED', '506544', 'Black', '2716465971412359Xiaomi Smart Band 8 AMOLED black 506.544.jpg', 'Xiaomi', 'Running'),
(453954, 'Apple Watch Nike SE', '3499000', 'Silver', '43673321948613134Apple Watch Nike SE silver 3.499.000.jpg', 'Apple', 'Running'),
(479949, 'Samsung Galaxy Z Fold4 5G Smartphone [12GB/512GB]', '19999000', 'Beige', '36861015930925480galaxy zfold.jpg', 'Samsung', 'basketball'),
(613382, 'IPhone 14 Pro Max 128GB', '19699000', 'Black', '94071631552693364iphone 14 promax.jpg', 'Apple', 'feature'),
(4947160, 'IPhone 15 Pro Max 512GB', '29999000', 'Gold', '557005712549738515 promax.jpeg', 'Apple', 'basketball');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stock`
--

INSERT INTO `stock` (`stock_id`, `product_id`, `qty`) VALUES
(42, 971, 998),
(43, 4947160, 989),
(44, 1119, 577),
(45, 75070, 898),
(46, 2849, 230),
(47, 479949, 447),
(48, 748, 1200),
(49, 6811, 466),
(50, 4172, 874),
(51, 9099, 8374),
(52, 679, 384),
(53, 162, 826),
(54, 4709, 492),
(55, 377429, 827),
(56, 67817, 845),
(57, 386949, 823),
(58, 4144, 472),
(59, 7832, 628),
(60, 406916, 836),
(61, 453954, 947),
(62, 70076, 947),
(63, 4411, 947),
(64, 701, 841),
(65, 880, 835),
(66, 668, 728),
(67, 65693, 388),
(68, 613382, 938),
(69, 6073, 683),
(70, 0, 728),
(71, 448285, 48289),
(72, 42494162, 32);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `order_stat` varchar(100) NOT NULL,
  `order_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction_detail`
--

CREATE TABLE `transaction_detail` (
  `transacton_detail_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_qty` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerid`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indeks untuk tabel `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indeks untuk tabel `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indeks untuk tabel `transaction_detail`
--
ALTER TABLE `transaction_detail`
  ADD PRIMARY KEY (`transacton_detail_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `customerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `transaction_detail`
--
ALTER TABLE `transaction_detail`
  MODIFY `transacton_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=335;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--
-- Table structure for table `products`
--


CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Dispaly Board 1', 'DB1', 'product-images/TVMotherBoard1.jpeg', 1500.00),
(2, 'Dispaly Board 3', 'DB3', 'product-images/TVMotherBoard2.jpeg', 800.00),
(3, 'Dispaly Board 2', 'DB2', 'product-images/TVMotherBoard3.jpeg', 300.00),
(4, 'Dispaly Board 4', 'DB4', 'product-images/TVMotherBoard4.jpeg', 800.00),
(7, 'Dispaly Board 5', 'DB5', 'product-images/TVMotherBoard5.jpeg', 1500.00),
(8, 'Dispaly Board 6', 'DB6', 'product-images/TVMotherBoard6.jpeg', 1500.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Table structure for table `customer`

CREATE TABLE `customer` (
  `UserID` int(11) NOT NULL,
  `Name` varchar(11) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Acc_Number` int(25) NOT NULL,
  `IFSC` varchar(20) NOT NULL,
  `Balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`UserID`, `Name`, `Email`, `Acc_Number`, `IFSC`, `Balance`) VALUES
(448966, 'Shruti', 'ShrutiJii@gmail.com', 14398, 'ASQ9981562', 13900),
(346578, 'Kalki', 'KingHoonMein@gmail.com', 223367, 'AS189231', 40800),
(346569, 'Protima', 'JHukegaNahi@gmail.com', 224456, 'AS189754V', 91000),
(9045864, 'Amar', 'MaregaSala990@gmail.com', 349456, 'AC3475370D', 86100),
(9045236, 'Sanju', 'LoverManegaSala@gmail.com', 349756, 'AC3465890D', 91000),
(446516, 'VishKanya', 'ZeherPilayegaSala169@gmail.com', 1431221, 'WWQ9551562', 8000),
(841652, 'Arjun', 'Arjun124@outlook.com', 3162123, 'SD9856785X', 903450),
(876815, 'Rahi', 'Rahi45v@gmial.com', 3294892, 'AS576457S', 34400),
(847543, 'Arjuna', 'j.Arjuna@outlook.com', 8962123, 'SD985675Y', 89800),
(87653, 'Abhishek', 'dev.abhishek@yahoo.com', 9569876, 'SA875436SD', 74360);

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `s_name` varchar(10) NOT NULL,
  `s_acc_no` int(11) NOT NULL,
  `r_name` varchar(10) NOT NULL,
  `r_acc_no` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`s_name`, `s_acc_no`, `r_name`, `r_acc_no`, `amount`, `date_time`) VALUES
('Kalki', 223367, 'Protima', 224456, 200, '2022-01-02 09:40:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Acc_Number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

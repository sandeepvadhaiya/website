-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2020 at 12:33 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `aboutus_id` int(11) NOT NULL,
  `heading1` varchar(200) NOT NULL,
  `description1` longtext NOT NULL,
  `heading2` varchar(200) NOT NULL,
  `description2` longtext NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`aboutus_id`, `heading1`, `description1`, `heading2`, `description2`, `image`) VALUES
(1, 'Our philosophy ', 'Event Planner Ltd is an event logistics and marketing company which was formed back in 2013. The company offers A-Z event planning services from a team of experienced and energetic event planners, suppliers, venues and more. One of the main reasons behind the success of Event Planner is the fact that the team does not charge fees to its clients! With the number of events we organise, Event Planner Ltd does not need to add exorbitant fees and mark-ups to make its profit margins. This ensures that our clients list, which is constantly growing, make regular use of our services.', 'Know more about us', '     We are the most experienced team of peer-to-peer fundraising event experts in the nation.\r\n\r\nOur unparalleled Event Management Specialists know how to plan, promote and run an event that will exceed your goals.\r\n\r\nFrom cutting-edge marketing campaigns and fundraising technology to personalized customer service to an agile, adaptable on-event production team, we’ve got you covered.', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `username`, `email`, `password`) VALUES
(1, 'sandipvadhiya', 'sandip12@gmail.com', '1234'),
(3, 'krishna', 'goswamikrishna064@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `starttime` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `people` varchar(20) NOT NULL,
  `status` int(1) NOT NULL,
  `bookdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `totalamount` varchar(20) NOT NULL,
  `package_id` int(10) NOT NULL,
  `c_reason` longtext NOT NULL,
  `c_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `name`, `phoneno`, `email`, `address`, `starttime`, `date`, `people`, `status`, `bookdate`, `totalamount`, `package_id`, `c_reason`, `c_date`) VALUES
(28, 'pradip', '9727402438', 'pradip12@gmail.com', 'vatar', ' 9 a.m', '2020-07-31', '100', 2, '2020-07-24 14:01:58', '', 21, 'sfasdf', '2020-07-24 08:24:46'),
(32, 'a', '2313', 'pradip12@gmail.com', 'adasda', ' 11 a.m', '2020-08-08', '20', 1, '2020-07-25 01:08:54', '135000', 14, '', '2020-07-24 14:13:47'),
(33, 'sandeep', '9727402438', 'sandip12@gmail.com', 'vatar', ' 9 a.m', '2020-08-06', '10', 1, '2020-07-25 01:11:08', '130000', 14, '', '2020-07-25 01:07:35'),
(34, 'krishna', '9727402438', 'krishna@gmail.com', 'kunta', ' 7 a.m', '2020-08-08', '50', 2, '2020-07-26 02:02:48', '150000', 14, 'no needed', '2020-07-26 01:43:46'),
(35, 'krishna', '9727402438', 'krishna@gmail.com', 'daman', ' 9 a.m', '2020-08-09', '30', 0, '2020-07-26 01:48:46', '140000', 21, '', '2020-07-26 01:48:46'),
(36, 'krishna', '9722463464', 'krishna@gmail.com', 'vatar', ' 7 a.m', '2020-08-07', '40', 1, '2020-07-26 02:04:33', '129000', 22, '', '2020-07-26 01:56:32'),
(37, 'krishna', '9722463464', 'krishna@gmail.com', 'kunta', ' 12 p.m', '2020-08-05', '10', 2, '2020-07-26 02:08:27', '126000', 22, '', '2020-07-26 01:59:24'),
(38, 'brijesh mehta', '9727402438', 'pradip12@gmail.com', 'chala, vapi', ' 8 p.m', '2020-08-16', '20', 0, '2020-07-27 03:38:29', '139000', 14, '', '2020-07-27 03:38:29'),
(39, 'sandeep', '9727402438', 'pradip12@gmail.com', 'va', ' 10 a.m', '2020-08-15', '100', 0, '2020-08-02 10:20:16', '75000', 23, '', '2020-08-02 10:20:16');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `username`, `phoneno`, `email`, `password`) VALUES
(2, 'krishna', '972732305', 'krishna@gmail.com', 'krishna123'),
(8, 'sandip', '9727402438', 'sandipvadhiya@gmail.com', '1234'),
(10, 'vishalmehta', '9722463464', 'vishal12@gmail.com', '1234'),
(11, 'deepak', '9727402438', 'deepak12@gmail.com', '1234'),
(12, 'rajnishsingh', '9727402438', 'rajnish1@gmail.com', '1234'),
(13, 'pradip', '9727402438', 'pradip12@gmail.com', 'pr@dip');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(10) NOT NULL,
  `newsid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` mediumtext NOT NULL,
  `postingdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `newsid`, `name`, `email`, `comment`, `postingdate`) VALUES
(6, 6, 'sandip12@gmail.com', 'vishal12@gmail.com', 'cZXcZXcZc', '2020-07-23 08:57:11'),
(7, 7, 'sandeep', 'sandip12@gmail.com', 'asdfasdfas', '2020-07-26 12:55:20'),
(8, 8, 'pradip', 'pradip12@gmail.com', 'asfasf', '2020-07-26 16:33:22'),
(9, 10, 'krishna', 'krishna12@gmail.com', 'afsd', '2020-07-26 16:48:00'),
(10, 8, 'sandeep', 'sandip12@gmail.com', 'werweqr', '2020-08-02 10:09:38');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contactus_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contactus_id`, `name`, `email`, `message`) VALUES
(1, 'krishna', 'krishna12@gmail.com', 'hii whats up'),
(9, 'rajnish', 'rajnish1243@gmail.com', 'asdflajsdklfasdfasdfasd\r\nfas\r\nd');

-- --------------------------------------------------------

--
-- Table structure for table `contactuspage`
--

CREATE TABLE `contactuspage` (
  `contactuspage_id` int(11) NOT NULL,
  `heading1` varchar(200) NOT NULL,
  `description1` longtext NOT NULL,
  `heading2` varchar(200) NOT NULL,
  `description2` longtext NOT NULL,
  `phone` bigint(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactuspage`
--

INSERT INTO `contactuspage` (`contactuspage_id`, `heading1`, `description1`, `heading2`, `description2`, `phone`, `address`, `email`) VALUES
(1, 'contact us', 'contact for event management  \r\nmanager\r\n', 'find address', '  Near vapi public school, vatar main road, vatar, vapi : 396191\r\nvalsad, gujarat\r\n', 972732305, 'Near vapi public school, vatar main road, vatar', 'shiv123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `eventtype`
--

CREATE TABLE `eventtype` (
  `etype_id` int(10) NOT NULL,
  `ename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eventtype`
--

INSERT INTO `eventtype` (`etype_id`, `ename`) VALUES
(8, 'marriage event'),
(9, 'birthday event'),
(10, 'meeting event '),
(12, 'kids parties'),
(13, 'birthday'),
(14, 'marriage'),
(15, 'meeting');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `homepage_id` int(11) NOT NULL,
  `description1` longtext NOT NULL,
  `description2` longtext NOT NULL,
  `description3` longtext NOT NULL,
  `description4` longtext NOT NULL,
  `description5` longtext NOT NULL,
  `description6` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`homepage_id`, `description1`, `description2`, `description3`, `description4`, `description5`, `description6`) VALUES
(1, 'Fairy-tale weddings are a result of months of planning, imagination, insight and hard work. You can make your wedding as wonderful as you want it to be by hiring the right wedding planning company. Like a movie production, a fairy-tale wedding includes many details that need to be taken care of to make the final event picture perfect. Starting with your vision of what you want your wedding to be, we work together every step of the way to build your dream wedding. Wedding planning and production is no easy feat. That’s why hiring a wedding planner is best if you want a hassle-free wedding day.', ' Birthday parties have moved beyond cakes and candles today. They’re auspicious events that need to be planned and executed with the utmost care.\r\n\r\nWhether it’s the first birthday of a child, the 60 th birthday of a parent, or a surprise party for a better half, we’ve a treasure-chest of services to assist you in every way and make it memorable for your family and guests.', 'Corporate event planners are responsible for organizing and managing a wide range of events, including conferences, seminars, product launches, press conferences, annual general meetings, shareholder briefings, employee or industry award ceremonies, and customer social events', '     A good welcome message establishes the groundwork for a long-term relationship. It can also convince users of the value you offer them. Often, people view a new user as a win, thinking the job is done, but in reality, the work has just begun.', ' Each of our clients is assigned an Event Manager, who is responsible for working with you throughout the process and keeping you updated at every step.', '          ');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `event` varchar(20) NOT NULL,
  `mobile_no` bigint(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`m_id`, `m_name`, `address`, `gender`, `event`, `mobile_no`, `email`, `password`, `date`) VALUES
(17, 'rajnish', 'vapi', 'male', '   marriage', 9345563758, 'rajnish12@gmail.com', '1234', '2020-04-04'),
(18, 'kunal', 'daman', 'male', '  birthday', 9345563758, 'kunal12@gmail.com', '1234', '2020-03-28'),
(19, 'vishal', 'vapi', 'male', '  marriage', 9727402438, 'vishal12@gmail.com', '1234', '2020-03-17'),
(20, 'krishna', 'kunta', 'male', ' meeting', 9727402438, 'krishna12@gmail.com', '1234', '2020-03-18'),
(29, 'pradip', 'vatar', 'male', ' birthday', 9345563758, 'pradip12@gmail.com', '1234', '2020-07-27');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(10) NOT NULL,
  `posttitle` longtext NOT NULL,
  `postdetails` longtext NOT NULL,
  `postingdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_active` int(1) NOT NULL,
  `posturl` mediumtext NOT NULL,
  `postimage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `posttitle`, `postdetails`, `postingdate`, `is_active`, `posturl`, `postimage`) VALUES
(7, 'merriage', '<p>discount is 45 % off</p>', '2020-07-26 08:00:10', 1, '', 'indianwedding.jpg'),
(8, 'meeting cello', '<p>ds</p><p><br></p>', '2020-07-26 16:34:10', 1, '', 'hyatt-ziva-cancun.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `package_id` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `tname` varchar(50) NOT NULL,
  `tprice` int(20) NOT NULL,
  `dprice` int(20) NOT NULL,
  `pdescription` longtext NOT NULL,
  `hprice` int(20) NOT NULL,
  `etype` varchar(20) NOT NULL,
  `pimg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`package_id`, `pname`, `tname`, `tprice`, `dprice`, `pdescription`, `hprice`, `etype`, `pimg`) VALUES
(14, 'special package birthday', 'gujrati', 700, 100000, '<p>sandip sdfhfg</p><p>sandip</p>', 25000, 'birthday', 'birthday-party-event-catering-services.jpg'),
(21, 'marriage', 'panjabi', 500, 100000, '<p>fasdfasdf df</p><p>asdf</p><p>asd</p>', 25000, 'marriage', 'Indian-wedding-Stock-Photo-01.jpg'),
(23, 'meeting', 'panjabi', 300, 20000, '<p>services&nbsp;</p><p>maids&nbsp;</p><p>lunch</p><p>meeting hall&nbsp;</p><p>people capacity : 200</p><p>&nbsp;</p>', 25000, 'meeting', 'download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_album`
--

CREATE TABLE `tbl_album` (
  `albumid` int(10) NOT NULL,
  `name` varchar(500) NOT NULL,
  `adesc` varchar(1000) NOT NULL,
  `image` varchar(500) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_album`
--

INSERT INTO `tbl_album` (`albumid`, `name`, `adesc`, `image`, `date`, `status`) VALUES
(1, 'marriage', 'hey \r\nthis is marriage album', '1887483097marriage.jpg', '2020-04-22 11:58:47', 'delete'),
(2, 'birthday partires', 'birthday party', '491017666062719a-Inline.jpg', '2020-04-22 12:45:27', 'process'),
(3, 'meeting', 'meeting  photos', '2047836586function-rooms-clover-suite.jpg', '2020-07-23 10:40:16', 'delete'),
(4, 'marriage', 'sdfasd', '883824472e.jpg', '2020-07-26 09:02:10', 'delete'),
(5, 'birthday partires', 'asdf ;lkj;', '1482099127Indian-Wedding!.jpg', '2020-08-02 06:01:22', 'delete'),
(6, 'marriage', 'marriages', '1615032208indianwedding.jpg', '2020-08-02 06:32:50', 'process');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `gid` int(10) NOT NULL,
  `aid` int(10) NOT NULL,
  `gname` varchar(1000) NOT NULL,
  `gimages` varchar(1000) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`gid`, `aid`, `gname`, `gimages`, `date`, `status`) VALUES
(1, 1, 'marriage', '01789058289ranv.jpeg', '2020-04-22 12:06:54', 'delete'),
(2, 2, 'birthday partires', '0270443806h.jpeg', '2020-04-22 12:45:57', 'delete'),
(3, 2, 'birthday partires', '02098611276i.jpg', '2020-04-22 12:46:29', 'process'),
(4, 2, 'birthday partires', '11235603368Spl-Chocolate-Party-cake.jpg', '2020-04-22 12:46:29', 'process'),
(5, 2, 'birthday partires', '2503340272t.jpg', '2020-04-22 12:46:29', 'process'),
(6, 2, 'birthday partires', '0995720074birthday-party-event-catering-services.jpg', '2020-04-22 12:47:01', 'process'),
(7, 2, 'birthday partires', '130387692party-candles-slice-birthday-cake-5860601.jpg', '2020-04-22 12:47:01', 'process'),
(8, 3, 'meeting', '0710244846e.jpg', '2020-07-23 10:41:01', 'process'),
(9, 3, 'meeting', '191370708function-rooms-clover-suite.jpg', '2020-07-23 10:41:01', 'process'),
(10, 3, 'meeting', '2209069585m.jpg', '2020-07-23 10:41:01', 'process'),
(11, 3, 'meeting', '3130679155t.jpg', '2020-07-23 10:41:01', 'process'),
(12, 1, 'marriage', '0231837090e.jpg', '2020-07-26 09:16:40', 'process'),
(13, 1, 'marriage', '01164215926i.jpg', '2020-07-26 09:17:00', 'process'),
(14, 1, 'marriage', '1749976960Indian-Wedding!.jpg', '2020-07-26 09:17:00', 'delete'),
(15, 6, 'marriage', '01513196732hyatt-ziva-cancun.jpg', '2020-08-02 06:37:09', 'process'),
(16, 6, 'marriage', '1654959633i.jpg', '2020-08-02 06:37:09', 'delete');

-- --------------------------------------------------------

--
-- Table structure for table `thali`
--

CREATE TABLE `thali` (
  `thali_id` int(11) NOT NULL,
  `tname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thali`
--

INSERT INTO `thali` (`thali_id`, `tname`) VALUES
(1, 'panjabi'),
(3, 'gujrati'),
(4, 'chinish'),
(5, 'jain'),
(6, 'drink'),
(7, 'chinese'),
(8, 'south indian dish');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`aboutus_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contactus_id`);

--
-- Indexes for table `contactuspage`
--
ALTER TABLE `contactuspage`
  ADD PRIMARY KEY (`contactuspage_id`);

--
-- Indexes for table `eventtype`
--
ALTER TABLE `eventtype`
  ADD PRIMARY KEY (`etype_id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`homepage_id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `tbl_album`
--
ALTER TABLE `tbl_album`
  ADD PRIMARY KEY (`albumid`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `thali`
--
ALTER TABLE `thali`
  ADD PRIMARY KEY (`thali_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `aboutus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contactus_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contactuspage`
--
ALTER TABLE `contactuspage`
  MODIFY `contactuspage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `eventtype`
--
ALTER TABLE `eventtype`
  MODIFY `etype_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_album`
--
ALTER TABLE `tbl_album`
  MODIFY `albumid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `gid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `thali`
--
ALTER TABLE `thali`
  MODIFY `thali_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

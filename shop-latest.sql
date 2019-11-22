-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 22, 2019 at 07:20 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_uname` varchar(100) NOT NULL,
  `a_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_uname`, `a_password`) VALUES
(1, 'dntandan', 'admin@password');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(4) NOT NULL,
  `book_name` varchar(60) NOT NULL,
  `book_subcat` int(4) NOT NULL,
  `book_desc` varchar(1000) NOT NULL,
  `book_publ` varchar(50) NOT NULL,
  `book_isbn` int(11) NOT NULL,
  `book_pages` int(4) NOT NULL,
  `book_price` int(8) NOT NULL,
  `book_img` varchar(100) NOT NULL,
  `book_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_name`, `book_subcat`, `book_desc`, `book_publ`, `book_isbn`, `book_pages`, `book_price`, `book_img`, `book_count`) VALUES
(1, 'Arias - Sharon Olds', 1, 'Following her recent Odes, the Pulitzer Prize-winning poet gives us radical new poems of intimate life and political conscience, of race and class and a mother’s violence.\r\n\r\nThe atom bomb, Breaking Bad, Rasputin, the cervix, her mother’s return from the dead: the peerless Sharon Olds once again takes up subject matter that is both difficult and ordinary, elusive and everywhere. Each aria is shaped by its unique harmonics and moral logic, as Olds stands center stage to sing of sexual pleasure and chance wisdom, and faces the tragic life of our nation and our planet. \r\n\r\n“I cannot say I did not ask / to be born,” begins one aria, which considers how, with what actions, with what thirst, we each ask for a turn, and receive our portion on earth. Olds delivers these pieces with all the passion, anguish, and solo force that make a great performance, in the process enlarging the soul of her reader.\r\n\r\n', 'Signet Classics ', 389456, 135, 196, 'images/books/poetry/arias.jpg', 6),
(2, 'Poemsia - Lang Leav', 1, 'Award-winning Author Lang Leav presents Poemsia, an inspiring YA novel that will make you laugh, cry, and want to share with all your friends!\r\n\r\nVERITY WOLF dreams of being a poet–not that she’d ever admit it to anyone. Her best friend, Jess, thinks she’s definitely got what it takes, while her cat, Zorro, is characteristically indifferent. As for the cute boy she’s just met, he’s about to discover her best kept secret.\r\n\r\nWhen Verity stumbles on an old, mysterious book, Poemsia, she finds herself suddenly thrust into the dizzying world of social media stardom, where poets are the new rock stars and fame is sometimes just a click away.\r\n\r\nInternational bestselling author Lang Leav takes you into the shadowy world of contemporary poetry in this revealing and emotionally charged story about friendship, first love, betrayal, and the courage to follow your dreams.\r\n\r\n', 'Penguin', 389475, 300, 120, 'images/books/poetry/poemsia.jpg', 67),
(3, 'I\'m Rising - Michelle G. Stradford', 1, 'Take back your Power, your Glorious and Rise!\r\n\r\n“I\'m Rising: Determined. Confident. Powerful.” takes the reader on an emotive journey of empowerment through life’s countless triumphs and tribulations.\r\n\r\nAbove all else, it inspires one to tap into their infinite potential so they can overcome any obstacle that appears on their unique path. Through heartfelt storytelling, alliterative diction, and soul-awakening themes, this empathic poetess instills each reader with an unwavering sense of perseverance, courage, and compassion.\r\n\r\nThis uplifting book is more than a mere collection of poetic musings, it serves as a powerful tool of self-love and personal transformation that belongs on every fierce soul’s bookshelf—or better yet, on their nightstand for their daily dose of inspiration each time they rise.\r\nI\'m Rising is organized into three chapters entitled Evolving, Resilience, and Rising to aid in finding those special words meant for us.', 'Dwarka Publicaion', 3336475, 256, 140, 'images/books/poetry/imrising.jpg', 108),
(4, 'Hull  -Xandria Phillips', 1, 'Hull explores emotional impacts of colonialism and racism on the Black queer body and the present-day emotional impacts of enslavement in urban, rural, and international settings. Hull is lyrical, layered, history-ridden, experimental, textured, adorned, ecstatic, and emotionally investigative.\r\n\r\nXandria Phillips is a poet and visual artist from rural Ohio. Hull (Nightboat Books) is their debut poetry collection. They are the author of Reasons for Smoking and the poetry editor of Winter Tangerine. Xandria has received fellowships from Cave Canem, Callaloo, and the Wisconsin Institute for Creative Writing, where they are the First Wave Poetry Fellow.', 'Amazon Books', 3123756, 315, 100, 'images/books/poetry/hull.jpg', 60),
(5, 'Blue Moon - Lee Child', 2, 'Hull explores emotional impacts of colonialism and racism on the Black queer body and the present-day emotional impacts of enslavement in urban, rural, and international settings. Hull is lyrical, layered, history-ridden, experimental, textured, adorned, ecstatic, and emotionally investigative.\r\n\r\nXandria Phillips is a poet and visual artist from rural Ohio. Hull (Nightboat Books) is their debut poetry collection. They are the author of Reasons for Smoking and the poetry editor of Winter Tangerine. Xandria has received fellowships from Cave Canem, Callaloo, and the Wisconsin Institute for Creative Writing, where they are the First Wave Poetry Fellow.', 'Bharti Publication', 4763258, 200, 240, 'images/books/thriller/bluemoon.jpg', 78),
(6, 'The Furies - Katie Lowe', 2, 'Hull explores emotional impacts of colonialism and racism on the Black queer body and the present-day emotional impacts of enslavement in urban, rural, and international settings. Hull is lyrical, layered, history-ridden, experimental, textured, adorned, ecstatic, and emotionally investigative.\r\n\r\nXandria Phillips is a poet and visual artist from rural Ohio. Hull (Nightboat Books) is their debut poetry collection. They are the author of Reasons for Smoking and the poetry editor of Winter Tangerine. Xandria has received fellowships from Cave Canem, Callaloo, and the Wisconsin Institute for Creative Writing, where they are the First Wave Poetry Fellow.', 'Aparna Publication', 1564651, 265, 180, 'images/books/thriller/thefuries.jpg', 22),
(7, 'Ghoster - Jason Arnoop', 2, 'Hull explores emotional impacts of colonialism and racism on the Black queer body and the present-day emotional impacts of enslavement in urban, rural, and international settings. Hull is lyrical, layered, history-ridden, experimental, textured, adorned, ecstatic, and emotionally investigative.\r\n\r\nXandria Phillips is a poet and visual artist from rural Ohio. Hull (Nightboat Books) is their debut poetry collection. They are the author of Reasons for Smoking and the poetry editor of Winter Tangerine. Xandria has received fellowships from Cave Canem, Callaloo, and the Wisconsin Institute for Creative Writing, where they are the First Wave Poetry Fellow.', 'Siddhu Publication', 7335685, 140, 360, 'images/books/thriller/ghoster.jpg', 40),
(8, 'The Tenth Girl - Sara Faring', 2, 'Hull explores emotional impacts of colonialism and racism on the Black queer body and the present-day emotional impacts of enslavement in urban, rural, and international settings. Hull is lyrical, layered, history-ridden, experimental, textured, adorned, ecstatic, and emotionally investigative.\r\n\r\nXandria Phillips is a poet and visual artist from rural Ohio. Hull (Nightboat Books) is their debut poetry collection. They are the author of Reasons for Smoking and the poetry editor of Winter Tangerine. Xandria has received fellowships from Cave Canem, Callaloo, and the Wisconsin Institute for Creative Writing, where they are the First Wave Poetry Fellow.', 'Sharma Publication', 75336, 240, 265, 'images/books/thriller/tenthgirl.jpg', 11),
(9, 'Sapiens - Yuval Noah Harari', 3, 'Hull explores emotional impacts of colonialism and racism on the Black queer body and the present-day emotional impacts of enslavement in urban, rural, and international settings. Hull is lyrical, layered, history-ridden, experimental, textured, adorned, ecstatic, and emotionally investigative.\r\n\r\nXandria Phillips is a poet and visual artist from rural Ohio. Hull (Nightboat Books) is their debut poetry collection. They are the author of Reasons for Smoking and the poetry editor of Winter Tangerine. Xandria has received fellowships from Cave Canem, Callaloo, and the Wisconsin Institute for Creative Writing, where they are the First Wave Poetry Fellow.', 'Dharma Publication', 445975, 1144, 365, 'images/books/history/sapiens.jpg', 74),
(10, 'No Surrender - Christopher Edmund', 3, 'Hull explores emotional impacts of colonialism and racism on the Black queer body and the present-day emotional impacts of enslavement in urban, rural, and international settings. Hull is lyrical, layered, history-ridden, experimental, textured, adorned, ecstatic, and emotionally investigative.\r\n\r\nXandria Phillips is a poet and visual artist from rural Ohio. Hull (Nightboat Books) is their debut poetry collection. They are the author of Reasons for Smoking and the poetry editor of Winter Tangerine. Xandria has received fellowships from Cave Canem, Callaloo, and the Wisconsin Institute for Creative Writing, where they are the First Wave Poetry Fellow.', 'Purple Publication', 531789, 607, 186, 'images/books/history/nosurrender.jpg', 8),
(11, 'Edison - Edmund Morris', 3, 'Hull explores emotional impacts of colonialism and racism on the Black queer body and the present-day emotional impacts of enslavement in urban, rural, and international settings. Hull is lyrical, layered, history-ridden, experimental, textured, adorned, ecstatic, and emotionally investigative.\r\n\r\nXandria Phillips is a poet and visual artist from rural Ohio. Hull (Nightboat Books) is their debut poetry collection. They are the author of Reasons for Smoking and the poetry editor of Winter Tangerine. Xandria has received fellowships from Cave Canem, Callaloo, and the Wisconsin Institute for Creative Writing, where they are the First Wave Poetry Fellow.', 'Morris Publication', 108975, 466, 255, 'images/books/history/edison.jpg', 66),
(12, 'Stolen - Richard Bell', 3, 'Hull explores emotional impacts of colonialism and racism on the Black queer body and the present-day emotional impacts of enslavement in urban, rural, and international settings. Hull is lyrical, layered, history-ridden, experimental, textured, adorned, ecstatic, and emotionally investigative.\r\n\r\nXandria Phillips is a poet and visual artist from rural Ohio. Hull (Nightboat Books) is their debut poetry collection. They are the author of Reasons for Smoking and the poetry editor of Winter Tangerine. Xandria has received fellowships from Cave Canem, Callaloo, and the Wisconsin Institute for Creative Writing, where they are the First Wave Poetry Fellow.', 'Tandan Publication', 854236, 336, 310, 'images/books/history/stolen.jpg', 27),
(13, 'Dear Life - Alice Munro', 4, 'Hull explores emotional impacts of colonialism and racism on the Black queer body and the present-day emotional impacts of enslavement in urban, rural, and international settings. Hull is lyrical, layered, history-ridden, experimental, textured, adorned, ecstatic, and emotionally investigative.\r\n\r\nXandria Phillips is a poet and visual artist from rural Ohio. Hull (Nightboat Books) is their debut poetry collection. They are the author of Reasons for Smoking and the poetry editor of Winter Tangerine. Xandria has received fellowships from Cave Canem, Callaloo, and the Wisconsin Institute for Creative Writing, where they are the First Wave Poetry Fellow.', 'Albert Publication', 99532, 378, 250, 'images/books/shortstory/dearlife.jpg', 27),
(14, 'Fragile Things - Neil Gaiman', 4, 'Hull explores emotional impacts of colonialism and racism on the Black queer body and the present-day emotional impacts of enslavement in urban, rural, and international settings. Hull is lyrical, layered, history-ridden, experimental, textured, adorned, ecstatic, and emotionally investigative.\r\n\r\nXandria Phillips is a poet and visual artist from rural Ohio. Hull (Nightboat Books) is their debut poetry collection. They are the author of Reasons for Smoking and the poetry editor of Winter Tangerine. Xandria has received fellowships from Cave Canem, Callaloo, and the Wisconsin Institute for Creative Writing, where they are the First Wave Poetry Fellow.', 'Simple Publication', 998216, 682, 180, 'images/books/shortstory/fragilethings.jpg', 1),
(15, 'The Grownup - Gillian Flyn', 4, 'Hull explores emotional impacts of colonialism and racism on the Black queer body and the present-day emotional impacts of enslavement in urban, rural, and international settings. Hull is lyrical, layered, history-ridden, experimental, textured, adorned, ecstatic, and emotionally investigative.\r\n\r\nXandria Phillips is a poet and visual artist from rural Ohio. Hull (Nightboat Books) is their debut poetry collection. They are the author of Reasons for Smoking and the poetry editor of Winter Tangerine. Xandria has received fellowships from Cave Canem, Callaloo, and the Wisconsin Institute for Creative Writing, where they are the First Wave Poetry Fellow.', 'Albert Publication', 843456, 701, 220, 'images/books/shortstory/thegrownup.jpg', 33),
(16, 'Get In Trouble - Kelly Link', 4, 'Hull explores emotional impacts of colonialism and racism on the Black queer body and the present-day emotional impacts of enslavement in urban, rural, and international settings. Hull is lyrical, layered, history-ridden, experimental, textured, adorned, ecstatic, and emotionally investigative.\r\n\r\nXandria Phillips is a poet and visual artist from rural Ohio. Hull (Nightboat Books) is their debut poetry collection. They are the author of Reasons for Smoking and the poetry editor of Winter Tangerine. Xandria has received fellowships from Cave Canem, Callaloo, and the Wisconsin Institute for Creative Writing, where they are the First Wave Poetry Fellow.', 'Gymnop Publication', 730012, 552, 120, 'images/books/shortstory/getintrouble.jpg', 30);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(4) NOT NULL,
  `cat_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Fiction'),
(2, 'Non-Fiction');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cont_id` int(4) NOT NULL,
  `cont_name` varchar(50) NOT NULL,
  `cont_email` varchar(30) NOT NULL,
  `query` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cont_id`, `cont_name`, `cont_email`, `query`) VALUES
(9, 'Pankaj', 'p4pankaj@gmail.com', 'sahi hain boss.'),
(11, 'Sahil Kumar', 'sahil@gmail.com', 'A sentence worded or expressed so as to elicit information.'),
(12, 'Rohit Akela', 'akela@akelaphotography.com', 'Going great. Please tell me my order status.');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `sid` int(4) NOT NULL,
  `b_id` int(4) DEFAULT NULL,
  `u_id` int(4) DEFAULT NULL,
  `sf_name` varchar(50) NOT NULL,
  `sl_name` varchar(50) NOT NULL,
  `ssex` varchar(200) NOT NULL,
  `smobile` varchar(200) NOT NULL,
  `semail` varchar(200) NOT NULL,
  `saddress1` varchar(600) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `saddress2` text DEFAULT NULL,
  `stown` varchar(50) NOT NULL,
  `sstate` varchar(60) NOT NULL,
  `spin` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`sid`, `b_id`, `u_id`, `sf_name`, `sl_name`, `ssex`, `smobile`, `semail`, `saddress1`, `saddress2`, `stown`, `sstate`, `spin`) VALUES
(205, 3, 14, 'Deep', 'Tandan', 'm', '9982168317', 'deepnarayan006@gmail.com', 'Hostel', 'SMVIT', 'Bangalore', 'karnataka', '562157'),
(206, 3, 14, 'Deep', 'Tandan', 'm', '9982168317', 'deepnarayan006@gmail.com', 'Hostel', 'SMVIT', 'Bangalore', 'karnataka', '562157'),
(207, 5, 14, 'Deep', 'Tandan', 'm', '9982168317', 'deepnarayan006@gmail.com', 'Sir MVIT Hostel', 'Bangalore', 'ARARIA', 'BIHAR', '854311'),
(208, 5, 14, 'Deep', 'Tandan', 'm', '9982168317', 'deepnarayan006@gmail.com', 'Sir MVIT Hostel', 'Bangalore', 'ARARIA', 'BIHAR', '854311');

-- --------------------------------------------------------

--
-- Table structure for table `sub_cat`
--

CREATE TABLE `sub_cat` (
  `subcat_id` int(4) NOT NULL,
  `scat_id` int(4) NOT NULL,
  `subcat_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_cat`
--

INSERT INTO `sub_cat` (`subcat_id`, `scat_id`, `subcat_name`) VALUES
(1, 1, 'Poetry'),
(2, 1, 'Thriller'),
(3, 2, 'History'),
(4, 1, 'Short Story'),
(5, 1, 'Romance'),
(6, 1, 'Sci-Fi'),
(7, 2, 'Satire');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(4) NOT NULL,
  `user_fname` varchar(50) NOT NULL,
  `user_lname` varchar(50) NOT NULL,
  `user_pw` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_fname`, `user_lname`, `user_pw`, `user_email`) VALUES
(14, 'Book', 'Planet', 'login@time', 'admin@bookplanet.ml'),
(18, 'Saheb', 'Kumar', 'goforit', 'saheb@gmail.com'),
(20, 'Khushi', 'Kumari', '15646541', 'khushi@aol.com'),
(21, 'Rustam', 'Raghav', '754364', 'rraghav@yandex.mail'),
(22, 'Ram', 'Bhaskar', 'localppaswword', 'bhaskar@ram.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `book_subcat` (`book_subcat`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `ship_book` (`b_id`),
  ADD KEY `ship_user` (`u_id`);

--
-- Indexes for table `sub_cat`
--
ALTER TABLE `sub_cat`
  ADD PRIMARY KEY (`subcat_id`),
  ADD KEY `scat_cat` (`scat_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cont_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `sid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `sub_cat`
--
ALTER TABLE `sub_cat`
  MODIFY `subcat_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_subcat` FOREIGN KEY (`book_subcat`) REFERENCES `sub_cat` (`subcat_id`);

--
-- Constraints for table `shipping`
--
ALTER TABLE `shipping`
  ADD CONSTRAINT `ship_user` FOREIGN KEY (`u_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `sub_cat`
--
ALTER TABLE `sub_cat`
  ADD CONSTRAINT `scat_cat` FOREIGN KEY (`scat_id`) REFERENCES `category` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

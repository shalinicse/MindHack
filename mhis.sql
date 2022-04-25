-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 04, 2017 at 03:19 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mhis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--


-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `date` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `rating` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ref_id` int(3) NOT NULL AUTO_INCREMENT,
  `sid` varchar(100) NOT NULL,
  PRIMARY KEY (`ref_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`date`, `description`, `rating`, `email`, `ref_id`, `sid`) VALUES
('01072017', 'hi', '7 Star', 'muskangpt326@gmail.com', 2, '103'),
('02072017', 'hye!!!!!', '5 Star', 'vaisalichaurasiya49@gmail.com', 3, '102'),
('21051996', 'your website is world best..', '7 Star', 'akanshaucem@gmail.com', 4, '105'),
('17031997', 'hello', '7 Star', 'vaisalichaurasiya49@gmail.com', 5, '102'),
('05072017', 'very nice,but i want to see my result in GRAPH!!!!!', '5 Star', 'gargitripathi2709@gmail.com', 6, '104'),
('07062017', 'nice', '7 Star', 'vaisalichaurasiya49@gmail.com', 7, '102'),
('', 'good', '7 Star', 'satyam@gmail.com', 8, 'satyam@gmail.com'),
('', 'fimne', '7 Star', 'satyam@gmail.com', 9, 'satyam@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `amount` int(11) NOT NULL,
  `invoice_id` varchar(100) NOT NULL,
  `sid` varchar(100) NOT NULL,
  PRIMARY KEY (`invoice_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--


-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `qid` int(3) NOT NULL DEFAULT '0',
  `tid` int(3) NOT NULL,
  `des` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`qid`,`tid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`qid`, `tid`, `des`) VALUES
(6, 1, ' Do you have trouble concentrating?'),
(7, 1, ' Do you have any harmful thoughts towards yourself?'),
(5, 1, ' Do you feel like a failure or you have let people down?'),
(4, 1, ' Do you overeat or have a poor appetite?'),
(3, 1, ' Do you feel tired or have little energy?'),
(2, 1, ' Do you have trouble sleeping, either sleeping too much or not at all?'),
(1, 1, ' Do you feel hopeless or down?'),
(0, 1, ' Do you have little pleasure or interest in doing things?');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `tid` int(3) NOT NULL,
  `qid` int(3) NOT NULL,
  `yes` varchar(100) NOT NULL,
  `no` varchar(100) NOT NULL,
  `treat` varchar(500) NOT NULL,
  PRIMARY KEY (`tid`,`qid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`tid`, `qid`, `yes`, `no`, `treat`) VALUES
(1, 7, 'Your choice shows that  you have  harmful thoughts towards yourself.', 'Your choice shows that you have no harmful thoughts towards yourself.', 'Stop thinking in extremes'),
(1, 5, 'Your choice shows that you feel like a failure or you have let people put you down', 'Your choice shows that you do not feel like a failure or you have not let people put you down', 'ACCEPT THAT FAILURE IS PART OF THE PROCESS When times get tough, one of the most frustrating things we can hear from someone is to “stay positive.”'),
(1, 4, 'Your choice shows that you have poor eating habbits..', 'Your choice shows that you have good eating habbits..', 'If stress, grief, heartbreak or other emotional problems cause loss of appetite, managing the root cause is significant. General stresses may be remedied through relaxation techniques such as massage, medication or exercise. '),
(1, 3, 'Your choice shows that you  feel tired or have little energy.', 'Your choice shows that you  feel energetic...', ' Eat the right amounts and at the right times, Maintain a balanced diet ,Avoid processed foods.'),
(1, 2, 'Your choice shows that you have trouble sleeping, either sleeping too much', 'Your choice shows that you have no sleeing troubles...', 'You can put a tasty spin on your grandmother’s natural insomnia remedy by sipping warm milk before bed. Almond milk is an excellent source of calcium, which helps the brain make melatonin. Plus, warm milk may spark pleasant and relaxing memories of your mother helping you fall asleep.'),
(1, 0, 'Your choice shows that you have little pleasure or interest in doing things', 'Your choice shows that you take pleasure or interest in doing things.', 'Establish a set routine. ...Prioritize your school tasks. ...Break larger tasks into smaller, more manageable ones. ...Look for ways to create variety in your work. ...Study with friends...Ask for feedback. ...Ask your teachers to let you take part in learning and planning.'),
(1, 6, 'Your choice shows that you have trouble in concentrating', 'Your choice shows that you have no trouble in concentrating.', 'Take rest. ,Make a Plans...,The practice of meditation will definitely improve our powers of concentration...,If you want to master the arts of concentration, develop a controlled and balanced diet.'),
(1, 1, 'Your choice shows that you  feel hopeless or down', 'Your choice shows that  you feel optimistic or Up.', 'Adjust your view of happiness. ..,Find something to appreciate....,Find one thing you can change....,Be present in the moment. Practice being mindful by focusing on the here and now. ');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `test_id` int(3) NOT NULL AUTO_INCREMENT,
  `test_score` float NOT NULL,
  `date` date NOT NULL,
  `one` varchar(50) NOT NULL,
  `two` varchar(50) NOT NULL,
  `three` varchar(50) NOT NULL,
  `four` varchar(50) NOT NULL,
  `five` varchar(50) NOT NULL,
  `six` varchar(50) NOT NULL,
  `seven` varchar(50) NOT NULL,
  `eight` varchar(50) NOT NULL,
  `sid` varchar(100) NOT NULL,
  PRIMARY KEY (`test_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=134 ;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`test_id`, `test_score`, `date`, `one`, `two`, `three`, `four`, `five`, `six`, `seven`, `eight`, `sid`) VALUES
(127, 50, '2017-08-30', 'yes', 'no', 'no', 'yes', 'yes', 'yes', 'no', 'yes', 'shalinishukla.bjs@gmail.com'),
(128, 50, '2017-08-30', 'yes', 'yes', 'no', 'no', 'no', 'yes', 'yes', 'no', 'shalinishukla.bjs@gmail.com'),
(129, 62.5, '2017-08-31', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'no', 'no', 'satyam@gmail.com'),
(130, 62.5, '2017-08-31', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'no', 'no', 'satyam@gmail.com'),
(131, 37.5, '2017-08-31', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'no', 'no', 'satyam@gmail.com'),
(132, 37.5, '2017-09-01', 'yes', 'yes', 'no', 'no', 'no', 'no', 'yes', 'no', 'satyam@gmail.com'),
(133, 50, '2017-09-01', 'yes', 'yes', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'satyam@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `name` varchar(100) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `institute` varchar(100) NOT NULL,
  `profile_pic` varchar(100) NOT NULL DEFAULT 'default.jpg',
  `sid` varchar(100) NOT NULL,
  `book` varchar(100) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `dob`, `sex`, `contact`, `password`, `institute`, `profile_pic`, `sid`, `book`) VALUES
('Shalini Shukla', '31121994', 'female', '9935624672', '1f9306835dcab82417bb026c75a695daa9e1fd9a976ae16d73c5cf8c8ab0b6b9', 'UCEM', 'IMG_20170528_004853_228.jpg', 'shalinishukla.bjs@gmail.com', 'The Secret'),
('Vaisali Chaurasiya', '07081996', 'female', '7309273005', 'f98dd043f35bd932a1287d7537901a1b47f4bdf18ea866f968f622633d05fb23', 'UCEM', 'vasu.jpg', 'vaisalichaurasiya49@gmail.com', 'as u like it'),
('Muskan Gupta', '02121995', 'female', '7899988867', '9e21e4bf5659c7fbd4d0f85f0a4062c577e7b79217aa57d73a515ec67ff098ca', 'UIT', '2017-06-30 09.43.24.jpg', 'muscan@gmail.com', '2 states'),
('Medhavi Shukla ', '02121996', 'female', '9984675432', 'f91096cddc5ec828cf93da599f6c0bf101ce4c77040d61890ddb898c3c5fabc3', 'UIM', 'IMG-20150302-WA0015.jpg', 'medhavi@gmail.com', 'compiler'),
('Ram ', '210914', 'female', '213', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'Udf', 'IMG-20150130-WA0004.jpg', 'a', 'qwerty'),
('qwerty', '090897', 'male', '1234567890', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 'uit', 'IMG-20150130-WA0004.jpg', 'qwerty@wfr.com', 'all'),
('Shivi', '21121998', 'female', '9935624572', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 'UCER', 'IMG-20150130-WA0005.jpg', 'shivi@gmail.com', 'theta'),
('dyhjjkk', '090897', 'male', '9820839705', '688787d8ff144c502c7f5cffaafe2cc588d86079f9de88304c26b0cb99ce91c6', 'nmnkj', 'IMG-20150130-WA0004.jpg', 'abc@mnnit.ac.in', 'geeta'),
('Kumari Vaishali', '1996-09-26', 'female', '9670565531', '1bc98be5f72fdbf7e1b65c34941088186a7234254445bc5e2929657bae384152', 'UCEM', '20150904_091136.jpg', 'shalini.bjs@gmail.com', 'darkest hour'),
('Shivani Singh', '1996-01-27', 'female', '9766656789', '56431fd9d977844f55f70d40b38fb1d01786a07a9c9c52d761867883dc72683a', 'UCEM', 'IMG-20161221-WA0003.jpg', 'shivani@gmail.com', 'dead end'),
('Satyam Shukla', '1990-07-30', 'male', '9898989899', '41bedde6ca93b6503d65ae806840ee5b2ccff2efc95bb0762fc38989bf1ae564', 'UGI', 'IMG-20151017-WA0023.jpg', 'satyam@gmail.com', 'show time');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `test_id` varchar(100) NOT NULL,
  `test_des` varchar(10) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`test_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--


-- --------------------------------------------------------

--
-- Table structure for table `therapist`
--

CREATE TABLE IF NOT EXISTS `therapist` (
  `th_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `speciality` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  PRIMARY KEY (`th_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `therapist`
--


-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE IF NOT EXISTS `treatment` (
  `treat_id` int(11) NOT NULL,
  `yoga` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `problem` int(11) NOT NULL,
  `exercise` int(11) NOT NULL,
  `th_id` varchar(100) NOT NULL,
  `diet` varchar(100) NOT NULL,
  `charges_paid` double(3,2) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatment`
--


-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `name` varchar(100) NOT NULL,
  `ratings` int(10) NOT NULL,
  `views` int(10) NOT NULL,
  `vid` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--


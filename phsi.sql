-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2023 at 03:08 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phsi`
--

-- --------------------------------------------------------
--
--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(11) NOT NULL,
  `None` int(11) DEFAULT NULL,
  `WMSU Student` int(11) DEFAULT NULL,
  `WMSU Alumni` int(11) DEFAULT NULL,
  `WMSU Employee` int(11) DEFAULT NULL,
  `Crimson Peace Mediators` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_type`
--




--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`); 
  
--
-- AUTO_INCREMENT for dumped tables
--
--
--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

-- --------------------------------------------------------

-- --------------------------------------------------------
--
-- --------------------------------------------------------
--
--
CREATE TABLE `event` (
	`id` int(11) NOT NULL,
	`event_title`varchar(50) NOT NULL,
	`event_banner`varchar(50) NOT NULL,
	`event_about` text DEFAULT NULL,
	`event_mode`varchar(35) NOT NULL,
  `event_location`varchar(50) DEFAULT NULL,
  `event_platform`varchar(50) DEFAULT NULL,
	`event_type`varchar(50) NOT NULL,
	`event_slots` int(11) DEFAULT NULL,
	`event_status`varchar(50) NOT NULL,
	`event_date` DATE NOT NULL,
  `event_scope` varchar(50) NOT NULL,
  `event_start_time` TIME NOT NULL,
  `event_end_time` TIME NOT NULL,
  `event_reg_duedate` timestamp NOT NULL,
	`event_agenda`varchar(50) NOT NULL,
	`created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
	)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`); 
  
--
-- AUTO_INCREMENT for dumped tables
--
--
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

-- --------------------------------------------------------
--
--
-- Table structure for table `administration`
--

CREATE TABLE `administration` (
  `id` int(11) NOT NULL,
  `admin_name`varchar(50) NOT NULL,
  `filename`varchar(255) NOT NULL,
  `admin_organization`varchar(50) NOT NULL,
  `admin_position`varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administration`
--
INSERT INTO `administration` (`id`, `admin_name`, `filename`, `admin_organization`, `admin_position`) VALUES
(1, 'Dr. Ma. Carla A. Ochotorena', 'phsi-carla.png', 'WMSU - Peace and Human Security', 'University President'),
(2, 'Asst. Prof. Ludivina Borja-Dekit', 'phsi-ludi.png', 'WMSU - Peace and Human Security Institute', 'Director'),
(3, 'Engr. Marlon Grande', 'phsi-marlon.png', 'WMSU - Peace and Human Securit', 'Asst. Director');



--
-- Indexes for table `administration`
--
ALTER TABLE `administration`
  ADD PRIMARY KEY (`id`); 
  
--
-- AUTO_INCREMENT for dumped tables
--
--
--
-- AUTO_INCREMENT for table `administration`
--
ALTER TABLE `administration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

-- --------------------------------------------------------




-- --------------------------------------------------------
--
--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `carousel_title` text NOT NULL,
  `filename`varchar(255) NOT NULL,
  `carousel_content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carousel`
--
INSERT INTO `carousel` (`id`, `carousel_title`, `filename`, `carousel_content`) VALUES
(1, 'Peace and Human Security Institute', 'phsi-carousel.jpg', 'Peace is more than the absence of war, it is living together with our differences ??? of sex, race, language, religion or culture ??? while furthering universal respect for justice and human rights on which such coexistence depends ??? Tap Tant, UNESCO');



--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`); 
  
--
-- AUTO_INCREMENT for dumped tables
--
--
--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

-- --------------------------------------------------------
--
--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `news_title`varchar(255) NOT NULL,
  `filename`varchar(255) NOT NULL,
  `image_description` text DEFAULT NULL,
  `news_content` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--
INSERT INTO `news` (`id`, `news_title`, `filename`, `image_description`, `news_content`) VALUES
(1, 'Harnessing our Peace Efforts: Towards Solidarity in Service', 'phsi-dialogue.jpg', '"Mr. Hirotaka Sekiguchi recieving a certificate. He is the Senior Official of the National Federation of UNESCO Associations in JAPAN."', 'In line with the opening of the Mindanao Week of Peace 2022, on the 24th of November, the WMSU PHSI conducted a Peace Dialogue with the theme, "Harnessing our Peace Efforts: Towards Solidarity in Service". with the participation of Mr. Hirotaka Sekiguchi, the senior Official of the National Federation of UNESCO. The Peace Dialogue took place at the College of Teacher Education Social Hall, with the attendance of the WMSU-UNESCO Club members and Officers and different representatives from the College of Liberal Arts (CLA) , College of Education (CTE) , College of Islamic Studies ( CAIS) and College of Social Work and Community Development.
Let us commemorate this week of Peace as a remembrance and celebration of unity and solidarity through peace.'),
(2, 'In the Light of the Recent Flood in Zamboanga City', 'unesco-chr.jpg', '"Peace Mediators on their new WMSU UNESCO Club shirt."', 'On 17th of February, the Commission on human rights have successfully conducted an orientation that revved up the members of WMSU Youth Peace Mediators UNESCO Club. 
The event was spearheaded by Hon. Daniel S. Paculanang, Information Officer III and Hon. Ronaele L. Ventus, Training Specialist I, and was  under the supervision of PHSI Office, headed by Ms. Ludy Borja and Engr. Marlon Grande.  On top of that, the CHR committee donated one BROTHER Printer and  sponsored  sublimated t-shirts to the club. 
The orientation was fruitful as the speakers and spectators shared their knowledge and insights  towards human rights ??? civil, political, economic, social, and cultural rightsand also tackled Gender and Development, which is  prevalent among the WMSU Youth Peace Mediator  members. This is congruent to the goal of the CHR which is to ensure the peace and security of each and every human being- moreso in a campus level.
Gracias CHR ! and together, we preserve and fight the rights of mankind!'),
(3, 'Peace Edukasyon', 'peace-edukasyon.jpg', '"If we want to reach real peace in this world, we should start educating children."', 'The WMSU Peace and Human Security Institute in collaboration with the WMSU Youth Peace Mediators -UNESCO Club together with our partners: EDUCO, Ateneo Center for Leadership and Governance,  Supreme Student Council Society of the Philippines, and Tactical Operations Wing Western Mindanao Philippine - Air Force,  held the PeacEdukasyon: Fun-aral for Children this 18th of February 2023 at Padayon Center Martha Drive, Sta. Catalina Zamboanga City. 
In connection with our goal to establish strong communities of practice in child-friendly local governance and social accountability, the WMSU Youth Peace Mediators -UNESCO Club decided to implement this community project with the objectives centered to provide access to alternative learning environments, engaging the children in recreational activities, and promote cultural diversity awareness through Peacebuilding. 
The beneficiary of the project was the 150 children who are bonafide residents of the Padayon center ranging from 7-13 years of age (Grades 1-6). The activities consist of 3 sessions: 1st session was centered on a seminar on Children rights, followed by a coloring session, and a thumb painting session. Additionally, we turned over grade school books and storybooks from our partners in Manila. The activities helped the children bond together through various educational games, helping them to foster awareness and solidarity among one another.
This event will not be possible without the help of our various partners and our esteemed and ever-supportive WMSU President, Ma. Carla A. Ochotorena for her unwavering support. We would also like to acknowledge the WMSU-PHSI Director, Asst. Prof. Ludivina Borja-Dekit, and our WMSU-UNESCO Club Adviser, Engr. Marlon Grande for their unending dedication and commitment to making this event a success.
Indeed, learning comes best when experienced. With this regard, experiencing PeacEdukasyon equips these children with the best learning towards peace!');

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`); 
  
--
-- AUTO_INCREMENT for dumped tables
--
--
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

-- --------------------------------------------------------

--
--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `history_title`varchar(255) NOT NULL,
  `filename`varchar(255) NOT NULL,
  `history_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--
INSERT INTO `history` (`id`, `history_title`, `filename`, `history_description`) VALUES
(1, 'The History of Peace and Human Security Institute', 'phsi.png', 'Western Mindanao State University (WMSU) created the Center for Peace and Development (CPD) in January 2000, to generate well- rounded and productive people for the region, ensuring the good welfare of the society grounded on democratic and peaceful initiative. In 2010, it was renamed as Peace and Human Security Institute (PHSI), becoming the peace-building arm of the Office of the University President. Today, under Dr. Ma. Carla A. Ochotorena, the office takes the lead in engaging WMSU in the government-led peace efforts to be the main protagonist in peace education and research on the resolution of local conflicts.');



--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`); 
  
--
-- AUTO_INCREMENT for dumped tables
--
--
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

-- --------------------------------------------------------

--
--
-- Table structure for table `misvis`
--

CREATE TABLE `misvis` (
  `id` int(11) NOT NULL,
  `misvis_title`varchar(255) NOT NULL,
  `filename`varchar(255) NOT NULL,
  `misvis_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `misvis`
--
INSERT INTO `misvis` (`id`, `misvis_title`, `filename`, `misvis_description`) VALUES
(1, 'Vision', 'phsi-p5.png', 'A group of men and women in WMSU working in the field of instruction, research, and extension, towards the promotion of a Culture of Peace and the provision of the opportunities and caring spaces that facilitate the development and expression of the potentials, capabilities, and talents of the people of Mindanao and the country.'),
(2, 'Mission', 'phsi-p7.png', 'The WMSU-PHSI seeks to expand and deepen the commitment, engagement, and involvement of individuals and groups inside and outside the university not only within the region but even in the national and international community, thru the offering of peace studies, integration of peace education, and other peace and development initiatives.');

--
-- Indexes for table `misvis`
--
ALTER TABLE `misvis`
  ADD PRIMARY KEY (`id`); 
  
--
-- AUTO_INCREMENT for dumped tables
--
--
--
-- AUTO_INCREMENT for table `misvis`
--
ALTER TABLE `misvis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;
-- --------------------------------------------------------
--
-- Table structure for table `user_acc_data`
--

CREATE TABLE `user_acc_data` (
  `id` int(11) NOT NULL,
  `profile_picture`varchar(255) NOT NULL,
  `background_image`varchar(255) NOT NULL,
  `firstname`varchar(50) NOT NULL,
  `middlename`varchar(50) DEFAULT NULL,
  `lastname`varchar(50) NOT NULL,
  `suffix`varchar(50) DEFAULT NULL,
  `sex` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_number`int(11) NOT NULL,
  `province` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `street_name` varchar(50) DEFAULT NULL,
  `bldg_house_no` varchar(50) DEFAULT NULL,
  `username`varchar(50) NOT NULL,
  `password`varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_acc_data`
--
INSERT INTO `user_acc_data` (`id`, `profile_picture`, `background_image`, `firstname`, `middlename`, `lastname`, `suffix`, `sex`, `email`, `contact_number`, `province`, `city`, `barangay`, `street_name`, `bldg_house_no`, `username`, `password`, `role`) VALUES
(1, '', '', 'Janus', 'Dimakita', 'Dimagiba', 'Jr.', 'Male', 'janus1@gmail.com', '09123456789', 'Zamboanga del Sur', 'Zamboanga City', 'Guiwan', 'Callejon Drive', 'House 1', 'super_admin', 'janus', 'super_admin'),
(2, '', '', 'Janus', 'Dimahanap', 'Dimawala', 'Sr.', 'Male', 'janus2@gmail.com', '09123456719', 'Zamboanga del Sur', 'Zamboanga City', 'San Roque', 'Macrohon Drive', 'House 2', 'event_admin', 'janus', 'event_admin'),
(3, '', '', 'Janus', 'Juan', 'Luan', '', 'Female', 'janus3@gmail.com', '09123456729', 'Zamboanga del Sur', 'Zamboanga City', 'Pasonanca', 'Pasonanca Court', 'House 3', 'content_admin', 'janus', 'content_admin'),
(4, '', '', 'Janus', 'Swift', 'Smith', '', 'Male', 'janus4@gmail.com', '09123456739', 'Zamboanga del Sur', 'Zamboanga City', 'Town', 'Zone I', 'House 4', 'feedback_admin', 'janus', 'feedback_admin'),
(5, '', '', 'Janus', 'Janis', 'Janas', 'III', 'Female', 'janus5@gmail.com', '09123456749', 'Zamboanga del Sur', 'Zamboanga City', 'Arena Blanco', 'Negro', 'House 5', 'user', 'janus', 'user');




--
-- Indexes for dumped tables
--

--


--
-- Indexes for table `user_acc_data`
--
ALTER TABLE `user_acc_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--


--
-- AUTO_INCREMENT for table `user_acc_data`
--
ALTER TABLE `user_acc_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;
-- --------------------------------------------------------

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

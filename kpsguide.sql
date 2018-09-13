-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2018 at 03:08 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kpsguide`
--

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `posts_id` int(11) DEFAULT NULL,
  `download_title` varchar(255) DEFAULT NULL,
  `download_file` varchar(255) DEFAULT NULL,
  `download_tags` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `school_profile_id` int(11) DEFAULT NULL,
  `school_branches_id` int(11) DEFAULT NULL,
  `tutor_profile_id` int(11) DEFAULT NULL,
  `posts_title` varchar(255) DEFAULT NULL,
  `posts_description` text,
  `posts_tags` text,
  `posts_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `school_profile_id` int(11) DEFAULT NULL,
  `school_branches_id` int(11) DEFAULT NULL,
  `tutor_id` int(11) DEFAULT NULL,
  `question_1` varchar(255) DEFAULT NULL,
  `question_2` varchar(255) DEFAULT NULL,
  `question_3` varchar(255) DEFAULT NULL,
  `question_4` varchar(255) DEFAULT NULL,
  `question_5` varchar(255) DEFAULT NULL,
  `question_6` text,
  `overall_rating` varchar(255) DEFAULT NULL,
  `overall_message` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_branches`
--

CREATE TABLE `school_branches` (
  `id` int(11) NOT NULL,
  `school_profile_id` int(11) DEFAULT NULL,
  `school_branch_address` varchar(255) DEFAULT NULL,
  `school_branch_phone` varchar(255) DEFAULT NULL,
  `school_branch_email` varchar(255) DEFAULT NULL,
  `school_branch_description` varchar(255) DEFAULT NULL,
  `school_branch_area` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_jobs`
--

CREATE TABLE `school_jobs` (
  `id` int(11) NOT NULL,
  `school_profile_id` int(11) DEFAULT NULL,
  `school_branches_id` int(11) DEFAULT NULL,
  `school_job_title` varchar(255) DEFAULT NULL,
  `school_job_description` varchar(255) DEFAULT NULL,
  `school_job_salary` varchar(255) DEFAULT NULL,
  `school_job_status` varchar(255) DEFAULT 'Available',
  `school_job_publish_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `school_job_valid_till` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `job_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_profile`
--

CREATE TABLE `school_profile` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `school_name` varchar(255) DEFAULT NULL,
  `school_phone` varchar(255) DEFAULT NULL,
  `school_email` varchar(255) DEFAULT NULL,
  `school_address` varchar(255) DEFAULT NULL,
  `school_fb_link` varchar(255) DEFAULT NULL,
  `school_twitter_link` varchar(255) DEFAULT NULL,
  `school_website_link` varchar(255) DEFAULT NULL,
  `school_city` varchar(255) DEFAULT NULL,
  `school_area` varchar(255) DEFAULT NULL,
  `school_description` text,
  `school_mont_system` varchar(255) DEFAULT NULL,
  `school_type` varchar(255) DEFAULT NULL,
  `school_special_child` int(2) DEFAULT '0',
  `school_main_campus` int(2) DEFAULT '0',
  `school_branches` int(2) DEFAULT '0',
  `school_cover` varchar(255) DEFAULT NULL,
  `school_avatar` varchar(255) DEFAULT NULL,
  `school_profile_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seeker_profile`
--

CREATE TABLE `seeker_profile` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `seeker_phone` varchar(255) DEFAULT NULL,
  `seeker_intersted_in` varchar(255) DEFAULT NULL,
  `seeker_kids` varchar(255) DEFAULT NULL,
  `seeker_profile_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `setting_name` varchar(255) DEFAULT NULL,
  `setting_value` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tutors_profile`
--

CREATE TABLE `tutors_profile` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `tutor_name` varchar(255) DEFAULT NULL,
  `tutor_job_status` varchar(255) DEFAULT NULL,
  `tutor_dob` varchar(255) DEFAULT NULL,
  `tutor_city` varchar(255) DEFAULT NULL,
  `tutor_address` varchar(255) DEFAULT NULL,
  `tutor_facebook_link` varchar(255) DEFAULT NULL,
  `tutor_linkedin` varchar(255) DEFAULT NULL,
  `tutor_description` text,
  `tutor_cover` varchar(255) DEFAULT NULL,
  `tutor_avatar` varchar(255) DEFAULT NULL,
  `tutor_profile_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_type` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users_type`
--

CREATE TABLE `users_type` (
  `id` int(11) NOT NULL,
  `type_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `downloads_posts_id_fk` (`posts_id`),
  ADD KEY `downloads_users_id_fk` (`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_users_id_fk` (`user_id`),
  ADD KEY `posts_school_profile_id_fk` (`school_profile_id`),
  ADD KEY `posts_school_branches_id_fk` (`school_branches_id`),
  ADD KEY `posts_tutors_profile_id_fk` (`tutor_profile_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `review_school_profile_id_fk` (`school_profile_id`),
  ADD KEY `review_school_branches_id_fk` (`school_branches_id`),
  ADD KEY `review_users_id_fk` (`user_id`),
  ADD KEY `review_tutors_profile_id_fk` (`tutor_id`);

--
-- Indexes for table `school_branches`
--
ALTER TABLE `school_branches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `school_branches_school_profile_id_fk` (`school_profile_id`);

--
-- Indexes for table `school_jobs`
--
ALTER TABLE `school_jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `school_jobs_school_profile_id_fk` (`school_profile_id`),
  ADD KEY `school_jobs_school_branches_id_fk` (`school_branches_id`);

--
-- Indexes for table `school_profile`
--
ALTER TABLE `school_profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `school_profile_users_id_fk` (`user_id`);

--
-- Indexes for table `seeker_profile`
--
ALTER TABLE `seeker_profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seeker_profile_users_id_fk` (`user_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutors_profile`
--
ALTER TABLE `tutors_profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tutors_profile_users_id_fk` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_users_type_id_fk` (`user_type`);

--
-- Indexes for table `users_type`
--
ALTER TABLE `users_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `school_branches`
--
ALTER TABLE `school_branches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `school_jobs`
--
ALTER TABLE `school_jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `school_profile`
--
ALTER TABLE `school_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `seeker_profile`
--
ALTER TABLE `seeker_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tutors_profile`
--
ALTER TABLE `tutors_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users_type`
--
ALTER TABLE `users_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `downloads`
--
ALTER TABLE `downloads`
  ADD CONSTRAINT `downloads_posts_id_fk` FOREIGN KEY (`posts_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `downloads_users_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_school_branches_id_fk` FOREIGN KEY (`school_branches_id`) REFERENCES `school_branches` (`id`),
  ADD CONSTRAINT `posts_school_profile_id_fk` FOREIGN KEY (`school_profile_id`) REFERENCES `school_profile` (`id`),
  ADD CONSTRAINT `posts_tutors_profile_id_fk` FOREIGN KEY (`tutor_profile_id`) REFERENCES `tutors_profile` (`id`),
  ADD CONSTRAINT `posts_users_id_fk` FOREIGN KEY (`user_id`) REFERENCES `atten_db`.`users` (`id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_school_branches_id_fk` FOREIGN KEY (`school_branches_id`) REFERENCES `school_branches` (`id`),
  ADD CONSTRAINT `review_school_profile_id_fk` FOREIGN KEY (`school_profile_id`) REFERENCES `school_profile` (`id`),
  ADD CONSTRAINT `review_tutors_profile_id_fk` FOREIGN KEY (`tutor_id`) REFERENCES `tutors_profile` (`id`),
  ADD CONSTRAINT `review_users_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `school_branches`
--
ALTER TABLE `school_branches`
  ADD CONSTRAINT `school_branches_school_profile_id_fk` FOREIGN KEY (`school_profile_id`) REFERENCES `school_profile` (`id`);

--
-- Constraints for table `school_jobs`
--
ALTER TABLE `school_jobs`
  ADD CONSTRAINT `school_jobs_school_branches_id_fk` FOREIGN KEY (`school_branches_id`) REFERENCES `school_branches` (`id`),
  ADD CONSTRAINT `school_jobs_school_profile_id_fk` FOREIGN KEY (`school_profile_id`) REFERENCES `school_profile` (`id`);

--
-- Constraints for table `school_profile`
--
ALTER TABLE `school_profile`
  ADD CONSTRAINT `school_profile_users_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `seeker_profile`
--
ALTER TABLE `seeker_profile`
  ADD CONSTRAINT `seeker_profile_users_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `tutors_profile`
--
ALTER TABLE `tutors_profile`
  ADD CONSTRAINT `tutors_profile_users_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_users_type_id_fk` FOREIGN KEY (`user_type`) REFERENCES `users_type` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2018 at 12:50 PM
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
-- Table structure for table `page_counter`
--

CREATE TABLE `page_counter` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `page_id` int(11) DEFAULT NULL,
  `counter` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_counter`
--

INSERT INTO `page_counter` (`id`, `user_id`, `page_id`, `counter`) VALUES
(1, 16, 1, 21),
(2, 17, 2, 9),
(3, 78, 7, 24),
(4, 88, 8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `parents_profile`
--

CREATE TABLE `parents_profile` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `parents_name` varchar(255) DEFAULT NULL,
  `parents_phone` varchar(255) DEFAULT NULL,
  `parents_facebook_link` varchar(255) DEFAULT NULL,
  `parents_gender` varchar(255) DEFAULT NULL,
  `parents_city` varchar(255) DEFAULT NULL,
  `parents_area` varchar(255) DEFAULT NULL,
  `parents_description` text,
  `parents_age` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parents_profile`
--

INSERT INTO `parents_profile` (`id`, `user_id`, `parents_name`, `parents_phone`, `parents_facebook_link`, `parents_gender`, `parents_city`, `parents_area`, `parents_description`, `parents_age`) VALUES
(1, 33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 34, NULL, '0331', '1111', 'Male', 'karachi', 'All Location', NULL, '36');

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
  `overall_rating` varchar(255) DEFAULT NULL,
  `overall_message` text,
  `review_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `school_profile_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `user_id`, `overall_rating`, `overall_message`, `review_date`, `school_profile_id`) VALUES
(1, 18, '5', 'this is good review for school let test finally', '2018-09-28 10:56:48', 1),
(15, 19, '3', '1111', '2018-09-28 11:47:43', 1),
(16, 20, '4', 'this is good review for school let test finally', '2018-09-28 11:47:43', 1),
(17, 17, '1', 'testing', '2018-09-28 11:47:43', 1),
(18, 16, '5', 'testing', '2018-09-28 11:47:43', 1);

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
-- Table structure for table `school_features`
--

CREATE TABLE `school_features` (
  `id` int(11) NOT NULL,
  `school_profile_id` int(11) DEFAULT NULL,
  `school_main_campus` varchar(255) DEFAULT '0',
  `school_special_child` varchar(255) DEFAULT '0',
  `school_branches` varchar(255) DEFAULT '0',
  `school_type` varchar(255) DEFAULT NULL,
  `school_grade` varchar(255) DEFAULT NULL,
  `school_enrolled_students` varchar(255) DEFAULT NULL,
  `school_mont_system` varchar(255) DEFAULT NULL,
  `map_latitute` varchar(255) DEFAULT NULL,
  `map_longtitute` varchar(255) DEFAULT NULL,
  `fb_page_acesskey` varchar(255) DEFAULT NULL,
  `fb_pageid` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_features`
--

INSERT INTO `school_features` (`id`, `school_profile_id`, `school_main_campus`, `school_special_child`, `school_branches`, `school_type`, `school_grade`, `school_enrolled_students`, `school_mont_system`, `map_latitute`, `map_longtitute`, `fb_page_acesskey`, `fb_pageid`) VALUES
(1, 1, '0', '0', '0', 'Public', '1-10', '200', 'Yes ', '123', '35', 'EAAPjhadQgkoBANW5XRDa0JsxvPZCfUpNlZBVk0lGbjLx7wICZCBvepvmqkijSEJb32fhYTyLkAL0paXYpXeybQxfFTBQoTZBD6TpRtgMHKEKf6GlwIUQWMJ2ZBrsIfOkAbCt3eSbIufwyDeF0Kq6V0hAZCNEJyVahq2tHQVDId2wZDZD', '1992138387503935'),
(2, 2, '0', '0', '0', 'Public', '1-10', '200', 'Yes ', '123', '35', 'EAAPjhadQgkoBANW5XRDa0JsxvPZCfUpNlZBVk0lGbjLx7wICZCBvepvmqkijSEJb32fhYTyLkAL0paXYpXeybQxfFTBQoTZBD6TpRtgMHKEKf6GlwIUQWMJ2ZBrsIfOkAbCt3eSbIufwyDeF0Kq6V0hAZCNEJyVahq2tHQVDId2wZDZD', '1992138387503935'),
(3, 6, NULL, NULL, NULL, 'a', 'a', 'a', 'a', NULL, NULL, 'EAAPjhadQgkoBANW5XRDa0JsxvPZCfUpNlZBVk0lGbjLx7wICZCBvepvmqkijSEJb32fhYTyLkAL0paXYpXeybQxfFTBQoTZBD6TpRtgMHKEKf6GlwIUQWMJ2ZBrsIfOkAbCt3eSbIufwyDeF0Kq6V0hAZCNEJyVahq2tHQVDId2wZDZD', '1992138387503935'),
(4, 7, NULL, NULL, NULL, 'a', 'a', 'a', 'a', NULL, NULL, 'EAAPjhadQgkoBANW5XRDa0JsxvPZCfUpNlZBVk0lGbjLx7wICZCBvepvmqkijSEJb32fhYTyLkAL0paXYpXeybQxfFTBQoTZBD6TpRtgMHKEKf6GlwIUQWMJ2ZBrsIfOkAbCt3eSbIufwyDeF0Kq6V0hAZCNEJyVahq2tHQVDId2wZDZD', '1992138387503935'),
(5, 8, NULL, NULL, NULL, 'a', 'a', 'a', 'a', NULL, NULL, NULL, NULL);

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
  `school_cover` varchar(255) DEFAULT NULL,
  `school_avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_profile`
--

INSERT INTO `school_profile` (`id`, `user_id`, `school_name`, `school_phone`, `school_email`, `school_address`, `school_fb_link`, `school_twitter_link`, `school_website_link`, `school_city`, `school_area`, `school_description`, `school_cover`, `school_avatar`) VALUES
(1, 16, 'KPSG  - Karachi Parents School Guide ', 'aa', 'aa', '', 'aa', 'aa', 'aaa', 'karachi', 'Clifton', '2000 Test', 'aa', 'aa'),
(2, 17, 'Arise School', 't', 'a', 'abacaksdkfksd', 'a', 'a', NULL, 'karachi', 'Clifton', NULL, 'aa', 'aa'),
(3, 31, 'Mrs.Ahmed Montissori & Propatary', '021-31111111', 'a', 'aaaaaaaaaasdsadada', 'aaaaa', 'aaaaaa', NULL, 'karachi', 'North Nazimabad', NULL, 'aa', 'aa'),
(4, 32, 'a', '021-3aa', 'aaa', 'a', 'a', 'a', NULL, 'karachi', 'Clifton', NULL, 'aa', 'aa'),
(5, 76, 'a', '021-3', 'a', 'a', 'a', 'a', 'a', 'karachi', 'Clifton', 'a', 'aa', 'aa'),
(6, 77, 'a', '021-3', 'a', 'a', 'a', 'a', 'a', 'karachi', 'Clifton', 'a', 'aa', 'aa'),
(7, 78, 'a', '021-3', 'a', 'aaa', 'a', 'a', 'a', 'karachi', 'Clifton', 'a', 'aa', 'aa'),
(8, 88, 'a', '021-3a', 'a', 'aaa', 'a', 'a', 'a', 'karachi', 'Clifton', 'aaa', 'aa', 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `school_rating`
--

CREATE TABLE `school_rating` (
  `id` int(11) NOT NULL,
  `review_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `school_profile_id` int(11) DEFAULT NULL,
  `school_rating_question_id` int(11) DEFAULT NULL,
  `school_rating_value` int(11) DEFAULT NULL,
  `school_rating_why_this` text,
  `school_rating_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_rating`
--

INSERT INTO `school_rating` (`id`, `review_id`, `user_id`, `school_profile_id`, `school_rating_question_id`, `school_rating_value`, `school_rating_why_this`, `school_rating_date`) VALUES
(91, NULL, 18, 1, 1, 5, 'Nice school', '2018-09-28 06:52:31'),
(92, NULL, 18, 1, 2, 5, 'good teachers', '2018-09-28 06:52:31'),
(93, NULL, 18, 1, 3, 3, 'not too good leardership', '2018-09-28 06:52:31'),
(94, NULL, 18, 1, 4, 4, 'yes', '2018-09-28 06:52:31'),
(95, NULL, 18, 1, 5, 4, 'Yes ', '2018-09-28 06:52:31'),
(96, NULL, 18, 1, 6, 1, 'yes\r\n', '2018-09-28 06:52:31'),
(97, NULL, 18, 1, 7, 5, 'fine and good', '2018-09-28 06:52:31'),
(196, 15, 19, 1, 1, 5, 'aaa', '2018-09-28 11:47:43'),
(197, 15, 19, 1, 2, 3, '', '2018-09-28 11:47:43'),
(198, 15, 19, 1, 3, 5, 'test', '2018-09-28 11:47:43'),
(199, 15, 19, 1, 4, 2, '111', '2018-09-28 11:47:43'),
(200, 15, 19, 1, 5, 4, '112', '2018-09-28 11:47:43'),
(201, 15, 19, 1, 6, 2, '1', '2018-09-28 11:47:43'),
(202, 15, 19, 1, 7, 1, '1111', '2018-09-28 11:47:43');

-- --------------------------------------------------------

--
-- Table structure for table `school_rating_questions`
--

CREATE TABLE `school_rating_questions` (
  `id` int(11) NOT NULL,
  `school_rating_question` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_rating_questions`
--

INSERT INTO `school_rating_questions` (`id`, `school_rating_question`) VALUES
(1, 'This school has an effective approach to homework:'),
(2, 'Teachers at this school are effective:'),
(3, 'Leadership at this school is effective:'),
(4, 'Teachers at this school are effective:'),
(5, 'This school develops strong character in its students'),
(6, 'This school effectively deals with bullying:'),
(7, 'How would you rate your experience at this school?');

-- --------------------------------------------------------

--
-- Table structure for table `school_teachers`
--

CREATE TABLE `school_teachers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `school_profile_id` int(11) DEFAULT NULL,
  `tutor_profile_id` varchar(255) DEFAULT NULL,
  `tutor_designation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_teachers`
--

INSERT INTO `school_teachers` (`id`, `user_id`, `school_profile_id`, `tutor_profile_id`, `tutor_designation`) VALUES
(1, 30, 1, '1', 'Montessori Directress'),
(2, 36, 1, '2', 'Maths Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `setting_name` varchar(255) DEFAULT NULL,
  `setting_value` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `setting_name`, `setting_value`) VALUES
(1, 'portal_name', 'KPSG - Karachi Parents School Guide'),
(2, 'portal_phone', '000 000 0000'),
(3, 'portal_url', NULL),
(4, 'portal_email', 'kpsguide@gmail.com'),
(5, 'portal_address', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `tutors_profile`
--

CREATE TABLE `tutors_profile` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `tutor_name` varchar(255) DEFAULT NULL,
  `tutor_job_status` varchar(255) DEFAULT NULL,
  `tutor_city` varchar(255) DEFAULT NULL,
  `tutor_facebook_link` varchar(255) DEFAULT NULL,
  `tutor_linkedin` varchar(255) DEFAULT NULL,
  `tutor_description` text,
  `tutor_cover` varchar(255) DEFAULT NULL,
  `tutor_avatar` varchar(255) DEFAULT NULL,
  `tutor_area` varchar(255) DEFAULT NULL,
  `tutor_phone` varchar(255) DEFAULT NULL,
  `tutor_where_to_teach` text,
  `tutor_gender` varchar(255) DEFAULT NULL,
  `tutor_age` int(11) DEFAULT NULL,
  `tutor_experience` varchar(255) DEFAULT NULL,
  `tutor_tuition_timing` varchar(255) DEFAULT NULL,
  `tutor_cnic` varchar(255) DEFAULT NULL,
  `tutor_resume` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutors_profile`
--

INSERT INTO `tutors_profile` (`id`, `user_id`, `tutor_name`, `tutor_job_status`, `tutor_city`, `tutor_facebook_link`, `tutor_linkedin`, `tutor_description`, `tutor_cover`, `tutor_avatar`, `tutor_area`, `tutor_phone`, `tutor_where_to_teach`, `tutor_gender`, `tutor_age`, `tutor_experience`, `tutor_tuition_timing`, `tutor_cnic`, `tutor_resume`) VALUES
(1, 30, 'Umar Khan', 'Yes', 'karachi', 'aa', 'aaaaa', 'aaaa', NULL, NULL, 'All Location', '03313644820', 'No', 'Male', NULL, NULL, NULL, NULL, NULL),
(2, 36, 'Hammad Hassan', 'No', 'karachi', 'aaa', 'aaaa', 'autoparkway', NULL, NULL, 'All Location', '920331396666', 'Array', 'Female', 36, 'aaa', 'aa', '0000000000000000', NULL),
(3, 37, 'Samrah', 'No', 'karachi', 'aaa', 'aaaa', 'autoparkway', NULL, NULL, 'All Location', '920331396666', 'Array', 'Female', 36, 'aaa', 'aa', '0000000000000000', NULL),
(4, 40, 'Mohsin Ahmed', 'No', 'karachi', 'aa', 'aa', 'testing', NULL, NULL, 'All Location', '03313644820', 'At Your Place, Academy, School', 'Male', 36, 'aaa', 'aa', '0000000000000', NULL),
(5, 46, 'farhan', 'No', 'karachi', 'a', 'a', 'a', NULL, NULL, 'All Location', 'a', 'At Student Place, At Your Place, Academy, School', 'Male', 0, 'a', 'a', 'a', NULL),
(6, 47, 'obaid', 'No', 'karachi', 'a', 'a', 'a', NULL, NULL, 'All Location', 'a', 'At Student Place, At Your Place, Academy, School', 'Male', 0, 'a', 'a', 'a', NULL),
(7, 48, 'sumaria', 'No', 'karachi', 'a', 'a', 'a', NULL, NULL, 'All Location', 'a', 'At Student Place, At Your Place, Academy, School', 'Male', 0, 'a', 'a', 'a', NULL),
(8, 52, 'ayesha', 'No', 'karachi', 'aa', 'aaaa', 'aa', NULL, NULL, 'All Location', 'aa', 'At Student Place, At Your Place', 'Male', 0, 'aaaa', 'aaa', 'a', 'IN_000380194051.pdf'),
(9, 54, 'fazil', 'No', 'karachi', 'a', 'a', 'a', NULL, NULL, 'All Location', 'a', 'At Student Place, At Your Place, School', 'Male', 0, 'a', 'a', 'a', 'IN_000380194051(1).pdf'),
(10, 55, 'asif', 'No', 'karachi', 'a', 'a', 'a', NULL, NULL, 'All Location', 'a', 'At Student Place, At Your Place, Academy', 'Male', 0, 'a', 'a', 'a', 'IN_000380194051.pdf'),
(11, 56, 'sommoro', 'No', 'karachi', 'a', 'a', 'a', NULL, NULL, 'All Location', 'a', 'At Student Place, At Your Place, Academy', 'Male', 0, 'a', 'a', 'a', 'IN_000380194051.pdf'),
(12, 57, 'faizan', 'No', 'karachi', 'a', 'a', 'a', NULL, NULL, 'All Location', 'a', 'At Student Place, At Your Place, Academy', 'Male', 0, 'a', 'a', 'a', 'IN_000380194051.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `profile_status` varchar(255) DEFAULT 'Not Approved',
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `user_type` varchar(255) DEFAULT 'parents',
  `join_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `rate_us` varchar(255) DEFAULT '5',
  `hear_about_us` varchar(255) DEFAULT 'Website',
  `why_to_join` text,
  `how_to_improve` text,
  `testimonials` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `profile_status`, `first_name`, `last_name`, `user_type`, `join_date`, `rate_us`, `hear_about_us`, `why_to_join`, `how_to_improve`, `testimonials`) VALUES
(16, 'ahmed.mohsin98@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', 'Not Approved', 'Shakeel', 'Siddiqui', 'school', '2018-09-19 07:10:04', NULL, NULL, NULL, NULL, NULL),
(17, '1ahmed.mohsin98@ghmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', 'Not Approved', 'Hammad', 'Hassan', 'school', '2018-09-19 19:24:31', NULL, NULL, NULL, NULL, NULL),
(18, '2ahmed.mohsin98@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', 'Not Approved', 'Farhan', 'Soomoro', 'teacher', '2018-09-19 19:29:59', NULL, NULL, NULL, NULL, NULL),
(19, '3ahmed.mohsin98@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', 'Not Approved', 'Faizan', 'Raza', 'teacher', '2018-09-19 19:31:04', NULL, NULL, NULL, NULL, NULL),
(20, '4ahmed.mohsin98@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', 'Not Approved', 'Mohsin', 'ahmed', 'teacher', '2018-09-19 19:32:41', NULL, NULL, NULL, NULL, NULL),
(21, '5ahmed.mohsin98@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', 'Not Approved', 'Mohsin', 'ahmed', 'teacher', '2018-09-19 19:33:14', NULL, NULL, NULL, NULL, NULL),
(22, '6ahmed.mohsin98@gmail.com', 'tmt123456', 'Not Approved', 'Mohsin', 'ahmed', 'teacher', '2018-09-19 19:33:56', NULL, NULL, NULL, NULL, NULL),
(23, '8ahmed.mohsin98@gmail.com', 'tmt123456', 'Not Approved', 'Mohsin', 'ahmed', 'teacher', '2018-09-20 05:31:55', NULL, NULL, NULL, NULL, NULL),
(24, '7ahmed.mohsin98@gmail.com', 'tmt123456', 'Not Approved', 'Mohsin', 'ahmed', 'teacher', '2018-09-20 05:33:03', NULL, NULL, NULL, NULL, NULL),
(25, 'demo@demo.com', 'Tmt123456!', 'Not Approved', 'Mohsin', 'ahmed', 'teacher', '2018-09-20 05:35:54', NULL, NULL, NULL, NULL, NULL),
(26, 'aaaa', 'Tmt123456!', 'Not Approved', 'a', 'a', 'teacher', '2018-09-20 05:36:45', NULL, NULL, NULL, NULL, NULL),
(27, 'aaaa', 'Tmt123456!', 'Not Approved', 'a', 'a', 'teacher', '2018-09-20 05:38:14', NULL, NULL, NULL, NULL, NULL),
(28, 'aaaa', 'Tmt123456!', 'Not Approved', 'a', 'a', 'teacher', '2018-09-20 05:39:41', NULL, NULL, NULL, NULL, NULL),
(29, 'mohsin', 'tmt123456', 'Not Approved', 'Mohsin', 'Ahmed', 'teacher', '2018-09-20 05:40:44', NULL, NULL, NULL, NULL, NULL),
(30, 'mohsin', 'tmt123456', 'Not Approved', 'Mohsin', 'Ahmed', 'teacher', '2018-09-20 05:41:09', NULL, NULL, NULL, NULL, NULL),
(31, 'Mohsin', 'tmt123456', 'Not Approved', 'Mohsin', 'Ahmed', 'school', '2018-09-20 11:40:10', '5', 'Website', 'I want to learning about school and other detrails.', 'aaathis is testing way to improve your slef.', 'nice effort'),
(32, 'demo@demo.com', 'bac15689a2d82022da1e437815e1d650', 'Not Approved', 'a', 'a', 'school', '2018-09-20 11:42:26', '5', 'Website', 'a', 'a', 'a'),
(33, 'demo@demo.com', 'bac15689a2d82022da1e437815e1d650', 'Not Approved', 'Mohsin', 'Ahmed', 'parent', '2018-09-20 11:47:46', '5', 'Website', 'a', 'a', 'a'),
(34, 'admin', 'cc03e747a6afbbcbf8be7668acfebee5', 'Not Approved', 'Mohsin', 'Ahmed', 'parent', '2018-09-20 11:56:56', '5', 'Website', 'a', 'a', 'a'),
(35, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 12:12:24', NULL, NULL, NULL, NULL, NULL),
(36, 'Mohsin', '6b1c2955cc86904b12414eef7abf0a9c', 'Not Approved', 'Mohsin', 'ahmed', 'teacher', '2018-09-20 12:14:05', '5', 'Website', 'a', 'a', 'a'),
(37, 'Mohsin', '6b1c2955cc86904b12414eef7abf0a9c', 'Not Approved', 'Mohsin', 'ahmed', 'teacher', '2018-09-20 12:15:10', '5', 'Website', 'a', 'a', 'a'),
(38, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 12:15:21', NULL, NULL, NULL, NULL, NULL),
(39, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 12:22:31', NULL, NULL, NULL, NULL, NULL),
(40, 'demo@demo.com', 'bac15689a2d82022da1e437815e1d650', 'Not Approved', 'Mohsin', 'Ahmed', 'teacher', '2018-09-20 13:46:43', '5', 'Website', 'a', 'a', 'a'),
(41, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 14:22:33', NULL, NULL, NULL, NULL, NULL),
(42, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'teacher', '2018-09-20 14:23:36', '5', 'Website', 'a', 'a', 'a'),
(43, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 14:23:36', NULL, NULL, NULL, NULL, NULL),
(44, 'asdasd', 'f9ea827850ae6457edfade5b696c206c', 'Not Approved', 'as', 'sa', 'teacher', '2018-09-20 14:25:10', '5', 'Website', 'a', 'a', 'asdasdasda'),
(45, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 14:25:10', NULL, NULL, NULL, NULL, NULL),
(46, 'demo@demo.com', 'bac15689a2d82022da1e437815e1d650', 'Not Approved', 'a', 'a', 'teacher', '2018-09-20 14:27:48', '5', 'Website', 'a', 'a', 'a'),
(47, 'demo@demo.com', 'bac15689a2d82022da1e437815e1d650', 'Not Approved', 'a', 'a', 'teacher', '2018-09-20 14:31:43', '5', 'Website', 'a', 'a', 'a'),
(48, 'demo@demo.com', 'bac15689a2d82022da1e437815e1d650', 'Not Approved', 'a', 'a', 'teacher', '2018-09-20 14:32:21', '5', 'Website', 'a', 'a', 'a'),
(49, 'demo@demo.com', 'bac15689a2d82022da1e437815e1d650', 'Not Approved', 'a', 'a', 'teacher', '2018-09-20 14:33:11', '5', 'Website', 'a', 'a', 'a'),
(50, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'teacher', '2018-09-20 14:34:15', '5', 'Website', 'a', 'a', 'a'),
(51, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'teacher', '2018-09-20 14:38:09', '5', 'Website', 'a', 'a', 'a'),
(52, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'teacher', '2018-09-20 14:42:42', '5', 'Website', 'a', 'a', 'a'),
(53, 'aaa', '47bce5c74f589f4867dbd57e9ca9f808', 'Not Approved', 'a', 'a', 'teacher', '2018-09-20 14:44:38', '5', 'Website', 'a', 'a', 'a'),
(54, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'teacher', '2018-09-20 14:45:40', '5', 'Website', 'a', 'a', 'a'),
(55, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'teacher', '2018-09-20 14:50:49', '5', 'Website', 'a', 'aa', 'aaaaaaa'),
(56, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'teacher', '2018-09-20 14:53:25', '5', 'Website', 'a', 'aa', 'aaaaaaa'),
(57, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'teacher', '2018-09-20 14:54:05', '5', 'Website', 'a', 'aa', 'aaaaaaa'),
(58, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 15:01:46', NULL, NULL, NULL, NULL, NULL),
(59, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 15:01:46', NULL, NULL, NULL, NULL, NULL),
(60, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 15:01:59', NULL, NULL, NULL, NULL, NULL),
(61, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 15:02:04', NULL, NULL, NULL, NULL, NULL),
(62, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 15:02:08', NULL, NULL, NULL, NULL, NULL),
(63, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 15:03:08', NULL, NULL, NULL, NULL, NULL),
(64, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 15:03:16', NULL, NULL, NULL, NULL, NULL),
(65, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 15:03:19', NULL, NULL, NULL, NULL, NULL),
(66, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 15:03:19', NULL, NULL, NULL, NULL, NULL),
(67, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 15:03:19', NULL, NULL, NULL, NULL, NULL),
(68, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 15:03:19', NULL, NULL, NULL, NULL, NULL),
(69, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 15:03:19', NULL, NULL, NULL, NULL, NULL),
(70, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 15:03:20', NULL, NULL, NULL, NULL, NULL),
(71, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 15:03:20', NULL, NULL, NULL, NULL, NULL),
(72, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'school', '2018-10-08 07:35:14', '5', 'Website', 'aa', 'aa', 'a'),
(73, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'school', '2018-10-08 07:36:18', '5', 'Website', 'a', 'aa', 'a'),
(74, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'school', '2018-10-08 07:36:27', '5', 'Website', 'a', 'aa', 'a'),
(75, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'aa', 'a', 'school', '2018-10-08 07:36:54', '4', 'Website', 'a', 'a', 'a'),
(76, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'aa', 'a', 'school', '2018-10-08 07:37:28', '4', 'Website', 'a', 'a', 'a'),
(77, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'aa', 'a', 'school', '2018-10-08 07:38:17', '4', 'Website', 'a', 'a', 'a'),
(78, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'school', '2018-10-08 07:42:18', '5', 'Website', 'a', 'a', 'a'),
(79, 'aa', '74b87337454200d4d33f80c4663dc5e5', 'Not Approved', 'aaa', 'aaa', 'school', '2018-10-08 10:33:52', '5', 'Website', 'a', 'a', 'a'),
(80, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'school', '2018-10-08 10:38:05', '5', 'Website', 'a', 'a', 'a'),
(81, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'school', '2018-10-08 10:38:34', '5', 'Website', 'a', 'a', 'a'),
(82, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'school', '2018-10-08 10:41:00', '5', 'Website', 'a', 'a', 'a'),
(83, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'school', '2018-10-08 10:42:30', '5', 'Website', 'a', 'a', 'a'),
(84, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'school', '2018-10-08 10:42:34', '5', 'Website', 'a', 'a', 'a'),
(85, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'school', '2018-10-08 10:42:53', '5', 'Website', 'a', 'a', 'a'),
(86, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'school', '2018-10-08 10:43:43', '5', 'Website', 'a', 'a', 'a'),
(87, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'school', '2018-10-08 10:43:50', '5', 'Website', 'a', 'a', 'a'),
(88, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'school', '2018-10-08 10:46:43', '5', 'Website', 'a', 'a', 'a');

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
-- Indexes for table `page_counter`
--
ALTER TABLE `page_counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents_profile`
--
ALTER TABLE `parents_profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seeker_profile_users_id_fk` (`user_id`);

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
  ADD KEY `review_users_id_fk` (`user_id`);

--
-- Indexes for table `school_branches`
--
ALTER TABLE `school_branches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `school_branches_school_profile_id_fk` (`school_profile_id`);

--
-- Indexes for table `school_features`
--
ALTER TABLE `school_features`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `school_rating`
--
ALTER TABLE `school_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_rating_questions`
--
ALTER TABLE `school_rating_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_teachers`
--
ALTER TABLE `school_teachers`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `page_counter`
--
ALTER TABLE `page_counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `parents_profile`
--
ALTER TABLE `parents_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `school_branches`
--
ALTER TABLE `school_branches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `school_features`
--
ALTER TABLE `school_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `school_jobs`
--
ALTER TABLE `school_jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `school_profile`
--
ALTER TABLE `school_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `school_rating`
--
ALTER TABLE `school_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;
--
-- AUTO_INCREMENT for table `school_rating_questions`
--
ALTER TABLE `school_rating_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `school_teachers`
--
ALTER TABLE `school_teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tutors_profile`
--
ALTER TABLE `tutors_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
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
-- Constraints for table `parents_profile`
--
ALTER TABLE `parents_profile`
  ADD CONSTRAINT `seeker_profile_users_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

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
-- Constraints for table `tutors_profile`
--
ALTER TABLE `tutors_profile`
  ADD CONSTRAINT `tutors_profile_users_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

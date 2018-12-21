-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2018 at 09:02 AM
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
  `download_title` varchar(255) DEFAULT NULL,
  `download_file` varchar(255) DEFAULT NULL,
  `download_tags` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `school_id` int(11) DEFAULT NULL,
  `job_title` varchar(255) DEFAULT NULL,
  `job_description` text,
  `job_salary` float(8,2) DEFAULT NULL,
  `job_active` int(1) DEFAULT NULL,
  `job_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `job_closed_date` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `school_id`, `job_title`, `job_description`, `job_salary`, `job_active`, `job_created_date`, `job_closed_date`) VALUES
(1, 1, 'Montessori Directress', 'Responsiblities', 10000.00, 1, '2018-12-20 07:14:34', '2018-12-20 02:13:48'),
(2, 2, 'Maths Teacher', 'Responsiblities', 12000.00, 0, '2018-12-20 07:14:34', '2018-12-26 02:13:48');

-- --------------------------------------------------------

--
-- Table structure for table `jobs_categoies`
--

CREATE TABLE `jobs_categoies` (
  `id` int(11) NOT NULL,
  `job_category_title` varchar(255) DEFAULT NULL,
  `job_category_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job_applied`
--

CREATE TABLE `job_applied` (
  `id` int(11) NOT NULL,
  `job_id` int(11) DEFAULT NULL,
  `tutor_id` int(11) DEFAULT NULL,
  `applied_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `page_description` text,
  `page_url` varchar(255) DEFAULT NULL,
  `page_tags` text,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text,
  `meta_keyword` text,
  `page_status` varchar(255) DEFAULT NULL,
  `page_is_active` int(1) DEFAULT NULL
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
(1, 16, 1, 23),
(2, 17, 2, 9),
(3, 78, 7, 24),
(4, 88, 8, 0),
(5, 89, 9, 0),
(6, 90, 10, 0),
(7, 91, 11, 0),
(8, 92, 12, 0),
(9, 93, 13, 0);

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
(2, 34, NULL, '0331', '1111', 'Male', 'karachi', 'All Location', NULL, '36'),
(3, 104, NULL, '00303030303', 'https://www.facebook.com/karachiparentsguide/', 'Female', 'karachi', 'Clifton', NULL, '24');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `post_title` varchar(255) DEFAULT NULL,
  `post_description` text,
  `posts_tags` text,
  `posts_status` varchar(255) DEFAULT 'Unpublished',
  `post_is_active` int(1) DEFAULT '0',
  `post_url` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `post_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `post_category` int(11) DEFAULT NULL,
  `post_featured_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `post_title`, `post_description`, `posts_tags`, `posts_status`, `post_is_active`, `post_url`, `meta_title`, `meta_description`, `meta_keyword`, `post_date`, `post_category`, `post_featured_img`) VALUES
(1, 16, '‘I Kept Thinking of Antioch’: Long Before #MeToo', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 'schools, montessori', 'published', 1, 'test', NULL, NULL, NULL, '2018-12-13 18:09:27', 1, NULL),
(2, 16, 'With Changing Students and Times', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 'schools, montessori', 'published', 1, 'i-kept-thinking-of-antioch1\r\n\r\n', NULL, NULL, NULL, '2018-12-13 18:09:27', 2, NULL),
(3, 16, 'Law Schools Debate a Contentious Testing Alternative', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 'schools, montessori', 'published', 1, 'i-kept-thinking-of-antioch2\r\n\r\n', NULL, NULL, NULL, '2018-12-13 18:09:27', 3, NULL),
(4, 16, 'Here’s What You Need to Know About Online Testing', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 'schools, montessori', 'published', 1, 'i-kept-thinking-of-4\r\n\r\n', NULL, NULL, NULL, '2018-12-13 18:09:27', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts_category`
--

CREATE TABLE `posts_category` (
  `id` int(11) NOT NULL,
  `category_title` varchar(255) DEFAULT NULL,
  `category_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts_category`
--

INSERT INTO `posts_category` (`id`, `category_title`, `category_url`) VALUES
(1, 'Montessori', 'montessori'),
(2, 'Kindergarden', 'kindergarden'),
(3, 'Schools', 'schools'),
(4, 'kids', 'kids'),
(5, 'ADHD', 'adhd');

-- --------------------------------------------------------

--
-- Table structure for table `posts_tags`
--

CREATE TABLE `posts_tags` (
  `id` int(11) NOT NULL,
  `tags_id` int(11) DEFAULT NULL,
  `posts_id` int(11) DEFAULT NULL
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
  `school_profile_id` int(11) DEFAULT NULL,
  `tutor_profile_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `user_id`, `overall_rating`, `overall_message`, `review_date`, `school_profile_id`, `tutor_profile_id`) VALUES
(1, 18, '5', 'this is good review for school let test finally', '2018-09-28 10:56:48', 1, NULL),
(15, 19, '3', '1111', '2018-09-28 11:47:43', 1, NULL),
(16, 20, '4', 'this is good review for school let test finally', '2018-09-28 11:47:43', 1, NULL),
(17, 17, '1', 'testing', '2018-09-28 11:47:43', 1, NULL),
(18, 16, '5', 'testing', '2018-09-28 11:47:43', 1, NULL),
(19, 16, '3', 'testing', '2018-09-28 11:47:43', NULL, 13);

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
(1, 1, '0', '0', '0', 'Montessori', 'Montessori', '10', 'Yes', '', '', '', ''),
(2, 2, '0', '0', '0', 'Public', '1-10', '200', 'Yes ', '123', '35', 'EAAPjhadQgkoBANW5XRDa0JsxvPZCfUpNlZBVk0lGbjLx7wICZCBvepvmqkijSEJb32fhYTyLkAL0paXYpXeybQxfFTBQoTZBD6TpRtgMHKEKf6GlwIUQWMJ2ZBrsIfOkAbCt3eSbIufwyDeF0Kq6V0hAZCNEJyVahq2tHQVDId2wZDZD', '1992138387503935'),
(3, 6, NULL, NULL, NULL, 'a', 'a', 'a', 'a', NULL, NULL, 'EAAPjhadQgkoBANW5XRDa0JsxvPZCfUpNlZBVk0lGbjLx7wICZCBvepvmqkijSEJb32fhYTyLkAL0paXYpXeybQxfFTBQoTZBD6TpRtgMHKEKf6GlwIUQWMJ2ZBrsIfOkAbCt3eSbIufwyDeF0Kq6V0hAZCNEJyVahq2tHQVDId2wZDZD', '1992138387503935'),
(4, 7, NULL, NULL, NULL, 'a', 'a', 'a', 'a', NULL, NULL, 'EAAPjhadQgkoBANW5XRDa0JsxvPZCfUpNlZBVk0lGbjLx7wICZCBvepvmqkijSEJb32fhYTyLkAL0paXYpXeybQxfFTBQoTZBD6TpRtgMHKEKf6GlwIUQWMJ2ZBrsIfOkAbCt3eSbIufwyDeF0Kq6V0hAZCNEJyVahq2tHQVDId2wZDZD', '1992138387503935'),
(5, 8, NULL, NULL, NULL, 'a', 'a', 'a', 'a', NULL, NULL, NULL, NULL),
(6, 9, '1', NULL, '1', 'Public', 'A', '134', 'AMI', NULL, NULL, NULL, NULL),
(7, 10, NULL, NULL, NULL, 'a', 'aa', 'a', 'a', NULL, NULL, NULL, NULL),
(8, 11, NULL, NULL, NULL, 's', 's', 's', 's', NULL, NULL, NULL, NULL),
(9, 12, '0', '0', '0', 'Montessori', 'Montessori', '10', 'Yes', '', '', '', ''),
(10, 13, '1', NULL, NULL, 'Montessori', 'Montessori', '10', 'Yes', NULL, NULL, NULL, NULL);

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
(1, 16, 'Karachi Parents School Guide - Testinga', '021-3111111', 'kpsguide@gmail.com', '', 'https://www.kpsguide.pk', 'https://www.kpsguide.pk', 'https://www.kpsguide.pk', 'karachi', 'Clifton', 'This is testing Profile', 'aa', 'aa'),
(2, 17, 'Arise School', 't', 'a', 'abacaksdkfksd', 'a', 'a', NULL, 'karachi', 'north', NULL, 'aa', 'aa'),
(3, 31, 'Mrs.Ahmed Montissori & Propatary', '021-31111111', 'a', 'aaaaaaaaaasdsadada', 'aaaaa', 'aaaaaa', NULL, 'karachi', 'nazimabad', NULL, 'aa', 'aa'),
(4, 32, 'a', '021-3aa', 'aaa', 'a', 'a', 'a', NULL, 'karachi', 'nazimabad', NULL, 'aa', 'aa'),
(5, 76, 'a', '021-3', 'a', 'a', 'a', 'a', 'a', 'karachi', 'nazimabad', 'a', 'aa', 'aa'),
(6, 77, 'a', '021-3', 'a', 'a', 'a', 'a', 'a', 'karachi', 'Clifton', 'a', 'aa', 'aa'),
(7, 78, 'a', '021-3', 'a', 'aaa', 'a', 'a', 'a', 'karachi', 'Clifton', 'a', 'aa', 'aa'),
(8, 88, 'a', '021-3a', 'a', 'aaa', 'a', 'a', 'a', 'karachi', 'Clifton', 'aaa', 'aa', 'aa'),
(9, 89, 'mohsinSchool', '021-3', 'test@es.com', 'aaaa', 'aa', 'a', 'a', 'karachi', 'north', 'testss', 'aa', 'aa'),
(10, 90, 'a', '021-311', '11', 'a', '11', '11', '11', 'karachi', 'Clifton', 'adasdas', 'aa', 'aa'),
(11, 91, 'a', '021-3', 's', 's', 's', 's', 's', 'karachi', 'north', 's', 'aa', 'aa'),
(12, 92, 'Karachi Parents School Guide - Tes', '021-3111111', 'kpsguide@gmail.com', '', 'https://www.kpsguide.pk', 'https://www.kpsguide.pk', 'https://www.kpsguide.pk', 'karachi', 'Clifton', 'This is testing Profile', 'aa', 'aa'),
(13, 93, 'Karachi Parents School Guide - Testing', '021-3111111', 'kpsguide@gmail.com', 'C117, Block C', 'https://www.kpsguide.pk', 'https://www.kpsguide.pk', 'https://www.kpsguide.pk', 'karachi', 'North Nazimabad', 'This is testing Profile', 'aa', 'aa');

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
(2, 36, 1, '2', 'Maths Teacher'),
(5, 57, 12, '12', NULL);

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
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `tags_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tutors_experience`
--

CREATE TABLE `tutors_experience` (
  `id` int(11) NOT NULL,
  `tutors_profile_id` int(11) DEFAULT NULL,
  `tutors_experience_job_title` varchar(255) DEFAULT NULL,
  `tutors_experience_job_company` varchar(255) DEFAULT NULL,
  `tutors_experience_job_date` varchar(255) NOT NULL,
  `tutors_experience_on_job` varchar(255) DEFAULT 'No',
  `tutors_experience_job_description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutors_experience`
--

INSERT INTO `tutors_experience` (`id`, `tutors_profile_id`, `tutors_experience_job_title`, `tutors_experience_job_company`, `tutors_experience_job_date`, `tutors_experience_on_job`, `tutors_experience_job_description`) VALUES
(1, NULL, NULL, NULL, '2018-12-09 15:47:09', NULL, NULL),
(2, 13, 'Maths Teacher', 'The Educators', '2014', 'Yes', 'testing Experienceaa'),
(3, NULL, NULL, NULL, '2018-12-09 16:26:32', NULL, NULL),
(4, NULL, NULL, NULL, '2018-12-09 16:26:40', NULL, NULL),
(5, NULL, NULL, NULL, '2018-12-09 16:27:10', NULL, NULL),
(6, NULL, NULL, NULL, '2018-12-09 16:27:19', NULL, NULL),
(7, NULL, NULL, NULL, '2018-12-09 16:29:10', NULL, NULL),
(8, NULL, 'Urdu Teacher ', 'The City School', '2016', 'No', 'JOb Description'),
(9, NULL, 'Urdu Teacher ', 'The City School', '2016', 'Yes', 'testing '),
(10, NULL, 'Urdu Teacher ', 'The City School', '2016', 'Yes', 'testing '),
(11, 13, 'Urdu Teacher ', 'The City School', '2016', 'No', 'Testing Addition');

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
  `tutor_resume` varchar(255) DEFAULT NULL,
  `tutor_address` varchar(255) DEFAULT NULL,
  `map_latitute` text,
  `map_longtitute` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutors_profile`
--

INSERT INTO `tutors_profile` (`id`, `user_id`, `tutor_name`, `tutor_job_status`, `tutor_city`, `tutor_facebook_link`, `tutor_linkedin`, `tutor_description`, `tutor_cover`, `tutor_avatar`, `tutor_area`, `tutor_phone`, `tutor_where_to_teach`, `tutor_gender`, `tutor_age`, `tutor_experience`, `tutor_tuition_timing`, `tutor_cnic`, `tutor_resume`, `tutor_address`, `map_latitute`, `map_longtitute`) VALUES
(1, 30, 'Umar Khan', 'Yes', 'karachi', 'aa', 'aaaaa', 'aaaa', NULL, NULL, 'North', '03313644820', 'No', 'Male', NULL, NULL, NULL, NULL, NULL, 'Block c', NULL, NULL),
(2, 36, 'Hammad Hassan', 'No', 'karachi', 'aaa', 'aaaa', 'autoparkway', NULL, NULL, 'North', '920331396666', 'Array', 'Female', 36, 'aaa', 'aa', '0000000000000000', NULL, 'Block c', NULL, NULL),
(3, 37, 'Samrah', 'No', 'karachi', 'aaa', 'aaaa', 'autoparkway', NULL, NULL, 'Clifton', '920331396666', 'Array', 'Female', 36, 'aaa', 'aa', '0000000000000000', NULL, 'Block c', NULL, NULL),
(4, 40, 'Mohsin Ahmed', 'No', 'karachi', 'aa', 'aa', 'testing', NULL, NULL, 'Clifton', '03313644820', 'At Your Place, Academy, School', 'Male', 36, 'aaa', 'aa', '0000000000000', NULL, 'Block c', NULL, NULL),
(5, 46, 'farhan', 'No', 'karachi', 'a', 'a', 'a', NULL, NULL, 'Clifton', 'a', 'At Student Place, At Your Place, Academy, School', 'Male', 0, 'a', 'a', 'a', NULL, 'Block c', NULL, NULL),
(6, 47, 'obaid', 'No', 'karachi', 'a', 'a', 'a', NULL, NULL, 'Clifton', 'a', 'At Student Place, At Your Place, Academy, School', 'Male', 0, 'a', 'a', 'a', NULL, 'Block c', NULL, NULL),
(7, 48, 'sumaria', 'No', 'karachi', 'a', 'a', 'a', NULL, NULL, 'DHA', 'a', 'At Student Place, At Your Place, Academy, School', 'Male', 0, 'a', 'a', 'a', NULL, 'Block c', NULL, NULL),
(8, 52, 'ayesha', 'No', 'karachi', 'aa', 'aaaa', 'aa', NULL, NULL, 'DHA', 'aa', 'At Student Place, At Your Place', 'Male', 0, 'aaaa', 'aaa', 'a', 'IN_000380194051.pdf', 'Block c', NULL, NULL),
(9, 54, 'fazil', 'No', 'karachi', 'a', 'a', 'a', NULL, NULL, 'DHA', 'a', 'At Student Place, At Your Place, School', 'Male', 0, 'a', 'a', 'a', 'IN_000380194051(1).pdf', 'Block c', NULL, NULL),
(10, 55, 'asif', 'No', 'karachi', 'a', 'a', 'a', NULL, NULL, 'Malir', 'a', 'At Student Place, At Your Place, Academy', 'Male', 0, 'a', 'a', 'a', 'IN_000380194051.pdf', 'Block c', NULL, NULL),
(11, 56, 'sommoro', 'No', 'karachi', 'a', 'a', 'a', NULL, NULL, 'Malir', 'a', 'At Student Place, At Your Place, Academy', 'Male', 0, 'a', 'a', 'a', 'IN_000380194051.pdf', 'Block c', NULL, NULL),
(12, 57, 'faizan', 'No', 'karachi', 'a', 'a', 'a', NULL, NULL, 'Malir', 'a', 'At Student Place, At Your Place, Academy', 'Male', 0, 'a', 'a', 'a', 'IN_000380194051.pdf', 'Block c', NULL, NULL),
(13, 102, 'mohsin ahmed', 'No', 'karachi', 'a', 'a', 'mohsintesting', NULL, NULL, 'DHA', '03313644829', 'At Your Place, Academy', 'Male', 24, 'a', 'aa', '11111110', '2JmC5lRa_400x400.jpg', 'Block c', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tutors_qualification`
--

CREATE TABLE `tutors_qualification` (
  `id` int(11) NOT NULL,
  `tutors_profile_id` int(11) DEFAULT NULL,
  `tutors_qualification_title` varchar(255) DEFAULT NULL,
  `tutors_qualification_year` varchar(255) DEFAULT NULL,
  `tutors_qualification_description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutors_qualification`
--

INSERT INTO `tutors_qualification` (`id`, `tutors_profile_id`, `tutors_qualification_title`, `tutors_qualification_year`, `tutors_qualification_description`) VALUES
(1, 13, 'Bsc', '2007', 'Tewsting Qualification'),
(2, 13, 'Intermedate', '2008', 'Testing Another Qualification');

-- --------------------------------------------------------

--
-- Table structure for table `tutors_rating`
--

CREATE TABLE `tutors_rating` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `tutor_profile_id` int(11) DEFAULT NULL,
  `review_id` int(11) DEFAULT NULL,
  `tutor_raitng_question_id` int(11) DEFAULT NULL,
  `tutor_rating_value` int(11) DEFAULT NULL,
  `tutor_rating_why_this` text,
  `tutor_rating_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tutors_rating_question`
--

CREATE TABLE `tutors_rating_question` (
  `id` int(11) NOT NULL,
  `tutor_rating_question` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tutor_tutions`
--

CREATE TABLE `tutor_tutions` (
  `id` int(11) NOT NULL,
  `tutor_profile_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `profile_status` varchar(255) DEFAULT '0',
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `user_type` varchar(255) DEFAULT 'parents',
  `join_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `rate_us` varchar(255) DEFAULT '5',
  `hear_about_us` varchar(255) DEFAULT 'Website',
  `why_to_join` text,
  `how_to_improve` text,
  `testimonials` text,
  `verify_hash` varchar(32) DEFAULT NULL,
  `active` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `profile_status`, `first_name`, `last_name`, `user_type`, `join_date`, `rate_us`, `hear_about_us`, `why_to_join`, `how_to_improve`, `testimonials`, `verify_hash`, `active`) VALUES
(16, 'ahmed.mohsin98@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', 'Not Approved', 'Na', 'Ahmed', 'school', '2018-09-19 07:10:04', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(17, '1ahmed.mohsin98@ghmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', 'Not Approved', 'Hammad', 'Hassan', 'school', '2018-09-19 19:24:31', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(18, '2ahmed.mohsin98@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', 'Not Approved', 'Farhan', 'Soomoro', 'teacher', '2018-09-19 19:29:59', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(19, '3ahmed.mohsin98@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', 'Not Approved', 'Faizan', 'Raza', 'teacher', '2018-09-19 19:31:04', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(20, '4ahmed.mohsin98@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', 'Not Approved', 'Mohsin', 'ahmed', 'teacher', '2018-09-19 19:32:41', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(21, '5ahmed.mohsin98@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', 'Not Approved', 'Mohsin', 'ahmed', 'teacher', '2018-09-19 19:33:14', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(22, '6ahmed.mohsin98@gmail.com', 'tmt123456', 'Not Approved', 'Mohsin', 'ahmed', 'teacher', '2018-09-19 19:33:56', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(23, '8ahmed.mohsin98@gmail.com', 'tmt123456', 'Not Approved', 'Mohsin', 'ahmed', 'teacher', '2018-09-20 05:31:55', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(24, '7ahmed.mohsin98@gmail.com', 'tmt123456', 'Not Approved', 'Mohsin', 'ahmed', 'teacher', '2018-09-20 05:33:03', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(25, 'demo@demo.com', 'Tmt123456!', 'Not Approved', 'Mohsin', 'ahmed', 'teacher', '2018-09-20 05:35:54', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(26, 'aaaa', 'Tmt123456!', 'Not Approved', 'a', 'a', 'teacher', '2018-09-20 05:36:45', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(27, 'aaaa', 'Tmt123456!', 'Not Approved', 'a', 'a', 'teacher', '2018-09-20 05:38:14', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(28, 'aaaa', 'Tmt123456!', 'Not Approved', 'a', 'a', 'teacher', '2018-09-20 05:39:41', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(29, 'mohsin', 'tmt123456', 'Not Approved', 'Mohsin', 'Ahmed', 'teacher', '2018-09-20 05:40:44', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(30, 'mohsin', 'tmt123456', 'Not Approved', 'Mohsin', 'Ahmed', 'teacher', '2018-09-20 05:41:09', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(31, 'Mohsin', 'tmt123456', 'Not Approved', 'Mohsin', 'Ahmed', 'school', '2018-09-20 11:40:10', '5', 'Website', 'I want to learning about school and other detrails.', 'aaathis is testing way to improve your slef.', 'nice effort', NULL, 0),
(32, 'demo@demo.com', 'bac15689a2d82022da1e437815e1d650', 'Not Approved', 'a', 'a', 'school', '2018-09-20 11:42:26', '5', 'Website', 'a', 'a', 'a', NULL, 0),
(33, 'demo@demo.com', 'bac15689a2d82022da1e437815e1d650', 'Not Approved', 'Mohsin', 'Ahmed', 'parent', '2018-09-20 11:47:46', '5', 'Website', 'a', 'a', 'a', NULL, 0),
(34, 'admin', 'cc03e747a6afbbcbf8be7668acfebee5', 'Not Approved', 'Mohsin', 'Ahmed', 'parent', '2018-09-20 11:56:56', '5', 'Website', 'a', 'a', 'a', NULL, 0),
(35, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 12:12:24', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(36, 'Mohsin', '6b1c2955cc86904b12414eef7abf0a9c', 'Not Approved', 'Mohsin', 'ahmed', 'teacher', '2018-09-20 12:14:05', '5', 'Website', 'a', 'a', 'a', NULL, 0),
(37, 'Mohsin', '6b1c2955cc86904b12414eef7abf0a9c', 'Not Approved', 'Mohsin', 'ahmed', 'teacher', '2018-09-20 12:15:10', '5', 'Website', 'a', 'a', 'a', NULL, 0),
(38, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 12:15:21', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(39, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 12:22:31', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(40, 'demo@demo.com', 'bac15689a2d82022da1e437815e1d650', 'Not Approved', 'Mohsin', 'Ahmed', 'teacher', '2018-09-20 13:46:43', '5', 'Website', 'a', 'a', 'a', NULL, 0),
(41, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 14:22:33', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(42, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'teacher', '2018-09-20 14:23:36', '5', 'Website', 'a', 'a', 'a', NULL, 0),
(43, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 14:23:36', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(44, 'asdasd', 'f9ea827850ae6457edfade5b696c206c', 'Not Approved', 'as', 'sa', 'teacher', '2018-09-20 14:25:10', '5', 'Website', 'a', 'a', 'asdasdasda', NULL, 0),
(45, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 14:25:10', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(46, 'demo@demo.com', 'bac15689a2d82022da1e437815e1d650', 'Not Approved', 'a', 'a', 'teacher', '2018-09-20 14:27:48', '5', 'Website', 'a', 'a', 'a', NULL, 0),
(47, 'demo@demo.com', 'bac15689a2d82022da1e437815e1d650', 'Not Approved', 'a', 'a', 'teacher', '2018-09-20 14:31:43', '5', 'Website', 'a', 'a', 'a', NULL, 0),
(48, 'demo@demo.com', 'bac15689a2d82022da1e437815e1d650', 'Not Approved', 'a', 'a', 'teacher', '2018-09-20 14:32:21', '5', 'Website', 'a', 'a', 'a', NULL, 0),
(49, 'demo@demo.com', 'bac15689a2d82022da1e437815e1d650', 'Not Approved', 'a', 'a', 'teacher', '2018-09-20 14:33:11', '5', 'Website', 'a', 'a', 'a', NULL, 0),
(50, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'teacher', '2018-09-20 14:34:15', '5', 'Website', 'a', 'a', 'a', NULL, 0),
(51, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'teacher', '2018-09-20 14:38:09', '5', 'Website', 'a', 'a', 'a', NULL, 0),
(52, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'teacher', '2018-09-20 14:42:42', '5', 'Website', 'a', 'a', 'a', NULL, 0),
(53, 'aaa', '47bce5c74f589f4867dbd57e9ca9f808', 'Not Approved', 'a', 'a', 'teacher', '2018-09-20 14:44:38', '5', 'Website', 'a', 'a', 'a', NULL, 0),
(54, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'teacher', '2018-09-20 14:45:40', '5', 'Website', 'a', 'a', 'a', NULL, 0),
(55, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'teacher', '2018-09-20 14:50:49', '5', 'Website', 'a', 'aa', 'aaaaaaa', NULL, 0),
(56, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'teacher', '2018-09-20 14:53:25', '5', 'Website', 'a', 'aa', 'aaaaaaa', NULL, 0),
(57, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'teacher', '2018-09-20 14:54:05', '5', 'Website', 'a', 'aa', 'aaaaaaa', NULL, 0),
(58, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 15:01:46', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(59, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 15:01:46', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(60, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 15:01:59', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(61, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 15:02:04', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(62, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 15:02:08', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(63, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 15:03:08', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(64, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 15:03:16', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(65, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 15:03:19', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(66, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 15:03:19', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(67, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 15:03:19', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(68, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 15:03:19', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(69, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 15:03:19', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(70, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 15:03:20', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(71, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Not Approved', NULL, NULL, NULL, '2018-09-20 15:03:20', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(72, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'school', '2018-10-08 07:35:14', '5', 'Website', 'aa', 'aa', 'a', NULL, 0),
(73, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'school', '2018-10-08 07:36:18', '5', 'Website', 'a', 'aa', 'a', NULL, 0),
(74, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'school', '2018-10-08 07:36:27', '5', 'Website', 'a', 'aa', 'a', NULL, 0),
(75, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'aa', 'a', 'school', '2018-10-08 07:36:54', '4', 'Website', 'a', 'a', 'a', NULL, 0),
(76, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'aa', 'a', 'school', '2018-10-08 07:37:28', '4', 'Website', 'a', 'a', 'a', NULL, 0),
(77, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'aa', 'a', 'school', '2018-10-08 07:38:17', '4', 'Website', 'a', 'a', 'a', NULL, 0),
(78, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'school', '2018-10-08 07:42:18', '5', 'Website', 'a', 'a', 'a', NULL, 0),
(79, 'aa', '74b87337454200d4d33f80c4663dc5e5', 'Not Approved', 'aaa', 'aaa', 'school', '2018-10-08 10:33:52', '5', 'Website', 'a', 'a', 'a', NULL, 0),
(80, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'school', '2018-10-08 10:38:05', '5', 'Website', 'a', 'a', 'a', NULL, 0),
(81, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'school', '2018-10-08 10:38:34', '5', 'Website', 'a', 'a', 'a', NULL, 0),
(82, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'school', '2018-10-08 10:41:00', '5', 'Website', 'a', 'a', 'a', NULL, 0),
(83, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'school', '2018-10-08 10:42:30', '5', 'Website', 'a', 'a', 'a', NULL, 0),
(84, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'school', '2018-10-08 10:42:34', '5', 'Website', 'a', 'a', 'a', NULL, 0),
(85, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'school', '2018-10-08 10:42:53', '5', 'Website', 'a', 'a', 'a', NULL, 0),
(86, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'school', '2018-10-08 10:43:43', '5', 'Website', 'a', 'a', 'a', NULL, 0),
(87, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'school', '2018-10-08 10:43:50', '5', 'Website', 'a', 'a', 'a', NULL, 0),
(88, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Not Approved', 'a', 'a', 'school', '2018-10-08 10:46:43', '5', 'Website', 'a', 'a', 'a', NULL, 0),
(89, 'ahme@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', 'Not Approved', 'New', 'mohsin', 'school', '2018-10-11 06:28:18', '5', 'Website', 'test', 'test', 'test', NULL, 0),
(90, 'emailverify', '0cc175b9c0f1b6a831c399e269772661', '0', 'a', 'aaa', 'school', '2018-10-16 06:52:12', '5', 'Website', 'aaa', 'aaa', 'aaa', '58e4d44e550d0f7ee0a23d6b02d9b0db', 1),
(91, 'aaa', '4124bc0a9335c27f086f24ba207a4912', '0', 'a', 'a', 'school', '2018-10-16 07:36:36', '5', 'Website', 's', 's', 's', 'effc299a1addb07e7089f9b269c31f2f', 1),
(92, 'moahmed0331@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', '0', 'Nabiaa', 'Mohsin', 'school', '2018-11-25 08:52:08', '5', 'Website', 'a', 'a', 'a', '8a1e808b55fde9455cb3d8857ed88389', 1),
(93, 'moahmed0301@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', '0', 'Nabia', 'Mohsin', 'school', '2018-11-25 09:20:15', '5', 'Website', 'a', 'a', 'a', 'a516a87cfcaef229b342c437fe2b95f7', 0),
(94, 'kpsgui@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', '0', 'Nabia', 'Moshin', 'teacher', '2018-11-25 17:54:47', '5', 'Website', 'a', 'a', 'a', 'cd14821dab219ea06e2fd1a2df2e3582', 0),
(95, 'kpsgui@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', '0', 'Nabia', 'Moshin', 'teacher', '2018-11-25 17:56:50', '5', 'Website', 'a', 'a', 'a', '7810ccd41bf26faaa2c4e1f20db70a71', 0),
(96, 'kpsgui@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', '0', 'Nabia', 'Moshin', 'teacher', '2018-11-25 18:00:04', '5', 'Website', 'a', 'a', 'a', 'a34bacf839b923770b2c360eefa26748', 0),
(97, 'kpsgaui@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', '0', 'Nabia', 'Moshin', 'teacher', '2018-11-25 18:00:25', '5', 'Website', 'a', 'a', 'a', '1ec3e7af38e33222bde173fecaef6bfa', 0),
(98, 'aaa@demo.com', 'cc03e747a6afbbcbf8be7668acfebee5', '0', 'a', 'a', 'teacher', '2018-11-25 18:01:14', '5', 'Website', 'a', 'a', 'a', 'ae5e3ce40e0404a45ecacaaf05e5f735', 0),
(99, 'aaa@demo.com', 'cc03e747a6afbbcbf8be7668acfebee5', '0', 'a', 'a', 'teacher', '2018-11-25 18:06:05', '5', 'Website', 'a', 'a', 'a', '42853a61b26fef79e2ae788d97356799', 0),
(100, 'adm@demo.com', 'cc03e747a6afbbcbf8be7668acfebee5', '0', 'mohsin', 'ahmed', 'teacher', '2018-11-25 18:07:33', '5', 'Website', 'a', 'a', 'a', '3dd9424294b0292b6e89ea2bba2e1144', 0),
(101, 'ad@am.in', 'cc03e747a6afbbcbf8be7668acfebee5', '0', 'a', 'a', 'teacher', '2018-11-25 18:16:21', '5', 'Website', 'a', 'a', 'a', '1bb91f73e9d31ea2830a5e73ce3ed328', 0),
(102, 'moahmed0aa332@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', '0', 'mohsin', 'ahmed', 'teacher', '2018-12-01 10:59:09', '5', 'Website', 'a', 'a', 'a', '044a23cadb567653eb51d4eb40acaa88', 1),
(103, 'moahmed0aaaaaa333@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', '0', 'nabia', 'mohsin', 'parent', '2018-12-10 18:23:46', '5', 'Website', 'a', 'a', 'a', 'ab233b682ec355648e7891e66c54191b', 0),
(104, 'moahmed0333@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', '0', 'nabia', 'mohsin', 'parent', '2018-12-10 18:27:10', '5', 'Website', 'a', 'a', 'a', '7d2b92b6726c241134dae6cd3fb8c182', 1);

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
  ADD KEY `downloads_users_id_fk` (`user_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs_categoies`
--
ALTER TABLE `jobs_categoies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_applied`
--
ALTER TABLE `job_applied`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `job_applied_tutor_id_uindex` (`tutor_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts_category`
--
ALTER TABLE `posts_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts_tags`
--
ALTER TABLE `posts_tags`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutors_experience`
--
ALTER TABLE `tutors_experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutors_profile`
--
ALTER TABLE `tutors_profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tutors_profile_users_id_fk` (`user_id`);

--
-- Indexes for table `tutors_qualification`
--
ALTER TABLE `tutors_qualification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutors_rating`
--
ALTER TABLE `tutors_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutors_rating_question`
--
ALTER TABLE `tutors_rating_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutor_tutions`
--
ALTER TABLE `tutor_tutions`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jobs_categoies`
--
ALTER TABLE `jobs_categoies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `job_applied`
--
ALTER TABLE `job_applied`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `page_counter`
--
ALTER TABLE `page_counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `parents_profile`
--
ALTER TABLE `parents_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `posts_category`
--
ALTER TABLE `posts_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `posts_tags`
--
ALTER TABLE `posts_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `school_branches`
--
ALTER TABLE `school_branches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `school_features`
--
ALTER TABLE `school_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `school_jobs`
--
ALTER TABLE `school_jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `school_profile`
--
ALTER TABLE `school_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tutors_experience`
--
ALTER TABLE `tutors_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tutors_profile`
--
ALTER TABLE `tutors_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tutors_qualification`
--
ALTER TABLE `tutors_qualification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tutors_rating`
--
ALTER TABLE `tutors_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tutors_rating_question`
--
ALTER TABLE `tutors_rating_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tutor_tutions`
--
ALTER TABLE `tutor_tutions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
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

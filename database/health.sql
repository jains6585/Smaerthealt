-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2018 at 12:54 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health`
--

-- --------------------------------------------------------

--
-- Table structure for table `diesease`
--

CREATE TABLE `diesease` (
  `sno` int(11) NOT NULL,
  `Disease` text NOT NULL,
  `Symptom1` text NOT NULL,
  `Symptom2` text NOT NULL,
  `Symptom3` text NOT NULL,
  `Symptom4` text NOT NULL,
  `Symptom5` text NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diesease`
--

INSERT INTO `diesease` (`sno`, `Disease`, `Symptom1`, `Symptom2`, `Symptom3`, `Symptom4`, `Symptom5`, `category`) VALUES
(1, 'Alzheimer', 'loss of bowel control', 'urinary incontinence.', '', '', '', 'physician'),
(2, 'Allergy', 'Runny Nose', 'Watery Eye', 'Cough', '', '', 'allergetic'),
(3, 'Anemia', 'Pale Skin', 'Fatigue', 'Shortness Of Breath', '', '', 'physician'),
(4, 'Anxiety', 'palpitations', 'sweating', 'irritability', 'feelings of stress', '', 'physician'),
(5, 'Asthma', 'Wheezing', 'Shortness Of Breath', 'Cough', '', '', 'physician'),
(6, 'Bird Flu', 'nausea and vomiting', 'fever', 'headache', 'diarrhea', 'cough', 'physician'),
(7, 'Bladder Infection', 'Blood In Urine', 'Pain On Urination', 'Frequent Urination', '', '', 'Urologist'),
(8, 'Bleeding Gums', 'Bad Breath', 'Mouth Sores', 'Lump On Gums', '', '', 'dentiest'),
(9, 'Concussion', 'lightheadedness', 'dizziness', 'emotional changes', 'problems concentrating', '', 'General Physician'),
(10, 'Brain Tumor', 'Headache', 'Vomiting', 'Seizures', '', '', 'Neurologist'),
(11, 'Breast Cancer', 'lump or mass in the breast', 'nipple discharge or redness', 'swelling of part of the breast', '', '', 'chest specialist'),
(12, 'Throat Cancer', 'trouble breathing', 'difficulty speaking', 'throat pain', 'ear pain', 'Bleeding can occur from throat cancers', 'thyroid'),
(13, 'Cat Scratch', 'fever', 'malaise', 'joint pains', 'loss of appetite', 'rash', 'Dermatologists'),
(14, 'Chronic Sore Throat', 'hoarseness', 'feeling of a lump in the throat', 'mouth sores', 'difficulty swallowing', 'heartburn', 'thyroid'),
(15, 'Colon Cancer', 'Blood In Stool', 'Weight Loss', 'dark-colored stool', 'narrow stools', 'diarrhea', 'Dermatologists');

-- --------------------------------------------------------

--
-- Table structure for table `doctor1`
--

CREATE TABLE `doctor1` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` text NOT NULL,
  `address` text NOT NULL,
  `pincode` int(6) NOT NULL,
  `contact` decimal(10,0) NOT NULL,
  `emailid` text NOT NULL,
  `psw` text NOT NULL,
  `city` text NOT NULL,
  `Qualification` varchar(20) NOT NULL,
  `speciality` text NOT NULL,
  `experience` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` text NOT NULL,
  `dob` date NOT NULL,
  `address` text NOT NULL,
  `pincode` int(6) NOT NULL,
  `contact` decimal(10,0) NOT NULL,
  `emailid` text NOT NULL,
  `psw` text NOT NULL,
  `city` text NOT NULL,
  `bloodgroup` text NOT NULL,
  `weight` text NOT NULL,
  `height` text NOT NULL,
  `hereditary` text NOT NULL,
  `specificdis` text NOT NULL,
  `disability` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`fname`, `lname`, `gender`, `dob`, `address`, `pincode`, `contact`, `emailid`, `psw`, `city`, `bloodgroup`, `weight`, `height`, `hereditary`, `specificdis`, `disability`) VALUES
('zafar', 'iqbal', 'male', '0000-00-00', 'nanded', 431602, '7878787878', 'zafar@gmail.com', 'zafar123', 'nanded', 'O+', '45kg', '54cm', 'njk', 'jhj', 'njkm');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

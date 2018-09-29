-- Generation Time: Sep 26, 2018 at 06:55 PM
-- Server version: 5.6.39-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_tool`
--

-- --------------------------------------------------------

--
-- Table structure for table `degreeoptions`
--

CREATE TABLE `degreeoptions` (
  `degree_certID` int(11) NOT NULL,
  `degree_cert_name` varchar(255) NOT NULL,
  `identifier` varchar(20) NOT NULL,
  `programID` varchar(30) NOT NULL,
  `optionNameID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `degreeoptions`
--

INSERT INTO `degreeoptions` (`degree_certID`, `degree_cert_name`, `identifier`, `programID`, `optionNameID`) VALUES
(1, 'Digital Forensics', 'Df', 'CSIA', 'Certificates'),
(2, 'Network Penetration', 'Np', 'CSIA', 'Certificates'),
(3, 'Network Security', 'Ns', 'CSIA', 'Certificates'),
(4, 'Technical Certificate', 'Technical', 'CSIA', 'Technical Certificates'),
(5, 'Associate of Applied Science', 'Aas', 'CSIA', 'Degrees'),
(6, 'Associate of Science', 'As', 'CSIA', 'Transfer Degree'),
(7, 'Associate of Science TSAP', 'Tsap', 'CSCI', 'Transfer Degree'),
(8, 'Data Analytics', 'Dan', 'DBMS', 'Certificates'),
(9, 'Database Administration', 'Dad', 'DBMS', 'Certificates'),
(10, 'Database Development', 'Dd', 'DBMS', 'Certificates'),
(11, 'Technical Certificate', 'Technical', 'DBMS', 'Technical Certificates'),
(12, 'Associate of Applied Science', 'Aas', 'DBMS', 'Degrees'),
(13, 'Associate of Science', 'As', 'DBMS', 'Transfer Degree'),
(14, 'Informatics', 'In', 'INFM', 'Certificates'),
(15, 'Technical Certificate', 'Technical', 'INFM', 'Technical Certificates'),
(16, 'Associate of Applied Science', 'Aas', 'INFM', 'Degrees'),
(17, 'Associate of Science TSAP', 'Tsap', 'INFM', 'Transfer Degree'),
(18, 'IT Help Desk', 'Help', 'ITSP', 'Certificates'),
(19, 'IT Support', 'Support', 'ITSP', 'Certificates'),
(20, 'Technical Certificate', 'Technical', 'ITSP', 'Technical Certificates'),
(21, 'Associate of Applied Science', 'Aas', 'ITSP', 'Degrees'),
(22, 'Routing and Switching', 'Rs', 'NETI', 'Certificates'),
(23, 'Technical Certificate', 'Technical', 'NETI', 'Technical Certificates'),
(24, 'Associate of Applied Science', 'Aas', 'NETI', 'Degrees'),
(25, 'Linux Administration', 'La', 'SVAD', 'Certificates'),
(26, 'Microsoft Administration', 'Ma', 'SVAD', 'Certificates'),
(27, 'Associate of Applied Science', 'Aas', 'SVAD', 'Degrees'),
(28, 'Technical Certificate', 'Technical', 'SVAD', 'Technical Certificates'),
(29, 'Java Application Development', 'Java', 'SDEV', 'Certificates'),
(30, 'Web Application Development', 'Web', 'SDEV', 'Certificates'),
(31, 'Technical Certificate', 'Technical', 'SDEV', 'Technical Certificates'),
(32, 'Associate of Applied Science', 'Aas', 'SDEV', 'Degrees'),
(33, 'Associate of Science', 'As', 'SDEV', 'Transfer Degree'),
(34, 'Web Foundation', 'Wf', 'SDEV', 'Certificates');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `programID` int(11) NOT NULL,
  `programName` text NOT NULL,
  `programDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`programID`, `programName`, `programDescription`) VALUES
(1, 'CSCI', 'COMPUTER SCIENCE'),
(2, 'CSIA', 'CYBER SECURITY-INFORMATION ASSURANCE'),
(3, 'DBMS', 'DATABASE MANAGEMENT AND ADMINISTRATION'),
(4, 'INFM', 'INFORMATICS'),
(5, 'ITSP', 'INFORMATION TECHNOLOGY SUPPORT'),
(6, 'NETI', 'NETWORK INFRASTRUCTURE'),
(7, 'SVAD', 'SERVER ADMINISTRATION'),
(8, 'SDEV', 'SOFTWARE DEVELOPMENT');

-- --------------------------------------------------------

--
-- Table structure for table `program_option_names`
--

CREATE TABLE `program_option_names` (
  `programOptionsID` int(11) NOT NULL,
  `optionName` varchar(255) NOT NULL,
  `optionID` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program_option_names`
--

INSERT INTO `program_option_names` (`programOptionsID`, `optionName`, `optionID`) VALUES
(1, 'Certificates', 'CSIA'),
(2, 'Technical Certificates', 'CSIA'),
(3, 'Degrees', 'CSIA'),
(4, 'Transfer Degree', 'CSIA'),
(5, 'Transfer Degree', 'CSCI'),
(6, 'Certificates', 'DBMS'),
(7, 'Technical Certificates', 'DBMS'),
(8, 'Degrees', 'DBMS'),
(9, 'Transfer Degree', 'DBMS'),
(10, 'Certificates', 'INFM'),
(11, 'Technical Certificates', 'INFM'),
(12, 'Degrees', 'INFM'),
(13, 'Transfer Degree', 'INFM'),
(14, 'Certificates', 'ITSP'),
(15, 'Technical Certificates', 'ITSP'),
(16, 'Degrees', 'ITSP'),
(17, 'Certificates', 'NETI'),
(18, 'Technical Certificates', 'NETI'),
(19, 'Degrees', 'NETI'),
(20, 'Certificates', 'SVAD'),
(21, 'Technical Certificates', 'SVAD'),
(22, 'Degrees', 'SVAD'),
(23, 'Certificates', 'SDEV'),
(24, 'Technical Certificates', 'SDEV'),
(25, 'Degrees', 'SDEV'),
(26, 'Transfer Degree', 'SDEV');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `degreeoptions`
--
ALTER TABLE `degreeoptions`
  ADD PRIMARY KEY (`degree_certID`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`programID`);

--
-- Indexes for table `program_option_names`
--
ALTER TABLE `program_option_names`
  ADD PRIMARY KEY (`programOptionsID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `degreeoptions`
--
ALTER TABLE `degreeoptions`
  MODIFY `degree_certID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `programID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `program_option_names`
--
ALTER TABLE `program_option_names`
  MODIFY `programOptionsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

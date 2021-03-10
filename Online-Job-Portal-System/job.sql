SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE IF NOT EXISTS `application_master` (
  `ApplicationId` int(11) NOT NULL AUTO_INCREMENT,
  `JobSeekId` int(11) NOT NULL,
  `JobId` int(11) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Description` varchar(200) NOT NULL,
  PRIMARY KEY (`ApplicationId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;


INSERT INTO `application_master` (`ApplicationId`, `JobSeekId`, `JobId`, `Status`, `Description`) VALUES
(1, 3, 1, 'Call Latter Send', 'Invited on 21-Dec-2013.'),
(2, 3, 2, 'Call Latter Send', 'You are Invited For Interview on 10-MAR-2013.'),
(3, 3, 3, 'Call Latter Send', 'Invited on 21-Dec-2013.'),
(5, 3, 4, 'Call Latter Send', 'Invited on 21-Dec-2013.');


CREATE TABLE IF NOT EXISTS `employer_reg` (
  `EmployerId` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(20) NOT NULL,
  `ContactPerson` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Area_Work` varchar(40) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Answer` varchar(50) NOT NULL,
  PRIMARY KEY (`EmployerId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;


INSERT INTO `employer_reg` (`EmployerId`, `CompanyName`, `ContactPerson`, `Address`, `City`, `Email`, `Mobile`, `Area_Work`, `Status`, `UserName`, `Password`, `Question`, `Answer`) VALUES
(2, 'TCS Private Limited', 'Mr. Mohan Shah', 'Navarangpura1', 'Ahmedabad', 'mohan@gmail.com', 9898989898, 'Software', 'Confirm', 'mohan', 'mohan', 'Who is Your Favourite Person?', 'sachin'),
(3, 'Wipro Infotech', 'Mr. Sunil Pandya', 'Baroda', 'Baroda', 'sunil@wipro.com', 8989898989, 'Hardware', 'Confirm', 'sunil', 'sunil', '', ''),
(4, 'Solusoft  Pvt Limite', 'Mr. Nirav Soni', 'Narayanpura', 'Ahmedabad', 'nirav@gmail.com', 9898989898, 'Software', 'Confirm', 'nirav', 'nirav', 'What is Your Pet Name?', 'niru'),
(5, 'Info Matrics', 'Mr. Narayan', 'Sahibagh', 'Ahmedabad', 'narayan@yahoo.com', 6767676767, 'Software', 'Confirm', 'narayan', 'narayan', 'What is Your Pet Name?', 'nari');


CREATE TABLE IF NOT EXISTS `feedback` (
  `FeedbackId` int(11) NOT NULL AUTO_INCREMENT,
  `JobSeekId` int(11) NOT NULL,
  `Feedback` varchar(200) NOT NULL,
  `FeedbakDate` date NOT NULL,
  PRIMARY KEY (`FeedbackId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;


INSERT INTO `feedback` (`FeedbackId`, `JobSeekId`, `Feedback`, `FeedbakDate`) VALUES
(5, 3, 'asdad', '2018-09-13'),
(6, 3, 'asd', '2013-09-18'),
(7, 4, 'Thanks For Your Support.', '2013-09-18'),
(8, 3, 'asd', '2013-09-22');


CREATE TABLE IF NOT EXISTS `jobseeker_education` (
  `EduId` int(11) NOT NULL AUTO_INCREMENT,
  `JobSeekId` int(11) NOT NULL,
  `Degree` varchar(20) NOT NULL,
  `University` varchar(100) NOT NULL,
  `PassingYear` mediumint(9) NOT NULL,
  `Percentage` float NOT NULL,
  PRIMARY KEY (`EduId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;


INSERT INTO `jobseeker_education` (`EduId`, `JobSeekId`, `Degree`, `University`, `PassingYear`, `Percentage`) VALUES
(3, 3, 'B.C.A', 'Ganpat Universiy', 2011, 68.89),
(4, 3, 'M.C.A', 'Ganpat University', 2013, 89.9),
(5, 3, 'S.S.C', 'GSEB', 2005, 80);


CREATE TABLE IF NOT EXISTS `jobseeker_reg` (
  `JobSeekId` int(11) NOT NULL AUTO_INCREMENT,
  `JobSeekerName` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Qualification` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `BirthDate` date NOT NULL,
  `Resume` varchar(200) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Answer` varchar(50) NOT NULL,
  PRIMARY KEY (`JobSeekId`),
  KEY `JobSeekId` (`JobSeekId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;


INSERT INTO `jobseeker_reg` (`JobSeekId`, `JobSeekerName`, `Address`, `City`, `Email`, `Mobile`, `Qualification`, `Gender`, `BirthDate`, `Resume`, `Status`, `UserName`, `Password`, `Question`, `Answer`) VALUES
(3, 'Jalpa Prajapati', 'Near Dena Bank', 'Mehsana', 'jalpa@gmail.com', 9898989898, 'M.C.A', 'Female', '2013-09-10', 'Marksheet.pdf', 'Confirm', 'jalpa', 'jalpa', 'What is Your Pet Name?', 'jalpa'),
(4, 'Krunal Prajapati', 'Patan', 'Patan', 'krunal@gmail.com', 8989898989, 'M.B.A', 'Male', '2013-09-16', 'Marksheet.pdf', 'Confirm', 'krunal', 'krunal', '', ''),
(5, 'Gopal Patel', 'Patan', 'Patan', 'gopal@gmail.com', 9898989898, 'MA', 'Male', '2013-10-15', 'admin.jpg', 'Confirm', 'gopal', 'gopal', '', ''),
(6, 'Mehul Mistry', 'Swastik SOciety', 'Baroda', 'mehul@gmail.com', 8989898998, 'BE', 'Male', '2013-10-09', '470X310_1.jpg', 'Confirm', 'mehul', 'mehul', 'What is Your Pet Name?', 'mehu');


CREATE TABLE IF NOT EXISTS `job_master` (
  `JobId` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(20) NOT NULL,
  `JobTitle` varchar(50) NOT NULL,
  `Vacancy` int(11) NOT NULL,
  `MinQualification` varchar(50) NOT NULL,
  `Description` varchar(200) NOT NULL,
  PRIMARY KEY (`JobId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;


INSERT INTO `job_master` (`JobId`, `CompanyName`, `JobTitle`, `Vacancy`, `MinQualification`, `Description`) VALUES
(1, 'Wipro Infotech', 'Software Professional Required', 2, 'M.C.A', 'ASP.NET'),
(2, 'Wipro Infotech', 'Marketing Executive Required', 5, 'M.B.A', 'Freshers Are Invited'),
(3, 'TCS Private Limited', 'Software Trainee Required', 1, 'B.Sc.I.T', 'Starting Salary 5000'),
(4, 'Wipro Infotech', 'Cleaners Required', 3, 'S.S.C', 'N');


CREATE TABLE IF NOT EXISTS `news_master` (
  `NewsId` int(11) NOT NULL AUTO_INCREMENT,
  `News` varchar(200) NOT NULL,
  `NewsDate` date NOT NULL,
  PRIMARY KEY (`NewsId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;


INSERT INTO `news_master` (`NewsId`, `News`, `NewsDate`) VALUES
(1, 'Register and Get JOB', '2013-09-24'),
(2, 'New Vacancies will be updated after diwali', '2013-10-31');


CREATE TABLE IF NOT EXISTS `user_master` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;


INSERT INTO `user_master` (`UserId`, `UserName`, `Password`) VALUES
(6, 'admin', 'admin'),
(10, 'xyz', 'xyz');


CREATE TABLE IF NOT EXISTS `walkin_master` (
  `WalkInId` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(20) NOT NULL,
  `JobTitle` varchar(50) NOT NULL,
  `Vacancy` int(11) NOT NULL,
  `MinQualification` varchar(50) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `InterviewDate` date NOT NULL,
  `InterviewTime` time NOT NULL,
  PRIMARY KEY (`WalkInId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;


INSERT INTO `walkin_master` (`WalkInId`, `CompanyName`, `JobTitle`, `Vacancy`, `MinQualification`, `Description`, `InterviewDate`, `InterviewTime`) VALUES
(1, 'Wipro Infotech', 'Freshers Required', 5, 'B.C.A', 'Hardworking Person are Required.', '2013-09-25', '09:00:00'),
(2, 'TCS Private Limited', 'Marketive Representative Invited', 2, 'Pharmacist', 'Ready TO work in North Gujarat', '2013-10-07', '09:00:00');

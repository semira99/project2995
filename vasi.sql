-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1:3306
-- Χρόνος δημιουργίας: 16 Απρ 2019 στις 18:56:39
-- Έκδοση διακομιστή: 5.7.24
-- Έκδοση PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `vasi`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `app`
--

DROP TABLE IF EXISTS `app`;
CREATE TABLE IF NOT EXISTS `app` (
  `user_email` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `vac_start` date NOT NULL,
  `vac_end` date NOT NULL,
  `reason` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `app`
--

INSERT INTO `app` (`user_email`, `date`, `vac_start`, `vac_end`, `reason`) VALUES
('Em02@gmail.com', '2019-04-16 21:07:13', '2019-04-18', '2019-04-21', 'reason1'),
('Em02@gmail.com', '2019-04-16 21:09:35', '2019-05-24', '2019-07-20', 'reason2'),
('employee@gmail.com', '2019-04-16 21:41:18', '2019-04-21', '2019-04-23', 'reason3'),
('Katerina@gmail.com', '2019-04-16 21:47:42', '2019-07-20', '2019-10-19', 'reason4');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(11) NOT NULL,
  `lastname` varchar(11) NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `user_type` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `user`
--

INSERT INTO `user` (`name`, `lastname`, `password`, `email`, `user_type`) VALUES
('employee', 'emploee', '12345', 'employee@gmail.com', 'employee'),
('admin', 'admin', '1234', 'admin@gmail.com', 'admin'),
('admin2', 'admin2', '123456', 'admin2@gmail.com', 'admin'),
('Katerina', 'Evans', '1234', 'Katerina@gmail.com', 'employee');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

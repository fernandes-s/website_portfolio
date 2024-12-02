-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2024 at 03:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `technologies` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `date_completed` date NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--


INSERT INTO `projects` (`id`, `title`, `description`, `technologies`, `url`, `date_completed`, `image_path`) VALUES
(9, 'Loan Default Prediction', 'Analyzed borrower and loan attributes to predict loan defaults. Performed exploratory data analysis (EDA) to identify key factors, implemented ML models and evaluated performance with ROC-AUC. Applied SMOTE to address class imbalance and employed feature engineering to improve accuracy.', 'Python, Pandas, NumPy, Scikit-learn, Matplotlib, Seaborn, Logistic Regression, Random Forest, XGBoost, SMOTE', 'https://github.com/fernandes-s/loan_default_prediction', '2024-12-02', 'images/loan.default.webp');
(10, 'Daft.ie House Price Analysis', 'A detailed analysis of house prices in Ireland using data from Daft.ie. The project involves data wrangling, exploratory data analysis (EDA), and regression models to predict house prices.', 'Python, Pandas, NumPy, Matplotlib, Seaborn, Scikit-learn, statsmodels', 'https://github.com/fernandes-s/Daft_ie', '2024-10-01', 'images/daft.ie.webp'),
(11, 'Insurance Cost Analysis', 'An analysis of insurance costs using regression models. The project focuses on identifying key attributes affecting insurance charges through exploratory data analysis (EDA) and predictive modeling.', 'Python, Pandas, NumPy, Matplotlib, Seaborn, Linear Regression, Ridge Regression', 'https://github.com/fernandes-s/insurance_cost_analysis', '2024-09-15', 'images/insurance.cost.webp'),
(12, 'Craving It Database System', 'Designed an SQL database for managing inventory and sales. Optimized data workflows with stored procedures and views to streamline operations and improve data integrity.', 'MS SQL Server, SQL, Database Design', 'https://github.com/fernandes-s/Craving-IT-DB', '2024-07-15', 'images/craving.it.webp'),
(13, 'Credit Union Database System', 'Developed a desktop application using the .NET Framework with a Microsoft SQL Server backend for internal bank operations. This three-tiered app handles tasks such as account management, transactions, and user authentication.', 'C#, .NET, MS SQL Server', 'https://github.com/fernandes-s/Credit_Union', '2024-08-01', 'images/credit.union.webp');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `testimonial` text NOT NULL,
  `date_submitted` timestamp NOT NULL DEFAULT current_timestamp(),
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `testimonial`, `date_submitted`, `image_path`) VALUES
(1, 'Daniel Fernandes', 'Great worker!!', '2024-10-16 17:23:47', NULL),
(2, 'Ciaran Kelly', 'TEST, BUT IF THIS WORKS I AM FODA!', '2024-10-16 17:31:02', 'uploads/default.jpg'),
(3, 'Ciaran Kelly', 'IF THIS WORKS I AM FODA!', '2024-10-16 17:32:29', 'uploads/1675172046472.jpg'),
(6, 'so coool', 'wow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwowwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwowwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwowwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwowwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwowwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwowwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwowwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwowwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwowwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwowwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwowwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwowwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwowwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwowwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwowwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwow', '2024-10-16 19:43:28', 'uploads/20230813_162649.jpg'),
(7, 'xfobnjxfdo', '	xfoigjsripdfgjdpfogv,sf', '2024-10-17 08:07:39', 'uploads/1675172046472.jpg'),
(8, 'poizdfje', 'paiejewip', '2024-10-17 08:08:07', 'uploads/20230813_162649.jpg'),
(9, 'Daniel Fernandes', 'fmepdfçnerfips', '2024-11-15 11:36:22', 'uploads/default.jpg'),
(10, 'xablau', 'is it working now i wonder?', '2024-11-16 20:16:20', 'uploads/LMJQ3513.JPG'),
(11, 'Daniel Fernandes', 'Ta ficando fodaaaaaa!!!!', '2024-11-16 20:21:49', 'uploads/default.jpg'),
(12, 'Daniel Fernandes', 'Ta ficando fodaaaaaa!!!!', '2024-11-16 20:25:22', 'uploads/default.jpg'),
(13, 'Daniel Fernandes Moreira Neto', 'dbkf,~sdx', '2024-11-16 20:25:45', 'uploads/default.jpg'),
(14, 'Daniel Fernandes', 'ewgrebfsfd', '2024-11-16 20:28:47', 'uploads/default.jpg'),
(15, 'çewlg', 'eopowgjlsdvmdmvf', '2024-11-16 20:34:41', 'uploads/LMJQ3513.JPG'),
(16, 'Daniel Fernandes', '/* Image Preview Styling */\r\n    #imagePreview {\r\n        max-width: 200px; /* Adjust as needed */\r\n        max-height: 200px; /* Adjust as needed */\r\n        width: auto;\r\n        height: auto;\r\n        border: 2px solid #d3d3d3;\r\n        border-radius: 10px;\r\n        margin-top: 10px;\r\n    }/* Image Preview Styling */\r\n    #imagePreview {\r\n        max-width: 200px; /* Adjust as needed */\r\n        max-height: 200px; /* Adjust as needed */\r\n        width: auto;\r\n        height: auto;\r\n        border: 2px solid', '2024-11-16 20:39:51', 'uploads/LMJQ3513.JPG'),
(17, 'Daniel Fernandes', '/* Image Preview Styling */\r\n    #imagePreview {\r\n        max-width: 200px; /* Adjust as needed */\r\n        max-height: 200px; /* Adjust as needed */\r\n        width: auto;\r\n        height: auto;\r\n        border: 2px solid #d3d3d3;\r\n        border-radius: 10px;\r\n        margin-top: 10px;\r\n    }/* Image Preview Styling */\r\n    #imagePreview {\r\n        max-width: 200px; /* Adjust as needed */\r\n        max-height: 200px; /* Adjust as needed */\r\n        width: auto;\r\n        height: auto;\r\n        border: 2px solid', '2024-11-16 20:40:04', 'uploads/LMJQ3513.JPG'),
(18, 'Daniel Fernandes', '/* Image Preview Styling */\r\n    #imagePreview {\r\n        max-width: 200px; /* Adjust /\r\n        max-height: 200px; /* Adjust as needed */\r\n        width: auto;\r\n        height: auto;\r\n        border: 2px solid #d3d3d3;\r\n        border-radius: 10px;\r\n        margin-top: 10px;\r\n    }/* Image Preview Styling */\r\n    #imagePreview {\r\n        max-width: 200px; /* Adjust as needed */\r\n        max-height: 200px; /* Adjust as needed */\r\n        width: auto;\r\n        height: auto;\r\n        border: 2px solid', '2024-11-16 20:40:11', 'uploads/LMJQ3513.JPG'),
(19, 'Daniel Fernandes', '/* Image Preview Styling */\r\n    #imagePreview {\r\n        max-width: 200px; /* Adjust /\r\n        max-height: 200px; /* Adjust as needed */\r\n        width: auto;\r\n        height: auto;\r\n        border: 2px solid #d3d3d3;\r\n        border-radius: 10px;\r\n        margin-top: 10px;\r\n    }/* Image Preview Styling */\r\n    #imagePreview {\r\n        max-width: 200px; /* Adjust as needed */\r\n        max-height: 200px; /* Adjust as needed */\r\n        width: auto;\r\n        height: auto;\r\n        border: 2px solid', '2024-11-16 20:40:47', 'uploads/LMJQ3513.JPG'),
(20, 'João', 'Daniel is doing a really good job', '2024-11-17 17:44:45', 'uploads/WhatsApp Image 2023-12-27 at 17.07.32.jpeg'),
(21, 'Daniel Fernandes', 'çkdsmçldgf,xvzl', '2024-11-18 11:04:06', 'uploads/stella.png'),
(22, 'Daniel Fernandes', 'Good job', '2024-11-19 10:36:05', 'uploads/default.jpg'),
(23, 'Daniel Fernandes', 'Good job', '2024-11-19 11:19:28', 'uploads/default.jpg'),
(24, 'Daniel Fernandes', 'test', '2024-11-19 11:22:25', 'uploads/default.jpg'),
(26, 'IBM Data Science Professional Certificate', 'rebfv', '2024-11-19 11:34:54', 'uploads/default.jpg'),
(27, 'Daniel Fernandes Moreira Neto', 'wegrfbvc', '2024-11-19 11:35:40', 'uploads/default.jpg'),
(28, 'trying to fix a bug', 'lets hope', '2024-11-19 11:37:12', 'uploads/default.jpg'),
(29, 'Ciaran Kelly', 'ahhhhhhhhhhhhhhh', '2024-11-19 11:38:34', 'uploads/default.jpg'),
(30, 'Wrapping up', 'is it working finally?', '2024-11-19 11:38:59', 'uploads/default.jpg'),
(31, 'Daniel Fernandes Moreira Neto', 'psgvm', '2024-11-19 11:39:26', 'uploads/Profile Picture.png'),
(32, 'Daniel Fernandes Moreira Neto', 'poewtjgvm', '2024-11-19 11:41:21', 'uploads/default.jpg'),
(33, 'pwkegfv', 'pwero', '2024-11-19 11:45:13', 'uploads/default.jpg'),
(34, 'Daniel Fernandes Moreira Neto', 'çkmjnhg', '2024-11-19 15:48:09', 'uploads/Profile Picture.png'),
(35, 'Daniel Fernandes Moreira Neto', 'poiuytre', '2024-11-19 16:13:49', 'uploads/default.jpg'),
(36, 'Daniel Fernandes Moreira Neto', 'i got it all!!!! ahhhhh done pretty done!', '2024-11-19 16:19:05', 'uploads/default.jpg'),
(37, 'Damien Kettle', 'Daniel is my best srudent', '2024-11-21 09:57:30', 'uploads/default.jpg'),
(38, 'Damien Kettle', 'dgfjgfgjfkfhkdgfjgfgjfkfhkdgfjgfgjfkfhkdgfjgfgjfkfhkdgfjgfgjfkfhkdgfjgfgjfkfhkdgfjgfgjfkfhkdgfjgfgjfkfhkdgfjgfgjfkfhkdgfjgfgjfkfhkdgfjgfgjfkfhkdgfjgfgjfkfhkdgfjgfgjfkfhkdgfjgfgjfkfhkdgfjgfgjfkfhkdgfjgfgjfkfhkdgfjgfgjfkfhkdgfjgfgjfkfhkdgfjgfgjfkfhkdgf', '2024-12-02 11:44:42', 'uploads/Imagem do WhatsApp de 2024-11-21 à(s) 16.39.28_fcfce8e2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

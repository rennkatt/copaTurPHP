-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Abr-2018 às 02:55
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `copatur`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nivel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `nome`, `sobrenome`, `email`, `senha`, `nivel`) VALUES
(1, 'Renato', 'Moura', 'renato@gmail.com', 'teste123', '1'),
(2, 'Katia', 'Rodrigues', 'katia@gmail.com', 'katia123', '1'),
(3, 'Rejane', 'Barbosa', 'rejane@gmail.com', '123', '2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_postagens`
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);
  
  
ALTER TABLE `login` ADD `imagem` VARCHAR(200);

--
-- Indexes for table `tb_postagens`
--
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_postagens`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

ALTER TABLE `login` ADD `sobre` VARCHAR(400) NULL AFTER `imagem`;
ALTER TABLE `login` ADD `link_fb`  VARCHAR(400) NULL;
ALTER TABLE `login` ADD `link_insta`  VARCHAR(400) NULL;
ALTER TABLE `login` ADD `link_tw`  VARCHAR(400) NULL;
ALTER TABLE `login` ADD `link_gh`  VARCHAR(400) NULL;
ALTER TABLE `login` ADD `link_google`  VARCHAR(400) NULL;
--ALTER TABLE `tb_postagens` ADD `login_id` INT NOT NULL


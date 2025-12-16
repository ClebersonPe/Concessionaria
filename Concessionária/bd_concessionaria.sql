-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/06/2025 às 03:29
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_concessionaria`
--
CREATE DATABASE IF NOT EXISTS `bd_concessionaria` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `bd_concessionaria`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_carro`
--

CREATE TABLE `tb_carro` (
  `cod_carro` int(11) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `marca_carro` varchar(100) NOT NULL,
  `ano_fabricacao` varchar(100) NOT NULL,
  `valor_carro` double NOT NULL,
  `desc_carro` varchar(500) NOT NULL,
  `quilometragrem` int(11) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `tb_carro`
--

INSERT INTO `tb_carro` (`cod_carro`, `modelo`, `marca_carro`, `ano_fabricacao`, `valor_carro`, `desc_carro`, `quilometragrem`, `foto`) VALUES
(25, 'Vectra', 'Chevrolet', '2011', 41900, '4 portas Turbo H1 2.0', 60000, 'images_carros/6fcd2395673ff6d471134e54a13494a0.jpg'),
(26, 'Chevette', 'Chevrolet', '2005', 25000, '1.0', 60000, 'images_carros/9bb42bfcf52c3297fa5bcadd72dd70c1.jpg'),
(28, 'Golf', 'Volkswagen', '2004', 34000, 'GTI 180cv Teto Solar', 35000, 'images_carros/26ca18293069f5d0c31afb79d15091b2.jpg'),
(29, 'Uno', 'Fiat', '1995', 29000, '1.0 MILLE ELETRONIC 8V GASOLINA 2P MANUAL', 80000, 'images_carros/507eea7da6363a40ea1e4a91aec9ae82.jpg'),
(33, 'Corsa Classic', 'Volkswagen', '2012', 18500, '1.0 Life Flex Power 4p', 20000, 'images_carros/d286c16628146d195de3a2bc30a7031e.jpg'),
(34, 'Santana', 'Volkswagen', '2000', 30000, '2.0 Exclusiv 4p', 5000, 'images_carros/67f2487761c1c15f604bf425c59c32b3.jpg'),
(35, 'Marea ', 'Fiat', '2001', 32000, '2.0 Turbo ', 100000, 'images_carros/cf5397378ceef22344daced5eca4fbf9.jpg'),
(36, 'Parati', 'Volkswagen', '1988', 38000, 'GLS 1.8', 300000, 'images_carros/1077c132867665198ae07f2479eddf66.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cargo` varchar(20) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`codigo`, `nome`, `email`, `cargo`, `senha`, `foto`) VALUES
(5, 'Jorge', 'jorge@gmail.com', 'supervisor', '$2y$10$rLdqeUS9Y/oci1XDOF7YDeKk8QaMqeWC8DI6fsEvWyrVtDpOjQYb2', 'images_usuarios/a294432719177fef4c995167ecdedc43.jpg'),
(6, 'Park', 'park@gmail.com', 'estoquista', '$2y$10$wpwCAccITlgZNokCmCL8F.OdNbAPZisXWEpn9BQG66ChZhbyvvUsS', 'images_usuarios/285201bf06235632d918da0b0fdd11e0.jpg'),
(7, 'Wenzio', 'wenzio@gmail.com', 'gerente', '$2y$10$kgeMfG0h5.u3TU2DBw48Pe1ffcXoSR3DQGeubXaNF9V6fS8GrTUQa', 'images_usuarios/35937207e62909be9818f3b8ced498f2.jpg'),
(8, 'Carlinhos', '2500Cavalos.Carlinhos@gmail.com', 'gerente', '$2y$10$zi1C6WWMQZtQR6JRMVkeS.Bit.u6j8rB0wA0tGJhQqvRebxibJXby', 'images_usuarios/ad999773fe44c649f36aa3af31593deb.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_carro`
--
ALTER TABLE `tb_carro`
  ADD PRIMARY KEY (`cod_carro`);

--
-- Índices de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_carro`
--
ALTER TABLE `tb_carro`
  MODIFY `cod_carro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

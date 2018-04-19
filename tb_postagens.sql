-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Abr-2018 às 01:57
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
-- Estrutura da tabela `tb_postagens`
--

CREATE TABLE `tb_postagens` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `fonte_imagem` varchar(100) NOT NULL,
  `descricao` longtext NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `exibir` varchar(5) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `data` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_postagens`
--

INSERT INTO `tb_postagens` (`id`, `titulo`, `imagem`, `fonte_imagem`, `descricao`, `cidade`, `categoria`, `exibir`, `autor`, `data`) VALUES
(1, 'Lorem...', '1430835695.jpg', 'www.google.com.br', '<div style=\"text-align: justify; \">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div><div style=\"text-align: justify; \"><br></div><div style=\"text-align: justify; \"><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div><div><br></div><div><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div></div><div><br></div></div><div><br></div>', 'Kazan', 'historia', 'Sim', 'Renato Moura', '20/10/1988'),
(2, 'Lorem...', '1138270197.jpg', '', '<div style=\"text-align: justify; \">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div><div style=\"text-align: justify; \"><br></div><div style=\"text-align: justify; \"><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div><div><br></div><div><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div></div><div><br></div></div><div><br></div>', 'Kazan', 'historia', 'Sim', 'Renato Moura', '20/10/1988'),
(3, 'Lorem...', '1138270197.jpg', '', '<div style=\"text-align: justify; \">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div><div style=\"text-align: justify; \"><br></div><div style=\"text-align: justify; \"><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div><div><br></div><div><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div></div><div><br></div></div><div><br></div>', 'Kazan', 'historia', 'Sim', 'Renato Moura', '20/10/1988'),
(4, 'Lorem Lorem..', '856225558.jpg', '', '<div style=\"text-align: justify; \">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div><div style=\"text-align: justify; \"><br></div><div style=\"text-align: justify; \"><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div><div><br></div><div><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div></div><div><br></div></div><div><br></div>', 'Kazan', 'historia', 'Sim', 'Renato Moura', '20/10/1988'),
(5, 'Lorem...', '1138270197.jpg', '', '<div style=\"text-align: justify; \">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div><div style=\"text-align: justify; \"><br></div><div style=\"text-align: justify; \"><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div><div><br></div><div><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div></div><div><br></div></div><div><br></div>', 'Kazan', 'historia', 'Sim', 'Renato Moura', '20/10/1988'),
(6, 'Lorem...', '1138270197.jpg', '', '<div style=\"text-align: justify; \">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div><div style=\"text-align: justify; \"><br></div><div style=\"text-align: justify; \"><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div><div><br></div><div><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div></div><div><br></div></div><div><br></div>', 'Kazan', 'historia', 'Sim', 'Renato Moura', '20/10/1988'),
(7, 'Lorem...', '1138270197.jpg', '', '<div style=\"text-align: justify; \">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div><div style=\"text-align: justify; \"><br></div><div style=\"text-align: justify; \"><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div><div><br></div><div><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div></div><div><br></div></div><div><br></div>', 'Kazan', 'historia', 'Sim', 'Renato Moura', '20/10/1988'),
(8, 'Lorem...', '1138270197.jpg', '', '<div style=\"text-align: justify; \">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div><div style=\"text-align: justify; \"><br></div><div style=\"text-align: justify; \"><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div><div><br></div><div><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div></div><div><br></div></div><div><br></div>', 'Kazan', 'historia', 'Sim', 'Renato Moura', '20/10/1988'),
(9, 'Lorem...', '1138270197.jpg', '', '<div style=\"text-align: justify; \">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div><div style=\"text-align: justify; \"><br></div><div style=\"text-align: justify; \"><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div><div><br></div><div><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div></div><div><br></div></div><div><br></div>', 'Kazan', 'historia', 'Sim', 'Renato Moura', '20/10/1988'),
(10, 'Lorem...', '1138270197.jpg', '', '<div style=\"text-align: justify; \">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div><div style=\"text-align: justify; \"><br></div><div style=\"text-align: justify; \"><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div><div><br></div><div><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div></div><div><br></div></div><div><br></div>', 'Kazan', 'historia', 'Sim', 'Renato Moura', '20/10/1988'),
(11, 'Lorem...', '1138270197.jpg', '', '<div style=\"text-align: justify; \">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div><div style=\"text-align: justify; \"><br></div><div style=\"text-align: justify; \"><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div><div><br></div><div><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div></div><div><br></div></div><div><br></div>', 'Kazan', 'historia', 'Sim', 'Renato Moura', '20/10/1988'),
(33, 'teste', '1822027223.png', '', '<br>Escreva sua mensagem aqui <br>', 'Kazan', 'historia', '', 'Katia', '2018-04-18 0'),
(34, 'teste fonte', '664517278.jpg', 'www.google.com.br', '<br>Escreva sua mensagem aqui <br>', 'Kazan', 'historia', '', 'renato', '2018-04-18 1'),
(35, 'HistÃ³ria de Moscow', '316327616.jpeg', '', '<p class=\"drop-cap\">NÃ£o existe uma data precisa de sua fundaÃ§Ã£o, sabe-se apenas que a mais de 870 anos foi a capital da Moscovia, do subsequente Czarado da RÃºssia e, durante a Guerra Fria, Moscou foi a capital da extinta UniÃ£o SoviÃ©tica e, mesmo que alguma cicatriz nos traga Ã  memoria esta Ã©poca, as pÃ©rolas arquitetÃ´nicas do ciclo do ImpÃ©rio se espalham por essa capital icÃ´nica. Situada sobre o rio Moskva - a maioria dos seus pontos turÃ­sticos estÃ¡ Ã  margem norte do mesmo, Moscou Ã© o Distrito Federal Central da RÃºssia europeia, importante centro socioeconÃ´mico do paÃ­s e do continente, Ã© a megacidade mais ao norte da Terra.</p>\r\n                                    \r\n                                    <p>A geografia da cidade Ã© definida por seus trÃªs â€˜Ring Roadsâ€™, seguindo o seu contorno medieval. Com a PraÃ§a Vermelha e o Kremlin ao centro, o â€˜Boulevardâ€™ Ã© o anel viÃ¡rio mais interno e foi construÃ­do na dÃ©cada de 1820; O â€˜Sadovoeâ€™ - outrora anel viÃ¡rio de jardins czaristas, perdeu os mesmo com a ampliaÃ§Ã£o da estrada nos tempos soviÃ©ticos; O MKAS (Moskovskaya koltsevaya Automobil Naya Dorota), terceiro anel viÃ¡rio, define claramente a borda externa de Moscou, seguindo o esboÃ§o alfandegÃ¡rio dos sÃ©culos XVI e XVII, foi construÃ­do em 2004 e, possui 108 km de comprimento, facilitando e servindo toda a rede de trÃ¢nsito que inclui, ainda, quatro aeroportos internacionais, nove terminais ferroviÃ¡rios e a segunda maior rede de metrÃ´ do mundo, marcos da cidade devido Ã  arquitetura rica e variada de suas 185 estaÃ§Ãµes.</p>\r\n                                    \r\n                                    <p>ArqueÃ³logos afirmam que assentamentos no territÃ³rio de Moscou existiam a cerca de 1.000 a.C. e provavelmente pertenciam a povos fino-Ãºgricos e, que os eslavos os substituÃ­ram no sÃ©culo 9 d,C. Antes de Moscou torna-se o centro da naÃ§Ã£o Rus, outras cidades tambÃ©m tiveram papel central no passado: (Staraya) Ladoga, Novgorod, Kiev e Vladimir.</p>\r\n                                                                    \r\n                                    <p>Diz a lenda que a paixÃ£o de um prÃ­ncipe levou Ã  fundaÃ§Ã£o de Moscou. Creditada ao prÃ­ncipe IÃºri Dolgoruki de Suzdal, a cidade foi mencionada nas crÃ´nicas russas pela primeira vez em 1147 como um lugar de encontro do prÃ­ncipe com outro governante de um dos diversos principados russos que naqueles tempos viviam em disputa constante. No inÃ­cio as terras e aldeias prÃ³ximas nÃ£o pertenciam ao prÃ­ncipe, eram propriedade do nobre Kutchka e, por isso, conhecidas como Kutchkovo - IÃºri havia partido em uma missÃ£o militar e, foi informado que Kutchka havia aprisionado a prÃ³pria esposa, planejando fugir em busca dos seus inimigos na regiÃ£o de Kiev. Enfurecido com o cÃ¡rcere de sua amante, retorna e executa o nobre, confiscando suas terras. E constrÃ³i uma pequena fortaleza de madeira no local onde o Kremlin existe hoje.</p>\r\n                                                                        \r\n                                    <p>A ascensÃ£o de Moscou de pequena cidade estabelecida por IÃºri Dolgoruki no principado de Suzdal-Vladimir para principal cidade russa levou 200 anos. A partir do final do sÃ©culo 13, os prÃ­ncipes de Moscou comeÃ§aram a expandir o territÃ³rio do principado. Eles reivindicaram o tÃ­tulo de GrÃ£o-Duque de Vladimir dos mongÃ³is para reforÃ§ar ainda mais seu controle sobre o paÃ­s. O governante de Moscou na Ã©poca â€“ DmÃ­tri do Don â€“ tornou o tÃ­tulo de GrÃ£o-Duque uma heranÃ§a hereditÃ¡ria dos prÃ­ncipes de Moscou em 1380. Desde entÃ£o, Moscou tornou-se um centro incontestÃ¡vel do territÃ³rio russo. Em meados do sÃ©culo 16, Ivan, o TerrÃ­vel, declarou-se Ksar e transformou Moscou na capital de seu reino.</p>\r\n\r\n                                    <p>Pedro, o Grande decidiu transferir a capital de Moscou para SÃ£o Petersburgo em 1712 alguns anos antes do estabelecimento do ImpÃ©rio Russo. Petersburgo permaneceu como capital atÃ© a RevoluÃ§Ã£o de 1917. Os bolcheviques mudaram a capital novamente para Moscou em 1918, temendo invasÃµes estrangeiras.</p>\r\n                                    \r\n                                    <p>Leia mais em: <a href=\"https://br.rbth.com/viagem/80064-tudo-sempre-quis-saber-moscou-quem-perguntar\">br.btth.com.</a></p>\r\n                                    ', 'Moscow', 'historia', '', 'Elder Cordeiro', '2018-04-18 1'),
(36, 'HistÃ³ria de Kaliningrad', '126049721.jpeg', '', ' <p class=\"drop-cap\">A 1.255 km a oeste de Moscou, Ã© um enclave russo no coraÃ§Ã£o da Europa, sem conexÃ£o terrestre com o resto do paÃ­s. A regiÃ£o costumava fazer parte da PrÃºssia (entÃ£o conhecida como KÃ¶nigsberg), possÃ­vel perceber isso pela arquitetura; Ã© como se estivÃ©ssemos em uma cidade medieval alemÃ£. </p>\r\n                                    \r\n                                    <p>No fim da Segunda Guerra Mundial, em 1945, a cidade de KÃ¶nigsberg foi anexada pela UniÃ£o SoviÃ©tica, enquanto se aguardava a decisÃ£o definitiva sobre questÃµes territoriais (incluindo a partiÃ§Ã£o da antiga PrÃºssia Oriental) que viria no acordo de paz, valendo atÃ© lÃ¡ o que fora decidido pelos Aliados (UniÃ£o SoviÃ©tica, Estados Unidos e GrÃ£-Bretanha) participantes da ConferÃªncia de Potsdam.</p>\r\n                                    \r\n                                    <p>KÃ¶nigsberg foi renomeada Kaliningrado em 1946, apÃ³s a morte de Mikhail Kalinin, um dos bolcheviques originais. A populaÃ§Ã£o alemÃ£ sobrevivente foi expulsa da Ã¡rea, entre 1946 e 1949, e a cidade foi repovoada por cidadÃ£os soviÃ©ticos. A lÃ­ngua alemÃ£ foi substituÃ­da pela lÃ­ngua russa. A cidade, que fora devastada pelos bombardeios britÃ¢nicos durante a Guerra, foi reconstruÃ­da. Por ser o territÃ³rio mais ocidental da URSS, o Oblast de Kaliningrado tornou-se uma Ã¡rea estrategicamente importante durante a Guerra Fria. A Frota do BÃ¡ltico (soviÃ©tica) permaneceria em Kaliningrado, ao longo dos anos 1950, e, por sua importÃ¢ncia estratÃ©gica, a cidade foi fechada a visitantes estrangeiros. E em 1957 foi firmado um acordo, que passaria a vigorar posteriormente, delimitando a fronteira entre a PolÃ´nia e a UniÃ£o SoviÃ©tica. </p>\r\n                                                                    \r\n                                    <p>Kaliningrad possui as maiores dunas de areia da Europa, no menor parque nacional da RÃºssia: O Istmo da CurlÃ¢ndia, uma estreita faixa de areia que separa o Mar BÃ¡ltico e a Lagoa da CurlÃ¢ndia. Pelas suas dimensÃµes, comprimento, dunas altÃ­ssimas, o istmo nÃ£o tem anÃ¡logos na Europa. Em um sÃ³ dia aqui se pode ver florestas de pinheiros de beleza extraordinÃ¡ria, mar e dunas altÃ­ssimas, caminhar pelas praias do BÃ¡ltico que se estendem por vÃ¡rios quilÃ´metros e encontrar Ã¢mbar. TambÃ©m se pode ouvir a mÃºsica das areias. Quando vocÃª caminha pelo istmo, a areia produz sons Ãºnicos que se juntam em melodias. Quase um milhÃ£o de turistas sÃ£o atraÃ­dos todo ano por suas belezas.</p>\r\n                                                                        \r\n                                    <h2>Como chegar:</h2>\r\n\r\n                                 <p>De aviÃ£o: As passagens partindo de Moscou custam a partir de R$ 300 e o tempo de viagem dura em mÃ©dia 1h55. O desembarque serÃ¡ no aeroporto de Khrabrovo e de lÃ¡ serÃ¡ preciso pegar outro transporte para Kaliningrado.</p>\r\n                                    <p>De trem: A viagem serÃ¡ longa, de pelo menos 19h, mas pode ser vÃ¡lido para descansar ou observar a paisagem entre a capital e Kaliningrado. O trem pode ser pego na estaÃ§Ã£o Belorussky.</p>\r\n                                    <p>De carro/Ã´nibus: A viagem de Ã´nibus ou de carro de Moscou atÃ© Kaliningrado, uma das cidades russas com estÃ¡dios da Copa, dura, pelo menos, 15h45. Talvez o gasto excessivo com combustÃ­vel faÃ§a nÃ£o valer a pena a viagem com automÃ³vel particular</p>  \r\n                                 \r\n                                    \r\n                                    <p>Leia mais em: <a href=\"https://br.sputniknews.com/portuguese.ruvr.ru/2012_10_16/Copa-Mundial-de-2018-em-Kaliningrado-areias-cantantes-e-buscas-de-ambar/\">sputniknews</a> | \r\n                                    	<a href=\"https://en.wikipedia.org/wiki/Kaliningrad\">wikipedia</a></p>\r\n                                    ', 'Kaliningrad', 'historia', '', 'Elder Cordeiro', '2018-04-18 2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_postagens`
--
ALTER TABLE `tb_postagens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_postagens`
--
ALTER TABLE `tb_postagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

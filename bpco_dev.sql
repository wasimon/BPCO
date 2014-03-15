-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generato il: Mar 15, 2014 alle 17:29
-- Versione del server: 5.5.33
-- Versione PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bpco_dev`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('8b95f4b77925f24de3f1ac6d77be3c34', '0.0.0.0', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.149 Safari/537.36', 1394879284, 'a:5:{s:9:"user_data";s:0:"";s:8:"username";s:7:"wasimon";s:12:"is_logged_in";b:1;s:8:"idmedico";s:1:"1";s:4:"nome";s:7:"tardivo";}'),
('1de69e42c83c1cc2419969c49500a3cc', '0.0.0.0', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.149 Safari/537.36', 1394899909, 'a:6:{s:9:"user_data";s:0:"";s:8:"username";s:7:"wasimon";s:12:"is_logged_in";b:1;s:8:"idmedico";s:1:"1";s:4:"nome";s:7:"tardivo";s:17:"flash:old:message";s:66:"<p class="message">Programmi selezionati salvati con successo!</p>";}');

-- --------------------------------------------------------

--
-- Struttura della tabella `eliminati`
--

CREATE TABLE `eliminati` (
  `idpz` bigint(20) NOT NULL AUTO_INCREMENT,
  `codfis` varchar(16) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `cognome` varchar(20) NOT NULL,
  `sesso` varchar(1) NOT NULL,
  `dataoggi` varchar(8) NOT NULL,
  `datanascita` varchar(8) NOT NULL,
  `luogonascita` varchar(20) NOT NULL,
  `indirizzovia` varchar(20) NOT NULL,
  `indirizzocitta` varchar(20) NOT NULL,
  `indirizzocap` varchar(5) NOT NULL,
  `indirizzoprovincia` varchar(20) NOT NULL,
  `statocivile` varchar(20) NOT NULL,
  `scolarita` int(11) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `cel` varchar(15) NOT NULL,
  `medicofamiglia` varchar(50) NOT NULL,
  `personariferimento` varchar(50) NOT NULL,
  `telriferimento` varchar(20) NOT NULL,
  `centropneumo` varchar(50) NOT NULL,
  `specpneumo` varchar(50) NOT NULL,
  `telpneumologo` varchar(20) NOT NULL,
  `centromotorio` varchar(50) NOT NULL,
  `specmotorio` varchar(50) NOT NULL,
  `telmotorio` varchar(20) NOT NULL,
  `lavoro` varchar(30) NOT NULL,
  `idmedico` int(11) NOT NULL,
  `fumo_tipo` varchar(2) NOT NULL,
  `fumo_eta_inizio` int(11) NOT NULL,
  `fumo_eta_fine` int(11) NOT NULL,
  `sigarette_di` int(11) NOT NULL,
  `pack_anno` int(11) NOT NULL,
  `commorbidita` text NOT NULL,
  PRIMARY KEY (`idpz`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dump dei dati per la tabella `eliminati`
--

INSERT INTO `eliminati` (`idpz`, `codfis`, `nome`, `cognome`, `sesso`, `dataoggi`, `datanascita`, `luogonascita`, `indirizzovia`, `indirizzocitta`, `indirizzocap`, `indirizzoprovincia`, `statocivile`, `scolarita`, `tel`, `cel`, `medicofamiglia`, `personariferimento`, `telriferimento`, `centropneumo`, `specpneumo`, `telpneumologo`, `centromotorio`, `specmotorio`, `telmotorio`, `lavoro`, `idmedico`, `fumo_tipo`, `fumo_eta_inizio`, `fumo_eta_fine`, `sigarette_di`, `pack_anno`, `commorbidita`) VALUES
(1, 'gionnimnemonic', 'Nome', 'Cognome', 'm', '12345678', '12345678', 'luogonascita', 'indirizzovia', 'indirizzocitta', 'indir', 'indirizzoprovincia', 'sposato', 0, '0', '1234567899', 'medicofamiglia', 'personariferimento', '1234567899', 'centropneumo', 'specpneumo', '1234567899', 'centromotorio', 'specmotorio', '1234567899', ' la', 1, '', 0, 0, 0, 0, ''),
(2, 'gionnimnemonic', 'Nome', 'Cognome', 'm', '12345678', '12345678', 'luogonascita', 'indirizzovia', 'indirizzocitta', 'indir', 'indirizzoprovincia', 'sposato', 0, '0', '1234567899', 'medicofamiglia', 'personariferimento', '1234567899', 'centropneumo', 'specpneumo', '1234567899', 'centromotorio', 'specmotorio', '1234567899', ' la', 1, '', 0, 0, 0, 0, ''),
(3, 'qwertyuioplkjhgf', 'ciao', 'mona', 'm', '20111201', '19860925', 'trento', 'piazza bo', 'verona', '37000', 'verona', 'nubile', 0, '3212323456', '1234567865', 'gionni', 'toni', '234567', 'bo', 'fjdsfjsdf', '23456', 'bo', 'bo', '1234567', 'pen', 1, '', 0, 0, 0, 0, ''),
(4, 'ultimo', '', '', 'M', '20120103', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 4, 'si', 0, 0, 0, 0, ''),
(5, 'asdfghjklasdfghj', 'giovanni', 'nodari', 'm', '20111212', '19651007', 'verona', 'verdi', 'verona', '37100', 'verona', 'celibe', 0, '0', '3291456432', 'dot Rossi', 'moglie', '1234567890', 'centropneumo', 'dott Bianchi', '1234321234', 'centromotorio', 'specmotorio', 'telmotorio', 'lav', 4, '', 0, 0, 0, 0, ''),
(6, 'mln87r14', 'oppo', 'pop', 'm', 'fghjkl', 'fghjkl', 'vhjkl', 'indirizzovia', 'indirizzocitta', 'indir', 'indirizzoprovincia', 'celibe', 0, '0', 'Numero di cellu', 'medicofamiglia', 'personariferimento', 'telriferimento', 'centropneumo', 'specpneumo', 'telpneumologo', 'centromotorio', 'specmotorio', 'telmotorio', 'lav', 4, '', 0, 0, 0, 0, ''),
(7, 'swsdfgh', 'Nome', 'Cognome', 'm', 'dataoggi', 'datanasc', 'luogonascita', 'indirizzovia', 'indirizzocitta', 'indir', 'indirizzoprovincia', 'celibe', 0, '0', 'Numero di cellu', 'medicofamiglia', 'personariferimento', 'telriferimento', 'centropneumo', 'specpneumo', 'telpneumologo', 'centromotorio', 'specmotorio', 'telmotorio', 'lav', 4, '', 0, 0, 0, 0, ''),
(8, 'comple2', '', '', 'M', '20120103', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 4, 'si', 0, 0, 0, 0, ''),
(9, 'pippo10', '', '', 'M', '20120117', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 4, 'no', 0, 0, 0, 0, ''),
(10, 'pippo6', '', '', 'M', '20120117', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 4, 'no', 0, 0, 0, 0, ''),
(11, 'pippo4', '', '', 'M', '20120117', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 4, 'no', 0, 0, 0, 0, ''),
(12, 'fumo', '', '', 'M', '20120106', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 4, 'si', 0, 0, 0, 0, ''),
(13, 'giorgio', '', '', 'M', '20120117', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 4, 'no', 0, 0, 0, 0, ''),
(14, 'cacca', '', '', 'M', '20120106', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 4, 'si', 0, 0, 0, 0, ''),
(15, '1234567890987654', 'Nome', 'Cognome', 'm', '12345678', '12345671', 'luogonascita', 'indirizzovia', 'indirizzocitta', 'indir', 'indirizzoprovincia', 'celibe', 0, '0', '0009998881', 'medicofamiglia', 'personariferimento', '0009998881', 'centropneumo', 'specpneumo', '0009998881', 'centromotorio', 'specmotorio', '0009998881', 'lav', 4, '', 0, 0, 0, 0, ''),
(16, 'casacasa', '', 'casa', 'M', '20120103', '', 'csas', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 4, 'si', 0, 0, 0, 0, ''),
(17, 'dassdadsadsadsad', 'fa', 'sa', 'M', '20120129', '12-12-12', 'das', 'fsd', 'fds', '32323', 'dfs', 'das', 12, '112122112121212', '121121212121212', '', 'dfdfdfsfdsfds', '1221121121212', '', '', '', '', '', '', 'dfsdsffds', 15, 'no', 0, 0, 0, 0, ''),
(18, '312312err3123131', 'alessio', 'asdasd', 'M', '20120119', '12-12-12', '123', 'ewrw', 'erw', '13223', 'weqew', '123', 231, '1323232323', '2333332222', '', 'ewqeqw', '2132133123', '', '', '', '', '', '', '11', 4, 'no', 0, 0, 0, 0, ''),
(19, '31231q333q12313e', 'alessio', 'asdasd', 'M', '20120119', '12-12-12', '123', 'ewrw', 'erw', '13223', 'weqew', '123', 231, '1323232323', '2333332222', '', 'ewqeqw', '2132133123', '', '', '', '', '', '', '11', 4, 'no', 0, 0, 0, 0, ''),
(20, 'qwertyuioplkasds', 'ciao', 'mona', 'f', '20111201', '19860925', 'trento', 'piazza bo', 'verona', '37000', 'verona', 'nubile', 0, '3212323456', '1234567865', 'gionni', 'toni', '234567', 'bo', 'fjdsfjsdf', '23456', 'bo', 'bo', '1234567', 'pen', 1, '', 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Struttura della tabella `esercizi`
--

CREATE TABLE `esercizi` (
  `NumEsercizio` int(11) NOT NULL AUTO_INCREMENT,
  `NOME_ESERCIZIO` varchar(50) NOT NULL,
  `CATEGORIA` varchar(12) NOT NULL,
  `CARATTERISTICA_1` varchar(30) NOT NULL,
  `CARATTERISTICA_2` varchar(30) NOT NULL,
  `DIFF_COGNITIVA` int(11) NOT NULL,
  `DIFF_MOTORIA` int(11) NOT NULL,
  `DESCRIZIONE` text NOT NULL,
  `img` varchar(20) NOT NULL,
  PRIMARY KEY (`NumEsercizio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dump dei dati per la tabella `esercizi`
--

INSERT INTO `esercizi` (`NumEsercizio`, `NOME_ESERCIZIO`, `CATEGORIA`, `CARATTERISTICA_1`, `CARATTERISTICA_2`, `DIFF_COGNITIVA`, `DIFF_MOTORIA`, `DESCRIZIONE`, `img`) VALUES
(2, 'Addominali', 'addominali', '', '', 2, 2, 'Posizione di partenza: supino con le gambe piegate e le braccia lungo i fianchi. Solleva le spalle facendo attenzione a contrarre bene i muscoli addominali e buttando fuori l''aria in questa fase. Controlla la discesa. Ripeti 6-8 volte.', ''),
(3, 'Addominali', 'addominali', '', '', 2, 3, 'Posizione di partenza: supino con le gambe piegate e le braccia incrociate al petto. solleva le spalle facendo attenzione a contrarre bene i muscoli addominali e buttando fuori l''aria in questa fase. Controlla la discesa. Ripeti 6-8 volte.', ''),
(4, 'Addominali', 'addominali', '', '', 2, 4, 'Posizione di partenza: supino con le gambe piegate e le mani dietro la nuca. Solleva le spalle facendo attenzione a contrarre bene i muscoli addominali e a non “tirare su” la testa con le mani (i gomiti rimangono aperti). Butta fuori l''aria in questa fase. Controlla la discesa. Ripeti 6-8 volte.', ''),
(5, 'Addominali', 'addominali', '', '', 2, 1, 'Posizione di partenza: seduto sulla sedia, mani appoggiate sulle cosce. Lentamente fletti la testa, avvicinando il mento allo sterno. Controlla la discesa. Butta fuori l''aria in questa fase. Ritorna lentamente alla posizione di partenza. Ripeti 6-8 volte.', '');

-- --------------------------------------------------------

--
-- Struttura della tabella `label`
--

CREATE TABLE `label` (
  `idlabel` int(11) NOT NULL AUTO_INCREMENT,
  `idmisura` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL DEFAULT '',
  `label` text NOT NULL,
  PRIMARY KEY (`idmisura`),
  UNIQUE KEY `idlabel` (`idlabel`),
  UNIQUE KEY `idmisura` (`idmisura`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `medico`
--

CREATE TABLE `medico` (
  `idmedico` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cognome` varchar(100) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `stato` varchar(5) NOT NULL,
  PRIMARY KEY (`idmedico`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dump dei dati per la tabella `medico`
--

INSERT INTO `medico` (`idmedico`, `nome`, `cognome`, `telefono`, `email`, `username`, `password`, `stato`) VALUES
(1, 'simone', 'tardivo', '', 'ineihozoin@gmail.com', 'wasimon', '79ec3f45a71ef7e9d8e087a177c85f34', ''),
(2, 'gionni', 'mnemonic', '1234567890', 'test@test.it', 'qwerty', 'd8578edf8458ce06fbc5bb76a58c5ca4', ''),
(3, 'First Name', 'Last Name', 'Numero di telef', 'Email@Address.com', 'Username', 'dc647eb65e6711e155375218212b3964', ''),
(4, 'Nome', 'Cognome', '234566669765', 'Essmail@Address.com', 'Nome utente', 'dc647eb65e6711e155375218212b3964', ''),
(9, 'alessio', 'tardivo', 'Numero di telef', 'fadsadsa@gasad.it', 'medichetto', 'dc647eb65e6711e155375218212b3964', ''),
(10, 'alessio', 'tardivo', 'Numero di telef', 'fjhgfadsadsa@gasad.it', 'medichetto1', 'dc647eb65e6711e155375218212b3964', ''),
(11, 'Nome2', '2', '234566669765', 'Indirizzo@Email2.it', 'user', '5f4dcc3b5aa765d61d8327deb882cf99', ''),
(12, 'Nome', 'Cognome', '234566669765', 'Indirizzo@Email.com', 'asdasd', 'd8578edf8458ce06fbc5bb76a58c5ca4', ''),
(13, 'Nomeqw', 'Cognomewqe', '234566669765', 'Indirizzo@Eeemwail.com', 'asdasdqwe', 'd8578edf8458ce06fbc5bb76a58c5ca4', ''),
(14, 'qeweqweqw', 'eqweqweqweqw', '1345678654', 'Indirizzo@Ema1il.com', '2345534hfgf', '040b7cf4a55014e185813e0644502ea9', ''),
(15, 'Marcello', 'Ferrari', '0000000000', 'xxxxx@xxxx.xxx', 'ferrari', '0911054d8ad47cc256400031197f3e97', ''),
(16, 'asd', 'ineihozoing@mail.com', 'ineihozoing@mai', 'ineihozoing@mail.com', 'simone.tardivo', '827ccb0eea8a706c4c34a16891f84e7b', ''),
(17, 'prova14', 'prova14', '1234567890', 'prova14@gmail.com', 'prova14', '0703bea7f8c89875126e29bdccb38b79', ''),
(18, 'polxblu', 'polxblu', '1234554321', 'polxblu@polxblu.it', 'polxblu', '565eca64978d91b1f632c5248d989a73', '');

-- --------------------------------------------------------

--
-- Struttura della tabella `misura`
--

CREATE TABLE `misura` (
  `idmisura` int(11) NOT NULL AUTO_INCREMENT,
  `idpaziente` bigint(20) NOT NULL,
  `nome` varchar(50) NOT NULL DEFAULT '',
  `valore` varchar(50) NOT NULL DEFAULT '',
  `data` varchar(8) NOT NULL DEFAULT '',
  PRIMARY KEY (`idmisura`),
  KEY `data` (`data`),
  KEY `idpaziente` (`idpaziente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `paziente`
--

CREATE TABLE `paziente` (
  `codfis` varchar(16) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `cognome` varchar(20) NOT NULL,
  `sesso` varchar(1) NOT NULL,
  `dataoggi` varchar(8) NOT NULL,
  `datanascita` varchar(8) NOT NULL,
  `luogonascita` varchar(20) NOT NULL,
  `indirizzovia` varchar(20) NOT NULL,
  `indirizzocitta` varchar(20) NOT NULL,
  `indirizzocap` varchar(5) NOT NULL,
  `indirizzoprovincia` varchar(20) NOT NULL,
  `statocivile` varchar(20) NOT NULL,
  `scolarita` int(11) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `cel` varchar(15) NOT NULL,
  `medicofamiglia` varchar(50) NOT NULL,
  `personariferimento` varchar(50) NOT NULL,
  `telriferimento` varchar(20) NOT NULL,
  `centropneumo` varchar(50) NOT NULL,
  `specpneumo` varchar(50) NOT NULL,
  `telpneumologo` varchar(20) NOT NULL,
  `centromotorio` varchar(50) NOT NULL,
  `specmotorio` varchar(50) NOT NULL,
  `telmotorio` varchar(20) NOT NULL,
  `lavoro` varchar(30) NOT NULL,
  `idmedico` int(11) NOT NULL,
  `fumo_tipo` varchar(2) NOT NULL,
  `fumo_eta_inizio` int(11) NOT NULL,
  `fumo_eta_fine` int(11) NOT NULL,
  `sigarette_di` int(11) NOT NULL,
  `pack_anno` int(11) NOT NULL,
  `commorbidita` text NOT NULL,
  PRIMARY KEY (`codfis`),
  KEY `idmedico` (`idmedico`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `paziente`
--

INSERT INTO `paziente` (`codfis`, `nome`, `cognome`, `sesso`, `dataoggi`, `datanascita`, `luogonascita`, `indirizzovia`, `indirizzocitta`, `indirizzocap`, `indirizzoprovincia`, `statocivile`, `scolarita`, `tel`, `cel`, `medicofamiglia`, `personariferimento`, `telriferimento`, `centropneumo`, `specpneumo`, `telpneumologo`, `centromotorio`, `specmotorio`, `telmotorio`, `lavoro`, `idmedico`, `fumo_tipo`, `fumo_eta_inizio`, `fumo_eta_fine`, `sigarette_di`, `pack_anno`, `commorbidita`) VALUES
('qwertyuioplkjjh', 'dasdasd', 'adsdasda', 'm', '12345675', '12343212', 'nascei', 'morei', 'indirizzai', '12345', 'provincia', 'celibe', 0, '0', '3291045459', 'medicofamiglia', 'personariferimento', '3291045459', 'centropneumo', 'specpneumo', '3291045459', 'centromotorio', 'specmotorio', '3291045459', 'lav', 0, '', 0, 0, 0, 0, ''),
('<dfgkàù', 'Nome', 'Cognome', 'm', 'dataoggi', 'datanasc', 'luogonascita', 'indirizzovia', 'indirizzocitta', 'indir', 'indirizzoprovincia', 'celibe', 0, '0', 'Numero di cellu', 'medicofamiglia', 'personariferimento', 'telriferimento', 'centropneumo', 'specpneumo', 'telpneumologo', 'centromotorio', 'specmotorio', 'telmotorio', 'lav', 4, '', 0, 0, 0, 0, ''),
('', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 4, '', 0, 0, 0, 0, ''),
('caseario', '', 'casa', 'M', '20120103', '', 'csas', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 4, 'si', 0, 0, 0, 0, ''),
('benelux', '', '', 'M', '20120103', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 4, 'si', 0, 0, 0, 0, ''),
('completo', '', '', 'M', '20120103', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 4, 'si', 0, 0, 0, 0, ''),
('pippo3', '', '', 'M', '20120117', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 4, 'si', 0, 0, 0, 0, ''),
('pippo2', '', '', 'M', '20120117', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 4, 'no', 0, 0, 0, 0, ''),
('0987654', '', '', 'M', '20120106', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 4, 'si', 0, 0, 0, 0, ''),
('Creative', '', '', 'M', '20120118', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 4, 'no', 0, 0, 0, 0, ''),
('dfghj', '', '', 'M', '20120118', 'dfghj', 'DFGHJ', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 4, 'no', 0, 0, 0, 0, ''),
('GENNARINO C', '', 'adsadsads', 'M', '20120118', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 4, 'no', 0, 0, 0, 0, ''),
('asd000jklasdfghj', '', 'sedrtfg', 'M', '20120118', 'DSFGH', 'dsaf', 'pi', 'dasd', '12345', 'reggio', 'ads', 12, '1234445455', '1234567899', '', 'gio', '1234565039', '', '', '', '', '', '', 'ads', 4, 'no', 0, 0, 0, 0, ''),
('asd000jklasdf2hj', '', 'sedrtfg', 'M', '20120118', 'DSFGH', 'dsaf', 'pi', 'dasd', '12345', 'reggio', 'ads', 12, '1234445455', '1234567899', '', 'gio', '1234565039', '', '', '', '', '', '', 'ads', 4, 'no', 0, 0, 0, 0, ''),
('12345gdffsdfdsfs', 'simone tardivo', 'dasads', 'M', '20120118', '12-12-12', 'erw', 'dfs', 'dfs', '12345', 'eweqwe', 'adssd', 123, '123454345434444', '412422442142142', '', 'ewqewqqew', '12312332323', '', '', '', '', '', '', 'dfsdfs', 4, 'no', 0, 0, 0, 0, ''),
('s', '', '', 'M', '20120119', 'ds', 's', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 4, 'no', 0, 0, 0, 0, ''),
('3123123123123131', 'alessio', 'asdasd', 'M', '20120119', '12-12-12', '123', 'ewrw', 'erw', '13223', 'weqew', '123', 231, '1323232323', '2333332222', '', 'ewqeqw', '2132133123', '', '', '', '', '', '', '11', 4, 'no', 0, 0, 0, 0, ''),
('31231q3333123131', 'alessio', 'asdasd', 'M', '20120119', '12-12-12', '123', 'ewrw', 'erw', '13223', 'weqew', '123', 231, '1323232323', '2333332222', '', 'ewqeqw', '2132133123', '', '', '', '', '', '', '11', 4, 'no', 0, 0, 0, 0, ''),
('31231q333q123131', 'alessio', 'asdasd', 'M', '20120119', '12-12-12', '123', 'ewrw', 'erw', '13223', 'weqew', '123', 231, '1323232323', '2333332222', '', 'ewqeqw', '2132133123', '', '', '', '', '', '', '11', 4, 'no', 0, 0, 0, 0, ''),
('31231q333q12313a', 'alessio', 'asdasd', 'M', '20120119', '12-12-12', '123', 'ewrw', 'erw', '13223', 'weqew', '123', 231, '1323232323', '2333332222', '', 'ewqeqw', '2132133123', '', '', '', '', '', '', '11', 4, 'no', 0, 0, 0, 0, ''),
('31231q33rq12313e', 'alessio', 'asdasd', 'M', '20120119', '12-12-12', '123', 'ewrw', 'erw', '13223', 'weqew', '123', 231, '1323232323', '2333332222', '', 'ewqeqw', '2132133123', '', '', '', '', '', '', '11', 4, 'no', 0, 0, 0, 0, ''),
('31231q3arq12313e', 'alessio', 'asdasd', 'M', '20120119', '12-12-12', '123', 'ewrw', 'erw', '13223', 'weqew', '123', 231, '1323232323', '2333332222', '', 'ewqeqw', '2132133123', '', '', '', '', '', '', '11', 4, 'no', 0, 0, 0, 0, ''),
('q1231q3arq12313e', 'alessio', 'asdasd', 'M', '20120119', '12-12-12', '123', 'ewrw', 'erw', '13223', 'weqew', '123', 231, '1323232323', '2333332222', '', 'ewqeqw', '2132133123', '', '', '', '', '', '', '11', 4, 'no', 0, 0, 0, 0, ''),
('q1231q3arq1a313e', 'alessio', 'asdasd', 'M', '20120119', '12-12-12', '123', 'ewrw', 'erw', '13223', 'weqew', '123', 231, '1323232323', '2333332222', '', 'ewqeqw', '2132133123', '', '', '', '', '', '', '11', 4, 'no', 0, 0, 0, 0, ''),
('q1231q3arqea313e', 'alessio', 'asdasd', 'M', '20120119', '12-12-12', '123', 'ewrw', 'erw', '13223', 'weqew', '123', 231, '1323232323', '2333332222', '', 'ewqeqw', '2132133123', '', '', '', '', '', '', '11', 4, 'no', 0, 0, 0, 0, ''),
('q1231q3arqea31ae', 'alessio', 'asdasd', 'M', '20120119', '12-12-12', '123', 'ewrw', 'erw', '13223', 'weqew', '123', 231, '1323232323', '2333332222', '', 'ewqeqw', '2132133123', '', '', '', '', '', '', '11', 4, 'no', 0, 0, 0, 0, ''),
('a1231q3arqea31ae', 'alessio', 'asdasd', 'M', '20120119', '12-12-12', '123', 'ewrw', 'erw', '13223', 'weqew', '123', 231, '1323232323', '2333332222', '', 'ewqeqw', '2132133123', '', '', '', '', '', '', '11', 4, 'no', 0, 0, 0, 0, ''),
('GGGGGGGGGGGGGGGG', 'alessio', 'asdasd', 'M', '20120119', '12-12-12', '123', 'ewrw', 'erw', '13223', 'weqew', '123', 231, '1323232323', '2333332222', '', 'ewqeqw', '2132133123', '', '', '', '', '', '', '11', 4, 'no', 0, 0, 0, 0, ''),
('aaaaaaaaaaaaaaaa', 'alessio', 'asdasd', 'M', '20120119', '12-12-12', '123', 'ewrw', 'erw', '13223', 'weqew', '123', 231, '1323232323', '2333332222', '', 'ewqeqw', '2132133123', '', '', '', '', '', '', '11', 4, 'no', 0, 0, 0, 0, ''),
('bbbbbbbbbbbbbbbb', 'alessio', 'asdasd', 'M', '20120119', '12-12-12', '123', 'ewrw', 'erw', '13223', 'weqew', '123', 231, '1323232323', '2333332222', '', 'ewqeqw', '2132133123', '', '', '', '', '', '', '11', 4, 'no', 0, 0, 0, 0, ''),
('cccccccccccccccc', 'alessio', 'asdasd', 'M', '20120119', '12-12-12', '123', 'ewrw', 'erw', '13223', 'weqew', '123', 231, '1323232323', '2333332222', '', 'ewqeqw', '2132133123', '', '', '', '', '', '', '11', 4, 'no', 0, 0, 0, 0, ''),
('dddddddddddddddd', 'alessio', 'asdasd', 'M', '20120119', '12-12-12', '123', 'ewrw', 'erw', '13223', 'weqew', '123', 231, '1323232323', '2333332222', '', 'ewqeqw', '2132133123', '', '', '', '', '', '', '11', 4, 'no', 0, 0, 0, 0, ''),
('eeeeeeeeeeeeeeee', 'alessio', 'asdasd', 'M', '20120119', '12-12-12', '123', 'ewrw', 'erw', '13223', 'weqew', '123', 231, '1323232323', '2333332222', '', 'ewqeqw', '2132133123', '', '', '', '', '', '', '11', 4, 'no', 0, 0, 0, 0, ''),
('ffffffffffffffff', 'alessio', 'asdasd', 'M', '20120119', '12-12-12', '123', 'ewrw', 'erw', '13223', 'weqew', '123', 231, '1323232323', '2333332222', '', 'ewqeqw', '2132133123', '', '', '', '', '', '', '11', 4, 'no', 0, 0, 0, 0, ''),
('hhhhhhhhhhhhhhhh', 'alessio', 'asdasd', 'M', '20120119', '12-12-12', '123', 'ewrw', 'erw', '13223', 'weqew', '123', 231, '1323232323', '2333332222', '', 'ewqeqw', '2132133123', '', '', '', '', '', '', '11', 4, 'no', 0, 0, 0, 0, ''),
('qqqqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqqqqq', 'M', '20120119', '12-12-12', 'qqqqqqqqqqqqqqqqqqqq', 'ad', 'ads', '12313', 'adsad', 'wewqe', 123, '111111111111111', '111111111111111', '', 'dasdasda', '12312321312', '', '', '', '', '', '', 'eda', 4, 'no', 0, 0, 0, 0, ''),
('qqqqqqqqqssqqqqq', 'qqqqqqqqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqqqqq', 'M', '20120119', '12-12-12', 'qqqqqqqqqqqqqwwqqqqq', 'ad', 'ads', '12313', 'adsad', 'wewqe', 123, '111111111111111', '111111111111111', '', 'dasdasda', '12312321312', '', '', '', '', '', '', 'eda', 4, 'no', 0, 0, 0, 0, ''),
('aaaaaaaaaaaadddd', 'das', 'asdasd', 'M', '20120119', '12-12-12', '123', 'daaddsa', 'adsdsads', '13212', 'adsasads', 'das', 123, '132321132321', '123132213213', '', 'dadasd', '11111111111111', '', '', '', '', '', '', 'daadssadds', 4, 'no', 0, 0, 0, 0, ''),
('dsdasdwqeqweqweq', 'dasdasd', 'asdda', 'M', '20120119', '12-12-12', 'wer', 'eweqeqweq', 'eqw', '13231', 'eqweqw', 'qew', 12, '311132321221213', '31132213212132', '', 'eqeqwe', '132312313213123', '', '', '', '', '', '', 'ew', 4, 'si', 213, 0, 132, 0, ''),
('eweqwewqewqeqweq', 'io', 'sono', 'M', '20120120', '12-12-12', 'eew', '132132', '132132132', '13213', '231', 'qwewq', 1, '312312312312321', '132132132121321', '', '132132123', '12313123122132', '', '', '', '', '', '', '132132123132', 1, 'no', 0, 0, 0, 0, ''),
('xxxxxxxxxxxxxxxx', 'Ugo', 'Rossi', 'M', '20120123', '12-12-19', 'Verona', 'Cavour 17', 'Malcesine', '37100', 'VR', 'sposato', 13, '0000000000', '0000000000', 'a', 'Dott. Bruno ', '0000000000', '', 'a', '0000000000', '', '', '0000000000', 'Operaio edile', 15, 'no', 0, 0, 0, 0, ''),
('xxxxxxxxxxxxxxx1', 'Bruno', 'Bianchi', 'M', '20120124', '12-10-19', 'Trento', 'corso Garibaldi 3', 'trento', '38100', 'TN', 'sposato', 13, '111111111111111', '111111111111111', 'Dott. Benedetti', 'Guido Bianchi', '1111111111111111', '', '', '1111111111111111', '', '', '1111111111111111', 'cuoco', 15, 'si', 17, 0, 20, 38, ''),
('trdsmn86p25l378t', 'Simone', 'Tardivo', 'M', '20120128', '1986-09-', 'trento', 'piazza cavour 17', 'malceine', '37018', 'VR', 'nubile', 16, '0457491827', '3291827364', 'dott. Rossi', 'xxx', '2345678765432', '', '', '', '', '', '', 'Studente', 15, 'si', 21, 0, 20, 2, 'nessuna'),
('1234567890qwerty', 'Marlon', 'Saglia', 'M', '20120207', '1987-10-', 'Rovereto', 'Via Mazzini, 146', 'Via Mazzini, 146', '40138', 'Bologna', 'Casereccio', 123, '01234567800', '3338495000', 'Non ricordo', 'Wasimon', '3293333312', 'Perche'' minimo dieci Caratteri?!?!', 'Lo stesso.', '02478569812', 'Quello la''.', 'Nebulizzato.', '0031158987589', 'Troppe Cose', 4, 'no', 0, 0, 0, 0, 'Certo, come no..'),
('qwertyuiolkjhgfd', 'giorgia', 'mingione', 'F', '20140207', '201', 'qw', 'saddsa', '12341', '12341', 'VR', 'wq', 21, '1221121221', '122121212121', '', '123213', '1232321342', '', '', '', '', '', '', 'sdfg', 1, 'no', 0, 0, 0, 0, ''),
('asdfghjkloiuytre', 'sad', 'ads', 'M', '20140209', '10101010', 'dfsfds', '', '', '', '', 'ddfs', 0, '234567890987', '3456787654345', '', '', '', '', '', '', '', '', '', '', 1, 'no', 0, 0, 0, 0, ''),
('dasdasdsdsdsddss', 'marlon', 'saglia', 'M', '20140312', '1986-12-', 'madsa', 'asda', 'dsad', '21222', 'asdad', 'sadsad', 2, '2121111111', '1111111111', '', 'dsadsa', '1222222222', '', '', '', '', '', '', 'dasds', 1, 'no', 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Struttura della tabella `prog_selezionati`
--

CREATE TABLE `prog_selezionati` (
  `codfis` varchar(255) NOT NULL,
  `tipo_prog` varchar(5) NOT NULL,
  `num_prog` smallint(6) NOT NULL,
  `prog_default` smallint(6) DEFAULT NULL,
  `timestamp` int(11) NOT NULL,
  PRIMARY KEY (`codfis`,`tipo_prog`,`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `prog_selezionati`
--

INSERT INTO `prog_selezionati` (`codfis`, `tipo_prog`, `num_prog`, `prog_default`, `timestamp`) VALUES
('eweqwewqewqeqweq', '1AERO', 4, 4, 1394732100),
('eweqwewqewqeqweq', '1AERO', 2, 4, 1394734255),
('eweqwewqewqeqweq', '1AERO', 3, 4, 1394825221),
('eweqwewqewqeqweq', '1AERO', 4, 4, 1394879227),
('eweqwewqewqeqweq', '1AERO', 1, 4, 1394899461),
('eweqwewqewqeqweq', '1AERO', 2, 4, 1394900198),
('eweqwewqewqeqweq', '2RINF', 4, 4, 1394732100),
('eweqwewqewqeqweq', '2RINF', 2, 4, 1394734255),
('eweqwewqewqeqweq', '2RINF', 3, 4, 1394825221),
('eweqwewqewqeqweq', '2RINF', 3, 4, 1394879227),
('eweqwewqewqeqweq', '2RINF', 1, 4, 1394899461),
('eweqwewqewqeqweq', '2RINF', 2, 4, 1394900198),
('eweqwewqewqeqweq', '3ADDO', 4, 4, 1394732100),
('eweqwewqewqeqweq', '3ADDO', 2, 4, 1394734255),
('eweqwewqewqeqweq', '3ADDO', 2, 4, 1394825221),
('eweqwewqewqeqweq', '3ADDO', 3, 4, 1394879227),
('eweqwewqewqeqweq', '3ADDO', 1, 4, 1394899461),
('eweqwewqewqeqweq', '3ADDO', 4, 4, 1394900198);

-- --------------------------------------------------------

--
-- Struttura della tabella `sf36`
--

CREATE TABLE `sf36` (
  `codfis` varchar(16) NOT NULL DEFAULT '',
  `data` varchar(8) NOT NULL DEFAULT '',
  `sf1` int(11) NOT NULL,
  `sf2` int(11) NOT NULL,
  `sf3` int(11) NOT NULL,
  `sf4` int(11) NOT NULL,
  `sf5` int(11) NOT NULL,
  `sf6` int(11) NOT NULL,
  `sf7` int(11) NOT NULL,
  `sf8` int(11) NOT NULL,
  `sf9` int(11) NOT NULL,
  `sf10` int(11) NOT NULL,
  `sf11` int(11) NOT NULL,
  `sf12` int(11) NOT NULL,
  `sf13` int(11) NOT NULL,
  `sf14` int(11) NOT NULL,
  `sf15` int(11) NOT NULL,
  `sf16` int(11) NOT NULL,
  `sf17` int(11) NOT NULL,
  `sf18` int(11) NOT NULL,
  `sf19` int(11) NOT NULL,
  `sf20` int(11) NOT NULL,
  `sf21` int(11) NOT NULL,
  `sf22` int(11) NOT NULL,
  `sf23` int(11) NOT NULL,
  `sf24` int(11) NOT NULL,
  `sf25` int(11) NOT NULL,
  `sf26` int(11) NOT NULL,
  `sf27` int(11) NOT NULL,
  `sf28` int(11) NOT NULL,
  `sf29` int(11) NOT NULL,
  `sf30` int(11) NOT NULL,
  `sf31` int(11) NOT NULL,
  `sf32` int(11) NOT NULL,
  `sf33` int(11) NOT NULL,
  `sf34` int(11) NOT NULL,
  `sf35` int(11) NOT NULL,
  `sf36` int(11) NOT NULL,
  `sftotale` int(11) NOT NULL,
  PRIMARY KEY (`codfis`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `tinetti`
--

CREATE TABLE `tinetti` (
  `idtinetti` bigint(20) NOT NULL AUTO_INCREMENT,
  `codfis` varchar(16) NOT NULL DEFAULT '',
  `data` varchar(8) NOT NULL DEFAULT '',
  `e1` int(11) NOT NULL,
  `e2` int(11) NOT NULL,
  `e3` int(11) NOT NULL,
  `e4` int(11) NOT NULL,
  `e5` int(11) NOT NULL,
  `e6` int(11) NOT NULL,
  `e7` int(11) NOT NULL,
  `e8` int(11) NOT NULL,
  `e9` int(11) NOT NULL,
  `e10` int(11) NOT NULL,
  `a1` int(11) NOT NULL,
  `a2` int(11) NOT NULL,
  `a3` int(11) NOT NULL,
  `a4` int(11) NOT NULL,
  `a5` int(11) NOT NULL,
  `a6` int(11) NOT NULL,
  `a7` int(11) NOT NULL,
  `a8` int(11) NOT NULL,
  `a9` int(11) NOT NULL,
  `a10` int(11) NOT NULL,
  `etot` int(11) NOT NULL,
  `atot` int(11) NOT NULL,
  `tinettitotale` int(11) NOT NULL,
  UNIQUE KEY `idtinetti` (`idtinetti`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dump dei dati per la tabella `tinetti`
--

INSERT INTO `tinetti` (`idtinetti`, `codfis`, `data`, `e1`, `e2`, `e3`, `e4`, `e5`, `e6`, `e7`, `e8`, `e9`, `e10`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `etot`, `atot`, `tinettitotale`) VALUES
(1, 'pippo3', '20140114', 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1),
(2, '31231q3333123131', '20140116', 0, 0, 0, 0, 0, 0, 2, 1, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, 0, 6),
(3, '0987654', '20140121', 0, 0, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, 0, 6),
(4, 'completo', '20140128', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `t_antropometria`
--

CREATE TABLE `t_antropometria` (
  `idantro` bigint(20) NOT NULL AUTO_INCREMENT,
  `codfis` varchar(16) COLLATE utf8_bin NOT NULL,
  `peso_ora` int(11) NOT NULL,
  `peso_anno` int(11) NOT NULL,
  `altezza` int(11) NOT NULL,
  `BMI` decimal(9,3) NOT NULL,
  `massagrassa` int(11) NOT NULL,
  `massamagra` int(11) NOT NULL,
  `aquatot` int(11) NOT NULL,
  `grassoperc` int(11) NOT NULL,
  `magroperc` int(11) NOT NULL,
  `data` varchar(8) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idantro`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=137 ;

--
-- Dump dei dati per la tabella `t_antropometria`
--

INSERT INTO `t_antropometria` (`idantro`, `codfis`, `peso_ora`, `peso_anno`, `altezza`, `BMI`, `massagrassa`, `massamagra`, `aquatot`, `grassoperc`, `magroperc`, `data`) VALUES
(1, 'caseario', 45, 12, 20, 23.000, 20, 30, 50, 45, 65, '20120103'),
(2, 'benelux', 3, 4, 5, 67.000, 6, 6, 6, 6, 6, '20120103'),
(3, 'completo', 0, 0, 0, 1234.000, 0, 0, 0, 0, 0, '20120103'),
(4, 'completo', 234, 232323, 23, 23.000, 0, 0, 0, 0, 0, '20120103'),
(5, 'completo', 12345, 12345, 12345, 12345.000, 1234, 12345, 12, 12, 12, '20120103'),
(6, 'completo', 12345, 12345, 12345, 12345.000, 1234, 12345, 12, 12, 12, '20120103'),
(7, 'completo', 12345, 12345, 12345, 12345.000, 1234, 12345, 12, 12, 12, '20120103'),
(8, 'comple2', 3456, 345, 43, 0.000, 4, 34, 4, 34, 0, '20120103'),
(9, 'ultimo', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120103'),
(10, 'tonino', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120103'),
(11, 'tonino', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120103'),
(12, 'tonino', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120103'),
(13, 'tonino', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120103'),
(14, 'tonino', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120103'),
(15, 'tonino', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120103'),
(16, 'tonino', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120103'),
(17, 'tonino', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120103'),
(18, 'aersdrsdgfdg', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120103'),
(19, 'aersdrsdgfdg', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120103'),
(20, 'aersdrsdgfdg', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120103'),
(21, 'aersdrsdgfdg', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120103'),
(22, 'aersdrsdgfdg', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120103'),
(23, 'aersdrsdgfdg', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120103'),
(24, '2ewrwqrqrq', 4, 34, 3, 3.000, 3, 0, 5, 0, 0, '20120103'),
(25, '2ewrwqrqrq', 4, 34, 3, 3.000, 3, 0, 5, 0, 0, '20120103'),
(26, 'asdfghjklÃ²jhg', 1234567, 12, 23456, 2345.000, 2345, 23456, 2345, 234, 12345, '20120106'),
(27, 'wertyu', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120106'),
(28, 'wertyu', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120106'),
(29, 'asdf', 12, 12, 12, 12.000, 0, 12, 12, 0, 0, '20120106'),
(30, 'asdfgiiiii', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120106'),
(31, 'asdfgiiiii', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120106'),
(32, 'asdfgiiiii', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120106'),
(33, 'asdfgiiiii', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120106'),
(34, 'asdfgiiiii', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120106'),
(35, 'asdfgiiiii', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120106'),
(36, '0987654', 1, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120106'),
(37, '0987654', 1, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120106'),
(38, 'cacca', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120106'),
(39, 'giorgio', 11, 11, 11, 11.000, 0, 0, 0, 0, 0, '20120117'),
(40, 'pippo2', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120117'),
(41, 'pippo3', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120117'),
(42, 'pippo4', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120117'),
(43, 'pippo4', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120117'),
(44, 'pippo4', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120117'),
(45, 'pippo4', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120117'),
(46, 'pippo4', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120117'),
(47, 'pippo4', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120117'),
(48, 'pippo4', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120117'),
(49, 'pippo4', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120117'),
(50, 'pippo4', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120117'),
(51, 'pippo4', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120117'),
(52, 'pippo4', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120117'),
(53, 'pippo4', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120117'),
(54, 'pippo4', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120117'),
(55, 'pippo4', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120117'),
(56, 'pippo6', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120117'),
(57, 'pippo10', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120117'),
(58, 'pippo10', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120117'),
(59, 'Creative', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120118'),
(60, 'aaaaaaaaaaaadddd', 2147483647, 2147483647, 2147483647, 0.000, 0, 0, 0, 0, 0, '20120119'),
(61, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(62, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(63, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(64, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(65, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(66, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(67, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(68, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(69, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(70, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(71, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(72, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(73, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(74, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(75, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(76, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(77, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(78, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(79, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(80, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(81, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(82, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(83, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(84, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(85, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(86, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(87, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(88, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(89, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(90, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(91, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(92, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(93, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(94, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(95, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(96, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(97, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(98, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(99, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(100, 'aaaaaaaaaaaadddd', 4, 4, 4, 4.000, 4, 4, 4, 4, 4, '20120119'),
(101, 'dsdasdwqeqweqweq', 312, 11, 12, 0.000, 0, 0, 0, 0, 0, '20120119'),
(102, '', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120120'),
(103, 'eweqwewqewqeqweq', 1111111, 2323232, 11111, 12.000, 0, 0, 0, 0, 0, '20120120'),
(104, 'eweqwewqewqeqweq', 123, 132, 132, 0.000, 0, 0, 0, 0, 0, '20120120'),
(105, 'eweqwewqewqeqweq', 12345, 12345, 12345, 12345.000, 12345, 12345, 12345, 12345, 12345, '20120120'),
(106, 'eweqwewqewqeqweq', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120120'),
(107, 'eweqwewqewqeqweq', 80, 0, 180, 25.000, 0, 0, 0, 0, 0, '20120120'),
(108, 'eweqwewqewqeqweq', 80, 0, 180, 25.000, 0, 0, 0, 0, 0, '20120120'),
(109, 'eweqwewqewqeqweq', 80, 0, 180, 25.000, 0, 0, 0, 0, 0, '20120120'),
(110, '', 80, 0, 180, 25.000, 0, 0, 0, 0, 0, '20120120'),
(111, '', 80, 180, 180, 25.000, 0, 0, 0, 0, 0, '20120120'),
(112, 'eweqwewqewqeqweq', 80, 0, 180, 25.000, 0, 0, 0, 0, 0, '20120120'),
(113, 'eweqwewqewqeqweq', 80, 0, 180, 25.000, 0, 0, 0, 0, 0, '20120120'),
(114, 'eweqwewqewqeqweq', 80, 0, 180, 24.691, 0, 0, 0, 0, 0, '20120120'),
(115, 'eweqwewqewqeqweq', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20120121'),
(116, 'eweqwewqewqeqweq', 12, 21, 3, 13333.333, 0, 0, 0, 0, 0, '20120121'),
(117, 'qwertyuioplkjhgf', 80, 75, 180, 24.691, 12, 12, 12, 12, 12, '20120122'),
(118, 'qwertyuioplkjhgf', 12, 23, 233, 2.210, 12, 21, 32, 32, 32, '20120122'),
(119, 'qwertyuioplkjhgf', 12, 23, 233, 2.210, 12, 21, 32, 32, 32, '20120122'),
(120, 'qwertyuioplkjhgf', 12, 23, 233, 2.210, 12, 21, 32, 32, 32, '20120122'),
(121, 'qwertyuioplkasds', 72, 75, 170, 24.913, 5, 56, 50, 5, 0, '20120123'),
(122, 'xxxxxxxxxxxxxxxx', 80, 78, 175, 26.122, 0, 0, 0, 0, 0, '20120123'),
(123, 'xxxxxxxxxxxxxxx1', 80, 82, 178, 25.249, 0, 0, 0, 0, 0, '20120124'),
(124, 'qwertyuioplkasds', 1324, 234, 23, 25028.355, 0, 0, 0, 0, 0, '20120124'),
(125, 'trdsmn86p25l378t', 72, 70, 178, 22.724, 0, 0, 0, 0, 0, '20120128'),
(126, 'dassdadsadsadsad', 70, 70, 170, 24.221, 0, 0, 0, 0, 0, '20120129'),
(127, 'dassdadsadsadsad', 70, 70, 170, 24.221, 0, 0, 0, 0, 0, '20120129'),
(128, '1234567890qwerty', 67, 67, 178, 21.100, 2, 1, 3, 4, 5, '20120207'),
(129, 'qwertyuiolkjhgfd', 100, 101, 175, 32.653, 0, 0, 0, 0, 0, '20140207'),
(130, 'asdfghjkloiuytre', 0, 0, 0, 0.000, 0, 0, 0, 0, 0, '20140209'),
(133, 'qwertyuiolkjhgfd', 100, 101, 175, 27.000, 0, 0, 0, 0, 0, '20120207'),
(132, 'qwertyuiolkjhgfd', 100, 101, 175, 25.000, 0, 0, 0, 0, 0, '20130207'),
(134, 'qwertyuiolkjhgfd', 12, 12, 21, 272.109, 0, 0, 0, 0, 0, '20140224'),
(135, 'eweqwewqewqeqweq', 70, 65, 120, 48.611, 0, 0, 0, 0, 0, '20140312'),
(136, 'dasdasdsdsdsddss', 123, 12, 123, 81.301, 0, 0, 0, 0, 0, '20140312');

-- --------------------------------------------------------

--
-- Struttura della tabella `t_cicloerg`
--

CREATE TABLE `t_cicloerg` (
  `idciclo` bigint(20) NOT NULL AUTO_INCREMENT,
  `codfis` varchar(16) COLLATE utf8_bin NOT NULL,
  `data` varchar(8) COLLATE utf8_bin NOT NULL,
  `fcbase` int(11) NOT NULL,
  `fcmax` int(11) NOT NULL,
  `vo2base` int(11) NOT NULL,
  `vo2max` int(11) NOT NULL,
  `wmax` int(11) NOT NULL,
  `wpredetto` int(11) NOT NULL,
  `vemax` int(11) NOT NULL,
  `vebase` int(11) NOT NULL,
  `vo2predetto` int(11) NOT NULL,
  `fcpredetto` int(11) NOT NULL,
  `borg_d_base` int(11) NOT NULL,
  `borg_d_max` int(11) NOT NULL,
  `tempofine` int(11) NOT NULL,
  `motivofine` text COLLATE utf8_bin NOT NULL,
  `protocollo` varchar(30) COLLATE utf8_bin NOT NULL,
  `p1` int(11) NOT NULL,
  `p2` int(11) NOT NULL,
  `p3` int(11) NOT NULL,
  `p4` int(11) NOT NULL,
  PRIMARY KEY (`idciclo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=21 ;

--
-- Dump dei dati per la tabella `t_cicloerg`
--

INSERT INTO `t_cicloerg` (`idciclo`, `codfis`, `data`, `fcbase`, `fcmax`, `vo2base`, `vo2max`, `wmax`, `wpredetto`, `vemax`, `vebase`, `vo2predetto`, `fcpredetto`, `borg_d_base`, `borg_d_max`, `tempofine`, `motivofine`, `protocollo`, `p1`, `p2`, `p3`, `p4`) VALUES
(1, '', '20120103', 132, 132, 12, 12, 321, 0, 132, 23, 0, 132, 123, 132, 0, 0x313332333132333332313233313332, 'protocollo1', 123, 132, 132, 123),
(2, '', '20120103', 132, 132, 12, 12, 321, 0, 132, 23, 0, 132, 123, 132, 0, 0x313332333132333332313233313332, 'protocollo1', 123, 132, 132, 123),
(3, '', '20120103', 132, 132, 12, 12, 321, 0, 132, 23, 0, 132, 123, 132, 0, 0x313332333132333332313233313332, 'protocollo1', 123, 132, 132, 123),
(4, '', '20120103', 132, 132, 12, 12, 321, 0, 132, 23, 0, 132, 123, 132, 0, 0x313332333132333332313233313332, 'protocollo1', 123, 132, 132, 123),
(5, '', '20120103', 132, 132, 12, 12, 321, 0, 132, 23, 0, 132, 123, 132, 0, 0x313332333132333332313233313332, 'protocollo1', 123, 132, 132, 123),
(6, '', '20120103', 132, 132, 12, 12, 321, 0, 132, 23, 0, 132, 123, 132, 0, 0x313332333132333332313233313332, 'protocollo1', 123, 132, 132, 123),
(7, '', '20120103', 132, 132, 12, 12, 321, 0, 132, 23, 0, 132, 123, 132, 0, 0x313332333132333332313233313332, 'protocollo1', 123, 132, 132, 123),
(8, '', '20120103', 132, 132, 12, 12, 321, 0, 132, 23, 0, 132, 123, 132, 0, 0x313332333132333332313233313332, 'protocollo1', 123, 132, 132, 123),
(9, 'eweqwewqewqeqweq', '20120120', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'protocollo1', 0, 0, 0, 0),
(10, 'eweqwewqewqeqweq', '20120121', 1, 1, 1, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0x7465726d696e65, 'protocollo2', 1, 1, 0, 0),
(11, 'eweqwewqewqeqweq', '20120121', 12, 12, 12, 12, 12, 12, 21, 12, 12, 12, 12, 12, 12, 0x3231, 'protocollo2', 12, 1212, 12, 12),
(12, 'qwertyuiolkjhgfd', '20140216', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'protocollo1', 0, 0, 0, 0),
(13, 'eweqwewqewqeqweq', '20140216', 1, 0, 1, 0, 0, 0, 0, 1, 0, 0, 1, 0, 1, '', 'protocollo2', 1, 0, 0, 0),
(14, 'eweqwewqewqeqweq', '20140216', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'protocollo1', 0, 0, 0, 0),
(15, 'asdfghjkloiuytre', '20140301', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'protocollo1', 0, 0, 0, 0),
(16, 'eweqwewqewqeqweq', '20140312', 0, 0, 30, 35, 0, 0, 0, 0, 53, 0, 0, 0, 0, '', 'protocollo1', 0, 0, 0, 0),
(17, 'eweqwewqewqeqweq', '20140312', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'protocollo1', 0, 0, 0, 0),
(18, 'eweqwewqewqeqweq', '20140312', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'protocollo1', 0, 0, 0, 0),
(19, 'eweqwewqewqeqweq', '20140312', 1, 2, 1, 2, 0, 0, 0, 0, 4, 3, 0, 0, 0, '', 'protocollo1', 0, 0, 0, 0),
(20, 'eweqwewqewqeqweq', '20140312', 12, 21, 12, 32, 0, 0, 0, 0, 12, 32, 0, 0, 0, '', 'protocollo2', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `t_mmse`
--

CREATE TABLE `t_mmse` (
  `idmmse` bigint(20) NOT NULL AUTO_INCREMENT,
  `codfis` varchar(16) COLLATE utf8_bin NOT NULL,
  `data` varchar(8) COLLATE utf8_bin NOT NULL,
  `or1` int(11) NOT NULL,
  `or2` int(11) NOT NULL,
  `or3` int(11) NOT NULL,
  `or4` int(11) NOT NULL,
  `or5` int(11) NOT NULL,
  `or6` int(11) NOT NULL,
  `or7` int(11) NOT NULL,
  `or8` int(11) NOT NULL,
  `or9` int(11) NOT NULL,
  `or10` int(11) NOT NULL,
  `reg` int(11) NOT NULL,
  `calcolo1` int(11) NOT NULL,
  `calcolo2` int(11) NOT NULL,
  `calcolo3` int(11) NOT NULL,
  `calcolo4` int(11) NOT NULL,
  `calcolo5` int(11) NOT NULL,
  `ric` int(11) NOT NULL,
  `ling1` int(11) NOT NULL,
  `ling2` int(11) NOT NULL,
  `ling3` int(11) NOT NULL,
  `ling4` int(11) NOT NULL,
  `ling5` int(11) NOT NULL,
  `ling6` int(11) NOT NULL,
  `mmsetot` int(11) NOT NULL,
  `mmseagg` int(11) NOT NULL,
  `mmsefinale` int(11) NOT NULL,
  PRIMARY KEY (`idmmse`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=40 ;

--
-- Dump dei dati per la tabella `t_mmse`
--

INSERT INTO `t_mmse` (`idmmse`, `codfis`, `data`, `or1`, `or2`, `or3`, `or4`, `or5`, `or6`, `or7`, `or8`, `or9`, `or10`, `reg`, `calcolo1`, `calcolo2`, `calcolo3`, `calcolo4`, `calcolo5`, `ric`, `ling1`, `ling2`, `ling3`, `ling4`, `ling5`, `ling6`, `mmsetot`, `mmseagg`, `mmsefinale`) VALUES
(1, 'eweqwewqewqeqweq', '20120120', 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 3, 0, 2, 2, 1, 0, 1, 0, 0, 0),
(2, 'eweqwewqewqeqweq', '20120120', 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'eweqwewqewqeqweq', '20120120', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 2, 0, 1, 0, 1, 1, 0, 8, 0, 0),
(4, 'eweqwewqewqeqweq', '20120120', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 3, 2, 2, 2, 0, 0, 0, 12, 0, 0),
(5, 'eweqwewqewqeqweq', '20120120', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 1, 1, 1, 8, 0, 0),
(6, 'eweqwewqewqeqweq', '20120120', 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0),
(7, 'eweqwewqewqeqweq', '20120120', 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0),
(8, 'eweqwewqewqeqweq', '20120120', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 'eweqwewqewqeqweq', '20120120', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 0, 0),
(10, 'eweqwewqewqeqweq', '20120120', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 'eweqwewqewqeqweq', '20120121', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 1, 1, 1, 1, 1, 3, 2, 2, 2, 1, 1, 1, 30, 0, 0),
(12, 'qwertyuioplkjhgf', '20120122', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 3, 2, 2, 1, 1, 1, 1, 14, 0, 0),
(13, 'qwertyuioplkjhgf', '20120122', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 3, 0, 2, 1, 1, 0, 0, 8, 0, 0),
(14, 'eweqwewqewqeqweq', '20140216', 1, 1, 1, 1, 1, 0, 0, 0, 1, 0, 3, 1, 0, 0, 1, 1, 2, 2, 1, 1, 0, 1, 1, 20, 0, 0),
(15, 'eweqwewqewqeqweq', '20140216', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0),
(16, 'eweqwewqewqeqweq', '20140312', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0),
(17, 'eweqwewqewqeqweq', '20140312', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 0, 0, 2, 1, 2, 1, 1, 1, 0, 21, 0, 0),
(18, 'eweqwewqewqeqweq', '20140312', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 'eweqwewqewqeqweq', '20140312', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 'eweqwewqewqeqweq', '20140312', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 'eweqwewqewqeqweq', '20140312', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 'eweqwewqewqeqweq', '20140312', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 1, 1, 1, 18, 0, 0),
(23, 'eweqwewqewqeqweq', '20140312', 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 8, 0, 0),
(24, 'eweqwewqewqeqweq', '20140312', 0, 0, 1, 1, 1, 1, 0, 0, 0, 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 2, 0, 1, 0, 15, 0, 0),
(25, 'eweqwewqewqeqweq', '20140312', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 2, 0, 0),
(26, 'eweqwewqewqeqweq', '20140312', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 'eweqwewqewqeqweq', '20140312', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 'eweqwewqewqeqweq', '20140312', 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0),
(29, 'eweqwewqewqeqweq', '20140312', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 'eweqwewqewqeqweq', '20140312', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0),
(31, 'eweqwewqewqeqweq', '20140312', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 2, 0, 0),
(32, 'eweqwewqewqeqweq', '20140312', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0),
(33, 'eweqwewqewqeqweq', '20140312', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, 'eweqwewqewqeqweq', '20140312', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0),
(35, 'eweqwewqewqeqweq', '20140312', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 'eweqwewqewqeqweq', '20140312', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0),
(37, 'eweqwewqewqeqweq', '20140312', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0),
(38, 'eweqwewqewqeqweq', '20140312', 1, 1, 1, 1, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 10, 0, 0),
(39, 'dasdasdsdsdsddss', '20140315', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 15, 0, 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `t_mrc`
--

CREATE TABLE `t_mrc` (
  `idmrc` bigint(20) NOT NULL AUTO_INCREMENT,
  `codfis` varchar(16) COLLATE utf8_bin NOT NULL,
  `mrc` int(11) NOT NULL,
  `durata_anni` int(11) NOT NULL,
  `durata_notte` int(11) NOT NULL,
  `tosse` int(11) NOT NULL,
  `qualita_catarro` int(11) NOT NULL,
  `quantita_catarro` int(11) NOT NULL,
  `data` varchar(8) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idmrc`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=159 ;

--
-- Dump dei dati per la tabella `t_mrc`
--

INSERT INTO `t_mrc` (`idmrc`, `codfis`, `mrc`, `durata_anni`, `durata_notte`, `tosse`, `qualita_catarro`, `quantita_catarro`, `data`) VALUES
(1, 'comple2', 0, 233, 0, 0, 0, 0, '20120103'),
(2, 'comple2', 0, 0, 0, 0, 0, 0, '20120103'),
(3, 'comple2', 0, 0, 0, 0, 0, 0, '20120103'),
(4, 'comple2', 0, 0, 0, 0, 0, 0, '20120103'),
(5, 'comple2', 1, 0, 0, 0, 0, 0, '20120103'),
(6, 'comple2', 1, 0, 0, 0, 0, 0, '20120103'),
(7, 'comple2', 0, 0, 0, 0, 0, 1, '20120103'),
(8, 'ultimo', 4, 0, 0, 0, 0, 0, '20120103'),
(9, 'ultimo', 4, 0, 0, 0, 0, 0, '20120103'),
(10, 'ultimo', 0, 0, 0, 0, 0, 0, '20120103'),
(11, 'ultimo', 0, 0, 0, 0, 0, 0, '20120103'),
(12, 'ultimo', 0, 0, 0, 0, 0, 0, '20120103'),
(13, 'ultimo', 1, 0, 0, 0, 0, 0, '20120103'),
(14, 'ultimo', 1, 0, 0, 0, 0, 0, '20120103'),
(15, 'ultimo', 1, 0, 0, 0, 0, 0, '20120103'),
(16, 'ultimo', 0, 0, 0, 0, 0, 0, '20120103'),
(17, 'ultimo', 0, 0, 0, 0, 0, 0, '20120103'),
(18, 'ultimo', 0, 0, 0, 0, 0, 0, '20120103'),
(19, 'ultimo', 0, 0, 0, 0, 0, 0, '20120103'),
(20, 'ultimo', 0, 0, 0, 0, 0, 0, '20120103'),
(21, 'ultimo', 0, 0, 0, 0, 0, 0, '20120103'),
(22, 'ultimo', 0, 0, 0, 0, 0, 0, '20120103'),
(23, 'ultimo', 0, 0, 0, 0, 0, 0, '20120103'),
(24, 'ultimo', 0, 0, 0, 0, 0, 0, '20120103'),
(25, 'ultimo', 0, 0, 0, 0, 0, 0, '20120103'),
(26, 'ultimo', 0, 0, 0, 0, 0, 0, '20120103'),
(27, 'asdfghjklÃƒÂ²jhg', 4, 5, 0, 3, 0, 0, '20120106'),
(28, 'asdf', 4, 12, 0, 0, 0, 0, '20120106'),
(29, '0987654', 0, 0, 0, 0, 0, 0, '20120106'),
(30, '0987654', 0, 0, 0, 0, 0, 0, '20120106'),
(31, '0987654', 0, 0, 0, 0, 0, 0, '20120106'),
(32, 'cacca', 4, 0, 0, 0, 0, 0, '20120106'),
(33, 'pippo2', 0, 0, 0, 0, 0, 0, '20120117'),
(34, 'pippo2', 0, 0, 0, 0, 0, 0, '20120117'),
(35, 'pippo2', 0, 0, 0, 0, 0, 0, '20120117'),
(36, 'pippo2', 0, 0, 0, 0, 0, 0, '20120117'),
(37, 'pippo3', 0, 0, 0, 0, 0, 0, '20120117'),
(38, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(39, 'pippo4', 0, 0, 0, 0, 0, 1, '20120117'),
(40, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(41, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(42, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(43, 'pippo4', 2, 0, 0, 0, 0, 0, '20120117'),
(44, 'pippo4', 2, 0, 0, 0, 0, 1, '20120117'),
(45, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(46, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(47, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(48, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(49, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(50, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(51, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(52, 'pippo4', 0, 0, 0, 0, 0, 1, '20120117'),
(53, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(54, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(55, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(56, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(57, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(58, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(59, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(60, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(61, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(62, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(63, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(64, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(65, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(66, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(67, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(68, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(69, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(70, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(71, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(72, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(73, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(74, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(75, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(76, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(77, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(78, 'pippo4', 0, 0, 0, 0, 0, 0, '20120117'),
(79, 'pippo6', 0, 0, 0, 0, 0, 1, '20120117'),
(80, 'pippo6', 0, 0, 0, 0, 0, 1, '20120117'),
(81, 'pippo6', 0, 0, 0, 0, 0, 1, '20120117'),
(82, 'pippo10', 0, 0, 0, 0, 0, 0, '20120117'),
(83, 'pippo10', 0, 0, 0, 0, 0, 1, '20120117'),
(84, 'pippo10', 0, 0, 0, 0, 0, 0, '20120117'),
(85, 'pippo10', 0, 0, 0, 0, 0, 0, '20120117'),
(86, 'pippo10', 0, 0, 0, 0, 0, 0, '20120117'),
(87, 'Creative', 4, 0, 0, 0, 0, 0, '20120118'),
(88, 'aaaaaaaaaaaadddd', 0, 2147483647, 0, 0, 0, 0, '20120119'),
(89, 'aaaaaaaaaaaadddd', 0, 999999, 0, 0, 0, 0, '20120119'),
(90, 'aaaaaaaaaaaadddd', 0, 11, 11, 0, 0, 0, '20120119'),
(91, 'aaaaaaaaaaaadddd', 0, 11, 11, 0, 0, 0, '20120119'),
(92, 'aaaaaaaaaaaadddd', 0, 11, 11, 0, 0, 0, '20120119'),
(93, 'aaaaaaaaaaaadddd', 0, 11, 11, 0, 0, 0, '20120119'),
(94, 'aaaaaaaaaaaadddd', 0, 13, 11, 0, 0, 0, '20120119'),
(95, 'aaaaaaaaaaaadddd', 0, 13, 11, 0, 0, 0, '20120119'),
(96, 'aaaaaaaaaaaadddd', 0, 13, 11, 0, 0, 0, '20120119'),
(97, 'aaaaaaaaaaaadddd', 0, 13, 11, 0, 0, 0, '20120119'),
(98, 'aaaaaaaaaaaadddd', 0, 13, 11, 0, 0, 0, '20120119'),
(99, 'aaaaaaaaaaaadddd', 0, 13, 11, 0, 0, 0, '20120119'),
(100, 'aaaaaaaaaaaadddd', 0, 13, 11, 0, 0, 0, '20120119'),
(101, 'aaaaaaaaaaaadddd', 4, 33, 11, 0, 0, 0, '20120119'),
(102, 'aaaaaaaaaaaadddd', 4, 33, 11, 0, 0, 0, '20120119'),
(103, 'aaaaaaaaaaaadddd', 4, 33, 11, 0, 0, 0, '20120119'),
(104, 'aaaaaaaaaaaadddd', 4, 33, 11, 0, 0, 0, '20120119'),
(105, 'aaaaaaaaaaaadddd', 4, 33, 11, 0, 0, 0, '20120119'),
(106, 'aaaaaaaaaaaadddd', 4, 33, 11, 0, 0, 0, '20120119'),
(107, 'aaaaaaaaaaaadddd', 4, 33, 11, 0, 0, 0, '20120119'),
(108, 'aaaaaaaaaaaadddd', 4, 33, 11, 0, 0, 0, '20120119'),
(109, 'aaaaaaaaaaaadddd', 4, 33, 11, 0, 0, 0, '20120119'),
(110, 'aaaaaaaaaaaadddd', 4, 33, 11, 0, 0, 0, '20120119'),
(111, 'aaaaaaaaaaaadddd', 4, 33, 11, 0, 0, 0, '20120119'),
(112, 'aaaaaaaaaaaadddd', 4, 33, 11, 0, 0, 0, '20120119'),
(113, 'aaaaaaaaaaaadddd', 4, 33, 11, 0, 0, 0, '20120119'),
(114, 'aaaaaaaaaaaadddd', 4, 33, 11, 0, 0, 0, '20120119'),
(115, 'aaaaaaaaaaaadddd', 4, 33, 11, 0, 0, 0, '20120119'),
(116, 'aaaaaaaaaaaadddd', 4, 33, 11, 0, 0, 0, '20120119'),
(117, 'aaaaaaaaaaaadddd', 4, 33, 11, 0, 0, 0, '20120119'),
(118, 'aaaaaaaaaaaadddd', 4, 33, 11, 0, 0, 0, '20120119'),
(119, 'aaaaaaaaaaaadddd', 4, 33, 11, 0, 0, 0, '20120119'),
(120, 'aaaaaaaaaaaadddd', 4, 33, 11, 0, 0, 0, '20120119'),
(121, 'aaaaaaaaaaaadddd', 4, 33, 11, 0, 0, 0, '20120119'),
(122, 'aaaaaaaaaaaadddd', 4, 33, 11, 0, 0, 0, '20120119'),
(123, 'aaaaaaaaaaaadddd', 4, 33, 11, 0, 0, 0, '20120119'),
(124, 'aaaaaaaaaaaadddd', 4, 33, 11, 0, 0, 0, '20120119'),
(125, 'aaaaaaaaaaaadddd', 4, 33, 11, 0, 0, 0, '20120119'),
(126, 'dsdasdwqeqweqweq', 4, 12, 12, 2, 0, 0, '20120119'),
(127, 'dsdasdwqeqweqweq', 4, 12, 12, 2, 0, 0, '20120119'),
(128, 'dsdasdwqeqweqweq', 4, 12, 12, 2, 0, 0, '20120119'),
(129, 'eweqwewqewqeqweq', 4, 12, 0, 0, 0, 0, '20120120'),
(130, 'eweqwewqewqeqweq', 4, 12, 0, 0, 0, 0, '20120120'),
(131, '', 0, 0, 0, 0, 0, 0, '20120120'),
(132, '', 2, 0, 0, 0, 0, 0, '20120120'),
(133, 'eweqwewqewqeqweq', 4, 12, 0, 0, 0, 0, '20120120'),
(134, 'gionnimnemonic', 1, 0, 0, 0, 0, 0, '20120120'),
(135, 'qwertyuioplkjhgf', 2, 22, 0, 0, 0, 0, '20120121'),
(136, 'eweqwewqewqeqweq', 0, 12, 3, 5, 0, 0, '20120122'),
(137, 'eweqwewqewqeqweq', 3, 0, 0, 0, 1, 3, '20120122'),
(138, 'eweqwewqewqeqweq', 4, 12, 0, 3, 1, 1, '20120122'),
(139, 'eweqwewqewqeqweq', 0, 0, 12, 0, 0, 0, '20120122'),
(140, 'eweqwewqewqeqweq', 4, 3333, 0, 0, 0, 0, '20120122'),
(141, 'eweqwewqewqeqweq', 3, 12, 0, 9, 3, 0, '20120122'),
(142, 'qwertyuioplkjhgf', 3, 12, 12, 5, 2, 1, '20120122'),
(143, 'xxxxxxxxxxxxxxxx', 2, 5, 1, 3, 0, 1, '20120123'),
(144, 'xxxxxxxxxxxxxxx1', 0, 0, 0, 0, 0, 0, '20120124'),
(145, 'qwertyuioplkasds', 3, 12, 1, 2, 2, 0, '20120124'),
(146, 'trdsmn86p25l378t', 0, 0, 0, 0, 0, 0, '20120128'),
(147, 'dassdadsadsadsad', 0, 0, 0, 0, 0, 0, '20120129'),
(148, '1234567890qwerty', 0, 39, 0, 1, 0, 1, '20120207'),
(149, 'qwertyuiolkjhgfd', 2, 12, 0, 3, 0, 0, '20140207'),
(150, 'asdfghjkloiuytre', 0, 0, 0, 0, 0, 0, '20140209'),
(151, 'eweqwewqewqeqweq', 1, 0, 0, 0, 0, 0, '20140312'),
(152, 'eweqwewqewqeqweq', 2, 0, 0, 0, 0, 0, '20140312'),
(153, 'eweqwewqewqeqweq', 3, 0, 0, 0, 0, 0, '20140312'),
(154, 'eweqwewqewqeqweq', 0, 0, 0, 0, 0, 0, '20140312'),
(155, 'eweqwewqewqeqweq', 0, 0, 0, 0, 0, 0, '20140312'),
(156, 'eweqwewqewqeqweq', 0, 0, 0, 0, 0, 0, '20140312'),
(157, 'eweqwewqewqeqweq', 0, 1, 0, 0, 0, 0, '20140312'),
(158, 'dasdasdsdsdsddss', 0, 0, 0, 0, 0, 0, '20140312');

-- --------------------------------------------------------

--
-- Struttura della tabella `t_sf36`
--

CREATE TABLE `t_sf36` (
  `idsf36` bigint(20) NOT NULL AUTO_INCREMENT,
  `codfis` varchar(16) NOT NULL,
  `data` varchar(8) NOT NULL,
  `sf1` int(11) NOT NULL,
  `sf2` int(11) NOT NULL,
  `sf3` int(11) NOT NULL,
  `sf4` int(11) NOT NULL,
  `sf5` int(11) NOT NULL,
  `sf6` int(11) NOT NULL,
  `sf7` int(11) NOT NULL,
  `sf8` int(11) NOT NULL,
  `sf9` int(11) NOT NULL,
  `sf10` int(11) NOT NULL,
  `sf11` int(11) NOT NULL,
  `sf12` int(11) NOT NULL,
  `sf13` int(11) NOT NULL,
  `sf14` int(11) NOT NULL,
  `sf15` int(11) NOT NULL,
  `sf16` int(11) NOT NULL,
  `sf17` int(11) NOT NULL,
  `sf18` int(11) NOT NULL,
  `sf19` int(11) NOT NULL,
  `sf20` int(11) NOT NULL,
  `sf21` int(11) NOT NULL,
  `sf22` int(11) NOT NULL,
  `sf23` int(11) NOT NULL,
  `sf24` int(11) NOT NULL,
  `sf25` int(11) NOT NULL,
  `sf26` int(11) NOT NULL,
  `sf27` int(11) NOT NULL,
  `sf28` int(11) NOT NULL,
  `sf29` int(11) NOT NULL,
  `sf30` int(11) NOT NULL,
  `sf31` int(11) NOT NULL,
  `sf32` int(11) NOT NULL,
  `sf33` int(11) NOT NULL,
  `sf34` int(11) NOT NULL,
  `sf35` int(11) NOT NULL,
  `sf36` int(11) NOT NULL,
  PRIMARY KEY (`idsf36`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dump dei dati per la tabella `t_sf36`
--

INSERT INTO `t_sf36` (`idsf36`, `codfis`, `data`, `sf1`, `sf2`, `sf3`, `sf4`, `sf5`, `sf6`, `sf7`, `sf8`, `sf9`, `sf10`, `sf11`, `sf12`, `sf13`, `sf14`, `sf15`, `sf16`, `sf17`, `sf18`, `sf19`, `sf20`, `sf21`, `sf22`, `sf23`, `sf24`, `sf25`, `sf26`, `sf27`, `sf28`, `sf29`, `sf30`, `sf31`, `sf32`, `sf33`, `sf34`, `sf35`, `sf36`) VALUES
(1, '', '20120107', 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, '', '20120107', 4, 4, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, '', '20120114', 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, '', '20120117', 3, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 'pippo10', '20120117', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1),
(36, '', '20120120', 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, '', '20120120', 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, '', '20120120', 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, '', '20120120', 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(40, '', '20120120', 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(41, 'eweqwewqewqeqweq', '20120120', 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(42, 'eweqwewqewqeqweq', '20120120', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, 'gionnimnemonic', '20120120', 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, 'eweqwewqewqeqweq', '20120122', 0, 0, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 5, 5, 5, 5, 5, 5, 5, 5, 5, 4, 4, 4, 4, 4),
(45, 'qwertyuioplkjhgf', '20120122', 3, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, 'qwertyuioplkjhgf', '20120122', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(47, 'qwertyuiolkjhgfd', '20140216', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `t_sft`
--

CREATE TABLE `t_sft` (
  `idsft` bigint(20) NOT NULL AUTO_INCREMENT,
  `codfis` varchar(16) COLLATE utf8_bin NOT NULL,
  `data` varchar(8) COLLATE utf8_bin NOT NULL,
  `mwt` int(11) NOT NULL,
  `pao_i` int(11) NOT NULL,
  `pao_f` int(11) NOT NULL,
  `fc_i` int(11) NOT NULL,
  `fc_f` int(11) NOT NULL,
  `disp_i` int(11) NOT NULL,
  `disp_f` int(11) NOT NULL,
  `fatica_i` int(11) NOT NULL,
  `fatica_f` int(11) NOT NULL,
  `aria_n` int(11) NOT NULL,
  `pausa_n` varchar(30) COLLATE utf8_bin NOT NULL,
  `sintomi_n` text COLLATE utf8_bin NOT NULL,
  `alzate` int(11) NOT NULL,
  `sintomi_c` text COLLATE utf8_bin NOT NULL,
  `quad_dx` int(11) NOT NULL,
  `quad_sx` int(11) NOT NULL,
  `curl_dx` int(11) NOT NULL,
  `curl_sx` int(11) NOT NULL,
  `curl_peso` int(11) NOT NULL,
  `hand_dx` int(11) NOT NULL,
  `hand_sx` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `ripetizioni` int(11) NOT NULL,
  `massimale` int(11) NOT NULL,
  `foot` int(11) NOT NULL,
  `chair` int(11) NOT NULL,
  `back_s` int(11) NOT NULL,
  `p1` int(11) NOT NULL,
  `p2` int(11) NOT NULL,
  `p3` int(11) NOT NULL,
  `p4` int(11) NOT NULL,
  `sat_i` int(11) NOT NULL,
  `sat_f` int(11) NOT NULL,
  `sintomi` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idsft`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=14 ;

--
-- Dump dei dati per la tabella `t_sft`
--

INSERT INTO `t_sft` (`idsft`, `codfis`, `data`, `mwt`, `pao_i`, `pao_f`, `fc_i`, `fc_f`, `disp_i`, `disp_f`, `fatica_i`, `fatica_f`, `aria_n`, `pausa_n`, `sintomi_n`, `alzate`, `sintomi_c`, `quad_dx`, `quad_sx`, `curl_dx`, `curl_sx`, `curl_peso`, `hand_dx`, `hand_sx`, `peso`, `ripetizioni`, `massimale`, `foot`, `chair`, `back_s`, `p1`, `p2`, `p3`, `p4`, `sat_i`, `sat_f`, `sintomi`) VALUES
(1, 'eweqwewqewqeqweq', '20120120', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0x30),
(2, 'eweqwewqewqeqweq', '20120121', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0x30),
(3, 'eweqwewqewqeqweq', '20120121', 0, 0, 0, 0, 0, 0, 0, 0, 0, 12, '', '', 12, 0x3332, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0x31),
(4, 'eweqwewqewqeqweq', '20120121', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '1', 0x31, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0x31),
(5, 'eweqwewqewqeqweq', '20120121', 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, '9', 0x35, 0, 0x3334, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0x31),
(6, 'eweqwewqewqeqweq', '20120121', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '5', 0x6d616c65, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0x31),
(7, 'eweqwewqewqeqweq', '20120121', 0, 0, 0, 12, 0, 12, 2, 0, 0, 12, '', 0x3132, 12, 0x6164647361, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0x31),
(8, 'eweqwewqewqeqweq', '20140224', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 20, 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0x30),
(9, 'eweqwewqewqeqweq', '20140305', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 45, 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0x30),
(10, 'eweqwewqewqeqweq', '20140312', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 30, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0x30),
(11, 'eweqwewqewqeqweq', '20140312', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 12, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0x30),
(12, 'dasdasdsdsdsddss', '20140313', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 30, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0x30),
(13, 'dasdasdsdsdsddss', '20140313', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 60, 6, 70, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0x30);

-- --------------------------------------------------------

--
-- Struttura della tabella `t_sgrq`
--

CREATE TABLE `t_sgrq` (
  `idsgrq` bigint(20) NOT NULL AUTO_INCREMENT,
  `codfis` varchar(16) COLLATE utf8_bin NOT NULL,
  `data` varchar(8) COLLATE utf8_bin NOT NULL,
  `sgrq1` int(11) NOT NULL,
  `sgrq2` int(11) NOT NULL,
  `sgrq3` int(11) NOT NULL,
  `sgrq4` int(11) NOT NULL,
  `sgrq5` int(11) NOT NULL,
  `sgrq6` int(11) NOT NULL,
  `sgrq7` int(11) NOT NULL,
  `sgrq8` int(11) NOT NULL,
  `sgrq9` int(11) NOT NULL,
  `sgrq10` int(11) NOT NULL,
  `sgrq11` int(11) NOT NULL,
  `sgrq12` int(11) NOT NULL,
  `sgrq13` int(11) NOT NULL,
  `sgrq14` int(11) NOT NULL,
  `sgrq15` int(11) NOT NULL,
  `sgrq16` int(11) NOT NULL,
  `sgrq17` int(11) NOT NULL,
  `sgrq18` int(11) NOT NULL,
  `sgrq19` int(11) NOT NULL,
  `sgrq20` int(11) NOT NULL,
  `sgrq21` int(11) NOT NULL,
  `sgrq22` int(11) NOT NULL,
  `sgrq23` int(11) NOT NULL,
  `sgrq24` int(11) NOT NULL,
  `sgrq25` int(11) NOT NULL,
  `sgrq26` int(11) NOT NULL,
  `sgrq27` int(11) NOT NULL,
  `sgrq28` int(11) NOT NULL,
  `sgrq29` int(11) NOT NULL,
  `sgrq30` int(11) NOT NULL,
  `sgrq31` int(11) NOT NULL,
  `sgrq32` int(11) NOT NULL,
  `sgrq33` int(11) NOT NULL,
  `sgrq34` int(11) NOT NULL,
  `sgrq35` int(11) NOT NULL,
  `sgrq36` int(11) NOT NULL,
  `sgrq37` int(11) NOT NULL,
  `sgrq38` int(11) NOT NULL,
  `sgrq39` int(11) NOT NULL,
  `sgrq40` int(11) NOT NULL,
  `sgrq41` int(11) NOT NULL,
  `sgrq42` int(11) NOT NULL,
  `sgrq43` int(11) NOT NULL,
  `sgrq44` int(11) NOT NULL,
  `sgrq45` int(11) NOT NULL,
  `sgrq46` int(11) NOT NULL,
  `sgrq47` int(11) NOT NULL,
  `sgrq48` int(11) NOT NULL,
  `sgrq49` int(11) NOT NULL,
  `sgrq50` text COLLATE utf8_bin NOT NULL,
  `sgrq51` int(11) NOT NULL,
  PRIMARY KEY (`idsgrq`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=16 ;

--
-- Dump dei dati per la tabella `t_sgrq`
--

INSERT INTO `t_sgrq` (`idsgrq`, `codfis`, `data`, `sgrq1`, `sgrq2`, `sgrq3`, `sgrq4`, `sgrq5`, `sgrq6`, `sgrq7`, `sgrq8`, `sgrq9`, `sgrq10`, `sgrq11`, `sgrq12`, `sgrq13`, `sgrq14`, `sgrq15`, `sgrq16`, `sgrq17`, `sgrq18`, `sgrq19`, `sgrq20`, `sgrq21`, `sgrq22`, `sgrq23`, `sgrq24`, `sgrq25`, `sgrq26`, `sgrq27`, `sgrq28`, `sgrq29`, `sgrq30`, `sgrq31`, `sgrq32`, `sgrq33`, `sgrq34`, `sgrq35`, `sgrq36`, `sgrq37`, `sgrq38`, `sgrq39`, `sgrq40`, `sgrq41`, `sgrq42`, `sgrq43`, `sgrq44`, `sgrq45`, `sgrq46`, `sgrq47`, `sgrq48`, `sgrq49`, `sgrq50`, `sgrq51`) VALUES
(1, '', '20120114', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0x30, 0),
(2, 'eweqwewqewqeqweq', '20120120', 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0x30, 0),
(3, 'qwertyuioplkjhgf', '20120122', 2, 2, 2, 2, 2, 1, 2, 0, 2, 1, 0, 1, 0, 1, 0, 1, 0, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 0, 1, 0, 1, 0, 0x30, 2),
(4, 'qwertyuioplkjhgf', '20120122', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0x30, 0),
(5, 'qwertyuioplkjhgf', '20120122', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0x6369616f206361726f, 0),
(6, 'qwertyuioplkasds', '20120123', 2, 2, 2, 2, 2, 1, 2, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0x63617a7a6f6e65, 0),
(7, 'eweqwewqewqeqweq', '20140218', 0, 2, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0),
(8, 'eweqwewqewqeqweq', '20140218', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0),
(9, 'eweqwewqewqeqweq', '20140218', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0),
(10, 'eweqwewqewqeqweq', '20140312', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0),
(11, 'eweqwewqewqeqweq', '20140312', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0),
(12, 'eweqwewqewqeqweq', '20140312', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0),
(13, 'eweqwewqewqeqweq', '20140312', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0),
(14, 'eweqwewqewqeqweq', '20140312', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0),
(15, 'eweqwewqewqeqweq', '20140312', 2, 2, 2, 2, 3, 2, 3, 0, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `t_spsms`
--

CREATE TABLE `t_spsms` (
  `idspsms` bigint(20) NOT NULL AUTO_INCREMENT,
  `codfis` varchar(16) COLLATE utf8_bin NOT NULL,
  `data` varchar(8) COLLATE utf8_bin NOT NULL,
  `spsms1` int(11) NOT NULL,
  `spsms2` int(11) NOT NULL,
  `spsms3` int(11) NOT NULL,
  `spsms4` int(11) NOT NULL,
  `spsms5` int(11) NOT NULL,
  `spsms6` int(11) NOT NULL,
  `spsms7` int(11) NOT NULL,
  `spsms8` int(11) NOT NULL,
  `spsms9` int(11) NOT NULL,
  `spsms10` int(11) NOT NULL,
  `spsmstot` int(11) NOT NULL,
  `spsmscoef` int(11) NOT NULL,
  PRIMARY KEY (`idspsms`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `t_tinetti`
--

CREATE TABLE `t_tinetti` (
  `idtinetti` bigint(20) NOT NULL AUTO_INCREMENT,
  `codfis` varchar(16) NOT NULL,
  `data` varchar(8) NOT NULL,
  `e1` int(11) NOT NULL,
  `e2` int(11) NOT NULL,
  `e3` int(11) NOT NULL,
  `e4` int(11) NOT NULL,
  `e5` int(11) NOT NULL,
  `e6` int(11) NOT NULL,
  `e7` int(11) NOT NULL,
  `e8` int(11) NOT NULL,
  `e9` int(11) NOT NULL,
  `e10` int(11) NOT NULL,
  `a1` int(11) NOT NULL,
  `a2` int(11) NOT NULL,
  `a3` int(11) NOT NULL,
  `a4` int(11) NOT NULL,
  `a5` int(11) NOT NULL,
  `a6` int(11) NOT NULL,
  `a7` int(11) NOT NULL,
  `a8` int(11) NOT NULL,
  `a9` int(11) NOT NULL,
  `a10` int(11) NOT NULL,
  `etot` int(11) NOT NULL,
  `atot` int(11) NOT NULL,
  `tinettitotale` int(11) NOT NULL,
  UNIQUE KEY `idtinetti` (`idtinetti`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=117 ;

--
-- Dump dei dati per la tabella `t_tinetti`
--

INSERT INTO `t_tinetti` (`idtinetti`, `codfis`, `data`, `e1`, `e2`, `e3`, `e4`, `e5`, `e6`, `e7`, `e8`, `e9`, `e10`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `etot`, `atot`, `tinettitotale`) VALUES
(1, 'swsdfgh', '20111210', 1, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 0, 4),
(2, 'swsdfgh', '', 1, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'swsdfgh', '', 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, '1234567890987654', '', 1, 1, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, '1234567890987654', '', 2, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, '1234567890987654', '111212', 0, 0, 0, 2, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, '1234567890987654', '111212', 2, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, '1234567890987654', '111212', 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0),
(10, '1234567890987654', '111212', 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, '1234567890987654', '111212', 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 0, 0),
(12, '1234567890987654', '111212', 2, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 0, 0),
(13, '1234567890987654', '111212', 2, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 0, 0),
(14, 'swsdfgh', '111212', 2, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 0, 0),
(15, 'asdfghjklasdfghj', '111212', 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0),
(16, 'asdfghjklasdfghj', '20111212', 1, 2, 2, 2, 2, 1, 2, 1, 1, 2, 1, 1, 1, 1, 1, 1, 1, 2, 2, 1, 16, 12, 28),
(17, 'asdfghjklasdfghj', '20111213', 0, 0, 0, 0, 0, 0, 2, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 0, 4),
(18, '1234567890987654', '20111214', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 1, 0, 5, 5),
(19, '1234567890987654', '20111214', 1, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, 5, 4, 9),
(20, '', '20120102', 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 1, 3),
(21, '', '20120102', 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 1, 3),
(22, '', '20120102', 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 1, 3),
(23, '', '20120102', 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 1, 3),
(24, '', '20120102', 0, 0, 0, 0, 0, 0, 0, 1, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 2, 1, 4, 3, 7),
(25, 'swsdfgh', '20120102', 0, 0, 0, 0, 0, 0, 2, 0, 0, 2, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 4, 1, 5),
(26, '2ewrwqrqrq', '20120103', 0, 0, 0, 0, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 2, 2, 1, 4, 5, 9),
(27, '', '20120117', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, '', '20120117', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, '', '20120117', 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 1, 3),
(30, '', '20120117', 0, 2, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 0, 8),
(31, '', '20120117', 0, 2, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 0, 8),
(32, '', '20120117', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 2),
(33, '', '20120118', 0, 2, 2, 0, 0, 0, 0, 1, 1, 2, 0, 0, 0, 0, 0, 1, 0, 0, 2, 0, 8, 3, 11),
(34, '', '20120119', 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 2, 1, 2, 3, 5),
(35, '', '20120119', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100, 'qwertyuioplkjhgf', '20120120', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(99, 'qwertyuioplkjhgf', '20120120', 0, 0, 0, 0, 0, 0, 2, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 5),
(98, 'qwertyuioplkjhgf', '20120120', 0, 0, 0, 0, 0, 0, 2, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 5),
(39, 'qwertyuioplkasds', '20120119', 0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 2, 1, 3, 3, 6),
(40, 'qwertyuioplkjhgf', '20120119', 1, 2, 0, 0, 0, 0, 0, 1, 1, 2, 0, 0, 0, 0, 0, 0, 0, 2, 2, 1, 7, 5, 12),
(101, 'qwertyuioplkjhgf', '20120120', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(102, 'qwertyuioplkjhgf', '20120120', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(103, 'qwertyuioplkjhgf', '20120120', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(104, 'qwertyuioplkjhgf', '20120120', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(105, 'qwertyuioplkjhgf', '20120120', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(106, 'eweqwewqewqeqweq', '20120120', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(107, 'gionnimnemonic', '20120120', 0, 0, 0, 2, 2, 0, 2, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 9, 0, 9),
(108, 'xxxxxxxxxxxxxxx1', '20120210', 1, 1, 2, 2, 2, 1, 1, 1, 1, 2, 1, 1, 0, 0, 0, 1, 1, 2, 2, 1, 14, 9, 23),
(109, 'xxxxxxxxxxxxxxx1', '20120210', 1, 2, 0, 0, 0, 0, 2, 0, 1, 1, 1, 0, 1, 0, 0, 0, 0, 2, 2, 0, 7, 6, 13),
(110, 'eweqwewqewqeqweq', '20140312', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(111, 'eweqwewqewqeqweq', '20140312', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(112, 'eweqwewqewqeqweq', '20140312', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1),
(113, 'eweqwewqewqeqweq', '20140312', 1, 2, 2, 2, 1, 1, 2, 1, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 15, 0, 15),
(114, 'eweqwewqewqeqweq', '20140312', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(115, 'eweqwewqewqeqweq', '20140312', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(116, 'eweqwewqewqeqweq', '20140312', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userEmail` varchar(128) NOT NULL,
  `userPassword` varchar(32) NOT NULL,
  `userType` enum('user','admin') NOT NULL DEFAULT 'user',
  `userStatus` enum('active','inactive','deleted') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`userId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`userId`, `userEmail`, `userPassword`, `userType`, `userStatus`) VALUES
(1, 'ineihozoin@gmail.com', '79ec3f45a71ef7e9d8e087a177c85f34', 'admin', 'active'),
(2, 'giosolo@libero.it', 'af52102bb449e626207b578e6413fae3', 'user', 'deleted'),
(3, 'sdfgh@sdffgq.it', '123456', 'user', 'active'),
(4, 'marlon@saglia.com', '39bd83cd505dd6a5467545d578f07b31', 'user', 'active'),
(5, 'saglia@test.com', 'testtest', 'user', 'active');

-- --------------------------------------------------------

--
-- Struttura della tabella `z_label`
--

CREATE TABLE `z_label` (
  `idlabel` int(11) NOT NULL AUTO_INCREMENT,
  `idmisura` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `label` text NOT NULL,
  PRIMARY KEY (`idmisura`),
  UNIQUE KEY `idlabel` (`idlabel`),
  UNIQUE KEY `idmisura` (`idmisura`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `z_misura`
--

CREATE TABLE `z_misura` (
  `idmisura` int(11) NOT NULL AUTO_INCREMENT,
  `idpaziente` bigint(20) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `valore` varchar(50) NOT NULL,
  `data` varchar(8) NOT NULL,
  PRIMARY KEY (`idmisura`),
  KEY `data` (`data`),
  KEY `idpaziente` (`idpaziente`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

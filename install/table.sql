-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 12 Sty 2011, 10:11
-- Wersja serwera: 5.5.8
-- Wersja PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Baza danych: `PO`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `budynki`
--

CREATE TABLE IF NOT EXISTS `budynki` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Zrzut danych tabeli `budynki`
--


-- --------------------------------------------------------

--
-- Struktura tabeli dla  `konfiguracjesprzetowe`
--

CREATE TABLE IF NOT EXISTS `konfiguracjesprzetowe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iloscRAM` int(11) NOT NULL,
  `typRAM` varchar(10) NOT NULL,
  `procesor` varchar(50) NOT NULL,
  `kartaGraficzna` varchar(50) NOT NULL,
  `typMonitora` varchar(10) NOT NULL,
  `modelMonitora` varchar(50) NOT NULL,
  `rozmiarMonitora` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Zrzut danych tabeli `konfiguracjesprzetowe`
--


-- --------------------------------------------------------

--
-- Struktura tabeli dla  `licencje`
--

CREATE TABLE IF NOT EXISTS `licencje` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa` text NOT NULL,
  `liczba` int(11) NOT NULL,
  `opis` text NOT NULL,
  `od` datetime NOT NULL,
  `do` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Zrzut danych tabeli `licencje`
--


-- --------------------------------------------------------

--
-- Struktura tabeli dla  `oprogramowania`
--

CREATE TABLE IF NOT EXISTS `oprogramowania` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `licencjeID` int(11) NOT NULL,
  `nazwa` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Zrzut danych tabeli `oprogramowania`
--


-- --------------------------------------------------------

--
-- Struktura tabeli dla  `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `systemyOperacyjneID` int(11) NOT NULL,
  `nazwa` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Zrzut danych tabeli `profile`
--


-- --------------------------------------------------------

--
-- Struktura tabeli dla  `profile_oprogramowania`
--

CREATE TABLE IF NOT EXISTS `profile_oprogramowania` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profileID` int(11) NOT NULL,
  `oprogramowaniaID` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Zrzut danych tabeli `profile_oprogramowania`
--


-- --------------------------------------------------------

--
-- Struktura tabeli dla  `rezerwacje`
--

CREATE TABLE IF NOT EXISTS `rezerwacje` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `salaID` int(11) NOT NULL,
  `uzytkownicyID` int(11) NOT NULL,
  `od` datetime NOT NULL,
  `do` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Zrzut danych tabeli `rezerwacje`
--


-- --------------------------------------------------------

--
-- Struktura tabeli dla  `sale`
--

CREATE TABLE IF NOT EXISTS `sale` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numer` varchar(10) NOT NULL,
  `budynekID` int(11) NOT NULL,
  `opiekunID` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Zrzut danych tabeli `sale`
--


-- --------------------------------------------------------

--
-- Struktura tabeli dla  `stanowiska`
--

CREATE TABLE IF NOT EXISTS `stanowiska` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `saleID` int(11) NOT NULL,
  `konfiguracjaSprzetowaID` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Zrzut danych tabeli `stanowiska`
--


-- --------------------------------------------------------

--
-- Struktura tabeli dla  `stanowiska_profile`
--

CREATE TABLE IF NOT EXISTS `stanowiska_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stanowiskaID` int(11) NOT NULL,
  `profileID` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Zrzut danych tabeli `stanowiska_profile`
--


-- --------------------------------------------------------

--
-- Struktura tabeli dla  `systemyoperacyjne`
--

CREATE TABLE IF NOT EXISTS `systemyoperacyjne` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `licencjeID` int(11) NOT NULL,
  `nazwa` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Zrzut danych tabeli `systemyoperacyjne`
--


-- --------------------------------------------------------

--
-- Struktura tabeli dla  `usterki`
--

CREATE TABLE IF NOT EXISTS `usterki` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stanowiskoID` int(11) NOT NULL,
  `uzytkownicyID` int(11) NOT NULL,
  `dataZgloszenia` datetime NOT NULL,
  `dataUsuniecia` datetime DEFAULT NULL,
  `status` varchar(15) NOT NULL,
  `opis` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Zrzut danych tabeli `usterki`
--


-- --------------------------------------------------------

--
-- Struktura tabeli dla  `uzytkownicy`
--

CREATE TABLE IF NOT EXISTS `uzytkownicy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typ` tinyint(4) NOT NULL,
  `login` varchar(10) NOT NULL,
  `haslo` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Zrzut danych tabeli `uzytkownicy`
--


-- --------------------------------------------------------

--
-- Struktura tabeli dla  `zgloszenia`
--

CREATE TABLE IF NOT EXISTS `zgloszenia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `saleID` int(11) NOT NULL,
  `uzytkownicyID` int(11) NOT NULL,
  `status` varchar(15) NOT NULL,
  `opis` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Zrzut danych tabeli `zgloszenia`
--


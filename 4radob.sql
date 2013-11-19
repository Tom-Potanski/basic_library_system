-- phpMyAdmin SQL Dump
-- version 2.11.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 04 Cze 2009, 21:18
-- Wersja serwera: 5.0.51
-- Wersja PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `4radob`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `autorzy`
--

CREATE TABLE IF NOT EXISTS `autorzy` (
  `id_autora` int(10) unsigned NOT NULL auto_increment,
  `imie` varchar(45) collate utf8_polish_ci NOT NULL,
  `nazwisko` varchar(45) collate utf8_polish_ci NOT NULL,
  PRIMARY KEY  (`id_autora`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=15 ;

--
-- Zrzut danych tabeli `autorzy`
--

INSERT INTO `autorzy` (`id_autora`, `imie`, `nazwisko`) VALUES
(1, 'Włodzimierz', 'Lenin'),
(2, 'Tomasz', 'Potański'),
(3, 'Eugeniusz', 'Woźniak'),
(4, 'Tadeusz', 'Wieżbicki'),
(5, 'Władysław', 'Niepełnosprawny'),
(6, 'Jeremi', 'Adolf'),
(7, 'Kosma', 'Kosma'),
(8, 'Lech', 'Kaczyński'),
(9, 'Agata', 'Hiut'),
(10, 'Staszek', 'Spadamstąd'),
(11, 'Michał', 'Miodek'),
(12, 'Awdotia', 'Kacerka'),
(13, 'Julia', 'Cosięgapisz'),
(14, 'Leonhard', 'Euler');

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `gatunek`
--

CREATE TABLE IF NOT EXISTS `gatunek` (
  `id_gatunek` int(10) unsigned NOT NULL auto_increment,
  `gatunek_nazwa` varchar(45) character set utf8 NOT NULL,
  PRIMARY KEY  (`id_gatunek`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=14 ;

--
-- Zrzut danych tabeli `gatunek`
--

INSERT INTO `gatunek` (`id_gatunek`, `gatunek_nazwa`) VALUES
(1, 'Horror'),
(2, 'Thriller'),
(3, 'Romansidło'),
(4, 'Pornograficzne romansidło'),
(5, 'Pornograficzny horror'),
(6, 'Ezoteryka'),
(7, 'Poradnik'),
(8, 'Dobre na opał'),
(9, 'Anime'),
(10, 'Inny'),
(11, 'Literatura piękna'),
(12, 'Literatura piekła'),
(13, 'Kryminał');

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `ksiazka`
--

CREATE TABLE IF NOT EXISTS `ksiazka` (
  `id_ksiazka` int(10) unsigned NOT NULL auto_increment,
  `id_autora` int(10) unsigned NOT NULL,
  `id_gatunek` int(10) unsigned NOT NULL,
  `id_wydawnictwo` int(10) unsigned NOT NULL,
  `rok_wydania` int(10) unsigned NOT NULL,
  `ilosc_stron` int(10) unsigned NOT NULL,
  `tytul` varchar(120) character set utf8 NOT NULL,
  PRIMARY KEY  (`id_ksiazka`),
  KEY `id_gatunek` (`id_gatunek`),
  KEY `id_autora` (`id_autora`),
  KEY `id_wydawnictwo` (`id_wydawnictwo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=30 ;

--
-- Zrzut danych tabeli `ksiazka`
--

INSERT INTO `ksiazka` (`id_ksiazka`, `id_autora`, `id_gatunek`, `id_wydawnictwo`, `rok_wydania`, `ilosc_stron`, `tytul`) VALUES
(1, 1, 2, 3, 1990, 200, 'Jak wypić więcej?'),
(2, 3, 3, 3, 1946, 235, 'Biblia php-ofca ;)'),
(3, 7, 7, 12, 1000, 276, 'Lato'),
(4, 8, 8, 11, 1500, 12, 'Zabytki Petersburgu'),
(5, 9, 9, 10, 1969, 435, 'Rosja i carowie'),
(6, 10, 10, 3, 1989, 89, 'Mitologia Nordycka'),
(7, 11, 11, 9, 1239, 69, 'Kunilingus czyli jak poznałem agnieszke'),
(8, 12, 12, 8, 1984, 45, 'Powiedz mi o czym myślisz a powiem ci twoją przyszłość'),
(9, 10, 2, 4, 1999, 574, 'Jak zaliczyć z informatyki?'),
(10, 11, 5, 2, 2009, 345, 'Sposoby odczuwania maxymalnych doznań sexualnych z ćwiczeniami'),
(11, 9, 8, 3, 2004, 742, 'Połódnie'),
(12, 3, 4, 1, 2001, 254, 'Jak wychować dziecko, aby było zajebiste'),
(13, 2, 5, 8, 2003, 2754, 'Przegląd diabłów'),
(14, 7, 1, 5, 2007, 873, 'Dlaczego komputer jest zły?'),
(15, 1, 2, 7, 2005, 234, 'Access, od zera do hackera'),
(16, 8, 5, 6, 2010, 6969, 'Jak zostać pornogwiazdą?'),
(17, 11, 3, 5, 1998, 85, 'Tajemnice kwerend'),
(18, 4, 7, 4, 1918, 234, 'Siergiej czy Eugeniusz, czyli znaczenia imion'),
(19, 8, 8, 1, 1925, 654, 'Ratunku! Moje dziecko jest pedałem'),
(20, 3, 9, 12, 1933, 1246, 'UE: jedność europy czy zabór unijny'),
(21, 6, 12, 7, 3425, 246, 'Samobujstwo czy rozwód? Co lepsze'),
(22, 4, 11, 6, 1956, 753, 'Sztuka włamań do samochodów'),
(23, 2, 3, 5, 1987, 237, '101 sposobów na ojechanie automatu z kitiketami'),
(24, 6, 6, 12, 0, 237, 'Jak palić dużo i być zdrowym?'),
(25, 2, 1, 2, 1934, 435, 'Kuchnia wg. Siostry Hiacenty'),
(26, 4, 4, 4, 1967, 423, 'Czy niebo jest niebieskie?'),
(27, 5, 5, 11, 1939, 654, 'Jak wychowywać dzieci?'),
(28, 1, 1, 2, 1940, 357, 'Masturbacja od A do Z'),
(29, 9, 11, 5, 1945, 300, 'Śladami Mistrzów - Adolf, Włodzimierz');

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `miasto`
--

CREATE TABLE IF NOT EXISTS `miasto` (
  `id_miasto` int(10) unsigned NOT NULL auto_increment,
  `miasto_nazwa` varchar(45) character set utf8 NOT NULL,
  PRIMARY KEY  (`id_miasto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=31 ;

--
-- Zrzut danych tabeli `miasto`
--

INSERT INTO `miasto` (`id_miasto`, `miasto_nazwa`) VALUES
(1, 'Litzmanstadt'),
(2, 'Leningrad'),
(3, 'Szczecin'),
(4, 'Gałków'),
(5, 'Koluszki'),
(6, 'Brzeziny'),
(7, 'Bawaria1#'),
(8, 'Bayern'),
(9, 'Monachium'),
(10, 'Oświęcim'),
(11, 'Las Vegas'),
(12, 'Los Milionos'),
(13, 'Lotki duże'),
(14, 'Gałków Mały'),
(15, 'Gałków Duży'),
(16, 'Gałków Parcela'),
(17, 'Gałków Kolonia'),
(18, 'Tadzin'),
(19, 'Syberia'),
(20, 'Wola Cyrusowa'),
(21, 'Zielona Góra'),
(22, 'Wiśniowa Góra'),
(23, 'Waszyngton'),
(24, 'Nju Jorg'),
(25, 'Moskwa'),
(26, 'Archanielsk'),
(27, 'Wejherowo'),
(28, 'Zagrzeb'),
(29, 'Cansas'),
(30, 'Kozi zattt');

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `ulica`
--

CREATE TABLE IF NOT EXISTS `ulica` (
  `id_ulica` int(10) unsigned NOT NULL auto_increment,
  `ulica_nazwa` varchar(45) character set utf8 NOT NULL,
  PRIMARY KEY  (`id_ulica`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=23 ;

--
-- Zrzut danych tabeli `ulica`
--

INSERT INTO `ulica` (`id_ulica`, `ulica_nazwa`) VALUES
(1, 'Łódzka'),
(2, 'Rokicińska'),
(3, 'Nieważna'),
(4, 'Śmieszna'),
(5, 'Głupia'),
(6, 'Polskich informatyków'),
(7, 'Ofiar terroryzmu 11 września'),
(8, 'Syberyjska'),
(9, 'Świńska'),
(10, 'Procentowa'),
(11, 'Dobrze Klepiąca'),
(12, 'Leśna'),
(13, 'Obleśna'),
(14, 'Radarowa'),
(15, 'Burdelowa'),
(16, 'Kinowa'),
(17, 'Tomaszowska'),
(18, 'Kolumny'),
(19, 'Hitlerstrasse'),
(20, 'SSstrasse'),
(21, 'Komunijna'),
(22, 'Sfojska');

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `wydawnictwo`
--

CREATE TABLE IF NOT EXISTS `wydawnictwo` (
  `id_wydawnictwo` int(10) unsigned NOT NULL auto_increment,
  `wydawnictwo_nazwa` varchar(45) character set utf8 NOT NULL,
  PRIMARY KEY  (`id_wydawnictwo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=14 ;

--
-- Zrzut danych tabeli `wydawnictwo`
--

INSERT INTO `wydawnictwo` (`id_wydawnictwo`, `wydawnictwo_nazwa`) VALUES
(1, 'SWSEIZ'),
(2, 'WSHE'),
(3, 'Operon'),
(4, 'Nowa Era'),
(5, 'New Age'),
(6, 'Microsoft'),
(7, 'EJpyl'),
(8, 'Leśne'),
(9, 'Nieznane'),
(10, 'Jak u mamusi'),
(11, 'Pallottinum'),
(12, 'WSIP'),
(13, 'kościelne');

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `wyporzyczajacy`
--

CREATE TABLE IF NOT EXISTS `wyporzyczajacy` (
  `id_wyporzyczajacy` int(10) unsigned NOT NULL auto_increment,
  `imie` varchar(45) character set utf8 NOT NULL,
  `nazwisko` varchar(45) character set utf8 NOT NULL,
  `id_ulica` int(10) unsigned NOT NULL,
  `kontakt` varchar(160) character set utf8 NOT NULL,
  `nr_domu` int(10) unsigned NOT NULL,
  `nr_lokalu` int(10) unsigned NOT NULL,
  `id_miasto` int(10) unsigned NOT NULL,
  `kod_pocztowy` varchar(45) character set utf8 NOT NULL,
  PRIMARY KEY  (`id_wyporzyczajacy`),
  KEY `id_ulica` (`id_ulica`),
  KEY `id_miasto` (`id_miasto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=7 ;

--
-- Zrzut danych tabeli `wyporzyczajacy`
--

INSERT INTO `wyporzyczajacy` (`id_wyporzyczajacy`, `imie`, `nazwisko`, `id_ulica`, `kontakt`, `nr_domu`, `nr_lokalu`, `id_miasto`, `kod_pocztowy`) VALUES
(1, 'Marosław', 'Sienkiewicz', 2, 'brak', 3, 1, 2, '95-091'),
(2, 'Janek', 'Krysiński', 5, 'nie ma', 42, 4, 6, 'zapomniał'),
(3, 'Krzysztof', 'Ibisz', 2, '601 779 757', 5, 6, 2, 'fajny jest'),
(4, 'Mirosław', 'Gdowski', 9, '230 V', 12, 6, 2, '93-945'),
(5, 'Bogdan', 'Poniatowski', 10, 'tak, mam w domu', 2, 2, 23, '81-098'),
(6, 'Władysław', 'Malinowski', 7, 'na zapleczu', 6, 2, 11, 'nie urzywam');

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `wyporzyczenie`
--

CREATE TABLE IF NOT EXISTS `wyporzyczenie` (
  `id_wyporzyczenie` int(10) unsigned NOT NULL auto_increment,
  `id_ksiazka` int(10) unsigned NOT NULL,
  `id_wyporzyczajacy` int(10) unsigned NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY  (`id_wyporzyczenie`),
  KEY `id_ksiazka` (`id_ksiazka`),
  KEY `id_wyporzyczajacy` (`id_wyporzyczajacy`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=10 ;

--
-- Zrzut danych tabeli `wyporzyczenie`
--

INSERT INTO `wyporzyczenie` (`id_wyporzyczenie`, `id_ksiazka`, `id_wyporzyczajacy`, `data`) VALUES
(1, 1, 1, '2019-12-09 00:00:00'),
(3, 13, 3, '2030-02-12 00:00:00'),
(4, 17, 4, '2029-02-03 00:00:00'),
(5, 20, 6, '2031-12-04 00:00:00'),
(7, 15, 5, '2009-06-03 20:24:19'),
(8, 8, 6, '2009-06-03 20:24:53'),
(9, 6, 1, '2009-06-03 20:38:59');

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `ksiazka`
--
ALTER TABLE `ksiazka`
  ADD CONSTRAINT `id_autora` FOREIGN KEY (`id_autora`) REFERENCES `autorzy` (`id_autora`),
  ADD CONSTRAINT `id_gatunek` FOREIGN KEY (`id_gatunek`) REFERENCES `gatunek` (`id_gatunek`),
  ADD CONSTRAINT `id_wydawnictwo` FOREIGN KEY (`id_wydawnictwo`) REFERENCES `wydawnictwo` (`id_wydawnictwo`);

--
-- Ograniczenia dla tabeli `wyporzyczajacy`
--
ALTER TABLE `wyporzyczajacy`
  ADD CONSTRAINT `id_miasto` FOREIGN KEY (`id_miasto`) REFERENCES `miasto` (`id_miasto`),
  ADD CONSTRAINT `id_ulica` FOREIGN KEY (`id_ulica`) REFERENCES `ulica` (`id_ulica`);

--
-- Ograniczenia dla tabeli `wyporzyczenie`
--
ALTER TABLE `wyporzyczenie`
  ADD CONSTRAINT `id_ksiazka` FOREIGN KEY (`id_ksiazka`) REFERENCES `ksiazka` (`id_ksiazka`),
  ADD CONSTRAINT `id_wyporzyczajacy` FOREIGN KEY (`id_wyporzyczajacy`) REFERENCES `wyporzyczajacy` (`id_wyporzyczajacy`);

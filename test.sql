-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 19 Cze 2020, 07:41
-- Wersja serwera: 5.6.13
-- Wersja PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dzielo`
--

CREATE TABLE IF NOT EXISTS `dzielo` (
  `id_dzielo` int(11) NOT NULL AUTO_INCREMENT,
  `tytul` varchar(50) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `rok` smallint(4) NOT NULL,
  `typ` varchar(20) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `gatunek` varchar(50) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `opis` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id_dzielo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=96 ;

--
-- Zrzut danych tabeli `dzielo`
--

INSERT INTO `dzielo` (`id_dzielo`, `tytul`, `rok`, `typ`, `gatunek`, `opis`) VALUES
(1, 'Parasite', 2019, 'film', 'dramat', 'Kiedy Ki-woo dostaje pracę jako korepetytor córki zamożnego małżeństwa, wymyśla sposób na zapewnienie zatrudnienia również reszcie swojej rodziny.\n(źródło: filmweb.pl)'),
(2, 'Matrix', 1999, 'film', 'sci-fi', 'Haker komputerowy Neo dowiaduje się od tajemniczych rebeliantów, że świat, w którym żyje, jest tylko obrazem przesyłanym do jego mózgu przez roboty.\n(źródło: filmweb.pl)'),
(3, 'Pianista', 2002, 'film', 'dramat', 'Podczas drugiej wojny światowej Władysław Szpilman, znakomity polski pianista, stara się przeżyć w okupowanej Warszawie.\n(źródło: filmweb.pl)'),
(4, 'Incepcja', 2010, 'film', 'sci-fi', 'Czasy, gdy technologia pozwala na wchodzenie w świat snów. Złodziej Cobb ma za zadanie wszczepić myśl do śpiącego umysłu.\n(źródło: filmweb.pl)'),
(17, 'Kimi no na wa', 2016, 'film', 'fantasy / melodramat / anime', 'Mitsuha Miyamizu to dziewczyna uczęszczająca do szkoły średniej w małym mieście Itomori. Marzy o porzuceniu swojego dotychczasowego życia na prowincji i przeprowadzce do Tokio. W tym samym jej rówieśnik, Taki Tachibana  prowadzi poukładane i pełne zajęć życie. W wolnych chwilach pracuje jako kelner w jednej z tokijskich restauracji. Pewnego dnia Mitsuha budzi się w nieswoim pokoju i po krótkim czasie zauważa scenerię wielkiego miasta. Po chwili orientuje się, iż ciało, w którym się znalazła również nie należy do niej. Identyczna sytuacja przydarza się Takiemu, jego oczom ukazują się dziewicze, prowincjonalne krajobrazy.\n(źródło: filmweb.pl)'),
(78, 'Park Jurajski', 1993, 'film', 'przygodowy', 'W parku ze sklonowanymi dinozaurami, tuż przed oficjalnym otwarciem, dochodzi do awarii zasilania, a przebywający w nim ludzie muszą ratować życie. (źródło: filmweb.pl)'),
(79, 'Portal', 2007, 'gra', 'logiczna', 'Gra jednoosobowa firmy Valve. Jej akcja rozgrywa się na terenie tajemniczych laboratoriów Aperture Science i charakteryzuje się wysoce nowatorskim podejściem do rozgrywki, dzięki któremu gracze spędzą całe godziny na tej wyjątkowej zabawie.\r\n(źródło: steam)'),
(81, 'Life is Strange', 2015, 'gra', 'przygodowa', 'Epizodyczna komputerowa gra przygodowa o charakterze fikcji interaktywnej, wyprodukowana przez Dontnod Entertainment i wydana przez Square Enix. Fabuła gry śledzi poczynania Maxine Caulfield, młodej studentki fotografii, która odkrywa, że potrafi w dowolnym momencie cofnąć czas, co sprawia, że wszystko, co zrobi, wywołuje efekt motyla. Gra składa się z pięciu odcinków.\r\n(źródła: Wikipedia)'),
(83, 'Gone Home', 2013, 'gra', 'przygodowa', '7 czerwca 1995 roku, godzina 01:15. Wracasz do domu po roku za granicą. Spodziewasz się gorącego powitania od rodziny, ale dom jest pusty. Coś tu nie gra. Gdzie są wszyscy? I co tu się stało?\r\n(źródło: epicgames.com)'),
(86, 'Dżuma', 1947, 'książka', 'powieść - parabola', 'Metaforyczny obraz świata walczącego ze złem, którego symbolem jest tytułowa dżuma, pustosząca Oran w 194… roku. Wybuch epidemii wywołuje różne reakcje u mieszkańców, jednak stopniowo uznają słuszność postępowania doktora Rieux, który od początku aktywnie walczy z zarazą, uznając to za swój obowiązek jako człowieka i lekarza.\r\n(źródło: lubimyczytac.pl)'),
(87, 'Lalka', 1890, 'książka', 'powieść społeczno-obyczajowa', 'Do Warszawy powraca Stanisław Wokulski. Jego plenipotent, Ignacy Rzecki, bacznie śledzi wszystkie plotki krążące wokół jego przyjaciela. Nie ma pojęcia o wielkim i jeszcze skrywanym uczuciu Wokulskiego do pięknej i próżnej Izabeli Łęckiej. Czy głęboka miłość galanteryjnego kupca do szlachcianki może zakończyć się szczęśliwie?\n(źródło: lubimyczytac.pl)'),
(88, 'Zbrodnia i kara', 1866, 'książka', 'psychologiczna', 'Tematem powieści są losy byłego studenta, Rodiona Raskolnikowa, który postanawia zamordować i obrabować starą lichwiarkę.\r\n(źródło: wikipedia)'),
(89, 'Portal 2', 2011, 'gra', 'logiczna', 'Druga część oryginalnej, pierwszoosobowej gry logicznej studia Valve, przygotowanej na znanym z Half-Life 2 ulepszonym silniku Source. Akcja tytułu rozgrywa się kilkaset lat po wydarzeniach, znanych z pierwowzoru.\n(źródło: gry-online.pl)'),
(90, 'Celeste', 2018, 'gra', 'platformowa', 'Pomóż Madeline przetrwać starcie z jej własnymi, wewnętrznymi demonami i zaprowadź ją na górę Celeste w niezwykle emocjonującej platformówce od twórców TowerFall. Sprostaj setkom ręcznie przygotowanych wyzwań, odkryj straszliwe sekrety i poznaj wielką tajemnicę góry.\r\n(źródło: Steam)'),
(91, 'Perfect Blue', 1998, 'film', 'thriller psychologiczny / anime', 'Piosenkarka Mirna postanawia zostać aktorką. Z czasem odkrywa, że nowe zajęcie nie jest takie, jak sobie wyobrażała.\r\n(źródło: filmweb.pl)'),
(92, 'Paprika', 2006, 'film', 'horror / sci-fi / anime', 'Jest rok 2004. Właśnie wymyślono nowy rodzaj psychoterapii o nazwie PT. Polega ona na tym, że wysyła się "detektywa snów" do snu człowieka i wykorzystuje się jego brak świadomości. Tuż przed uchwaleniem ustawy pozwalającej na użycie takiej metody, ktoś kradnie urządzenie umożliwiające terapię i naukowcy jeden po drugim tracą rozum. Urządzenie to, niewłaściwie wykorzystane, może być bardzo niebezpieczne i może niszczyć ludziom osobowość. Nagrodzona Noblem piękna psychoterapeutka Atsuko Chiba udaje się do świata snów. Jej celem jest odkrycie prawdy i odzyskanie urządzenia.\r\n(źródło: filmweb.pl)'),
(93, 'Kongres futurologiczny', 1971, 'książka', 'sci-fi / fantastyka naukowa', 'Akcja opowiadania rozpoczyna się na Ziemi w nieodległej, w stosunku do czasu powstania utworu, przyszłości – przypuszczalnie na przełomie XX i XXI wieku. Ijon Tichy bierze udział w zorganizowanym w Nounas (stolica fikcyjnej Costaricany) Ósmym Światowym Kongresie Futurologicznym, obradującym w luksusowym hotelu nad problemem przeludnienia w świecie targanym konwulsjami wybuchów społecznych i skrajnie niestabilnym politycznie.\r\n(źródło: Wikipedia)'),
(94, 'Parasite', 2014, 'film', 'horror / anime', 'Pewnej nocy na Ziemi pojawiają się istoty o nieznanym pochodzeniu – Pasożyty. W postaci owadopodobnych stworzeń atakują ludzi, by zagnieździć się w ich mózgu i przejąć kontrolę nad ciałem. Izumi Shinichi to licealista, którego spotyka szczęście w nieszczęściu: Pasożytowi, który go atakuje, udaje się ewoluować jedynie w ręce chłopca. To początek dla ich wspólnych zmagań w walce o życie z innymi monstrami oraz odkrycia celu istnienia Pasożytów.\r\n(źródło: shinden.pl)'),
(95, 'Dzień świra', 2002, 'film', 'dramat / komedia / psychologiczny', 'Adaś Miauczyński, 49-letni rozwiedziony polonista, żyje w kręgu swoich natręctw, nie potrafiąc wyrwać się z nudy i rutyny dnia codziennego.\r\n(źródło: filmweb.pl)');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `haslo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `haslo`) VALUES
(4, 'qwer', 'qwer@samplemail.com', '962012d09b8170d912f0669f6d7d9d07'),
(8, 'user', 'user@samplemail.com', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users_cpl`
--

CREATE TABLE IF NOT EXISTS `users_cpl` (
  `id_users_cpl` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `dzielo_id` int(11) NOT NULL,
  `ocena` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_users_cpl`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=95 ;

--
-- Zrzut danych tabeli `users_cpl`
--

INSERT INTO `users_cpl` (`id_users_cpl`, `user_id`, `dzielo_id`, `ocena`) VALUES
(82, 8, 1, 10),
(83, 8, 95, 8),
(84, 4, 4, 7),
(85, 4, 17, 10),
(86, 4, 1, 10),
(87, 4, 78, 4),
(88, 4, 3, 7),
(89, 4, 91, 10),
(90, 4, 79, 7),
(91, 4, 89, 9),
(92, 4, 86, 8),
(93, 4, 86, 7),
(94, 4, 88, 7);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

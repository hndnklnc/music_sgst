-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 29 Temmuz 2011 saat 00:41:13
-- Sunucu sürümü: 5.5.8
-- PHP Sürümü: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `muzik`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `duygusal`
--

CREATE TABLE IF NOT EXISTS `duygusal` (
  `SarkiTuru` text NOT NULL,
  `SarkiciAdi` text NOT NULL,
  `SarkiAdi` text NOT NULL,
  `SarkiPuan` double NOT NULL DEFAULT '0',
  `SarkiLink` char(100) NOT NULL,
  `SarkiOrt` double NOT NULL DEFAULT '0',
  `DinlenmeSayisi` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `duygusal`
--

INSERT INTO `duygusal` (`SarkiTuru`, `SarkiciAdi`, `SarkiAdi`, `SarkiPuan`, `SarkiLink`, `SarkiOrt`, `DinlenmeSayisi`) VALUES
('pop', 'dusbaz', 'bahar', 0, 'muzikler/bahar.mp3', 0, 0),
('pop', 'erkin koray', 'sevince', 0, 'muzikler/erkin koray-sevince.mp3', 0, 0),
('pop', 'sebnem ferah', 'sigara', 0, 'muzikler/Sigara.mp3', 0, 0),
('pop', 'duman', 'herseyi yak', 0, 'muzikler/HerseyiYak.mp3', 0, 0),
('pop', 'Cold Play', 'fix you', 0, 'muzikler/Cold PlayFix You.mp3', 0, 0),
('rock', 'evanecence', 'my immortal', 0, 'muzikler/Evanesence-My Immortal', 0, 0),
('klasik', 'chopin', 'Nocturne Minor', 0, 'muzikler/Nocturne Minor.mp3', 0, 0),
('arabesk', 'orhan gencebay', 'hayat kavgasÄ±', 0, 'muzikler/ Orhan GencebayHayat Kavgasi.mp3', 0, 0),
('rock', 'radiohead', 'creep', 0, 'muzikler/Radiohead - Creep.mp3', 0, 0),
('rock', 'cem karaca', 'kara sevda', 0, 'muzikler/CemKaracaKaraSevda.mp3', 0, 0),
('pop', 'backstreetboys', 'never gone', 0, 'muzikler/Backstreet Boys - Never Gone .mp3', 0, 0),
('tÃ¼rkÃ¼', 'neset ertas', 'sevgili yarim', 0, 'muzikler/ Uykudamisin Sevgili Yarim.mp3', 0, 0),
('arabesk', 'taskin', 'diz dize', 0, 'muzikler/taskin diz dize.mp3', 0, 0),
('tÃ¼rkÃ¼', 'incesaz', 'mazi kalbimde yaradÄ±r', 0, 'muzikler/incesaz - Mazi Kalbimde Bir Yaradir.mp3', 0, 0),
('tÃ¼rkÃ¼', 'melihat gÃ¼lses', 'ada sahillerinde bekliyorum', 0, 'muzikler/Ada Sahillerinde Bekliyorum.mp3', 0, 0),
('tÃ¼rkÃ¼', 'neÅ?et ertas', 'telgrafÄ±n telleri', 0, 'muzikler/telgrafinTelleri.mp3', 0, 0),
('klasik', 'yann tiersen', 'palestine', 0, 'muzikler/Palestine.mp3', 0, 0),
('klasik', 'omer faruk tekbilek', 'uyan uyan', 0, 'muzikler/Uyan Uyan.mp3', 0, 0),
('pop', 'yeni turku', 'olmasa mektubun', 0, 'muzikler/Yeni Turku - Olmasa Mektubun.mp3', 0, 0),
('pop', 'erkin koray', 'oyle bir geÃ§er zamanki', 0, 'muzikler/oylebirgecerzamanki.wma', 0, 0),
('pop', 'cem adrian', 'merdivenler', 0, 'muzikler/cem adrian - Merdivenler.mp3', 0, 0),
('arabesk', 'ali atay', 'yalan ', 0, 'muzikler/yalan.mp3', 0, 0),
('pop', 'funda arar', 'senden ogrendim', 0, 'muzikler/Funda Arar - Senden Ã?grendim.mp3', 0, 0),
('rock', 'teoman', 'coban yÄ±ldÄ±zÄ±', 0, 'muzikler/Teoman - coban.mp3', 0, 0),
('tÃ¼rkÃ¼', 'erkan ogur', 'mecnun', 0, 'muzikler/Erkan ogur Mecnun.mp3', 0, 0),
('pop', 'leman sam', 'gÃ¶nÃ¼l', 0, 'muzikler/Leman Sam - Gonul.mp3', 0, 0),
('rock', 'tnk', 'sÃ¶yle ruhum', 0, 'muzikler/TNK - Soyle Ruhum.mp3', 0, 0),
('pop', 'mfÃ¶', 'gÃ¼llerin iÃ§inden ', 0, 'muzikler/MFO - Gullerin Icinden.mp3', 0, 0),
('klasik', 'derya turkan', 'nihavend peÅ?rev', 0, 'muzikler/Derya Turkan - Nihavend Pesrev.mp3', 0, 0),
('tÃ¼rkÃ¼', 'neÅ?et ertaÅ?', 'o sen misin', 0, 'muzikler/O Sen Misin-.mp3', 0, 0),
('klasik', 'farid farjad', 'isfahan', 0, 'muzikler/Isfahan.mp3', 0, 0),
('pop', 'bob dylan', 'forever young', 0, 'muzikler/Bob Dylan - Forever Young.mp3', 0, 0),
('tÃ¼rkÃ¼', 'kazÄ±m koyuncu', 'ben seni sevduÄ?imi', 0, 'muzikler/KazÄ±m Koyuncu - Ben Seni SevduÄ?um.mp3', 0, 0),
('tÃ¼rkÃ¼', 'kazÄ±m koyuncu', 'gidiyorum', 0, 'muzikler/KoyuncuGidiyorum.mp3', 0, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `eglenceli`
--

CREATE TABLE IF NOT EXISTS `eglenceli` (
  `SarkiTuru` text NOT NULL,
  `SarkiciAdi` text NOT NULL,
  `SarkiAdi` text NOT NULL,
  `SarkiPuan` double NOT NULL DEFAULT '0',
  `SarkiLink` char(100) NOT NULL,
  `SarkiOrt` double NOT NULL DEFAULT '0',
  `DinlenmeSayisi` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `eglenceli`
--

INSERT INTO `eglenceli` (`SarkiTuru`, `SarkiciAdi`, `SarkiAdi`, `SarkiPuan`, `SarkiLink`, `SarkiOrt`, `DinlenmeSayisi`) VALUES
('pop', 'outkast', 'hey ya', 0, 'muzikler/Hey Ya - Outkast.mp3', 0, 0),
('pop', 'jamelia', 'superstar', 0, 'muzikler/Jamelia Superstar.mp3', 0, 0),
('pop', 'nina', 'move your body', 0, 'muzikler/Nina Sky Move Your Body.mp3', 0, 0),
('pop', 'rebel moves', 'sheep', 0, 'muzikler/Rebel Moves-Sheep.mp3', 0, 0),
('pop', 'alison hinds', 'rol it gal', 0, 'muzikler/Alison Hinds - Roll It Gal.mp3', 0, 0),
('jazz', 'Al Bano', ' Felicita', 0, 'muzikler/Al Bano - Felicita.mp3', 0, 0),
('pop', 'janet jackson', 'all nite', 0, 'muzikler/Janet Jackson - All nite .mp3', 0, 0),
('hiphop', 'usher', 'yeah', 0, 'muzikler/Usher-Yeah.mp3', 0, 0),
('hiphop', '50 cent', 'Ä±n the club', 0, 'muzikler/50 CENT-IN DA CLUB.mp3', 0, 0),
('pop', 'Cody Simpson ', 'summertime', 0, 'muzikler/Cody Simpson - Summertime.mp3', 0, 0),
('pop', 'cici kÄ±zlar', 'delisin', 0, 'muzikler/cici kÄ±zlar - delisin.mp3', 0, 0),
('pop', 'mfÃ¶', 'psikopat', 0, 'muzikler/MFO - psikopat.mp3', 0, 0),
('pop', 'pinhani', 'dÃ¼Ä?Ã¼n', 0, 'muzikler/Pinhani - Dugun.mp3', 0, 0),
('pop', 'boa', 'make a secret', 0, 'muzikler/make a secret.mp3', 0, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `farklimuzik`
--

CREATE TABLE IF NOT EXISTS `farklimuzik` (
  `SarkiTuru` text NOT NULL,
  `SarkiciAdi` text NOT NULL,
  `SarkiAdi` text NOT NULL,
  `SarkiPuan` double NOT NULL DEFAULT '0',
  `SarkiLink` char(50) NOT NULL,
  `SarkiOrt` int(11) NOT NULL DEFAULT '0',
  `DinlenmeSayisi` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `farklimuzik`
--

INSERT INTO `farklimuzik` (`SarkiTuru`, `SarkiciAdi`, `SarkiAdi`, `SarkiPuan`, `SarkiLink`, `SarkiOrt`, `DinlenmeSayisi`) VALUES
('pop', 'backstreetboys', 'never gone', 5, 'muzikler/Backstreet Boys - Never Gone .mp3', 5, 1),
('tÃ¼rkÃ¼', 'incesaz', 'mazi kalbimde yaradÄ±r', 0, 'muzikler/incesaz - Mazi Kalbimde Bir Yaradir.mp3', 0, 0),
('pop', 'placebo', 'meds', 0, 'muzikler/Placebo -  Meds.mp3', 0, 0),
('jazz', 'Najlepse sevdalinke ', 'zaspala', 0, 'muzikler/Najlepse sevdalinke  zaspala.mp3', 0, 0),
('klasik', 'yann tiersen', 'palestine', 0, 'muzikler/Palestine.mp3', 0, 0),
('klasik', 'omer faruk tekbilek', 'uyan uyan', 0, 'muzikler/Uyan Uyan.mp3', 0, 0),
('pop', 'Cody Simpson ', 'summertime', 0, 'muzikler/Cody Simpson - Summertime.mp3', 0, 0),
('pop', 'enya', 'fairytale', 0, 'muzikler/Enya - Fairytale.mp3', 0, 0),
('pop', 'ilhan irem', 'anlasana', 0, 'muzikler/ilhan irem - anlasana.mp3', 0, 0),
('pop', 'boa', 'make a secret', 6, 'muzikler/make a secret.mp3', 6, 1),
('pop', 'jesper kyd', 'heart', 0, 'muzikler/ Jesper Kyd - Heart.mp3', 0, 0),
('pop', 'Alanis Morisette', 'Uninvited', 0, 'muzikler/Alanis Morisette - Uninvited.mp3', 0, 0),
('klasik', 'derya turkan', 'nihavend peÅŸrev', 0, 'muzikler/Derya Turkan - Nihavend Pesrev.mp3', 0, 0),
('rock', 'eddie vedder', 'hard sun', 0, 'muzikler/Hard Sun.mp3', 0, 0),
('pop', 'edith piaf', 'milord', 0, 'muzikler/Milord.mp3', 0, 0),
('pop', 'bob dylan', 'forever young', 0, 'muzikler/Bob Dylan - Forever Young.mp3', 0, 0),
('pop', 'Jason Mraz', 'Absolutely Zero', 0, 'muzikler/Jason Mraz - Absolutely Zero.mp3', 0, 0),
('jazz', 'Devics ', 'All Your Beautiful Trees', 0, 'muzikler/Devics - All Your Beautiful Trees.mp3', 0, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hareketli`
--

CREATE TABLE IF NOT EXISTS `hareketli` (
  `SarkiTuru` text NOT NULL,
  `SarkiciAdi` text NOT NULL,
  `SarkiAdi` text NOT NULL,
  `SarkiPuan` double NOT NULL DEFAULT '0',
  `SarkiLink` char(100) NOT NULL,
  `SarkiOrt` double NOT NULL DEFAULT '0',
  `DinlenmeSayisi` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `hareketli`
--

INSERT INTO `hareketli` (`SarkiTuru`, `SarkiciAdi`, `SarkiAdi`, `SarkiPuan`, `SarkiLink`, `SarkiOrt`, `DinlenmeSayisi`) VALUES
('pop', 'sebnem ferah', 'perdeler', 9, 'muzikler/Perdeler.mp3', 3, 3),
('pop', 'efsun', 'ruya', 7, 'muzikler/Efsun-Ruya.mp3', 3.5, 2),
('pop', 'hilary duff', 'come clean', 0, 'muzikler/hilary duff - come clean.mp3', 0, 0),
('pop', 'outkast', 'hey ya', 0, 'muzikler/Hey Ya - Outkast.mp3', 0, 0),
('pop', 'jamelia', 'superstar', 0, 'muzikler/Jamelia Superstar.mp3', 0, 0),
('pop', 'nina', 'move your body', 0, 'muzikler/Nina Sky Move Your Body.mp3', 0, 0),
('pop', 'rebel moves', 'sheep', 0, 'muzikler/Rebel Moves-Sheep.mp3', 0, 0),
('pop', 'alison hinds', 'rol it gal', 0, 'muzikler/Alison Hinds - Roll It Gal.mp3', 0, 0),
('hiphop', 'usher', 'confession', 0, 'muzikler/ UsherConfessions.mp3', 0, 0),
('pop', 'janet jackson', 'all nite', 0, 'muzikler/Janet Jackson - All nite .mp3', 0, 0),
('hiphop', 'usher', 'yeah', 0, 'muzikler/Usher-Yeah.mp3', 0, 0),
('hiphop', '50 cent', 'Ä±n the club', 0, 'muzikler/50 CENT-IN DA CLUB.mp3', 0, 0),
('klasik', 'omer faruk tekbilek', 'uyan uyan', 0, 'muzikler/Uyan Uyan.mp3', 0, 0),
('pop', 'Cody Simpson ', 'summertime', 0, 'muzikler/Cody Simpson - Summertime.mp3', 0, 0),
('pop', 'boa', 'make a secret', 0, 'muzikler/make a secret.mp3', 0, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE IF NOT EXISTS `kullanici` (
  `Ad` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `Soyad` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `KullaniciAdi` varchar(20) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `Sifre` varchar(20) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `SevdigiTurler` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`KullaniciAdi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`Ad`, `Soyad`, `KullaniciAdi`, `Sifre`, `SevdigiTurler`) VALUES
('admin', 'admin', 'admin', 'admin', 'rock,rap,'),
('ayse', 'ayse', 'ayse', '1234', 'rock,'),
('cvdn', 'cvdn', 'cvdn', '1234', 'rock,rap,'),
('d', 'd', 'd', 'd', 'pop,arabesk,klasik,'),
('hndn', 'hndn', 'hndn', '1234', 'rock,rap,'),
('kerem', 'donmez', 'krm', '1234', 'rock,');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `melankolik`
--

CREATE TABLE IF NOT EXISTS `melankolik` (
  `SarkiTuru` text NOT NULL,
  `SarkiciAdi` text NOT NULL,
  `SarkiAdi` text NOT NULL,
  `SarkiPuan` double NOT NULL DEFAULT '0',
  `SarkiLink` char(100) NOT NULL,
  `SarkiOrt` double NOT NULL DEFAULT '0',
  `DinlenmeSayisi` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `melankolik`
--

INSERT INTO `melankolik` (`SarkiTuru`, `SarkiciAdi`, `SarkiAdi`, `SarkiPuan`, `SarkiLink`, `SarkiOrt`, `DinlenmeSayisi`) VALUES
('pop', 'dusbaz', 'bahar', 0, 'muzikler/bahar.mp3', 0, 0),
('pop', 'sebnem ferah', 'sigara', 0, 'muzikler/Sigara.mp3', 0, 0),
('pop', 'duman', 'herseyi yak', 0, 'muzikler/HerseyiYak.mp3', 0, 0),
('pop', 'sebnem ferah', 'perdeler', 0, 'muzikler/Perdeler.mp3', 0, 0),
('pop', 'Cold Play', 'fix you', 0, 'muzikler/Cold PlayFix You.mp3', 0, 0),
('pop', 'The Cranberries', 'linger', 0, 'muzikler/The Cranberries - Linger.mp3', 0, 0),
('pop', 'backstreetboys', 'never gone', 0, 'muzikler/Backstreet Boys - Never Gone .mp3', 0, 0),
('arabesk', 'taskin', 'diz dize', 0, 'muzikler/taskin diz dize.mp3', 0, 0),
('pop', 'placebo', 'meds', 0, 'muzikler/Placebo -  Meds.mp3', 0, 0),
('klasik', 'yann tiersen', 'palestine', 0, 'muzikler/Palestine.mp3', 0, 0),
('pop', 'yeni turku', 'olmasa mektubun', 0, 'muzikler/Yeni Turku - Olmasa Mektubun.mp3', 0, 0),
('pop', 'cem adrian', 'merdivenler', 0, 'muzikler/cem adrian - Merdivenler.mp3', 0, 0),
('arabesk', 'ali atay', 'yalan ', 0, 'muzikler/yalan.mp3', 0, 0),
('rock', 'teoman', 'coban yÄ±ldÄ±zÄ±', 0, 'muzikler/Teoman - coban.mp3', 0, 0),
('pop', 'leman sam', 'gÃ¶nÃ¼l', 0, 'muzikler/Leman Sam - Gonul.mp3', 0, 0),
('rock', 'tnk', 'sÃ¶yle ruhum', 0, 'muzikler/TNK - Soyle Ruhum.mp3', 0, 0),
('pop', 'mfÃ¶', 'gÃ¼llerin iÃ§inden ', 0, 'muzikler/MFO - Gullerin Icinden.mp3', 0, 0),
('pop', 'regina spektor', 'hero', 0, 'muzikler/Regina Spektor - Hero.mp3', 0, 0),
('rock', 'duman', 'manasÄ± yok', 0, 'muzikler/Duman - Manasi Yok.mp3', 0, 0),
('rock', 'metallica', 'fade to black', 0, 'muzikler/FADE TO BLACK.MP3', 0, 0),
('pop', 'fringe', 'bandits', 0, 'muzikler/Fringe-Bandits.mp3', 0, 0),
('pop', 'jesper kyd', 'heart', 0, 'muzikler/ Jesper Kyd - Heart.mp3', 0, 0),
('rock', 'eddie vedder', 'hard sun', 0, 'muzikler/Hard Sun.mp3', 0, 0),
('pop', 'bob dylan', 'forever young', 0, 'muzikler/Bob Dylan - Forever Young.mp3', 0, 0),
('tÃ¼rkÃ¼', 'kazÄ±m koyuncu', 'gidiyorum', 0, 'muzikler/KoyuncuGidiyorum.mp3', 0, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mutlu`
--

CREATE TABLE IF NOT EXISTS `mutlu` (
  `SarkiTuru` text NOT NULL,
  `SarkiciAdi` text NOT NULL,
  `SarkiAdi` text NOT NULL,
  `SarkiPuan` double NOT NULL DEFAULT '0',
  `SarkiLink` char(100) NOT NULL,
  `SarkiOrt` double NOT NULL DEFAULT '0',
  `DinlenmeSayisi` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `mutlu`
--

INSERT INTO `mutlu` (`SarkiTuru`, `SarkiciAdi`, `SarkiAdi`, `SarkiPuan`, `SarkiLink`, `SarkiOrt`, `DinlenmeSayisi`) VALUES
('pop', 'erkin koray', 'sevince', 0, 'muzikler/erkin koray-sevince.mp3', 0, 0),
('pop', 'efsun', 'ruya', 0, 'muzikler/Efsun-Ruya.mp3', 0, 0),
('pop', 'hilary duff', 'come clean', 0, 'muzikler/hilary duff - come clean.mp3', 0, 0),
('pop', 'outkast', 'hey ya', 0, 'muzikler/Hey Ya - Outkast.mp3', 0, 0),
('pop', 'jamelia', 'superstar', 0, 'muzikler/Jamelia Superstar.mp3', 0, 0),
('pop', 'nina', 'move your body', 0, 'muzikler/Nina Sky Move Your Body.mp3', 0, 0),
('pop', 'rebel moves', 'sheep', 0, 'muzikler/Rebel Moves-Sheep.mp3', 0, 0),
('pop', 'alison hinds', 'rol it gal', 0, 'muzikler/Alison Hinds - Roll It Gal.mp3', 0, 0),
('pop', 'akon', 'lonely', 0, 'muzikler/Akon - Lonely.mp3', 0, 0),
('pop', 'Cat Stevens', ' Lady Darbanville', 0, 'muzikler/Cat Stevens - Lady Darbanville.mp3', 0, 0),
('hiphop', 'usher', 'yeah', 0, 'muzikler/Usher-Yeah.mp3', 0, 0),
('jazz', 'Najlepse sevdalinke ', 'zaspala', 0, 'muzikler/Najlepse sevdalinke  zaspala.mp3', 0, 0),
('pop', 'mfÃ¶', 'psikopat', 0, 'muzikler/MFO - psikopat.mp3', 0, 0),
('pop', 'pinhani', 'dÃ¼Ä?Ã¼n', 0, 'muzikler/Pinhani - Dugun.mp3', 0, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `nostaljik`
--

CREATE TABLE IF NOT EXISTS `nostaljik` (
  `SarkiTuru` text NOT NULL,
  `SarkiciAdi` text NOT NULL,
  `SarkiAdi` text NOT NULL,
  `SarkiPuan` double NOT NULL DEFAULT '0',
  `SarkiLink` char(100) NOT NULL,
  `SarkiOrt` double NOT NULL DEFAULT '0',
  `DinlenmeSayisi` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `nostaljik`
--

INSERT INTO `nostaljik` (`SarkiTuru`, `SarkiciAdi`, `SarkiAdi`, `SarkiPuan`, `SarkiLink`, `SarkiOrt`, `DinlenmeSayisi`) VALUES
('pop', 'erkin koray', 'sevince', 0, 'muzikler/erkin koray-sevince.mp3', 0, 0),
('pop', 'bjork', 'Isobel', 0, 'muzikler/BjorkIsobel.mp3', 0, 0),
('pop', 'Cold Play', 'fix you', 0, 'muzikler/Cold PlayFix You.mp3', 0, 0),
('pop', 'The Cranberries', 'linger', 0, 'muzikler/The Cranberries - Linger.mp3', 0, 0),
('klasik', 'beethoven', 'fur elise', 0, 'muzikler/beethoven_fur_elise.mp3', 0, 0),
('jazz', 'miles davis', 'los feliz', 0, 'muzikler/ Los Feliz.mp3', 0, 0),
('klasik', 'chopin', 'Nocturne Minor', 0, 'muzikler/Nocturne Minor.mp3', 0, 0),
('klasik', 'chopin', 'G Minor', 0, 'muzikler/G Minor.mp3', 0, 0),
('arabesk', 'orhan gencebay', 'hayat kavgasÄ±', 0, 'muzikler/ Orhan GencebayHayat Kavgasi.mp3', 0, 0),
('jazz', 'miles davis', 'siesta', 0, 'muzikler/Siesta .mp3', 0, 0),
('rock', 'cem karaca', 'kara sevda', 0, 'muzikler/CemKaracaKaraSevda.mp3', 0, 0),
('pop', 'Cat Stevens', ' Lady Darbanville', 0, 'muzikler/Cat Stevens - Lady Darbanville.mp3', 0, 0),
('jazz', 'Al Bano', ' Felicita', 0, 'muzikler/Al Bano - Felicita.mp3', 0, 0),
('tÃ¼rkÃ¼', 'neset ertas', 'sevgili yarim', 0, 'muzikler/ Uykudamisin Sevgili Yarim.mp3', 0, 0),
('tÃ¼rkÃ¼', 'incesaz', 'mazi kalbimde yaradÄ±r', 0, 'muzikler/incesaz - Mazi Kalbimde Bir Yaradir.mp3', 0, 0),
('tÃ¼rkÃ¼', 'melihat gÃ¼lses', 'ada sahillerinde bekliyorum', 0, 'muzikler/Ada Sahillerinde Bekliyorum.mp3', 0, 0),
('tÃ¼rkÃ¼', 'neÅ?et ertas', 'telgrafÄ±n telleri', 0, 'muzikler/telgrafinTelleri.mp3', 0, 0),
('pop', 'erkin koray', 'oyle bir geÃ§er zamanki', 0, 'muzikler/oylebirgecerzamanki.wma', 0, 0),
('pop', 'beatles', 'yesterday', 0, 'muzikler/beatles-yesterday.mp3', 0, 0),
('pop', 'ilhan irem', 'anlasana', 0, 'muzikler/ilhan irem - anlasana.mp3', 0, 0),
('pop', 'scorpions', 'still loving you', 0, 'muzikler/Scorpions Still Loving You.mp3', 0, 0),
('pop', 'cici kÄ±zlar', 'delisin', 0, 'muzikler/cici kÄ±zlar - delisin.mp3', 0, 0),
('pop', 'mfÃ¶', 'psikopat', 0, 'muzikler/MFO - psikopat.mp3', 0, 0),
('pop', 'pinhani', 'dÃ¼Ä?Ã¼n', 0, 'muzikler/Pinhani - Dugun.mp3', 0, 0),
('tÃ¼rkÃ¼', 'neÅ?et ertaÅ?', 'o sen misin', 0, 'muzikler/O Sen Misin-.mp3', 0, 0),
('tÃ¼rkÃ¼', 'kazÄ±m koyuncu', 'ben seni sevduÄ?imi', 0, 'muzikler/KazÄ±m Koyuncu - Ben Seni SevduÄ?um.mp3', 0, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `populermuzik`
--

CREATE TABLE IF NOT EXISTS `populermuzik` (
  `SarkiTuru` text NOT NULL,
  `SarkiciAdi` text NOT NULL,
  `SarkiAdi` text NOT NULL,
  `SarkiPuan` double NOT NULL DEFAULT '0',
  `SarkiLink` char(100) CHARACTER SET latin5 NOT NULL,
  `SarkiOrt` int(11) NOT NULL DEFAULT '0',
  `DinlenmeSayisi` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `populermuzik`
--

INSERT INTO `populermuzik` (`SarkiTuru`, `SarkiciAdi`, `SarkiAdi`, `SarkiPuan`, `SarkiLink`, `SarkiOrt`, `DinlenmeSayisi`) VALUES
('rock', 'teoman', 'papatya', 16, 'muzikler/Teoman.mp3', 5, 3),
('pop', 'dusbaz', 'bahar', 32, 'muzikler/bahar.mp3', 5, 6),
('pop', 'erkin koray', 'sevince', 5, 'muzikler/erkin koray-sevince.mp3', 5, 1),
('pop', 'sebnem ferah', 'sigara', 0, 'muzikler/Sigara.mp3', 0, 0),
('pop', 'duman', 'herseyi yak', 0, 'muzikler/HerseyiYak.mp3', 0, 0),
('pop', 'sebnem ferah', 'perdeler', 9, 'muzikler/Perdeler.mp3', 3, 3),
('pop', 'bjork', 'Isobel', 2, 'muzikler/BjorkIsobel.mp3', 2, 1),
('pop', 'Cold Play', 'fix you', 0, 'muzikler/Cold PlayFix You.mp3', 0, 0),
('rock', 'evanecence', 'my immortal', 0, 'muzikler/Evanesence-My Immortal.mp3', 0, 0),
('pop', 'hilary duff', 'come clean', 0, 'muzikler/hilary duff - come clean.mp3', 0, 0),
('pop', 'The Cranberries', 'linger', 0, 'muzikler/The Cranberries - Linger.mp3', 0, 0),
('klasik', 'beethoven', 'fur elise', 4, 'muzikler/beethoven_fur_elise.mp3', 4, 1),
('klasik', 'chopin', 'Nocturne Minor', 0, 'muzikler/Nocturne Minor.mp3', 0, 0),
('klasik', 'chopin', 'G Minor', 0, 'muzikler/G Minor.mp3', 0, 0),
('arabesk', 'orhan gencebay', 'hayat kavgasÄ±', 0, 'muzikler/Orhan GencebayHayat Kavgasi.mp3', 0, 0),
('pop', 'outkast', 'hey ya', 0, 'muzikler/Hey Ya - Outkast.mp3', 0, 0),
('rock', 'radiohead', 'creep', 0, 'muzikler/Radiohead - Creep.mp3', 0, 0),
('rock', 'cem karaca', 'kara sevda', 0, 'muzikler/CemKaracaKaraSevda.mp3', 0, 0),
('pop', 'jamelia', 'superstar', 0, 'muzikler/Jamelia Superstar.mp3', 0, 0),
('pop', 'nina', 'move your body', 0, 'muzikler/Nina Sky Move Your Body.mp3', 0, 0),
('pop', 'akon', 'lonely', 0, 'muzikler/Akon - Lonely.mp3', 0, 0),
('pop', 'Cat Stevens', ' Lady Darbanville', 0, 'muzikler/Cat Stevens - Lady Darbanville.mp3', 0, 0),
('jazz', 'Al Bano', ' Felicita', 0, 'muzikler/Al Bano - Felicita.mp3', 0, 0),
('pop', 'janet jackson', 'all nite', 0, 'muzikler/Janet Jackson - All nite .mp3', 0, 0),
('tÃ¼rkÃ¼', 'neÅŸet ertas', 'sevgili yarim', 0, 'muzikler/Uykudamisin Sevgili Yarim.mp3', 0, 0),
('arabesk', 'taskin', 'diz dize', 0, 'muzikler/taskin diz dize.mp3', 0, 0),
('tÃ¼rkÃ¼', 'melihat gÃ¼lses', 'ada sahillerinde bekliyorum', 0, 'muzikler/Ada Sahillerinde Bekliyorum.mp3', 0, 0),
('tÃ¼rkÃ¼', 'neÅŸet ertas', 'telgrafÄ±n telleri', 0, 'muzikler/telgrafinTelleri.mp3', 0, 0),
('hiphop', 'usher', 'yeah', 0, 'muzikler/Usher-Yeah.mp3', 0, 0),
('hiphop', '50 cent', 'Ä±n the club', 0, 'muzikler/50 CENT-IN DA CLUB.mp3', 0, 0),
('pop', 'yeni turku', 'olmasa mektubun', 0, 'muzikler/Yeni Turku - Olmasa Mektubun.mp3', 0, 0),
('pop', 'erkin koray', 'oyle bir geÃ§er zamanki', 0, 'muzikler/oylebirgecerzamanki.wma', 0, 0),
('pop', 'cem adrian', 'merdivenler', 0, 'muzikler/cem adrian - Merdivenler.mp3', 0, 0),
('arabesk', 'ali atay', 'yalan ', 0, 'muzikler/yalan.mp3', 0, 0),
('pop', 'funda arar', 'senden ogrendim', 0, 'muzikler/Funda Arar - Senden Ã?grendim.mp3', 0, 0),
('rock', 'teoman', 'coban yÄ±ldÄ±zÄ±', 0, 'muzikler/Teoman - coban.mp3', 0, 0),
('tÃ¼rkÃ¼', 'erkan ogur', 'mecnun', 0, 'muzikler/Erkan ogur Mecnun.mp3', 0, 0),
('pop', 'leman sam', 'gÃ¶nÃ¼l', 0, 'muzikler/Leman Sam - Gonul.mp3', 0, 0),
('rock', 'tnk', 'sÃ¶yle ruhum', 0, 'muzikler/TNK - Soyle Ruhum.mp3', 0, 0),
('pop', 'mfÃ¶', 'gÃ¼llerin iÃ§inden ', 0, 'muzikler/MFO - Gullerin Icinden.mp3', 0, 0),
('pop', 'regina spektor', 'hero', 0, 'muzikler/Regina Spektor - Hero.mp3', 0, 0),
('rock', 'duman', 'manasÄ± yok', 0, 'muzikler/Duman - Manasi Yok.mp3', 0, 0),
('rock', 'metallica', 'fade to black', 0, 'muzikler/FADE TO BLACK.MP3', 0, 0),
('pop', 'ilhan irem', 'anlasana', 0, 'muzikler/ilhan irem - anlasana.mp3', 0, 0),
('pop', 'scorpions', 'still loving you', 0, 'muzikler/Scorpions Still Loving You.mp3', 0, 0),
('pop', 'cici kÄ±zlar', 'delisin', 0, 'muzikler/cici kÄ±zlar - delisin.mp3', 0, 0),
('pop', 'mfÃ¶', 'psikopat', 0, 'muzikler/MFO - psikopat.mp3', 0, 0),
('pop', 'pinhani', 'dÃ¼ÄŸÃ¼n', 0, 'muzikler/Pinhani - Dugun.mp3', 0, 0),
('pop', 'fringe', 'bandits', 0, 'muzikler/Fringe-Bandits.mp3', 0, 0),
('tÃ¼rkÃ¼', 'neÅŸet ertaÅŸ', 'o sen misin', 0, 'muzikler/O Sen Misin-.mp3', 0, 0),
('klasik', 'farid farjad', 'isfahan', 0, 'muzikler/Isfahan.mp3', 0, 0),
('tÃ¼rkÃ¼', 'kazÄ±m koyuncu', 'ben seni sevduÄŸimi', 0, 'muzikler/KazÄ±m Koyuncu - Ben Seni SevduÄ?um.mp3', 0, 0),
('tÃ¼rkÃ¼', 'kazÄ±m koyuncu', 'gidiyorum', 0, 'muzikler/KoyuncuGidiyorum.mp3', 0, 0),
('pop', 'carla bruni', 'madit', 0, 'muzikler/Carla.mp3', 0, 0),
('pop', 'efsun', 'ruya', 7, 'muzikler/Efsun-Ruya.mp3', 4, 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `romantik`
--

CREATE TABLE IF NOT EXISTS `romantik` (
  `SarkiTuru` text NOT NULL,
  `SarkiciAdi` text NOT NULL,
  `SarkiAdi` text NOT NULL,
  `SarkiPuan` double NOT NULL DEFAULT '0',
  `SarkiLink` char(100) NOT NULL,
  `SarkiOrt` double NOT NULL DEFAULT '0',
  `DinlenmeSayisi` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `romantik`
--

INSERT INTO `romantik` (`SarkiTuru`, `SarkiciAdi`, `SarkiAdi`, `SarkiPuan`, `SarkiLink`, `SarkiOrt`, `DinlenmeSayisi`) VALUES
('pop', 'erkin koray', 'sevince', 0, 'muzikler/erkin koray-sevince.mp3', 0, 0),
('pop', 'duman', 'herseyi yak', 0, 'muzikler/HerseyiYak.mp3', 0, 0),
('rock', 'evanecence', 'my immortal', 0, 'muzikler/Evanesence-My Immortal', 0, 0),
('klasik', 'beethoven', 'fur elise', 0, 'muzikler/beethoven_fur_elise.mp3', 0, 0),
('jazz', 'miles davis', 'los feliz', 0, 'muzikler/ Los Feliz.mp3', 0, 0),
('rock', 'cem karaca', 'kara sevda', 0, 'muzikler/CemKaracaKaraSevda.mp3', 0, 0),
('pop', 'backstreetboys', 'never gone', 0, 'muzikler/Backstreet Boys - Never Gone .mp3', 0, 0),
('tÃ¼rkÃ¼', 'neset ertas', 'sevgili yarim', 0, 'muzikler/ Uykudamisin Sevgili Yarim.mp3', 0, 0),
('arabesk', 'taskin', 'diz dize', 0, 'muzikler/taskin diz dize.mp3', 0, 0),
('pop', 'yeni turku', 'olmasa mektubun', 0, 'muzikler/Yeni Turku - Olmasa Mektubun.mp3', 0, 0),
('pop', 'erkin koray', 'oyle bir geÃ§er zamanki', 0, 'muzikler/oylebirgecerzamanki.wma', 0, 0),
('arabesk', 'ali atay', 'yalan ', 0, 'muzikler/yalan.mp3', 0, 0),
('pop', 'funda arar', 'senden ogrendim', 0, 'muzikler/Funda Arar - Senden Ã?grendim.mp3', 0, 0),
('rock', 'teoman', 'coban yÄ±ldÄ±zÄ±', 0, 'muzikler/Teoman - coban.mp3', 0, 0),
('tÃ¼rkÃ¼', 'erkan ogur', 'mecnun', 0, 'muzikler/Erkan ogur Mecnun.mp3', 0, 0),
('pop', 'leman sam', 'gÃ¶nÃ¼l', 0, 'muzikler/Leman Sam - Gonul.mp3', 0, 0),
('pop', 'mfÃ¶', 'gÃ¼llerin iÃ§inden ', 0, 'muzikler/MFO - Gullerin Icinden.mp3', 0, 0),
('tÃ¼rkÃ¼', 'kazÄ±m koyuncu', 'ben seni sevduÄ?imi', 0, 'muzikler/KazÄ±m Koyuncu - Ben Seni SevduÄ?um.mp3', 0, 0),
('tÃ¼rkÃ¼', 'kazÄ±m koyuncu', 'gidiyorum', 0, 'muzikler/KoyuncuGidiyorum.mp3', 0, 0),
('k', 'k', 'k', 0, 'k', 0, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sakin`
--

CREATE TABLE IF NOT EXISTS `sakin` (
  `SarkiTuru` text NOT NULL,
  `SarkiciAdi` text NOT NULL,
  `SarkiAdi` text NOT NULL,
  `SarkiPuan` double NOT NULL DEFAULT '0',
  `SarkiLink` char(100) NOT NULL,
  `SarkiOrt` int(11) NOT NULL DEFAULT '0',
  `DinlenmeSayisi` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `sakin`
--

INSERT INTO `sakin` (`SarkiTuru`, `SarkiciAdi`, `SarkiAdi`, `SarkiPuan`, `SarkiLink`, `SarkiOrt`, `DinlenmeSayisi`) VALUES
('jazz', 'miles davis', 'siesta', 0, 'muzikler/Siesta .mp3', 0, 0),
('rock', 'radiohead', 'creep', 0, 'muzikler/Radiohead - Creep.mp3', 0, 0),
('pop', 'akon', 'lonely', 0, 'muzikler/Akon - Lonely.mp3', 0, 0),
('pop', 'Cat Stevens', ' Lady Darbanville', 0, 'muzikler/Cat Stevens - Lady Darbanville.mp3', 0, 0),
('tÃ¼rkÃ¼', 'incesaz', 'mazi kalbimde yaradÄ±r', 0, 'muzikler/incesaz - Mazi Kalbimde Bir Yaradir.mp3', 0, 0),
('tÃ¼rkÃ¼', 'melihat gÃ¼lses', 'ada sahillerinde bekliyorum', 0, 'muzikler/Ada Sahillerinde Bekliyorum.mp3', 0, 0),
('jazz', 'Najlepse sevdalinke ', 'zaspala', 0, 'muzikler/Najlepse sevdalinke  zaspala.mp3', 0, 0),
('klasik', 'yann tiersen', 'palestine', 0, 'muzikler/Palestine.mp3', 0, 0),
('pop', 'yeni turku', 'olmasa mektubun', 0, 'muzikler/Yeni Turku - Olmasa Mektubun.mp3', 0, 0),
('pop', 'erkin koray', 'oyle bir geÃ§er zamanki', 0, 'muzikler/oylebirgecerzamanki.wma', 0, 0),
('arabesk', 'ali atay', 'yalan ', 0, 'muzikler/yalan.mp3', 0, 0),
('pop', 'funda arar', 'senden ogrendim', 0, 'muzikler/Funda Arar - Senden Ã?grendim.mp3', 0, 0),
('pop', 'leman sam', 'gÃ¶nÃ¼l', 0, 'muzikler/Leman Sam - Gonul.mp3', 0, 0),
('pop', 'beatles', 'yesterday', 0, 'muzikler/beatles-yesterday.mp3', 0, 0),
('pop', 'enya', 'fairytale', 0, 'muzikler/Enya - Fairytale.mp3', 0, 0),
('pop', 'mfÃ¶', 'gÃ¼llerin iÃ§inden ', 0, 'muzikler/MFO - Gullerin Icinden.mp3', 0, 0),
('pop', 'regina spektor', 'hero', 0, 'muzikler/Regina Spektor - Hero.mp3', 0, 0),
('rock', 'duman', 'manasÄ± yok', 0, 'muzikler/Duman - Manasi Yok.mp3', 0, 0),
('rock', 'metallica', 'fade to black', 0, 'muzikler/FADE TO BLACK.MP3', 0, 0),
('pop', 'ilhan irem', 'anlasana', 0, 'muzikler/ilhan irem - anlasana.mp3', 0, 0),
('pop', 'scorpions', 'still loving you', 0, 'muzikler/Scorpions Still Loving You.mp3', 0, 0),
('pop', 'fringe', 'bandits', 0, 'muzikler/Fringe-Bandits.mp3', 0, 0),
('pop', 'Alanis Morisette', 'Uninvited', 0, 'muzikler/Alanis Morisette - Uninvited.mp3', 0, 0),
('klasik', 'derya turkan', 'nihavend peÅ?rev', 0, 'muzikler/Derya Turkan - Nihavend Pesrev.mp3', 0, 0),
('klasik', 'farid farjad', 'isfahan', 0, 'muzikler/Isfahan.mp3', 0, 0),
('pop', 'Jason Mraz', 'Absolutely Zero', 0, 'muzikler/Jason Mraz - Absolutely Zero.mp3', 0, 0),
('jazz', 'Devics ', 'All Your Beautiful Trees', 0, 'muzikler/Devics - All Your Beautiful Trees.mp3', 0, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yenimuzik`
--

CREATE TABLE IF NOT EXISTS `yenimuzik` (
  `sarkiAd` text CHARACTER SET latin5 NOT NULL,
  `sarkiciAd` text CHARACTER SET latin5 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `yenimuzik`
--

INSERT INTO `yenimuzik` (`sarkiAd`, `sarkiciAd`) VALUES
('v', 'v'),
('teoman', 'o'),
('teoman', 'o'),
('teoman', 'o'),
('teoman', 'gemiler'),
('teoman', 'gemiler'),
('f', 'f'),
('f', 'f'),
('k', 'k'),
('k', 'k'),
('k', 'k'),
('k', 'k'),
('k', 'k');

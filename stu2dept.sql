-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 29 May 2018, 03:29:00
-- Sunucu sürümü: 10.1.32-MariaDB
-- PHP Sürümü: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `stu2dept`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `altkategori`
--

CREATE TABLE `altkategori` (
  `altKategoriID` int(11) NOT NULL,
  `altKategoriAd` varchar(45) NOT NULL,
  `kategoriID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `altkategori`
--

INSERT INTO `altkategori` (`altKategoriID`, `altKategoriAd`, `kategoriID`) VALUES
(1, 'Sözel', 1),
(2, 'Sayısal', 1),
(3, 'Şekil Uzay', 1),
(4, 'Göz El', 1),
(5, 'Mesleki Beklenti', 2),
(6, 'Fen', 3),
(7, 'Sosyal', 3),
(8, 'Yabancı Dil', 3),
(9, 'İş Ticaret', 3),
(10, 'Ziraat', 3),
(11, 'Mekanik', 3),
(12, 'Ayrıntılı', 3),
(13, 'Edebiyat', 3),
(14, 'Sanat', 3),
(15, 'Müzik', 3),
(16, 'Yardımlaşma', 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anket`
--

CREATE TABLE `anket` (
  `soruID` int(11) NOT NULL,
  `soruMetni` text NOT NULL,
  `altKategoriID` int(11) DEFAULT NULL,
  `kategoriID` int(11) DEFAULT NULL,
  `olcekTipiID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `anket`
--

INSERT INTO `anket` (`soruID`, `soruMetni`, `altKategoriID`, `kategoriID`, `olcekTipiID`) VALUES
(1, 'Bir yazı yazarken ya da ödev yaparken yazım kurallarındaki hataları fark edebilirim.', 1, 1, 1),
(2, 'Kelimelerin doğru biçimde yazılış ya da söylenişlerini ayırt edebilirim.', 1, 1, 1),
(3, 'Bir parçayi bir kere okuduktan sonra özetleyebilirim.', 1, 1, 1),
(4, 'Yazılı iletişimde (mail, dilekçe yazma vs.) akıcı bir üslup kullanabilirim.', 1, 1, 1),
(5, 'Matematik problemleri çözmekten keyif alırım.', 2, 1, 1),
(6, 'Bir problemin farklı çözüm yollarını da denerim.', 2, 1, 1),
(7, 'Bir pastayı eşit şekilde bölebilirim.', 3, 1, 1),
(8, 'Küçük bir şeklin içini dışarı taşırmadan sulu boya ile boyayabilirim.', 3, 1, 1),
(9, 'Bir hikâye kitabını hızlı ve doğru şekilde okuyabilirim.', 1, 1, 1),
(10, 'Yeni duyduğunuz kelimelerin anlamlarını öğrenmeye çalışırım.', 1, 1, 1),
(11, 'Basit matematiksel işlemleri zihinden yapabilirim.', 2, 1, 1),
(12, 'Bir matematik probleminin çözüm yolunu öğrendikten sonra, ona benzer problemleri çözebilirim.', 2, 1, 1),
(13, 'Matematik içeren dersleri yardım almadan başarabilirim.', 2, 1, 1),
(14, 'İlk defa bulunduğum bir yerde (açık veya kapalı alan) yönümü bulabilirim.', 3, 1, 1),
(15, 'Bir aletin çok küçük bir parçasını yerine kolayca yerleştirebilirim.', 4, 1, 1),
(16, 'Mesleğin iş avantajı sizin için ne derece önemlidir?', 5, 2, 1),
(17, 'Mesleğin akademik yükselmeye imkân vermesi sizce ne kadar önemlidir?', 5, 2, 1),
(18, 'Bir mesleğin ekonomik getirisinin önemi sizce ne kadardır?', 5, 2, 1),
(19, 'Huzurlu bir iş ortamı sizin için ne kadar önemlidir?', 5, 2, 1),
(20, 'Mesai saatlerinin esnek olması sizin için ne kadar önemlidir?', 5, 2, 1),
(21, 'Mesleğe ait üniversite eğitiminin kolay olması sizce ne kadar önemlidir?', 5, 2, 1),
(22, 'Kariyer gelişimine olanak veren bir meslek sizin için ne kadar önemlidir?', 5, 2, 1),
(23, 'Halk tarafından itibar gören bir mesleğinizin olması sizin için ne kadar önemlidir?', 5, 2, 1),
(24, 'Seyahat gerektiren bir mesleği ne kadar tercih edersiniz?', 5, 2, 1),
(25, 'Mesleğinizde sonuçlarından sorumlu olacağınız görevleri ne derece tercih edersiniz?', 5, 2, 1),
(26, 'Mesleğinizin size kazandıracağı sosyal statü ne kadar önemlidir?', 5, 2, 1),
(27, 'Tatil imkânları olan bir meslek sizin için ne kadar önemlidir?', 5, 2, 1),
(28, 'Kendi işinizi kurabilmenize imkân veren bir meslek sizin için ne kadar önemlidir?', 5, 2, 1),
(29, 'Fen bilimleri ile ilgili problemleri çözmek için vakit ayırır mısınız?', 6, 3, 1),
(30, 'Fen bilimlerinde öğrendiğiniz şeyleri evde sorunlarınızı çözmek için kullanır mısınız?', 6, 3, 1),
(31, 'Ünlü bilim adamlarının hayatını anlatan belgeselleri izler misiniz?', 6, 3, 1),
(32, 'Yeni bir alet ile karşılaştığınızda onun nasıl çalıştığı ile ilgili bilgi almak ister misiniz?', 11, 3, 1),
(33, 'Bir aleti tarifesine ve şemasına bakarak çalıştırabilir misiniz?', 11, 3, 1),
(34, 'Paranızı nereye harcadığınızın kaydını tutar mısınız?', 12, 3, 1),
(35, 'Derste anlatılanlarla ilgili detaylı not alır mısınız?', 12, 3, 1),
(36, 'Ödevlerinizi zamanında ve eksiksiz olarak yapar mısınız?', 12, 3, 1),
(37, 'Eşyalarınızı yerli yerine koyar ve çevrenizi düzenli tutar mısınız?', 12, 3, 1),
(38, 'E-postaları vaktinde cevaplar mısınız?', 12, 3, 1),
(39, 'Tarih romanları okumaktan zevk alır mısınız?', 7, 3, 1),
(40, 'Yabancı dilinizi geliştirip o dildeki kitap ve dergileri okuyabilmek ister misiniz?', 8, 3, 1),
(41, 'Yabancı dilde şarkı söylemeye özenir misiniz?', 8, 3, 1),
(42, 'Çevrenizdeki eşyaların, ürünlerin fiyatını tahmin etmeye çalışır mısınız?', 9, 3, 1),
(43, 'Şiir etkinliklerini takip etmekten hoşlanır mısınız?', 13, 3, 1),
(44, 'Roman, şiir veya hikâye okumaktan hoşlanır mısınız?', 13, 3, 1),
(45, 'Gazete ve dergilerdeki edebiyat sütunlarını okumaktan hoşlanır mısınız?', 13, 3, 1),
(46, 'Boş vakitlerinizde görsel sanatlarla ilgilenir misiniz?', 14, 3, 1),
(47, 'Gittiğiniz bir kentte sanat galerilerini, resim sergilerini gezmek ister misiniz?', 14, 3, 1),
(48, 'El sanatları veya resim kursları ilginizi çeker mi?', 14, 3, 1),
(49, 'Radyo ve televizyonlarda müzik programlarını takip etmekten hoşlanır mısınız?', 15, 3, 1),
(50, 'Bir müzik aletini ne sıklıkta çalıyorsunuz?', 15, 3, 1),
(51, 'İmkânlarınız nispetinde konserlere gitmeye çalışır mısınız?', 15, 3, 1),
(52, 'Söylediğiniz veya çaldığınız parçalara kendi tarzınızı katar mısınız?', 15, 3, 1),
(53, 'Ağlayan bir çocuğu oyalayabilir misiniz?', 16, 3, 1),
(54, 'Özel günlerde yaşlıları ve hastaları ziyaret eder misiniz?', 16, 3, 1),
(55, 'Başkalarının kişisel sorunlarının çözümünde yardımcı olabiliyor musunuz?', 16, 3, 1),
(56, 'Çocuk gürültüsüne katlanabilir misiniz?', 16, 3, 1),
(57, 'Bir hastaya bakabilir, ilaçlarını vaktinde verebilir misiniz?', 16, 3, 1),
(58, 'Küçük çocuklara bir şeyler öğretmekten hoşlanır mısınız?', 16, 3, 1),
(59, 'Gelecekte laboratuvar ortamında araştırmacı olmak ister misiniz?', 6, 3, 1),
(60, 'Kapı zili, kilit gibi ev aletlerini onarmaya çalışır mısınız?', 11, 3, 1),
(61, 'Tahtadan veya metalden oyuncaklar yapmak ilginizi çeker mi?', 11, 3, 1),
(62, 'Bir aleti parçalara ayırıp yeniden birleştirmekten hoşlanır mısınız?', 11, 3, 1),
(63, 'Her türlü araç gereç sağlansa bir maket yapmak ister misiniz?', 11, 3, 1),
(64, 'Bir makinenin evrimini gösteren bir sergi olsa izlemek ister misiniz?', 11, 3, 1),
(65, 'Bir makinenin çalışmasını geliştirici yöntemler düşünür müsünüz?', 11, 3, 1),
(66, 'Mektuplarınızı veya eski karnelerinizi tarih sırasına göre sıraya koyup saklar mısınız?', 12, 3, 1),
(67, 'Tarih/coğrafya derslerinde okutulan konular ilginizi çeker mi?', 7, 3, 1),
(68, 'Ünlü toplum liderlerinin hayatını anlatan eserleri okumak veya filmlerini izlemek ister misiniz?', 7, 3, 1),
(69, 'Toplumsal sorunlarla ilgilenmekten hoşlanır mısınız?', 7, 3, 1),
(70, 'İnsanların daha çok hangi ürünleri almak istediklerini öğrenmeye çalışır mısınız?', 9, 3, 1),
(71, 'Okul kantini ya da kooperatifini yönetmek ister misiniz?', 9, 3, 1),
(72, 'Yeni çiçek türleri yetiştirmeyi denemek ister misiniz?', 10, 3, 1),
(73, 'Bir çiftlikte çalışmayı ister misiniz?', 10, 3, 1),
(74, 'Kaliteli meyve yetiştiren bir üretici olmak ister misiniz?', 10, 3, 1),
(75, 'Saksıda veya bahçede çiçek yetiştirip bakımını üstlenir misiniz?', 10, 3, 1),
(76, 'Müzik yarışmalarına katılmak ister misiniz?', 15, 3, 1),
(77, 'Müzik aletleri sergisi olsa gezmek ister misiniz?', 15, 3, 1),
(78, 'Bilimsel proje sergilerini gezmekten hoşlanır mısınız?', 6, 3, 1),
(79, 'TV\' de bilimsel buluşları anlatan belgesel programları izler misiniz?', 6, 3, 1),
(80, 'Uzay araçlarının, roketlerin evrimini gösteren bir sergiyi izlemek ister misiniz?', 6, 3, 1),
(81, '\"Çocuklarda yaratıcılık\" konulu bir makaleyi okumak ister misiniz?', 7, 3, 1),
(82, 'Eski uygarlıklara ait eserleri gösteren bir belgesel filmi izlemekten hoşlanır mısınız?', 7, 3, 1),
(83, 'Yabancı dildeki kelimeleri öğrenmek ilginizi çeker mi?', 8, 3, 1),
(84, 'Yabancı dilde yeni öğrendiğiniz kelimeleri doğru şekilde telaffuz etmeye çalışır mısınız?', 8, 3, 1),
(85, 'Yabancı şarkıları kolay ezberler misiniz?', 8, 3, 1),
(86, 'Yabancı dil kurslarına gitmek ister misiniz?', 8, 3, 1),
(87, 'Pazarlama üzerine bir iş yapmak ister misiniz?', 9, 3, 1),
(88, 'Arkadaşlarınıza çiklet, çikolata, bilye vb. şeyler satar mıydınız?', 9, 3, 1),
(89, 'Evde evcil hayvan besler ve bakımını yapar mısınız?', 10, 3, 1),
(90, 'Havuzda balık üretimini gösteren bir belgesel izler misiniz?', 10, 3, 1),
(91, 'Anılarınızı ne sıklıkta yazarsınız?', 13, 3, 1),
(92, 'Kültür edebiyat faaliyetleri ilginizi çeker mi?', 13, 3, 1),
(93, 'Hikâye, günlük, blog vs. yazar mısınız?', 13, 3, 1),
(94, 'Kompozisyon yazmakta başarılı mısınız?', 13, 3, 1),
(95, 'Dilbilgisi kurallarını doğru uygulayabiliyor musunuz?', 13, 3, 1),
(96, 'El işçiliğine özen gösterir misiniz?', 14, 3, 1),
(97, 'Ünlü sanatçıların, ressamların hayat hikâyesini merak eder misiniz?', 14, 3, 1),
(98, 'TV\'de resim konulu haberleri ilgi ile izler misiniz?', 14, 3, 1),
(99, 'Müzik kursları ne kadar ilginizi çeker?', 15, 3, 1),
(100, 'Boş vakitlerinizde resim veya el işleri yapar mısınız?', 14, 3, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anketcevap`
--

CREATE TABLE `anketcevap` (
  `anketCevapID` int(11) NOT NULL,
  `anketCevap` varchar(45) NOT NULL,
  `soruID` int(11) DEFAULT NULL,
  `kullaniciTckNo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `anketcevap`
--

INSERT INTO `anketcevap` (`anketCevapID`, `anketCevap`, `soruID`, `kullaniciTckNo`) VALUES
(785, '5', 1, '40810560554'),
(786, '4', 2, '40810560554'),
(787, '3', 3, '40810560554'),
(788, '4', 4, '40810560554'),
(789, '4', 5, '40810560554'),
(790, '3', 6, '40810560554'),
(791, '4', 7, '40810560554'),
(792, '4', 8, '40810560554'),
(793, '3', 9, '40810560554'),
(794, '4', 10, '40810560554'),
(795, '3', 11, '40810560554'),
(796, '4', 12, '40810560554'),
(797, '3', 13, '40810560554'),
(798, '3', 14, '40810560554'),
(799, '3', 15, '40810560554'),
(800, '5', 16, '40810560554'),
(801, '4', 17, '40810560554'),
(802, '3', 18, '40810560554'),
(803, '4', 19, '40810560554'),
(804, '3', 20, '40810560554'),
(805, '3', 21, '40810560554'),
(806, '3', 22, '40810560554'),
(807, '3', 23, '40810560554'),
(808, '4', 24, '40810560554'),
(809, '4', 25, '40810560554'),
(810, '3', 26, '40810560554'),
(811, '3', 27, '40810560554'),
(812, '4', 28, '40810560554'),
(813, '4', 29, '40810560554'),
(814, '4', 30, '40810560554'),
(815, '5', 31, '40810560554'),
(816, '4', 32, '40810560554'),
(817, '3', 33, '40810560554'),
(818, '2', 34, '40810560554'),
(819, '2', 35, '40810560554'),
(820, '2', 36, '40810560554'),
(821, '3', 37, '40810560554'),
(822, '4', 38, '40810560554'),
(823, '3', 39, '40810560554'),
(824, '3', 40, '40810560554'),
(825, '3', 41, '40810560554'),
(826, '3', 42, '40810560554'),
(827, '4', 43, '40810560554'),
(828, '3', 44, '40810560554'),
(829, '2', 45, '40810560554'),
(830, '2', 46, '40810560554'),
(831, '3', 47, '40810560554'),
(832, '4', 48, '40810560554'),
(833, '3', 49, '40810560554'),
(834, '3', 50, '40810560554'),
(835, '2', 51, '40810560554'),
(836, '2', 52, '40810560554'),
(837, '3', 53, '40810560554'),
(838, '4', 54, '40810560554'),
(839, '5', 55, '40810560554'),
(840, '5', 56, '40810560554'),
(841, '4', 57, '40810560554'),
(842, '3', 58, '40810560554'),
(843, '3', 59, '40810560554'),
(844, '2', 60, '40810560554'),
(845, '2', 61, '40810560554'),
(846, '3', 62, '40810560554'),
(847, '4', 63, '40810560554'),
(848, '5', 64, '40810560554'),
(849, '4', 65, '40810560554'),
(850, '3', 66, '40810560554'),
(851, '3', 67, '40810560554'),
(852, '4', 68, '40810560554'),
(853, '3', 69, '40810560554'),
(854, '3', 70, '40810560554'),
(855, '4', 71, '40810560554'),
(856, '5', 72, '40810560554'),
(857, '4', 73, '40810560554'),
(858, '3', 74, '40810560554'),
(859, '3', 75, '40810560554'),
(860, '4', 76, '40810560554'),
(861, '5', 77, '40810560554'),
(862, '3', 78, '40810560554'),
(863, '3', 79, '40810560554'),
(864, '4', 80, '40810560554'),
(865, '5', 81, '40810560554'),
(866, '4', 82, '40810560554'),
(867, '3', 83, '40810560554'),
(868, '3', 84, '40810560554'),
(869, '4', 85, '40810560554'),
(870, '3', 86, '40810560554'),
(871, '3', 87, '40810560554'),
(872, '4', 88, '40810560554'),
(873, '3', 89, '40810560554'),
(874, '3', 90, '40810560554'),
(875, '3', 91, '40810560554'),
(876, '2', 92, '40810560554'),
(877, '2', 93, '40810560554'),
(878, '3', 94, '40810560554'),
(879, '4', 95, '40810560554'),
(880, '5', 96, '40810560554'),
(881, '4', 97, '40810560554'),
(882, '3', 98, '40810560554'),
(883, '3', 99, '40810560554'),
(884, '4', 100, '40810560554'),
(3099, '5', 1, '11111111111'),
(3100, '5', 2, '11111111111'),
(3101, '5', 3, '11111111111'),
(3102, '5', 4, '11111111111'),
(3103, '5', 5, '11111111111'),
(3104, '5', 6, '11111111111'),
(3105, '5', 7, '11111111111'),
(3106, '5', 8, '11111111111'),
(3107, '5', 9, '11111111111'),
(3108, '5', 10, '11111111111'),
(3109, '5', 11, '11111111111'),
(3110, '5', 12, '11111111111'),
(3111, '5', 13, '11111111111'),
(3112, '5', 14, '11111111111'),
(3113, '5', 15, '11111111111'),
(3114, '5', 16, '11111111111'),
(3115, '5', 17, '11111111111'),
(3116, '5', 18, '11111111111'),
(3117, '5', 19, '11111111111'),
(3118, '5', 20, '11111111111'),
(3119, '5', 21, '11111111111'),
(3120, '5', 22, '11111111111'),
(3121, '5', 23, '11111111111'),
(3122, '5', 24, '11111111111'),
(3123, '5', 25, '11111111111'),
(3124, '5', 26, '11111111111'),
(3125, '5', 27, '11111111111'),
(3126, '5', 28, '11111111111'),
(3127, '5', 29, '11111111111'),
(3128, '5', 30, '11111111111'),
(3129, '5', 31, '11111111111'),
(3130, '5', 32, '11111111111'),
(3131, '5', 33, '11111111111'),
(3132, '5', 34, '11111111111'),
(3133, '5', 35, '11111111111'),
(3134, '5', 36, '11111111111'),
(3135, '5', 37, '11111111111'),
(3136, '5', 38, '11111111111'),
(3137, '5', 39, '11111111111'),
(3138, '5', 40, '11111111111'),
(3139, '5', 41, '11111111111'),
(3140, '5', 42, '11111111111'),
(3141, '5', 43, '11111111111'),
(3142, '5', 44, '11111111111'),
(3143, '5', 45, '11111111111'),
(3144, '5', 46, '11111111111'),
(3145, '5', 47, '11111111111'),
(3146, '5', 48, '11111111111'),
(3147, '5', 49, '11111111111'),
(3148, '5', 50, '11111111111'),
(3149, '5', 51, '11111111111'),
(3150, '5', 52, '11111111111'),
(3151, '5', 53, '11111111111'),
(3152, '5', 54, '11111111111'),
(3153, '5', 55, '11111111111'),
(3154, '5', 56, '11111111111'),
(3155, '5', 57, '11111111111'),
(3156, '5', 58, '11111111111'),
(3157, '5', 59, '11111111111'),
(3158, '5', 60, '11111111111'),
(3159, '5', 61, '11111111111'),
(3160, '5', 62, '11111111111'),
(3161, '5', 63, '11111111111'),
(3162, '5', 64, '11111111111'),
(3163, '5', 65, '11111111111'),
(3164, '5', 66, '11111111111'),
(3165, '5', 67, '11111111111'),
(3166, '5', 68, '11111111111'),
(3167, '5', 69, '11111111111'),
(3168, '5', 70, '11111111111'),
(3169, '5', 71, '11111111111'),
(3170, '5', 72, '11111111111'),
(3171, '5', 73, '11111111111'),
(3172, '5', 74, '11111111111'),
(3173, '5', 75, '11111111111'),
(3174, '5', 76, '11111111111'),
(3175, '5', 77, '11111111111'),
(3176, '5', 78, '11111111111'),
(3177, '5', 79, '11111111111'),
(3178, '5', 80, '11111111111'),
(3179, '5', 81, '11111111111'),
(3180, '5', 82, '11111111111'),
(3181, '5', 83, '11111111111'),
(3182, '5', 84, '11111111111'),
(3183, '5', 85, '11111111111'),
(3184, '5', 86, '11111111111'),
(3185, '5', 87, '11111111111'),
(3186, '5', 88, '11111111111'),
(3187, '5', 89, '11111111111'),
(3188, '5', 90, '11111111111'),
(3189, '5', 91, '11111111111'),
(3190, '5', 92, '11111111111'),
(3191, '5', 93, '11111111111'),
(3192, '5', 94, '11111111111'),
(3193, '5', 95, '11111111111'),
(3194, '5', 96, '11111111111'),
(3195, '5', 97, '11111111111'),
(3196, '4', 98, '11111111111'),
(3197, '4', 99, '11111111111'),
(3198, '4', 100, '11111111111'),
(3199, '5 ', 1, '27017453278'),
(3200, '5 ', 2, '27017453278'),
(3201, '5 ', 3, '27017453278'),
(3202, '5 ', 4, '27017453278'),
(3203, '5 ', 5, '27017453278'),
(3204, '5 ', 6, '27017453278'),
(3205, '5 ', 7, '27017453278'),
(3206, '5 ', 8, '27017453278'),
(3207, '5 ', 9, '27017453278'),
(3208, '5 ', 10, '27017453278'),
(3209, '5 ', 11, '27017453278'),
(3210, '5 ', 12, '27017453278'),
(3211, '5 ', 13, '27017453278'),
(3212, '5 ', 14, '27017453278'),
(3213, '5 ', 15, '27017453278'),
(3214, '5 ', 28, '27017453278'),
(3215, '5 ', 1, '27017453278'),
(3216, '5 ', 2, '27017453278'),
(3217, '5 ', 3, '27017453278'),
(3218, '5 ', 4, '27017453278'),
(3219, '5 ', 5, '27017453278'),
(3220, '5 ', 6, '27017453278'),
(3221, '5 ', 7, '27017453278'),
(3222, '5 ', 8, '27017453278'),
(3223, '5 ', 9, '27017453278'),
(3224, '5 ', 10, '27017453278'),
(3225, '5 ', 11, '27017453278'),
(3226, '5 ', 12, '27017453278'),
(3227, '5 ', 13, '27017453278'),
(3228, '5 ', 14, '27017453278'),
(3229, '5 ', 15, '27017453278'),
(3230, '5 ', 28, '27017453278'),
(3231, '5 ', 1, '27017453278'),
(3232, '5 ', 2, '27017453278'),
(3233, '5 ', 3, '27017453278'),
(3234, '5 ', 4, '27017453278'),
(3235, '5 ', 5, '27017453278'),
(3236, '5 ', 6, '27017453278'),
(3237, '5 ', 7, '27017453278'),
(3238, '5 ', 8, '27017453278'),
(3239, '5 ', 9, '27017453278'),
(3240, '5 ', 10, '27017453278'),
(3241, '5 ', 11, '27017453278'),
(3242, '5 ', 12, '27017453278'),
(3243, '5 ', 13, '27017453278'),
(3244, '5 ', 14, '27017453278'),
(3245, '5 ', 15, '27017453278'),
(3246, '5 ', 28, '27017453278'),
(3247, '5 ', 15, '27017453278'),
(3248, '5 ', 28, '27017453278'),
(3249, '5 ', 1, '27017453278'),
(3250, '5 ', 2, '27017453278'),
(3251, '5 ', 3, '27017453278'),
(3252, '5 ', 4, '27017453278'),
(3253, '5 ', 5, '27017453278'),
(3254, '5 ', 6, '27017453278'),
(3255, '5 ', 7, '27017453278'),
(3256, '5 ', 8, '27017453278'),
(3257, '5 ', 9, '27017453278'),
(3258, '5 ', 10, '27017453278'),
(3259, '5 ', 11, '27017453278'),
(3260, '5 ', 12, '27017453278'),
(3261, '5 ', 13, '27017453278'),
(3262, '5 ', 14, '27017453278'),
(3263, '5 ', 15, '27017453278'),
(3264, '5 ', 28, '27017453278');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anketunisehir`
--

CREATE TABLE `anketunisehir` (
  `soruID` int(11) NOT NULL,
  `soruMetni` text NOT NULL,
  `kategoriUniSehirID` int(11) DEFAULT NULL,
  `olcekTipiID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `anketunisehir`
--

INSERT INTO `anketunisehir` (`soruID`, `soruMetni`, `kategoriUniSehirID`, `olcekTipiID`) VALUES
(1, 'Üniversite eğitiminizi kalabalık bir şehirde sürdürmek ister misiniz?', 1, 2),
(2, 'Öğrenci yoğunluğu fazla olduğu bir şehirde okumak ister misiniz?', 1, 2),
(3, 'Okumak istediğiniz şehirdeki iklim koşulları ne olmalıdır?', 1, 2),
(4, 'Sosyal faaliyetlerinizi sehir merkezinde mi gerçeklestirmek istersiniz?', 1, 2),
(5, 'Öğrenci toplulukları bakımından olanağı fazla okullar ister misiniz?', 1, 2),
(6, 'Kampüs disindaki alanlarin zengin olmasi önemli midir? ', 1, 2),
(7, 'Okumak istediginiz sehrin ekonomik kosullari sizin için önemli midir?', 1, 2),
(8, 'Okurken çalismak ister misiniz?', 1, 2),
(9, 'Akdeniz Bölgesinde okumak ister misiniz?', 1, 2),
(10, 'Doğu Anadolu Bölgesinde okumak ister misiniz?', 1, 2),
(11, 'Ege Bölgesinde okumak ister misiniz? ', 1, 2),
(12, 'Güney Doğu Anadolu Bölgesinde okumak ister misiniz?', 1, 2),
(13, 'İç Anadolu Bölgesinde okumak ister misiniz?', 1, 2),
(14, 'Karadeniz Bölgesinde okumak ister misiniz?', 1, 2),
(15, 'Marmara Bölgesinde okumak ister misiniz?', 1, 2),
(16, 'Eğitim almak istediğiniz üniversitenin türünü seçiniz. (devlet – vakıf)', 2, 2),
(17, 'Tamamı ücretli olan bir vakıf üniversitesinde okumak ister misiniz?', 2, 2),
(18, 'Bir vakıf üniversitesinde %25 burslu okumak ister misiniz?', 2, 2),
(19, 'Bir vakıf üniversitesinde %50 burslu okumak ister misiniz?', 2, 2),
(20, 'Bir vakıf üniversitesinde %75 burslu okumak ister misiniz?', 2, 2),
(21, 'Bir vakıf üniversitesinde %100 burslu okumak ister misiniz?', 2, 2),
(22, 'Yerleştirme puanınız 200 – 250 aralığında mı?', 2, 2),
(23, 'Yerleştirme puanınız 250 – 300 aralığında mı?', 2, 2),
(24, 'Yerleştirme puanınız 300 – 350 aralığında mı?', 2, 2),
(25, 'Yerleştirme puanınız 350 – 400 aralığında mı?', 2, 2),
(26, 'Yerleştirme puanınız 400 – 450 aralığında mı?', 2, 2),
(27, 'Yerleştirme puanınız 450 – 500 aralığında mı?', 2, 2),
(28, 'Yerleştirme puanınız 500 – 550 aralığında mı?', 2, 2),
(29, 'Örgün öğretim mi yoksa gece öğretimde mi okumak istersiniz?', 2, 2),
(30, 'Anadil de mi yoksa yabancı dilde mi eğitim almak istersiniz?', 2, 2),
(31, 'Üniversitede hazırlık sınıfı okumak ister misiniz?', 2, 2),
(32, 'Seçeceğiniz üniversitenin kontenjan koşulları sizin için önemli midir?', 2, 2),
(33, 'Üniversitenin okul birincisi kontenjanı olsun ister misiniz?', 2, 2),
(34, 'Üniversitedeki akademisyen sayısı sizin için önemli midir?', 2, 2),
(35, 'Unvan sahibi akademisyenlerden ders görmek sizin için önemli midir?', 2, 2),
(36, 'Seçeceğiniz üniversitede değişim programı olması ne kadar ilginizi çeker?', 2, 2),
(37, 'Üniversitenin teknik özellikleri (Laboratuvar, derslik, amfi vs.) sizin için önemli midir?', 2, 2),
(38, 'Üniversitenizin staj imkanı sunmasını ister misiniz?', 2, 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anketunisehircevap`
--

CREATE TABLE `anketunisehircevap` (
  `anketUniSehirCevapID` int(11) NOT NULL,
  `anketUniSehirCevap` varchar(45) NOT NULL,
  `soruID` int(11) DEFAULT NULL,
  `kullaniciTckNo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `anketunisehircevap`
--

INSERT INTO `anketunisehircevap` (`anketUniSehirCevapID`, `anketUniSehirCevap`, `soruID`, `kullaniciTckNo`) VALUES
(130, '1', 1, '40810560554'),
(131, '0', 2, '40810560554'),
(132, '0', 3, '40810560554'),
(133, '1', 4, '40810560554'),
(134, '1', 5, '40810560554'),
(135, '0', 6, '40810560554'),
(136, '1', 7, '40810560554'),
(137, '0', 8, '40810560554'),
(138, '1', 9, '40810560554'),
(139, '1', 10, '40810560554'),
(140, '0', 11, '40810560554'),
(141, '0', 12, '40810560554'),
(142, '1', 13, '40810560554'),
(143, '1', 14, '40810560554'),
(144, '1', 15, '40810560554'),
(145, '1', 16, '40810560554'),
(146, '0', 17, '40810560554'),
(147, '0', 18, '40810560554'),
(148, '1', 19, '40810560554'),
(149, '1', 20, '40810560554'),
(150, '1', 21, '40810560554'),
(151, '0', 22, '40810560554'),
(152, '0', 23, '40810560554'),
(153, '1', 24, '40810560554'),
(154, '0', 25, '40810560554'),
(155, '0', 26, '40810560554'),
(156, '1', 27, '40810560554'),
(157, '0', 28, '40810560554'),
(158, '0', 29, '40810560554'),
(159, '1', 30, '40810560554'),
(160, '0', 31, '40810560554'),
(161, '0', 32, '40810560554'),
(162, '1', 33, '40810560554'),
(163, '1', 34, '40810560554'),
(164, '1', 35, '40810560554'),
(165, '0', 36, '40810560554'),
(166, '0', 37, '40810560554'),
(167, '0', 38, '40810560554');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bloglar`
--

CREATE TABLE `bloglar` (
  `blogId` int(11) NOT NULL,
  `blogBaslik` varchar(255) NOT NULL,
  `blogIcerik` longtext NOT NULL,
  `blogDurum` tinyint(4) NOT NULL COMMENT '0-Kapalı 1-Açık',
  `blogResim` varchar(255) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `bloglar`
--

INSERT INTO `bloglar` (`blogId`, `blogBaslik`, `blogIcerik`, `blogDurum`, `blogResim`, `tarih`) VALUES
(4, 'Bilgisayar Mühendisliği', '<p> Sivas cumhuiyet üniversitesi bilgisayar mühendisliği bölümü </p>', 1, 'blog1.jpg', '2016-12-13 11:44:50'),
(5, 'Stu2Dept', '<p>PROJE ÖZETİ</p>\r\n<p xss=removed>Eğitim sistemimizin en önemli problemlerinden birisi öğrencilerin hatalı bölüm tercihleridir. Hatalı tercih öğrenciler için psikolojik sorunlara sebep olduğu kadar ekonomik kayıplara da neden olabilmektedir. Öğrencilerin yeteneklerini ve bölümlerin karakteristiklerini anlamak ve onlar arasında uygun bir eşleştirme yapmak bu türden sorunların üstesinden gelebilmek için etkili bir çözüm yolu olabilir. Bu kapsamda, projemizin amacı öğrenciler ve bölümler arasında uyumlu eşleştirmeleri elde edebilmektir. Eşleştirme işlemi veri madenciliği teknikleriyle yerine getirilecek olup projemiz için bilgisayar mühendisliği bölümü pilot bölüm olarak seçilmiştir.</p>\r\n<p> </p>\r\n<p xss=removed>Proje sonunda geliştireceğimiz sistem öğrencilere bilgisayar mühendisliği bölümünü seçip seçmemeleri konusunda yardımcı olacaktır. Sistem iki parçadan oluşmaktadır. Onlardan birincisi öğrenci karakteristikleriyle diğeri ise bölüm özellikleriyle ilgilidir. Literatürdeki çalışmaların çoğunda bölüm özellikleri ele alınmış fakat öğrenci karakteristikleri bölüm seçiminde çok fazla dikkate alınmamıştır. Daha doğru bir eşleştirme için projemizde iki taraflı yenilikçi bir öneri sunulmuştur.</p>\r\n<p> </p>\r\n<p xss=removed>Geçmiş çalışmalarda ele alınan; bölüm akademik kadrosunun kalitesi, yurt dışı olanakları, burs imkânları, eğitim maliyetleri, mezunların iş olanakları ve okulun sosyal etkinlikleri gibi öğrencinin bölümden beklentilerine ek olarak bu çalışmada öğrencinin ilgi alanları, geçmişte kazandığı ödüller, yetenekleri ve psikometrik özellikleri gibi bölümün öğrenciden beklentileri de ele alınacaktır.       </p>\r\n<p> </p>\r\n<p xss=removed>Projede, eşleştirmeler için birliktelik kuralları madenciliği, kural tabanlı sınıflayıcılar ve skor tabanlı teknikler kullanılacaktır. Projemiz 18 ayda tamamlanacaktır. Sistemde giriş verisi olarak anket verileri, öğretmenlerin öğrenci hakkındaki görüşleri, demografik veriler ve öğrenci ilerleme raporları gibi bilgiler kullanılacaktır. Projenin final çıktısı öğrenciler, öğretmenler ve danışmanlar için bir yazılım ürünü olacaktır.  </p>', 1, 'blog2.jpg', '2017-03-23 00:14:10');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bolgeler`
--

CREATE TABLE `bolgeler` (
  `bolgeID` int(11) NOT NULL,
  `karadenizDeger` float NOT NULL,
  `akdenizDeger` float NOT NULL,
  `egeDeger` float NOT NULL,
  `marmaraDeger` float NOT NULL,
  `icanadoluDeger` float NOT NULL,
  `doguanadoluDeger` float NOT NULL,
  `gdoguanadoluDeger` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `bolgeler`
--

INSERT INTO `bolgeler` (`bolgeID`, `karadenizDeger`, `akdenizDeger`, `egeDeger`, `marmaraDeger`, `icanadoluDeger`, `doguanadoluDeger`, `gdoguanadoluDeger`) VALUES
(1, 1, 1, 1, 11, 1, 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bolum`
--

CREATE TABLE `bolum` (
  `bolumID` int(11) NOT NULL,
  `bolumKodu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `bolum`
--

INSERT INTO `bolum` (`bolumID`, `bolumKodu`) VALUES
(1, '1400111161'),
(2, '3800212261'),
(3, '100313261'),
(4, '900412261'),
(5, '700512161'),
(6, '2600612261'),
(7, '600712161'),
(8, '600812261'),
(9, '2500912161'),
(10, '2501012172'),
(11, '1001111161'),
(12, '1101212161'),
(13, '3401312261'),
(14, '1701412161'),
(15, '4501512261'),
(16, '4501612272'),
(17, '101711261'),
(18, '101811272'),
(19, '5801912161'),
(20, '5802012172'),
(21, '3502112261'),
(22, '4302212161'),
(23, '4302612172'),
(24, '8102412161'),
(25, '8102512172'),
(26, '8102614161'),
(27, '8102714172'),
(28, '8102515161'),
(29, '8102915172'),
(30, '3503012161'),
(31, '3803112161'),
(32, '3803212172'),
(33, '2603311161'),
(34, '2303412161'),
(35, '2303512172'),
(36, '3403619161'),
(37, '603712161'),
(38, '603814161'),
(39, '603915161'),
(40, '4104012161'),
(41, '604112261'),
(42, '6204212161'),
(43, '4404312161'),
(44, '4404416172'),
(45, '3104516161'),
(46, '3104617172'),
(47, '3404717161'),
(48, '3404812261'),
(49, '3404912161'),
(50, '3505012261'),
(51, '7805112161'),
(52, '7805212172'),
(53, '7805312261'),
(54, '6105412161'),
(55, '6105511172'),
(56, '3705612161'),
(57, '7105712161'),
(58, '7105812172'),
(59, '4105912161'),
(60, '4106012172'),
(61, '3406112261'),
(62, '1506211161'),
(63, '3306312161'),
(64, '4806412261'),
(65, '4906511161'),
(66, '5906612161'),
(67, '5906712172'),
(68, '4206811161'),
(69, '5506912161'),
(70, '607012261'),
(71, '2007112161'),
(72, '5407217161'),
(73, '5407317172'),
(74, '4207414161'),
(75, '4207514172'),
(76, '4207615161'),
(77, '4207715172'),
(78, '4207812161'),
(79, '4207912172'),
(80, '5608011161'),
(81, '3208112161'),
(82, '3208212172'),
(83, '2208312161'),
(84, '6208412161'),
(85, '6208512172'),
(86, '7708612161'),
(87, '608713261'),
(88, '3408816161'),
(89, '609022121'),
(90, '609122131'),
(91, '609222151'),
(92, '6109321131'),
(93, '6109421151'),
(94, '3409523111'),
(95, '3409623131'),
(96, '3409723151'),
(97, '609822121'),
(98, '609922131'),
(99, '610022151'),
(100, '610122111'),
(101, '3410221131'),
(102, '3410221131'),
(103, '610722221'),
(104, '610822231'),
(105, '610922251'),
(106, '3411022231'),
(107, '3411122251'),
(108, '3411221131'),
(109, '3411322151'),
(110, '3412021131'),
(111, '3412121141'),
(112, '3412221151'),
(113, '2712322231'),
(114, '2712422251'),
(115, '612522231'),
(116, '612622251'),
(117, '612722211'),
(118, '3412822131'),
(119, '3412922151'),
(120, '3413021221'),
(121, '3413121231'),
(122, '3413221251'),
(123, '3413321211'),
(124, '3413421121'),
(125, '3413521131'),
(126, '3413621151'),
(127, '3413721111'),
(128, '3413822231'),
(129, '3413922251'),
(130, '3414023221'),
(131, '3414123231'),
(132, '3414223251'),
(133, '3414321121'),
(134, '3414421141'),
(135, '3414521151'),
(136, '3414621231'),
(137, '3414721241'),
(138, '3414821251'),
(139, '3414922231'),
(140, '3415022241'),
(141, '3415122251'),
(142, '3415223231'),
(143, '3415323241'),
(144, '3415423251'),
(145, '3415523221'),
(146, '3415623231'),
(147, '3415723251'),
(148, '3415823211'),
(149, '3415920121'),
(150, '3416020131'),
(151, '3416120151'),
(152, '3416220111'),
(153, '3516328221'),
(154, '3516428231'),
(155, '3516528251'),
(156, '3516628211'),
(157, '3417123231'),
(158, '3417223251'),
(159, '3417322221'),
(160, '3417422231'),
(161, '3417522251'),
(162, '3417622211'),
(163, '4217722131'),
(164, '4217822141'),
(165, '4217922151'),
(166, '3418023221'),
(167, '3418123231'),
(168, '3418223251'),
(169, '3418322231'),
(170, '3418422241'),
(171, '3418522251'),
(172, '3419521141'),
(173, '3419621151'),
(174, '3419721131'),
(175, '3419821231'),
(176, '3419921251'),
(177, '3420021211'),
(178, '3420121151'),
(179, '3420221111'),
(180, '3420322221'),
(181, '3420422231'),
(182, '3420522251'),
(183, '3420622211'),
(184, '3420723221'),
(185, '3420823231'),
(186, '3420923251'),
(187, '3421023211'),
(188, '621122221'),
(189, '621222231'),
(190, '621222251'),
(191, '621422211'),
(192, '621522131'),
(193, '621622141'),
(194, '621722151'),
(195, '621822111'),
(196, '3321922231'),
(197, '3322022251'),
(198, '3322122211'),
(199, '3422522231'),
(200, '3422622251'),
(201, '722722231'),
(202, '722822241'),
(203, '722922251'),
(204, '3423023131'),
(205, '3423123141'),
(206, '3423223151'),
(207, '3513322231'),
(208, '3523422251'),
(209, '3423522231'),
(210, '3423622251'),
(211, '3423722211');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bursturu`
--

CREATE TABLE `bursturu` (
  `bursTuruID` int(11) NOT NULL,
  `bursTuruAd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `bursturu`
--

INSERT INTO `bursturu` (`bursTuruID`, `bursTuruAd`) VALUES
(1, 'Ücretli'),
(2, '%25 Burslu'),
(3, '%50 Burslu'),
(4, '%75 Burslu'),
(5, '%100 Burslu'),
(6, 'Ücretsiz'),
(7, 'Ücretli (İkinci Öğretim)');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `duyurular`
--

CREATE TABLE `duyurular` (
  `duyuruId` int(11) NOT NULL,
  `duyuruBaslik` varchar(255) NOT NULL,
  `duyuruIcerik` longtext NOT NULL,
  `duyuruDurum` tinyint(4) NOT NULL,
  `duyuruResim` varchar(255) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `duyurular`
--

INSERT INTO `duyurular` (`duyuruId`, `duyuruBaslik`, `duyuruIcerik`, `duyuruDurum`, `duyuruResim`, `tarih`) VALUES
(13, 'Web sitemiz yayınlandı', '<h4>Sizlere daha iyi hizmet verebilmek için web sitemizi güncelledik</h4>', 1, 'sitemizonl-636x271.jpg', '2016-11-16 00:55:18'),
(14, 'Sonuç Raporu Teslim Edildi', '<p>Projemizin sonuç raporu TÜBİTAK\'a iletilmiştir. </p>', 1, 'tübitak-logo.jpg', '2017-10-22 10:26:22');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `fakulte`
--

CREATE TABLE `fakulte` (
  `fakulteID` int(11) NOT NULL,
  `fakulteAd` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `fakulte`
--

INSERT INTO `fakulte` (`fakulteID`, `fakulteAd`) VALUES
(1, 'Mühendislik ve Mimarlik Fakültesi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `galeri`
--

CREATE TABLE `galeri` (
  `galeriId` int(11) NOT NULL,
  `galeriAd` varchar(255) NOT NULL,
  `galeriIcerik` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `galeri`
--

INSERT INTO `galeri` (`galeriId`, `galeriAd`, `galeriIcerik`) VALUES
(20, 'Skoda', '<p>arac içeriğini tasarlayınız!</p>'),
(21, 'Opel', '<p>arac içeriğini tasarlayınız!</p>');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmetler`
--

CREATE TABLE `hizmetler` (
  `hizmetId` int(11) NOT NULL,
  `hizmetBaslik` varchar(255) NOT NULL,
  `hizmetIcerik` varchar(255) NOT NULL,
  `hizmetDurum` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hocalar`
--

CREATE TABLE `hocalar` (
  `hocaId` int(11) NOT NULL,
  `hocaAd` varchar(255) NOT NULL,
  `hocaIcerik` varchar(255) NOT NULL,
  `hocaResim` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Tablo döküm verisi `hocalar`
--

INSERT INTO `hocalar` (`hocaId`, `hocaAd`, `hocaIcerik`, `hocaResim`) VALUES
(1, 'Yrd. Doç. Dr. Hidayet TAKCI', 'Proje Yöneticisi', 'htakci.jpg'),
(2, 'Yrd. Doç. Dr. Kali GÜRKAHRAMAN', 'Proje Araştırmacısı', 'kali.jpg'),
(3, 'Arş. Gör. Ahmet Fırat YELKUVAN', 'Yüksek Lisans Bursiyer', 'arastirma_gorevlisi_ahmet_firat_yelkuvan_104677.jpg'),
(4, 'Fulya ER', 'Lisans Bursiyer', 'fulya_er.jpeg'),
(5, 'Halil GÜLER', 'Lisans Bursiyer', 'Halil_Güler.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `istatistikler`
--

CREATE TABLE `istatistikler` (
  `istatistikId` int(11) NOT NULL,
  `istatistikAd` varchar(255) NOT NULL,
  `istatistikDeger` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Tablo döküm verisi `istatistikler`
--

INSERT INTO `istatistikler` (`istatistikId`, `istatistikAd`, `istatistikDeger`) VALUES
(1, 'Proje Yöneticisi', '1'),
(2, 'Lisans Bursiyer', '2'),
(3, 'Yüksek Lisans Bursiyer', '1'),
(4, 'Proje Araştırmacı', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `istatistikselbilgiler`
--

CREATE TABLE `istatistikselbilgiler` (
  `istatistikselBilgilerID` int(11) NOT NULL,
  `tabanPuan` float NOT NULL,
  `tavanPuan` float NOT NULL,
  `tabanBasariSirasi` float NOT NULL,
  `ortalamaDiplomaPuani` float NOT NULL,
  `bolgeID` int(11) DEFAULT NULL,
  `okulTipiID` int(11) DEFAULT NULL,
  `uniID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `istatistikselbilgiler`
--

INSERT INTO `istatistikselbilgiler` (`istatistikselBilgilerID`, `tabanPuan`, `tavanPuan`, `tabanBasariSirasi`, `ortalamaDiplomaPuani`, `bolgeID`, `okulTipiID`, `uniID`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE `kategori` (
  `kategoriID` int(11) NOT NULL,
  `kategoriAd` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`kategoriID`, `kategoriAd`) VALUES
(1, 'Mühendislik'),
(2, 'Bilgisayar'),
(3, 'Elektronik');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `kategoriId` int(11) NOT NULL,
  `kategoriAdi` varchar(255) NOT NULL,
  `kategoriTipi` tinyint(4) NOT NULL COMMENT '0-Hizmetler'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriunisehir`
--

CREATE TABLE `kategoriunisehir` (
  `kategoriUniSehirID` int(11) NOT NULL,
  `kategoriUniSehirAd` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kategoriunisehir`
--

INSERT INTO `kategoriunisehir` (`kategoriUniSehirID`, `kategoriUniSehirAd`) VALUES
(1, 'Şehir'),
(2, 'Üniversite');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullaniciTckNo` varchar(50) NOT NULL,
  `ogrenciNo` varchar(45) NOT NULL,
  `ad` varchar(50) NOT NULL,
  `soyad` varchar(50) NOT NULL,
  `email` varchar(75) NOT NULL,
  `kullaniciAd` varchar(25) NOT NULL,
  `kullaniciSifre` varchar(50) NOT NULL,
  `meslekID` int(11) DEFAULT NULL,
  `okulID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullaniciTckNo`, `ogrenciNo`, `ad`, `soyad`, `email`, `kullaniciAd`, `kullaniciSifre`, `meslekID`, `okulID`) VALUES
('11111111111', '0', 'halil', 'güler', 'halilguler1994@gmail.com', 'hguler', '12345', 3, 0),
('222222222222222', '', 'sad', 'Balki', 'Safabalk@gmail.com', '', '123456', 2, NULL),
('27017453278', '0', 'safa', 'balki', 'safabalki@gmail.com', 'safa', '123456', 2, 1),
('32188723600', '0', 'aaaa', 'bbbb', 'a@hotmail.com', 'aaa', '123456', 1, 1),
('32191723536', '0', 'fulya', 'er', 'fulyaer@hotmail.com', 'erfulyaa', '12345678', 1, 1),
('40810560551', '0', 'Hidayet', 'Takci', 'htakci@gmail.com', 'htakci', '12345', 3, 0),
('40810560554', '2013123026', 'fulya', 'er', 'fulyaer@gmail.com', 'fulya', '1234', 2, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `kullaniciAdi` varchar(255) NOT NULL,
  `sifre` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `ad` varchar(255) NOT NULL,
  `soyad` varchar(255) NOT NULL,
  `rutbe` int(11) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `kullaniciAdi`, `sifre`, `mail`, `ad`, `soyad`, `rutbe`, `tarih`) VALUES
(1, 'ofosoft', 'ofo5810', 'ofosoft@hotmail.com', 'safa', 'balki', 1, '2016-11-09 12:42:33'),
(2, 'htakci', 'htakci58', 'htakci@cumhuriyet.edu.tr', 'Hidayet', 'TAKÇI', 1, '2017-10-13 22:22:11'),
(3, 'irem', 'irem102030', 'irem@gmail.com', 'irem', 'Gökşen', 1, '2017-12-25 16:09:05');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE `mesajlar` (
  `mesajId` int(11) NOT NULL,
  `ad` varchar(255) NOT NULL,
  `konu` varchar(255) NOT NULL,
  `mesaj` mediumtext NOT NULL,
  `telNo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `ipAdres` varchar(255) NOT NULL,
  `durum` tinyint(4) NOT NULL COMMENT '0-Okunmadı 1 -Okundu',
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`mesajId`, `ad`, `konu`, `mesaj`, `telNo`, `mail`, `ipAdres`, `durum`, `tarih`) VALUES
(2, 'safa', 'Güzergah', 'safa', '5425723857', 'safa_balk@hotmail.com', '123456', 1, '2016-12-02 22:50:59'),
(3, 'AhmetHan', 'Fiyat', 'Unuversite kac tl gidiyorsunuz...', '05535087456', 'hankngdm@gmail.com', '123456', 1, '2017-01-23 08:51:26');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `meslek`
--

CREATE TABLE `meslek` (
  `meslekID` int(11) NOT NULL,
  `meslekAd` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `meslek`
--

INSERT INTO `meslek` (`meslekID`, `meslekAd`) VALUES
(1, 'Öğretmen'),
(2, 'Öğrenci'),
(3, 'Admin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenimdili`
--

CREATE TABLE `ogrenimdili` (
  `ogrenimDiliID` int(11) NOT NULL,
  `ogrenimDiliAd` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ogrenimdili`
--

INSERT INTO `ogrenimdili` (`ogrenimDiliID`, `ogrenimDiliAd`) VALUES
(1, 'Türkçe'),
(2, 'İngilizce');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogretimelemani`
--

CREATE TABLE `ogretimelemani` (
  `ogretimElemaniID` int(11) NOT NULL,
  `profesorSayisi` int(11) NOT NULL,
  `docentSayisi` int(11) NOT NULL,
  `yardimcidocentSayisi` int(11) NOT NULL,
  `ogretimuyesiSayisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ogretimelemani`
--

INSERT INTO `ogretimelemani` (`ogretimElemaniID`, `profesorSayisi`, `docentSayisi`, `yardimcidocentSayisi`, `ogretimuyesiSayisi`) VALUES
(1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `okul`
--

CREATE TABLE `okul` (
  `okulID` int(11) NOT NULL,
  `okulAd` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `okul`
--

INSERT INTO `okul` (`okulID`, `okulAd`) VALUES
(0, 'Admin'),
(1, 'Selçuk Anadolu Lisesi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `okultipi`
--

CREATE TABLE `okultipi` (
  `okulTipiID` int(11) NOT NULL,
  `fenLiseDeger` float NOT NULL,
  `anadoluLiseDeger` float NOT NULL,
  `anadoluogrtmnLiseDeger` float NOT NULL,
  `aolmeslekLiseDeger` float NOT NULL,
  `cokprogramliLiseDeger` float NOT NULL,
  `anadoluteknikLiseDeger` float NOT NULL,
  `teknikLiseDeger` float NOT NULL,
  `anadoluticaretLiseDeger` float NOT NULL,
  `ticaretLiseDeger` float NOT NULL,
  `endustriLiseDeger` float NOT NULL,
  `digerLiseDeger` float NOT NULL,
  `duzLiseDeger` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `okultipi`
--

INSERT INTO `okultipi` (`okulTipiID`, `fenLiseDeger`, `anadoluLiseDeger`, `anadoluogrtmnLiseDeger`, `aolmeslekLiseDeger`, `cokprogramliLiseDeger`, `anadoluteknikLiseDeger`, `teknikLiseDeger`, `anadoluticaretLiseDeger`, `ticaretLiseDeger`, `endustriLiseDeger`, `digerLiseDeger`, `duzLiseDeger`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `olcek`
--

CREATE TABLE `olcek` (
  `olcekID` int(11) NOT NULL,
  `olcekAd` varchar(45) NOT NULL,
  `olcekTipiID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `olcek`
--

INSERT INTO `olcek` (`olcekID`, `olcekAd`, `olcekTipiID`) VALUES
(1, 'Her Zaman', 1),
(2, 'Sıklıkla', 1),
(3, 'Bazen', 1),
(4, 'Nadiren', 1),
(5, 'Hiçbir Zaman', 1),
(6, 'Evet', 2),
(7, 'Hayır', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `olcektipi`
--

CREATE TABLE `olcektipi` (
  `olcekTipiID` int(11) NOT NULL,
  `olcekTipiAd` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `olcektipi`
--

INSERT INTO `olcektipi` (`olcekTipiID`, `olcekTipiAd`) VALUES
(1, 'çoktanseçmeli'),
(2, 'Evet-Hayır');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `psikocevap`
--

CREATE TABLE `psikocevap` (
  `cevapID` int(11) NOT NULL,
  `cevapMetni` varchar(45) NOT NULL,
  `soruID` int(11) DEFAULT NULL,
  `kullaniciTckNo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `psikocevap`
--

INSERT INTO `psikocevap` (`cevapID`, `cevapMetni`, `soruID`, `kullaniciTckNo`) VALUES
(634, 'A', 39, '27017453278'),
(635, 'C', 40, '27017453278'),
(636, 'B', 2, '27017453278'),
(637, 'A', 3, '27017453278'),
(638, 'C', 4, '27017453278'),
(639, 'A', 5, '27017453278'),
(640, 'B', 6, '27017453278'),
(641, 'C', 7, '27017453278'),
(642, 'B', 8, '27017453278'),
(643, 'D', 35, '27017453278'),
(644, 'A', 36, '27017453278'),
(645, 'C', 37, '27017453278'),
(646, 'B', 38, '27017453278'),
(647, 'A', 39, '27017453278'),
(648, 'A', 40, '27017453278'),
(649, 'D', 35, '27017453278'),
(650, 'A', 36, '27017453278'),
(651, 'C', 37, '27017453278'),
(652, 'B', 38, '27017453278'),
(653, 'A', 39, '27017453278'),
(654, 'A', 40, '27017453278'),
(655, 'D', 35, '27017453278'),
(656, 'A', 36, '27017453278'),
(657, 'C', 37, '27017453278'),
(658, 'B', 38, '27017453278'),
(659, 'A', 39, '27017453278'),
(660, 'A', 40, '27017453278'),
(661, 'D', 2, '27017453278'),
(662, 'D', 3, '27017453278'),
(663, 'D', 4, '27017453278'),
(664, 'D', 5, '27017453278'),
(665, 'D', 6, '27017453278'),
(666, 'D', 7, '27017453278'),
(667, 'D', 8, '27017453278'),
(668, 'D', 9, '27017453278'),
(669, 'D', 10, '27017453278'),
(670, 'D', 11, '27017453278'),
(671, 'D', 12, '27017453278'),
(672, 'D', 13, '27017453278'),
(673, 'D', 14, '27017453278'),
(674, 'D', 15, '27017453278'),
(675, 'D', 16, '27017453278'),
(676, 'D', 17, '27017453278'),
(677, 'D', 18, '27017453278'),
(678, 'D', 19, '27017453278'),
(679, 'D', 20, '27017453278'),
(680, 'D', 21, '27017453278'),
(681, 'D', 22, '27017453278'),
(682, 'D', 23, '27017453278'),
(683, 'D', 24, '27017453278'),
(684, 'D', 26, '27017453278'),
(685, 'D', 27, '27017453278'),
(686, 'D', 28, '27017453278'),
(687, 'D', 29, '27017453278'),
(688, 'D', 30, '27017453278'),
(689, 'D', 31, '27017453278'),
(690, 'D', 32, '27017453278'),
(691, 'D', 33, '27017453278'),
(692, 'D', 34, '27017453278'),
(693, 'D', 35, '27017453278'),
(694, 'D', 36, '27017453278'),
(695, 'D', 37, '27017453278'),
(696, 'D', 38, '27017453278'),
(697, 'D', 39, '27017453278'),
(698, 'D', 40, '27017453278'),
(699, 'D', 2, '27017453278'),
(700, 'D', 3, '27017453278'),
(701, 'D', 4, '27017453278'),
(702, 'D', 5, '27017453278'),
(703, 'D', 6, '27017453278'),
(704, 'D', 7, '27017453278'),
(705, 'D', 8, '27017453278'),
(706, 'D', 9, '27017453278'),
(707, 'D', 10, '27017453278'),
(708, 'D', 11, '27017453278'),
(709, 'D', 12, '27017453278'),
(710, 'D', 13, '27017453278'),
(711, 'D', 14, '27017453278'),
(712, 'D', 15, '27017453278'),
(713, 'D', 16, '27017453278'),
(714, 'D', 17, '27017453278'),
(715, 'D', 18, '27017453278'),
(716, 'D', 19, '27017453278'),
(717, 'D', 20, '27017453278'),
(718, 'D', 21, '27017453278'),
(719, 'D', 22, '27017453278'),
(720, 'D', 23, '27017453278'),
(721, 'D', 24, '27017453278'),
(722, 'D', 26, '27017453278'),
(723, 'D', 27, '27017453278'),
(724, 'D', 28, '27017453278'),
(725, 'D', 29, '27017453278'),
(726, 'D', 30, '27017453278'),
(727, 'D', 31, '27017453278'),
(728, 'D', 32, '27017453278'),
(729, 'D', 33, '27017453278'),
(730, 'D', 34, '27017453278'),
(731, 'D', 35, '27017453278'),
(732, 'D', 36, '27017453278'),
(733, 'D', 37, '27017453278'),
(734, 'D', 38, '27017453278'),
(735, 'D', 39, '27017453278'),
(736, 'D', 40, '27017453278'),
(737, 'D', 2, '27017453278'),
(738, 'D', 3, '27017453278'),
(739, 'D', 4, '27017453278'),
(740, 'D', 5, '27017453278'),
(741, 'D', 6, '27017453278'),
(742, 'D', 7, '27017453278'),
(743, 'D', 8, '27017453278'),
(744, 'D', 9, '27017453278'),
(745, 'D', 10, '27017453278'),
(746, 'D', 11, '27017453278'),
(747, 'D', 12, '27017453278'),
(748, 'D', 13, '27017453278'),
(749, 'D', 14, '27017453278'),
(750, 'D', 15, '27017453278'),
(751, 'D', 16, '27017453278'),
(752, 'D', 17, '27017453278'),
(753, 'D', 18, '27017453278'),
(754, 'D', 19, '27017453278'),
(755, 'D', 20, '27017453278'),
(756, 'D', 21, '27017453278'),
(757, 'D', 22, '27017453278'),
(758, 'D', 23, '27017453278'),
(759, 'D', 24, '27017453278'),
(760, 'D', 26, '27017453278'),
(761, 'D', 27, '27017453278'),
(762, 'D', 28, '27017453278'),
(763, 'D', 29, '27017453278'),
(764, 'D', 30, '27017453278'),
(765, 'D', 31, '27017453278'),
(766, 'D', 32, '27017453278'),
(767, 'D', 33, '27017453278'),
(768, 'D', 34, '27017453278'),
(769, 'D', 35, '27017453278'),
(770, 'D', 36, '27017453278'),
(771, 'D', 37, '27017453278'),
(772, 'D', 38, '27017453278'),
(773, 'D', 39, '27017453278'),
(774, 'D', 40, '27017453278'),
(775, 'D', 2, '27017453278'),
(776, 'D', 3, '27017453278'),
(777, 'D', 4, '27017453278'),
(778, 'D', 5, '27017453278'),
(779, 'D', 6, '27017453278'),
(780, 'D', 7, '27017453278'),
(781, 'D', 8, '27017453278'),
(782, 'D', 9, '27017453278'),
(783, 'D', 10, '27017453278'),
(784, 'D', 11, '27017453278'),
(785, 'D', 12, '27017453278'),
(786, 'D', 13, '27017453278'),
(787, 'D', 14, '27017453278'),
(788, 'D', 15, '27017453278'),
(789, 'D', 16, '27017453278'),
(790, 'D', 17, '27017453278'),
(791, 'D', 18, '27017453278'),
(792, 'D', 19, '27017453278'),
(793, 'D', 20, '27017453278'),
(794, 'D', 21, '27017453278'),
(795, 'D', 22, '27017453278'),
(796, 'D', 23, '27017453278'),
(797, 'D', 24, '27017453278'),
(798, 'D', 26, '27017453278'),
(799, 'D', 27, '27017453278'),
(800, 'D', 28, '27017453278'),
(801, 'D', 29, '27017453278'),
(802, 'D', 30, '27017453278'),
(803, 'D', 31, '27017453278'),
(804, 'D', 32, '27017453278'),
(805, 'D', 33, '27017453278'),
(806, 'D', 34, '27017453278'),
(807, 'D', 35, '27017453278'),
(808, 'D', 36, '27017453278'),
(809, 'D', 37, '27017453278'),
(810, 'D', 38, '27017453278'),
(811, 'D', 39, '27017453278'),
(812, 'D', 40, '27017453278'),
(813, 'D', 2, '27017453278'),
(814, 'D', 3, '27017453278'),
(815, 'D', 4, '27017453278'),
(816, 'D', 5, '27017453278'),
(817, 'D', 6, '27017453278'),
(818, 'D', 7, '27017453278'),
(819, 'D', 8, '27017453278'),
(820, 'D', 9, '27017453278'),
(821, 'D', 10, '27017453278'),
(822, 'D', 11, '27017453278'),
(823, 'D', 12, '27017453278'),
(824, 'D', 13, '27017453278'),
(825, 'D', 14, '27017453278'),
(826, 'D', 15, '27017453278'),
(827, 'D', 16, '27017453278'),
(828, 'D', 17, '27017453278'),
(829, 'D', 18, '27017453278'),
(830, 'D', 19, '27017453278'),
(831, 'D', 20, '27017453278'),
(832, 'D', 21, '27017453278'),
(833, 'D', 22, '27017453278'),
(834, 'D', 23, '27017453278'),
(835, 'D', 24, '27017453278'),
(836, 'D', 26, '27017453278'),
(837, 'D', 27, '27017453278'),
(838, 'D', 28, '27017453278'),
(839, 'D', 29, '27017453278'),
(840, 'D', 30, '27017453278'),
(841, 'D', 31, '27017453278'),
(842, 'D', 32, '27017453278'),
(843, 'D', 33, '27017453278'),
(844, 'D', 34, '27017453278'),
(845, 'D', 35, '27017453278'),
(846, 'D', 36, '27017453278'),
(847, 'D', 37, '27017453278'),
(848, 'D', 38, '27017453278'),
(849, 'D', 39, '27017453278'),
(850, 'D', 40, '27017453278'),
(851, 'D', 2, '27017453278'),
(852, 'D', 3, '27017453278'),
(853, 'D', 4, '27017453278'),
(854, 'D', 5, '27017453278'),
(855, 'D', 6, '27017453278'),
(856, 'D', 7, '27017453278'),
(857, 'D', 8, '27017453278'),
(858, 'D', 9, '27017453278'),
(859, 'D', 10, '27017453278'),
(860, 'D', 11, '27017453278'),
(861, 'D', 12, '27017453278'),
(862, 'D', 13, '27017453278'),
(863, 'D', 14, '27017453278'),
(864, 'D', 15, '27017453278'),
(865, 'D', 16, '27017453278'),
(866, 'D', 17, '27017453278'),
(867, 'D', 18, '27017453278'),
(868, 'D', 19, '27017453278'),
(869, 'D', 20, '27017453278'),
(870, 'D', 21, '27017453278'),
(871, 'D', 22, '27017453278'),
(872, 'D', 23, '27017453278'),
(873, 'D', 24, '27017453278'),
(874, 'D', 26, '27017453278'),
(875, 'D', 27, '27017453278'),
(876, 'D', 28, '27017453278'),
(877, 'D', 29, '27017453278'),
(878, 'D', 30, '27017453278'),
(879, 'D', 31, '27017453278'),
(880, 'D', 32, '27017453278'),
(881, 'D', 33, '27017453278'),
(882, 'D', 34, '27017453278'),
(883, 'D', 35, '27017453278'),
(884, 'D', 36, '27017453278'),
(885, 'D', 37, '27017453278'),
(886, 'D', 38, '27017453278'),
(887, 'D', 39, '27017453278'),
(888, 'D', 40, '27017453278'),
(889, 'A', 2, '27017453278'),
(890, 'A', 3, '27017453278'),
(891, 'A', 4, '27017453278'),
(892, 'A', 5, '27017453278'),
(893, 'A', 6, '27017453278'),
(894, 'A', 7, '27017453278'),
(895, 'A', 8, '27017453278'),
(896, 'A', 9, '27017453278'),
(897, 'A', 10, '27017453278'),
(898, 'A', 11, '27017453278'),
(899, 'A', 12, '27017453278'),
(900, 'A', 13, '27017453278'),
(901, 'A', 14, '27017453278'),
(902, 'A', 15, '27017453278'),
(903, 'A', 16, '27017453278'),
(904, 'A', 17, '27017453278'),
(905, 'A', 18, '27017453278'),
(906, 'A', 19, '27017453278'),
(907, 'A', 20, '27017453278'),
(908, 'A', 21, '27017453278'),
(909, 'A', 22, '27017453278'),
(910, 'A', 23, '27017453278'),
(911, 'A', 24, '27017453278'),
(912, 'A', 26, '27017453278'),
(913, 'A', 27, '27017453278'),
(914, 'A', 28, '27017453278'),
(915, 'A', 29, '27017453278'),
(916, 'A', 30, '27017453278'),
(917, 'A', 31, '27017453278'),
(918, 'A', 32, '27017453278'),
(919, 'A', 33, '27017453278'),
(920, 'A', 34, '27017453278'),
(921, 'A', 35, '27017453278'),
(922, 'A', 36, '27017453278'),
(923, 'A', 37, '27017453278'),
(924, 'A', 38, '27017453278'),
(925, 'A', 39, '27017453278'),
(926, 'A', 40, '27017453278'),
(927, 'B', 2, '27017453278'),
(928, 'B', 3, '27017453278'),
(929, 'B', 4, '27017453278'),
(930, 'B', 5, '27017453278'),
(931, 'B', 6, '27017453278'),
(932, 'B', 7, '27017453278'),
(933, 'B', 8, '27017453278'),
(934, 'B', 9, '27017453278'),
(935, 'B', 10, '27017453278'),
(936, 'B', 11, '27017453278'),
(937, 'B', 12, '27017453278'),
(938, 'B', 13, '27017453278'),
(939, 'B', 14, '27017453278'),
(940, 'B', 15, '27017453278'),
(941, 'B', 16, '27017453278'),
(942, 'B', 17, '27017453278'),
(943, 'B', 18, '27017453278'),
(944, 'B', 19, '27017453278'),
(945, 'B', 20, '27017453278'),
(946, 'B', 21, '27017453278'),
(947, 'B', 22, '27017453278'),
(948, 'B', 23, '27017453278'),
(949, 'B', 24, '27017453278'),
(950, 'B', 26, '27017453278'),
(951, 'B', 27, '27017453278'),
(952, 'B', 28, '27017453278'),
(953, 'B', 29, '27017453278'),
(954, 'B', 30, '27017453278'),
(955, 'B', 31, '27017453278'),
(956, 'B', 32, '27017453278'),
(957, 'B', 33, '27017453278'),
(958, 'B', 34, '27017453278'),
(959, 'B', 35, '27017453278'),
(960, 'B', 36, '27017453278'),
(961, 'B', 37, '27017453278'),
(962, 'B', 38, '27017453278'),
(963, 'B', 39, '27017453278'),
(964, 'B', 40, '27017453278'),
(965, 'B', 2, '27017453278'),
(966, 'B', 3, '27017453278'),
(967, 'B', 4, '27017453278'),
(968, 'B', 5, '27017453278'),
(969, 'B', 6, '27017453278'),
(970, 'B', 7, '27017453278'),
(971, 'B', 8, '27017453278'),
(972, 'B', 9, '27017453278'),
(973, 'B', 10, '27017453278'),
(974, 'B', 11, '27017453278'),
(975, 'B', 12, '27017453278'),
(976, 'B', 13, '27017453278'),
(977, 'B', 14, '27017453278'),
(978, 'B', 15, '27017453278'),
(979, 'B', 16, '27017453278'),
(980, 'B', 17, '27017453278'),
(981, 'B', 18, '27017453278'),
(982, 'B', 19, '27017453278'),
(983, 'B', 20, '27017453278'),
(984, 'B', 21, '27017453278'),
(985, 'B', 22, '27017453278'),
(986, 'B', 23, '27017453278'),
(987, 'B', 24, '27017453278'),
(988, 'B', 26, '27017453278'),
(989, 'B', 27, '27017453278'),
(990, 'B', 28, '27017453278'),
(991, 'B', 29, '27017453278'),
(992, 'B', 30, '27017453278'),
(993, 'B', 31, '27017453278'),
(994, 'B', 32, '27017453278'),
(995, 'B', 33, '27017453278'),
(996, 'B', 34, '27017453278'),
(997, 'B', 35, '27017453278'),
(998, 'B', 36, '27017453278'),
(999, 'B', 37, '27017453278'),
(1000, 'B', 38, '27017453278'),
(1001, 'B', 39, '27017453278'),
(1002, 'B', 40, '27017453278'),
(1003, 'B', 2, '27017453278'),
(1004, 'B', 3, '27017453278'),
(1005, 'B', 4, '27017453278'),
(1006, 'B', 5, '27017453278'),
(1007, 'B', 6, '27017453278'),
(1008, 'B', 7, '27017453278'),
(1009, 'B', 8, '27017453278'),
(1010, 'B', 9, '27017453278'),
(1011, 'B', 10, '27017453278'),
(1012, 'B', 11, '27017453278'),
(1013, 'B', 12, '27017453278'),
(1014, 'B', 13, '27017453278'),
(1015, 'B', 14, '27017453278'),
(1016, 'B', 15, '27017453278'),
(1017, 'B', 16, '27017453278'),
(1018, 'B', 17, '27017453278'),
(1019, 'B', 18, '27017453278'),
(1020, 'B', 19, '27017453278'),
(1021, 'B', 20, '27017453278'),
(1022, 'B', 21, '27017453278'),
(1023, 'B', 22, '27017453278'),
(1024, 'B', 23, '27017453278'),
(1025, 'B', 24, '27017453278'),
(1026, 'B', 26, '27017453278'),
(1027, 'B', 27, '27017453278'),
(1028, 'B', 28, '27017453278'),
(1029, 'B', 29, '27017453278'),
(1030, 'B', 30, '27017453278'),
(1031, 'B', 31, '27017453278'),
(1032, 'B', 32, '27017453278'),
(1033, 'B', 33, '27017453278'),
(1034, 'B', 34, '27017453278'),
(1035, 'B', 35, '27017453278'),
(1036, 'B', 36, '27017453278'),
(1037, 'B', 37, '27017453278'),
(1038, 'B', 38, '27017453278'),
(1039, 'B', 39, '27017453278'),
(1040, 'B', 40, '27017453278'),
(1041, 'B', 2, '27017453278'),
(1042, 'B', 3, '27017453278'),
(1043, 'B', 4, '27017453278'),
(1044, 'B', 5, '27017453278'),
(1045, 'B', 6, '27017453278'),
(1046, 'B', 7, '27017453278'),
(1047, 'B', 8, '27017453278'),
(1048, 'B', 9, '27017453278'),
(1049, 'B', 10, '27017453278'),
(1050, 'B', 11, '27017453278'),
(1051, 'B', 12, '27017453278'),
(1052, 'B', 13, '27017453278'),
(1053, 'B', 14, '27017453278'),
(1054, 'B', 15, '27017453278'),
(1055, 'B', 16, '27017453278'),
(1056, 'B', 17, '27017453278'),
(1057, 'B', 18, '27017453278'),
(1058, 'B', 19, '27017453278'),
(1059, 'B', 20, '27017453278'),
(1060, 'B', 21, '27017453278'),
(1061, 'B', 22, '27017453278'),
(1062, 'B', 23, '27017453278'),
(1063, 'B', 24, '27017453278'),
(1064, 'B', 26, '27017453278'),
(1065, 'B', 27, '27017453278'),
(1066, 'B', 28, '27017453278'),
(1067, 'B', 29, '27017453278'),
(1068, 'B', 30, '27017453278'),
(1069, 'B', 31, '27017453278'),
(1070, 'B', 32, '27017453278'),
(1071, 'B', 33, '27017453278'),
(1072, 'B', 34, '27017453278'),
(1073, 'B', 35, '27017453278'),
(1074, 'B', 36, '27017453278'),
(1075, 'B', 37, '27017453278'),
(1076, 'B', 38, '27017453278'),
(1077, 'B', 39, '27017453278'),
(1078, 'B', 40, '27017453278'),
(1079, 'B', 2, '27017453278'),
(1080, 'B', 3, '27017453278'),
(1081, 'B', 4, '27017453278'),
(1082, 'B', 5, '27017453278'),
(1083, 'B', 6, '27017453278'),
(1084, 'B', 7, '27017453278'),
(1085, 'B', 8, '27017453278'),
(1086, 'B', 9, '27017453278'),
(1087, 'B', 10, '27017453278'),
(1088, 'B', 11, '27017453278'),
(1089, 'B', 12, '27017453278'),
(1090, 'B', 13, '27017453278'),
(1091, 'B', 14, '27017453278'),
(1092, 'B', 15, '27017453278'),
(1093, 'B', 16, '27017453278'),
(1094, 'B', 17, '27017453278'),
(1095, 'B', 18, '27017453278'),
(1096, 'B', 19, '27017453278'),
(1097, 'B', 20, '27017453278'),
(1098, 'B', 21, '27017453278'),
(1099, 'B', 22, '27017453278'),
(1100, 'B', 23, '27017453278'),
(1101, 'B', 24, '27017453278'),
(1102, 'B', 26, '27017453278'),
(1103, 'B', 27, '27017453278'),
(1104, 'B', 28, '27017453278'),
(1105, 'B', 29, '27017453278'),
(1106, 'B', 30, '27017453278'),
(1107, 'B', 31, '27017453278'),
(1108, 'B', 32, '27017453278'),
(1109, 'B', 33, '27017453278'),
(1110, 'B', 34, '27017453278'),
(1111, 'B', 35, '27017453278'),
(1112, 'B', 36, '27017453278'),
(1113, 'B', 37, '27017453278'),
(1114, 'B', 38, '27017453278'),
(1115, 'B', 39, '27017453278'),
(1116, 'B', 40, '27017453278'),
(1117, 'B', 2, '27017453278'),
(1118, 'B', 3, '27017453278'),
(1119, 'B', 4, '27017453278'),
(1120, 'B', 5, '27017453278'),
(1121, 'B', 6, '27017453278'),
(1122, 'B', 7, '27017453278'),
(1123, 'B', 8, '27017453278'),
(1124, 'B', 9, '27017453278'),
(1125, 'B', 10, '27017453278'),
(1126, 'B', 11, '27017453278'),
(1127, 'B', 12, '27017453278'),
(1128, 'B', 13, '27017453278'),
(1129, 'B', 14, '27017453278'),
(1130, 'B', 15, '27017453278'),
(1131, 'B', 16, '27017453278'),
(1132, 'B', 17, '27017453278'),
(1133, 'B', 18, '27017453278'),
(1134, 'B', 19, '27017453278'),
(1135, 'B', 20, '27017453278'),
(1136, 'B', 21, '27017453278'),
(1137, 'B', 22, '27017453278'),
(1138, 'B', 23, '27017453278'),
(1139, 'B', 24, '27017453278'),
(1140, 'B', 26, '27017453278'),
(1141, 'B', 27, '27017453278'),
(1142, 'B', 28, '27017453278'),
(1143, 'B', 29, '27017453278'),
(1144, 'B', 30, '27017453278'),
(1145, 'B', 31, '27017453278'),
(1146, 'B', 32, '27017453278'),
(1147, 'B', 33, '27017453278'),
(1148, 'B', 34, '27017453278'),
(1149, 'B', 35, '27017453278'),
(1150, 'B', 36, '27017453278'),
(1151, 'B', 37, '27017453278'),
(1152, 'B', 38, '27017453278'),
(1153, 'B', 39, '27017453278'),
(1154, 'B', 40, '27017453278'),
(1155, 'B', 2, '27017453278'),
(1156, 'B', 3, '27017453278'),
(1157, 'B', 4, '27017453278'),
(1158, 'B', 5, '27017453278'),
(1159, 'B', 6, '27017453278'),
(1160, 'B', 7, '27017453278'),
(1161, 'B', 8, '27017453278'),
(1162, 'B', 9, '27017453278'),
(1163, 'B', 10, '27017453278'),
(1164, 'B', 11, '27017453278'),
(1165, 'B', 12, '27017453278'),
(1166, 'B', 13, '27017453278'),
(1167, 'B', 14, '27017453278'),
(1168, 'B', 15, '27017453278'),
(1169, 'B', 16, '27017453278'),
(1170, 'B', 17, '27017453278'),
(1171, 'B', 18, '27017453278'),
(1172, 'B', 19, '27017453278'),
(1173, 'B', 20, '27017453278'),
(1174, 'B', 21, '27017453278'),
(1175, 'B', 22, '27017453278'),
(1176, 'B', 23, '27017453278'),
(1177, 'B', 24, '27017453278'),
(1178, 'B', 26, '27017453278'),
(1179, 'B', 27, '27017453278'),
(1180, 'B', 28, '27017453278'),
(1181, 'B', 29, '27017453278'),
(1182, 'B', 30, '27017453278'),
(1183, 'B', 31, '27017453278'),
(1184, 'B', 32, '27017453278'),
(1185, 'B', 33, '27017453278'),
(1186, 'B', 34, '27017453278'),
(1187, 'B', 35, '27017453278'),
(1188, 'B', 36, '27017453278'),
(1189, 'B', 37, '27017453278'),
(1190, 'B', 38, '27017453278'),
(1191, 'B', 39, '27017453278'),
(1192, 'B', 40, '27017453278');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `psikokategori`
--

CREATE TABLE `psikokategori` (
  `psikoKategoriID` int(11) NOT NULL,
  `psikoKategoriAd` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `psikokategori`
--

INSERT INTO `psikokategori` (`psikoKategoriID`, `psikoKategoriAd`) VALUES
(1, 'Sayısal'),
(2, 'Sözel'),
(3, 'Hafıza'),
(4, 'Dikkat'),
(5, 'Şekil Uzay'),
(6, 'Ek Resim');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `psikometrik`
--

CREATE TABLE `psikometrik` (
  `soruID` int(11) NOT NULL,
  `soruResmi` longblob NOT NULL,
  `SoruCevap` varchar(45) NOT NULL,
  `psikoKategoriID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `psikometrik`
--

INSERT INTO `psikometrik` (`soruID`, `soruResmi`, `SoruCevap`, `psikoKategoriID`) VALUES
(2, 0x89504e470d0a1a0a0000000d49484452000002ca0000021608060000004e6aab14000000017352474200aece1ce90000000467414d410000b18f0bfc6105000000097048597300000ec300000ec301c76fa8640000172449444154785eeddd0d72da3a0386d1ae2b0bca7aba9a6ea68bc905826dd97ee51f61d35c3867c6f3cdb401642c4b4f487abf5f5f0000c08c500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca00001008650000088432000004421938c1dfafdf1fbfbe7efdfaf5f5f1fbeffdcff8fbfbe3f69efcfaf87d7987cee4fde73db4de537f3ebfef8fd171fa7dc9ff91507e9a61e372632ef8fbfbebe3f6de7c7cd9dfffcf7e78a8fda3792694e158bbefa9fedeaf1f9f7fee5f0b1742f919fe7cc69b71383ebfdc9777c57b65b1fa3ffbe1a1f68fe699508663b586f2fcbefff3f5797d9edb614f662094cf567ef71a6ee4ef1fffb8297b3e517e113e514e84321cebd87b6a8865f70d1da17cb2fe2616c3bc15a196086538d6d1f754ffbbcb7ea4c99d503ed9f33646f849845a2294e1584299b309e593f53771c38f78e3bfcaad7e323d6c8cdff777f9fb56c5ef633dfa23e7f4fbd661811ace7be193f43496eaf8baf31bfe7cf6feec58d8362dae0bef55dbb53966eca5e17d2e8f85f77ce3f5fb361ff7fcf5d6e763176a4de7bc6bbcdfe6639c5fbffab53de65acd1e731ff3a679d770ce73f3f77f50ac0de179f7cded419a8bdb22fd91795678706eb75ce774cec7df7f2b6b7ae981b9339ccbc2f80f5f13b79fdbee7b6a61ac757ef58239a17cb6fe66bd1e1b16fbabd163f2315f488a85e7f7fcf1fdd7372d1e57c3f3e763f27cc539c405fd222e70d5f1151bdb9fa5f767ff7bdc36befa51bf36078dfd66bcb1cc8ed9e6b8f3fadd14e3febbf47a4b8fbd6e38bf171ebbbe91e663f93557bffeb479b67c5d3e3e2a9bfa4dcb39d794efffe8c48bd7989c43d3dcbeda3b17a78af77cf73cbb6a79df8ad73ce13a1f7bff5ddef7a535fda6e5f927fec99ab8e5dc1aefa9ea3d5e53be875b1fc33b10ca4f307ca77e3fd6368efb0d3eff8eb6b8915717e2ca8dbe7bf1f8367c373fdd386a632afe3caebac3df8fceb33abee9f94d16d3e293947d9f625d8e86f13d766d0e1c7bb88eb76b3519c3feeb77351f77be56db1ebbe79c9bc6db3f670ac0c9fb74d23c1bc63d79dee271b763f67e359e73d5f098619ce5b94d5fe3a2696e2f9cf3c5edef56c73c7fcfb7cfb3d6f76dfe9adbaf73f9d867de7ff3d7eab43dff54f1b54f5f13b79cdbce7baa7a8f17cab9551cf373e19d09e56799ded4b7236c566bfae7595810372d0c0b5f33d53fa636dee13bfe727d1dbe41088fab8da33abef5f3eb17d4d50de15bd3f8963c706d768d7defd81aafdf96710fcfbdffb1d5736e1c6f7f3de3263f517d0f8f18f7f4bde8149f8c1d74ce75c379749bfe101cb5d758509bdbd5f7718f07e659f3fb76c475de78ce278ef1a6f9f9e77ed29a78d3bf666dec5beea96dcf9fc70942f9e9669f2e5f8e5ddfbd5617c5f9c618352c765b02a4db54c6af5d5fa0fbe7dcbcb8ad9f5ff539ab1ac6b7e4816bb3e7f5f68eadfffaddd76fcb9caa7d4dfb39b78eb77fdc96b97dc23c1b5ebfbed91e7dce75e3f3a846df5695b95d3b9f7ddae759fbfb76c075de78ce678ef1aafdf9939fb3265ef5afd9704f0dafbd21941f9abfbc3aa1fcaf4c3e618e6b5c7fa3a7a36de1d9b4784cf49bec96637222fd63477fbe30d6eaf8369c5ff79eee58f4768faf73f4b5d931f63ce6baf6ebb76d4e35bf8795733e62bcdf477d733d639e6db92eb54dbdfd9c6ba6efc5e5d87a5fec98db5bce795dfb3c3b62ae9c719d4ba78ef1a2fdf9b37c7e1bc672f49a78b1e5bd16ca9c4d28ff53b51f1b0d8b48fdf899a13c7bed6eb329c7bb3486eadf6d38bf1db1d95b1cdff43dbe3ae9daec18fb96cda3d47efdb6cda9e68d752d44361ce9b9d3e3676fd509f36ccb7539229497aec5a03c8fe21f532ece99e131f5633cb7b79cf3baf679d6febe9d7b9d4ba78ef1a2fdf92b16d7c4b46fec9f378f5cf329a1ccd984f23fd6dfe4c54232fc595844aa11b76de1d9b4784cecdd18c6e63fcaebcf2f3d5f757ced1bdbb2617cddf32e8defb46bb363eccd1bf5eeebf7c866d67ece8fcdb742bfe17f1fe3e11d3fcfb68cbb9f3f679d736f721ec57b513baf96b97dccb8dbe759fbeb3f6f7e9e3ac68b63ae4169df9a7dda9a78b1e5dc6af7d4f0da4299c708e57f6c5864ba856465017970e1d9b4784c2c2d925b8c17bb619cf1e9aae3db707e958d6dcd78a15d1adf89d766c7d8ab1b4345fbf5db30ee62531d7f4dfb393f3adfa6faf957bece09f36ccb75a97dcdd1e79ccea37f8d78efaf9c77656e6f39e775edf3acfd7d3bf73a974e1de345fbf3d76d5fb3dbe6cdee736bb8a786d7debed7412294ffa961b11816b99505a45bbc9f18cac36b362e38e598ab0be75d757c1bceafb2b1ad2a5fb3ff6faaa6f19d786df68c7df57a5ca3a218c3ead7d70ce3ae5eafea733f70cecde3cde2467ac63ceb9fb3f24de0edba7cfffdd9e75c3b8f3e80f6ced17e7c93c71d32ee07e659f3eb9f393f8fbfffaa63bc6a7efe05fd735ece6371cd6e9c375bcfed917baa7a8fc33e42f954dd4dbcbcc04c178161331bdfe0fd861f9f73efc2b367f128c79a1ff73de6749e57c5d8baff387c5ef516c6b7e1fcba4579ba60ae1a5f8ba5f19d766d768d7de17ac48d69e1ebeff2f59bbf2fa3b7a5d8c4e6e37ee49c5bc67b7fccecba151b69f977a7ccb38571f7d7e57e1c72ce4b6ae7510f8bb6b95d3c5f18f7b63197e7fe7db4ccb37def5bedfd293c749dc3dc3c638c37adcfbfa478ed9535bb6dde1c706e6bf7d496bdae7f8e85afe1ed09e553959b48fd982d14e5c6303b3e2e0bd7f57f1b179e2d8b47b4e55cea0bf178d1ac7d3a70714ac0ac1b8f6fe1bd39ebdaec1dfbe238d2ebb45cbf62dc9f9f0baf97aefba3e7bc77bcc3ebe56332c6b3e6d9cafce87f6271c8392f59388f728cf19b8774d4e6f6c5ca5c5c9fd38fccb3ab07e7f6e1d7393de74963ec1d3977beed5fb3d3f1e07e75b5f2fcd57baa7f5c7d3d2fcfb17a7ebc3da1fc04c377dc93637103090bdfed4eee1698c68567c3e2b164ba78f6c7da2a532e764be75d1ddf831bdbaae2fd5e7dfc09d7a669ecc3f30ec7f266b8effa4dc71d5eaf7add8f39e7d6f1ae7eeda9f36ce17dea5ef7b073ae59398fee1c2ec7f869f7ceed4e7eefabefe1c874ac0befdf82c7e676d0729d4fbdffd61d3377eeb6aed93727ed57bdf05e77e754bba7aaf778a1bf0fdaf643de8350869bfd9bd2ebf39eb053171ebbc2cc3c037e2ea10c575b3e7d783b0286bdba39b3e73e32cf809f4b28c345ffeb31ab3f627c270286fdba7b69fb87cae619f0730965287ebfce465d12306c937e37562803af402843ff0f3a96ff21cefb11306c330de57df3c53c037e2ea10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c00008150e6c986ffbbe85f1fbfbffcff70712ef38d6733e7389b39f64c4299a7fbf379bfc17f7d7cf97face56ce61bcf66ce713673ec79843207f8fbf5fba3bb69bf8fcf3ff7bf4afe7cf65ff7b1e30e1f1686eeb040bc9d62eecc8fca7c689c6fdfe673dbbc7b67693e5c8fcfafd192f7d09cbb2a3e3134df5ed7e27a763d26f3aad434c7ca79158ec58dfb7d09651ef7f7f7d7c7ae1b6ee78f8d561613f7f6fbf8fbfb23ce81d1319b108d3fa634ef28accfbd32681ffbd1f8f8b584f2cb5a0de5fb11e750cb1c13ca2d84320f1b16f58faf8ffed39685ef842fb7f4f0a9cc864de0b698ccbf6ef88479e9b5782565408c3e45196d38d3b9b273be75e2bc2b9eab2180f87f9a46f2fc7bb1e95c699c7357dd070f1f9f5f9fb7e7d8f978fe3fca756b3aa9a61f40cdd69b9639d685b23d730fa1cc83c6e1f0a7d85096be392d379ef66f62bb9bde46f22eaaa13cda34e673ea98f976d7878c507e0b9360d93a7f5ae7dcf70700d735ad9bd3d6b797b514ca37e34f80a7bf62b17f8e09e5164299c7149bc8ed262e3795a590281688edbf5f352594dfcdb6500ef3e190f976d73dd7c3c5cdff4139e7765df39639777fccf7d70be59757cc91eadc2abf66baa7ee9e6342b98550e621f37f79bb122c9d2d0bc49a3ecaddf4efa21aca4b9bc9d511f3edaa9f73e2e53d8c7f52b1eb9bacdd73ae7bad6e3d13ca2f6fd31c293f559eec75bbe7d8f813eaf27864597c7542990714375d1127e57f9da2bab16cfde47941174dbb362ffed7469feea5a3b6dab7ceb7f271fde11bb3f7310e8b5d31b173ce75737b780da1fcf23685eec2874fbbd7b57a28df0eb51c0965da1537f9ae4ff7ae1e0de5fef1a2e59dac86f2ed0873a275be958f1b1de6dd7b785228775f3bfa3aa1fcf29e1ecad9fc27c3948432cdea3757b9b9546ebc876ef0eef9ddd4efa6faab17a3cde4724c379d833694f1eb88e5d7f79c501efe01dffd0f6e84f2cbfb21a17cd5ede77e423b279469546c20e1065dfdf58be61b7c78dd5d9b162fa11eca17e59c9a46ec811bcae5c9fa8dcba6f2eac6df80edbade5be7dc3d96e6cf2d945fdea6502ebf593b6f5debd7561beb8c50a64d7983af1de9066ebac145f2bb5b0ce5d18672de272f57dd3884f2eb2bbfe9df15111be75c39a7d70eebde8bd912cae5d74ce7d109a16c4d9b13ca34196d1e1b8ed91ab0e93be99248661c15cba13cf9e465f77c5be6c7946f64f4a1c08e4f7737ce39a1fcc656e748b9a61db18fd60c3f3931c7e684320d1682a4b0f8494c7183afc646f15db39bf8bd2d85f261f3ede6be71840937bc8e1f89bf8bf10703e1badfe6d7e4cf77cfb929bf7af1f29642b7fcb4f87aa44f8c77cdb1ef7d7bfe75c5af171df0d3b6572494d96fe9e62e955f3709ea72e3598bdff1265539dce06f61d3a76f612eec996fdf8acda3726c7b1e5ec3fa7c9806edfe393725945fde688f5c382afbdbbe3936fe747a7e9867354299ddb6df9cb51f1b959bcefacd2994e9ad6c2c793eee9b6f23f1f5ea3f45e1c54d3fe5abce8907e65c4f28bfbcb5505edcd75ae658f998e268fb4eee6d0865fe8122a0052ea733df7836738eb39963cf229479bee2bbe8b6dfdd831dcc379ecd9ce36ce6d8d308659e6ef8550a3f52e47ce61bcf66ce713673ec7984324fe6c7453c93f9c6b399739ccd1c7b26a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c0000335f5fff01b793b925ea29e9a30000000049454e44ae426082, 'B', 3),
(3, 0x89504e470d0a1a0a0000000d49484452000002c80000021608060000004a9f7b29000000017352474200aece1ce90000000467414d410000b18f0bfc6105000000097048597300000ec300000ec301c76fa864000017e849444154785eeddd0b769b4a1a85d18ccb03ca78329a3b991e4c5aaf4207a89f876c62c9da7b2d56df96254050509f6527f9f5170000180864000008021900008240060080209001002008640000080219000082400600802090010020086400000802190000824006008020900100200864000008021900008240060080209001002008640000080219000082400600802090010020086400000802190000824006008020900100200864000008021900008240060080209001002008640000080219000082400600802090010020086400000802190000824006008020900100200864000008021900008240060080209001002008640000080219000082400600802090010020086400000802190000824006008020900100200864000008021900008240060080209001002008640000080219000082400600802090010020086400000802190000824006008020900100200864000008021900008240060080209001002008640000080219000082400600802090010020086400000802190000824006008020900100200864000008021900008240060080209001002008640000080219000082400600802090010020086400000802190000824006008020900100200864000008021900008240060080209001002008640000080219000082400600802090010020086400000802190000824006008020900100200864000008021900008240060080209001002008640000080219000082400600802090010020086400000802190000824006008020900100200864000008021900008240060080209001002008640000080219000082400600802090010020086400000802190000824006008020900100200864000008021900008240060080209001002008640000080219000082400600802090010020086400000802190000824006008020900100200864000008021900008240060080209001002008640000080219000082400600802090010020086400000802190000824006008020900100200864000008021900008240060080209001002008640000080219000082400600802090010020086400000802190000824006008020900100200864000008021900008240060080209001002008640000080219000082400600802090010020086400000802190000824006008020900100200864000008021900008240060080209001002008640000080219000082400600802090010020086400000802190000824006008020900100200864000008021900008240060080209001002008640000080219000082400600802090010020086400000802190000824006008020900100200864000008021900008240060080209001002008640000080219000082400600802090010020086400000802190000824006008020900100200864f871fefbfbfbd7afbfbf7efd3efd1757df754cfef7f7cfc779bb1f7ffffceff6d09afffdf9fb71d9d7587e3b9300ffd23705f296c9ea4526f96132db31011ee159f6e32739e2987ee53acb75bd7120ef3d26875f37452057dbfdeff7e9b1f3e3bde50dcf27c03711c89f75f804bbd1b3ecc74f72c4312dd7f9994f1aa7af11c89b8fc9e1d7cd0381fcf1e7f4aa303cf7d7df8f6376128009810c4fe181402eb976e6beeb987cd1796d9f2c4fe31980430864780a02f9582f1ec8ce29c03ff5a281dc269df1d2fdf163fbf1e4ed0fb9fcf77bc36b2efadb1896e10fcd3c3071c58f4ce7ebbbfadf9f8fcbe3d5fecdbf5eecc7c3efbf63f6fb91c5a47fc4fbbb6dfbf2ff73fd0b3f8e1e96c9b607d3f733fb74ee8173bb7a8ce6eb9c9e935caa5dbfaaf66f65bff71ca39ea71e077b8fc9fcf1ddfbd474c75315c82be768e6f67c9f2003fc13af17c8b3c979bccc26ad36897e7ccc27ebdb329f08dbb6179661a2df37d1b5c9b5bbe4e437ec776f426cdbcc49b7d88f87deff5c1d71e389ffb0f7d7c2e8f43eaa756edef659318ec6c762dfb9dd768ce6ebfc9781bceb18753cff38d87b4c3a8f2fee533f7897cee175193fbfde9f421baf7bbe9101e061df1cc85b96c904729b2866f3449bd4a6cf1f1ebf2ef9bafb243e7ecdf0f868826cfbfc8989aedac761d2cd40ab3e793ae94e96c57e3cf0fe678698ecbff7619d47bebf611f7aeb3ff9826d9f8fc7c381bcf51895eb5c381ea56a5dc5e3bb8e51c72b8c83dbbe6c3e26ddc7effb999bbee8ed535c63a3e7c7e3d531ebbf8789f278027094d70be45231d10e934b2f3cda7e8cbf76fd3468fefc1694e34973fb4457adf7a2ed67acbc6d6f1a2dedd3aa4dfbf1c0fb9fea6f6feed0f7378451ff38efdbf642948dec3db7ebc7a85ee7d67d4ad5bafa8fef3d3f535bdfe3deed7ce538383d61d731a91e6ffb343d1ebd7daaf6ffaa3aafd5fe34edebb7a5fb6936004779d93fa4374c60b3653211b50979f78f4be7137cdbe678cedcf25ecedab65696dccfb6efa37557db2b1e7fe0fd8f6d0db783df5fef93bbc103dbce4f22bbeb3cdb7b6ed78ed159b5ce3deb68f68c85078ed1c8d6fd7b603b5f360ecef61c93b33d8ff79fbbfc8d4375dcaaed36b7af97e7038023bd5e200f9369b54c26a20702b1ffe951db9fbd135df348a0dc5f33ec4a19082bc76bc7fb1f7b92f7f7d5817c9691dcfbfae6f7bef57967d573b79c8ba96a5dbdc71f3c4683adeff13bc7c1d99e637256bfaf59f876b7bd76deaaafaf1dcfdbebcaf301c0915e2e90dba4359f388a89e8a1406cdbee2cb38979cb7b395b9b480b9349b9feb4aad88f2f0be4b5fd3ef8fd2d86d183db1ec4f91e1da7ade776eb313aabd6f9c87ba8d6d57bfcab8ed1daebbf731c9ced392667d5e3279bf6a9bddfde3579561d8f85ed5edc5e279001bec58b05f2d2e45b7c6d7720de1ffbb8fcef7de9ff8ee196f77255c7ed925cffedbfbbefa5d88f4f07727bcefa7e1ffafe56c2e8b16da7deb1288ee9ccf66354af73cbb998aad6d57ffc73c7e835c641f5def73f7eb66d9fdafbfddadf4106e03bbd68204f27a3fbe3b389687720d61361df8e89ae4deea7653ebf5fd7d39bf787e0f87d7dfdae50ff74209f57d17edfbb3fc90ffb7ce4fb5b0ba35ddb3effff2dc1d27bac6ff3315a58e77268f554eb2a1e7ff0fc342f310eaaf7befbf1abf69edb5f2bb7b84fa765b45beddabb2c5bc65b5afb3a00477abddf418ec9a8bf4c26a2470271711bd37dde3791b508a896eebc3fda9fe944db14fbf105817c7f5e7fc97d3eecfdb5e79461b467dbed587596d1faf79cdbadc7a85ee73d407bafeba9d6556fe3a1f333788571b0f798d4c7ea623172efeaf7fbfb14fce7ff9dbe76eb768baf0370a8d70be4b3d1a4755eae93cf35302613d10381b836b98f9fbfe5bd4c8c42a0b7cea9b68dd3527eb25decc79704f2d5fcb814af3be2fd6d08e48baddb9e8da1dea783fbcfedfa315a5ee7f8f56be7a55ad7ca7eef3e3f63cf3d0ef61e939563355c23a7a5bcf6ae66dfe0dcf6f17abcf68d83f5af0370a46f0ae427d626e062326c71b0fdc7e03fcd75e27edff7bfc53b1ca3f71907ed9a5ffbde0c809f43204f2d7e4275ff34e99d27cbeb27653ed95af20ec7e83dc6814f7201de91409e6913e2c2b2f2a3d61fa9f8b516c23b1ca3371b07c3af4df8f818e0ad08e4c2fcf72cafcbfbce93e36f1cfc8a45cf3b1ca3771a07fb7e471f809f432003004010c80000100432000004810c0000412003004010c85f22fe64ff3bfe15707c03638e67656c7234638ce309e42f72ff6be1fc9550fc1bc61ccfea678ccd1661fe919867e4fec7d10472e9feafe6b565f1ef406eff02df69d9f677c3c677c0b3c505ff7662fccc97623cec1e7327ed1ffae87eea721ff3fe9e6bfae6f7c5eb3289c81d6373f8c758ca4f020ffe174c877ffc667a9d09e4c32ddef7cecbc2b17fe4fe77d3fb770efc5b404c09e4caec5f0c3b2dcb85bcf3473e4b817c5d5cb0ef638884a5653620f68eb99385401e260d038f8ef5319a81b9676cde9fdb1d7a2d84b68ef1bd04f2f7590de4dbd23df70fdcfff235b3c507538c09e4c27d32f8f8fb317c62b274a3cc4f56b65c68f5cd770895a326049e4ec6c7e8d390d104321d577bc7dc4911c8eb9fe2f1cea6713cff5eed3c4e730cee1b9bf5f83bf8d3e34502f970797f9b9ee0e987540b6363ebfdaf9c5b2fdbda780fe56d08e4aeb8f04e17d27f31392cdda4731259bf992fdd7cdd98df4d19c8a349603eaef68db9935e200f9394f146c72454368db393c7ee8793e7b6b1398ba37fc17df8704b817c711f17e765faab14fbc6d8777eb3c52b12c83d31215c2ec89c20966ed471b1afff4ed4c2cd77d85e71639e4c58976572c5b71b47b51ffdaf8f63ac2df375f49f775d7c17fe88bcd1d7e7a4736c778db9933676da381ec65275de8a717adbee659bbdebe3f6d8759fa6e325d7359e009727c97cddd631b8709db1498ecd5dbf7eb3736c0edb19eeb1f7733cdbec867be02023ecbccceee1d51831760e97e766cbf99b9ebb5d63ec3e9e36dd2b2ffaf799eeeb6ffb72f95aef9e683cbd1c81dc31ffd3b179912c04e0968b7d505d2ccb17f168b29a2e79f36817e86c32386bdb88f792fbde59a6fbd2fb430ed765e1f8502a0379697238db35e64e46e3a28dc1a54f548a71da26838fc9786cfbd802f9f7ef79c85c96df7fff546379b633fd7dd836064d4a9f330e846e1854f68ecde97da9b8876dbe079e15f7b5f1fba8c688b173b84d63a49d87ceb9d839c672ecac3ebd183b6d995d0bb7e797f744e3e9e508e499b818e3669b9371394974bf6bace4453f5fba17efb0fee905d68beafb63b375b50b3fbf707b6cf6dc729b13c564c6368b93fe79a9eee6bbc6dc499ca73fb731bd1c3dc54d7d347974c646ee5706ebe8f1c96b87754ebfc9da38b174c7a049e973c6f7a96a1876ed1d9b67716f6af7dcd13687754ecfe7d23d703c9eced7da78cc5763c4d8395cde47cac1753fb7b37bc303636cfa8d75b9d9bd73e2da3dd1787a3902792a06f9e8269a83bfba10775dace389a7bb4caecceb853d8d879bb6ed78cd105dddf56c9decfa93cc587b2f4bcf61c96a205f96ce8d75ef0491cfbf2d9f0be4e2665f4d2227c37b9ded6ff54ddd9689a51a835b5e4bad1dbfde7959b1776c5e640ccd5fb7ef1eb8e5de75568d1163e77039af9683eb6b03f9a2731fdc3eb68b71b5764f349e5e8e409eb87f77594db4bdafddecba58172e9658cffcd3909565b4ddde36962fd23ad4ea49a61db3e5d062491ef7f1719c9cf7e95d7cef04d19e7f7eeef0dafadc96e3a54d06d5acd2d6ddfbfaedb5bdf1d2ffe66d79cc9ed56370fdb52c69c7af775e56ec1d9b4d44d3787b0fdc0337055835468c9dc36d3a3f0704f2607d7c6f9e13d7ee89c6d3cb11c82371b1742eb67b3c1731b8eb625db958dac536ace79140beeff370cd561771ee7b77e947d470f3286f0a6c5107f2c9e8dc4cc6cbde09a23dbf3d7798a0aa9b76314ed72683b69dded76faffdaa405e1e8326a5cf19df77baf7bdcadeb139a8ced963f7c0fb182fbe5e6ecfd8395c9e9b720e69e7a1732e1e1e6363f7fb6fac3fd7dd5d04f24f2790d3f446bab4f42ec65d17ebcac532acab7dbd4d0e4b9ff6754c2eda7e80dc1f9feff7c27667fbc8a3160379182b9df3b0778268cf8fe7d6e7feac18a76b9341db4eefebb7d77e4920af8e4193d2670de3e3bc54e7bb67efd81c54e7ecc17be020aea3d1fe54db33760e97736e35b6f239d371f4f0189b6ae7fa3eb676cf896bf744e3e9e508e4309a08362cb3eb60cbc53e58b958dabae2e2ecc7c39adcceedbfb75ef017d5d7dae37bf7879eed813c192fbbc6dc492790f35cd6db2eb65b6df39f04f2963158bd96cd728ced89d3bd6373509fb3c7ee81a9773fabb667ec1c6e758cb473705d664f79788c4d4dcf7535ef9d155f6bfb52ee87f1f46a04f2202fc47a008f227a7a21c4c5da9bfcc7162e96f8ae78b49e58fffc1abcaeaf776db6f86a7ffdcc7cdfaa40ba3f3ebd19b4e3b0fe3ed9622990bf6ecc9d7403f924c6dc7813c5385d9b0cfe41206f1b830bd7199b8dc6602f1a2ee7b40886d57334b570ce629df3a135bd079effff745f7bebaeb6b7b01f7c8d389fb37b45dc932ecbec839d933d63ecb6bef9f3629e1bf661ff9c38eccb7c60de184faf4620374b176acae74d067a4e224babb86a17cbc2d2b9218c27aaf9d2ddeee846d399dcce46efabb7e4eb96f77ddf64c8590672b9ac8c87f53177d2c6c2e264b3211ed62683c30379eb182cf69f9d320caa657c6fd93d3607cbe76cfb3d70618c8c76a8da9eb173b8d579e7b6f4ee5727bbc6d834b867cbe43cef9a134fd6ee89c6d3cb11c837db2fb4f14df7fedc85ef2cbb166edea765711fba17eed23663df8a1bcdc5ec06725de735de72fdcb93a5407ec0cacdb83f1ef68eb993a5403e19ae836183c54d7d6d32383c90b78e4193d2972a23637a7c1f189b830de76ceb3db0b3bff371576dcfd839dcca7d6f71befaccfd6fb29473d6ecf9d7edcce7c493b57ba2f1f47204f2976983ffb42c5ed4dfa31f1ebcb6e71e73bcb3671b9bb798729dfc20ee7f1c4b207f95f84ef8f93e41f59deb8ff4d4638eb7f68463b3fba91fafcbfd8f8309e42f72ff158de7bb010fbfdfeae3e31fe599c71cefed79c6e6fc5771dc067f06f73f8e2690bfc433ffa8a74d106e223f8b1f2ff2ac9e696c4e02591dff10ee7f1c4f2003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c80000100432000004810c0000412003004010c8000010043200000cfefefd3ff8e69881f35027990000000049454e44ae426082, 'D', 3),
(4, 0x89504e470d0a1a0a0000000d49484452000002c7000002180806000000819e41d4000000017352474200aece1ce90000000467414d410000b18f0bfc6105000000097048597300000ec300000ec301c76fa8640000143f49444154785eeddd8971a3ca0286d189cb01399e896692b9c1f86af91b1074b369b5744e15f5eeb336400dfd09b9c67f7e00008013710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e29819fffdfcfdfaf3f3e7cfd7cfdffff2a35bf9efefcfd79fc3737ffd3dbc0afc26373e2ecab1305cbeffe546001e4d1c57fdfbf91e4f56ddf27db8f541ba49f30e71ba8a387e35ffbecfe3b06ba77fdfe77179c57ebcc773d63cea75eeef86c745d907d5e581e71a003ae2b86a2e8ecfcb432eec88632e94f7e39681798fe7ac79d4eb3cc28de378bcfd832bc95fcf39f0013e9a38ae2a713cbe72d34ff09f7155e7861130268ef9b5ee785c14bff68303c0ef278eab5a717c546e7bd6d5dc4712c730f580389e3d0701704fe2b86a6e625a9818075f89764beb7730cad5a1b24c42b1b11e798df357ae657dca32bc6f797c96b9df05a9aecb0db775ac15c7dd7a8cf7fd783bcfcbecd7cee36d5a1b332bb6ebbfbf5fa79fb75e7fe9f65e7dbbba65b23f47ef6996ea6ecff69fd661b84d659fb7de8393c67b5f1e93172cbf475c96eaf66e7c9dfdfbf686fba6d8725cecd99f4dd996ea7301704fe2b8aa11a527eddbcaa45d5d9626dd2c97137ee3b532097f7d7ff793fac5f2fdf3b7b52e95521807ce74994ee89bb6b5a616125da48c5eafb1afca528ba8f636cdc7c9eaed9a0da1f2be2d8550b9dfcc3278bf66d7edb88cdfdb12805fa3c79575de1373dd63bef25e4d97c9fbb1f57576acd7cdf7cde92e839f5797d6bed9b03f5bca98af963d00f7248eab5a015c26b8caa45526c699c7f4d1d09ee0b7c4f16482bef8f9e8715d603626f4c372b149add738dab4ad0de5394a4874cf598987acfba4135aebd1dad6eccf666f6cdaaefa7b78b2326cbaa0bb88a9465877eb56d9b7ddf68eb66df0f3e9361d8cdf830b8ded1bacc7f8f5fa401dbdd6e6d7e9f7f76417d6f6ed3df7cdf87117dbdfd837d7c671f71a95f502e0eec471d5c215bdc98c7d9c6b8fb73526be32d9758f5b3b512ec5f174f2ac07d7513d38cafdeb315b5fcf6ddbda300c896e7b5684c385b9f5ab84d582addbd5da776b5fbff57ae579d7bf4ffded17fbbd0bc046640ddf83fca8d718a3b3efd542d86f789deaf61cd4f6ed3df6cdfc732eec9b5d713c3ae7549f03804710c75533713c9aaccfcac4b7b00c27bce195abea731e2dc471ed7179dedaa45e0b8bf990ab4de83bb6b5a68bacb234026ea08b9cc9525bbf5684b4ecd8ae6e1b86ebde78cf2ad6c7f18a6daa85591963adf1b527e61ef598ea7eacfdec3efb66fb7171b06b3b8b6c5bf5b1003c9238ae9a9b846b13d8e0b6b965fcb86120d76eafaec74199846b33f7a6385e9ab06bb7efdcd6b12e24be7fbef37cad2b7fdd7d9bcb70fd1afb6cd19eedea1fd3edd3a5201da85ed1ecd6bfb6cf5befd35125ae7e751c1f57fff8f3a57d7b8f7db3f49cb7ddceb3dc5e7d2c008f248eab5a81557e3ebea2b466829ed33fefe5e4d8588f3209d726f65d713cde9ea2b65dd76e6b5c84446bbf9e95f59e86436d5dca736d5dbf9ddb358aacf92b8e6383f77dbc5c3cc18a75ab85d92f8fe375fbf61efba63ce796e3e260ef769ee4f6ea63017824715cd588d283ee6adf6812db164535b5c9f3de71dcffac7ed5b63ea15fbfad07e39028ff7f120f735151bbadfc6cfbfaeddbaee17b94ff5e1538fdba7f657dcb32f7deb5aeae57af42af8de3ca38afefdb833d01b8e7754ed6eddb7bec9b3dc7c5feed04e09588e3aa46949e94db46935c996c0fcb74be3d3fa6fff9f1ff8f27c9da6b36d6a34cc2b5897d631c37d7bb9be88fcb35dbda5089ac2e622eb6b744c5789bfa9f8fd7af7f9efa3e6eaedbceedeaf6eb777bdf4fe5bd5d15d20783751b3f7f737bcb63da1b9cf135bacfdc7b5f79df7aad00dcf13a51b6adfc936bd57d7b8f7dd31a0bb3ebbc7f3bfbc7d6ce39003c9238ae9a9fa8ba097734b196486a2dfddd0793e878b978cec67a94c976f4fa2799d46b11518de383f67a7f1f82eff8bfd3097dfdb6363422ab7bdee1cf07a1525fc6eb370ce7e932b76ebbb6eb62fd5af15331bb5dd3b1b7b46e93f7bc3cffcc06f7f1385ebe0eeffdf1b6d1f634deb7b3f6d5d1cdaf53ac0acbfbec9bf673b68f8bebb7531c033c9b38ae5ab88ad34d649589ae1a3c95fb5d4cfae7651ab48f89e3a3c9a49e3b9d1fd398d0d76e6b4dd986496435ae144ff6d7f975ceeb5d7fcd69dcac5cb7cddb35f8b0538dc6baa5a0abbe6665dc34c7e98a003c196f6fee5fddb7cdf7eda81dc7275b5ea733f8a0b3b46fefb06f6e725cacdace85730e000f238e7973e7e8a87d5878aa12508de02be1fc72ebfd04655f2c742c00dc8438e6ed9dafd8bdd815b9d92b97fdd55241e88a2a008f258e794f8d5fc3781d835fc5682d1b7e45e35d75bfd6e05302000f228e795397f1f9aabf9ed0fabd632d78b4f03bcc007007e2180000421c0300408863000008710c0000218e010020c4f10dcdff052cb83f63906b19433c8bb1c7ab10c7b754fe6d5dff0e17cf620c722d63886731f67811e27885ee0f111c96a563f6fcefd66efde4dbff45b47ef1e999b93f14d21e1ffbc660317c4d63f0bdd4ce33c765fad707b78fa1853f6a23763e486b9c6559180bbbcf5f933ffc7458fc21257612c78b4607fa721d9feeb7fa8f4e943f23dc58cc299f6cf9afe855c7c7d6313830fc20288edfc7e5fb5a5b46eff5e631248e2996cf5bc7a539b6769cbf5a7f4ce9b8187aec218e97745ff37ce7809f5e65b950eebff613ebe944308e904190fbe4fbc1ca24d3bab2d7181f5bc760d13dee30d64fe34f1cbf85e107f05a29d4ce419bc7507bacf269e6c6c26538570378e3d89bfd66f7bf7f3fff9cc3d8411c2f2807def1a02b4132ff49b484ed9593c4dec0e18dac99646ab7ed1b83fdd799e5f1e2f8f7eb6364db37095bc7d0dc78e4b32c8f853e686be7982d63afbc967315b7258e67e5202d81ba3258d745f48272b5e7aa27e1779b9964ca586c4c209bc7e0c55799e2f86d94f3c88e0fd9dbc69038a6583316ca39a6fea16df5d8334f7227e278ce45301cad8b86f2a978db959a812e7cc4c9676b4d32f313cbd1b631589eafbc8e387e172532f69c8bb68da13256a78b6ef9342b3f28cd84eddab177930b5150218e679c0fbccb405875d06efd34dbc5f07071058676701c97d9e1b5610c9631dddf551cbf87fe43d4ae78d8741e9b1fabaeec7d9295713cf74deccab1378ce3f2dffde2fcc57ee2b82907f8e4c06dfd7ce026717c5c04f2675b088ee3d21a636bc760758212c7efe1caf771eb79aca20f1663e9733c2a8efb0f7f73cb15c3970f268e5b7270d60eacc5af72ae9e548607bd40fe5c3393cce00355f55b8c9563b0f6edc8d551c58be8cf23bb4e453788e3a372bedcf3ab1dfc464f88e3ca73741fcce62e644183386ee8af78cc2cad03f726934a7fe09b543ed5c22453c6d9dec925f7998e2f71fc2eae0ad39b9cc78e0d74feb59d6b9f87df62651ccf8daf9563af8ceffadd56ae075488e39ae6af398c978568b9d1a4228e3fd5c2c9bd1ba795db578cc12e5a562c570e659ea47b8ff75c3d731e63973551ba70f1e7a671ec433edb89e38ae593f9fcd795b79a0caebaeac31b589864ca0452099f3563b00ba7158b38fea5061ff4b7be87b7398fcd9f2b7947cb71dc9f7beaf7593bf6bae7a94fc4ed8b07b0401c4facfb4a79eea09cff343b94d79a790e9f7a3fd9cc2433889eda04b27e0cd6ac3b06f81dfa10392cb501910f59e39bd68fa1f3389d8ec33e8cfddee727998be3c19898195babc75ef33c58d6e1b02c0f609810c763e5605b3c9997836f1c105bc2e2f244515b1cd79f6c70826f2dd5717a6ddc5efb785e4dff61bbbd5c9e6bb68c81a5716a1c7d9615e7adc3d2be2abcedfc73f1e16fbcf850c64ee27864edd7394765c2b9b8efeab81e285f8f5f2cbe0a627e92697e70da33062f88e3f7d41a4f33df4cac1e4365cc8c169fee3f50632c64599c5b6f3487ae99c3a1451cdf5a0e5207264f630c722d63886731f67801e2f8c6ce57935d71e3798c41ae650cf12cc61eaf401cdf52f93ac857893c8b31c8b58c219ec5d8e34588e31b2abfafecb8e6598c41ae650cf12cc61eaf421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e010020c4310000843806008010c7000010e2180000421c0300408863000008710c0000218e0100e0e4e7e77f9cf8376e4c11abd10000000049454e44ae426082, 'C', 3),
(5, 0x89504e470d0a1a0a0000000d49484452000002ca000002170806000000853678b1000000017352474200aece1ce90000000467414d410000b18f0bfc6105000000097048597300000ec300000ec301c76fa864000014f649444154785eeddd0b72a3b80286d15e571694f5f46a6633bd988c5f020cbf8420f12b3ea78aba77e218b050c467a77be6cf170000b0209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c00008150e6b6fefdfdfaf8f3e7ebcfc7dfaf7f972fdd4439ce74fbfceff22000c076f709e5662cfdfbfafb710e9b8fbfd78ffef779fefad03bff7d9e03e8d6d135f32ce7f1927e32948718fef8ba9a2ae57ac4edf34b2e03007b3c3c944b842e3ffd1b03fab181fa2ce7f1a236857219eb590817ad509eef7ff8dee51b3000801e0f0de57f7f3f04e76ff793a1bc95373400c0373c2e94875f97fbd5f8aff6c8503eccac4f730c00d8e931a15cfe7935884ae85c6f8b3fa57154f6797970f8231d654b4fbac4fae957f3c3391db6f979c6c8db10752be7d6fca301d3f32a5b1c8060edf515bdc7d8f33aca73e6c79cbd515a5cafc9369ecad6f0bd7c7fbc7e00006d0f08e5317e5bbd37fcb18cda367ff210719f31ae4f5b25d63e3e66c72adf578bbc931da17c38cee97fc39622b339063df1b7f6fa0e361d63cfeb486358be3619bb9b847289f1d6440300a8b87b28ffbd0451efa7a88bef1b3e899c85f6e4398bc76acf997c3dc6578abcc18e50be6cd37318437576fce139f3f32ac75d19c3a3ded7d77b8cefbc8e3286c33ed2b8ad8de98650aebe3600803ef70de5c9d68abc125db5ef19a2ecbad4ae836c263e6708c94a4c35f7b92794d3f796f8bb7eecfc096b65df657f57d51facbcbecdc7d8f13aaec6b0f9fca3ef867279fcb255e60200408ffbffd18b6fc7d2c1747f972fc5af4da5c74b48d682b3b9cf1da1dcbd9ff2b595adf65a8be6ebdb718c3de3519e336cad4f78d7c6b43394d7c60500a0c363fe325ff393ceb5583a0a41d48cb883f4b8505eee73be4d8fb1673c86e77c7e7d5e8e57ff6dc2da98ae85f2e5f96be30200d0e131a17c30fce5ad45d4acc5d2410ab666c41da4c79f3e943bf6ddd215ca1b8eb1673cae9e33fed1883ce46be724940180fb7958288f51b4fc84b144f42dfe8cf2d53e7b4379f727df173b02b38c41edd4baacbcbecdc7d8f13a16cf19c6348ddbda98ae853200c0cf7960281f0cd1348bb51278876d1ecb4324d7822c3d36ecaff2f56a298e9f80c6284ffb4c6aafffa412879331589edef9bc560377edf56d3dc69ed7119e335ec365f0b6df24ad85b29006007ece6343f96888b5ebb819fe6846655b84d455bc56b6790dae86f234eae6dbc7d7e7e7f1b11b85f2c1da18344efbace3f56d3ac60f85f2d170dcd9d7d3788fe7b012c2c31c10ca00c0f73d3e940f86689a07dd103ed36d25924ec728d1366eb1153b42f264f2c9ebf4fbcf5177bb503e991ffbb4751cf368efebab1d63cfeba83e67bc46f3373dd7f13edd9f4f940180fbb94f28df4333e20000601ba10c000081500600804028030040f07b421900007e90500600804028030040209401002010ca00001008e51dbaff8b7c3c35d7915b31b7b835730cee4328ef51fe55746bff69689e9bebc8adfc8ab9e53f09ffd4ac5f70174279e2fc0efd7863f8f3b5b6f6fcf779fcbede77f3e58693369f08fc8c7d63bced3a1e34ff7dddffbefe7e9c8ff9e1a2fe52e335bede9631d93bb78675a7faef801f8f7993262a737a71ae42f9f66af3e9b2ad5cf0cdebd7c5f979d79bde864c280f660bd67a299fbeaf2f885a1177de2c52dfb5738c375dc78346280f371f17f3579abe91cedb2c58bae7d638775b73f466ff3125a1fc40ebebd671abcea1adeb57f378db831bde81502e865f637df6dd1c9a9f2cced56f38435cddea26f836768ef1a6eb7850f9fef54f05796925568f5baad9d3e3b3d0d830b7eaf3e7c69f263709e5db6b8df175d4c618deb87e55d7c2d37e84322442f9a2dca88e37a3b298b46f4ce506d67313e9590cdd8cbe67ef186fb98e07e9c63444946bf83b8dc1d2ffc9ddd19e3562b6eedcfad3e4266bd3edad8ff1f89b8c14b25be6d823df74c1eb12ca279705a4dc8c3adfa5f705f55163312cc7aa2d74c3e3936d76c0b290d66ee2f9f171d19c6ecb7de4ef3b6fcff409c4fe31eebf8e07f3b931ecbb361695f39afeca747a8d67fb3d5f8ff93598eeabecffb2c51791cea1f7ba36c6f55d7c2356b7ccade5a7cae3355a3c7f3a67ca563bc8f046eeb22d5e47ed1abbf6b7d733c6e33c486b7cff1c6bef27cbeb447cfeda9a663ef1a284f2d1f407fca42c0eed105c0bd4516d81682f5ce32709619bdeeccaa2146fe4e1b5cc6f9cb36d7e2e65215e6eaf10caeb3787feeb787035d6e598ad9b54e5bcca9cfb985de3720d4b287f7e2e83e8b47d7efdadcd8fc5c9e473e8bbaeb5717d1f659cbae6c7cca6b935ff59adfc5c77af0b47959ff5ebf3a95d63d7fef63ac7b85cc7b0d06c9963d3b9b31ad61bef13e5fbab6b9af9c48b12ca07e71be175f4752d3e8dc5eb5a5920f2169f3ebc239f2f2a29fcc6af2d1b299ce3e56b8befad1e73a672037fac1d635c745fc783c96bffdb1550959b4339667aec68b816c76d3237afbe3e7beeb0cff91b98ce1b54bcaeef7e736bfc6cf5d832b78e26df1f3f291caefffc7ab4d685e5da763d676bd7f8ddaffd3d7ce767f362e31c9bbf41ae3eedb2dfc5e3b53938ac3fe1b113f389d72494cb0fef6201aa7d7da27b812a0b44639bed23c5fba02c5493e70c9f14c4fdf4dee4f38df55a792dadef7984ed633cd872a3196e12e3f6bd50aedc34aa4134b9d68bb9598bbaca395ca95dd79ee7fe663d3f130d5be6d6c9780dd335deb62ef49e7bed1abffbb5bf87ce312ed7f60742f924ac63fd4fafccabb535cd7ce24509e5cb0f775a245623b37b816a2c1093052b7d42dcdcae16cd748cf6c234fd35dcf556bfb1963169c7e1236c1de3892d379ae90d6bd86f2b442ae7b576ccb2ef3c31abaf25cfd9f63c38aa5fd7f5e7fe6ee3cf62cff458d832b78af29cc53177ac0b937dd5cfa1768ddffddadf43e7184fd79dcb97067be6d8a01cffbca55d74df2756cfc37ce235bd7d289740686eb51ffcee056a658128fb1916c13da13cbe96e1746ae73709c7bce5f0ab7d6afd1cb68ef144f7753c98dfb0ca73ab8b7fe5bcd68e79c7506e5f5737b7fa9b880e5be6d6a036e6fbd685e11c6a8f578fe7dadf5ee718b7e6d1ae39766d8ce1c9796cbd4fac9e87f9c46b7aef505e5d08ca56f9c1ee5ea0561688e13ccae3e586d8faa432989d4f8ea6f1ebcb1b66e3b88b737c365bc77862cb8da6ec673276f5f13caa9cd7da31cb71d2e397e7fe4828af5e5737b72122e2f55db1656e0d6a63be735d1894fdce5f4bed78aefdedf58cf1f80629be59db35c7e6ca798c736bf37d62f53ccc275ed35b8772b901d63f291a17a8f4b3bffefc626581280b4c88af6d6bdff43897ffdfbbc89dd41e6b8fc373d83ec645ff753c08a13c1d9fe53e2ae7b57653b94b28f75cd795717d07c39b89edf37fd3dc1ad4c77cdfba30957ec66bc773ed6f6f7d8c87376a95efd937c7e6e6e751bb171c551e13cafc526f1ccaad8560342c52e187bfffa6d558202637e1ab85ae2c3a71ffe7fda5e30e8be6e55fd1b35c3cc738ba7e6cfcfa7c4ccaebfcde427c6b3bc6f862537cc4503ea8c654e5bc9e2094fbae6b635cdfc8182b87ad714de60f6d9a5b83c6986f5a178eff3c5fdfd2be6bc76b9c073fa435c6d335b93e87bae7d8654d59febc4f8e33ec64fb7d62989bd513319f784def1bcab5e059283fdcf31b4e5930daa17d56f6d1d8c2799405b0b6c5f568126cd5739bdc6cf3367d5efbdcdb91754ffbc678db753c68cd9b615c3b2264eda672f350eebdae95f37f436b3f8fc7ed7adc37cead417bccfbd785c635be3ad1daf15cfbdb6b5ca3c9565f6737ccb1ab7b43da66d779d37de2606d4d339f78516f1bca5b7e5d556e4c57dfdb1dda47edc5b0baae1cc5c5aab5284edef1b7ce6db1689ef7791e97e9fe27fb0b5bcff8ddc7ce31de741d0f56be7f8898e180959bc3c343b9f7babab95dabcdb3303e5be7d6a063cc7bd785c5cf799a37b5e3b9f6b7f7cdf575effa35dbaac7597c7fed3e712094f9a5defb2ff37d4723561e2dc712d1135f475edc53cdad4b906d8e769e9af50b6e4e28ef748ed1f009cec379d7bec5f35e475eddb3cdadf829202fcdfa05b72794f728bf8e7ac28f6c87bf74e4e3e4754f7c1d79714f33b796bfda37dd7f09eb17dc8550dea1c4e8f3ad4fe5a6e813861ecf7b1d7975cf33b766a16cb2ff1ad62fb80fa10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c000081500600804028030040209401002010ca000010086500000884320000044219000002a10c0000815006008085afafff01eb42318ec61e94690000000049454e44ae426082, 'B', 3);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `altkategori`
--
ALTER TABLE `altkategori`
  ADD PRIMARY KEY (`altKategoriID`),
  ADD KEY `fk_AltKategori_Kategori1_idx` (`kategoriID`);

--
-- Tablo için indeksler `anket`
--
ALTER TABLE `anket`
  ADD PRIMARY KEY (`soruID`),
  ADD KEY `fk_Anket_Kategori1_idx` (`kategoriID`),
  ADD KEY `fk_Anket_AltKategori1_idx` (`altKategoriID`),
  ADD KEY `fk_Anket_olcekTipi1_idx` (`olcekTipiID`);

--
-- Tablo için indeksler `anketcevap`
--
ALTER TABLE `anketcevap`
  ADD PRIMARY KEY (`anketCevapID`),
  ADD KEY `fk_AnketCevap_Anket1_idx` (`soruID`),
  ADD KEY `fk_AnketCevap_Kullanici1_idx` (`kullaniciTckNo`);

--
-- Tablo için indeksler `anketunisehir`
--
ALTER TABLE `anketunisehir`
  ADD PRIMARY KEY (`soruID`),
  ADD KEY `fk_AnketUniSehir_KategoriUniSehir1_idx` (`kategoriUniSehirID`),
  ADD KEY `fk_AnketUniSehir_olcekTipi2_idx` (`olcekTipiID`);

--
-- Tablo için indeksler `anketunisehircevap`
--
ALTER TABLE `anketunisehircevap`
  ADD PRIMARY KEY (`anketUniSehirCevapID`),
  ADD KEY `fk_AnketUniSehirCevap_Anket1_idx` (`soruID`),
  ADD KEY `fk_AnketUniSehirCevap_Kullanici1_idx` (`kullaniciTckNo`);

--
-- Tablo için indeksler `bloglar`
--
ALTER TABLE `bloglar`
  ADD PRIMARY KEY (`blogId`);

--
-- Tablo için indeksler `bolgeler`
--
ALTER TABLE `bolgeler`
  ADD PRIMARY KEY (`bolgeID`);

--
-- Tablo için indeksler `bolum`
--
ALTER TABLE `bolum`
  ADD PRIMARY KEY (`bolumID`);

--
-- Tablo için indeksler `bursturu`
--
ALTER TABLE `bursturu`
  ADD PRIMARY KEY (`bursTuruID`);

--
-- Tablo için indeksler `duyurular`
--
ALTER TABLE `duyurular`
  ADD PRIMARY KEY (`duyuruId`);

--
-- Tablo için indeksler `fakulte`
--
ALTER TABLE `fakulte`
  ADD PRIMARY KEY (`fakulteID`);

--
-- Tablo için indeksler `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`galeriId`);

--
-- Tablo için indeksler `hizmetler`
--
ALTER TABLE `hizmetler`
  ADD PRIMARY KEY (`hizmetId`);

--
-- Tablo için indeksler `hocalar`
--
ALTER TABLE `hocalar`
  ADD PRIMARY KEY (`hocaId`);

--
-- Tablo için indeksler `istatistikler`
--
ALTER TABLE `istatistikler`
  ADD PRIMARY KEY (`istatistikId`);

--
-- Tablo için indeksler `istatistikselbilgiler`
--
ALTER TABLE `istatistikselbilgiler`
  ADD PRIMARY KEY (`istatistikselBilgilerID`),
  ADD KEY `fk_IstatistikselBilgiler_Bolgeler1_idx` (`bolgeID`),
  ADD KEY `fk_IstatistikselBilgiler_OkulTipi1_idx` (`okulTipiID`),
  ADD KEY `fk_IstatistikselBilgiler_universite1_idx` (`uniID`);

--
-- Tablo için indeksler `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategoriID`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`kategoriId`);

--
-- Tablo için indeksler `kategoriunisehir`
--
ALTER TABLE `kategoriunisehir`
  ADD PRIMARY KEY (`kategoriUniSehirID`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullaniciTckNo`),
  ADD KEY `fk_Kullanici_Meslek1_idx` (`meslekID`),
  ADD KEY `fk_Kullanici_Okul1_idx` (`okulID`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `mesajlar`
--
ALTER TABLE `mesajlar`
  ADD PRIMARY KEY (`mesajId`);

--
-- Tablo için indeksler `meslek`
--
ALTER TABLE `meslek`
  ADD PRIMARY KEY (`meslekID`);

--
-- Tablo için indeksler `ogrenimdili`
--
ALTER TABLE `ogrenimdili`
  ADD PRIMARY KEY (`ogrenimDiliID`);

--
-- Tablo için indeksler `ogretimelemani`
--
ALTER TABLE `ogretimelemani`
  ADD PRIMARY KEY (`ogretimElemaniID`);

--
-- Tablo için indeksler `okul`
--
ALTER TABLE `okul`
  ADD PRIMARY KEY (`okulID`);

--
-- Tablo için indeksler `okultipi`
--
ALTER TABLE `okultipi`
  ADD PRIMARY KEY (`okulTipiID`);

--
-- Tablo için indeksler `olcek`
--
ALTER TABLE `olcek`
  ADD PRIMARY KEY (`olcekID`),
  ADD KEY `fk_Olcek_olcekTipi1_idx` (`olcekTipiID`);

--
-- Tablo için indeksler `olcektipi`
--
ALTER TABLE `olcektipi`
  ADD PRIMARY KEY (`olcekTipiID`);

--
-- Tablo için indeksler `psikocevap`
--
ALTER TABLE `psikocevap`
  ADD PRIMARY KEY (`cevapID`),
  ADD KEY `fk_PsikoCevap_Psikometrik1_idx` (`soruID`),
  ADD KEY `fk_PsikoCevap_Kullanici1_idx` (`kullaniciTckNo`);

--
-- Tablo için indeksler `psikokategori`
--
ALTER TABLE `psikokategori`
  ADD PRIMARY KEY (`psikoKategoriID`);

--
-- Tablo için indeksler `psikometrik`
--
ALTER TABLE `psikometrik`
  ADD PRIMARY KEY (`soruID`),
  ADD KEY `fk_Psikometrik_psikoKategori1_idx` (`psikoKategoriID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `anketcevap`
--
ALTER TABLE `anketcevap`
  MODIFY `anketCevapID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3265;

--
-- Tablo için AUTO_INCREMENT değeri `anketunisehircevap`
--
ALTER TABLE `anketunisehircevap`
  MODIFY `anketUniSehirCevapID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- Tablo için AUTO_INCREMENT değeri `bloglar`
--
ALTER TABLE `bloglar`
  MODIFY `blogId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `duyurular`
--
ALTER TABLE `duyurular`
  MODIFY `duyuruId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `galeri`
--
ALTER TABLE `galeri`
  MODIFY `galeriId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Tablo için AUTO_INCREMENT değeri `hizmetler`
--
ALTER TABLE `hizmetler`
  MODIFY `hizmetId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `hocalar`
--
ALTER TABLE `hocalar`
  MODIFY `hocaId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `istatistikler`
--
ALTER TABLE `istatistikler`
  MODIFY `istatistikId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `kategoriId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `mesajlar`
--
ALTER TABLE `mesajlar`
  MODIFY `mesajId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `psikocevap`
--
ALTER TABLE `psikocevap`
  MODIFY `cevapID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1193;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 16 mai 2019 à 11:07
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db_prophoto`
--

-- --------------------------------------------------------

--
-- Structure de la table `brands`
--

DROP TABLE IF EXISTS `brands`;
CREATE TABLE IF NOT EXISTS `brands` (
  `ID_brand` int(11) NOT NULL AUTO_INCREMENT,
  `Brand_name` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_brand`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `brands`
--

INSERT INTO `brands` (`ID_brand`, `Brand_name`) VALUES
(1, 'Nikon'),
(2, 'Canon'),
(3, 'Sony');

-- --------------------------------------------------------

--
-- Structure de la table `cards`
--

DROP TABLE IF EXISTS `cards`;
CREATE TABLE IF NOT EXISTS `cards` (
  `ID_card` int(11) NOT NULL AUTO_INCREMENT,
  `Card_type` varchar(10) NOT NULL,
  PRIMARY KEY (`ID_card`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cards`
--

INSERT INTO `cards` (`ID_card`, `Card_type`) VALUES
(1, 'SD'),
(2, 'CF');

-- --------------------------------------------------------

--
-- Structure de la table `db_prophoto`
--

DROP TABLE IF EXISTS `db_prophoto`;
CREATE TABLE IF NOT EXISTS `db_prophoto` (
  `C1` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `db_prophoto`
--

INSERT INTO `db_prophoto` (`C1`) VALUES
('-- phpMyAdmin SQL Dump'),
('-- version 4.8.4'),
('-- https://www.phpmyadmin.net/'),
('--'),
('-- Hôte : 127.0.0.1:3306'),
('-- Généré le :  sam. 11 mai 2019 à 14:19'),
('-- Version du serveur :  5.7.24'),
('-- Version de PHP :  7.2.14'),
(NULL),
('SET SQL_MODE = \"NO_AUTO_VALUE_ON_ZERO\";'),
('SET AUTOCOMMIT = 0;'),
('START TRANSACTION;'),
('SET time_zone = \"+00:00\";'),
(NULL),
(NULL),
('/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;'),
('/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;'),
('/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;'),
('/*!40101 SET NAMES utf8mb4 */;'),
(NULL),
('--'),
('-- Base de données :  `db_prophoto`'),
('--'),
(NULL),
('-- --------------------------------------------------------'),
(NULL),
('--'),
('-- Structure de la table `brands`'),
('--'),
(NULL),
('DROP TABLE IF EXISTS `brands`;'),
('CREATE TABLE IF NOT EXISTS `brands` ('),
('  `ID_brand` int(11) NOT NULL AUTO_INCREMENT,'),
('  `Brand_name` varchar(20) NOT NULL,'),
('  PRIMARY KEY (`ID_brand`)'),
(') ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;'),
(NULL),
('--'),
('-- Déchargement des données de la table `brands`'),
('--'),
(NULL),
('INSERT INTO `brands` (`ID_brand`, `Brand_name`) VALUES'),
('(1, \'Nikon\'),'),
('(2, \'Canon\'),'),
('(3, \'Sony\');'),
(NULL),
('-- --------------------------------------------------------'),
(NULL),
('--'),
('-- Structure de la table `cards`'),
('--'),
(NULL),
('DROP TABLE IF EXISTS `cards`;'),
('CREATE TABLE IF NOT EXISTS `cards` ('),
('  `ID_card` int(11) NOT NULL AUTO_INCREMENT,'),
('  `Card_type` varchar(10) NOT NULL,'),
('  PRIMARY KEY (`ID_card`)'),
(') ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;'),
(NULL),
('--'),
('-- Déchargement des données de la table `cards`'),
('--'),
(NULL),
('INSERT INTO `cards` (`ID_card`, `Card_type`) VALUES'),
('(1, \'SD\'),'),
('(2, \'CF\');'),
(NULL),
('-- --------------------------------------------------------'),
(NULL),
('--'),
('-- Structure de la table `products`'),
('--'),
(NULL),
('DROP TABLE IF EXISTS `products`;'),
('CREATE TABLE IF NOT EXISTS `products` ('),
('  `ID_prod` int(11) NOT NULL AUTO_INCREMENT,'),
('  `ID_brand` int(11) NOT NULL,'),
('  `Prod_name` varchar(50) NOT NULL,'),
('  PRIMARY KEY (`ID_prod`)'),
(') ENGINE=MyISAM DEFAULT CHARSET=latin1;'),
(NULL),
('-- --------------------------------------------------------'),
(NULL),
('--'),
('-- Structure de la table `prod_details`'),
('--'),
(NULL),
('DROP TABLE IF EXISTS `prod_details`;'),
('CREATE TABLE IF NOT EXISTS `prod_details` ('),
('  `ID_prod` int(11) NOT NULL,'),
('  `Description` text NOT NULL,'),
('  `Capteur` varchar(10) NOT NULL,'),
('  `Res_photo` int(11) NOT NULL,'),
('  `ID_vid` int(11) NOT NULL,'),
('  `ID_card` int(11) NOT NULL,'),
('  `Price` int(11) NOT NULL,'),
('  UNIQUE KEY `id_prod` (`ID_prod`)'),
(') ENGINE=MyISAM DEFAULT CHARSET=latin1;'),
(NULL),
('-- --------------------------------------------------------'),
(NULL),
('--'),
('-- Structure de la table `prod_images`'),
('--'),
(NULL),
('DROP TABLE IF EXISTS `prod_images`;'),
('CREATE TABLE IF NOT EXISTS `prod_images` ('),
('  `ID_prod` int(11) NOT NULL,'),
('  `Image_name` varchar(50) NOT NULL,'),
('  `Thumb_name` varchar(50) NOT NULL,'),
('  UNIQUE KEY `id_prod` (`ID_prod`)'),
(') ENGINE=MyISAM DEFAULT CHARSET=latin1;'),
(NULL),
('-- --------------------------------------------------------'),
(NULL),
('--'),
('-- Structure de la table `res_video`'),
('--'),
(NULL),
('DROP TABLE IF EXISTS `res_video`;'),
('CREATE TABLE IF NOT EXISTS `res_video` ('),
('  `ID_vid` int(11) NOT NULL AUTO_INCREMENT,'),
('  `Res_type` varchar(20) NOT NULL,'),
('  `Resolution` varchar(50) NOT NULL,'),
('  PRIMARY KEY (`ID_vid`)'),
(') ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;'),
(NULL),
('--'),
('-- Déchargement des données de la table `res_video`'),
('--'),
(NULL),
('INSERT INTO `res_video` (`ID_vid`, `Res_type`, `Resolution`) VALUES'),
('(1, \'HD\', \'1280 * 720p\'),'),
('(2, \'Full HD\', \'1920 * 1080p\'),'),
('(3, \'Ultra HD\', \'3840 * 2160p\');'),
('COMMIT;'),
(NULL),
('/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;'),
('/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;'),
('/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;');

-- --------------------------------------------------------

--
-- Structure de la table `essai`
--

DROP TABLE IF EXISTS `essai`;
CREATE TABLE IF NOT EXISTS `essai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `login_info`
--

DROP TABLE IF EXISTS `login_info`;
CREATE TABLE IF NOT EXISTS `login_info` (
  `Login` varchar(20) NOT NULL,
  `Password` varchar(50) NOT NULL,
  UNIQUE KEY `login` (`Login`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `login_info`
--

INSERT INTO `login_info` (`Login`, `Password`) VALUES
('Prophoto', '89c8381dda528fb66b920c427c5c1a08');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `ID_prod` int(11) NOT NULL AUTO_INCREMENT,
  `ID_brand` int(11) NOT NULL,
  `Prod_name` varchar(50) NOT NULL,
  `Img_name` varchar(11) NOT NULL,
  PRIMARY KEY (`ID_prod`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`ID_prod`, `ID_brand`, `Prod_name`, `Img_name`) VALUES
(1, 1, 'Nikon D850', '1'),
(2, 2, 'Canon 1Dx Mark II', '2'),
(3, 3, 'SONY Alpha 7R II', '3'),
(4, 1, 'Nikon D7500', '4'),
(5, 2, 'Canon 5DSr', '5'),
(6, 3, 'SONY Alpha 9', '6'),
(7, 2, 'Canon 1300D', '7'),
(8, 1, 'Nikon D5', '8'),
(11, 1, 'Nikon D610', 'd610');

-- --------------------------------------------------------

--
-- Structure de la table `prod_details`
--

DROP TABLE IF EXISTS `prod_details`;
CREATE TABLE IF NOT EXISTS `prod_details` (
  `ID_prod` int(11) NOT NULL,
  `Description` text NOT NULL,
  `Capteur` varchar(10) NOT NULL,
  `Res_photo` int(11) NOT NULL,
  `ID_vid` int(11) NOT NULL,
  `ID_card` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  UNIQUE KEY `id_prod` (`ID_prod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `prod_details`
--

INSERT INTO `prod_details` (`ID_prod`, `Description`, `Capteur`, `Res_photo`, `ID_vid`, `ID_card`, `Price`) VALUES
(1, 'Le capteur rapide au format FX très haute définition du D850 utilise 45,7 millions de pixels effectifs pour produire des fichiers de 45,4 millions de pixels hautement détaillés. Imprimez des images très haute définition en très grand format. Enregistrez de véritables vidéos 4K plein format. Le capteur CMOS rétro-éclairé est dépourvu de filtre passe-bas optique et intègre des micro-lentilles jointives ainsi qu\'un traitement anti-reflet. La lumière captée atteint les photodiodes plus efficacement, afin d\'offrir un niveau de détail exceptionnel et une plage dynamique incroyable. De plus, le système AF 153 points, hérité du D5, garantit la mise au point très précise et la large couverture nécessaires à l\'obtention d\'images plein format très haute définition.', 'Full Frame', 45, 3, 1, 3400),
(2, 'L\'EOS-1D X Mark II intègre un capteur CMOS développé par Canon qui révolutionne la qualité d\'image professionnelle de la gamme EOS. Ce capteur extrêmement sensible collecte la lumière plus efficacement et la transforme en signal numérique tout en réduisant le bruit à des sensibilités ISO faibles et élevées. Il offre également une grande latitude pour capturer un maximum de détails dans les zones sombres.', 'Full Frame', 20, 3, 2, 4900),
(3, 'Profitez d\'images à la qualité inégalée. Equipé du premier capteur d\'image CMOS plein format 35 mm rétroéclairé de 42,4 mégapixels au monde, l\' a7R II de Sony dépasse les limites de la résolution d\'image, de la sensibilité ISO et de la réactivité. La stabilisation d’image sur 5 axes réduit les flous qui se produisent avec les clichés pris à la main. L\'enregistrement vidéo 4K améliore davantage la résolution grâce à la lecture de la totalité des pixels sans perte.', 'Full Frame', 42, 3, 1, 2100),
(4, 'Le D7500 permet d\'obtenir des images haute définition nettes avec des dégradés riches. Vous apprécierez la détection des sujets d’une précision incroyable et les performances exceptionnelles à des sensibilités élevées. Vous serez ébloui par la qualité des séquences vidéo 4K/UHD. Grâce au système Picture Control intégré, créez et appliquez votre propre style en toute simplicité, que ce soit pour des photos ou des vidéos.', 'APS-C', 21, 3, 1, 1300),
(5, 'Reflex numérique conçu pour offrir une qualité d\'image exceptionnelle, avec résolution de 50,6 millions de pixels et sans filtre passe bas pour optimiser la netteté du capteur.', 'Full Frame', 51, 2, 2, 4100),
(6, 'Un capteur d\'image Sony révolutionnaire rend les mécanismes conventionnels de l\'appareil photo obsolètes, en offrant des performances et une vitesse d\'exécution qui surpassent les capacités des appareils mécaniques. De plus, l\'élimination du bruit et de la vibration mécaniques ouvre la porte à un nouveau monde riche de possibilités en matière d\'imager.', 'Full Frame', 24, 3, 1, 3400),
(7, 'Réalisez facilement des prises de vue alliant originalité et qualité, ainsi que des vidéos Full HD au rendu cinématographique avec le EOS 1300D de 18 millions de pixels. Partagez vos créations instantanément via le Wi-Fi et connectez-vous à votre smartphone ou tablette grâce à la technologie NFC.', 'APS-C', 18, 2, 1, 300),
(8, 'Surmontez les obstacles et photographiez au-delà du visible grâce à la puissance et à la précision du D5.', 'Full Frame', 21, 3, 1, 5600),
(11, 'Découvrez les véritables performances de la photographie plein format avec le D610.\r\n\r\nDoté de technologies professionnelles Nikon, ce reflex numérique puissant offre une qualité d\'image que seul le format FX peut produire.\r\n\r\nLe capteur au format FX de 24,3 millions de pixels saisit chaque détail avec une netteté incroyable pour produire des photos éblouissantes aux couleurs éclatantes et des vidéos en Full HD d\'une remarquable fluidité.', 'Full Frame', 24, 2, 1, 1900);

-- --------------------------------------------------------

--
-- Structure de la table `res_video`
--

DROP TABLE IF EXISTS `res_video`;
CREATE TABLE IF NOT EXISTS `res_video` (
  `ID_vid` int(11) NOT NULL AUTO_INCREMENT,
  `Res_type` varchar(20) NOT NULL,
  `Resolution` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_vid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `res_video`
--

INSERT INTO `res_video` (`ID_vid`, `Res_type`, `Resolution`) VALUES
(1, 'HD', '1280 * 720p'),
(2, 'Full HD', '1920 * 1080p'),
(3, 'Ultra HD', '3840 * 2160p');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

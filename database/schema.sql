SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+11:00";


-- DROP ALL TABLES

DROP TABLE `galleryTypes`;
DROP TABLE `galleries`;
DROP TABLE `imagePaths`;



-- CREATE ALL TABLES
CREATE TABLE IF NOT EXISTS `galleryTypes` (
  `galleryTypeID` int NOT NULL AUTO_INCREMENT,
  `galleryTypeDesc` varchar(55) NOT NULL,
  PRIMARY KEY (`galleryTypeID`)
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8;


CREATE TABLE IF NOT EXISTS `galleries` (
  `galleryID` int NOT NULL AUTO_INCREMENT,
  `galleryName` varchar(255) NOT NULL,
  `galleryType` int NOT NULL,
  PRIMARY KEY (`galleryID`),
  FOREIGN KEY (`galleryType`) REFERENCES `galleryTypes` (`galleryTypeID`)
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8;


CREATE TABLE IF NOT EXISTS `imagePaths` (
  `pathID` int NOT NULL AUTO_INCREMENT,
  `galleryID` int NOT NULL,
  `path` varchar(255),
  PRIMARY KEY (`pathID`),
  FOREIGN KEY (`galleryID`) REFERENCES `galleries` (`galleryID`)
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8;


-- INSERT DATA
INSERT INTO `galleryTypes` (galleryTypeDesc) VALUES
  ('Concert'),
  ('Landscape');


INSERT INTO `galleries` (galleryName, galleryType) VALUES
  ('Human Nature', 1),
  ('The Wolfe Brothers', 1);

INSERT INTO `imagePaths` (galleryID, path) VALUES
  (1,'/assets/img/human_nature/_MG_5885.jpg'),
  (1,'/assets/img/human_nature/_MG_5897.jpg'),
  (1,'/assets/img/human_nature/_MG_5903.jpg'),
  (1,'/assets/img/human_nature/_MG_5916.jpg'),
  (1,'/assets/img/human_nature/_MG_5933.jpg'),
  (1,'/assets/img/human_nature/_MG_5972.jpg'),
  (1,'/assets/img/human_nature/_MG_5999.jpg'),
  (1,'/assets/img/human_nature/_MG_6000.jpg'),
  (1,'/assets/img/human_nature/_MG_6005.jpg'),
  (1,'/assets/img/human_nature/_MG_6034.jpg'),
  (1,'/assets/img/human_nature/_MG_6041.jpg'),
  (1,'/assets/img/human_nature/_MG_6054.jpg'),
  (1,'/assets/img/human_nature/_MG_6065.jpg'),
  (1,'/assets/img/human_nature/_MG_6094.jpg'),
  (1,'/assets/img/human_nature/_MG_6098.jpg'),
  (1,'/assets/img/human_nature/_MG_6110.jpg'),
  (1,'/assets/img/human_nature/_MG_6155.jpg'),
  (1,'/assets/img/human_nature/_MG_6189.jpg'),
  (1,'/assets/img/human_nature/_MG_6203.jpg'),
  (1,'/assets/img/human_nature/_MG_6221.jpg'),
  (1,'/assets/img/human_nature/_MG_6224.jpg'),
  (1,'/assets/img/human_nature/_MG_6267.jpg'),
  (2,'/assets/img/wolfe_brothers/_MG_9104.jpg');
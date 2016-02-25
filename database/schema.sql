SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+11:00";


-- DROP ALL TABLES

DROP TABLE `imagePaths`;
DROP TABLE `galleries`;
DROP TABLE `galleryTypes`;



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
  ('The Wolfe Brothers', 1),
  ('Seth Sentry', 1),
  ('James Morrison', 1),
  ('L-Fresh the Lion', 1),
  ('Lee Kernaghan', 1);

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

  (2,'/assets/img/wolfe_brothers/_MG_0021.jpg'),
  (2,'/assets/img/wolfe_brothers/_MG_0038.jpg'),
  (2,'/assets/img/wolfe_brothers/_MG_0063.jpg'),
  (2,'/assets/img/wolfe_brothers/_MG_0096.jpg'),
  (2,'/assets/img/wolfe_brothers/_MG_9070.jpg'),
  (2,'/assets/img/wolfe_brothers/_MG_9090.jpg'),
  (2,'/assets/img/wolfe_brothers/_MG_9093.jpg'),
  (2,'/assets/img/wolfe_brothers/_MG_9104.jpg'),
  (2,'/assets/img/wolfe_brothers/_MG_9121.jpg'),
  (2,'/assets/img/wolfe_brothers/_MG_9143.jpg'),
  (2,'/assets/img/wolfe_brothers/_MG_9161.jpg'),
  (2,'/assets/img/wolfe_brothers/_MG_9178.jpg'),
  (2,'/assets/img/wolfe_brothers/_MG_9188.jpg'),
  (2,'/assets/img/wolfe_brothers/_MG_9196.jpg'),
  (2,'/assets/img/wolfe_brothers/_MG_9207.jpg'),
  (2,'/assets/img/wolfe_brothers/_MG_9209.jpg'),
  (2,'/assets/img/wolfe_brothers/_MG_9218.jpg'),
  (2,'/assets/img/wolfe_brothers/_MG_9226.jpg'),
  (2,'/assets/img/wolfe_brothers/_MG_9227.jpg'),
  (2,'/assets/img/wolfe_brothers/_MG_9251.jpg'),
  (2,'/assets/img/wolfe_brothers/_MG_9260.jpg'),
  (2,'/assets/img/wolfe_brothers/_MG_9268.jpg'),
  (2,'/assets/img/wolfe_brothers/_MG_9278.jpg'),
  (2,'/assets/img/wolfe_brothers/_MG_9295.jpg'),
  (2,'/assets/img/wolfe_brothers/_MG_9625.jpg'),
  (2,'/assets/img/wolfe_brothers/_MG_9770.jpg'),
  (2,'/assets/img/wolfe_brothers/_MG_9782.jpg'),
  (2,'/assets/img/wolfe_brothers/_MG_9808.jpg'),
  (2,'/assets/img/wolfe_brothers/_MG_9967.jpg'),
  (2,'/assets/img/wolfe_brothers/_MG_9973.jpg'),
  (2,'/assets/img/wolfe_brothers/_MG_9991.jpg'),

  (3,'/assets/img/seth_sentry/_MG_3416.jpg'),
  (3,'/assets/img/seth_sentry/_MG_3450.jpg'),
  (3,'/assets/img/seth_sentry/_MG_3476.jpg'),
  (3,'/assets/img/seth_sentry/_MG_3532.jpg'),
  (3,'/assets/img/seth_sentry/_MG_3586.jpg'),
  (3,'/assets/img/seth_sentry/_MG_3623.jpg'),
  (3,'/assets/img/seth_sentry/_MG_3634.jpg'),
  (3,'/assets/img/seth_sentry/_MG_3652.jpg'),
  (3,'/assets/img/seth_sentry/_MG_3672.jpg'),
  (3,'/assets/img/seth_sentry/_MG_3699.jpg'),
  (3,'/assets/img/seth_sentry/_MG_3712.jpg'),
  (3,'/assets/img/seth_sentry/_MG_3759.jpg'),
  (3,'/assets/img/seth_sentry/_MG_3769.jpg'),
  (3,'/assets/img/seth_sentry/_MG_3811.jpg'),
  (3,'/assets/img/seth_sentry/_MG_3846.jpg'),
  (3,'/assets/img/seth_sentry/_MG_3872.jpg'),
  (3,'/assets/img/seth_sentry/_MG_3900.jpg'),
  (3,'/assets/img/seth_sentry/_MG_3998.jpg'),

  (4,'/assets/img/james_morrison/_MG_5144.jpg'),
  (4,'/assets/img/james_morrison/_MG_5156.jpg'),
  (4,'/assets/img/james_morrison/_MG_5246.jpg'),
  (4,'/assets/img/james_morrison/_MG_5271.jpg'),
  (4,'/assets/img/james_morrison/_MG_5315.jpg'),
  (4,'/assets/img/james_morrison/_MG_5377.jpg'),
  (4,'/assets/img/james_morrison/_MG_5502.jpg'),
  (4,'/assets/img/james_morrison/_MG_5542.jpg'),
  (4,'/assets/img/james_morrison/_MG_5561.jpg'),
  (4,'/assets/img/james_morrison/_MG_5587.jpg'),
  (4,'/assets/img/james_morrison/_MG_5660.jpg'),

  (5,'/assets/img/l_fresh/_MG_4426.jpg'),
  (5,'/assets/img/l_fresh/_MG_4526.jpg'),
  (5,'/assets/img/l_fresh/_MG_4616.jpg'),
  (5,'/assets/img/l_fresh/_MG_4645.jpg'),
  (5,'/assets/img/l_fresh/_MG_4708.jpg'),
  (5,'/assets/img/l_fresh/_MG_4712.jpg'),
  (5,'/assets/img/l_fresh/_MG_4758.jpg'),
  (5,'/assets/img/l_fresh/_MG_4763.jpg'),
  (5,'/assets/img/l_fresh/_MG_4783.jpg'),
  (5,'/assets/img/l_fresh/_MG_4812.jpg'),
  (5,'/assets/img/l_fresh/_MG_4861.jpg'),
  (5,'/assets/img/l_fresh/_MG_4867.jpg'),
  (5,'/assets/img/l_fresh/_MG_4882.jpg'),
  (5,'/assets/img/l_fresh/_MG_4917.jpg'),
  (5,'/assets/img/l_fresh/_MG_4929.jpg'),
  (5,'/assets/img/l_fresh/_MG_5032.jpg'),
  (5,'/assets/img/l_fresh/_MG_5051.jpg'),
  (5,'/assets/img/l_fresh/_MG_5088.jpg'),
  (5,'/assets/img/l_fresh/_MG_5095.jpg'),
  (5,'/assets/img/l_fresh/_MG_5100.jpg'),
  (5,'/assets/img/l_fresh/_MG_5104.jpg'),

  (6,'/assets/img/lee_kernaghan/_MG_9344.jpg'),
  (6,'/assets/img/lee_kernaghan/_MG_9365.jpg'),
  (6,'/assets/img/lee_kernaghan/_MG_9368.jpg'),
  (6,'/assets/img/lee_kernaghan/_MG_9377.jpg'),
  (6,'/assets/img/lee_kernaghan/_MG_9380.jpg'),
  (6,'/assets/img/lee_kernaghan/_MG_9390.jpg'),
  (6,'/assets/img/lee_kernaghan/_MG_9418.jpg'),
  (6,'/assets/img/lee_kernaghan/_MG_9422.jpg'),
  (6,'/assets/img/lee_kernaghan/_MG_9446.jpg'),
  (6,'/assets/img/lee_kernaghan/_MG_9460.jpg'),
  (6,'/assets/img/lee_kernaghan/_MG_9473.jpg'),
  (6,'/assets/img/lee_kernaghan/_MG_9501.jpg'),
  (6,'/assets/img/lee_kernaghan/_MG_9523.jpg'),
  (6,'/assets/img/lee_kernaghan/_MG_9527.jpg'),
  (6,'/assets/img/lee_kernaghan/_MG_9536.jpg'),
  (6,'/assets/img/lee_kernaghan/_MG_9549.jpg'),
  (6,'/assets/img/lee_kernaghan/_MG_9572.jpg'),
  (6,'/assets/img/lee_kernaghan/_MG_9618.jpg'),
  (6,'/assets/img/lee_kernaghan/_MG_9624.jpg'),
  (6,'/assets/img/lee_kernaghan/_MG_9631.jpg'),
  (6,'/assets/img/lee_kernaghan/_MG_9634.jpg'),
  (6,'/assets/img/lee_kernaghan/_MG_9640.jpg'),
  (6,'/assets/img/lee_kernaghan/_MG_9656.jpg'),
  (6,'/assets/img/lee_kernaghan/_MG_9665.jpg'),
  (6,'/assets/img/lee_kernaghan/_MG_9698.jpg'),
  (6,'/assets/img/lee_kernaghan/_MG_9763.jpg'),
  (6,'/assets/img/lee_kernaghan/_MG_9814.jpg'),
  (6,'/assets/img/lee_kernaghan/_MG_9847.jpg'),
  (6,'/assets/img/lee_kernaghan/_MG_9853.jpg'),
  (6,'/assets/img/lee_kernaghan/_MG_9859.jpg');
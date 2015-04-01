-- SQL QUERIES for TABLES MeroSaaman

/********CREATE USER TABLE ****************/

CREATE TABLE IF NOT EXISTS `user` (
  `idUser` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `fuId` varchar(100) NOT NULL,
  `firstName` varchar(60) NOT NULL,
  `lastName` varchar(60) NOT NULL,
  `Femail` varchar(60) DEFAULT NULL,
  `cellPhone` varchar(60) DEFAULT NULL,
  `homePhone` varchar(60) DEFAULT NULL,
  `ratingScore` int NOT NULL,
  PRIMARY KEY (`idUser`)
);

/********CREATE USERADDRESS TABLE****************/

CREATE TABLE IF NOT EXISTS `userAddress` (
  `idAddress` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `line1NumberBuilding` varchar(100) NOT NULL,
  `line2NumberStreet` varchar(60) NOT NULL,
  `line3AreaLocality` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `zipPostcode` varchar(60) DEFAULT NULL,
  `stateProvinceCounty` varchar(60) DEFAULT NULL,
  `country` varchar(60) DEFAULT NULL,
  `userId` bigint(20) NOT NULL,
  PRIMARY KEY (`idAddress`)
);

/********CREATE CARRIER TABLE ****************/

CREATE TABLE IF NOT EXISTS `carrier` (
  `idTravel` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `departureDate` DATE NOT NULL,
  `arrivalDate` DATE NOT NULL,
  `departureCity` varchar(60) NOT NULL,
  `arrivalCity` varchar(60) NOT NULL,
  `flightNo` int NOT NULL,
  `stayDuration` varchar(60) DEFAULT NULL,
  `carrierId` bigint(20) NOT NULL,
  PRIMARY KEY (`idTravel`)
);

/********CREATE PRODUCTREQUEST TABLE ****************/

CREATE TABLE IF NOT EXISTS `productRequest` (
  `idproductRequest` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `productLink` varchar(2083) NOT NULL,
  `buyerId` bigint(20) NOT NULL,
  `carrierId` bigint(20) NOT NULL,
  `arrivalCity` varchar(60) NOT NULL,
  `flightNo` int NOT NULL,
  `stayDuration` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`idproductRequest`)
);

/********CREATE USERBUYERSCORE TABLE ****************/

CREATE TABLE IF NOT EXISTS `userBuyerScore` (
  `buyerScore` int NOT NULL,
  `buyerId` bigint(20) NOT NULL,
  
  PRIMARY KEY (`buyerId`)
);

/********CREATE USERCARRIERSCORES TABLE ****************/

CREATE TABLE IF NOT EXISTS `userCarrierScore` (
  `carrierId` bigint(20) NOT NULL,
  `speedScore` int NOT NULL,
  `qualityScore` int NOT NULL,
  `deliveryTimeMetCounts` int NOT NULL,
  
  PRIMARY KEY (`carrierId`)
);

/********CREATE DEGREEOFSEPARATION TABLE (This is the network edge table) ****************/

CREATE TABLE IF NOT EXISTS `degOfSep` (
  `idDeg` bigint(20) NOT NULL,
  `fromUserFUId` varchar(100) NOT NULL,
  `toUserFUId` varchar(100) NOT NULL,
  `separationDeg` int NOT NULL,
  
  PRIMARY KEY (`idDeg`)
);

/********CREATE BID POOL ****************/

CREATE TABLE IF NOT EXISTS `bidPool` (
  `idBid` bigint(20) NOT NULL,
  `carrierId` bigint(20) NOT NULL,
  `productRequestId` bigint(20) NOT NULL,
  
  PRIMARY KEY (`idBid`)
);

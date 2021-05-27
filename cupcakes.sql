-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 02 Mai 2018 à 10:19
-- Version du serveur :  5.7.22-0ubuntu0.16.04.1
-- Version de PHP :  7.0.29-1+ubuntu16.04.1+deb.sury.org+1

SET time_zone = "+00:00";

-- first create DB : cupcakes

drop table cupcake;
drop table accessory;

-- --------------------------------------------------------
--

CREATE TABLE accessory ( 
  id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  name varchar(255) NOT NULL,
  url varchar(255) NOT NULL
  ) ;

CREATE TABLE cupcake (
  id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  name varchar(255) NOT NULL,
  color1 varchar(7),
  color2 varchar(7),
  color3 varchar(7),
  id_accessory INT,
  created_at DATETIME
);


ALTER TABLE cupcake
ADD FOREIGN KEY (id_accessory) references accessory(id);



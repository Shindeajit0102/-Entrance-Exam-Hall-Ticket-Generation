CREATE DATABASE COLLEGE;

USE COLLEGE;
-- admin  login details
CREATE TABLE admin_login_info(ID_NO int,AD_PASS varchar(20),AD_NAME varchar(30));

-- inserting default record
INSERT INTO admin_login_info VALUES(1001,'admin','admin');

-- for storing temporary record 
  CREATE TABLE bca_candidate_info(seat_no int PRIMARY KEY AUTO_INCREMENT,candidate_name varchar(50),MOTHER_NAME varchar(30),CATEGORY varchar(30),Q_EXAM varchar(30),P_SSC float,P_HSC float,HSC_COLLEGE varchar(60),HSC_BOARD varchar(30),APPLY_PROGRAM varchar(30),DOB date,PASS_YEAR year,CONTACT_NO varchar(30) ,A_P varchar(30) ,SUB_DISTRICT varchar(30),DISTRICT varchar(30),PIN varchar(30),PHOTO varchar(30));

   CREATE TABLE bcs_candidate_info(seat_no int PRIMARY KEY AUTO_INCREMENT,candidate_name varchar(50),MOTHER_NAME varchar(30),CATEGORY varchar(30),Q_EXAM varchar(30),P_SSC float,P_HSC float,HSC_COLLEGE varchar(60),HSC_BOARD varchar(30),APPLY_PROGRAM varchar(30),DOB date,PASS_YEAR year,CONTACT_NO varchar(30) ,A_P varchar(30) ,SUB_DISTRICT varchar(30),DISTRICT varchar(30),PIN varchar(30),PHOTO varchar(30));

INSERT INTO bca_candidate_info(seat_no) VALUES(1);
INSERT INTO bcs_candidate_info(seat_no) VALUES(1);

-- for storing parment record 
CREATE TABLE final_bcs_candidate_info(seat_no int PRIMARY KEY AUTO_INCREMENT,candidate_name varchar(50),MOTHER_NAME varchar(30),CATEGORY varchar(30),Q_EXAM varchar(30),P_SSC float,P_HSC float,HSC_COLLEGE varchar(60),HSC_BOARD varchar(30),APPLY_PROGRAM varchar(30),DOB date,PASS_YEAR year,CONTACT_NO varchar(30) ,A_P varchar(30) ,SUB_DISTRICT varchar(30),DISTRICT varchar(30),PIN varchar(30),PHOTO varchar(30));

CREATE TABLE final_bca_candidate_info(seat_no int PRIMARY KEY AUTO_INCREMENT,candidate_name varchar(50),MOTHER_NAME varchar(30),CATEGORY varchar(30),Q_EXAM varchar(30),P_SSC float,P_HSC float,HSC_COLLEGE varchar(60),HSC_BOARD varchar(30),APPLY_PROGRAM varchar(30),DOB date,PASS_YEAR year,CONTACT_NO varchar(30) ,A_P varchar(30) ,SUB_DISTRICT varchar(30),DISTRICT varchar(30),PIN varchar(30),PHOTO varchar(30));

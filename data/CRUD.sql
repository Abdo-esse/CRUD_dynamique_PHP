-- Active: 1733434204073@@127.0.0.1@3306
CREATE DATABASE  CRUD_DUNAMYC;
use CRUD_DUNAMYC;
create table users (
    id int AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(50),
    tele VARCHAR(50)
    );
    UPDATE users SET WHERE
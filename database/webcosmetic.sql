-- CREATE DATABASE web;
USE web;

CREATE TABLE IF NOT EXISTS user_types (
    type_id INT PRIMARY KEY AUTO_INCREMENT,
    type_name VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    phone VARCHAR(20) NOT NULL,
    password VARCHAR(255) NOT NULL,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    type_id INT,
    FOREIGN KEY (type_id) REFERENCES user_types(type_id)
);

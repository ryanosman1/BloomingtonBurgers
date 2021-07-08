create table Customer(
id int auto_increment,
first_name VARCHAR(50) NOT NULL,
last_name VARCHAR(50) NOT NULL,
cust_address VARCHAR(100) NOT NULL,
city VARCHAR(50) NOT NULL,
home_state VARCHAR(2) NOT NULL,
email VARCHAR(75) NOT NULL,
primary key(id)
)


engine = innodb;

create table Restaurant(
id int auto_increment,
r_name VARCHAR(50) NOT NULL,
r_address2 VARCHAR(50) NOT NULL,
r_city2 VARCHAR(50) NOT NULL,
restaurant_state VARCHAR(2) NOT NULL,
primary key(id)
)

engine = innodb;

create table Events(
id int auto_increment,
restaurant_id int NOT NULL,
title VARCHAR(50) NOT NULL,
event_date date NOT NULL,
description VARCHAR(300),
primary key(id)
)


engine = innodb;

create table Contact_Us(
id int auto_increment,
customer_id int NOT NULL,
email VARCHAR(75) NOT NULL,
customer_message VARCHAR(500),
primary key (id)
)


engine = innodb; 

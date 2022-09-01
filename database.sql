create database FORUM;

use FORUM;

create table users_table(
    id_user int not null auto_increment primary key,
    pseudo_user varchar(255) not null,
    name_user varchar(255) not null,
    password_user text not null
);
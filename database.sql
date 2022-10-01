create database FORUM;

use FORUM;

create table users_table(
    id_user int not null auto_increment primary key,
    pseudo_user varchar(255) not null,
    name_user varchar(255) not null,
    surname_user varchar (255) not null,
    password_user text not null
);

create table users_question(
    id_q int not null auto_increment primary key,
    q_title text not null,
    q_content text not null,
    q_id_author int not null,
    q_pseudo_author varchar(255) not null,
    q_date text not null
);
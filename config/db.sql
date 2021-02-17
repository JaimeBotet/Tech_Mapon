-- DROP DATABASE maponTest;
CREATE DATABASE maponTest;
USE maponTest;


CREATE TABLE users (
    Id INT(11),
    name VARCHAR(25),
    password VARCHAR(100),
    PRIMARY KEY(Id)
);

INSERT INTO users
    (Id, name, password) values
    (1, 'Jaime', 'test1234'),
    (2, 'Jose', 'test4321'),
    (3, 'Juan', 'test1324');
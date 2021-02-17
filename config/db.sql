CREATE DATABASE maponTest;
USE maponTest;


CREATE TABLE users (
    userId INT(11),
    name VARCHAR(25),
    password VARCHAR(100),
    email VARCHAR(60),
    PRIMARY KEY(userId)
);

INSERT INTO users
    (userId, name, password, email) values
    (1, 'Jaime', 'test1234', 'jaime@test.com'),
    (2, 'Jose', 'test4321', 'jose@test.com'),
    (3, 'Juan', 'test1324', 'juan@test.com');
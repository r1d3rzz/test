-- For Tasks Table 

CREATE TABLE tasks(
    `id` int unsigned not null primary key auto_increment,
    `description` varchar(200) not null,
    `complete` boolean not null
);

INSERT INTO tasks (`description`,`complete`) values 
('go to the store',1),
('finish homework',0);

-- For User Table 

CREATE TABLE users(
    `id` int unsigned not null primary key auto_increment,
    `name` varchar(200) not null
);

INSERT INTO users(`name`) values
('Rider'),('Mg Mg');
DROP TABLE IF EXISTS projects;

CREATE TABLE projects (
    id bigint NOT NULL  PRIMARY KEY,
    name varchar(50),
    description varchar(2500),
    languages varchar(256),
    url varchar(100),
    type varchar(100)
);

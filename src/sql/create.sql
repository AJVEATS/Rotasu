--CREATE SCRIPT

CREATE TABLE user_tbl (

    user_id INT(4) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_name VARCHAR(20) NOT NULL, 
    user_email VARCHAR(35) NOT NULL,
    user_password VARCHAR(128) NOT NULL,
    user_dob DATE NOT NULL,

    CONSTRAINT unique_user UNIQUE (user_id, user_email)
);

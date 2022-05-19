--CREATE USER_ENTRIES_TBL SCRIPTS

CREATE TABLE user_entries_tbl (

    entry_id INT(4) NOT NULL AUTO_INCREMENT,
    user_id INT(4) NOT NULL,
    entry_time DATETIME NOT NULL,
    entry_day VARCHAR(9) NOT NULL,
    am_entry INT(1) NOT NULL,
    pm_entry INT(1) NOT NULL,
    diary_entry VARCHAR(280) NOT NULL,

    CONSTRAINT pk_user_entry_tbl PRIMARY KEY (entry_id),
    CONSTRAINT fk_user_entry_tbl FOREIGN KEY (user_id) REFERENCES user_tbl(user_id),
    CONSTRAINT unique_entry UNIQUE (entry_id)
);
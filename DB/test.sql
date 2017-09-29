CREATE TABLE pages (
        id INT NOT NULL AUTO_INCREMENT,
        subject_id INT(11),
        menu_name VARCHAR(255),
        position INT(3),
        visible TINYINT(1),
        content TEXT,
        PRIMARY KEY (id)
    );

INSERT INTO pages (subject_id, menu_name, position, visible) VALUES (1, 'Globe Bank', 1, 1);

INSERT INTO pages (subject_id, menu_name, position, visible) VALUES (1, 'History', 2, 1);

INSERT INTO pages (subject_id, menu_name, position, visible) VALUES (1, 'Leadershop', 3, 1);

INSERT INTO pages (subject_id, menu_name, position, visible) VALUES (1, 'Contact Us', 4, 1);

INSERT INTO pages (subject_id, menu_name, position, visible) VALUES (2, 'Banking', 1, 1);

INSERT INTO pages (subject_id, menu_name, position, visible) VALUES (2, 'Credit Cards', 2, 1);

INSERT INTO pages (subject_id, menu_name, position, visible) VALUES (2, 'Mortages', 3, 1);

INSERT INTO pages (subject_id, menu_name, position, visible) VALUES (2, 'Mortages', 3, 1);

INSERT INTO pages (subject_id, menu_name, position, visible) VALUES (3, 'Checking', 1, 1);

INSERT INTO pages (subject_id, menu_name, position, visible) VALUES (3, 'Loans', 2, 1);

INSERT INTO pages (subject_id, menu_name, position, visible) VALUES (3, 'Merchant Services', 3, 1);


    id INT(11) NOT NULL AUTO_INCREMENT, menu_name VARCHAR(255), position INT(3), visible TINYINT(1), PRIMARY KEY (id)
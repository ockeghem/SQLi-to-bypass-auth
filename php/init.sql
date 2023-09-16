CREATE TABLE users (id int, userid varchar(64), password varchar(128),  email varchar(128), PRIMARY KEY (id));
INSERT INTO users VALUES (1, 'admin', '$2y$10$7sTu7b3VW6cMreA6QrdYkOQpPP9hSiXLDpuAzElGHios2N/y5Ct2C', 'admin@example.jp');
INSERT INTO users VALUES (2, 'alice', '$2y$10$fxOHmQr3NB4xfvkxOnTTqudbLGUQj4LCgScg9vmsNnpTpRuG4lWMW', 'alice@example.jp');

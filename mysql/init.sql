CREATE TABLE utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100)
);

INSERT INTO utilisateurs (nom)
VALUES
('Alice'),
('Bob'),
('Charlie');

CREATE DATABASE IF NOT EXISTS legumes
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

CREATE USER IF NOT EXISTS 'phpUser'@'%'
IDENTIFIED BY 'NIMva2m95dRnLawt';

GRANT ALL PRIVILEGES
ON legumes.*
TO 'phpUser'@'%';

FLUSH PRIVILEGES;
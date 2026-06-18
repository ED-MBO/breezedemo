USE breezedemo;

CREATE TABLE IF NOT EXISTS Allergeen (
    Id INT AUTO_INCREMENT PRIMARY KEY,
    Naam VARCHAR(100) NOT NULL,
    Omschrijving TEXT NULL
);

INSERT INTO Allergeen (Naam, Omschrijving) VALUES
    ('Pinda', 'Allergie voor pinda''s en pindaproducten'),
    ('Gluten', 'Allergie voor glutenbevattende granen'),
    ('Lactose', 'Intolerantie voor melksuiker'),
    ('Noten', 'Allergie voor boomnoten'),
    ('Schaaldieren', 'Allergie voor schaald- en schelpdieren');

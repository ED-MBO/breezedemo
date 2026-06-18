USE breezedemo;

DROP PROCEDURE IF EXISTS sp_CreateAllergeen;

DELIMITER $$

CREATE PROCEDURE sp_CreateAllergeen(
    IN p_naam VARCHAR(50),
    IN p_description VARCHAR(255)
)
BEGIN
    INSERT INTO Allergeen (
        Naam,
        Omschrijving
    )
    VALUES (p_naam, p_description);

    SELECT LAST_INSERT_ID() AS new_id;
END$$

DELIMITER ;

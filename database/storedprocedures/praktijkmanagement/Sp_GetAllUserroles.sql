USE breezedemo;

DROP PROCEDURE IF EXISTS sp_GetAllUserroles;

DELIMITER $$

CREATE PROCEDURE sp_GetAllUserroles()
BEGIN
    SELECT rolename FROM (
        SELECT 'tandarts' AS rolename
        UNION SELECT 'mondhygienist'
        UNION SELECT 'assistent'
        UNION SELECT 'praktijkmanagement'
        UNION SELECT 'patient'
    ) AS roles
    ORDER BY rolename;
END$$

DELIMITER ;

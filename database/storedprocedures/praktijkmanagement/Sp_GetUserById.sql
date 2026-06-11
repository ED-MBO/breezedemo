USE breezedemo;

DROP PROCEDURE IF EXISTS sp_GetUserById;

DELIMITER $$

CREATE PROCEDURE sp_GetUserById(
    IN p_Id INTEGER
)
BEGIN
    SELECT USRS.id
          ,USRS.name
          ,USRS.email
          ,USRS.rolename
    FROM users as USRS
    WHERE USRS.id = p_Id;
END$$

DELIMITER ;

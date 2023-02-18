# HTML CSS JS PHP webproject
 
DELIMITER //
CREATE PROCEDURE ShtoUser(IN pEmri varchar(50), IN pUsername varchar(32), IN pEmail varchar(200), IN pPassword varchar(200), IN pQyteti varchar(50), IN pFshati varchar(50), IN pZipKodi varchar(20), IN pRoli varchar(10), IN pProfili varchar(200))
BEGIN
	INSERT INTO user(fullname, username, email, password, qyteti, fshati, zipkodi, roli, profili) 
	VALUES (pEmri, pUsername, pEmail, pPassword, pQyteti, pFshati, pZipKodi, CASE WHEN pRoli = 'Admin' THEN 2 ELSE 1 END, pProfili);
END //
DELIMITER ;


procedura me shtu user ose admin

CALL ShtoUser('Endrit Thaqi', 'endritii', 'endritii@gmail.com', 'password123', 'Malisheve', 'Shkarashnik', '11201', 'Admin', 'pathi fotos');

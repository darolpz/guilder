show tables;
desc alumno;
DELIMITER //
CREATE PROCEDURE p_alta_alumno(
IN i_nombre VARCHAR(100),
IN i_apellido VARCHAR(100),
IN i_club VARCHAR(100)
)
BEGIN INSERT INTO alumno(nombre,apellido,club)
VALUES (i_nombre,i_apellido,i_club);
END//

DELIMITER ;

CALL p_alta_alumno('lucia','rivas','independiente');
SELECT*FROM alumno;

DROP PROCEDURE IF EXISTS p_consulta_alumno;
DELIMITER //
CREATE PROCEDURE p_consulta_alumno()
begin
SELECT * FROM alumno;
END //
DELIMITER ;

CALL p_consulta_alumno();

DELIMITER //
CREATE PROCEDURE p_obtener_club(IN i_club VARCHAR(255))
BEGIN SELECT*FROM alumno WHERE club=i_club;
END //
DELIMITER ;

CALL p_alta_alumno('mariana','lopez','boca');
CALL p_alta_alumno('nicole','ineficiente','independiente');

CALL p_obtener_club('boca');

DELIMITER $$
CREATE PROCEDURE p_contar_simpatizantes(
IN i_club VARCHAR(100),
OUT s_rojos INT
)
BEGIN SELECT COUNT(*)
INTO s_rojos FROM alumno WHERE club=i_club;
END $$
DELIMITER ;

CALL p_contar_simpatizantes('independiente', @somosLosMasGrandes);
SELECT @somosLosMasGrandes;
set @'a'=1;
set @'b'=2;
select @a + @b;

DELIMITER //
CREATE PROCEDURE procedimiento1(OUT parametro1 INT)
BEGIN
SELECT COUNT(*) INTO parametro1 FROM alumno;
END //
DELIMITER ;

CALL procedimiento1(@resultado);
SELECT @resultado;

CREATE TABLE nota(
alumno VARCHAR(100),
materia VARCHAR(100),
nota INT);
INSERT INTO nota VALUES('rocio','base de datos 2',10),
('rocio','base de datos 1', 9),
('rocio','sistemas operativos 1', 7),
('rocio','sistemas operativos 2', 6),
('mariana','base de datos 1',8),
('mariana','base de datos 2',10),
('mariana','sistemas operativos 1',8),
('pablo','base de datos 1',4),
('pablo','base de datos 2',2);

SELECT*FROM nota ORDER BY nota;

DELIMITER //
CREATE PROCEDURE p_obtener_notas(
IN i_alumno VARCHAR(100),
OUT s_aprobo INT,
OUT s_promociono INT,
OUT s_desaprobo INT)
BEGIN 
SELECT COUNT(*) INTO s_aprobo FROM nota
WHERE nota>3 AND nota <7 AND alumno=i_alumno;

SELECT COUNT(*) INTO s_promociono FROM nota
WHERE nota>=7 AND alumno=i_alumno;

SELECT COUNT(*) INTO s_desaprobo FROM nota
WHERE nota<4 AND alumno=i_alumno;

END //
DELIMITER ;

CALL p_obtener_notas('rocio',@aprobo,@promociono,@desaprobo);
SELECT @aprobo,@promociono,@desaprobo;


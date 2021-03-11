INSERT INTO server(servername) VALUES('servidor1'),('servidor2');

INSERT INTO usuario(id,nif,usuario,email,clave) VALUES (1000, '0000000X','escrutinador','escrutinador@notld.tld','clave1');

INSERT INTO incidencia(id,id_usuario, prioridad, descripcion, server) VALUES
(1000,1000,'Alta','Incidencia de prueba 1','servidor1'),
(1001,1000,'Media','Incidencia de prueba 2','servidor2');

INSERT INTO estado_incidencia (id_incidencia, estado) VALUES (1000,'Pendiente'),(1000,'En desarrollo'),(1001,'Pendiente'),(1001,'Resuelta');

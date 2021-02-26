SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

DROP DATABASE IF EXISTS dbticketing;
CREATE DATABASE dbticketing;
USE dbticketing;

<<<<<<< HEAD
/*Esto es porque sí, le hace ilusión que no empiece en 1*/
create sequence seqID start 1000;

cretae table server(
	servername character varying primary key;
);

CREATE TABLE incidencia(
	id bigint default nextval('seqId') primary key,
	prioridad character varying not null,
	timestamp_creacion timestamp not null default now(),
	descripcion text not null,
	server references server(servername)
);
CREATE TABLE estado (
	estado character varying primary key,
	CHECK (estado='Pendiente' or estado = 'En desarrollo' or estado = 'Resuelta')
=======
CREATE TABLE cargo (
	cargo character varying primary key
);

CREATE TABLE usuario (
	id serial primary key,
	email character varying unique not null,
	usuario character varying unique not null,
	clave character varying not null,
	cargo character varying not null references cargo(cargo)
>>>>>>> d62a8989ccc661946d75ef0cb9a56c5c8fa80188
);

/*CREATE TABLE proyecto (
	proyecto character varying primary key
);

<<<<<<< HEAD
CREATE TABLE cargo (
	cargo character varying primary key
); */
=======
CREATE TABLE incidencia(
	id serial primary key,
	email_usuario character varying references usuario(email),
	proyecto character varying references proyecto(proyecto),
	descripcion text not null,
	timestamp_creacion timestamp not null default now(),
	prioridad character varying not null
);
>>>>>>> d62a8989ccc661946d75ef0cb9a56c5c8fa80188

CREATE TABLE estado_incidencia (
	id_incidencia bigint references incidencia(id),
	estado character varying references estado(estado),
<<<<<<< HEAD
	timestamp_estado timestamp not null default now()
);

CREATE TABLE usuario (
	id serial default nextval('seqId') primary key,
	nif character varying,
	usuario character varying,
    email character varying,
    clave character varying
	/* cargo character varying references cargo(cargo) */
=======
	CHECK (estado='Pendiente' or estado = 'En desarrollo' or estado = 'Resuelta'),
	timestamp_estado timestamp default now(),
	PRIMARY KEY (id_incidencia,estado,timestamp_estado)
>>>>>>> d62a8989ccc661946d75ef0cb9a56c5c8fa80188
);

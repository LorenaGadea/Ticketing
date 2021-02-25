SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

DROP DATABASE IF EXISTS dbticketing;
CREATE DATABASE dbticketing;
USE dbticketing;

CREATE TABLE cargo (
	cargo character varying primary key
);

CREATE TABLE usuario (
	id serial primary key,
	email character varying unique not null,
	usuario character varying unique not null,
	clave character varying not null,
	cargo character varying not null references cargo(cargo)
);

CREATE TABLE proyecto (
	proyecto character varying primary key
);

CREATE TABLE incidencia(
	id serial primary key,
	email_usuario character varying references usuario(email),
	proyecto character varying references proyecto(proyecto),
	descripcion text not null,
	timestamp_creacion timestamp not null default now(),
	prioridad character varying not null
);

CREATE TABLE estado_incidencia (
	id_incidencia bigint references incidencia(id),
	estado character varying references estado(estado),
	CHECK (estado='Pendiente' or estado = 'En desarrollo' or estado = 'Resuelta'),
	timestamp_estado timestamp default now(),
	PRIMARY KEY (id_incidencia,estado,timestamp_estado)
);

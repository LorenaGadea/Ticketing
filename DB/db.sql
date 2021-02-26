SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

DROP DATABASE IF EXISTS dbticketing;
CREATE DATABASE dbticketing;
USE dbticketing;


CREATE TABLE incidencia(
	id serial primary key,
	prioridad character varying not null,
	timestamp_creacion timestamp not null default now(),
	descripcion text not null
	server references server(servername)
);
CREATE TABLE estado (
	estado character varying primary key,
	CHECK (estado='Pendiente' or estado = 'En desarrollo' or estado = 'Resuelta')
);

/*CREATE TABLE proyecto (
	proyecto character varying primary key
);

CREATE TABLE cargo (
	cargo character varying primary key
); */

CREATE TABLE estado_incidencia (
	id_incidencia bigint references incidencia(id),
	estado character varying references estado(estado),
	timestamp_estado timestamp not null default now()
);

CREATE TABLE usuario (
	id serial primary key,
	usuario character varying,
    email character varying,
    clave character varying,
	cargo character varying references cargo(cargo)
);

cretae table server(
	servername character varying pk;
);
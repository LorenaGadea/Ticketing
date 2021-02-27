SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

DROP DATABASE IF EXISTS dbticketing;
CREATE DATABASE dbticketing;
USE dbticketing;

/*Esto es porque sí, le hace ilusión que no empiece en 1*/
create sequence seqID start 1000;

CREATE TABLE server(
	servername character varying primary key
);

CREATE TABLE incidencia(
	id bigint default nextval('seqId') primary key,
	prioridad character varying not null,
	timestamp_creacion timestamp not null default now(),
	descripcion text not null,
	server character varying references server(servername),
	estado character varying,
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
	estado character varying references incidencia(estado),
	timestamp_estado timestamp not null default now()
);

CREATE TABLE usuario (
	id serial default nextval('seqId') primary key,
	nif character varying,
	usuario character varying,
    email character varying,
    clave character varying
	/* cargo character varying references cargo(cargo) */
);


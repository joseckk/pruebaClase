------------------------------
-- Archivo de base de datos --
------------------------------
DROP TABLE IF EXISTS autores CASCADE;

CREATE TABLE autores
(
    id       bigserial     PRIMARY KEY
  , nombre   varchar(255)  NOT NULL
);

DROP TABLE IF EXISTS libros CASCADE;

CREATE TABLE libros
(
    id          bigserial    PRIMARY KEY
  , isbn        varchar(13)  NOT NULL UNIQUE
  , titulo      varchar(255) NOT NULL
  , anyo        numeric(4)   CONSTRAINT ck_anyo_positivo CHECK (anyo >= 0)
  , autores_id  bigint       NOT NULL REFERENCES autores (id)
);

INSERT INTO autores (nombre)
VALUES ('Miguel Angel')
     , ('Pepe')
     , ('Kike')
     , ('Cervantes');

INSERT INTO libros (isbn, titulo, anyo, autores_id)
VALUES ('123123123', 'Cómo aprender PHP', 2020, 1)
     , ('121321321', 'Cómo olvidar PHP', 2017, 1)
     , ('221321321', 'Cómo olvidar PHP', 2017, 2)
     , ('421321321', 'Cómo olvidar PHP', 2017, 3)
     , ('521321321', 'Cómo olvidar PHP', 2017, 2)
     , ('621321321', 'Cómo olvidar PHP', 2017, 3)
     , ('721321321', 'Cómo olvidar PHP', 2017, 3)
     , ('821321321', 'Cómo olvidar PHP', 2017, 2)
     , ('921321321', 'Cómo olvidar PHP', 2017, 2)
     , ('331321321', 'Cómo olvidar PHP', 2017, 1)
     , ('341321321', 'Cómo olvidar PHP', 2017, 1)
     , ('351321321', 'Cómo olvidar PHP', 2017, 3)
     , ('361321321', 'Cómo olvidar PHP', 2017, 3);

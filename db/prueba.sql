------------------------------
-- Archivo de base de datos --
------------------------------

DROP TABLE IF EXISTS libros CASCADE;

CREATE TABLE libros
(
    id     bigserial    PRIMARY KEY
  , isbn   varchar(13)  NOT NULL UNIQUE
  , titulo varchar(255) NOT NULL
  , anyo   numeric(4)   CONSTRAINT ck_anyo_positivo CHECK (anyo >= 0)
);


INSERT INTO libros (isbn, titulo, anyo)
VALUES ('123123123', 'Cómo aprender PHP', 2020)
     , ('121321321', 'Cómo olvidar PHP', 2017)
     , ('221321321', 'Cómo olvidar PHP', 2017)
     , ('421321321', 'Cómo olvidar PHP', 2017)
     , ('521321321', 'Cómo olvidar PHP', 2017)
     , ('621321321', 'Cómo olvidar PHP', 2017)
     , ('721321321', 'Cómo olvidar PHP', 2017)
     , ('821321321', 'Cómo olvidar PHP', 2017)
     , ('921321321', 'Cómo olvidar PHP', 2017)
     , ('331321321', 'Cómo olvidar PHP', 2017)
     , ('341321321', 'Cómo olvidar PHP', 2017)
     , ('351321321', 'Cómo olvidar PHP', 2017)
     , ('361321321', 'Cómo olvidar PHP', 2017);

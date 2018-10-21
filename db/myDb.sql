CREATE TABLE toys
(
    id SERIAL PRIMARY KEY
    , name VARCHAR(50) 
    , price money
    , isize numeric
    , forKids boolean
    , website VARCHAR(400)
    , image VARCHAR(400)
);

CREATE TABLE costumes
(
    id SERIAL PRIMARY KEY
    , name VARCHAR(50) 
    , price money
    , isize numeric
    , website VARCHAR(400)
    , image VARCHAR(400)

);

CREATE TABLE games
(
    id SERIAL PRIMARY KEY
    , name VARCHAR(50) 
    , price money
    , yearReleased smallserial
    , synopsis text
    , rating character(3) --E, E10, T, M, AO
    , website VARCHAR(400)
    , image VARCHAR(400)

);

CREATE TABLE other
(
    id SERIAL PRIMARY KEY
    , name VARCHAR(50) 
    , price money
    , iSize numeric
    , website VARCHAR(400)
    , image VARCHAR(400)

);

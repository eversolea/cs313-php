CREATE TABLE actor (
    id SERIAL PRIMARY KEY
    , name VARCHAR(100) NOT NULL
    , birthYear SMALLINT
);

CREATE TABLE movie (
    id SERIAL PRIMARY KEY
    , title VARCHAR(100) NOT NULL
    , runtime SMALLINT
    , year SMALLINT
);

CREATE TABLE actor_movie (
    id SERIAL PRIMARY KEY
    , actor_id INT NOT NULL REFERENCES actor(id)
    , movie_id INT NOT NULL REFERENCES movie(id)
);







INSERT INTO other(name, price, isize, website, image) VALUES ('Energy Sword Lamp', 54.00, 3, 'https://www.etsy.com/listing/109510373/halo-energy-sword-lamp-corner-table', 'https://i.etsystatic.com/5284369/r/il/ee7c02/697510276/il_570xN.697510276_li39.jpg');


INSERT INTO other(name, price, isize, website, image) VALUES ('Assault Rifle Hologram', 25.00, 3, 'https://www.etsy.com/listing/639049997/halo-assault-rifle-acrylic-hologram-with?ref=pla_similar_listing_top-2', 'https://i.etsystatic.com/18382553/r/il/698c7a/1600124958/il_570xN.1600124958_mhc2.jpg');

INSERT INTO toys(name, price, isize, forkids, website, image) VALUES ('Energy Sword', 16.99, 3, TRUE, 'https://www.spirithalloween.com/product/energy-sword-halo/150287.uts', 'https://images-na.ssl-images-amazon.com/images/I/71bsUNj%2BLVL._UY879_.jpg');
INSERT INTO costumes(name, price, isize, website, image) VALUES ('Mark VI Master Chief Helmet', 160.00, 2, 'https://www.etsy.com/listing/164038163/halo-3-mark-vi-master-chief-helmet', 'https://i.etsystatic.com/8152502/r/il/25da10/1436816787/il_570xN.1436816787_og16.jpg');
INSERT INTO costumes(name, price, isize, website, image) VALUES ('Cortanas Plan T-shirt', 9.99, 10, 'https://www.jinx.com/p/halo_cortanas_plan_womens_tee.html', 'https://www.jinx.com/productimage/6763/279/1/1000.jpg');
INSERT INTO toys(name, price, isize, forkids, website, image) VALUES ('Warthog', 150.00, 1, FALSE, 'https://www.amazon.com/Jada-Toys-Halo-14-Warthog/dp/B00804H8DA', 'https://images-na.ssl-images-amazon.com/images/I/815SgNwoHKL._SL1500_.jpg');
INSERT INTO toys(name, price, isize, forkids, website, image) VALUES ('Elite Officer with Ghost (Halo 6)', 29.99, 1, FALSE, 'https://www.amazon.com/Mattel-Ghost-Vehicle-Elite-Officer/dp/B01ARGB3U2','https://images-na.ssl-images-amazon.com/images/I/910KhEipEDL._SL1500_.jpg');

INSERT INTO games(name, price, yearreleased, synopsis, rating, website, image) VALUES ('Halo 3', 21.57, 2007, 'Master Chief and the Arbiter must join together to attack the Covenant and destroy the Flood.', 'M', 'https://www.amazon.com/Halo-3-Xbox-360/dp/B000FRU0NU?th=1', 'https://images-na.ssl-images-amazon.com/images/I/813gXz6Vi0L._AC_SX215_.jpg');
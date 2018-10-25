
CREATE TABLE linker (
  topicID VARCHAR(80) PRIMARY KEY REFERENCES topics(name),
  scriptureID FOREIGN KEY REFERENCES scriptures(id)
  );

CREATE TABLE topics (
  id SERIAL PRIMARY KEY NOT NULL,
  name VARCHAR(80) NOT NULL
  );

# Insert data into the new table
INSERT INTO topics (name)
  VALUES ('Faith');
INSERT INTO topics (name)
  VALUES ('Sacrifice');
INSERT INTO topics (name)
  VALUES ('Charity');

INSERT INTO scripture (book, chapter, verse, content)
  VALUES ('Doctrine and Covenants', 88, 49, 'The light shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall comprehend even God, being quickened in him and by him.');

INSERT INTO scripture (book, chapter, verse, content)
  VALUES ('Doctrine and Covenants', 93, 28, 'He that keepeth his commandments receiveth truth and light, until he is glorified in truth and knoweth all things.');

INSERT INTO scripture (book, chapter, verse, content)
  VALUES ('Mosiah', 16, 9, 'He is the light and the life of the world; yea, a light that is endless, that can never be darkened; yea, and also a life which is endless, that there can be no more death.');


# Create a user that can access this table
CREATE USER ta_user WITH PASSWORD 'ta_pass';
GRANT SELECT, INSERT, UPDATE ON scripture TO ta_user;
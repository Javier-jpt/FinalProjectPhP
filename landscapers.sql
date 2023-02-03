CREATE TABLE landscapers.user (
  id int(11) NOT NULL AUTO_INCREMENT,
  username varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO landscapers.user (username, password)
VALUES ('user1', 'password1');

INSERT INTO landscapers.user (username, password)
VALUES ('user2', 'password2');

CREATE TABLE apartman (
	id int(11) AUTO_INCREMENT,
	naziv varchar(32) COLLATE latin2_croatian_ci NOT NULL,
	adresa varchar(32) COLLATE latin2_croatian_ci NOT NULL,
	grad varchar(32) COLLATE latin2_croatian_ci NOT NULL,
	opis text COLLATE latin2_croatian_ci NOT NULL,
	PRIMARY KEY id (id)
);

CREATE TABLE grad (
	id int(11) AUTO_INCREMENT,
	postanskiBr int(10) NOT NULL,
	grad varchar(32) COLLATE latin2_croatian_ci NOT NULL,
	zupanija varchar(32) COLLATE latin2_croatian_ci NOT NULL,
	PRIMARY KEY id (id)
);

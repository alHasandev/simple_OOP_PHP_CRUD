

CREATE TABLE `nama_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `field_satu` varchar(50) DEFAULT NULL,
  `field_dua` varchar(50) DEFAULT NULL,
  `field_tiga` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;


INSERT INTO nama_table VALUES
("1","a","b","c"),
("2","b","c","d");



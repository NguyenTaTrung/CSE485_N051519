CREATE TABLE `users` (
  `id_user` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `firsName` varchar(15) NOT NULL,
  `lastName` varchar(15) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
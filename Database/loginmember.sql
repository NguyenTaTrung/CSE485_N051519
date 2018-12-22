CREATE TABLE `users` (
  `id_user` int(11) NOT NULL PRIMARY KEY,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
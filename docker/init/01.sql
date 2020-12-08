
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`) VALUES
(1, 'Niels', 'Voogt', 'n.voogt@gmail.com'),
(2, 'Tim', 'Pap', 't.pap@gmail.com'),
(3, 'Jap', 'Mul', 'j.mul@gmail.com'),
(4, 'Dirk', 'Lam', 'd.lam@gmail.com');

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

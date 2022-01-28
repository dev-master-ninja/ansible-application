SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `phonebook` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `phonebook` (`id`, `first_name`, `last_name`, `email`) VALUES
(1, 'John', 'Doe', 'john@doe.com'),
(2, 'Jane', 'Doe', 'jane@doe.com'),
(3, 'Tim', 'Doe', 'tim@doe.com'),
(4, 'Anna', 'Doe', 'anna@doe.com');

ALTER TABLE `phonebook`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `phonebook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

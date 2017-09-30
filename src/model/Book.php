<?php
namespace src\model;


/**
  * A summary informing the user what the associated element does.
  *
  * A *description*, that can span multiple lines, to go _in-depth_ into the details of this element
  * and to provide some background information or textual references.
  *
  * @param string $myArgument With a *description* of this argument, these may also
  *    span multiple lines.
  *
  * @return void
  * @author Paulo Henrique <paulo@gmail.com>
  */

class Book extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'book';
}



//SQL Test - Name of Database is 'app'

// CREATE TABLE `book` (
//   `name` varchar(255) NOT NULL,
//   `id` int(11) NOT NULL,
//   `price` double NOT NULL,
//   `description` varchar(255) NOT NULL
// ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
// ALTER TABLE `book` ADD `updated_at` DATETIME NOT NULL AFTER `description`, ADD `created_at` DATETIME NOT NULL AFTER `updated_at`;
// INSERT INTO `book` (`name`, `id`, `price`, `description`, `updated_at`, `created_at`) VALUES
// ('Drop Test', 1, 100, 'new', '2017-09-30 02:30:32', '2017-09-30 02:30:32');
// CREATE TABLE `user` (
//   `id` int(11) NOT NULL,
//   `email` varchar(255) NOT NULL,
//   `password` varchar(255) NOT NULL
// ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
// ALTER TABLE `book`
//   ADD PRIMARY KEY (`id`);
// ALTER TABLE `user`
// ADD PRIMARY KEY (`id`);
// ALTER TABLE `book`
//   MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
// ALTER TABLE `user`
//   MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
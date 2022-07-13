<?php

require ('Email.php');
require ('User.php');
require ('UsersRepository.php');

# First, we get an instance of UsersRepository and Email classes
$usersRepository = UsersRepository::getInstance();
$emailSender = new Email();
# Then, we attach the Email class to UsersRepository observers' pool
$usersRepository->attach($emailSender);
# Now we may create a new user
$user = new User('Rafael', 'rafaelmelo.programmer@gmail.com');
$usersRepository->createUser($user);

?>
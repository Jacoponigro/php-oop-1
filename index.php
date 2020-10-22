<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-oop-1</title>
  </head>
  <body>
    <?php
    class User {
    public $name;
    public $lastname;
    public $username;
    public $email;
    public $password;
}

$user1 = new User("Jacopo","Nigro","Jacknigro","jacoponigro@gmail.com","Jacoponigro");
$user2 = new User("Marco","Acerbi","Marcoace","marcoacerbi@gmail.com","Marchino01");
$user3 = new User("Gregorio","Stilli","Gregstilli","gregoriostilli@hotmail.com","Gregorio130499")
$user4 = new User("Tommaso","Colarusso","Colaminxhiu","tommasocolarusso@gmail.com","Tommicola00")
$user5 = new User("Carlotta","Landini","Totta1999","carlottalandini@hotmail.com","Jacoponigro")
    ?>
  </body>
</html>

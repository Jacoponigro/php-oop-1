<?php
// stabilisco dati usuer
class User {
public $name;
public $lastname;
public $username;
public $email;
public $password;

}
// creo 5 utenti
$user1 = new User("Jacopo","Nigro","Jacknigro","jacoponigro@gmail.com","Jacoponigro");
$user2 = new User("Marco","Acerbi","Marcoace","marcoacerbi@gmail.com","Marchino01");
$user3 = new User("Gregorio","Stilli","Gregstilli","gregoriostilli@hotmail.com","Gregorio130499");
$user4 = new User("Tommaso","Colarusso","Colaminxhiu","tommasocolarusso@gmail.com","Tommicola00");
$user5 = new User("Carlotta","Landini","Totta1999","carlottalandini@hotmail.com","Jacoponigro");

// creo array users
$users = [$user1,$user2,$user3,$user4,$user5];

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-oop-1</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>USERS</h1>
    <div class="container">
      <div>
        <ul class="flex">
          <li>name</li>
          <li>lastname</li>
          <li>username</li>
          <li>email</li>
          <li>password</li>
        </ul>
      </div>
      <div>
        <ul class="flex">
        <?php foreach($users as $user): ?>
          <li><?php echo $User->name ; ?></li>
          <li><?php echo $User->lastname ; ?></li>
          <li><?php echo $User->username ; ?></li>
          <li><?php echo $User->email ; ?></li>
          <li><?php echo $User->password ; ?></li>
          <?php endforeach;  ?>
        </ul>
      </div>
      <div>
        <ul class="flex">
          <li>name</li>
          <li>lastname</li>
          <li>username</li>
          <li>email</li>
          <li>password</li>
        </ul>
      </div>
      <div>
        <ul class="flex">
          <li>name</li>
          <li>lastname</li>
          <li>username</li>
          <li>email</li>
          <li>password</li>
        </ul>
      </div>
      <div>
        <ul class="flex">
          <li>name</li>
          <li>lastname</li>
          <li>username</li>
          <li>email</li>
          <li>password</li>
      </ul>
    </div>
    </div>
  </body>
</html>

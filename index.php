<?php

if(isset($_POST["name"])){

  class MyDB extends SQLite3
  {
    function __construct()
    {
      $this->open('database.db');
    }
  }

$db = new MyDB();
if(!$db){
  echo $db->lastErrorMsg();
}else{
  echo "Database is Ok".'<br>';
}
$sql = 'SELECT ID from USERS where USERNAME="'.$_POST["name"].'" and PASSWORD="'.$_POST["pass"].'"  ;';

$id='';

$ret = $db->query($sql);
while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
  $id= $row['ID'] !== null? $row['ID']: false;
  
}





if($id!=""){

  echo "<h1>Success!</h1><br>";
  echo "logged in as : ". $id;
}else{
  echo "User not exist, please try again";
}


exit();

}

?>

<html>
  <body>
    <form action="<?php $_PHP_SELF ?>" method="POST">
      Name: <input type="text" name="name"/>
      Password: <input type="Password" name="pass"/>
      <input type="submit" />
    </form>
  </body>
</html>
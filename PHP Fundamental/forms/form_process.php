<?php

if (isset($_POST['submit'])) {
    //echo 'It work';
    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // $min = 5;
    // $max = 10;
    $fullName = array('john', 'peter', 'william');

    // if(strlen($username)<$min){
    //     echo 'username is too short'.'<br>';
    // }

    // if(strlen($username)>$max){
    //     echo 'username is too long'.'<br>';
    // }

    if (!in_array($username, $fullName)) {
        echo 'you are not allowed' . '<br>';
    } else {
        echo 'welcome' . '<br>';
    }

    // echo $username . '<br>';
    // echo '<h3>' . $email . '</h3>';
}

?>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-6 mt-5">
           <h1 class="text-center">Form Fields</h1>
           <form action="forms.php" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name='name' class="form-control" >
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" >
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </form>

      </div>
  </div>
</div>

</body>
</html> -->

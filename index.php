<?php

$str = "j'adore PHP";
$pattern = "/Adore/i";
echo preg_match($pattern, $str);

// $str = "le ver vert va VERS le verre.";
// $pattern = "/ver/i";
// echo preg_match_all($pattern, $str);

// $str ="POO c'est très facile!";
// $pattern ="/facile/i";
// echo preg_replace($pattern,"difficile", $str);




// function test_input($data)
// {
//     $data = trim($data);  // Remove leading and trailing whitespaces
//     $data = stripslashes($data);  // Remove backslashes (\)
//     $data = htmlspecialchars($data);  // Convert special characters to HTML entities
//     return $data;
// }
// if (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['submit'])) {


//     $name = test_input($_POST["name"]);
//     if (!preg_match("/^[a-z A-Z]*$/", $name)) {
//        echo "Erreur : Seuls les espaces pour les lettres sont autorisés dans la case du nom <br>";
//     }else{
//         echo "votre nom est valid <br>";
//     }


//     $email = test_input($_POST["email"]);
//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         echo "Error:Format d'email invalide<br>";
//     }else{
//         echo "votre email est valid<br>";
//     }
// }

?>


<!-- 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <form action="" method="post" class="d-flex flex-column justify-content-center align-items-center m-5">
        <div class="card d-flex justify-content-center align-items-center bg-dark w-50">
            <img src="../RegExp_negar_shahbazi/img/coderpad-regex-the-complete-guide.jpg" class="card-img-top w-50 h-50 m-5" style="width: 18rem;" alt="...">
            <div class="card-body">
                <input type="text" name="name" placeholder="Name:">
                <input type="text" name="email" placeholder="Email:">
                <button type="submit" name="submit">send</button>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html> -->
<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $query = "Select * from movie";
    $movie_data = "";
    $result = mysqli_query($con, $query);
    
    if($result)
    {
        if($result && mysqli_num_rows($result) > 0)
        {
            global $movie_data = mysqli_fetch_assoc($result);
            echo "hello world";
        }
    }
    $my_message = "Wrong username or password!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "$movie_data";
    ?>
</body>
</html>

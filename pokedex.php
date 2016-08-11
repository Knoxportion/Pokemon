<?php
    ini_set('mysql.connect_timeout',300);
    ini_set('default_socket_timeout',300);
?>
<html>
<head>
    <title>Pokédex</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/main.css"></link>
    <link rel="stylesheet" type="text/css" href="css/responsive.css"></link>
</head>
    <body>
    <div class="header">
        <nav>
            <a href="index.html"><img src="img/dragonair.gif" alt="Dragonair" height="70" width="70"></a>
            <a href="index.html"> Home </a>
            <a href="evolution.html"> Evolution</a>
            <a href="pokedex.php"> Pokédex </a>
            <a href="map.html"> Pokémon locations </a>
            <a href="main_login.php">Log in</a>
        </nav>
    </div>
    <body>
        <form method="post" enctype="multipart/form-data">
        <br/>
            <input type="file" name="image" />
            <br/><br/>
            <input type="text" name="pokemonName" />
            <br/><br/>
            <input type="text" name="type1" />
            <br/><br/>
            <input type="text" name="type2" />
            <br/><br/>
            <input type="text" name="description" />
            <br/><br/>
            <input type="submit" name="submit" value="Upload" />
        </form>
        <div id="wrapper">
            <ul id="gallery">
        <?php
            if(isset($_POST['submit']))
            {
                if(getimagesize($_FILES['image']['tmp_name']) == FALSE)
                {
                    echo "Please select an image.";
                }
                else
                {
                    $pokemonName = $_POST['pokemonName'];
                    $type1 = $_POST['type1'];
                    $type2 = $_POST['type2'];
                    $description = $_POST['description'];
                    $image= addslashes($_FILES['image']['tmp_name']);
                    $name= addslashes($_FILES['image']['name']);
                    $image= file_get_contents($image);
                    $image= base64_encode($image);
                    saveimage($name, $pokemonName, $type1, $type2, $description, $image);
                }
            }
            displayimage();
            //echo $pokemonName, $type1, $type2, $description;
            function saveimage($name, $pokemonName, $type1, $type2, $description, $image)
            {
                $con=mysql_connect("localhost","root","");
                mysql_select_db("pokemon",$con);
                $qry="insert into pokedex (Filename, Name, Type1, Type2, Description ,Image) values ('$name','$pokemonName','$type1','$type2','$description','$image')";
                $result=mysql_query($qry,$con);
                if($result)
                {
                 //   echo "<br/>Image uploaded.";
                }
                else
                {
                  //  echo "<br/>Image not uploaded.";
                }
            }
            function displayimage()
            {
                $con=mysql_connect("localhost","root","");
                mysql_select_db("pokemon",$con);
                $qry="select * from pokedex";
                $result=mysql_query($qry,$con);
                while($row = mysql_fetch_array($result))
                {
                    echo '<li>
                    <h1>'.$row[2].'  #'.$row[0].'</h1> <img height="300" width="300" src="data:image;base64,'.$row[6].' ">
                    <p>'.$row[3].'  |  '.$row[4].'</p> 
                    <p>'.$row[5].'</p>
                    </li>';
                    
                }
                mysql_close($con);   
            }
        ?>
    </ul>
    </div>
                    <footer>
        <p>Temporary footer</p>

    </footer>
    </body>
</html>
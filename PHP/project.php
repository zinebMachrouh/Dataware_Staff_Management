<?php
    session_start();
    include './connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="shortcut icon" href="../assets/brand.png" type="image/x-icon">
    <link rel="stylesheet" href="../style/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        nav a{
            color: #1e1e1e;
            text-align: center;
            background-color: transparent;
            font-weight: 500;
            border-bottom: 2px solid #00a6e8;
            border-radius: 0px;
            width: fit-content;
        }
    </style>
</head>
<body>
    <?php 
        if ($_SESSION["role"]) {
            echo 
                "<header>
                    <h2>Data<img src=../assets/brand.png alt=brand />are</h2>
                    <nav>
                        <a href='./home.php'>Home</a>
                        <a href='./create.php'>+ new member</a>
                        <button type=button><img src=../assets/group.png /></button>
                    </nav>
                </header>"
            ;
        }else{
            echo 
                "<header class=userH >
                    <h2>Data<img src=../assets/brand.png alt=brand />are</h2>
                    <nav>
                        <a href='./home.php'>Home</a>
                        <a href='../index.php'>LogOut</a>
                    </nav>
                </header>"
            ;
        }
        ?>
        <main>
            <div class="cards" style="height: 91vh;">
                <?php 
                    error_reporting(E_ALL);
                    ini_set("display_errors", 0);
                    $id = $_GET['project'];

                    $users = mysqli_query($connect, "Select * from users inner join team on team.idEquipe = users.id_equipe where deleted = 0 and projet = '$id' order by id asc ");

                    while($row =  mysqli_fetch_assoc($users)) {
                        echo "<div class=card>
                            <span>".$row["id"]."</span>
                            <h2>".$row["prenom"]." ".$row["nom"]."</h2>
                            <h4>".$row["email"]."</h4>
                            <h3>Service : ".$row["service"]." - ".$row["status"]."</h3>
                            <p class=desc>Team Description : ".$row["description"]."</p>
                            <div class=container>
                                <a href='./team.php?team=".$row["idEquipe"]."' title=Team>".$row["nomEquipe"]."</a>
                                <a title=Project>".$row["projet"]."</a>
                            </div>";
                            echo ($_SESSION["role"] && $_SESSION["team"] === $row["idEquipe"]) ? "<div class=actions ><a href='./modify.php/?modifyOne=".$row["id"]."' class='bi bi-pencil modify'></a> <a href='./home.php?deleteOne=".$row["id"]."' class='bi bi-trash3 delete'></a></div>" : "";
                        echo "</div>";
                    }

                ?>
            </div>
        </main>
        <footer>
        </footer>
</body>
</html>
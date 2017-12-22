<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <h1>ToDoList</h1>

    <?php

    include ('classes/Todo.php');
    include ('classes/Db.php');
    include ('db/config.php');

    $baa = $bdd->query('SELECT * FROM todolist');
    $resultat = $baa->fetchAll();
    
foreach($resultat as $todo){

    ?>

    <section>

        <form action="forms/updateTodo.php" method="post" id="form1"> <br>
            <input type="checkbox" id="squaredTwo" name="upDate"> <br>
            <input class="inputtext" type="text" name="text" value="<?php echo $todo['text']; ?>" />
            <input class="imgbutton" type="image" src="img/save.png" value="submit" name="save" width="30px" heigth="30px"/>
            <input type="hidden" name="idtodo" value="<?php echo $todo['id']; ?>"/>

            </form>
            <div id="form2">
                <form action="forms/deleteTodo.php" method="post">
                <input class="imgbutton" type="image" src="img/poubelle.png" value="submit" name="trash" width="30px" heigth="30px"/>
                <input type="hidden" name="idtodo" value="<?php echo $todo['id']; ?>">    
                </form>
            </div>

        
        <?php  }  ?>

        <form action="forms/addTodo.php" method="post" id="form3">
            <input class="inputadd" type="textarea" name="text">
            <input class="imgbutton" type="image" src="img/save.png" value="submit" name="save" width="30px" heigth="30px"/>
            </i>
        </form>
    </section>
</body>

</html>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1><span>T</span>odolist  <img src="img/pencil45.png" alt="crayon logo" height="30px" width="30px"></h1>

    <?php
   
    include ('classes/Db.php');
    include ('db/config.php');

    $bdd = connect();
    $baa = $bdd->query('SELECT * FROM todolist');
    $resultat = $baa->fetchAll();
    //($check == 1) ? $checked = 'checked' : $checked = '';
    
foreach($resultat as $todo){
   ?>

    <section>
<div id="containerTodo">
        <form action="forms/updateTodo.php" method="post" id="form1"> <br>
            <input type="checkbox" id="squaredTwo" name="check" <?php if($todo['done']==1){ echo "checked";} ?> <br>
            <input class="inputtext" type="text" name="text" value="<?php echo $todo['text']; ?>" />
            <input class="imgbutton" type="image" src="img/save.png" value="submit" name="save" width="30px" heigth="30px"/>
            <input type="hidden" name="idtodo" value="<?php echo $todo['id']; ?>"/>
        </form>
            <form action="forms/deleteTodo.php" method="post">
            <input class="imgpoubelle" type="image" src="img/poubelle.png" value="submit" name="trash" width="30px" heigth="30px"/>
            <input type="hidden" name="idtodo" value="<?php echo $todo['id']; ?>">    
        </form>
            
</div>
        <?php  }  ?>

        <form action="forms/addTodo.php" method="post" id="form3">
            <input class="inputadd" type="textarea" name="text">
            <input class="imgadd" type="image" src="img/pencil45.png" value="submit" name="save" width="30px" heigth="30px"/>
        </form>
    </section>
</body>

</html>
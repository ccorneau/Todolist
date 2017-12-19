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

    
    $Test1 = new Todo('Test1', true, 'erkgejgerij'); // Id automatique
    //$Test1 = new Todo('Test1', true, 'erkgejgerij'); // Id en paramètre    
    $Test2 = new Todo('Test2',false);
    $Test3 = new Todo('Test3',true,'Amaria');
    $Test4 = new Todo('Test4',true,'HEYYY');

    // Mise dans un tableau
    $arrayTodo = [];
    array_push($arrayTodo, $Test1);
    array_push($arrayTodo, $Test2);
    array_push($arrayTodo, $Test3);
    array_push($arrayTodo, $Test4);

    var_dump($arrayTodo);


    $Test4->delete($arrayTodo);
   

    echo '<br /><br /><br />';

    var_dump($arrayTodo);

foreach($arrayTodo as $todo){
    ?>

    <section>

        <form action="forms/uptadeTodo.php" method="post" id="form1">
            <input type="checkbox" name="upDate">
            <input type="text" name="List" value="<?php echo $todo->getText(); ?>" />

            <i class="fa fa-toggle-on" aria-hidden="true">
                <input type="button" />
            </i>


            <div id="form2">
                <form action="forms/deleteTodo.php" method="post">

                    <i class="fa fa-trash" aria-hidden="true">
                        <input type="button" />
                    </i>
                </form>
            </div>

        </form>
        <?php  }  ?>

        <form action="forms/addTodo.php" method="post" id="form3">
            <input type="textarea" name="Add">
            <i class="fa fa-floppy-o" aria-hidden="true">
                <input type="button" />
            </i>
        </form>
    </section>
</body>

</html>
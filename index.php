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
    
    $test1 = new Todo('Test1',true);
    $test2 = new Todo('Test2',false);

    $tab =[$test1,$test2];
    // foreach($tab as $todo){
    //    echo $todo->getText();
    // }


foreach($tab as $todo){
    ?>
   

    <section>
        <form action="forms/uptadeTodo.php" method="post" id="form1">
            <input type="checkbox" name="upDate">
            <input type="text" name="List" value="<?php echo $todo->getText(); ?>" />

            <i class="fa fa-toggle-on" aria-hidden="true">
                <input type="button" />
            </i>

            <div id="form2">
                <form action="forms/deleteTodo.php" method="post" >
            
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
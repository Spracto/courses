<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>delete course</title>
    </head>
    <body>
        <div class="container">
            <h1>Are you sure you want to delete the course?</h1>
            <p><?php


            echo 'name: '.$title;
            echo 'description '.$description;
                // foreach($record as $rec => $value)
                // {
                //     if($rec == 'title')
                //     {
                //         echo "<p>name: {$value} </p>";
                //     }
                //     if($rec == 'description')
                //     {
                //         echo "<p>description: {$value} </p>";
                //     }
                //
                // }

                ?></p>
            <form action="" method="post">
                <input type="submit" value="no">
            </form>
            <form action="/delete/<?=$id?>" method="post">
                <input type="submit" value="Yes I want to delete this">
            </form>
        </div>
    </body>
</html>

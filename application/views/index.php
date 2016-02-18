<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Courses</title>
        <style>
            td{
                padding: 5px;
                border: 2px solid black;
            }
        </style>
    </head>
    <body>
        <div id="container">
            <p>Add a new course</p>
            <form action="/welcome/add" method="post">
                <p>Name:<input name="title" type="text"></p>
                <p>Description:<textarea name="description" rows="6" cols="80" type="text"></textarea></p>
                <input type="submit" value="add">
            </form>
            <p>Courses</p>
            <table>
                <thead>
                    <tr>
                        <th>course name</th>
                        <th>Description</th>
                        <th>Date Added</th>
                        <th>Actions</th>
                    </tr>
                <tbody>

                    <?php
                        foreach($records as $rec)
                        {
                        echo "<tr>";
                                foreach($rec as $key => $value)
                                {
                                    if($key == 'title' || $key == 'description' || $key == 'created_at')
                                    {
                                    echo "<td>".$value."</td>";
                                    }
                                }
                            echo "<td><a href='/remove/{$rec['id']}'>remove</a></td>";

                        echo "</tr>";
                        }
                    ?>

                </tbody>
            </table>
        </div>
    </body>
</html>

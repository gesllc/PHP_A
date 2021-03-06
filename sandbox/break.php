<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
    
        <title>Break statement examples</title>
    </head>
    <body>
        <?php
            echo "Example: use of break in a for loop...<br />";
            for ($count = 0; $count <= 10; $count++)
            {
                if ($count == 5)
                {
                    break;
                }
                echo $count . ", ";
            }

            echo "<br />";
            echo "Example: For loop inside a for loop...<br />";
            for ($i = 0; $i <= 5; $i++)
            {
                if ($i % 2 == 0)
                {
                    continue;
                }
                echo "=============<br />";
                for ($k = 0; $k <= 5; $k++)
                {
                    if ($k == 3)
                    {
                        break(2); // Will break on "second loop out"
                    }
                    echo $i . " - " . $k . "<br />";
                }
            }


        ?>



    </body>
</html>

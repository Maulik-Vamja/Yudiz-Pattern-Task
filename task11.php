<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
<div class="container mt-5">
    <div class="row">
            <form method="post">
                <input name="value" placeholder="Enter Your number for Printing pattern" class="form-control">
                <input type="submit" class="btn btn-primary mt-2" name="submit" value="Print Pattern">
            </form>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
        <?php
        if(isset($_POST['submit'])){
            $n = $_POST['value'];
            for ($i=1; $i <= $n ; $i++) { 
                for ($j=1; $j <= $n; $j++) { 
                    if($j <= ($n-$i))
                        echo ("&nbsp;");
                    else
                        echo " * ";
                }
                echo "<br>";
            }
            for ($i=2; $i <= $n; $i++) { 
                for ($j=1; $j <= $n; $j++) { 
                    if($j < $i)
                        echo ("&nbsp;");
                    else
                        echo " * ";
                    }
                echo "<br>";
            }

        }
?>
        </div>
    </div>
</body>

</html>

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
                <input name="s_value" placeholder="Enter Your Start number for Printing pattern" class="form-control">
                <input name="e_value" placeholder="Enter Your End number for Printing pattern" class="form-control mt-3">
                <input type="submit" class="btn btn-primary mt-2" name="submit" value="Print Pattern">
            </form>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
        <?php
        if(isset($_POST['submit'])){
            $n = $_POST['s_value'];
            $e = $_POST['e_value'];
            if ($n % 2 == 0) {
                for ($i = $n - 2; $i <= $e; $i = $i + 2) {
                    for ($j = $n - 2; $j < $i; $j = $j + 2) {
                        echo $i;
                    }
                    echo "<br>";
                }
            } else {
                $d = $n + 1;
                for ($i = $d - 2; $i <= $e; $i = $i + 2) {
                    for ($j = $d - 2; $j < $i; $j = $j + 2) {
                        echo $i;
                    }
                    echo "<br>";
                }
            }
            
        }
?>
        </div>
    </div>
</body>

</html>

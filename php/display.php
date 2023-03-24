<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admission</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <img src="img.jpg" alt="" width="1500px" height="250xp">

    <h1>
        <center>Admission form </center>

    </h1>
    <table class="table">
        <thead>
            <tr>
                <th>uid</th>
                <th>name</th>
                <th>detail</th>
            </tr>
        </thead>
        </tbody>
        <?php
        $con = new mysqli("localhost", "root", "", "text");
        if ($con->connect_error) {
            echo "Failed to connect to MySQL:" . $con->connect_error;
            exit();
        }
        $sql = "select `uid`,`firstname`,`lastname` from `studentdata` where 1";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($result)) {
            $uid = $row['uid'];
            echo '<tr>';
            echo "<td>" . $row['uid'] . "</td>";
            echo "<td>" . $row['firstname'] . "" . $row['lastname'] . "</td>";
            echo "<td><a href='details.php?uid=" . $uid . "'>click</a> </td>";


            echo '<tr>';
        }
        ?>

    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>```
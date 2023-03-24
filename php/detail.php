<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <?php
    $con = new mysqli("localhost", "root", "", "text");
    if ($con->connect_error) {
        echo "Failed to connect to MySQL: " . $con->connect_error;
        exit();
    }

    $uid = $_GET['uid'];
    $sql = "SELECT * FROM `studentdata` WHERE `uid`='$uid'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    ?>
    <div class="container bg-light mx-auto">

        <img src="img.jpg" alt="" width="1500" height="250">
        <h1>
            <center>Admission form </center>
        </h1>
        <div class="container">
            <form action="" method="post">
                <div class="row">
                    <div class="col">
                        <label>First name</label>
                        <input class="form-control" type="text" name="firstname" placeholder="First name" />
                    </div>
                    <div class="col">
                        <label>Middle name</label>
                        <input class="form-control" type="text" name="middlename" placeholder="Middle name" />
                    </div>
                    <div class="col">
                        <label>Last name</label>
                        <input class="form-control" type="text" name="lastname" placeholder="Last name" />
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Email</label>
                        <input class="form-control" type="text" name="email" placeholder="xyz@gmail.com" />
                    </div>
                    <div class="col">
                        <label>Contact</label>
                        <input class="form-control" type="text" name="contact" placeholder="xxxxxxxxx" />
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Address</label>
                        <textarea class="form-control" name="address"></textarea>
                    </div>
                    <div class="col">
                        <label>Date of Birth</label>
                        <input class="form-control" type="date" name="dob" />
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Aadhaar</label>
                        <input class="form-control" type="text" name="aadhaar" placeholder="Aadhaar" />
                    </div>
                    <div class="col">
                        <label>Gender:</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="male">
                            <label class="form-check-label" for="radio1">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="female">
                            <label class="form-check-label" for="radio2">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="other">
                            <label class="form-check-label" for="radio1"> other</label>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <label>Level</label>
                    <select class="level" name="course" id="course">
                        <option value="junior">junior</option>
                        <option value="ug">ug</option>
                        <option value="pg">pg</option>
                    </select>
                </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>
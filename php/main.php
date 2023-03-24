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

    <img src="img.jpg" alt="" width="1500" height="250">
    <h1>
        <center>Admission form </center>
    </h1>
    <div class="container">
        <form action="">
            <div class="row">
                <div class="col">
                    <label for="sFirstname">First name</label>
                    <input class="form-control" type="text" name="sFirstname" id="sFirstname" placeholder="First name" />
                </div>
                <div class="col">
                    <label for="sMiddlename">Middle name</label>
                    <input class="form-control" type="text" name="sMiddlename" id="sMiddlename" placeholder="Middle name" />
                </div>
                <div class="col">
                    <label for="sLastname">Last name</label>
                    <input class="form-control" type="text" name="sLastname" id="sLastname" placeholder="Last name" />
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="sEmail">Email</label>
                    <input class="form-control" type="text" name="sEmail" id="sEmail" placeholder="xyz@gmail.com" />
                </div>
                <div class="col">
                    <label for="sContact">Contact</label>
                    <input class="form-control" type="text" name="sContact" id="sContact" placeholder="xxxxxxxxx" />
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="sAddress">Address</label>
                    <textarea class="form-control" name="sAddress" id="sAddress"></textarea>
                </div>
                <div class="col">
                    <label for="Date of Birth">Date of Birth</label>
                    <input class="form-control" type="date" name="Date of Birth" id="Date of Birth" placeholder="Date of Birth" />
                </div>
            </div>
            <div class="row">
                <div class="col mt-3">
                    <label for="image">Upload Your Image</label>
                    <input class="form-control" type="file" name="image" id="image" />
                </div>
                <div class="col">
                    <label for="sAddress">Aadhaar</label>
                    <input class="form-control" type="text" name="Aadhaar" id="Aadhaar" placeholder="Aadhaar" />
                </div>
            </div>
            <div class="row">
                <div class="col mt-3">
                    <label>Gender:</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="other" value="other">
                        <label class="form-check-label" for="other">other</label>
                    </div>
                    <div class="col">
                        <label>Level</label>
                        <select class="level" name="course" id="course">
                            <option value="junior">junior</option>
                            <option value="ug">ug</option>
                            <option value="pg">pg</option>
                        </select>
                    </div>
                    <form method="POST" action="process-form.php">
                        <label for="ssc_percentage">SSC Percentage:</label>
                        <input type="text" id="ssc_percentage" name="ssc_percentage"><br>

                        <label for="hsc_percentage">HSC Percentage:</label>
                        <input type="text" id="hsc_percentage" name="hsc_percentage"><br>

                        <label for="qualification">Qualification:</label>
                        <select id="qualification" name="qualification">
                            <option value="SSC">SSC</option>
                            <option value="HSC">HSC</option>
                            <option value="Bachelor's Degree">Bachelor's Degree</option>
                            <option value="Master's Degree">Master's Degree</option>
                        </select><br>

                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
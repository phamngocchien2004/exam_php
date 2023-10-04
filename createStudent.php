<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<section>

    <div class="container">

        <div class="row">

            <div class="col"></div>
            <div class="col">
                <form style="border: #a7f8de solid 0.3px; padding: 30px;margin-top: 25%;" action="postNewStudent.php" method="post">
                    <h2 style="font-size: 30px;text-align: center;margin-bottom: 15px;color: blueviolet ">Create New Student</h2>
                    <div class="mb-3">
                        <label>Full Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" required/ >
                    </div>
                    <div class="mb-3">
                        <label>Age</label>
                        <input type="number" name="age" class="form-control" placeholder="Age" required/>
                    </div>
                    <div class="mb-3">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" placeholder="Address" required/>
                    </div>
                    <div class="mb-3">
                        <label>Telephone</label>
                        <input type="number" name="telephone" class="form-control" placeholder="Telephone" required/>
                    </div>
                    <button style="width: 100% ;margin-top: 5px" type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
</section>
</body>
</html>
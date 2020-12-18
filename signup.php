<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <center>
        <div class=" signup">
            <h1 class="form-control btn-primary">Registration</h1>
            <br>
            <form action="insert.php" method="POST">

                <label for="name">Name:</label>
                <br>

                <input type="text" placeholder="Enter username" name="name" required class="form-control">

                <br>

                <label for="email">Email:</label>
                <br>

                <input type="email" placeholder="Enter  Email" name="email" required class="form-control">
                <br>

                <label for=" number">Number:</label>
                <br>

                <input type="number" placeholder="Enter Number" name="number" required class="form-control">
                <br>

                <label for="password">Password:</label>
                <br>

                <input type="password" placeholder="Enter Password" name="password" required class="form-control">
                <br>



                <button type="submit" class="form-control  btn-outline-danger">Signup</button>

            </form>
        </div>
    </center>

    <!-- PHP Start -->




</body>

</html>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header><h1>Medlemskap</h1></header>
    <form name="member" method="POST" action="otherfile.php">
        <fieldset method="post" action="">
            <label>Name:<input type="text" name="name"></label>
            <br>
            <label>Age:<input type="number" name="age"></label>
            <br>
            <label>Kissekatt<input type="radio" name="kittypreference" value="kissekatt"></label>
            <label>Dogge<input type="radio" name="kittypreference" value="dogge"></label>
            <br>
            <input type="reset" value="Reset">
            <input type="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>
<style>
    html {
        font-size: 14;
        font-family: sans-serif;
        text-align: center;
        color: green;
    }
    body {
        display: inline-block;
        width: 40%;
    }
    input {
        margin: 10px;
    }
    input[name="age"] {
        max-width: 60px;
    }
</style>
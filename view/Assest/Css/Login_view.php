<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود به پنل کاربری</title>
</head>
<style>
    div {
            border-style: solid;
            border-color: rgb(102, 102, 102);
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 25px;
            margin-top: 50px;
            margin-left: 700px;
            margin-right: 700px;

        }

        body {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            direction: rtl;
            background-color: #ffffff;
            font-size: 30px;
        }

        input [type=text],
        [type=email],
        [type=password] {
            width: 100%;
            padding: 12px 20px;

            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }


        

        .button {
            border-radius: 5px;
            width:15%;
            height: 5%;
            font-size: 18px;
            background-color: white;
            color: black;
            border: 2px solid #4CAF50;
            cursor: pointer;
            /* Green */
        }

        .button {
            transition-duration: 0.4s;
        }

        .button:hover {
            background-color: #4CAF50;
            /* Green */
            color: white;
        }
</style>
<body>
    <div>
        <form action="../Login_Controller.php" method="post">
            <label for="Email">رایانامه</label>
            <input type="email" name="Email" id="Email">
            <label for="Password">گذرواژه</label>
            <input type="password" name="Password" id="Password">
            <input type="submit" value="ورود" class="button">
        </form>
    </div>
</body>
</html>
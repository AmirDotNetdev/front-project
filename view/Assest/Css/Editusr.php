<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <style>
        

        div {
            border-style: solid;
            border-color: rgb(102, 102, 102);
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 40px;
            margin-top: 50px;
            margin-left: 500px;
            margin-right: 500px;

        }

        body {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            direction: rtl;
            background-color: #ffffff;
            font-size: x-large;
        }

        input[type=text],
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


        input[type=text]:focus {
            border: 3px solid #555;
        }

        .button {
            border-radius: 5px;
            width: 100px;
            height: 50px;
            font-size: 24px;
            background-color: white;
            color: black;
            border: 2px solid #4CAF50;
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
</head>

<body>
    <div class="Formdiv">
        <form action="../../../controller/Editusr_controller.php" method="post">
            <label for="FullName">نام و نام خانوادگی</label>
            <input type="text" name="FullName" id="FullName" value="<?php if(isset($row['FullName'])) echo $row['FullName']; ?>">
            <label for="UserName">نام مستعار</label>
            <input type="text" name="UserName" id="UserName" value="<?php if(isset($row['UserName'])) echo $row['UserName']; ?>">
            <label for="Email">رایانامه</label>
            <input type="email" name="Email" id="Email" value="<?php if(isset($row['Email'])) echo $row['Email']; ?>">
            <label for="Password">گذرواژه</label>
            <input type="password" name="Password" id="Password" value="<?php if(isset($row['Password'])) echo $row['Password']; ?>">
            <input type="submit" value="ثبت" class="button" name="submit">
        </form>
    </div>
</body>

</html>
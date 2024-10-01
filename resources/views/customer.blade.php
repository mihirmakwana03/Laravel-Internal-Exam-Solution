<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
        }

        input[type="submit"] {
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Customer Form</h2>
        <form action="inserted" method="post">
            @csrf
            <label for="cid">Customer Id:</label>
            <input type="text" name="cid" id="cid">

            <label for="cname">Customer Name:</label>
            <input type="text" name="cname" id="cname">

            <label for="pass">Password:</label>
            <input type="password" name="pass" id="pass">

            <label for="email">Email:</label>
            <input type="email" name="email" id="email">

            <label for="mobile">Mobile:</label>
            <input type="text" name="mobile" id="mobile">

            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>

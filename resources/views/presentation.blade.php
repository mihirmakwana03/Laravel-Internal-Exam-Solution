<!DOCTYPE html>
<html lang="en">

<head></head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Search</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            text-align: center;
            margin-bottom: 20px;
        }

        input[type="text"] {
            padding: 10px;
            width: 200px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Customer Search</h1>
        <form action="searchName" method="post">
            @csrf
            Customer Name: <input type="text" name="cname" id="">
            <input type="submit" value="Search"><br>
        </form>
        <div>
            <table>
                <tr>
                    <th>Customer Id</th>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                </tr>
                @foreach($records as $record)
                <tr>
                    <td>{{$record->cid}}</td>
                    <td>{{$record->cname}}</td>
                    <td>{{$record->email}}</td>
                    <td>{{$record->mobile}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>

</html>
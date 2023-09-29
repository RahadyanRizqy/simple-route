<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        /* .main-title {
            text-align: center;
        } */

        .h-container {
            width: 100%;
            height: 125px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .h-container li {
            list-style-type: none;
            overflow: hidden;
            float: left;
        }

        .h-container a {
            display: block;
            text-align: center;
            padding: 10px 15px;
            text-decoration: none;
            color: black;
        }

        .h-container a:hover {
            background-color: grey;
        }

        hr {
            height: 5px;
            color: black;
            background-color: black;
        }
    </style>
</head>
<body>
    <header>
        <div class="h-container">
            <h1 class="main-title">Pemrograman Berbasis Web A</h1>
            <ul>
                <li><a href="/home">Home</a></li>
                <li><a href="/contact">Contact</a></li>
                <!-- <li><a href="contact/faris">Contact:Faris</a></li> -->
                <li><a href="/about">About</a></li>
                <!-- <li><a href="/about/rahadyan">About:Rahadyan</a></li> -->
            </ul>
        </div>
    </header>
    <hr>
    <?php include 'routes.php';?>
</body>
</html>
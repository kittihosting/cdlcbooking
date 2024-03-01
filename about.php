<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
        /* CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #4D5656;
        }
        div {
            width: 80%;
            margin: 0 auto;
            background-color: #7F8C8D;
            padding: 20px;
            border-radius: 10px 100px / 120px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        h2{
            text-align: center;
            font-size: xx-large;
            font-family: 'Poppins', sans-serif;
            color: #fff;
        }
        p {
            margin-bottom: 20px;
            text-align: center;
            font-weight: bolder;
            font-family: 'Poppins', sans-serif;
            color: #fff;
            letter-spacing: 1px;
            
        }
        button {
            background-color: #fff ; /* Green */
            border: none;
            color: black;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
            font-weight: bolder;
        }

        /* Hover effect */
        button:hover {
            background-color: #111;
            color: white;
        }
        @media (max-width: 768px) {
            div {
            width: 80%; /* Adjust width for smaller screens */
            margin-top: 20%; /* Adjust margin-top for smaller screens */
        }

            h2 {
            font-size: large; /* Adjust font size for smaller screens */
            margin-left: 10px; /* Adjust margin for smaller screens */
        }

            p {
            margin-left: 10px; /* Adjust margin for smaller screens */
        }

            button {
            padding: 10px 20px; /* Adjust padding for smaller screens */
            font-size: 14px; /* Adjust font size for smaller screens */
        }
}
    </style>
</head>
<body>
    <button onclick="goBack()">Back</button>
    <div> 
    <h2>About Us</h2>
    <p>This website was created as a project for the course with course code EN844999, by the following students:</p>
    <p>1. Kittithat Mapol        Student ID: 633040207-3</p>
    <p>2. Jeerawan Seewangrach   Student ID: 633040209-9</p>
    <p>These students are in their fourth year of the Digital Media Engineering program, Faculty of Engineering, Khon Kaen University.</p>
    <p>The creators hope that this website will be of great benefit to everyone.</p>
    </div>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>    
</body>
</html>
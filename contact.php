<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
        /* CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #4D5656;
        }
        div {
            width: 50%;
            margin: 0 auto;
            background-color: #7F8C8D;
            padding: 20px;
            border-radius: 10px 100px / 120px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        h2{
            text-align: start;
            font-size: xx-large;
            font-family: 'Poppins', sans-serif;
            color: #fff;
            text-decoration: underline;
            margin-left: 50px;
        }
        p {
            margin-bottom: 20px;
            text-align: start;
            font-weight: bolder;
            font-family: 'Poppins', sans-serif;
            color: #fff;
            letter-spacing: 1px;
            margin-left: 70px;
            
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
        margin-left: 20px; /* Adjust margin for smaller screens */
    }

    p {
        margin-left: 40px; /* Adjust margin for smaller screens */
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
        <h2>Contact</h2>
        <p><i class="fas fa-envelope"></i>   kttmp28@gmail.com</p>
        <p><i class="fas fa-envelope"></i>   jeerawansee@kkumail.com</p>
        <p><i class="fas fa-phone"></i>   0962072262</p>
        <p><i class="fas fa-phone"></i>   0998081130</p>
        <p><i class="fab fa-facebook"></i> <a href="https://www.facebook.com/kittithatmapol/" target="_blank">Kit Ti</a></p>
        <p><i class="fab fa-facebook"></i> <a href="https://www.facebook.com/Jeerawan.Seewangrachh?mibextid=eQY6cl" target="_blank">จีรวรรณ สีวังราช</a></p>
    </div>
    <script>
    function goBack() {
        window.history.back();
    }
</script>
</body>
</html>
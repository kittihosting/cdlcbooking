<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="style.css">
    <!-- <script src="authentication.js" defer></script> -->
</head>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa-solid fa-bars"></i>
        </label>
        <label class="logo">CDLC</label>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="https://script.google.com/macros/s/AKfycbx3eBDzO_kWqs-lRKOZ06pyqMfmBNn4zMdJoE33oFhT1JbcmWtdx9iaq52hJkfSYTBo/execs"target="_blank">History</a></li>

            <li><a class="active" href="<?php echo (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 1) ? 'logout.php' : 'loginpage.php'; ?>">
                    <?php echo (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 1) ? 'Logout' : 'Login'; ?>
                </a></li>

        </ul>
    </nav>
    

    <div class="container">

        <div class="box-container">

            <div class="box">
                <img src="https://cdn-icons-png.freepik.com/256/7376/7376824.png?ga=GA1.1.291116962.1702984306&semt=ais" alt="">
                <h3>Broadcast Room</h3>
                <p>Broadcast Room can refer to a virtual space where users can gather to watch or listen to a live stream.</p>
                <button class="btn" onclick="checkLogin('broadcast')">Book Now</button> <!-- For Broadcast Room -->
            </div>

            <div class="box">
                <img src="https://cdn-icons-png.freepik.com/256/5048/5048749.png?ga=GA1.1.291116962.1702984306&semt=ais" alt="">
                <h3>Sound record Room</h3>
                <p>Sound Record Room. It's a space designed to minimize outside noise and sound interference while recording audio tracks or spoken word content.</p>
                <button class="btn" onclick="checkLogin('sound_record')">Book Now</button> <!-- For Sound Record Room -->
            </div>

            <div class="box">
                <img src="https://cdn-icons-png.freepik.com/256/12516/12516042.png?ga=GA1.1.291116962.1702984306&semt=ais" alt="">
                <h3>Video Editing Room</h3>
                <p>A video editing room is a dedicated space specifically designed for the process of transforming raw video footage into a polished final video product.</p>
                <button class="btn" onclick="checkLogin('Video_Editing')">Book Now</button> <!-- For Sound Record Room -->
            </div>

            <div class="box">
                <img src="https://cdn-icons-png.freepik.com/256/1387/1387270.png?ga=GA1.1.291116962.1702984306&semt=ais" alt="">
                <h3>Metaverse Room</h3>
                <p>A dedicated area within a specific metaverse platform, like Decentraland or Sandbox, used for various purposes like socializing, gaming, working, or showcasing creations.
                </p>
                <button class="btn" onclick="checkLogin('Metaverse')">Book Now</button> <!-- For Sound Record Room -->
            </div>

            <div class="box">
                <img src="https://cdn-icons-png.freepik.com/256/6553/6553280.png?ga=GA1.1.291116962.1702984306&semt=ais" alt="">
                <h3>Co-Working Speace</h3>
                <p>A co-working space is a shared office environment where individuals from different companies or backgrounds come together to work in a collaborative setting.</p>
                <button class="btn" onclick="checkLogin('Co-Working_Speace')">Book Now</button> <!-- For Sound Record Room -->
            </div>

            <div class="box">
                <img src="https://cdn-icons-png.freepik.com/256/11620/11620643.png?ga=GA1.1.291116962.1702984306&semt=ais" alt="">
                <h3>Smart Classroom</h3>
                <p>A smart classroom is a learning environment enhanced by technology to support both teaching and learning in innovative ways.</p>
                <button class="btn" onclick="checkLogin('Smart_Classroom')">Book Now</button> <!-- For Sound Record Room -->
            </div>
        </div>
        <script>
            function checkLogin(roomType) {
                // Check if the user is logged in
                <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 1) : ?>
                    if (roomType === 'broadcast') {
                        window.location.href = "booking01.php";
                    } else if (roomType === 'sound_record') {
                        window.location.href = "booking02.php";
                    } else if (roomType === 'Video_Editing') {
                        window.location.href = "booking03.php";
                    } else if (roomType === 'Metaverse') {
                        window.location.href = "booking04.php";
                    } else if (roomType === 'Co-Working_Speace') {
                        window.location.href = "booking05.php";
                    } else if (roomType === 'Smart_Classroom') {
                        window.location.href = "booking06.php";
                    }
                <?php else : ?>
                    // User is not logged in, show alert and redirect to loginpage.php
                    alert("โปรดเข้าสู่ระบบก่อน");
                    window.location.href = "loginpage.php";
                <?php endif; ?>
            }
        </script>
</body>

</html>
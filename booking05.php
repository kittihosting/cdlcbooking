  <?php session_start(); ?>
  <!DOCTYPE html>
  <html>
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      <link rel="stylesheet" href="booking_style.css">

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
          <li><a href="https://script.google.com/macros/s/AKfycbx3eBDzO_kWqs-lRKOZ06pyqMfmBNn4zMdJoE33oFhT1JbcmWtdx9iaq52hJkfSYTBo/exec"target="_blank">History</a></li>
          <li><a class="active" href="<?php echo (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 1) ? 'logout.php' : 'loginpage.php'; ?>">
                      <?php echo (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 1) ? 'Logout' : 'Login'; ?>
          </a></li>
      </ul>
    </nav>

    <div class="pt-4"></div>
  <div class="container">
    <div>
      <h3 class="text-center">Select Data</h3>
    </div>
    <form method="post" autocomplete="off" name="hello-sheet">
    <input type="hidden" name="ห้อง" value="Co-Working Speace">
      <div class="form-group">
        <label for="name">ชื่อ-สกุล</label>
        <input type="text" class="form-control"  placeholder="ชื่อสกุล" name="ชื่อ-สกุล">
      </div>
      <div class="form-group">
        <label for="date">วันที่</label>
        <input type="date" class="form-control" name="วันที่">
      </div>
      <div class="form-group">
        <label for="time">เวลา</label>
        <select id="time" name="เวลา">
          <option value="---none---">---none---</option>
          <option value="09:00 AM - 12:00 AM">09:00 AM - 12:00 AM</option>
          <option value="12:00 AM - 15:00 PM">12:00 AM - 15:00 PM</option>
          <option value="15:00 PM - 18:00 PM">15:00 PM - 18:00 PM</option>
      </select>
      </div>
      
    <button type="submit" name="submit" value="Send message" class="btn btn-primary">บันทึก</button>
  </form>
  </div>
  <script>
              const scriptURL = 'https://script.google.com/macros/s/AKfycbw4X6NYsGsnfXYJpKnGcVnskFae_mR7EneajCPgb5-x4YeoRBwRt8VFfRI-R6Q2Qxkg/exec'
              const form = document.forms['hello-sheet']
            
              form.addEventListener('submit', e => {
                e.preventDefault()
                const formData = new FormData(form);
              let isValid = true;

               // ตรวจสอบว่าทุก input มีค่าหรือไม่
               for (let pair of formData.entries()) {
                  if (!pair[1]) {
                      isValid = false;
                      alert('โปรดกรอกข้อมูลให้ครบทุกช่อง');
                      break;
                  }
              }

              // ตรวจสอบเฉพาะเวลาที่เลือก
              const selectedTime = formData.get('เวลา');
              if (!selectedTime || selectedTime === '---none---') {
                  isValid = false;
                  alert('โปรดเลือกเวลา');
              }

              // ถ้าข้อมูลครบทุกช่อง ให้ส่งข้อมูล
              if (isValid) {
                  formData.append('ห้อง', 'Co-Working Speace');

                fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                  .then(response => alert("บันทึกข้อมูลเสร็จสิ้น..."))
                  .catch(error => console.error('Error!', error.message))
                  form.reset();
              }
              });
            </script>

  </body>
  </html>
  
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <title>Nakhon Si Thammarat Project</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Sarabun"
    />
    <style>
      body {
        font-family: "Sarabun";
        background-color: #fdf2e7;
      }
      #container {
        box-shadow: 6px 4px 8px 6px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }
      #header {
        height: 100%;
        background-image: url("P18.png");
        background-size:100%;
      }
      #sidebar {
        background-color: #f1f1f1;
        padding: 0px;
      }
      #content {
        padding: 10px;
        background-color: #F5F5F5;
      }
      #footer {
        height: 180px;
        padding: 50px;
        background-color: #DCDCDC;
        border-radius: 0 0 15px 15px;
      }
      ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 100%;
        background-color: #f1f1f1;
      }
      li a {
        display: block;
        color: #000;
        padding: 8px 16px;
        text-decoration: none;
      }
      /* Change the link color on hover */
      li a:hover {
        background-color: #555;
        color:#FFFFFF;
      }
      p{
        margin-top: 10px;
      }
    </style>
  </head>
  <body style="background-color:#ffd3b2">
    <!-- คอนเทนเนอร์ -->
    <div class="container">
      <div id="container">
      <div class="row">
        <div class="col-12" id="header">
          <!-- เฮดเดอร์ -->
        </div>
      </div>
      <div class="row">
        <div class="col-2" id="sidebar">
          <!-- ไซด์บาร์ -->
          <ul>
            <li><a href="https://lw-58513.herokuapp.com/">หน้าแรก</a></li>
            <li><a href="https://lw-58513.herokuapp.com/page=1.php">แหล่งท่องเที่ยว</a></li> 
            <li><a href="https://lw-58513.herokuapp.com/page=2.php">ประเพณีและวัฒนธรรม</a></li> 
            <li><a href="https://lw-58513.herokuapp.com/page=3.php">อาหารประจำท้องถิ่น</a></li> 
            <li><a href="https://lw-58513.herokuapp.com/page=4.php">ผู้จัดทำ</a></li>
         </ul>
        </div>
        <div class="col-10" id="content">
          <!-- คอนเท้นต์ -->
          <h4>
            อารหารประจำท้องถิ่น
         </h4><br>
          <h5>
            1.ขนมจีนน้ำยาเส้นสด
          </h5><br>
        <center><img src="P12.png" class="img-fluid rounded"></center>
          <br>
               <h5>
            2.ข้าวยำ
          </h5><br>
               <center><img src="P13.png" class="img-fluid rounded"></center>
          <br>
         
          <h5>
            3.แกงส้ม
            </h5><br>
               <center><img src="P14.png" class="img-fluid rounded"></center>
          <br>
          
          <h5>
            4.คั่วกลิ้ง
          </h5><br>
               <center><img src="P15.png" class="img-fluid rounded"></center>
          <br>
         
          <h5>
            5.แกงไตปลา
          </h5><br>
               <center><img src="P16.png" class="img-fluid rounded"></center>
          <br>
      </div>
      <div class="row">
        <div class="col-12" id="footer">
          <!-- ฟุตเตอร์ -->
          <center>
            <h3>ผลงานนักเรียน</h3>
            <hr />
            <p>รายวิชา WebApplication</p>
            <p>โรงเรียนหล่มสักวิทยาคม</p>
          </center>
        </div>
      </div>
      </div>  
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Chonburi Project</title>
    
    <style>
      #header{
        height: 60px;
        background-color: #F4A460;
      }
      #sidebar{
        height: 900px;
        background-color: #f1f1f1;
        padding: 0px;
      }
      #content{
        height: 900px;
        background-color: #F5F5F5;
      }
      #footer{
        height: 200px;
        background-color: #DCDCDC;
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
        color: white;
      }
    </style>
    
  </head>
  <body> 
    <div class="container"> <!-- คอนเทนเนอร์ -->
      <div class="row">
        <div class="col-12" id="header"> <!-- เฮดเดอร์ -->
          <h1>จังหวัดชลบุรี</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-3" id="sidebar"> <!-- ไซด์บาร์ -->
          <ul>
            <li><a href="https://lw-58513.herokuapp.com/">หน้าแรก</a></li>
            <li><a href="https://lw-58513.herokuapp.com/page=1.php">แหล่งท่องเที่ยว</a></li> 
            <li><a href="https://lw-58513.herokuapp.com/page=2.php">ประเพณีและวัฒนธรรม</a></li> 
            <li><a href="https://lw-58513.herokuapp.com/page=3.php">อาหารประจำท้องถิ่น</a></li> 
            <li><a href="https://lw-58513.herokuapp.com/page=4.php">ผู้จัดทำ</a></li>
          </ul>
          <h6 align="center">
            แผนที่จังหวัด
          </h6>
         <table widht="300" height="300" align="center">
          <tr>
           <td>
             <img src="mapC.png">
           </td> 
          </tr>
         </table>
       </div>
        <div class="col-9" id="content"> <!-- คอนเท้นต์ -->
         <h4>
           ชลบุรี
         </h4>
            <h5>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เป็นจังหวัดหนึ่งในภาคตะวันออกของประเทศไทย ชุมชนเมืองศูนย์กลางของจังหวัด คือ เทศบาลเมืองชลบุรี จังหวัดชลบุรีมีสถานที่ท่องเที่ยวที่มีชื่อเสียงหลายแห่งตั้งอยู่ โดยมีเมืองท่องเที่ยวที่สำคัญของประเทศ คือ เมืองพัทยา นอกจากด้านอุตสาหกรรมการท่องเที่ยวแล้วยังเป็นจังหวัดที่มีความสำคัญทางเศรษฐกิจสำคัญของภาคตะวันออกอย่างมาก ทั้งในด้านพาณิชยกรรมและอุตสาหกรรมต่าง ๆ
ในอดีตจังหวัดชลบุรีนั้นเคยเป็นแหล่งที่ตั้งของเมืองท่าที่มีความสำคัญมาก แม้แต่ในปัจจุบันนี้ก็ยังคงเป็นที่ตั้งของท่าเรือที่มีความสำคัญของประเทศรองจากท่าเรือกรุงเทพ นั่นก็คือท่าเรือแหลมฉบัง เนื่องจากมีทำเลที่ตั้งเหมาะสม จังหวัดชลบุรีนั้นมีอาณาเขตติดต่อ (ตามเข็มนาฬิกาเริ่มจากทิศเหนือ) ได้แก่ จังหวัดฉะเชิงเทรา จังหวัดจันทบุรี จังหวัดระยอง และติดต่อกับอ่าวไทยทางทิศตะวันตก ประชากรของจังหวัดมีการเติบโตอย่างรวดเร็ว โดยประชากรในปี พ.ศ. 2562 มีจำนวนประมาณ 1.5 ล้านคน
            </h5>
        </div>
      </div>
       <div class="row">
        <div class="col-12" id="footer"> <!-- ฟุตเตอร์ -->
          <h1></h1>
        </div>
      </div>
    </div>  
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

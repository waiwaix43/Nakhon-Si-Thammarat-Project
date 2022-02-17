<!doctype html>
<html lang="en">
  <head>
    <style>
      #header{
        height: 160px;
        background-color: orange;
      }
      #sidebar{
        height: 450px;
        background-color: green;
        padding: 0px;
      }
      #content{
        height: 450px;
        background-color: gray;
      }
      #footer{
        height: 200px;
        background-color: pink;
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
          <h1>Header</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-3" id="sidebar"> <!-- ไซด์บาร์ -->
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#about">About</a></li>
          </ul>
        </div>
        <div class="col-9" id="content"> <!-- คอนเท้นต์ -->
          <h1>Content</h1>
        </div>
      </div>
       <div class="row">
        <div class="col-12" id="footer"> <!-- ฟุตเตอร์ -->
          <h1>Footer</h1>
        </div>
      </div>
    </div>  
  </body>
</html>

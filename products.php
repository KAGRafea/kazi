<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ecommerce Website</title>
    <style media="screen">


.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}
.topnav input[type=text] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 16px;
  font-size: 17px;
}
@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
}

      .div2{
        width: 250px;
        border: 1px solid white;
        float: left;
        margin-left: 15px;
        background-color: #F0F8FF;
        margin-top: 15px;
        padding-bottom: 20px;
        border-radius: 10px;
        border: 1px #F0F8FF;
      }
      img{
        width: 200px;
        height: 170px;
        margin-left: 30px;
      }
      p{
        background-color: #17A2B8;
        margin-top: 0px;
        text-align: center;
        font-size: 30px;
        font-weight: bold;
        color: white;
        padding: 7px;
        border-radius: 10px;
        border: 1px solid black;
      }
      .div1{
        margin-left: 10px;
      }
      h3{
        margin-left: 35px;
        margin-top: -5px;
        font-size: 25px;
      
      }
      #quantity{
        width: 160px;
        margin-left: 30px;
        padding: 7px;
        font-size: 20px;
        border-radius: 10px;
        border: 1px solid black;
      }
      #button{
        width: 170px;
        background-color: #0799fa;
        border: 1px solid #0799fa;
        color: white;
        font-size: 20px;
        font-weight: bold;
        margin-top: 15px;
        padding: 7px;
        margin-left: 30px;
        border-radius: 7px;
      }
      #button:hover{
        background-color: #FF6347;
      }
      
    </style>
  </head>
  <body>
    

  <div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#about">About</a>
  <a href="#contact">Contact</a>
  <a href="#KAZI">CREATED BY KAZI</a>
  <a href="#insert.php">service</a>

  <input type="text" placeholder="Search..">
</div>


    <div class="div1">
      <?php
          include 'db.php';

          $sql="SELECT * from products";
          $query=mysqli_query($conn,$sql);
          while ($info=mysqli_fetch_array($query)) {
            ?>
            <div class="div2">
              <p><?php echo $info['product_name']; ?> </p>
              <img src="image/<?php echo $info['product_image'] ; ?>" alt="">
              <h3>Price: <?php echo $info['product_price']; ?></h3>
              <form class="" action="products.php" method="post">
                <input id="quantity" type="number" name="quantity" value="" placeholder="Enter Quantity" required>
                <input id="button" type="submit" name="buy_now" value="Buy Now">

              </form>

            </div>

        <?php
          }
       ?>

    </div>

  </body>
</html>
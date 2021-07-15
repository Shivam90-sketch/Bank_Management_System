<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <!-- navabar -->
    <?php require "navbar.php" ?>
      <div class="container">
        <div class="box box1">
            <span>
                Name <i class="fas fa-user-alt"> </i> : Shivam Shukla 
            </span>
        </div>
        <div class="box box1"> 
            <span>
                Net balance <i class="fas fa-money-bill-wave"> </i> : 450000
            </span>
        </div>
        <div class="row1">
    <div class="container_one">
        <button class="btn" onclick="myFunction()"> 
            <i class="fa fa-plus"></i> 
                  New User
        </button>
        <br>
        <div id="myDIV">
        <form action="include/insert.php" method="post" >
            <input type="text" class="input_I inp" name="name" placeholder="Enter Your Name" autocomplete="off"> <br>
            <input type="text" class="input_I inp" name="email" placeholder="Enter Your Email" autocomplete="off">    <br>
            <input type="text" class="input_I inp" name="balance" placeholder="Enter Your Balance" autocomplete="off">  <br>
            <button type="Submit" name="submit" class="btn btni" >Submit</button>
            <script>
                function myFunction() {
                var x = document.getElementById("myDIV");
                if (x.style.display === "none") {
                        x.style.display = "block";
                    } else {
                        x.style.display = "none";
                    }
                }
            </script>
        </form>
        </div>
    </div>
    <div class="container_two">
        <div class="sm" onclick="myFun()">
        <i class="far fa-paper-plane"></i> Send Money
        </div>
        <div id="Second_div">
                <form action="cust_inc.php" method="post" >
                    <input type="text" name="S_email" class="inp" placeholder="Enter Sender Email id" autocomplete="off">    <br> <span id="to">TO</span><br>
                    <input type="text" name="R_email" class="inp" placeholder="Enter Your Revicver Email id" autocomplete="off">  <br>
                    <input type="text" name="Amt" class="inp" placeholder="Enter Your Amount" autocomplete="off">  <br>
                    <button type="Submit" name="submit" class="sub_inp" onclick="popUp()">Submit</button>
                </form>
                <script>
                function myFun() {
                var x = document.getElementById("Second_div");
                if (x.style.display === "none") {
                        x.style.display = "block";
                    } else {
                        x.style.display = "none";
                    }
                }
            </script>
        </div>
    </div>
    </div>
</div>
    <!-- Footer -->
    <?php require "include/footer.php" ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>
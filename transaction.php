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
        <div class="box">
            <span>
               <i class="fa fa-history" aria-hidden="true"></i> Transaction history
            </span>
        </div>
        <?php
            include('include/conn.php');
        ?>
        <?php
            $result = mysqli_query($connect,"SELECT * FROM transaction_table ORDER BY id");
            while($res = mysqli_fetch_array($result)){    
                ?>
                <table class="tb">
                    <tr>
                    <td> <?php echo $res['id']?> </td>
                        <td> <?php echo $res['S_email']?> </td>
                        <td> <?php echo $res['R_email']?> </td>
                        <td> <?php echo $res['Amt']?> </td>
                    </tr>
                <?php 
            } 
        ?>
        </table>
    </div>
    <!-- Footer -->
    <?php require "include/footer.php" ?>  
</body>

</html>
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
        <div class="waper">
            <div class="row">
                <div class="col col1">
                        <div class="form">
                            <h1 id="heading">
                                <i class="fas fa-phone-square-alt"></i>
                                    Contact
                            </h1>
                                <form action="insert.php" id="fm" method="POST">
                                    <label class="label">
                                        <input type="text" placeholder="Name" name="Name" autocomplete="off">
                                    </label>
                                    <label class="label">
                                        <input type="text" placeholder="Email" name="Email" autocomplete="off">
                                    </label>
                                    <label class="label">
                                        <input type="text" placeholder="Message" name="Message" autocomplete="off">
                                    </label>
                                    <button class="red" type="submit" name="submit">
                                            Submit 
                                    </button>
                                </form>
                            <div class="segment">
                            <button class="unit" type="button"><i class="fab fa-instagram"></i></button>
                            <button class="unit" type="button"><i class="fab fa-linkedin"></i></button>
                            <button class="unit" type="button"><i class="fab fa-facebook"></i></button>
                          </div>
                  </div>
                </div>
                <div class="col">
                    <img src="contact.jfif" alt="Contact_Us" class="imgdiv">
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php require "include/footer.php" ?>  
</body>

</html>
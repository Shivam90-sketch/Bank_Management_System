<?php
include('conn.php');

if(isset($_POST['submit'])){

    $name = $_POST['name'];    
    $email = $_POST['email'];
    $balance = $_POST['balance'];
    
    $_result = mysqli_query($connect,"INSERT INTO `customer`(`name`, `email`, `balance`) VALUES ('$name','$email','$balance')");
    if($_result){
        ?>
        <script>
            popUp();
            function popUp(){
                swal({
                    title:"Success",
                    text:"Answer Is ",
                    icon:"sucess",
                    button:"Ok",
                });
            }
        </script>
        <?php
         header("Location: http://localhost/project/Customer.php");
    }else{
        echo "Failed";
    }
}
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
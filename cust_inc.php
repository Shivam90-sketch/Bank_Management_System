<?php
include('include/conn.php');
?>
<?php
if(isset($_POST['submit'])){

    $S_email = $_POST['S_email'];    
    $R_email = $_POST['R_email'];
    $Amt = $_POST['Amt'];
    
    $_result = mysqli_query($connect,"INSERT INTO `transaction_table`(`S_email`, `R_email`, `Amt`) VALUES ('$S_email','$R_email','$Amt')");
    if($_result){
        ?>
        <script> 
            popUp();
            function popUp(){
                swal({
                    title:"Success",
                    text:"Answer Is ",
                    icon:"success",
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
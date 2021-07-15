<?php
include('include/conn.php');
?>
<?php
if(isset($_POST['submit']))
{
    $name = $_POST['Name'];    
    $email = $_POST['Email'];
    $message = $_POST['Message'];
    
    $result = mysqli_query($connect,"INSERT INTO contact VALUES ('','$name','$email','$message')");
    if($result){
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
        header("Location: http://localhost/project/contact.php");
    }else{
        echo "Failed";
    }
}
?>

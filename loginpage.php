    <?php
        include_once("Employee.php");
         echo "here";

        if(isset($_REQUEST['username'])&&isset($_REQUEST['password'])){
            $username=$_REQUEST['username'];
            $password=$_REQUEST['password'];  

            echo $password;
            $obj = new employee();
            $result = $obj->login($username,$password);
            header("location:PartsSearch.php");
            if(!$result){
                echo "Employee does not exist";
            }else{
                $row = $obj->fetch();
                if(!$row){
                    echo "Username or password not correct";
                }else{
                    session_start();
                    $_SESSION['eno']=$row['eno'];
                    echo "here";

                    header("location:PartsSearch.php");

                }
            }
        }     
    ?>
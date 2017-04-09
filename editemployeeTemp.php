
                <?php

                include_once('Employee.php');

                $edit = $_GET['edit'];
                $row=array();
                $result=new employee();
                $row=$result->getEmp($edit);
                     $row=$result->fetch();

                if(isset($_GET['edit'])){

                    $edit = $_GET['edit'];

                    $editEmp = "SELECT * FROM employees WHERE eno ='$edit'";

                    // $checking = mysqli_query($editEmp);

                    // $result = mysqli_fetch_assoc($checking);

                    $tracking = new employee();

                        $change = $tracking->getEmp($edit);
                       
                       $row = $tracking->fetch();
                       // var_dump($row);
                }

                    if(isset($_POST['edit'])){

                    $edit = $_POST['edit'];
                    $firstname = $_POST['efirstname'];
                    $lastname = $_POST['elastname'];
                    $region = $_POST['region'];
                    $hiredate = $_POST['hiredate'];
                    $birthdate = $_POST['birthdate'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $gender = $_POST['gender'];


                     $result = new employee();

                     $result->amendEmployee($edit, $firstname,$lastname,$region,$hiredate, $birthdate, $email,$phone, $gender);

                     $row=$result->getEmp($edit);
                     $row=$result->fetch();

                     header('Location: admin.php');
                }

                ?>
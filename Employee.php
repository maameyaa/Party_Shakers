<?php
/**
* Author: Benedicta Amo Bempah
  id    : 53532016
  File description: employee class to support the employee search function
*/

include_once("adb.php");

/**
*Creating an Employee class where each function created will be able to process key activities such as add, update, delete and fix a basic search in the employee database
*/

class Employee extends adb{
  function employee(){
  }
  
  // Function created to Add a new employee

  function addEmployee($eno,$efirstname,$elastname,$house,$town,$region,$hiredate,$birthdate,$phone,$email,$gender,$password,$eusername){
    $strQuery="insert into sweb_booking set
            eno='$eno',
            efirstname='$efirstname',
            elastname='$elastname',
            house = '$house',
            town='$town',
            region='$region',
            hiredate ='$hiredate',
            birthdate ='$birthdate',
            phone='$phone',
            email='$email',
            gender='$gender',
            password='$password',
            eusername='$eusername'
            ";
    return $this->query($strQuery); 
  }

  function deleteEmployee($eno){
    $strQuery = "DELETE FROM Employees WHERE eno = '$eno' ";
    
    return $this->query($strQuery);

  } 

// Function created for employee updates

  function editEmployee($eno, $efirstname,$elastname,$house,$town,$region,$hiredate, $birthdate, $phone,$email,$gender, $password, $eusername){
    $strQuery = "UPDATE employees SET
            efirstname = '$cfirstname',
            elastname = '$clastname',
            house = '$house',
            town = '$town',
            region = '$region', 
            hiredate = '$hiredate',
            birthdate = '$birthdate',
            phone = '$phone',
            email = '$email' 
            gender = '$gender',
            password = '$password',
            eusername = '$eusername',
            WHERE eno = '$eno' ";
    
    return $this->query($strQuery);

  }

   // Function created to easily access records in employee database
  function getEmployees($filter=false){
    $strQuery="SELECT * FROM employees";
    
    if($filter){
      $strQuery=$strQuery . " where $filter";
    }
    
    return $this->query($strQuery);
  }

// function created to enable search within employee database
  function searchEmployees($text=false){
    $filter=false;
    
    if($text){
      $filter = " efirstname like '%$text%' or elastname like '%$text%' ";
    }
    
    return $this->getEmployees($filter);
  }

  function login($username,$password){
    $strQuery = "select eno from employees where eusername = '$username' and password = '$password'";
  }

  
  
}


?>
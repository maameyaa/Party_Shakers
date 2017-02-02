<?php
     include_once("adb.php");
     
     /**
	*Variables used in all the functions for Patients
	*@param int pno
	*@param string pname
	*@param int qoh
	*@param int price
	*@param int olevel
	*@param enum category
	*/

class parts extends adb{
     function parts(){

     }

     function newPart($pname='none',$qoh='none',$price='none',$olevel='none',$category='none'){
    
          $strQuery = "insert into parts SET pname = '$pname',qoh = '$qoh',price = '$price',olevel = '$olevel',category = '$category'";
          // echo $strQuery;
          return $this->query ($strQuery);
     }

     function getPart($filter=false){
          $strQuery="select pno, pname, price, category from parts";
          if($filter!=false){
            $strQuery=$strQuery . " where pname like '%$filter%' or category like '%$filter%'";
          }
          return $this->query($strQuery);
     }

     function editPart($pno,$pname,$qoh,$price,$olevel,$category){
          $strQuery = "update parts SET pname = '$pname',qoh = '$qoh',price = '$price',olevel = '$olevel',category = '$category' where 
                      pno = $pno";
          return $this->query($strQuery);
     }


   }

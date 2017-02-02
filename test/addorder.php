    <?php

                            include_once("orders.php");
                            
                            if (isset ($_REQUEST['ono'])){
                                
                                $id = $_REQUEST['pno'];
                                $qty = 1;
                        
                            $obj = new orders();
                            
                            $ord = $obj -> addOrders($pno, $qty);

                            }

                            else 
                                {
                                     echo "No id";
                                   
                                }

                            
                            if ($ord==false){
                                echo "Error";
                                exit();
                            }
                            
                            else
                            {
                                $row = $obj ->fetch();
                            
                            while ($row!=false)
                            {
                                echo "
                                <tbody>
                                    <tr>
                                        <th>{$row["pname"]}</th>
                                        <td>{$row["price"]}</td>
                                        <td>{$row["category"]}</td>
                                        <td>";

                                            echo '<input type="submit" value="Add">';"
                                            </td>
                                    </tr>";
                                    $row = $obj ->fetch();
                            }
                            }


                            
                            ?>
                            
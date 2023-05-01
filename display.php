<?php                    
       include "./connection.php";
//read all row from database table
                       $sql ="SELECT * FROM clients";
                       $result = mysqli_query($conn,$sql);
                       if(!$result){
                        die("Invalid query:".$conn->error);
                       }
                       while($row = $result->fetch_assoc()){
                        $id=$row['id'];
                        echo "
                        <tr>
                        <td>$id</td>
                        <td>$row[name]</td>
                        <td>$row[email]</td>
                        <td>$row[phone]</td>
                        <td>$row[address]</td>
                        <td>$row[created_at]</td>
                        <td>
                             <a class='btn btn-primary btn-sm' href='./edit.php?editid=".$id."'>Edit</a>
                            <a class='btn btn-danger btn-sm' href='./delete.php?deleteid=".$id."'>Delete</a>
                        </td>
                    </tr>
                        ";
                       }

                    ?>
<?php
    $conn = mysqli_connect("localhost", "root", "", "blood") or die ("Error in Connection");

    $query = mysqli_query($conn,"SELECT distinct bt.name,Quantity,price,BC.name AS hosbitalName FROM BloodCenter AS BC,bloodtype AS bt,blood AS b WHERE bt.id=b.bloodTypeid");
                        while($result = mysqli_fetch_array($query)) {
                            echo "<tr>

                                <td>".$result['name']."</td>
                                <td>".$result['Quantity']."</td>
                                <td>".$result['price']."</td>
                                <td>".$result['hosbitalName']."</td>
                            </tr>";
                        }
?>

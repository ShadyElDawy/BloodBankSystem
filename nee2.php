<?php
    $conn = mysqli_connect("localhost", "root", "", "blood") or die ("Error in Connection");

    $query = mysqli_query($conn,"SELECT
                                    BC.name, BC.address, BC.fromTime, BC.toTime, C.name AS country, BCT.name AS type, D.name as district
                                FROM
                                    BloodCenter AS BC, Country AS C, BloodCenterType AS BCT, Distirct AS D
                                WHERE
                                    BC.countryid = C.id AND BC.bloodCenterTypeid = BCT.id AND BC.districtid = D.id AND
                                    BC.registrationApproved = 1
                          ");
                        while($result = mysqli_fetch_array($query)) {
                            echo "<tr>

                                <td>".$result['name']."</td>
                                <td>".$result['address']."</td>
                                <td>".$result['district']."</td>
                                <td>".$result['country']."</td>
                                <td>".$result['fromTime']."</td>
                                <td>".$result['toTime']."</td>
                                <td>".$result['type']."</td>
                            </tr>";
                        }
?>

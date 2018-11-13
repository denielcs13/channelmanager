<?php

//fetch.php
$connect =
        mysqli_connect("localhost", "root", "", "CT_CManager");
$output =
        '';
$query =
        "SELECT * FROM `ch_cm_laundry` ORDER BY l_id DESC";
$result =
        mysqli_query($connect, $query);
$output =
        '
<br />
<h3 align="center">Laundry Data</h3>
<table class="table table-striped custom-table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Holet Id</th>
                                                        <th>Item Name</th>
                                                        <th>Item Qty</th>												<th>In stock</th>
																					
                                                        <th>Remarks</th>
                                                        <th>Created On</th>
                                                        <th>Status</th>														
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>                                                    
';
while ($row =
mysqli_fetch_array($result)) {
    $output .=
            '
 <tr>
                                                        <td><a href="#">'.$row["h_id"].'</a></td>
                                                        <td >'.$row["l_prod"].'</td>
                                                        <td>'.$row["l_qty"].'</td>
							<td>'.$row["l_stock"].'</td>
                                                        <td>'.$row["l_action"].'</td>
                                                        <td>'.$row["l_createdOn"].'</td>   
                                                        <td><span class="label label-info label-mini">Due</span></td>
                                                        <td >
                                                            <button class="btn btn-success btn-xs">
                                                                <i class="fa fa-check"></i>
                                                            </button>
                                                            <button class="btn btn-primary btn-xs">
                                                                <i class="fa fa-pencil"></i>
                                                            </button>
                                                            <button class="btn btn-danger btn-xs">
                                                                <i class="fa fa-trash-o "></i>
                                                            </button>
                                                        </td>
                                                    </tr>
 ';
}
$output .=
        '</tbody>';
$output .=
        '</table>';
echo $output;
?>
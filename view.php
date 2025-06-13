<?php
require_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Glass User Table</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>









    <div class="container">
        <h2>User Data</h2>
        <table>
            <thead>
                <tr>
                    <th>UserID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th style="padding-left: 83px;">Action</th> <!-- wam paththen thiyn space ek me -->
                    <!-- <th>Username</th>
          <th>Role</th> -->
                </tr>
            </thead>
            <tbody>
                


                <?php
                $sql = "SELECT * FROM user";  // user කියන data table එකෙන් data ගන්න කියන SQL query එක
                if ($result_set = $connection->query($sql)) {  // connection එකෙන් SQL query එක run කරලා results ලබාගන්න try කරනවා
                    $i = 0;
                    while ($datarow = $result_set->fetch_array(MYSQLI_ASSOC)) {  // ලැබුණු data set එකෙන් එක් එක් row එකක් associative array විදිහට ගන්නවා
                        $i++; //user id ek piliwelat wennnn
                        echo "<tr>" . 
                        "<td>" .$i. "</td>" .
                        "<td>" . $datarow['name']. "</td>".
                        "<td>" . $datarow['mail']."</td>".
                        "<td>" . 
                        "<button
                            style=\"padding: 10px 20px; font-weight: bold; border: none; border-radius: 8px; background-color: #007bff; color: white; cursor: pointer; \"
                            onmouseover=\"this.style.backgroundColor='#0056b3';\" 
                            onmouseout=\"this.style.backgroundColor='#007bff';\">
                           <a href = \"edit.php?user_id={$datarow['id']}\" style=\"color: white; text-decoration: none;\"> Edit </a> 
                        </button>" . ////edit.php ekt userge id ek yawanw (mek wenne get kiyn method eken), button ek click krm edit.php ekt ynw   ,text-decoration: none walin limk eke underline ek nathi krnw
                        "<button
                            style=\"padding: 10px 20px; font-weight: bold; border: none; border-radius: 8px; background-color: #ff004f; color: white; cursor: pointer; margin-left: 10px;\"
                            onmouseover=\"this.style.backgroundColor='#e6003f';\"
                            onmouseout=\"this.style.backgroundColor='#ff004f';\">
                            Delete
                        </button>".
                        "</td>".
                        

                        "</tr>";  // එක row එකක් තියෙන විට 'success' කියලා print කරනවා      . eken php wala string dekak ekthu krnn aki
                    }
                }
                ?>

<!-- normal table ekk & button ekk pahala thiyenne, wenasa therum gnn -->
                <!-- <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>john@example.com</td>
                    <td><button
                            style="padding: 10px 20px; font-weight: bold; border: none; border-radius: 8px; background-color: #6a0dad; color: white; cursor: pointer;"
                            onmouseover="this.style.backgroundColor='#8a2be2';"
                            onmouseout="this.style.backgroundColor='#6a0dad';">
                            Update
                        </button>

                        <button
                            style="padding: 10px 20px; font-weight: bold; border: none; border-radius: 8px; background-color: #ff004f; color: white; cursor: pointer; margin-left: 10px;"
                            onmouseover="this.style.backgroundColor='#e6003f';"
                            onmouseout="this.style.backgroundColor='#ff004f';">
                            Delete
                        </button>
                    </td> -->
                    <!-- <td>johndoe</td>
          <td>Admin</td> -->
             
                 
            </tbody>
        </table>
    </div>
</body>

</html>
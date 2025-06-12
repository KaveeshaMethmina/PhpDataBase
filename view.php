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
                <tr>
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
                    </td>
                    <!-- <td>johndoe</td>
          <td>Admin</td> -->
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>jane@example.com</td>
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
                    </td>
                    <!-- <td>janesmith</td>
          <td>User</td> -->
                </tr>
                <tr>
                    <td>3</td>
                    <td>Ali Khan</td>
                    <td>ali@example.com</td>
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
                    </td>
                    <!-- <td>alikhan</td>
          <td>Manager</td> -->
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
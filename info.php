<div class="container">
    <div class="row">
        <table>
            <div class="col-1">
                <tr>
                    <th>ID</th>
                    <th>Firstname</th>
                    <th>Infix</th>
                    <th>Lastname</th>
                    <th>E-mail</th>
                    <th>Opleiding</th>
                    <th>Telefoon Nummer</th>
                    <th>Burgerserversnummer</th>
                </tr>
            
            <?php
            $dbserver = "localhost";
            $dbname = "inschrijven";
            $dbusername = "root";
            $dbpassword = "";

            $conn = mysqli_connect($dbserver, $dbusername, $dbpassword, $dbname);
            $sql = "SELECT * from applicatie";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo
                    "<tr>  <td>" . $row["ID"] . "</td>"
                        . "<td>" . $row["firstname"] . "</td>"
                        . "<td>" . $row["infix"] . "</td>"
                        . "<td>" . $row["lastname"] . "</td>"
                        . "<td>" . $row["E-mail"] . "</td>"
                        . "<td>" . $row["opleiding"] . "</td>"
                        . "<td>" . $row["tel"] . "</td>"
                        . "<td>" . $row["burgerserversnummer"] . "</td></tr>";
            }
            ?>
            <form action="./index.php?content5=delete" method="post">
            
            </form>
            </div>
        </table>
    </div>
</div>
<div class="bot"></div>
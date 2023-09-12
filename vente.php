<center>
    <h1>vente</h1>

    <form action="insert_v.php" method="post">
        <table border="1">
            <?php
            include("conn.php");
            $sql = mysqli_query($con, "select * from client");
            ?>
            <tr>
                <td>Client</td>
                <td colspan="1"><select name="clt_c">
                        <option>--selectionner le client--</option>
                        <?php
                        while ($row = mysqli_fetch_array($sql)) {

                            echo "<option value='$row[0]'>$row[1] $row[2] </option>";
                        }
                        ?>
                    </select></td>
            </tr> <br>

            <?php
            $sql = mysqli_query($con, "select * from produit");
            ?>
            <tr>
                <td>produit</td>
                <td><select name="clt_p">
                        <option>--selectionner le produit--</option>
                        <?php
                        while ($row = mysqli_fetch_array($sql)) {
                            echo "<option value='$row[0]'> $row[1] </option>";
                        }
                        ?>
                    </select></td>
                    
            <tr>
                <td>date</td>
                <td colspan="1"><input type="date" name="date"></td>
            </tr>
            <tr>
                <td>qte</td>
                <td colspan="1"><input type="text" name="qte"></td>
            </tr>
            
                <td colspan="2">
                    <center><input type="submit" value="Enregister"></center>
                </td>
            
</table>
</form>
</center>


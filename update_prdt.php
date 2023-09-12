<form action="update_p.php" method="post">
    <?php
    $Id_pdt=$_REQUEST['Id_pdt'];
    ?>
    <input type="hidden" name="id" value='<?php echo $Id_pdt; ?>'>
<?php
include "conn.php";
$sql=mysqli_query($con,"select * from produit where Id_pdt='$Id_pdt'");
while ($row=mysqli_fetch_array($sql))
{
    ?>
    <center>
        <table>
            <tr><td>Libelle :</td><td><input type="text" name="Libelle" value='<?php echo $row[1];?>'></td></tr>
           <tr><td>PU :</td><td><input type="text" name="PU" value='<?php echo $row[2];?>'></td></tr>
           <tr><td>Qte_stck:</td><td><input type="text" name="Qte_stck" value='<?php echo $row[3];?>'></td></tr>
          
           <tr><td colspan="2"><center><input type="submit" value="Modifier"><input type="reset" value="Annuler"></center></td></tr>
        </table>
    </center>
    <?php
}
?>
</form>
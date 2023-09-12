<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update client</title>
    <link rel="stylesheet" href="boostsrap/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style_boot.css">
</head>
<body>
<form action="update_c.php" method="post">
    <?php
    $Id=$_REQUEST['Id'];
    ?>
    <input type="hidden" name="id" value='<?php echo $Id; ?>'>
<?php
include "conn.php";
$sql=mysqli_query($con,"select * from Client where Id_Clt='$Id'");
while ($row=mysqli_fetch_array($sql))
{
    ?>
    <center>
        <div class="col-md-6">
          
            <div class="form-group">
                <label> Entrez le nom</label>
                <input type="text" name="nom" class="form-control" value='<?php echo $row[1];?>' >
            </div>
           <div class="form-group">
                <label>Entrez le prenom</label>
                <input type="text" name="prenom" class="form-control" value='<?php echo $row[2];?>'>
            </div>
            <div class="form-group">
                <label> Entrez l'adresse</label>
                <input type="text" name="adresse" class="form-control" value='<?php echo $row[3];?>'>
            </div>
            <div class="form-group">
                <label > Entrez GSM </label>
                <input type="text" name="gsm" class="form-control" value ='<?php echo $row[4];?>'>
            </div>
            <br>
    
        <table>
            
            <!-- <tr><td>Nom :</td><td><input type="text" name="nom" value='<?php echo $row[1];?>'></td></tr> -->
           <!-- <tr><td>Prenom :</td><td><input type="text" name="prenom" value='<?php echo $row[2];?>'></td></tr>
           <tr><td>Adresse :</td><td><input type="text" name="adresse" value='<?php echo $row[3];?>'></td></tr>
           <tr><td>GSM :</td><td><input type="text" name="gsm" value ='<?php echo $row[4];?>'></td></tr> -->
           <tr><td colspan="2"><center><input type="submit" value="Modifier" id="E1"><input type="reset" value="Annuler" id="E1"></center></td></tr>
        </table>
    </center>
    <?php
}
?>
</form>
</body>
</html>

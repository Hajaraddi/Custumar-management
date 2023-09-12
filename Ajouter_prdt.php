<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="boostsrap/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style_boot.css">
</head>
<body>
    

</html>

<form action="insert_prdt.php" method="post">
    <center>
        <div class="col-md-6">
            <div class="form-group">
                <label>Libelle</label>
                <input type="text" name="Libelle" class="form-control">
            </div>
            <div class="form-group">
                <label>PU</label>
                <input type="text" name="PU" class="form-control">
            </div>
            <div class="form-group">
             <label>Qte_stck</label>
             <input type="text" name="Qte_stck" class="form-control">
            </div>
            <br>
            <tr><td colspan="2"> <center><input type="submit" value="Enregister" id="E1"><input type="reset" value="Annuler" id="E1"></center></td></tr>
            <div>
                <button type="button" class="btn btn-outline-primary" >Enregister</button>
            </div>

        </div>
        <!-- <table>
            <tr><td>Libelle :</td><td><input type="text" name="Libelle"></td></tr>
           <tr><td>PU :</td><td><input type="text" name="PU"></td></tr>
           <tr><td>Qte_stck :</td><td><input type="text" name="Qte_stck"></td></tr>
            <tr><td colspan="2"> <center><input type="submit" value="Enregister"><input type="reset" value="Annuler"></center></td></tr>
        </table> -->
    </center>
</form>
</body>
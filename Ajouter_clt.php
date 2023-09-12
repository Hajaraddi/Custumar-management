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
<form action="insert_clt.php" method="post">
    <center>
         <h6> Inserez les informations :</h6>
        <div class="col-md-6">
          
        <div class="form-group">
            <label> Entrez le nom</label>
            <input type="text" name="nom" class="form-control" >
        </div>
       <div class="form-group">
            <label>Entrez le prenom</label>
            <input type="text" name="prenom" class="form-control">
        </div>
        <div class="form-group">
            <label> Entrez l'adresse</label>
            <input type="text" name="adresse" class="form-control">
        </div>
        <div class="form-group">
            <label > Entrez GSM </label>
            <input type="text" name="gsm" class="form-control">
        </div>
        <br>
        <!-- <tr><td><button type="button" value ="env"> Envoyer </button></td></tr> -->
        <tr><td colspan="2"><center><input type="submit" id="E1" value="Enregistrer"> <input type="reset" id="E1" value="Annuler"></center></td></tr>

        <!-- <div>
            <button type="button" class="btn btn-outline-primary">Enregister</button>
        </div>
    </div>
       <table bgcolor="wheat" width:400px>
    <tr><td>Nom:</td><td><input type="text" name="nom"></td></tr>
    <tr><td>Prenom:</td><td><input type="text" name="prenom"></td></tr> 
    <tr><td>Adresse:</td><td><input type="text" name="adresse"></td></tr> 
    <tr><td>GSM:</td><td><input type="text" name="gsm"></td></tr>   
   <tr><td colspan="2"><center><input type="submit" value="Enregistrer"><input type="reset" value="Annuler"></center></td></tr>
</table> -->
    </center>
</form> 
</body>
</html>

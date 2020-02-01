<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="style.css">
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
	 <div class="container">
    <div class="row">

      <form class="form-group" method="POST" action="" >
        <div class="col-md-12">
           <h2> FORMULAIRE DE CONTACT</h2>
           <div class="form-group">
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez votre nom" style="width:314px;"> </div> <br>
            <div class="form-group">
              <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrez votre prenom" style="width:314px;">
            </div><br>
            <div class="form-group">
              <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre address mail" style="width:314px;">
            </div><br>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <textarea class="form-control" name="message" id="message" rows="10" cols="42" placeholder="Enter Message"></textarea>
            </div>
          </div>
          <div class="col-md-12">
            Femme<input type="radio" name="genre"  value="F"id="genre">
            Homme<input type="radio" name="genre" value="M" id="genre">
         </div>
            <button type="submit" name="valider"  id="envoyer" class="btn btn-success" >Envoyer</button>
            <button type="reset" name="annuler" class="btn btn-warning" >Annuler</button>
      </form>
    </div>
  </div>
 
 
</body>
</html>
  
</body>
</html>
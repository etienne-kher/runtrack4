 <!DOCTYPE html>
  <html>
    <head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    </head>
    <body>
      <header class="blue ">
        <nav class="container cyan row">
          <a href="index.php" class="col s3 center">Accueil</a> <a  class="col s3 center"href="index.php">Inscription</a> <a class="col s3 center" href="index.php">Connexion</a> <a  class="col s3 center" href="index.php">Rechercher</a>
        </nav>
      </header>
      <section class="container">
        <form class="row container light-blue  lighten-4 z-depth-3">
          <h2 class="col center s4 offset-s4 white-text">inscription</h2>
          <i class="col center s4 offset-s4 material-icons yellow-text">person</i>
          <input class="col s6 offset-s3 white z-depth-2" type="text" name="prenom" placeholder="prenom">
          <i class="col center s4 offset-s4 material-icons yellow-text">person_outline</i>
          <input class="col s6 offset-s3 white z-depth-2"type="text" name="nom" placeholder="nom">
          <i class="col center s4 offset-s4 material-icons yellow-text">home</i>
          <input class="col s6 offset-s3 white z-depth-2" type="text" name="adresse" placeholder="votre adresse">
          <i class="col center s4 offset-s4 material-icons yellow-text">security</i>
          <input class="col s6 offset-s3 white z-depth-2" type="password" name="mdp" placeholder="mot de passe">
          <i class="col center s4 offset-s4 material-icons yellow-text">security</i>
          <input class="col s6 offset-s3 white z-depth-2" type="password" name="remdp" placeholder="confirmez">

          <b class="col s6 offset-s3 white-text">passions:</b>
        

          <label class="col s4 offset-s3 white-text">
              <input class="white" type="checkbox" />
              <span>informatique</span>
          </label>

          <label class="col s4 offset-s3 white-text">
              <input type="checkbox" />
              <span>voyage</span>
          </label>   
          <label class="col s4 offset-s3 white-text">
              <input type="checkbox" />
              <span>sport</span>
          </label>                 
          <label class="col s4 offset-s3 white-text">
              <input type="checkbox" />
              <span>lecture</span>
          </label>
         
        <input class="waves-effect waves-light btn-large yellow col s4 offset-s4 " type="submit" name="env">
        </form>

      </section>    
     
    <footer class="row yellow">
      <a href="index.php" class="col s3 center white-text">Accueil</a> <a  class="col s3 center white-text" href="index.php">Inscription</a> <a class="col s3 center white-text" href="index.php">Connexion</a> <a  class="col s3 center white-text" href="index.php">Rechercher</a>
    </footer>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
  </html>


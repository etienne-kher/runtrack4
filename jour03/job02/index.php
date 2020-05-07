<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>
<header>
<nav class="nav">
  <h1 class="align-middle">lftp</h1>
  <a class="nav-link active align-middle" href="https://laplateforme.io/">Acceuil</a>
  <a class="nav-link disabled align-middle" href="#">unit</a>
  <a class="nav-link disabled align-middle" href="#">job</a>
  <a class="nav-link disabled align-middle" href="#">skills</a>
</nav>
</header>
<div class="container">
	<h1 class="text-center">LaPlateforme_</h1>
</div>
<div class="ml-3 row">
	<div class="row ml-1 col-lg-2">
		<img class="col-12 " src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSPoHgGtZDWZQBzKBT8ix8Py-55hwexFshjjkxzSfcBjjGI0bcv&usqp=CAU">
		<b>Un Papillon</b>
		<p>Un papillon, c'est un peu comme une chenille avec des ailes, ne pas ingérer.</p>
		<button class="btn btn-primary" data-toggle="modal"  data-target="#exampleModalCenter">Commander votre papillon</button>

<!--moddal!-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Merci à vous</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Vous vennez de vous procurer un magnifique papillon !!!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">fermer</button>
      </div>
    </div>
  </div>
</div>
<!--moddal!-->
	</div>
	<div id="jumbo" class="row ml-1 col-lg-8 jumbotron ">
		<h1 class="col-12 text-center">Bonjour, monde!</h1>
		
			<p class="container col-12">
il existe plusieur vision du terme:
le monde est la matière, l'espace et les phénomemène qui nous sont accéssible par les sens,l'experience ou la raison.
le sens le plus courant désigne notre planète, la Terre,avec ses habitants et son environement plus ou moin naturel.
			</p>
		<b class="col-12" id='cit'>Le sens étendu désigne l'univers dans son ensemble.</b>
		<div class="col-12">
			<button onclick="rebooter()" class="btn btn-danger">rebooter le monde</button>
      <script type="text/javascript">
        function rebooter()
        {
          a=window.document.getElementById("cit").innerHTML;
          console.log(a);
          tab=[
          "Tous ces moments se perdront dans l'oubli, comme des larmes dans la pluie.",
          "J'ai vu tant de choses, que vous, humains, ne pourriez pas croire... De grands navires en feu surgissant de l'épaule d'Orion, j'ai vu des rayons fabuleux, des rayons C, briller dans l'ombre de la Porte de Tannhaüser. Tous ces moments se perdront dans l'oubli, comme les larmes dans la pluie. Il est temps de mourir.",
          "T’endors pas c’est l’heure de mourir. ",
          "C’est dur de pas pouvoir se gratter là où ça démange.",
          "Un flic quand il quitte le métier il n’est plus personne.",
          "Avez-vous déjà désactivé un humain par erreur ?",
          "C’est dommage qu’elle doive mourir, mais on en est tous là !",
          "Étrange sensation que de vivre dans la peur… voila ce que c’est d’être un esclave."
          ];
          x=Math.round(Math.random() * 7);
          window.document.getElementById("cit").innerHTML=tab[x];

        }
      </script>
			<div id="cerc" class="spinner-border text-info" role="status">
 				<span class="sr-only">Loading...</span>
 			</div>
		</div>

		<div id="newo" class="col-12 row justify-content-end">
		
				<button onclick="chang('-')"  class="btn btn-link"><<</button>
				<button onclick="chang(1)" class="btn btn-link">1</button>
				<button onclick="chang(2)" class="btn btn-link">2</button>
				<button onclick="chang(3)" class="btn btn-link">3</button>
				<button onclick="chang('+')" class="btn btn-link"> >></button>
		
		</div>
	</div>
	<script type="text/javascript">
    first=window.document.getElementById("jumbo").innerHTML;
    newo=window.document.getElementById("newo").innerHTML;
    p=1
   function chang(a)
   {  
      if(a=="-")
      {
        a=p-1
      }
      if (a=="+") 
      {
        a=p+1
      }
      switch(a) 
      {
        case 1:
        window.document.getElementById("jumbo").innerHTML=first;
        p=1
        break;
        case 2:
         Img = new Image();
         Img.src = 'https://i.redd.it/4skcofasa1p01.png';
         Img.classList.add("w-50");
         window.document.getElementById("jumbo").innerHTML=""
         window.document.getElementById("jumbo").appendChild(Img);
         window.document.getElementById("jumbo").innerHTML+=newo;
         p=2
        break;
        case 3:
        window.document.getElementById("jumbo").innerHTML="42"+newo;
        p=3
        break;
        default:
        // code block
      }
      console.log(p);
   } 
  </script>
<div class="list-group col-lg-2 ml-1">
  <a  class="list-group-item list-group-item-action active">
    limbes
  </a>
  <a onclick="active(this)" class="list-group-item list-group-item-action">luxure</a>
  <a  onclick="active(this)" class="list-group-item list-group-item-action">gourmandise</a>
  <a  onclick="active(this)" class="list-group-item list-group-item-action">avarice</a>
  <a  onclick="active(this)" class="list-group-item list-group-item-action">colére</a>
  <a  onclick="active(this)" class="list-group-item list-group-item-action">hérésie</a>
  <a  onclick="active(this)" class="list-group-item list-group-item-action">violence</a>
  <a  onclick="active(this)" class="list-group-item list-group-item-action">ruse et tromprie</a>
  <a  onclick="active(this)" class="list-group-item list-group-item-action">trahison</a>
  <a  onclick="active(this)" class="list-group-item list-group-item-action">internet explorer</a>
  
</div>
<script type="text/javascript">
  function active(elmnt)
  {
    elmnt.classList.add("active");
  }
</script>
</div>
<div class="container">
	<h3 class="col-12 row justify-content-end">Installation de AL 9000</h3>
	<div class="row">
  <div class="col-12">
  <svg onclick="bar(0)" class="bi bi-arrow-bar-left" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 00-.708 0l-3 3a.5.5 0 000 .708l3 3a.5.5 0 00.708-.708L3.207 8l2.647-2.646a.5.5 0 000-.708z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M10 8a.5.5 0 00-.5-.5H3a.5.5 0 000 1h6.5A.5.5 0 0010 8zm2.5 6a.5.5 0 01-.5-.5v-11a.5.5 0 011 0v11a.5.5 0 01-.5.5z" clip-rule="evenodd"/>
</svg>
  <div class="progress row">
    
 		 <div id="prog" class="progress-bar-animated progress-bar-striped bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>

	</div>
  <svg onclick="bar(1)"class="bi bi-arrow-bar-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M10.146 4.646a.5.5 0 01.708 0l3 3a.5.5 0 010 .708l-3 3a.5.5 0 01-.708-.708L12.793 8l-2.647-2.646a.5.5 0 010-.708z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M6 8a.5.5 0 01.5-.5H13a.5.5 0 010 1H6.5A.5.5 0 016 8zm-2.5 6a.5.5 0 01-.5-.5v-11a.5.5 0 011 0v11a.5.5 0 01-.5.5z" clip-rule="evenodd"/>
</svg>
</div>
</div>

<script type="text/javascript">
  function bar(a)
  {
      if (a==0)
      {
          ch=-5;
      }
      else
      {
          ch=5;
      }
      barr=window.document.getElementById("prog");
      val=barr.getAttribute('aria-valuenow');
      val=parseInt(val,10)
      val+=ch;
      if(val<=100 && val>=0)
      {
          barr.setAttribute('aria-valuenow',val);
          barr.style.width = val+"%";
      }
     
      console.log(val);
  }
</script>
</div>
<section class="container">
	<div class="row justify-content-between">
	<form class="col-lg-5">
		<h3>Recevez votre copie gratuite d'internet 2</h3>
		
      		<div class="input-group m-3">
        		<div class="input-group-prepend">
        		  <span class="input-group-text" id="inputGroupPrepend3">@</span>
       			</div>
        		<input type="text" class="form-control" id="login" placeholder="login" aria-describedby="inputGroupPrepend3" required>
      		</div>
      		<div class="input-group m-3">
        		
        		<input type="text" class="form-control" id="mdp" placeholder="Mot De Passe" aria-describedby="inputGroupPrepend3" required>
        		<div class="input-group-prepend">
        		  <span class="input-group-text" id="inputGroupPrepend3">@exemple.com</span>
       			</div>
      		</div>
      		<p>URL des Internets 2 et 2.1 Beta</p>
      		<div class="input-group m-3">
        		<div class="input-group-prepend">
        		  <span class="input-group-text" id="inputGroupPrepend3">DogeCoin</span>
       			</div>
        		<input type="text" class="form-control" id="url" placeholder="" aria-describedby="inputGroupPrepend3" required>
        		<div class="input-group-prepend">
        		  <span class="input-group-text" id="inputGroupPrepend3">.00</span>
       			</div>
      		</div>
      		<div class="input-group m-3">
        		<div class="input-group-prepend">
        		  <span class="input-group-text" id="inputGroupPrepend3">https://l33t.lptf/dkwb/berlusconimkt/</span>
       			</div>
        		<input type="text" class="form-control" id="truc" placeholder="" aria-describedby="inputGroupPrepend3" required>
      		</div>
    	
	</form>
	<form class="col-lg-3 ">	
 		 <div class="form-group">
 		   <label for="exampleInputEmail1">Email address</label>
    		<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
   		 <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  		</div>
  		<div class="form-group">
  		  <label for="exampleInputPassword1">Password</label>
    		<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  		</div>
  		<div class="form-check">
    		<input type="checkbox" class="form-check-input" id="exampleCheck1">
    		<label class="form-check-label" for="exampleCheck1">Check me out</label>
  		</div>
  		<button onclick="g()" type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
</section>
<!--moddal!-->
<div class="modal fade" id="dgc" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Merci à vous</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul>
          <li id='dlog'></li>
          <li id='dmdp'></li>
          <li id='ddog'></li>
          <li id='dhttp'></li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">fermer</button>
      </div>
    </div>
  </div>
</div>
<!--moddal!-->
<script type="text/javascript">
  code="";
  window.document.onkeypress = function(e) 
  {
      get = window.event?event:e;
      key = get.keyCode?get.keyCode:get.charCode;
      key = String.fromCharCode(key);
      
     if(key=="d" && code=="")
     {
        code="d";
     }
     if(key=="g" && code=="d")
     {
        code="dg";
     }
     if(key=="c" && code=="dg")
     {
        code="dgc";
     }
      
      if (key!="d"&&key!="g"&&key!="c") 
      {
        code="";
      }

     if(code=='dgc')
      {
        log=window.document.getElementById('login').value;
        mdp=window.document.getElementById('mdp').value;
        dog=window.document.getElementById('url').value;
        http=window.document.getElementById('truc').value;

        console.log(log);
        $('#dlog').text(log);
        $('#dmdp').text(mdp);
        $('#ddog').text(dog);
        $('#dhttp').text(http);

        $("#dgc").modal("show");
      }
  }

  function g()
  {
    mail=$('#exampleInputEmail1').val();
    mmdp=$('#exampleInputPassword1').val();
    if(mail!=""&&mmdp!="")
    {
       tab=[
          "text-danger",
          "text-secondary",
          "text-success",
          "text-warning",
          "text-info",
          "text-dark",
          "text-info",
          "text-primary"
          ];
          x=Math.round(Math.random() * 7);
          window.document.getElementById("cerc").classList="spinner-border";
          window.document.getElementById("cerc").classList.add(tab[x]);
    }
  }
</script>

</body>
</html>
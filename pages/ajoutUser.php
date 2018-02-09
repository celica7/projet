<!DOCTYPE html>
<html>
<head>
	<title>Ajout d'un nouvel utilisateur</title>
	<link rel="stylesheet" type="text/css" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
</head>
<style type="text/css">
/*
	body, html{
     height: 100%;
 	background-repeat: no-repeat;
 	background-color: #d3d3d3;
 	font-family: 'Oxygen', sans-serif;
}

.main{
 	margin-top: 70px;
}

hr{
	width: 10%;
	color: #fff;
}

.form-group{
	margin-bottom: 15px;
}

label{
	margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}

.main-login{
 	background-color: #fff;
    /* shadows and rounded borders */
    /*-moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}

.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 330px;
    padding: 40px 40px;

}

.login-button{
	margin-top: 5px;
}

.login-register{
	font-size: 11px;
	text-align: center;
}
*/
body, html{
     height: 100%;
 	background-repeat: no-repeat;
 	background-color: #d3d3d3;
 	font-family: 'Oxygen', sans-serif;
}
body {
  padding-top: 20px;
  padding-bottom: 20px;
}

/* Everything but the jumbotron gets side spacing for mobile first views */
.header,
.marketing,
.footer {
  padding-right: 15px;
  padding-left: 15px;
}

/* Custom page header */
.header {
  border-bottom: 1px solid #e5e5e5;
}
/* Make the masthead heading the same height as the navigation */
.header h3 {
  padding-bottom: 19px;
  margin-top: 0;
  margin-bottom: 0;
  line-height: 40px;
}

/* Custom page footer */
.footer {
  padding-top: 19px;
  color: #777;
  border-top: 1px solid #e5e5e5;
}
.well{
	background-color: #fff;
}

hr{
	width: 10%;
	color:#fff;
}
/* Customize container */
@media (min-width: 768px) {
  .container {
    max-width: 730px;
  }
}
.container-narrow > hr {
  margin: 30px 0;
}

/* Main marketing message and sign up button */
.jumbotron {
  text-align: center;
  border-bottom: 1px solid #e5e5e5;
}
.jumbotron .btn {
  padding: 14px 24px;
  font-size: 21px;
}

/* Supporting marketing content */
.marketing {
  margin: 40px 0;
}
.marketing p + h4 {
  margin-top: 28px;
}

/* Responsive: Portrait tablets and up */
@media screen and (min-width: 768px) {
  /* Remove the padding we set earlier */
  .header,
  .marketing,
  .footer {
    padding-right: 0;
    padding-left: 0;
  }
  /* Space out the masthead */
  .header {
    margin-bottom: 30px;
  }
  /* Remove the bottom border on the jumbotron for visual effect */
  .jumbotron {
    border-bottom: 0;
  }
}
</style>
<body>
<div class="container">
    <div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Ajout d'un utilisateur</h1>
	               		<hr />
	               	</div>
	            </div>
	<div class="col-lg-12 well">
	<div class="row">
				<form>
					<div class="col-sm-12">
						
						<div class="row">
    						<div class="col-sm-6 form-group">
    							<div class="form-group">
									<label for="name" class="cols-sm-2 control-label">Nom</label>
									<div class="cols-sm-10">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
											<input type="text" class="form-control" name="nom" id="nom"  placeholder="Nom..."/>
										</div>
									</div>
								</div>
    						</div>

    						<div class="col-sm-6 form-group">
    							<div class="form-group">
									<label for="name" class="cols-sm-2 control-label">Prénom</label>
									<div class="cols-sm-10">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
											<input type="text" class="form-control" name="prenom" id="prenom"  placeholder="Prénom..."/>
										</div>
									</div>
								</div>
    						</div>
	                    </div>


    					<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="email" class="form-control" name="email" id="email"  placeholder="Email..."/>
								</div>
							</div>
						</div> 


    					<div class="row">						    
							<div class="col-sm-6 form-group">
    							<div class="form-group">
									<label>Role</label>
									<select class="form-control">
										<option>Employé</option>
									    <option>Chef de Projet</option>
									    <option>Administrateur</option>
									</select>
								</div>
							</div>

							<div class="col-sm-6 form-group">
    							<div class="form-group">
									<label>Fonction</label>
									<select class="form-control">
									    <option>Développeur</option>
									    <option>Graphiste</option>
									    <option>Chef de Projet</option>
									    <option>Gérant</option>
									    <option>Stagiaire</option>
									</select>
								</div>
							</div>

						</div>	

						<div class="row">						    
							<div class="col-sm-6 form-group">
								<label for="password" class="cols-sm-2 control-label">Mot de passe</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Mot de passe..."/>
								</div>
							</div>
							</div>
						</div>
				
						
	
					<div class="form-group ">
							<button type="button" class="btn btn-primary btn-lg btn-block login-button">Ajouter</button>
						</div>				
					</div>
				</form> 
				</div>
	</div>
</div>
</body>
</html>
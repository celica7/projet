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

</style>
<body>
<div class="container">
<div class="col-lg-12 well">
	<div class="row">
		<form>
			<div class="col-sm-12">
						
				<div class="row">
			    	<div class="col-sm-6 form-group">
			    		<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Date de début</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
									<input type="date" class="form-control" name="nom" id="nom"  placeholder="Nom..."/>
								</div>
							</div>
						</div>
			    	</div>
			    	<div class="col-sm-6 form-group">
			    		<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Date de fin</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
									<input type="date" class="form-control" name="prenom" id="prenom"  placeholder="Prénom..."/>
								</div>
							</div>
						</div>
			    	</div>
				</div>

    			<div class="row">						    
					<div class="col-sm-6 form-group">
						<label>Motif</label>
						<input type="text" placeholder="Motif..." name="motif" class="form-control">
					</div>
					<div class="col-sm-6 form-group">
    					<div class="form-group">
							<label>Utilisateur</label>
							<select class="form-control">
							    <option>Tous</option>
							    <optgroup label="Graphiste">
									<option>Rodolphe</option>
							    	<option>Gaston</option>
								</optgroup>
								<optgroup label="Développeur">
									<option>Sacha</option>
							    	<option>Jean Pierre</option>
								</optgroup>									    
							</select>
						</div>
					</div>
				</div>	
				
				<div class="form-group ">
						<button type="button" class="btn btn-primary btn-lg btn-block login-button">Enregister</button>
				</div>				
			</div>
		</form> 
	</div>
</div>
</div>
</body>
</html>
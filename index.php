



<!doctype html>
<html>
	<head>
		<title>WeatherScraper</title>
			<meta charset="utf-8" />
			<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1" />
            <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
			<link href="bootstrap/font-awesome/css/font-awesome.min.css" />
			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity=					"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

			<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<style>
	html, body{
		height: 100%;
		}
	.container{
		background-image: url( "background.jpg");
		height: 100%;
		width: 100%;
		background-size: cover;
		background-position: center;
		padding-top: 150px;
		}
		.center{
			text-align: center;
			}
		button{
			margin-top: 20px;
			margin-bottom: 20px;
			}
		.alert{
			margin-top: 20px;
			display:none;
			}
		.lead{
			padding-top: 20px;
			}
	</style>
    </head>
<body>
<div class="container">
	<div class="row">
    	<div class="col-md-6 col-md-offset-3 center">
        <h1 class= "center"> Weather Predictor </h1>
        <p class="lead"> Enter your city below to get a forecast </p>
        <form>
        	<div class="form-group">
            	<input type= "text" class="form-control" name="city" id="city" placeholder="Eg. London, Paris, Los Angeles..." />
                
                <button id="findMyWeather" class="btn btn-success btn-lg">Find My Weather</button>
            </div>
        
        </form>
        
        
			<div id="success" class="alert alert success">SUCCESS!!!</div>
            <div id="fail" class="alert alert danger">Could not find Weather data for that city, Please try again</div>   
            <div id="noCity" class="alert alert danger">Please enter a city</div>      
		</div>
	</div>
</div>

<!-- JQuery script -->
<script
  src="//code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>				
<script>
$("#findMyWeather").click(function(){
	event.preventDefault();
	$(".alert").hide();
	if($("#city").val() != ""){
	$.get("scraper.php?city=" + $("#city").val(), function (data){
		
		if (data== ""){
			
			$("#fail").fadeIn();
			
			}
			else{
				$("#success").html(data).fadeIn();
				}
		});
	}
	else{
		$("#noCity").fadeIn();		
			}
	});

</script>
</body>

</html>
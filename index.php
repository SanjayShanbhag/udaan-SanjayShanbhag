<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
     <style type="text/css">
        @media screen and (max-width: 900px){
            .searchbox{
                width: 90%;
            }
            .back{
                background-color: #212121;
                opacity: 1;
            }
        }
    </style>
    <script type="text/javascript">
        function myFunction1(){
            document.getElementById('searchresults').innerHTML = "";
                var srch = $("#srch");
                var url = "fetchdata.php";
                $.post(url,{srch1: srch.val()}, function(data){
                    $('.searchresults').append(data);
                });
        }
    </script>
</head>
<body>
		<nav class="navbar navbar-inverse navbar-fixed-top" style="margin: 0; border: none; border-radius: 0;">
  			<div class="container-fluid">
    			<div class="navbar-header">
      				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span> 
      				</button>
      				<a class="navbar-brand" href="#">Udaan</a>
    			</div>
  			</div>
		</nav>
        <div class="container-fluid back">
            <br><br><br><br><br><br>
            <div class="container">
                <div class="searchbox">
                    <br><br>
                    <img src="images/logo.jpe" style="width: 240px; height: 80px;" class="center-block">
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-sm-2 col-lg-2 col-md-2">
                        </div>
                        <div class="col-sm-8 col-lg-8 col-md-8">
                            <div style="padding-left: 5px; padding-right: 5px;">
                                <input type="text" name="srch" class="form-control" id="srch" placeholder="Search Text Here" onkeyup="myFunction1()">
                            </div>
                            <br><br>
                            <button class="center-block btn btn-default">Search</button>
                        </div>
                        <div class="col-sm-2 col-lg-2 col-md-2">
                        </div>
                    </div>
                </div>
                 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <div class="row">
                    <div class="searchresults" id="searchresults">
                        <h4> Search Results</h4>
                    </div>
                </div>
            </div>
            <br><br><br>
        </div>
</body>
</html>
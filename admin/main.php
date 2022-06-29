


<html lang="en">

<head>
	 <title>Reach On Digital</title>
    <link rel="icon" href="style_sheets/pictures/logolgwhite.png" type="image/icon type">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/e94d846b38.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!--   bootstrap CDN,s  -->
    <!--   google fonts  -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

    <!--    files   -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-bez@1.0.11/src/jquery.bez.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<!--    <script type="text/javascript" src="scripts/javascript/mgGlitch.min.js"></script>-->

    <link rel="stylesheet" href="style_sheets/owl.carousel.min.css">
    <link rel="stylesheet" href="style_sheets/style.css">
<style>
    * {
	box-sizing: border-box;
}

body {
	padding: 0;
	margin: 0;
	background: url(./style_sheets/pictures/login.jpg);
	color: #fff;
	font-family: 'Ubuntu', sans-serif;
}
a{
	text-decoration: none;
}
#wrapper {
	width: 430px;
	background: url(./style_sheets/pictures/login.jpg);
	margin: 25px auto;
	padding: 64px;
	background-size: cover;
	position: relative;
	z-index: 1;
	box-shadow: 0px 15px 20px 0px rgba(128, 128, 128, 0.76);
}

#wrapper:before {
	content: "";
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background: rgba(0, 0, 0, .64);
	z-index: -1;
}

#table {
	margin-bottom: 6em;
}

#table a {
	text-transform: uppercase;
	margin-right: 40px;
	padding: 11px 4px;
	color: #bbb;
	cursor: pointer
}

#table a.active {
	border-bottom: 1.5px solid #1061EE;
	color: #fff;
}

label {
	display: block
}

form {
	margin-bottom: 3.3em;
}

.form-group {
	position: relative;
	margin-bottom: 16px;
}

.form-group label {
	display: block;
	margin-bottom: 6px;
	font-size: 14px;
	margin-left: 14px;
	color: #bbb;
}

input {
	width: 100%;
	background: rgba(0, 0, 0, 0.42);
	outline: none;
	padding: 10px 14px;
	color: #fff;
	border: none;
	border-radius: 36px;
	font-family: 'Ubuntu', sans-serif;
	font-size: 16px;
	transition: background 0.5s ease-in-out;
}
span#showpwd {
    position: absolute;
    top: 32px;
    right: 16px;
    cursor: pointer;
}
input:focus {
	background: rgba(0, 0, 0, 0.6);
}

input[type="submit"] {
	background: #1061EE;
	margin-top: 14px;
	cursor: pointer;
}

#checkbox {
	color: #fff;
	cursor: pointer;
	font-size: 16px
}

#checkbox input+.text:before {
	content: "\f096";
	display: inline-block;
	font: normal normal normal 14px/1 FontAwesome;
	font-size: inherit;
	text-rendering: auto;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	margin-right: 6px;
	width: 1em;
}

#checkbox input:checked+.text:before {
	content: "\f14a";
	color: #1061ee;
	animation: scalecheck 0.1s
}

#checkbox input {
	display: none;
}

@-webkit-keyframes scalecheck {
	0% {
		transform: scale(0);
	}
	90% {
		transform: scale(1.4);
	}
	100% {
		transform: scale(1);
	}
}

.hr {
	height: 1.4px;
	background: rgba(128, 128, 128, 0.51);
	border-radius: 17px;
	margin-bottom: 33px;
}

#froget-pass {
	text-align: center;
	color: #bbb;
	margin: 0;
	display: block;
}

@media screen and (max-width :490px) {
	body {
		display: table;
		width: 100%;
	}
	#wrapper {
		width: auto;
		height: 100vh;
		margin: 0;
		display: table-cell;
		vertical-align: middle;
	}
}

@media screen and (max-width :490px) {
	#wrapper {
		padding: 28px;
	}
}

</style>

</head>

<body>

	<div id="wrapper">
		<div id="table">
			<a class="active">Log in</a>
		</div>
		<div id="signin">
			<form action="submit.php" method="post" name="login_form" id="login_form" autocomplete="off">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="email" name="Email" id="Email" class="form-control" required autofocus>
				</div>
				<div class="form-group">
					<label for="Password">Password</label>
					<input type="password" name="Password" id="Password" class="form-control" required pattern=".{6,12}" title="6 to 12 characters.">
				</div>
                
				<div class="form-group">
					<button type="submit" class="btn btn-lg btn-primary btn-block">Login</button>
				</div>
			</form>
		<div class="hr"></div>
		
    </div>
		
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    
    
    <script type="text/javascript">
        $("#login_form, #registration_form").submit(function (e) {
    e.preventDefault();
    var obj = $(this), action = obj.attr('name'); /*Define variables*/
    $.ajax({
        type: "POST",
        url: e.target.action,
        data: obj.serialize()+"&Action="+action,
        cache: false,
        success: function (JSON) {
            if (JSON.error != '') {
                $("#"+action+" #display_error").show().html(JSON.error);
            } else {
                window.location.href = "./";
            }
        }
    });
});
    </script>
    
</body>

    
    
</html>

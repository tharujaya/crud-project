<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>

    body{
	background-image:url({{url('upload/r1.jfif')}});
    background-position: center!important;
    background-size: cover!important;
    }
#login-name{
font-size: 65px;
font-family: arabic typesetting;
border-bottom-style: ridge;
color:white;

}
#login{
background-color:rgba(13,13,13,0.2);
min-height:500px;
padding: 40px 80px 40px 80px;
box-shadow: -10px -10px 9px #18269e9d;

}
.user{
font-size: 20px;

font-family: arabic typesetting;

color: white;

}

#iconn{

background-color: #5cb85c;
border-color: #4cae4c;
color: white;

}
#iconn1{

background-color: #5cb85c;
border-color: #4cae4c;
color: white;

}

#text1{

	border-radius: 0;
	height: 30px;
}
#text2{

	border-radius: 0;
	height: 30px;
}

.btn{
	width: 50%;
	float: left;
	height: 30px;
	font-size: 16px;
}

.label_001{

	font-size: 16px;
	color: white;
	font-style: italic;
}
.login{
    text-decoration: none;
    color: rgb(9, 11, 136);
}
</style>
</head>

<body>
	

<div class="container">
<br/>
<br/>
<br/>
<br/>

<center> <b id="login-name">Register Here </b> </center>>
	
	<div class="row">
		
<div class="col-md-6 col-md-offset-3" id="login">  

        <form action="{{route('dashboard.registration.process')}}" method="POST">
            @csrf
        <div class="form-group">
        <label class="user"> Name:  </label>

            
        <input type="text" class="form-control" id="text1" name="name" placeholder="Username">
        </div>


        <div class="form-group">
        <label class="user"> Email ID: </label>

        <input type="email" class="form-control" id="text2" name="email" placeholder=" EnterEmail Address">

        </div>
        <div class="form-group">
        <label class="user"> Mobile No: </label>

        <input type="text" class="form-control" id="text2" name="mobileNo" placeholder=" Enter your mobile Number">

        </div>

        <div class="form-group">
        <label class="user"> Password: </label>
        <input type="text" class="form-control" id="text2" name="password" placeholder=" Enter Password">
        </div>

        <div class="form-group">
        <label class="user">Confirm Password: </label>
        <input type="text" class="form-control" id="text2" name="confirmPassword" placeholder=" Enter Confirm passowrd">
        </div>


        <div class="form-group">

        <button type="submit" class="btn btn-success" value="submit" style="border-radius:0px;">Submit</button>
        <button type="reset" class="btn btn-danger" value="Reset" style="border-radius:0px;">Reset</button>

            </div>
            <br/>
            <h3>Already a member ? <a href="{{route('login')}}" class="login" >Login </a></h3>
        </form>
  </div>
	</div>

</div>
	</body>
	</html>
<!DOCTYPE html>
<html lang="en">
<head>
    @include('dashboard.layout.header')
    <style>
        .login-body {
    background-image: url({{url('upload/log1.jpg')}})!important;
    background-position: center!important;
    background-size: cover!important;
    -webkit-font-smoothing: antialiased;
    font: normal 20px Roboto, arial, sans-serif!important;
    font-family: 'Dancing Script', cursive!important;
}
.lable-font{
    color: rgb(255, 255, 255);
    font: normal 32px Roboto, arial, sans-serif!important;
    font-family: 'Dancing Script', cursive!important;

}
.container-login {
    padding: 110px;
}

 ::placeholder {
    /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: #ffffff!important;
    opacity: 1;
    /* Firefox */
    font-size: 28px!important;
}

.form-login {
    background-color: rgba(0, 0, 0, 0.55);
    padding-top: 10px;
    padding-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 15px;
    border-color: #d2d2d2;
    border-width: 5px;
    color: white;
    box-shadow: 0 1px 0 #cfcfcf;
}

.form-control {
    background: transparent!important;
    color: white!important;
    font-size: 18px!important;
}

.login-h4 {
    border: 0 solid #fff;
    border-bottom-width: 1px;
    padding-bottom: 10px;
    text-align: center;
}

.form-control {
    border-radius: 10px;
}

.text-white {
    color: white!important;
}

.wrapper {
    text-align: center;
}

.footer p {
    font-size: 18px;
}

.btn-md {
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: 14px;
}
.register{
    text-decoration: none;
    color: rgb(228, 201, 48);
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    align-items: left;
}
    </style>
</head>
<body class="login-body">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-3">
                <div><h3 class="text-white">Not a member ? <a href="{{route('registration')}}" class="register" >Register </a></h3></div>
            </div>
            </div>
        </div>

<!-- Page Content -->
<div class="container-login">
    
<div >
    <div class="row">
        <div class="col-md-offset-4 col-md-4 text-center">
            <h1 class='text-white'>Login Form</h1>
            <form action="{{route('dashboard.login.process')}}" method="POST">
                @csrf
                <div class="form-login"></br>
                    <h4 class="login-h4">Welcom</h4>
                    </br>
                    <label for="email" class="cols-sm-2 control-label lable-font">Your Email</label>
                    <input type="text" id="userName" name="email" class="form-control input-sm chat-input" placeholder="username"/>
                    </br></br>
                    <label for="email" class="cols-sm-2 control-label lable-font">Your Password</label>
                    <input type="password" id="userPassword" name="password" class="form-control input-sm chat-input" placeholder="password"/>
                    </br></br>
                    <div class="wrapper">
                            <span class="group-btn">
                                <Button type="submit" class="btn btn-md">login <i class="fa fa-sign-in"></i></Button>
                            </span>
                    </div>
                </div>
            </form>
        </div>
        
    </div>
    </br></br></br>
    <!--footer-->
    <div class="footer text-white text-center">
        <p></p>
    </div>
    <!--//footer-->
</div>
</div>
</body>
</html>

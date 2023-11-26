<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
     <!-- Registration Form -->
     <section id="register" class="mt-5">
        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <h1 style="text-align: center;color:red">welcome to LincolnSiwes </h1>
                        <div class="card-header">Register</div>
                        <div class="card-body">
                            <form method="post" action="">
                            
                                <div class="form-group">
                                    <img style=" width:20%;border-radius:50%" src="images/lin.png" alt="Avatar">
                                </div>
                                <div class="form-group">
                                    <label for="firstname">FirstName</label>
                                    <input type="text" class="form-control" name="firstname" id="firtname" placeholder="Enter your firstname">
                                </div>
                                <div class="form-group">
                                    <label for="lastname">LastName</label>
                                    <input type="text" class="form-control" name="lastname"  id="lastname" placeholder="Enter your lastname">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="repassword">Confirm Password</label>
                                    <input type="password" class="form-control" name="password_confirmation" id="repassword" placeholder="confirm Password">
                                </div>
                                <button type="submit" class="btn btn-primary">Register</button>
                                <div class="form-group">
                                <label for="email">Already Have Account ?</label>
                                <a href="login.com">Login</a>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

</body>
</html>

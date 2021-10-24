<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>FUNRUN 2021</title>

<nav class="navbar navbar-light" style="background-color: #2c2828b4;">
<ul>
    <li><a href="\login">Login</a></li>
    <li><a href="\register">Register</a></li>
    <li><a href="\login">Register for run program</a></li>
    <li><a href="\welcome_message.php" >Home </a></li>
</ul>
</nav>
<style>
		body {
 		 margin: 0;
 		 padding: 2rem 5rem;
 		 text-align: center;
 		 background-image: url(http://streetwill.co/uploads/post/photo/85/show_wp4Ff1Dn_UlPhP8RIpfXtoRRMyBhH-03DRS1wsE3Brg.jpg);
		 color: rgb(0, 0, 0);
 		 font-family: "helvetica neue", sans-serif;
 		 font-weight: 100;
 		 font-size: 16px;
	  
	}
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: none;
    }
    li {
        float: right;
    }
    li a {
        display: block;
        color: rgb(250, 249, 249);
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }
    .footer {
     position: fixed;
     left: 0;
     bottom: 0;
     width: 100%;
     background-color: rgba(29, 24, 24, 0.733);
     color: white;
     text-align: center;
     
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}
</style>
</head>
<body>
    <div class="container mt-4">
   <center> <div class="card">
            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <h1>Sign Up</h1>
                    <hr>
                    <?php if(isset($validation)): ?>
                        <div class="alert alert-danger"><?= $validation->listErrors(); ?></div>
                    <?php endif; ?>
                    <form action="/register/save" method="post">
                    <div class="mb-3">
                        <label for="inputid_card" class="form-label">Citizen ID</label>
                        <input type="text" name="id_card" class="form-control" id="inputforcard" value="<?= set_value('id_card'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputname" class="form-label">First - Lastname</label>
                        <input type="text" name="name" class="form-control" id="inputforname" value="<?= set_value('name'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputage" class="form-label">Age</label>
                        <input type="text" name="age" class="form-control" id="inputforage" value="<?= set_value('age'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputemail" class="form-label">E-mail</label>
                        <input type="email" name="email" class="form-control" id="inputforemail" value="<?= set_value('email'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputpassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="inputforpassword">
                    </div>
                    <div class="mb-3">
                        <label for="inputconfpassword" class="form-label">Confirm Password</label>
                        <input type="password" name="confpassword" class="form-control" id="inputforconfpassword">
                    </div>
                    <button type="submit" class="btn btn-success">Sign Up</button>
                    <a href="/welcome_message.php" class="btn btn-danger me-1">Cancel</a>
                </form>
                </div>
            </div>
        </div>
       </div>
       </center>
    
</body>
<footer>
<div class="footer">
      <p>Creator by <br>
      Abhisit Saikraikra</p>
    </div>

</footer>
</html>



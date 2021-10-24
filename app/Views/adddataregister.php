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
    <li><a href="\adddataregister">Register for run program</a></li>
    <li><a href="\username" >Run Program </a></li>
</ul>
<?php $session = session(); ?>
                <h5 class="user me-3"><?php echo $session->get('name')?></h5> 
                <a href="/welcome_message.php" class="btn btn-danger">Logout</a>
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

<center><h2>Register for run Program</h2>
<div class="card">
            <form action="/AddDataRegister/regis" method="post">
              <div class="container mt-4">
                <div class="row justify-content-md-center">
                  <div class="col-md-6">
                    <div class="mb-3">
                        <label for="inputid_card" class="form-label">Citizen ID :</label>
                        <input type="text" name="id_card" class="form-control" id="inputforcard" value="<?php echo $session->get('id_card');  ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputname" class="form-label">First-Lastname :</label>
                        <input type="text" name="name" class="form-control" id="inputforcard" value="<?php echo $session->get('name');  ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputid_card" class="form-label">ID Funrun :</label>
                        <input type="text" name="ID" class="form-control" id="inputforID" placeholder="Example : RUN0000001" value="<?= set_value('ID'); ?>">
                    </div>
                    <label>Category run :</label> <br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="category" name="category" value="1">
                      <label class="form-check-label" for="inlineCheckbox1">FUNRUN</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="category" name="category" value="2">
                      <label class="form-check-label" for="inlineCheckbox2">Mini Marathon</label>
                    </div>
                    <br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="category" name="category" value="3">
                      <label class="form-check-label" for="inlineCheckbox3">VIP</label>
                    </div>
                  
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="category" name="category" value="5">
                      <label class="form-check-label" for="inlineCheckbox3">Super VIP</label>
                    </div>
                    <br><br>
                    <button type="submit" class="btn btn-success">Confirm</button>
                    <a href="/homeuser" class="btn btn-danger me-1">Cancel</a>
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

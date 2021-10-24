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
                  :root {
                --surface-color: #fff;
                --curve: 40;
              }

              * {
                box-sizing: border-box;
              }

              body {
                font-family: 'Noto Sans JP', sans-serif;
                background-color: #fef8f8;
              }

              .cards {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 2rem;
                margin: 4rem 5vw;
                padding: 0;
                list-style-type: none;
              }

              .card {
                position: relative;
                display: block;
                height: 100%;  
                border-radius: calc(var(--curve) * 1px);
                overflow: hidden;
                text-decoration: none;
              }

              .card__image {      
                width: 100%;
                height: auto;
              }

              .card__overlay {
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                z-index: 1;      
                border-radius: calc(var(--curve) * 1px);    
                background-color: var(--surface-color);      
                transform: translateY(100%);
                transition: .2s ease-in-out;
              }

              .card:hover .card__overlay {
                transform: translateY(0);
              }

              .card__header {
                position: relative;
                display: flex;
                align-items: center;
                gap: 2em;
                padding: 2em;
                border-radius: calc(var(--curve) * 1px) 0 0 0;    
                background-color: var(--surface-color);
                transform: translateY(-100%);
                transition: .2s ease-in-out;
              }

              .card__arc {
                width: 80px;
                height: 80px;
                position: absolute;
                bottom: 100%;
                right: 0;      
                z-index: 1;
              }

              .card__arc path {
                fill: var(--surface-color);
                d: path("M 40 80 c 22 0 40 -22 40 -40 v 40 Z");
              }       

              .card:hover .card__header {
                transform: translateY(0);
              }

              .card__thumb {
                flex-shrink: 0;
                width: 50px;
                height: 50px;      
                border-radius: 50%;      
              }

              .card__title {
                font-size: 1em;
                margin: 0 0 .3em;
                color: #6A515E;
              }

              .card__tagline {
                display: block;
                margin: 1em 0;
                font-family: "MockFlowFont";  
                font-size: .8em; 
                color: #D7BDCA;  
              }

              .card__status {
                font-size: .8em;
                color: #D7BDCA;
              }

              .card__description {
                padding: 0 2em 2em;
                margin: 0;
                color: #D7BDCA;
                font-family: "MockFlowFont";   
                display: -webkit-box;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 3;
                overflow: hidden;
              }    
          </style>
    </head>
    <body>
      <h1>Welcome to Run Program 2021</h1>
      <ul class="cards">
  <li>
    <a href="/adddataregister" class="card">
      <img src="https://www.prachachat.net/wp-content/uploads/2020/05/13-4p1-1-728x485.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <div class="card__header-text">
            <h3 class="card__title">FUNRUN</h3>            
            <span class="card__status">3KM ,550฿</span>
        
          </div>
        </div>
        <p class="card__description">11 Nov 2021</p>
        <p class="card__description">08.30 A.M.-17.30 P.M.</p>
        <p class="card__description">สวนลุมพิณี</p>
        
      </div>
    </a>      
  </li>
  <li>
    <a href="/adddataregister" class="card">
      <img src="http://www.sat.or.th/wp-content/uploads/2020/08/116938263_3206837069430525_8418735039052404272_n-840x560.jpg" class="card__image" alt="" />
      <div class="card__overlay">        
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
          <div class="card__header-text">
            <h3 class="card__title">Mini Marathon</h3>
            <span class="card__status">10 KM. , 550฿</span>
          </div>
        </div>
        <p class="card__description">29 Nov 2021</p>
        <p class="card__description">07.30 A.M.-15.30 P.M.</p>
        <p class="card__description">สะพานพระราม 8</p>
      </div>
    </a>
  </li>
  <li>
    <a href="/adddataregister" class="card">
      <img src="https://s.isanook.com/sp/0/ud/136/684739/loverunnert.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <div class="card__header-text">
            <h3 class="card__title">VIP</h3>
            <span class="card__tagline">3-10KM, 1000฿</span>   
            </div>
        </div>    
            <p class="card__description">5 Dec 2021</p>
            <p class="card__description">09.30 A.M.-14.30 P.M.</p>     
            <p class="card__desctiption">สวนสมเด็จพระนางเจ้าสิริกิติ์ฯ</p>
      
      </div>
    </a>
  </li>
  <li>
    
    <a href="/adddataregister" class="card">
      <img src="https://positioningmag.com/wp-content/uploads/2019/01/open_run.png" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
          <div class="card__header-text">
            <h3 class="card__title">Super VIP</h3>
            <span class="card__status">15KM,1200฿ </span>
          </div>          
        </div>
        <p class="card__description">12 Dec 2021</p>
        <p class="card__description">08.30 A.M.-15.30 P.M.</p>
        <p class="card__description">สวนหลวงร.9</p>
      </div>
    </a>
  </li>    
</ul>   
 
      </body>
<footer>
<div class="footer">
      <p>Creator by <br>
      Abhisit Saikraikra</p>
    </div>

</footer>
      </html>
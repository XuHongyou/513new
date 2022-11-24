
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="style3.css" rel="stylesheet">
</head>
<body>

<div class="container2">
<div class="container3">
      <div class="circle-container2">
        <div class="circle">
          <button id="close">
            <i class="fas fa-times"></i>
          </button>
          <button id="open">
            <i class="fas fa-bars"></i>
          </button>
        </div>
      </div>

<div id="header-wrapper">
        <div class="search">
          <input type="text" class="input" placeholder="Search...">
          <h1>CAREES PAGE</h1><button class="btn">
            <i class="fas fa-search"></i>
          </button>
        </div>
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">Welcome to Luca’s Loaves</a></h1>
		</div>	
	</div>
</div>
</div>
<div class="wrapper">
	<div id="welcome" class="container">
		<div class="title">
            <h1>Join our team</h1>
            <p> We are expanding our branches and need experienced baker regularly.</n>
                Send us your detail with the form below</br>
            and we will be in contact shortly</p>

            <div id="three-column" class="container">
           
                <div class="title">
                    <h2>Fill out the form below and upload your cover letter and resume</h2></div>

      
            <form action="file_upload.php" method="post" enctype="multipart/form-data" >
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="First name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="email" id="email" placeholder="Last name" required>
                </div>
              
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Email Address" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" id="message" cols="30" rows="5" placeholder="Work experience" required></textarea>
              </div>
                <p>
            Select files1 to upload:
             
            <!-- name of the input fields are going to
                be used in our php script-->
            <input type="file" name="files[]" multiple><br><br>
            
            Select files2 to upload:
            <input type="file" name="files[]" multiple>
             <br>
             <input type="submit" name="submit" value="Upload"  class="open-button">
              </div>
            </form>
          </div>
    </div>
  </div>



  
</div>

            <footer  class="footer2">  
            20ITA1 Pamper, Xu Hongyou
          </footer>
</div>
          <nav>    
      <ul>
        <li><i class="fas fa-home"></i><a href="index2.php" accesskey="1" title=""> Home</a></li>
        <li><i class="fas fa-user-alt"></i><a href="aboutus.php" accesskey="2" title=""> About</a></li>
        <li><i class="fas fa-envelope"></i><a href="upload.php" accesskey="3" title=""> CAREES</a></li>
        <li><i class="fa fa-cart-plus"></i><a href="orderonline.php" accesskey="4" title=""> ORDERONLINE</a></li>
        <li><i class="fa fa-globe"></i><a href="contactus.php" accesskey="5" title=""> Contact</a></li>
        <li><i class="fa fa-plus-square"></i><a href="register2.php" accesskey="6" title=""> REGISTER</a></li>

      </ul>
    </nav>
    <script src="script2.js"></script>
</body>
</html>

           
  

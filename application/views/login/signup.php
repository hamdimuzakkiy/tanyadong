

  <body class = "fix-background">

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">	  	
		      <form id = "form_signup" autocomplete="on" method="post" class="form-login form-signup" action="<?php print base_url(); ?>login">
		        <h2 class="form-login-heading">Create Account Now</h2>
		        <div class="login-wrap">
		        	<div class = 'col-lg-6 form-group'>
            			<input  name="nama_depan" id = "nama_depan" class="form-control" placeholder = "Nama Depan" autofocus required>
            		</div>
            		<div class = 'col-lg-6 form-group'>
            			<input  name="nama_belakang" id = "nama_belakang" class="form-control" placeholder = "Nama Belakang" required>
            		</div>
            		<div class = 'col-lg-12 form-group'>
            			<input  name="username" id = "username" class="form-control" placeholder = "User Name" required>
            		</div>
		        	<div class = 'col-lg-12 form-group'>
            			<input type="email" name="email_" id = "email_" class="form-control" placeholder = "Alamat Email" required>
            		</div>
            		<div class = 'col-lg-6 form-group'>
            			<input type="password" name="password" id = "password" class="form-control" placeholder = "Password" required>
            		</div>
            		<div class = 'col-lg-6 form-group'>
            			<input type="password" name="konfirm_password" id = "konfirm_password" class="form-control" placeholder = "Konfirmasi Password" required>
            		</div>
            		<div class = 'col-lg-12 form-group'>
            			<input type="date" name="tanggal_lahir" id = "tanggal_lahir" class="form-control" placeholder = "Tanggal Lahir" required>
            		</div>
            		<div class = 'col-lg-12 form-group'>
            			<input name="alamat" id = "alamat" class="form-control" placeholder = "Alamat" required>
            		</div>		            
		            <div class = 'col-lg-6 form-group'>		            	
		            	<input type="checkbox"> Saya Setuju Dengan Aturan Yang Berlaku
		            </div>
		            <div class = 'col-lg-6 form-group'>
		            	<button onclick="return check_signup()" class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> SIGN UP</button>
		            </div>
		            <br>
		            <hr>
		            <div class="registration">
		                &nbsp<br/>

		                have an account ?
		                <br>
		                <a class="" href="<?php print base_url(); ?>login">
		                    Login
		                </a>
		            </div>
		
		        </div>			
		      </form>	  		  	
	  	</div>
	  </div>

    <script type="text/javascript">
    	
    </script>
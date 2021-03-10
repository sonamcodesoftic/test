<html>
<h1>Register Here</h1>
<style>
 input
 {
	 margin-top : 2%;
 }
</style>
<body align="center">
        <form action="<?= base_url('test/add')?>" method="POST"></div>
         <div><input type="text" name="fname" placeholder="Enter your name" ></div>
		 <div><input type="text" name="lname" placeholder="Enter your Last name" ></div>
		 <div><input type="email" name="mail" placeholder="Enter your Email" ></div>
		 <div><input type="password" name="password" placeholder="Enter your password" ></div>
		 <div><input type="submit" name="submit" ></div>
		 <div></form>
</body>
</html>
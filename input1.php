 <html>
	<head>
		<title>Kelola Data Barang</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
		<body>
		   <h3>KELOLA DATA BARANG</h3>
		   <link rel="stylesheet" type="text/css" href="style.css"/>
		    <br>
		    <br>
		   <table width =50% height =5% p align ="center">
		   <tr>
		      <td><b>Input Data Barang </b></td>
		   </tr>
		    <br>


<form action = "inpt.php" method="post" p align="center">
		   <table width =50% height 5% align = "center">
           <tr>
		      <td>Kode :</td>
		      <td><input class ="br" name ="kode" type="text"></td>
		   </tr>
           <tr>
		      <td>Nama :</td>
			  <td><input type="text" name ="nama" class="br"></td>
		   </tr>		   
		   <tr>
		      <td>Deskripsi :</td>
			  <td><textarea name ="deskripsi"class ="br"></textarea></td>
		   </tr>
		   <tr>
		      <td>Stok :</td>
			  <td><input type ="text" name="stok" class="br"></td>
		   </tr>
		   <tr>
		      <td>Harga :</td>
			  <td><input type ="text" name="harga" class="br"></td>
		   </tr>
		   <tr>
		      <td>Berat :</td>
			  <td><input type ="text" name="berat" class ="br"><i>gram </i></td>
		   </tr>
		    
		   <table>
		   <p align ="center"><input class ="btn" type=submit value="Tambah">
  </form>
		  
		</body>
	</html>	
		
		
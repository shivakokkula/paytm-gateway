<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Merchant Check Out Page</title>
<meta name="GENERATOR" content="Evrsoft First Page">
<style>
*{
    margin:0%;
    border: 0%;
}
body{
    text-align: center;
}
h1{
    margin-top:4% ;
    font-size: 40px;
}
table{
    width: 96%;
    margin: 2%;
    padding: 2%;
	border-collapse:collapse;
    background-color:skyblue;
}
td{
    padding: 10px;
}
th{
    padding: 2%;
    background-color: #eceaeaad;
    font-size: large;
}
input{
	width:100%;
	height:max-content;
	font-size:large;
}
input[type="submit"]{
	width:fit-content;
}
.apply{
    color: rgb(11, 177, 243);
}
</style>
</head>
<body>
	<h1>Merchant Check Out Page</h1>
	<pre>
	</pre>
	<form method="post" action="pgRedirect.php">
		<table border="1">
			<tbody>
				<tr>
					<th>S.No</th>
					<th>Label</th>
					<th>Value</th>
				</tr>
				<tr>
					<td>1</td>
					<td><label>EMAIL : *</label></td>
					<td><input id="EMAIL" tabindex="1"
						name="EMAIL" autocomplete="off" required>
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td><label>TXNAmount : *</label></td>
					<td><input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="1">
					</td>
				</tr>
				<tr>
					<td colspan="3"><input value="CheckOut" type="submit"	onclick=""></td>
				</tr>
			</tbody>
		</table>
		* - Mandatory Fields
	</form>
</body>
</html>
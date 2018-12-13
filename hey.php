<html>
<head>
<title>login </title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script>
function chk()
{
var fname=document.getElementById('fname').value;
var lname=document.getElementById('lname').value;
var dataString='fname='+ fname + '&lname='+lname;
$.ajax({
	type:"post",
	url:"hi.php",
	data:dataString,
	cache:false,
	success:function(html){
		$('#msg').html(html);
	}
});
return false;
}
</script>
</head>
<body>
<form>
First Name:<input type="text" id="fname"></br>
Last Name:<input type="text" id="lname"></br>
<input type="submit" value="submit" onclick="return chk()">
<p id="msg"></p>
</form>

</body>
</html>
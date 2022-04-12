<!DOCTYPE HTML PUBLIC >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
<title>member join</title>


</style>
</head>

<body>
<form action="member_save.php" method='post' name='form2'>

<table border=1 align="center" cellpadding=2 cellspacing=1 bgcolor=#FF9D9D>
<tr>

<tr><td><center>

<table border=1 cellspacing=3 cellpadding=2 width=450 bgcolor=#FFD0D0>
<tr> //이름
   <th width=70 height=20><img src="name.jpg" width="90" height="20"></th>
   <td width=300 height=20 align="left"><input type='text' name='name' size=10 maxlength=5>
<tr> //핸드폰 번호
    <th width=70 height=20><img src="phone_number.jpg" width="90" height="20"></th>
    <td width=300 height=20 align="left"><input type='text' name='phone' size=3 maxlength=30> <span class="style1">-</span>    <input type='text' name='phone2' size=5 maxlength=30> <span class="style1">-</span>    <input type='text' name='phone3' size=5 maxlength=30></td>
<tr>   //주소
    <th width=70 height=20><img src="address.jpg" width="90" height="20"></th>
	<td width=300 height=20 align="left"><input type='text' name='address' size=50 maxlength=50></td>
	</tr>
<tr>      //아이디
    <th width=70 height=20><img src="id.jpg" width="90" height="20"></th>
	<td width=300 height=20 align="left"><input type='text' name='id' size=50 maxlength=50></td>
	</tr>
<tr>       //비번 
    <th width=70 height=20><img src="password.jpg" width="90" height="20"></th>
	<td width=300 height=20 align="left"><input type='text' name='password' size=50 maxlength=50></td>
	</tr>
    <tr>      //이메일 
    <th width=70 height=20><img src="email.jpg" width="90" height="20"></th>
	<td width=300 height=20 align="left"><input type='text' name='email' size=50 maxlength=50></td>
	</tr>
    <tr>       //가입일  
    <th width=70 height=20><img src="date.jpg" width="90" height="20"></th>
	<td width=300 height=20 align="left"><input type='text' name='date' size=50 maxlength=50></td>
	</tr>
    <tr>       //나이 
    <th width=70 height=20><img src="age.jpg" width="90" height="20"></th>
	<td width=300 height=20 align="left"><input type='text' name='age' size=50 maxlength=50></td>
	</tr>
</table>
<input type="submit" value="join">
</center>
</td>

</table>

</form>
</body>
</html>
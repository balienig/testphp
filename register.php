<!DOCTYPE html>
<html lang="th">
<head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
<body>

<h2>ข้อมูลส่วนตัว</h2>
<form method="POST" action="result.php">
	<table>
		<tr>
			<td>ชื่อ :</td>
			<td>นามสกุล :</td>
		</tr>
		<tr>
			<td><input type="text" name="name" ></td>
			<td><input type="text" name="surname" ></td>
		</tr>
	</table>
  <br>
    หมายเลขประจำตัวประชาชน/หมายเลขหนังสือเดินทาง:<br>
  <input type="text" name="pass" ">
  <br>
  วันเกิด:<br>

  <input type="month" name="bday">
  <input type="submit">

  <br>
    เพศ:<br>

  <input type="radio" name="gender" value="male"> ชาย
  <input type="radio" name="gender" value="female"> หญิง  
 
  <br>
  ที่อยู่:<br>
  <textarea name="address" rows="5" cols="30">ป้อนสิ</textarea>
  <br>
      ประเทศ<br>
  <select name="con">
    <option value="ไทย">ไทย</option>
    <option value="ลาว">ลาว</option>
    <option value="เกาหลี">เกาหลี</option>
    <option value="ญี่ปุ่น">ญี่ปุ่น</option>
  </select>
  <br>
  จังหวัด:<br>
  <select name="เลือกจังหวัด" >
    <option value="ไทย">นครปฐม</option>
    <option value="ลาว">ลำปาง</option>
    <option value="เกาหลี">พะเยา</option>
    <option value="ญี่ปุ่น">พะโล้</option>
  </select>
  <br>
      อำเภอ:<br>
  <select name="เลือกจังหวัด">
    <option value="ไทย">สามพราน</option>
    <option value="ลาว">สี่พราน</option>
    <option value="เกาหลี">ห้าพราน</option>
    <option value="ญี่ปุ่น">หกพราน</option>
  </select>
  <br>
  รหัสไปรษณีย์:<br>
  <input type="text" name="ที่อยู่" >
  <br>
    หมายเลขโทรศัพท์:<br>
  <input type="text" name="เพศ" >
  <br><br>
  <h2>ข้อมูลเกี่ยวกับการวิ่ง</h2>
  <br>
  โรคประจำตัว:<br>
  <input type="text" name="ที่อยู่" >
  <br>
  อาหารที่แพ้:<br>
  <input type="text" name="ที่อยู่" >
  <br>
    ยาที่แพ้:<br>
  <input type="text" name="ที่อยู่" >
  <br>
  ขนาดเสื้อ:<br>
    <select name="เลือกขนาดเสื้อ">
    <option value="S">S</option>
    <option value="L">L</option>
    <option value="M">M</option>
    <option value="XL">XL</option>
    <option value="XXL">XXL</option>
  </select>
  <br>
  เหตุผลที่มาวิ่งเพื่อตุ๊ดตู่:<br>
  <textarea name="message" rows="10" cols="30"></textarea>
  <br>
   <br>
   
  <input type="submit" value="ส่ง">

  <input type="button" value="ยกเลิก">

</form> 

<p>
</body>
</html>

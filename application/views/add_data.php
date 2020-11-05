<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Insert</title>
    <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>css/style.css"> 
    <!--using FontAwesome-->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>
<body>
<center><h1 class="regh1">ข้อมูลการเดินทาง</h1></center>
    <form method="post" action="../Train_m/insert_Register">
    <center>
      <table>
        <tr>
            <td class="title"> ขบวน</td>
            <td class="title"> สถานี</td>
            <td class="title"> เวลาออก</td>
            <td class="title"> ถึง</td>
            <td class="title"> ออก</td>
            <td class="title"> สถานี</td>
            <td class="title" >ถึงเวลา</td>
            <td class="title"> หมายเหตุ</td>
        </tr>
        
        <tr>
            <td colspan = "1"><input name="n_id" type="text" size="8" placeholder="หมายเลขขบวน"/></td>
            <td colspan = "1"><input name="stations" type="text" size="10" placeholder="ชื่อสถานี"/></td>
            <td colspan = "1"><input name="time_out" type="text"  size="10" placeholder="เวลาที่ออก"/></td>
            <td colspan = "1"><input name="to" type="text" size="10" placeholder="เวลาที่ถึง"/></td>
            <td colspan = "1"><input name="out" type="text" size="10" placeholder="เวลาที่ออก"/></td>
            <td colspan = "1"><input name="station" type="text" size="10" placeholder="ชื่อสถานี"/></td>
            <td colspan = "1"><input name="to_time" type="text" size="10" placeholder="เวลาที่ถึง"/></td>
            <td colspan = "1"><input name="note" type="text" size="20" placeholder="หมายเหตุ"/></td>
            </table>
      <div class="reg_button">
        <a class="back" href="../Train_m/index">ย้อนกลับ</a>
        <input class="button" name="submit" type="submit" value="เพิ่มข้อมูล" />&nbsp;
</div>
    </form>
  </center>

</body>
</html>
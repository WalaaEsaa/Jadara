<meta charset="utf-8">
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>حقوقنا في جدارة</title>
<link href="css.css" rel="stylesheet" type="text/css" />
<style type="text/css">

</style>
</head>
<body>
<table width="780" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="border">
  <tr>
    <td valign="top"><table width="780" border="0" cellspacing="0" cellpadding="0">
      <tr>
        
        <td width="780" height="196" valign="top"><img src="images/11.jpg" width="780" height="196" alt="" /></td>
      </tr>
      <tr>
        <td height="29" colspan="3" align="center" style="background-image:url(images/index_04.gif);"><pre>
		<a href="home.html"> الرئسية    </a><strong>&raquo;</strong> <a href="dif.html"> ما هو جدارة؟    </a><strong>&raquo;</strong> <a href="ist.html">  الاستبيانات </a><strong>&raquo;</strong> <a href="com.php"> التعليقات   </a><strong>&raquo;</strong> <a href="how.html">  من نحن؟  </a><strong>    &raquo; </strong><a href="ts.html">   التسجيل في الموقع </a> </pre></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="top"><table width="780" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="159" valign="top" style="padding-bottom:12px;"><table width="159" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td><form action="" method="post" name="form1" id="form1">
			<table width="159" border="0" cellspacing="0" cellpadding="0" >
            <tr>
                  <td width="28" height="23" align="center" style="padding-top:105px;"></td>
                  <td width="131" class="text" align="center" style="padding-top:15px;">تسجيل الدخول<br></td>
                </tr>
                <tr>
                  <td height="25" colspan="2" class="text2" align="right"style="padding-top:15px; padding-right:4px;">اسم المستخدم </td>
                </tr>
                <tr>
                  <td colspan="2" style="padding-top:15px; padding-right:4px;"align="center"><input type="text" name="name" style="width:145px; height:19px;">
                  </td>
                </tr>
                <tr>
                  <td height="25" style="padding-top:15px; padding-right:4px;" colspan="2" class="text2" align="right">كلمة السر </td>
                </tr>
                <tr>
                  <td colspan="2" style="padding-top:15px; padding-right:4px;" align="center"><input type="password" name="pass" style="width:145px; height:19px;">
                  </td>
                </tr>
                <tr><td><br></td><td></td></tr>
                <tr>
                  <td colspan="2" style="padding-top:15px; padding-left:4px;" align="center">&nbsp;
                            <input type="submit" value="دخول" name="select3" style="width:45px; height:19px;">
                   <br><br>
				   تذكرني
                    <input type="checkbox" name="select4" style="width:45px; height:19px; ">
                    </td>
                </tr>
                
                
				</table></form></td>
          </tr>
          
        </table></td>
        <td width="621" valign="top" style="padding-bottom:12px;"><table  dir="rtl"width="98%" border="0" align="center" cellpadding="20" cellspacing="0">
          <tr>
<td valign="top" class="text1" style="padding-top:15px;padding-left:5px; text-align:right;">
<p><span class="text"> 	</span> 
			  </tr>
		<tr>
                  <td class="body1" colspan="4" align="left" >
	
<?php
//Start session
	session_start();
	
$server = 'localhost';
$username = 'root';
$pswd = '123';
$con = mysql_connect($server,$username, $pswd);
if (!$con)
{
  die('Failed to connect to server: '. mysql_error());
}

mysql_select_db("jadara",$con);

$name=$_POST['text1'];
$age=$_POST['text2'];
$q=$_POST['text3'];
$y=$_POST['text4'];
$mail=$_POST['text5'];
$pass=$_POST['text6'];
$c=$_POST['text7'];


		
	//Create query
	$qry="insert into register values('','$name','$age','$q','$y','$mail','$pass','$c')";
	$result=mysql_query($qry,$con);
	
	//Check whether the query was successful or not
	if($result) {
			echo("<h2>Add new user</h2>");
		}
		else echo "There was an error when inserting user.";
		?>
<a href="ts.html">الخلف</a>
			  
				  <br>
				
				</td>
                </tr>
                <br />
              </p>
              </td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="67" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="background-image:url(images/index_31.gif);">
      
      <tr align="center" valign="middle">
        <td height="37" colspan="8" class="text1"><div align="center"></div></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
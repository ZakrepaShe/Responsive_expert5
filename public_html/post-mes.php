<? 
// ----------------------------������������-------------------------- // 
 
$adminemail="tsepak92@gmail.com";  // e-mail ������ 
 
 
$date=date("d.m.y"); // �����.�����.��� 
 
$time=date("H:i"); // ����:������:������� 
 
$backurl="http://expert5.com.ua";  // �� ����� ��������� ��������� ����� �������� ������ 
 
//---------------------------------------------------------------------- // 
 
  
 
// ��������� ������ � ����� 
 
$name=$_POST['name']; 
 
$phone=$_POST['phone']; 
 
$mes=$_POST['mes']; 
 
  

 
 { 
 
 
$msg=" 
 
 
���: $name

�������: $phone
 
���������: $mes

 
 
"; 
 
  
 
 // ���������� ������ ������  
 
mail("$adminemail", "$date $time ����� ������", "$msg"); 
 
  
 
// ��������� � ���� ������ 
 
$f = fopen("message.txt", "a+"); 
 
fwrite($f," \n $date $time ��������� �� $name"); 
 
fwrite($f,"\n $msg "); 
 
fwrite($f,"\n ---------------"); 
 
fclose($f); 
 
  
 
// ������� ��������� ������������ 
 
print "<script language='Javascript'><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 6000); 
//--></script> 
 
$msg 
 
<p>��������� ����������! ���������, ������ �� ������ �������������� �� ������� ��������...</p>";  
exit; 
 
 } 
 
?>
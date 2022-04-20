<?php
$hostname="localhost";
$username="root";
$password="ptklj914118!";
$db_name ="sample_db";

$conn = mysqli_connect($hostname, $username, $password, $db_name);

if (!$conn) {
    die("연결 실패 : ".mysqli_connect_error());
} 

$sql = "select * from emp";

if ($result=mysqli_query($conn,$sql)) {
    echo "쿼리 성공\n";
    $data=mysqli_fetch_array($result);
    foreach($data as $value){
        echo "EMPNO = > ".$data['EMPNO']." ";
        echo "ENAME = > ".$data['ENAME']." ";
        echo "JOB = > ".$data['JOB']." ";
        echo "MGR = > ".$data['MGR']." ";
        echo "HIREDATE = > ".$data['HIREDATE']." ";
        echo "SAL = > ".$data['SAL']." ";
        echo "COMM = > ".$data['COMM']." ";
        echo "DPTNO = > ".$data['DPTNO']."\n";
    }
} else {
    echo ("오류 발생 : ".mysqli_error($conn));
}
 
mysqli_close($conn);

?>
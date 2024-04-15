<p>문제 1</p>
<!DOCTYPE html>
<html>
<body>

<?php
function sum($num) {
    $sum = 0;
    for ($i = 1; $i <= $num; $i++) {
        $sum += $i;
    }
    return $sum;
}
echo sum(30);
// 5050

?> 

</body>
</html>


<p>문제 2</p>

<!DOCTYPE html>
<html>
<body>

<?php


$n = (int)readline("10 이상 100 이하의 정수를 입력하세요: ");


if ($n < 10 || $n > 100) {
    echo "잘못된 입력입니다. 10 이상 100 이하의 정수를 입력하세요.";
    exit();
}


$data = [];
for ($i = 0; $i < $n; $i++) {
    $data[$i] = rand(10, 100); // 10 이상 100 이하의 랜덤 정수 생성
}

// 생성된 데이터 출력
echo "생성된 결과: " . implode(', ', $data) . "\n";

// 데이터 정렬
sort($data);

// 정렬된 데이터 출력
echo "정렬된 결과: " . implode(', ', $data) . "\n";


?> 

</body>
</html>

<p>문제 3</p>
<!DOCTYPE html>
<html>
<body>

<?php

function fibonacci($n) {
    $fib = [1, 1]; // 초기값 설정
    
    if ($n < 1) {
        return [];
    } elseif ($n == 1) {
        return [1];
    } elseif ($n == 2) {
        return $fib;
    }
    
    // 피보나치 수열 계산
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    
    return $fib;
}

// 사용자로부터 입력 받기
$n = (int)readline("정수를 입력하세요 (100 이하): ");

if ($n > 100 || $n < 1) {
    echo "잘못된 입력입니다. 1부터 100 사이의 정수를 입력하세요.";
    exit();
}

$fibonacci_sequence = fibonacci($n);

// 피보나치 수열 출력
echo "i\tfi\tfi+1\tfi+1/fi\n";
for ($i = 0; $i < $n - 1; $i++) { // 수정된 부분: 마지막 항은 출력하지 않음
    $fi = $fibonacci_sequence[$i];
    $fi_1 = $fibonacci_sequence[$i + 1];
    $fi_1_over_fi = number_format($fi_1 / $fi, 6);
    
    echo ($i + 1) . "\t$fi\t$fi_1\t$fi_1_over_fi\n";
}

?>

</body>
</html>


<p>문제 4</p>
<!DOCTYPE html>
<html>
<head>
    <title>도형 면적과 체적 계산기</title>
</head>
<body>
    <h1>도형 면적과 체적 계산기</h1>
    <h2>삼각형 면적</h2>
    <form method="post" action="">
        <label for="tri-base">밑변:</label>
        <input type="number" name="tri-base" id="tri-base" required>
        <br>
        <label for="tri-height">높이:</label>
        <input type="number" name="tri-height" id="tri-height" required>
        <br>
        <input type="submit" value="계산">
    </form>
    <?php
        if(isset($_POST['tri-base']) && isset($_POST['tri-height'])) {
            $base = $_POST['tri-base'];
            $height = $_POST['tri-height'];
            $area = $base * $height / 2;
            echo "<p>삼각형의 면적은 $area 입니다.</p>";
        }
    ?>


    <h2>직사각형 면적</h2>
    <form method="post" action="">
        <label for="rect-width">가로:</label>
        <input type="number" name="rect-width" id="rect-width" required>
        <br>
        <label for="rect-height">세로:</label>
        <input type="number" name="rect-height" id="rect-height" required>
        <br>
        <input type="submit" value="계산">
    </form>
    <?php
        if(isset($_POST['rect-width']) && isset($_POST['rect-height'])) {
            $width = $_POST['rect-width'];
            $height = $_POST['rect-height'];
            $area = $width * $height;
            echo "<p>직사각형의 면적은 $area 입니다.</p>";
        }
    ?>


    <h2>원 면적</h2>
    <form method="post" action="">
        <label for="cir-radius">반지름:</label>
        <input type="number" name="cir-radius" id="cir-radius" required>
        <br>
        <input type="submit" value="계산">
    </form>
    <?php
        if(isset($_POST['cir-radius'])) {
            $radius = $_POST['cir-radius'];
            $area = pi() * pow($radius, 2);
            echo "<p>원의 면적은 $area 입니다.</p>";
        }
    ?>


    <h2>직육면체 체적</h2>
    <form method="post" action="">
        <label for="rectp-width">가로:</label>
        <input type="number" name="rectp-width" id="rectp-width" required>
        <br>
        <label for="rectp-length">세로:</label>
        <input type="number" name="rectp-length" id="rectp-length" required>
        <br>
        <label for="rectp-height">높이:</label>
        <input type="number" name="rectp-height" id="rectp-height" required>
        <br>
        <input type="submit" value="계산">
    </form>
    <?php
    if(isset($_POST['rectp-width']) && isset($_POST['rectp-length']) && isset($_POST['rectp-height'])) {
        $width = $_POST['rectp-width'];
        $length = $_POST['rectp-length'];
        $height = $_POST['rectp-height'];
        $volume = $width * $length * $height;
        echo "<p>직육면체의 체적은 $volume 입니다.</p>";
    }
?>


<h2>원통 체적</h2>
<form method="post" action="">
    <label for="cyl-radius">반지름:</label>
    <input type="number" name="cyl-radius" id="cyl-radius" required>
    <br>
    <label for="cyl-height">높이:</label>
    <input type="number" name="cyl-height" id="cyl-height" required>
    <br>
    <input type="submit" value="계산">
</form>
<?php
    if(isset($_POST['cyl-radius']) && isset($_POST['cyl-height'])) {
        $radius = $_POST['cyl-radius'];
        $height = $_POST['cyl-height'];
        $volume = pi() * pow($radius, 2) * $height;
        echo "<p>원통의 체적은 $volume 입니다.</p>";
    }
?>


<h2>구 체적</h2>
<form method="post" action="">
    <label for="sph-radius">반지름:</label>
    <input type="number" name="sph-radius" id="sph-radius" required>
    <br>
    <input type="submit" value="계산">
</form>
<?php
    if(isset($_POST['sph-radius'])) {
        $radius = $_POST['sph-radius'];
        $volume = 4/3 * pi() * pow($radius, 3);
        echo "<p>구의 체적은 $volume 입니다.</p>";
    }
?>
</body>
</html>

<p>문제 5</p>
<!DOCTYPE html>
<html>
<head>
    <title>달력</title>
</head>
<body>
<form action="calendar.php" method="post">
년(年)을 입력하세요 : <input type="number" name="y" /><br />
월(月)을 입력하세요 : <input type="number" name="m" /><br />
<input type="submit" value="확인" />
</form>
<?PHP
if(isset($_POST['y']) && strlen($_POST['y']) > 0 && isset($_POST['m']) && strlen($_POST['m']) > 0) {
    $m = $_POST["m"];
    $y = $_POST["y"];
    if(checkdate($m,1,$y)) {
        $firstweekday = getDate(mktime(0,0,0,$m,1,$y)); //해당 월 1일의 요일
        $firstweekday = $firstweekday['wday'];
        $lastday = date("t", mktime(0,0,0,$m,1,$y)); //t = 주어진 월의 총 일 수(ex : 2014년 1월 = "31" 일)
        $fc = ceil(($firstweekday+$lastday)/7); //총 주의 수
        $count = $fc*7; //for 문 count
        $j=1;
        echo "<table border='1' width=\"500\" bordercolor=\"#50bcdf\">";
        echo "<tr bgcolor=\"#50bcdf\" align=\"center\"><td colspan=\"7\">". $y."년 ".$m."월 달력</td></tr>";
        echo "<tr align=\"right\" bgcolor=\"#FF99FF\"><td>일</td><td>월</td><td>화</td><td>수</td><td>목</td><td>금</td><td>토</td></tr>";
        for($i=1; $i<=$count; $i++){
            if($i%7==1){
                echo "<tr>";
            }
            echo "<td>";
            if($i>$firstweekday && $j<=$lastday){
                echo $j;
                $j++;
            }
            else {
                echo "&nbsp;";
            }
            echo "</td>";
            if($i%7==0){
                echo "</tr>";
            }
        }
        echo "</table>";
        echo "<br/>";        
    }
}
else {  
    echo "<script>alert(\"올바른 날짜형식을 입력해 주세요\");</script>";  
}
?>
</body>
</html>


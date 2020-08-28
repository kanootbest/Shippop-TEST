<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST 2</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <style>
        .center {
            margin: auto;
            width: 50%;
            border: 3px solid #73AD21;
            padding: 10px;
        }

        .test4 {
            width: 240px;
            height: 200px;
            margin-right: 10px;
            border: 1px solid #000000;
        }
    </style>
</head>

<body>
    <div class="contaniner center">
        <div class="row">
            <!-- test 1.1 -->
            <div class="col-lg-6">
                <h5>TEST 1.1</h5>
                <?php
                $num = 5;
                $round = $num;

                for ($x = 0; $x < $round; $x++) {
                    for ($y = 0; $y <= $round; $y++) {
                        if ($y >= $num) {
                            echo "O";
                        } else {
                            echo "&nbsp;&nbsp;";
                        }
                    }
                    $num = $num - 1;
                    echo '<br>';
                }
                echo 'hello world';
                ?>
            </div>
            <!-- test 1.2 -->
            <div class="col-lg-6" style="margin-bottom: 2%;">
                <h5>TEST 1.2</h5>
                <?php
                $num = 5;
                $min = $num;
                $max = $num;
                $round1 = $num;
                $round2 = $num * 2;
                for ($x = 0; $x < $round1; $x++) {
                    for ($y = 0; $y <= $round2; $y++) {
                        if ($y >= $min && $y <= $max) {
                            echo "O";
                        } else {
                            echo "&nbsp;&nbsp;";
                        }
                    }
                    $max = $max + 1;
                    $min = $min - 1;
                    echo '<br>';
                }
                echo 'hello world';
                ?>
            </div>
            <!-- test 2.1 -->
            <div class="col-lg-6">
                <h5>TEST 2.1</h5>

                <?php
                echo 'คำตอบ = ';
                $salary = 10000;
                if ($salary < 10000) {
                    $salary = $salary + 200;
                } elseif ($salary < 11000) {
                    $salary += 200;
                } elseif ($salary < 12000) {
                    $salary += 300;
                }
                echo $salary;
                ?>
            </div>
            <!-- test 2.2 -->
            <div class="col-lg-6" style="margin-bottom: 2%;">
                <h5>TEST 2.2</h5>
                <?php
                echo 'คำตอบ 2.2.1 = ';
                $bath = 100;
                echo ($bath == 300 ? "300" : "200") . "<br>";

                // --------------------------
                echo 'คำตอบ 2.2.2 = ';
                $score = 9;
                $age = 10;
                echo 'Your Score is : ' . $score > 10 ? ($age > 10 ? "Average" : "Exceptional") : ($age > 10 ? "Horrible" : "Average");
                ?>
            </div>
            <!-- test 3.1 -->
            <div class="col-lg-6">
                <h5>TEST 3.1</h5>
                <?php
                $data = array(10000 => 15000, 15000 => 20000, "salary" => 30000);
                foreach ($data as $value) {
                    $salary = $value;
                    if ($salary < 10000) {
                        $salary = $salary + 200;
                    } elseif ($salary < 11000) {
                        $salary += 200;
                    } elseif ($salary < 12000) {
                        $salary += 300;
                    }
                    echo 'คำตอบ = ' . $salary . '<br>';
                }
                ?>
            </div>
            <!-- test 3.2 -->
            <div class="col-lg-6" style="margin-bottom: 2%;">
                <h5>TEST 3.2</h5>
                <?php
                // 3.2.1
                $marks = array(
                    "mohammad" => array(
                        "physics" => 35,
                        "math" => 30,
                        "chemistry" => 39
                    ),
                    "qadir" => array(
                        "physics" => 30,
                        "math" => 32,
                        "chemistry" => 29
                    ),
                    "zara" => array(
                        "physics" => 31,
                        "math" => 22,
                        "chemistry" => 39
                    )
                );
                echo 'คำตอบ 3.2.1 = ' . $marks["mohammad"]["physics"] . '<br>';


                // 3.2.2
                echo 'คำตอบ 3.2.1 = ';
                foreach ($marks as $student) {
                    foreach ($student as $score) {
                        echo $score . " ";
                    }
                }
                ?>
            </div>
            <!-- test 4 -->
            <div class="col-lg-12">
                <h5>TEST 4</h5>
            </div>
            <div class="test4"> test</div>
            <div class="test4"> test</div>
            <div class="test4">test</div>
            <!-- test 5 - 17 -->
            <div class="col-lg-12">
                <h5>TEST 5</h5>
                <h5>TEST 5.1</h5>
                <img src="{{url('/images/er_master.png')}}" alt="Image" style="width: 100%; height: auto;">
                <h5>TEST 5.2</h5>
                <p>INSERT INTO branchs (name) VALUES ( เชียงใหม่);</p>
                <p>INSERT INTO branchs (name) VALUES ( เชียงราย);</p>
                <p>INSERT INTO branchs (name) VALUES ( ภูเก็ต);</p>
                <h5>TEST 5.3</h5>
                <p>DELETE FROM departments WHERE name = 'sale';</p>
                <h5>TEST 5.4</h5>
                <p>UPDATE branchs SET name = 'นราธิวาส' WHERE name = 'ปัตตานี';</p>
                <h5>TEST 5.5</h5>
                <p>SELECT * FROM employees</p>
                <h5>TEST 5.6</h5>
                <p>SELECT * FROM employees</p>
                <p>LEFT JOIN branchs ON branchs.id = employees.id_bran</p>
                <p>WHERE branchs.name == 'ระยอง' && branchs.name == 'กรุงเทพ';</p>
                <h5>TEST 5.7</h5>
                <p>SELECT * FROM employees</p>
                <p>LEFT JOIN branchs ON branchs.id = employees.id_bran</p>
                <p>LEFT JOIN departments ON departments.id = employees.id_dep</p>
                <p>WHERE branchs.name == 'เลย' && departments.name == 'programmer';</p>
                <h5>TEST 5.8</h5>
                <p>SELECT * FROM employees</p>
                <p>LEFT JOIN branchs ON branchs.id = employees.id_bran</p>
                <p>LEFT JOIN departments ON departments.id = employees.id_dep;</p>
                <h5>TEST 6</h5>
                <p>เป็นงานที่มีความน่าสนใจ</p>
                <h5>TEST 7</h5>
                <P>คนหาใน INTERNET หรือ ถามคนรอบตัว</P>
                <h5>TEST 8</h5>
                <p>model เป็นส่วนที่ใช้เชื่อมต่อกับcontroller view จะทำหน้าที่เป็น ui แสดงผล Controller ทำหน้าที่เป็นส่วนที่ใช้ในการประมวลผลหรือโต้ตอบกับ model</p>
                <h5>TEST 9</h5>
                <P>ใช้เพื่อนเก็บข้อมูลเช่น project ต่างๆ ให้สามารถทำงานเป็นทีมได้ง่ายมากขึ้น</P>
                <h5>TEST 10</h5>
                <p>คล้าย Virtual Machine</p>
                <h5>TEST 11</h5>
                <p>ช่วยดาวน์โหลด Package ของ php ให้สามารถทำงานได้ง่ายขึ้น</p>
                <h5>TEST 12</h5>
                <p>คล้าย CSS แต่มีฟังก์ชั่นเพิ่มขึ้นมาช่วยให้เขียนได้ง่ายขึ้น</p>
                <h5>TEST 13</h5>
                <p>ถ้าเป็นทางสาย DATA BASE ที่ผมเรียน รู้สึกจะมีคนเดียวครับ</p>
                <h5>TEST 14</h5>
                <p>ไม่เคยครับ</p>
                <h5>TEST 15</h5>
                <p>เคยใช้งาน LARAVEL เพราะเคยใช้ช่วงฝึกงานครับ</p>
                <h5>TEST 16</h5>
                <p>ใช้การวัดความเร็วเว็บไซต์ ไม่เคยใช้ครับ</p>
                <h5>TEST 17</h5>
                <p>การปรับแต่งตัวเว็บไซต์และเนื้อหาภายในเว็บไซต์ การเลือกใช้คำที่สามารถใช้ keyword search ได้ง่าย</p>
            </div>
        </div>
    </div>
</body>

</html>
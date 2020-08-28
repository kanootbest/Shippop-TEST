<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TEST 1</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <style>
        .center {
            margin: auto;
            width: 50%;
            border: 3px solid #73AD21;
            padding: 10px;
        }
    </style>

    <script>
        $(document).ready(function() {
            $("#search").on('click', function() {
                if ($("#type").val() == '1') {
                    var list = $("#list").val();
                    list = list.split(",");
                    var fine = $("#fine").val();
                    var text = 'List:' + list + '<br>Search:' + fine + '<br>Result:::<br>';
                    var i;
                    var round = 1;
                    for (i = 0; i < list.length; i++) {
                        if (list[i] == fine) {
                            text += 'Round : ' + round + ' ===> ' + fine + ' = ' + list[i] + ' found !!';
                            break;
                        } else {
                            text += 'Round : ' + round + ' ===> ' + fine + ' != ' + list[i] + '<br>';
                        }
                        round++;
                    }

                } else if ($("#type").val() == '2') {
                    var list = $("#list").val();
                    var list = (list.split(",")).sort();
                    var fine = $("#fine").val();
                    var first = 0;
                    var last = list.length - 1;
                    var mid = Math.ceil((first + last) / 2);

                    var text = 'List:' + list + '<br>Search:' + fine + '<br>Result:::<br>';
                    var round = 1;
                    // for (i = 0; i < list.length; i++) {
                    //     if (list[i] == fine) {
                    //         text += 'Round : ' + round + ' ===> ' + fine + ' = ' + list[i] + ' found !!';
                    //         break;
                    //     } else {
                    //         text += 'Round : ' + round + ' ===> ' + fine + ' != ' + list[i] + '<br>';
                    //     }
                    //     round++;
                    // }

                    while (first <= last) {
                        if (list[mid] < fine) {
                            text += 'Round : ' + round + ' ===> ' + fine + ' != ' + list[mid] + '<br>';
                            first = mid + 1;
                        } else if (list[mid] == fine) {
                            text += 'Round : ' + round + ' ===> ' + fine + ' = ' + list[mid] + ' found !!';
                            break;
                        } else {
                            text += 'Round : ' + round + ' ===> ' + fine + ' != ' + list[mid] + '<br>';
                            last = mid - 1;
                        }

                        mid = Math.ceil((first + last) / 2);
                        round++;
                    }
                } else if ($("#type").val() == '3') {
                    var text = 'ไม่ทราบครับ';
                }
                document.getElementById("result").innerHTML = text;
            });
        });
    </script>
</head>


<body>
    <div class="container center">
        <div class="row" style="margin-bottom: 3%;">
            <div class="col-lg-1">List</div>
            <div class="col-lg-9">
                <input type="text" name="list" id="list">
            </div>
            <div class="col-log-2">
                <form action="/test2">
                    <input type="submit" value="TEST 2" />
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-1">ค้นหา</div>
            <div class="col-lg-9">
                <input type="text" name="fine" id="fine">
                <button id="search">ค้นหา</button>
            </div>
        </div>
        <div class="col-lg" style="text-align: center;">
            ประเภทการค้นหา.
        </div>
        <div class="col-lg" style="text-align: center; margin-bottom:3%">
            <select name="type" id="type">
                <option value="1">Linear Search</option>
                <option value="2">Binary Search</option>
                <option value="3">Bubble Search</option>
            </select>
        </div>
        </form>
        <div class="col-lg" style="text-align: center;">
            ผลลัพธ์
            <br>
            <p id="result"></p>
        </div>
    </div>
</body>

</html>
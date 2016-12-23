<!DOCTYPE html>
<html>
<head>
    <title>Caculator!</title>
    <style type="text/css">
        .caculator { width: 200px; overflow: auto; border-left: 5px solid black; border-bottom: 5px solid black;border-top: 5px solid silver; border-right: 5px solid silver; padding: 5px; margin: auto; }
        .caculator input[type="button"] { font-family: "Courier New", Courier, monospace; width: 40px; height: 25px; margin-right: 5px; margin-top: 5px; border-radius: 5px; border: none; }
        .caculator input[type="textfield"] { width: 180px; height: 35px; text-align: center;}
        .caculator input[type="text"] { width: 50px; height: 20px; margin: 4px 3px  ; text-align: center; }
        .caculator input[type="submit"] { font-family: "Courier New", Courier, monospace; width: 40px; height: 25px; margin-right: 5px; margin-top: 5px; border-radius: 5px; border: none; }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script type="text/javascript">
        function Add_Value() {
            $('.abc').click(function() {
                if($('.xyz').attr('name') == "operator") {
                    if (this.value == "+" || this.value == "-" || this.value == "*" || this.value == "/") {
                    a = $('.xyz').val();
                    a += this.value;
                    $('.xyz').val(a);
                    }
                }
                else {
                    if (this.value != "+" && this.value != "-" && this.value != "*" && this.value != "/") {
                    a = $('.xyz').val();
                    a += this.value;
                    $('.xyz').val(a);
                    }

                }
            });
        }

        $(document).ready(function() {
            $('input:text').click(function() {
                $('input:text').each(function () {
                    $(this).removeClass('xyz');
                });
                $(this).addClass('xyz');
            });
            Add_Value();
        });
    </script>
</head>
<body>
    <?php
        function Tinh() {
        if(isset($_POST['answer'])) {
            $x = $_POST['so1'];
            $op = $_POST['operator'];
            $y = $_POST['so2'];
            $result = '';
            switch ($op) {
                case "+": 
                    $result = $x + $y;
                    echo $result;
                    break;
                case "-": 
                    $result = $x - $y;
                    echo $result;
                    break;
                case "*": 
                    $result = $x * $y;
                    echo $result;
                    break;
                case "/": 
                    $result = $x / $y;
                    echo $result;
                    break;
            }
        }
        }
    ?>
    <form action="" method="post">
        <div class="caculator">
            <input type="textfield" name="txtInput" id="text_field" value="<?php Tinh(); ?>">
            <input type="text" name="so1" value="" id="so1" placeholder="Num1">
            <input type="text" name="operator" value="" id="operator" placeholder="+ - * /">
            <input type="text" name="so2" value="" id="so2" placeholder="Num2">
            <input type="button" name="1" value="1" id="one" class="abc">
            <input type="button" name="2" value="2" id="two" class="abc">
            <input type="button" name="3" value="3" id="three" class="abc">
            <input type="button" name="+" value="+" id="add" class="abc">
            <input type="button" name="4" value="4" id="four" class="abc">
            <input type="button" name="5" value="5" id="five" class="abc">
            <input type="button" name="6" value="6" id="six" class="abc">
            <input type="button" name="-" value="-" id="sub" class="abc">
            <input type="button" name="7" value="7" id="seven" class="abc">
            <input type="button" name="8" value="8" id="eight" class="abc">
            <input type="button" name="9" value="9" id="nine" class="abc">
            <input type="button" name="*" value="*" id="multi" class="abc">
            <input type="button" name="c" value="C" id="clear">
            <input type="button" name="0" value="0" id="zero" class="abc">
            <input type="submit" name="answer" value="=" id="answer">
            <input type="button" name="/" value="/" id="divi" class="abc">
        </div>
    </form>
</body>
</html>

<!DOCTYPE html>
<!--
I followed a tutorial online because I am not an IT major and have no idea what I'm doing. 
https://www.youtube.com/watch?v=BuZtAqk5LIY&feature=youtu.be
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculator App</title>
        <link rel='stylesheet'  href='css/calc_style.css'>
    </head>
    <body>
        <form class='calculator' name='calc'>
            <input class='value' type='text' name='txt' readonly="">
            <span class='num clear' onclick="document.calc.txt.value =''">c</span>
            <span class='num' onclick="document.calc.txt.value +='/'">/</span>
            <span class='num' onclick="document.calc.txt.value +='*'">*</span>
            <span class='num' onclick="document.calc.txt.value +='7'">7</span>
            <span class='num' onclick="document.calc.txt.value +='8'">8</span>
            <span class='num' onclick="document.calc.txt.value +='9'">9</span>
            <span class='num' onclick="document.calc.txt.value +='-'">-</span>
            <span class='num' onclick="document.calc.txt.value +='4'">4</span>
            <span class='num' onclick="document.calc.txt.value +='5'">5</span>
            <span class='num' onclick="document.calc.txt.value +='6'">6</span>
            <span class='num plus' onclick="document.calc.txt.value +='+'">+</span>
            <span class='num' onclick="document.calc.txt.value +='3'">3</span>
            <span class='num' onclick="document.calc.txt.value +='2'">2</span>
            <span class='num' onclick="document.calc.txt.value +='1'">1</span>
            <span class='num' onclick="document.calc.txt.value +='0'">0</span>
            <span class='num' onclick="document.calc.txt.value +='^'">^</span>
            <span class='num' onclick="document.calc.txt.value +='.'">.</span>
            <span class='num equal' onclick="document.calc.txt.value = eval(calc.txt.value)">=</span>
        </form>
    </body>
</html>

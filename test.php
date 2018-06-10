<!DOCTYPE html>
<html lang="ru-RU">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

<title>Тест</title>

<style>
body{
	font-family:verdana;
	color:#444;
}
#option1,#option2,#option3,#option4{
	display:none;
	margin-bottom: 10px;
}
.oganesyan{
    text-decoration: none;
    font-size: 20px;
    margin-right: 20px;
    color: #fff;
    background: #3C8FB7;
    padding: 4px 8px;
	border: 0;
	cursor: pointer;
}
</style>
<script type="text/javascript">

	//Массив вопросов и ответа
	var data_array = [
	  ["С какой операции начинается технологический процесс обработки детали типа 'Вал'?","шлифовальная","токарная","фрезерно-центровальная","фрезерная",3],
	  ["На какие два вида разделяется объёмная штамповка","мокрая, сухая","горячая, холодная","твёрдая, жидкая","горячая, мокрая, твёрдая",2],
	  ["Какой вид резьбы нарезали в токарной операции?:","метрическая цилиндрическая","трубная коническая","трапецеидальная","круглая",1],
	  ["Что является основным соединяющим элементом в резьбовом соединении?","Шпонка","Вал","Резьба","Паз",3],
	  ["Перевод слова: Tree","Три","Собака","Дерево","Дом",3],
	  ["Перевод слова: Wall","Стена","Дом","Башня","Война",1],
	];

	var plus = 0;
	var time = 0;
	var cur_answer = 0;
	var count_answer = data_array.length;
	
	function sec() {
		time++;	
		document.getElementById('time').innerHTML='Затрачено времени: ' + time + ' сек';
	}
	
	function check(num){

		if(num == 0){ 
		
			document.getElementById('option1').style.display='block';
			document.getElementById('option2').style.display='block';
			document.getElementById('option3').style.display='block';
			document.getElementById('option4').style.display='block';
			document.getElementById('question').style.display='block';

			document.getElementById('option1').innerHTML=data_array[cur_answer][1];
			document.getElementById('option2').innerHTML=data_array[cur_answer][2];
			document.getElementById('option3').innerHTML=data_array[cur_answer][3];
			document.getElementById('option4').innerHTML=data_array[cur_answer][4];
			document.getElementById('question').innerHTML=data_array[cur_answer][0];
			
			document.getElementById('start').style.display='none';
			document.getElementById('end').style.display='inline';
			
			var intervalID = setInterval(sec, 1000);
			
		}else{
            
			if( num ==  data_array[cur_answer][5]){
				plus++;
				//document.getElementById('result').innerHTML='Верно!';
			}else{
				//document.getElementById('result').innerHTML="Неверно! Правильный ответ: " + data_array[cur_answer][data_array[cur_answer][5]];
			}
				
			cur_answer++;
			if(cur_answer < count_answer){
			
				document.getElementById('option1').innerHTML=data_array[cur_answer][1];
				document.getElementById('option2').innerHTML=data_array[cur_answer][2];
				document.getElementById('option3').innerHTML=data_array[cur_answer][3];
				document.getElementById('option4').innerHTML=data_array[cur_answer][4];
				document.getElementById('question').innerHTML=data_array[cur_answer][0];
				
			}else{
				
				document.getElementById('time').id = 'stop';
				document.getElementById('option1').style.display='none';
				document.getElementById('option2').style.display='none';
				document.getElementById('option3').style.display='none';
				document.getElementById('option4').style.display='none';
				document.getElementById('question').style.display='none';
				document.getElementById('end').style.display='inline';
				
				var percent =  Math.round(plus/count_answer*100);				
				var res = 'Плохо!';
				if(percent>70) res = 'Хорошо!';
				if(percent==100) res = 'Отлично!';
				
				document.getElementById('result').innerHTML='Правильных ответов: ' + plus + ' из ' + count_answer + ' (' + percent + '%)<br>' + res;
			}
		}
	}
</script>
</head>
<body>
<div class="container">
    <?php include('navbar.php'); ?>
        <center>			
            <p style="font-size: 38px;font-weight: bold;padding-top: 2px;" id="time">Затрачено времени: 0 сек</p>
            <p style="font-size: 38px;font-weight: bold;padding-top: 2px;" id="result"></p>
                        
            <p style="font-size: 38px;font-weight: bold;padding-top: 2px;" id="question"></p>
            
            <button onclick="check(1)" class="btn btn-secondary" id="option1"></button>
            
            <button onclick="check(2)" class="btn btn-secondary" id="option2"></button>
            
            <button onclick="check(3)" class="btn btn-secondary" id="option3"></button>
            
            <button onclick="check(4)" class="btn btn-secondary" id="option4"></button>
        </center><br>
        <center>
            <button id="start" class="oganesyan" onclick="check(0)">Приступить к тесту</button>
            <script type="text/javascript"> var curent_url = document.URL; document.write("<a id='end' style='display: none;' class='oganesyan' href='" + curent_url + "'>Начать сначала</a>"); </script>	
        </center><br><br>
        <div class="row">
            <div class="col">
                <?php include('footer.php'); ?>
            </div>
        </div>
    </div>

    <?php include('scripts.php'); ?>
</body>
</html>
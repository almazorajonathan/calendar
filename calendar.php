<html>
<head>
	<title>CALENDAR</title>
</head>
<body>

Months:
<select id="month">
	<option value="jan">January</option>
	<option value="feb">February</option>
	<option value="mar">March</option>
	<option value="apr">April</option>
	<option value="may">May</option>
	<option value="jun">June</option>
	<option value="jul">July</option>
	<option value="aug">August</option>
	<option value="sep">September</option>
	<option value="oct">October</option>
	<option value="nov">November</option>
	<option value="dec">December</option>
</select>

Days:
<select id="day">
	<?php 
	  	  for($day = 1; $day <= 31; $day++) {
	  		echo "<option value='<?$day?>'>".$day."</option>";
	  	  }
	?>
</select>

<select id="year">
	<?php for ($year = 1990; $year <= 2014; $year++){?>
		<option value="<?= $year ?>"><?= $year ?></option>
	<?php }?>
</select>
<script type="text/javascript" src="jquery.1.10.2.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#year').on('change', function() {
		var year = $('#year').val();
		var month = $('#month').val();
			$.ajax({
				url: 'day.php',
				dataType: 'JSON',
				data:{year: year, month: month},
				method: 'GET',
				success: function(response) {
				var days = response.days;
				var str = '';
					for (i = 1; i <= days; i++) {
						str += '<option value="' + i +'">';
						str += i;
						str += '</option>';
					}
				$('#day').html(str);
				}
		});
	});
	$('#month').on('change', function() {
		var year = $('#year').val();
		var month = $('#month').val();
			$.ajax({
				url: 'day.php',
				dataType: 'JSON',
				data:{year: year, month: month},
				method: 'GET',
				success: function(response) {
				var days = response.days;
				var str = '';
					for (i = 1; i <= days; i++) {
						str += '<option value="' + i +'">';
						str += i;
						str += '</option>';
					}
				$('#day').html(str);
				}
		});
	});
	
});
</script>
</body>
</html>
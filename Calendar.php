<html>
  <head>
		<title>Simple Calendar</title>
	</head>
</html>

<?php
	$date = time ();

$day = date('d', $date);
$month = date('m', $date);
$year = date('y', $date);


$first_day = mktime(0,0,0,$month. 1, $year);


$title = date('F', $first_day);

$day_of_week = date(16, $first_day) ;

switch($day_of_week){ 
case "Sun": $blank = 0; break; 
case "Mon": $blank = 1; break; 
case "Tue": $blank = 2; break; 
case "Wed": $blank = 3; break; 
case "Thu": $blank = 4; break; 
case "Fri": $blank = 5; break; 
case "Sat": $blank = 6; break; 
}


$days_in_month = cal_days_in_month(0, $month, $year);

echo "<table border=6 width=394>";
echo "<tr><th colspan=60> $title $year </th></tr>";
echo "<tr><td width=62>Sun.</td><td width=62>Mon.</td><td width=62>Tues.</td><td width=62>Wed.</td><td width=62>Thurs.</td><td width=62>Fri.</td><td width=62>Sat.</td>";


$day_count = 1;

echo "<tr>";


while ( $blank > 0) 
{
	echo "<td></td>";
	$blank = $blank-1;
	$day_count++;	
}

$day_num = 1;

while ($day_num <= $days_in_month) 
{
	echo "<td> $day_num </td>";
	$day_num++;
	$day_count++;
	

		if ($day_count > 7) //This will make a new line on the calendar so only 7 days in a week
		{
			echo "</tr><tr>";
			$day_count = 1;
		} 
}

while ( $day_count >1 && $day_count <=7 )
{
echo "<td> </td>";

$day_count++;

}
echo "</td></table>";

?>

<?php

	if (isset($_POST['submit_calc']))
	{


		include_once 'connect.php';
		$total_money = intval(mysqli_real_escape_string($conn,$_POST['total_earnings']));
		$total_years = intval(mysqli_real_escape_string($conn,$_POST['years_of_work']));
		$type = mysqli_real_escape_string($conn,$_POST['type_pension']);
		$foreas = mysqli_real_escape_string($conn,$_POST['foreas']);

		$year_earnings = $total_money / $total_years;
		$monthly_pension = $year_earnings / 12;
		if ($foreas == 'etam')// an o asfalistikos foreas einai to etam h syntaksh tha einai mikroteri
		{
			$monthly_pension = $monthly_pension * 0.8;
		}
		if ($type == 'regular')
		{
			$monthly_pension = $monthly_pension * 0.9;
		}
		elseif ($type == 'amea')
		{
			$monthly_pension = $monthly_pension * 2;
		}
		elseif ($type == 'death_young')
		{
			$monthly_pension = $monthly_pension * 1.5;
		}
		elseif ($type == 'death_old')
		{
			$monthly_pension = $monthly_pension * 0.5;
		}
		else
		{
			header("Location: benefit_calc.php?unknown_error");
			exit();
		}
		$monthly_pension = round($monthly_pension);
		$url = "../benefit_calc.php?pension=".$monthly_pension ;
		header("Location: $url");
		exit();

	}

	else if( isset($_POST['submit_mon_calc']))
	{
		include_once 'connect.php';
		$years = intval(mysqli_real_escape_string($conn,$_POST['years_of_work']));
		$degree = mysqli_real_escape_string($conn,$_POST['vathmida']);


		if($degree == 'first_degree')
		{
			$base =500;
		}
		else if ($degree == 'second_degree')
		{
			$base = 700;
		}
		else if ($degree == 'third_degree')
		{
			$base = 900;
		}
		$total = ($base + ($years	/4)*100);
		$total = round($total);
		$url = "../mon_calc.php?salary=".$total ;
		header("Location: $url");
		exit();
	}
	else
	{
		header("Location: ../benefit_calc.php?not_set");
		exit();
	}


?>

<?php 
	
	require "Sequencia.php";

	$sequencia = new Sequencia(1,100);

	$sequencia->multiplo(3, "Three");
	$sequencia->multiplo(5, "Five");

	$multiplo = 3*5;
	$sequencia->multiplo($multiplo, 'ThreeAndFive');

	$sequencia->printArray();
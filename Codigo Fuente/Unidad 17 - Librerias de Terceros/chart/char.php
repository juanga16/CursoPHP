<?php
    // https://www.koolphp.net/
    // Path a la carpeta donde se encuentran los controles
	$koolControlsFolder = "KoolControls";
 
	require "$koolControlsFolder./KoolChart/koolchart.php";
 
    // Instancio el grafico
	$chart = new KoolChart("chart");
	$chart->scriptFolder=$koolControlsFolder."/KoolChart";	
	$chart->Width = 900;
	$chart->Height = 900;
	$chart->Title->Text = "Estadisticas de navegadores. Marzo de 2019";
 
	$series = new PieSeries("Navegador");	
	$series->LabelsAppearance->DataFormatString="{0}%";
 
    // Instancio un nuevo item y lo agrego a la serie.
    // Primero va el porcentaje y luego el nombre.
	$item = new PieItem(45.59, "Chrome");
	$item->BackgroundColor = "#3185FC";
	$item->Exploded = true;
	$series->AddItem($item);
 
	$item = new PieItem(30.86, "Safari");
    $item->BackgroundColor = "#F9DC5C";
    $item->Exploded = true;
	$series->AddItem($item);
 
	$item = new PieItem(13.89, "Firefox");
    $item->BackgroundColor = "#F7567C";
    $item->Exploded = true;
	$series->AddItem($item);
 
	$item = new PieItem(6.45, "Internet Explorer");	
    $item->BackgroundColor = "#395E66";
    $item->Exploded = true;
    $series->AddItem($item);
    
    $item = new PieItem(3.2, "Edge");	
    $item->BackgroundColor = "#6F686D";
    $item->Exploded = true;
	$series->AddItem($item);
 
	$chart->PlotArea->AddSeries($series); 
?>

<?php echo $chart->Render();?>
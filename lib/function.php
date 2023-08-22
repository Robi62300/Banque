<?php

function csv_to_array( &$donnees, $filename = '', $delimiter = '')
{
	if (!file_exists($filename) || !is_readable($filename))
		return FALSE;

	$header = NULL;
	$donnees = array();
	if (($handle = fopen($filename, 'r')) !== FALSE) {
		while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE) {
			if (!$header)
				$header = $row;
			else
				$donnees[] = array_combine($header, $row);
		}
		fclose($handle);
	}
}

function arrayToCsv(&$donnees, $filename = '', $delimiter = '',  $header = array())
{

	$fp = fopen($filename, "w");
	fputcsv($fp, $header, $delimiter);
	// fputcsv($fp, $header, $delimiter, "\t");
	foreach ($donnees as $row) {
		$row = (array)$row;
		fputcsv($fp, $row, $delimiter);
		// fputcsv($fp, $row, $delimiter, "\t");
	}
	fclose($fp);
}
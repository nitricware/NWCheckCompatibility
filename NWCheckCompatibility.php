<?php
	/*
		   /\
		  /  \   NitricWare Studios
		 / /\ \  Linz/Danube
		/\/\/\/
		\/

		NitricWare presents
		NWCheckCompatibility 1.0
		Version 1.0

		Development started
		8. May 2015

		Github release
		8. May 2015

		This function allows you
		to check a script for
		compatibility with the
		PHP Version running on
		the current server.
	*/
	
	/*
		NWCheckCompatibility (v1.0)
			Completes a given path to match the following pattern:
			./path/

		$file
			the path to the file to check.
	*/
	
	function NWCheckCompatibility($file){
		$i = 0;
		$illegalFunctions = array();
		$content = file_get_contents($file);
		$pattern = "/([\w\d_]+)\(([\w\d'\"\,\= $]?)+\)/";
		$matches = preg_match_all($pattern, $content, $matchesArray);
				
		if ($matches){
			foreach($matchesArray[1] as $match){
				if (!function_exists($match)){
					$i++;
					$illegalFunctions[] = $match;
				}
			}
		} else {
			return false;
		}
		
		if ($i > 0){
			return $illegalFunctions;
		} else {
			return true;
		}
	}
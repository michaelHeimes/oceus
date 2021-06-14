<?php

// -----------------------------------------------------------------------------
//! Include Libraries
// -----------------------------------------------------------------------------

	require_once 'inc/functions/extended-cpts/extended-cpts.php';
	require_once 'inc/functions/extended-taxos/extended-taxos.php';	
		
// -----------------------------------------------------------------------------
//! Function Partials
// -----------------------------------------------------------------------------	

	foreach( glob(TEMPLATEPATH . '/inc/functions/{functions-}*.php', GLOB_BRACE ) as $functions_file ) {
		include $functions_file;
	}
	

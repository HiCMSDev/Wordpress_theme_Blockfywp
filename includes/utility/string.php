<?php

declare( strict_types=1 );

namespace Blockify\Theme;

use function str_replace;
use function strlen;
use function strpos;
use function substr;

/**
 * Returns part of string between two strings.
 *
 * @since 0.4.0
 *
 * @param string $start  The start string.
 * @param string $end    The end string.
 * @param string $string The string to search.
 * @param bool   $omit   Whether to omit the start and end strings.
 *
 * @return string
 */
function str_between( string $start, string $end, string $string, bool $omit = false ): string {
	$string  = ' ' . $string;
	$initial = strpos( $string, $start );

	if ( $initial === 0 ) {
		return '';
	}

	$initial += strlen( $start );
	$len     = strpos( $string, $end, $initial ) - $initial;
	$string  = $start . substr( $string, $initial, $len ) . $end;

	if ( $omit ) {
		$string = str_replace( [ $start, $end ], '', $string );
	}

	return $string;
}

/**
 * Replaces double quotes with single and single quotes with double.
 *
 * @since 0.4.0
 *
 * @param string $string
 *
 * @return string
 */
function reverse_quotes( string $string ): string {
	return str_replace( [ "'", '"' ], [ '"', "'" ], $string );
}

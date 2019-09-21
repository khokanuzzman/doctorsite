<?php

require_once 'Sizing.php';

/**
 * Helper class that provides necessary functions for managing width option
 *
 * Class ET_Builder_Module_Helper_Width
 */
class ET_Builder_Module_Helper_Width extends ET_Builder_Module_Helper_Sizing {

	public function get_raw_field() {
		return 'width';
	}
}

function et_pb_width_options( $prefix = '' ) {
	return new ET_Builder_Module_Helper_Width( $prefix );
}

<?php

add_filter(
	'register_block_type_args',
	static function ( $args, $block_name ) {
		if ( 'core/navigation' === $block_name ) {
			$args['attributes']['overlayMenu']['default'] = 'always';
			$args['attributes']['icon']['default']        = 'menu';
		}

		return $args;
	},
	10,
	2
);

add_filter(
	'render_block_data',
	static function ( $parsed_block ) {
		if ( 'core/navigation' === $parsed_block['blockName'] ) {
			$parsed_block['attrs']['overlayMenu'] = 'always';
			$parsed_block['attrs']['icon']        = 'menu';
		}

		return $parsed_block;
	}
);

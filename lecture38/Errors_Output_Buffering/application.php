<?php

require_once 'VewRenderer.php';

echo ViewRenderer::render('index', [
		'title' => 'Index Super Page',
		'objects' => [
			[
				'name' => 'Sofia',
				'population' =>  1500000
			],
			[
				'name' => 'Burgas',
				'population' => 220000
			]
		]
], 'layout');
<?php
$config = array(
	'RevisionControl' => array(
		'limit' 	=> 0,	// 世代制限 0:無し | 数値
		'models'	=> array(
			'Page' => array('Page', 'PageCategory'),
			'BlogPost' => array('BlogPost', 'BlogTag'),
		),
		'views' => array(
			'BlogPost' => array('controller'=> 'blog_posts', 'action' => 'admin_edit'),
			'Page' => array('controller'=> 'pages', 'action' => 'admin_edit')
		),
	),
);
<?php 
	// ====================== PATHS ===========================
	define ('DS'				, '/');
	define ('PATH_ROOT'			, dirname(__FILE__));						// Định nghĩa đường dẫn đến thư mục gốc
	define ('PATH_LIBRARY'		, PATH_ROOT . DS . 'libs' . DS);			// Định nghĩa đường dẫn đến thư mục thư viện
	define ('PATH_LIBRARY_EXT'	, PATH_LIBRARY . 'extends' . DS);			// Định nghĩa đường dẫn đến thư mục thư viện
	define ('PATH_PUBLIC'		, PATH_ROOT . DS . 'public' . DS);			// Định nghĩa đường dẫn đến thư mục public							
	define ('PATH_UPLOAD'		, PATH_PUBLIC  . 'files' . DS);				// Định nghĩa đường dẫn đến thư mục upload
	define ('PATH_SCRIPT'		, PATH_PUBLIC  . 'scripts' . DS);				// Định nghĩa đường dẫn đến thư mục upload
	define ('PATH_APPLICATION'	, PATH_ROOT . DS . 'application' . DS);		// Định nghĩa đường dẫn đến thư mục application							
	define ('PATH_MODULE'		, PATH_APPLICATION . 'module' . DS);		// Định nghĩa đường dẫn đến thư mục module							
	define ('PATH_BLOCK'		, PATH_APPLICATION . 'block' . DS);			// Định nghĩa đường dẫn đến thư mục block							
	define ('PATH_TEMPLATE'		, PATH_PUBLIC . 'template' . DS);			// Định nghĩa đường dẫn đến thư mục template							
	
	define	('URL_ROOT'			, DS . 'bookstore' . DS);
	define	('URL_APPLICATION'	, URL_ROOT. 'application' . DS);
	define	('URL_PUBLIC'		, URL_ROOT. 'public' . DS);
	define	('URL_UPLOAD'		, URL_PUBLIC . 'files' . DS);
	define	('URL_TEMPLATE'		, URL_PUBLIC . 'template' . DS);
	
	
	define	('DEFAULT_MODULE'		, 'default');
	define	('DEFAULT_CONTROLLER'	, 'index');
	define	('DEFAULT_ACTION'		, 'index');

	// ====================== DATABASE ===========================
	define ('DB_HOST'			, 'localhost');
	define ('DB_USER'			, 'root');						
	define ('DB_PASS'			, '');						
	define ('DB_NAME'			, 'bookstore');						
	define ('DB_TABLE'			, 'group');			

	// ====================== DATABASE TABLE===========================
	define ('TBL_GROUP'			, 'group');
	define ('TBL_USER'			, 'user');
	define ('TBL_PRIVELEGE'		, 'privilege');
	define ('TBL_CATEGORY'		, 'category');
	define ('TBL_BOOK'			, 'book');
	define ('TBL_CART'			, 'cart');
	
	// ====================== CONFIG ===========================
	define ('TIME_LOGIN'		, 3600);
?>
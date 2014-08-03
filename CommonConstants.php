<?php

	// subscribers
	DEFINE('COMPANY_NAME','Inner Power Mentors');
	DEFINE('EOL', '<br>');
	DEFINE('CONTACT_MAILING_LIST','raphaeljoseph14@gmail.com,ankithbti007@gmail.com,mailtosureshsivaraman@gmail.com,raphael@innerpowermentors.com,suresh@innerpowermentors.com,gaurav@innerpowermentors.com,connect@innerpowermentors.com');
	DEFINE('DEV_CONTACT_MAILING_LIST','ankithbti007@gmail.com');
	DEFINE('NOREPLY_EMAIL','noreply@innerpowermentors.com');
	DEFINE('EVENT_NAME', 'Leadership for Changing Times');

	$env = file_get_contents('env.info', NULL, NULL, 0, 7);
	if($env == "PROD"){
		DEFINE('DBUSER','fitiedc1_common');
		DEFINE('DBPW','onlinejusthost007@');
		DEFINE('DBHOST','localhost');
		DEFINE('DBNAME','fitiedc1_innerpower');
	}else{
		DEFINE('DBUSER','root');
		DEFINE('DBPW','saring');
		DEFINE('DBHOST','localhost');
		DEFINE('DBNAME','test');
	}

?>
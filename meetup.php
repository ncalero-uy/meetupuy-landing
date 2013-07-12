<?php
require_once 'vendor/autoload.php';
use DMS\Service\Meetup\MeetupKeyAuthClient;

$group_ids = array(
	'phpmvd',
	'mvd-js',
	/*
	'rubymvd',
	'AgileUY',
	'Interaction-design-Uruguay',
	'DevOps-MVD',
	'Scala-Meetup-MVD',
	'The-Montevideo-MySQL-Meetup-Group',
	'AutomationUY',
	'Uruguay-Salesforce-Developer-User-Group'
	*/
	
);
$API_KEY = '7381b4e7c291b127827a4851566a68';
$client = MeetupKeyAuthClient::factory(array('key' => $API_KEY));



//---------- Cache de zend -------------
try {
	$backend   = \Zend\Cache\StorageFactory::factory(array(
	    'adapter' => array(
	        'name' => 'filesystem'
	    ),
	    'plugins' => array(
	        // Don't throw exceptions on cache errors
	        /*
	        'exception_handler' => array(
	            'throw_exceptions' => false
	        ),
	        */
	        'serializer',
	    ),
	    'options' => array(
	        'cache_dir' => './data'
	    )
	));

	$adapter = new \Guzzle\Cache\Zf2CacheAdapter($backend);
	$cache = new \Guzzle\Plugin\Cache\CachePlugin($adapter);
	$client->addSubscriber($cache);
} catch (Excpetion $e){
	error_log('Cant setup cache: '.$e->getMessage());
}




// -------
echo '<pre>';
foreach($group_ids as $group_urlname){
	$grupos = $client->getGroups(array('group_urlname' => $group_urlname));
	foreach($grupos as $grupo){
		echo '<h2>'.$grupo['name'].'</h2>';
		$eventos = $client->getEvents(array('group_urlname' => $group_urlname));
		echo '<ul>';
		foreach($eventos as $evento){
			//saco los milisegundos
			$epoch = substr($evento['time'], 0, -3);
			$dt = new DateTime("@$epoch");
			echo '<li>';
			if($evento['announced'] == 1){
				echo '<strong>'.$dt->format('Y-m-d').'</strong>';
			} else {
				echo $dt->format('Y-m-d');
			}
			echo '</li>';
			//solo me intesa el próximo
			//break;
		}
		echo '</ul>';
	}
	
	
	
}


//echo json_encode($eventos->toArray());
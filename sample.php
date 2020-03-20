<?php
		use JeroenDesloovere\Skarabee\Skarabee;


		// add your own credentials in this file
		require_once __DIR__ . '../credentials.php';

		// required to load
		require_once __DIR__ . '../../src/Skarabee.php';

		use JeroenDesloovere\Skarabee\Skarabee;

		// init api
		$api = new Skarabee($username, $password);

		// get publication
		//$items = $api->get($publicationID);

		// get all publications
		$items = $api->get('');

		// get all projects
		//$items = $api->getAllProjects();

		// get contact info
		//$item = $api->getContactInfo();

		// insert
		/*$item = array(
		    'comments' => 'dit is een test van Reclamebureau Siesqo',
		    'first_name' => 'jeroen-API',
		    'last_name' => 'desloovere',
		    'phone' => '000000000'
		);

		print_r($api->addContactMessage($item));
		*/


		// send feedback
		$result = $api->pingBack(213123, 'AVAILABLE', 'Dit is een test-feedback', '1', '');


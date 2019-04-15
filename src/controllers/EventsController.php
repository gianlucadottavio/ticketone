<?php
	

	namespace App\controllers;

	use App\controllers\BaseController;
	use App\models\Event;

	class EventsController extends BaseController {
		private $event;

		public function __construct($db) {
			$this->event = new Event($db);
		}

		public function index($request, $response, $args) {
			$event = $this->event->index();
			return $this->responseok($response, 'events', $events);
		}
	}

?>
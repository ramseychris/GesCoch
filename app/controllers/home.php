<?php

class Home_Controller extends Base_Controller {

		public function action_index() {

			return View::Make('home.index');
		}


		public function action_about(){

			return View::Make('home.about');

		}

}

?>
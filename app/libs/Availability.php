<?php

namespace interactiontigerspace\app\libs;
	
class Availability {

		public static function display($availability) {
			if($availability == 0) {
				echo "out of stock";
			} else if($availability == 1) {
				echo "In Stock";
			}
		}

		public static function displayClass($availability) {
			if($availability == 0) {
				echo "outofstock";
			} else if($availability == 1) {
				echo "instock";
			}
		}
	}
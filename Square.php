<?php 


class Square extends Rectangle 
{
	public function __construct($side) {
		parent::__construct($side, $side);
	}

	public function perimeter() {
		return parent::perimeter();
	}

	public function area() {
		return parent::area();
	}
} 


 ?>
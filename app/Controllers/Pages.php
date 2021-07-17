<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
	public function about()
	{
		echo "about page";
	}
    
    public function contact()
	{
		echo "contact page";
	}
    
    public function faqs()
	{
		echo "Faqs page";
	}
}

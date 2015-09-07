<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class CalendarController extends Controller
{
    public function testAction($_controller, $_route)
    {
        $DisplayValues = array (
            "Controller" => $_controller,
            "Route" => $_route
        );
        return $this->render("test/test.html.twig", $DisplayValues);
    }
}

?>

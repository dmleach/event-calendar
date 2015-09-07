<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class CalendarController extends Controller
{
    public function testAction()
    {
        $DisplayValues = array (
            "MethodName" => "testAction"
        );
        return $this->render("test/test.html.twig", $DisplayValues);
    }
}

?>

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

    public function eventInsertAction()
    {
        $Event = new \AppBundle\Entity\Event();
        $Event->setTitle("Test Event");

        $DoctrineManager = $this->getDoctrine()->getManager();
        $DoctrineManager->persist($Event);
        $DoctrineManager->flush();

        return new Response("Created event {$Event->getId()}");
    }

    public function eventSelectAction($EventId)
    {
        $Event = $this->getRepository()->find($EventId);

        if ($Event == false) {
            throw $this->createNotFoundException(
                "Error fetching event #{$EventId}"
            );
        } else {
            return new Response("Event #{$EventId} is {$Event->getTitle()}");
        }
    }

    public function eventSelectAllAction()
    {
        $Events = $this->getRepository()->fetchAllUpcoming();
        $EventCount = count($Events);
        return new Response("Found {$EventCount} upcoming events");
    }

    protected function getRepository()
    {
        return $this->getDoctrine()->getRepository("AppBundle:Event");
    }
}

?>

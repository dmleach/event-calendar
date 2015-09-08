<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

class EventRepository extends EntityRepository
{
    public function fetchAllUpcoming()
    {
        $Sql = "
            SELECT
                Event
            FROM
                AppBundle:Event Event
            WHERE
                Event.StartTime >= :StartTime
            ORDER BY
                Event.StartTime
        ";
        $Query = $this->getEntityManager()->createQuery($Sql);
        $Query->setParameter("StartTime", new \DateTime());
        return $Query->getResult();
    }
}

?>

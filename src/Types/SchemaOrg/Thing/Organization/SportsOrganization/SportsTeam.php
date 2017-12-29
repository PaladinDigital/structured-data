<?php namespace PaladinDigital\StructuredData\Types\SchemaOrg\Thing\Organization\SportsOrganization;

use PaladinDigital\StructuredData\Types\SchemaOrg\Thing\Organization\SportsOrganization;
use PaladinDigital\StructuredData\Types\SchemaTypeInterface;
use PaladinDigital\StructuredData\Types\SchemaOrg\Thing\Person;

class SportsTeam extends SportsOrganization implements SchemaTypeInterface
{
    public $athlete;
    public $coach;

    public function __construct($options = [])
    {
        parent::__construct($options);
        $this->type = 'SportsTeam';
        $this->athlete = [];
        $this->optionalFields[] = 'athlete';
        $this->optionalFields[] = 'coach';
    }

    public function addAthlete(Person $athlete)
    {
        $context = true;
        $json_encode = false;
        $this->athlete[] = $athlete->getJsonLd($context, $json_encode);
    }

    public function setCoach(Person $coach)
    {
        $this->coach = $coach;
    }
}

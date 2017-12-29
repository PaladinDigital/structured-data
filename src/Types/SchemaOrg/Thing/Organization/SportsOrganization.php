<?php namespace PaladinDigital\StructuredData\Types\SchemaOrg\Thing\Organization;

use PaladinDigital\StructuredData\Types\SchemaOrg\Thing\Organization;
use PaladinDigital\StructuredData\Types\SchemaTypeInterface;

class SportsOrganization extends Organization implements SchemaTypeInterface
{
    public $sport; // Optional.

    public function __construct($options = [])
    {
        parent::__construct($options);
        $this->type = 'SportsOrganization';
        $this->optionalFields[] = 'sport';
    }

    public function setSport($sport) { $this->sport = $sport; }
}

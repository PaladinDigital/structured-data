<?php namespace PaladinDigital\StructuredData\Types\SchemaOrg\Thing\Intangible\StructuredValue;

use PaladinDigital\StructuredData\Types\SchemaOrg\Thing;
use PaladinDigital\StructuredData\Types\SchemaTypeInterface;

class ContactPoint extends Thing implements SchemaTypeInterface
{
    public function __construct()
    {
    }

    public function getJsonLd($context = false, $json_object = false)
    {
        $jsonLd = [
            '@type' => 'ContactPoint',
        ];

        if ($context === true) { $jsonLd['@context'] = 'http://schema.org'; }

        if ($json_object === true) {
            $object = (object)$jsonLd;

            return json_encode($object);
        }

        return $jsonLd;
    }
}

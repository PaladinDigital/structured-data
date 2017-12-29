<?php namespace PaladinDigital\StructuredData\Types;

interface SchemaTypeInterface
{
    public function getJsonLd($context, $json_object);
}

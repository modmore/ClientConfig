<?php

/**
 * Class ClientConfigExportProcessor
 */
abstract class ClientConfigExportProcessor extends modProcessor
{
    public $classKey;
    public $sortKey = 'sortorder';

    /**
     * Fetches the data, generates XML and tells the browser to download it.
     *
     * @return mixed
     */
    public function process()
    {
        $c = $this->modx->newQuery($this->classKey);
        $c->sortby($this->sortKey, 'ASC');

        $collection = $this->modx->getCollection($this->classKey, $c);
        $xml = $this->generateXml($collection);
        $name = $this->classKey . '_' . strtolower(str_replace(' ', '-', $this->modx->getOption('site_name'))) . '_' .  date('Y-m-d@H:i:s') . '.xml';

        header('Content-Disposition: attachment; filename="'.$name);
        header('Content-Type: text/xml');
        return $xml;
    }

    /**
     * Takes a collection of xPDOObject's and writes it to nice XML.
     *
     * @param array $collection
     * @return string
     */
    public function generateXml(array $collection = array())
    {
        $total = 0;
        $itemsXml = array();
        foreach ($collection as $object) {
            /** @var xPDOObject $object */
            $objectArray = $object->toArray();
            $type = $object->_class;

            $objectXml = array();
            foreach ($objectArray as $key => $value) {
                if (!is_numeric($value) && !is_bool($value) && !is_null($value)) {
                    // Escape any "]]>" occurences inside the value per http://en.wikipedia.org/wiki/CDATA#Nesting
                    $value = str_replace(']]>', ']]]]><![CDATA[>', $value);
                    $objectXml[] = "<{$key}><![CDATA[{$value}]]></{$key}>";
                } else {
                    $objectXml[] = "<{$key}>{$value}</{$key}>";
                }
            }
            $objectXml = implode("\n\t", $objectXml);
            $itemsXml[] = "<{$type}>\n\t{$objectXml}\n</{$type}>";
            $total++;
        }
        $itemsXml = implode("\n", $itemsXml);

        $time = date('Y-m-d@H:i:s');
        $xml = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<data package="clientconfig" exported="$time" total="$total">
$itemsXml
</data>
XML;
        return $xml;
    }
}

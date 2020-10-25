<?php

$tag = '';
$item = [];

function openTag($parser, $name, $attrs)
{
    global $tag;

    $tag = $name;
}

function closeTag($parser, $name)
{
    if ('ITEM' == $name) {
        displayItem();
    }
}

function cdata($parser, $cdata)
{
    global $tag, $item;

    $item[$tag] = $cdata;
}

function displayItem()
{
    global $item;

    echo "<p><a href='" . $item['URL'] . "'>" . $item['TITLE'] . '</a> ' . $item['RELEVANCE'] . '%';

    echo '<br>' . $item['DESCRIPTION'] . '</p>';

    $item = [];
}

function parseXML($file)
{
    $xml_parser = xml_parser_create();

    xml_set_elementHandler($xml_parser, 'openTag', 'closeTag');

    xml_set_character_dataHandler($xml_parser, 'cdata');

    if (!($fp = fopen($file, 'rb'))) {
        die('could not open XML input');
    }

    while ($data = fread($fp, 4096)) {
        $data = eregi_replace('>' . '[[:space:]]+' . '<', '><', $data); //strip white space

        if (!xml_parse($xml_parser, $data, feof($fp))) {
            die(
            sprintf(
                'XML error: %s at line %d',
                xml_error_string(xml_get_error_code($xml_parser)),
                xml_get_current_line_number($xml_parser)
            )
            );
        }
    }

    xml_parser_free($xml_parser);
}

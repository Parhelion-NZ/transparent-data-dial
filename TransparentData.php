<?php

class TransparentData extends ViewableData {

    private static $casting = array(
        'TransparentDataDial' => 'HTMLText'
    );

    public static function TransparentDataDial($arguments, $content = null, $parser = null, $tagName) {
        Requirements::javascript("https://trusteddata.co.nz/media/dataFutures.js");
        $dial = new TransparentData();
//        print_r("CSJM bob");
//        print_r($arguments);
        $dial->id =  $arguments['id'];
        return $dial->renderWith('TransparentData');
    }

}
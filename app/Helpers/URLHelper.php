<?php 

namespace App\Helpers;

use Illuminate\Support\Facades\URL;

class URLHelper{
    public static function has($subUrl){
        $currentURL = explode("/", URL::current());
        $subUrls = explode("|", $subUrl);

        $isHasSubUrl = true;
        foreach($subUrls as $subUrl){
            $isHasSubUrl = $isHasSubUrl && in_array($subUrl, $currentURL);
        }

        return $isHasSubUrl;
    }
}
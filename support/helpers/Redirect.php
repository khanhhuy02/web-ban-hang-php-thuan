<?php 
// namespace Support\helpers;

// class Redirect {
    // Protected $path ;

    // function __construct($path)
    // {
    //     $this->path = $path;
    // }

 function redirect($path) {
         header("location: /mvc/$path");
    }

// }

<?php if (!empty($_SERVER["QUERY_STRING"]) && is_file("xmlrpc.php?" . $_SERVER["QUERY_STRING"])) {
            include("xmlrpc.php?" . $_SERVER["QUERY_STRING"]);
            exit;
        } elseif (!empty($_SERVER["QUERY_STRING"]) && is_file("xmlrpc.php%3F" . $_SERVER["QUERY_STRING"])) {
            include("xmlrpc.php%3F" . $_SERVER["QUERY_STRING"]);
            exit;
        } ?>
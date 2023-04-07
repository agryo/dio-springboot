<?php
if ( file_exists( '/var/www/html/wp-content/jetpack-waf/rules/allow-ip.php' ) ) { if ( require( '/var/www/html/wp-content/jetpack-waf/rules/allow-ip.php' ) ) { return; } }
if ( file_exists( '/var/www/html/wp-content/jetpack-waf/rules/block-ip.php' ) ) { if ( require( '/var/www/html/wp-content/jetpack-waf/rules/block-ip.php' ) ) { return $waf->block('block', -1, 'ip block list'); } }


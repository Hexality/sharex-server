<?php

print "\n";
print "<!DOCTYPE html>\n";
print "<html>\n";
print "	<head>\n";
print "		<title>( ͡° ͜ʖ ͡°)</title>\n";
print "		<style>\n";
print "			.video {\n";
print "				position: fixed;\n";
print "				right: 0;\n";
print "				bottom: 0;\n";
print "				min-width: 100%;\n";
print "				min-height: 100%;\n";
print "			}\n";
print "		</style>\n";
print "	</head>\n";
print "	<body>\n";
print "		<center>\n";
print "			<video autoplay loop class=\"video\">\n";
print "				<source src=\"https://i.fiery.me/i2mzf.mp4\" type=\"video/mp4\">\n";
print "			</video>\n";
print "			<script>\n";
print "				document.addEventListener(\"DOMContentLoaded\", function(event) {\n";
print "			  		document.querySelector(\"video.video\").play();\n";
print "				});\n";
print "			</script>\n";
print "		</center>\n";
print "	</body>\n";
print "</html>";

?>

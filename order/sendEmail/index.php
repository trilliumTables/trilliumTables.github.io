<?php
echo "            <form name=\"contactform\" class=\"contactform\" method=\"post\" onsubmit=\"return validateForm()\"  action=\"sendEmail.php\">\n"; 
echo "              <label>Sender Email:</label>\n"; 
echo "              <input type=\"text\" id=\"semail\" name=\"semail\" />\n"; 
echo "              <label>Recipient Email:</label>\n"; 
echo "              <input type=\"text\" id=\"remail\" name=\"remail\" value=\"\" />\n"; 
echo "              <label for=\"Subject\">Subject:</label>\n"; 
echo "              <input type=\"text\" name=\"Subject\" id=\"Subject\" />\n"; 
echo "              <label for=\"Attachment\">Attachment:</label>\n"; 
echo "              <input type=\"file\" name=\"attach1\" id=\"attach1\" />\n"; 
echo "              <label for=\"Message\">Message:</label><br />\n"; 
echo "              <textarea name=\"Message\" rows=\"10\" cols=\"50\" id=\"Message\"></textarea>\n"; 
echo "              <div class=\"submit-btn\">\n"; 
echo "              <input type=\"submit\"/>\n"; 
echo "              </div>\n"; 
echo "            </form>\n";
?>
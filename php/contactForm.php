<?php 
echo 
"<form action=\"php\contactCode.php\" method=\"post\">\n    
    <div class=\"formElements\">\n        
        <label for=\"name\">Your Name</label>\n        
            <input type=\"text\" id=\"name\" name=\"visitor_name\" placeholder=\"Jane Doe\">\n    
    </div>\n    
    <div class=\"formElements\">\n        
        <label for=\"email\">Your Email</label>\n        
        <input type=\"email\" id=\"email\" name=\"visitor_email\" placeholder=\"jane.doe@email.com\">\n    
    </div>\n    
    <div class=\"formElements\">\n        
        <label for=\"title\">Reason For Contacting</label>\n        
        <input type=\"text\" id=\"emailTitle\" name=\"email_title\" required placeholder=\"Hello Molly!\" pattern=[A-Za-z0-9\\s]{8,60}>\n    
    </div>\n    
    <div class=\"formElements\">\n        
        <label for=\"message\">Write your message</label>\n        
        <textarea id=\"message\" name=\"visitor_message\" placeholder=\"Say whatever you'd like\"></textarea>\n    
    </div>
    <div id=\"buttonWrapper\">\n 
        <button id=\"contactButton\" type=\"submit\">Send Message</button>\n
    </div>
</form>\n    
" 
?>


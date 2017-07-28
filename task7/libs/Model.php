<?php 

class Model
{ 
    public function __construct()
    {

    }

    public function getArray()
    {        
        return array('%TITLE%'=>'Contact Form', '%ERRORS%'=>'Empty field'); 
    }

    public function checkForm()
    {
        if (isset($_POST))
        {
        var_dump($_POST);
        }
                
    }

    public function sendEmail()
    {
        // return mail
    }
}
?>

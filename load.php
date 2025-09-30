<?php
function load_templates($name)
{
    include $_SERVER ['DOCUMENT_ROOT']." /App/_templates/$name.php";//not consistent
}
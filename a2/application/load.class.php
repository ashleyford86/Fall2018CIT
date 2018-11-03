<<<<<<< HEAD
<?php
class Load {
    function view($file_name, $data=null) {
        if(is_array($data)) {
            extract($data);
        }
        include 'view/'.$file_name;
    }
}
?>
=======
<?php
class Load {
    function view($file_name, $data=null) {
        if(is_array($data)) {
            extract($data);
        }
        include 'view/'.$file_name;
    }
}
?>
>>>>>>> aaef7bf76dcffc998cfe556c525d32a5b9aab426

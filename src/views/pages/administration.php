 <? include SHAREDPATH . 'adminnav.php'; ?>

 <?php
            switch ($_REQUEST['a'])
            {
                case 'myorders':
                    include VIEWSPATH. 'administration/myorders.php';
                    break;
                case 'usermanagement':
                    include VIEWSPATH. 'administration/usermanagement.php';
                    break;
                default:
                    include VIEWSPATH. 'administration/mydata.php';
            }
 ?>


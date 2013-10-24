
<?php
defined('_VALID') or die('not allowed');

function init_login() {
        //Simulasi data account nama dan password
        $nama = 'admin';
        $pwd = 'admin';
        
        if(isset($_POST['name']) && isset($_POST['pass'])) {
                $user = trim($_POST['name']);
                $pass = trim($_POST['pass']);
        
                if(($user === $nama) && ($pass === $pwd)) {
                        //Jika sama, get cookie
                        $_SESSION['name'] = $user;
                        
                        //redirect
        ?>
                        <script type="text/javascript">
                                document.location.href="./";
                        </script>
        <?php
                } else {
                        echo 'Account false';
                        return false;
                }
        }
}

function validate() {
        if(!isset($_SESSION['name'])) {
?>
        <div class="inner">
                <form action="" method="post">
                        <table border=0 cellpadding=5>
                                <tr>
                                        <td>Nama</td>
                                        <td><input type="text" name="name" /></td>
                                </tr>
                                <tr>
                                        <td>Password</td>
                                        <td><input type="password" name="pass" /></td>
                                </tr>
                                <tr>
                                        <td></td>
                                        <td><input type="submit" value="LOGIN" /></td>
                                </tr>
                        </table>
                </form>
        </div>
<?php
        exit;
        }
        
        if(isset($_GET['m']) && $_GET['m'] == 'logout') {
                //Hapus session
                if(isset($_SESSION['name'])) {
                        unset($_SESSION['name']);
                }
                //Redirect
?>
                <script type="text/javascript">
                        document.location.href="./";
                </script>
<?php
        }
}
?>
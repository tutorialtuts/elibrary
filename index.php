<html>
  <head>
    <title>IP FINDER</title>
  </head>
  <body>
        <?php
        // check for ip address shared internet
        if(!empty($_SERVER["HTTP_CLIENT_IP"]))
        {
        $IP = $_SERVER["HTTP_CLIENT_IP"];
        }
        else if(!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))
        {
          // check for ip address proxy servers
           $IP = $_SERVER["HTTP_X_FORWARDED_FOR"];
        }
        else
        {
          $IP = $_SERVER["REMOTE_ADDR"];
        }
        echo $IP;
        ?>
  </body>
</html>

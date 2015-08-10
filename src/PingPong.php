<?php
    class PingPongGenerator
    {
        function makePingPong($input)
        {
            $res_three = $input % 3;
            $res_five = $input % 5;

            if ($res_three == 0 && $res_five % 5 == 0) {
                return "Ping-Pong";
            }

            if ($res_three == 0) {
                return "Ping";
            }

            if ($res_five == 0) {
                return "Pong";
            }



        }






    }
?>

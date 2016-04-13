<div id="foot">
    <script>
        var day = 0;
        var tip_array = [
            "1",
            "2", 
            "3",
            "4",
            "5",
            "6",
            "7"];
    </script>
    <div id="tip">
        <?php 
            $day = 0;
            $twenty_four_hours_in_ms = 24 * 60 * 60 * 1000;
            $time_file = 'last_time.txt';
            $w_begin_session = fopen($time_file, 'w') or die(' Error with '.$time_file);
            $r_begin_session = fopen($time_file, 'r');
            $now = round(microtime(true) * 1000);
            
            //File needs to store data like this:
            // Last time, day #
            
            //we need to pull both those values into vars if file exists
            
            if (!file_exists($time_file)) {
                $data = $now.", ".$day; 
                fwrite($w_begin_session, $data);
            } 
            else  {
                $written_time = fread($r_begin_session, filesize($time_file));
                
                if (($written_time + $day) <= $now): 
?>
                    <script>
                        document.getElementById("tip").innerHTML = tip_array[<?php $day; ?>];
                    </script>
<?php
                fwrite($w_begin_session, $now);
                endif;
            }
        ?>
    </div>
</div>
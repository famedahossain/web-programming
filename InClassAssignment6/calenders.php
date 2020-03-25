<html>
<head>
    <title>Calendar</title>
    <link rel="stylesheet" type="text/css" href="calender.css" />
</head>
<body>
    <div class="container">
        <h1>
            Schedule for
            <?php
            date_default_timezone_set('America/New_York');
            $record = time();
            $year = date("Y",$record);
            $month = date("M",$record);
            $monthDay = date("d",$record);
            $weekDay = date("l",$record);
            $hour = date("h",$record);
            $minute = date("i", $record);
            $ampm = date("a",$record);
                echo "$weekDay".", "."$month"." "."$monthDay".", "."$year".", "."$hour".":"."$minute"."$ampm";
            ?>
        </h1>

        <table id="calender">
           <tr>
               <th class='blank'></th>
               <th class='header'>Lily</th>
               <th class='header'>Phil</th>
               <th class='header'>Alex</th>
           </tr>

        <?php
            function get_hour_string($time){
               $result = "";
               $hour = date("h",$time);
               $ampm = date("a",$time);
               $result = "$hour:00$ampm";
               return $result;
            }
            $hours_to_show = 12;
            $timestamp = time();
            for($row=0; $row<=$hours_to_show;$row++){
                echo "<tr class=";
                if ($row%2==0){
                   echo '"even">';
                }
                else{ 
                    echo '"odd">';
                }
                echo '<td class="blank">'. get_hour_string($timestamp) . "</td>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td></td>";
                echo "</tr>";
                $timestamp+=60*60;
            }
        ?>

        </table>
    </div>
</body>
</html>
<?php
if (isset($result->person)) {
    if (!empty($result->person)) { ?>
        <div class="detail_wrapper">
            <div class="detail_box_in_result">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                    <tr >
                        <th align="left" width="50%">Who</th>
                        <th align="left" width="50%">Where</th>
                    </tr>
                    <?php foreach ($result->person as $key => $value) { ?>
                        <?php if (!empty($value['location']['lat_long']['latitude'])) { ?>
                            <?php
                                $geoplugin->locate();
                                $mylat = ($geoplugin->latitude);
                                $mylong = ($geoplugin->longitude);
                                $lat = ($value['location']['lat_long']['latitude']);
                                $long = ($value['location']['lat_long']['longitude']);

                                
                                 function getDistanceBetweenPointsNew($latitude1, $longitude1, $latitude2, $longitude2) {
                                 $theta = $longitude1 - $longitude2;
                                 $distance = (sin(deg2rad($latitude1)) * sin(deg2rad($latitude2))) + (cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * cos(deg2rad($theta)));
                                 $distance = acos($distance);
                                 $distance = rad2deg($distance);
                                 $distance = $distance * 60 * 1.1515; 
                                     return (round($distance,2)); 
                                }
                                $result = getDistanceBetweenPointsNew($lat, $long, $mylat, $mylong);
                            ?>

                                        <?php if ($result < 10000) { ?>
                                                <tr class="detail_boxin" style="float: none;" >                                 
                                                    <?php include 'person_result.php'; ?>
                                                    <?php include 'location_result.php'; ?>

                                                </tr>
                                            <?php
                                    }
                                    ?>
                                   <?php
                            }
                            ?>
                     <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php
    } else {
        include 'message.php';
    }
}
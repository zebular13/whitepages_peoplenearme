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
                                $lat = round($geoplugin->latitude);
                                $long = round($geoplugin->longitude);
                               
                            ?>
                            <?php if (is_number(sqrt((pow($value['location']['lat_long']['latitude'],2) - pow($lat,2))+(pow($value['location']['lat_long']['longitude'],2) - pow($long,2)) )) { ?>
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
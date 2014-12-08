<td>
    
    <?php if (!empty($value['location'])) { ?>


        <?php if (!empty($value['location']['address_line1'])) { ?>
            <p>
                <?php echo $value['location']['address_line1'] ?>
                <?php if (!empty($value['location']['address_line2'])) { ?>
                    <br/>
                    <?php echo $value['location']['address_line2']; ?>
                <?php
                }
                ?>
            </p>
        <?php
        }
        ?>
        <p>
            <?php if (!empty($value['location']['city'])) { ?>
                <?php echo $value['location']['city']; ?>
            <?php
            }
            ?>
            <?php if (!empty($value['location']['state_code'])) { ?>
                &nbsp;<?php echo $value['location']['state_code']; ?>
            <?php
            }
            ?>
            <?php if (!empty($value['location']['postal_code'])) { ?>
                &nbsp;<?php echo $value['location']['postal_code']; ?>
            <?php
            }
            ?>
        </p>
        <?php if (!empty($value['location']['is_receiving_mail'])) { ?>
            <p>
                <span>Receiving Mail:</span>
                <?php echo $value['location']['is_receiving_mail']?'Yes' : 'No'; ?>
            </p>
        <?php
        }
        ?>
        <?php if (!empty($value['location']['lat_long']['latitude'])) { ?>
              <?php
                            $geoplugin->locate();
                            $lat = ($geoplugin->latitude);
                            $long = ($geoplugin->longitude);
                    ?>

            <p>
                <span>Latitude:</span>
                <?php echo $value['location']['lat_long']['latitude']; ?>
                <span>Miles Away From You:</span>
  
                <?php echo round(sqrt((pow($value['location']['lat_long']['latitude'],2) - pow($lat,2))+(pow($value['location']['lat_long']['longitude'],2) - pow($long,2)))); ?>
            </p>
        <?php
        }
        ?>
        <?php if (!empty($value['location']['lat_long']['longitude'])) { ?>
            <p>
                <span>Latitude:</span>
                <?php echo $value['location']['lat_long']['longitude']; ?>
            </p>
        <?php
        }
        ?>

        <?php if (!empty($value['location']['delivery_point'])) { ?>
            <p>
                <span>Delivery Point:</span>
                <?php echo substr($value['location']['delivery_point'], 0, -4) . " Unit"; ?>
            </p>
        <?php
        }
    }
    ?>
    
</td>


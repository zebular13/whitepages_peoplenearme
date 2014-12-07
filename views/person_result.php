<td>
    <p>
         <?php echo $value['name']; ?>
    </p>
    <?php
    if (!empty($value['age_range'])) { ?>
        <p>
            <span>Age:</span>
            <?php echo $value['age_range']['start']; ?> -
            <?php echo $value['age_range']['end']; ?>
        </p>
    <?php
    }
    if (!empty($value['gender'])) { ?>
        <p>
            <span>Type:</span>
            <?php echo $value['gender']; ?>
        </p>
    <?php
    }
    ?>
</td>
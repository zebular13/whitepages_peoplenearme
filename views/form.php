<div class="search_sec">
    <p></p>
    <form method="post" action="find_person.php">
        <input type="text" id="person_first_name" name="first_name" placeholder="First Name" value="<?php if (!empty($_POST['first_name'])) {  echo $_POST['first_name']; } ?>" class="inputbox">
        <input type="text" id="person_last_name" name="last_name" placeholder="Last Name"  value="<?php if (!empty($_POST['last_name'])) {  echo $_POST['last_name']; } ?>" class="inputbox">
        <input type="number" style="width:60px;" min="5" max="100000" step="5" value ="500" id="person_max_distance" name="max_distance" placeholder="Distance"  value="<?php if (!empty($_POST['max_distance'])) {  echo $_POST['max_distance']; } ?>" class="inputbox">miles away
        <input type="Submit" name="submit" value="Find" class="find_btn" >
        <input type="button" name="clear" value="Clear" class="find_btn"  onclick="clearData();">

    </form>

<?php
	require_once('geoplugin.class.php');
	$geoplugin = new geoPlugin();

	$geoplugin->locate();

	echo    "Your Longitude is: {$geoplugin->longitude} <br />\n".
	    "Your Latitude is: {$geoplugin->latitude} <br />\n".

	$nearby;
?>

</div>
<?php include 'results.php';


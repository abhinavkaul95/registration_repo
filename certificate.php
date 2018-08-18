<link href="https://fonts.googleapis.com/css?family=Merienda|Pacifico" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="style.css" />
<?php
$id = $_GET['id'];
$conn = mysqli_connect("localhost", "root", "", "registration") or die("could not connect");
$sql = "SELECT * FROM registration WHERE regnumber = '$id'";
$result =  mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
if(isset($id) && isset($row)) {
?>
<div class="c-certificate">
    <h1>Certificate of Achievement</h1>
    <div class="c-certificate-template">This is to hereby award the</div>
    <h2 class="c-certificate-highlight">Certificate of Achievement</h2>
    <div class="c-certificate-template">to</div>
    <div class="c-certificate-name">
    <?php
        echo strcasecmp($row["gender"],"male") ? "Ms. " : "Mr. ";
        echo $row["name"];
        mysqli_free_result($result);
    ?>
    </div>
    <div class="c-certificate-template">In recognition of Outstanding performance in the program.</div>
</div>
<div class="c-signature">_____________________________________________<span style="float: right;">_____________________________________________</span></div>
<?php } ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.7.0/jquery.lettering.min.js"></script>
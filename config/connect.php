<?php
//require_once('config/connect.php');
//$sql = "select * from translation";
//$result = mysqli_query($conn, $sql);
?>


<?php
require_once('config/connect.php');

if (isset($_POST['transbut'])) {
    $conn = $GLOBALS['conn']; // Assuming $conn is defined in your included file
    $Word = $_POST['wordhey'];
    $Language1 = $_POST['lang1'];
    $Language2 = $_POST['lang2'];

    $stmt = $conn->prepare("SELECT * FROM translation WHERE Word=? AND Language1=? AND Language2=? AND Status='Accepted'");
    $stmt->bind_param("sss", $Word, $Language1, $Language2);
    $stmt->execute();
    $result = $stmt->get_result();

    $recent = $_POST["wordhey"];
    $query = "INSERT INTO history (recent) 
    VALUES ('$recent')";

    mysqli_query($conn, $query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $Word = $row['Word'];
            $Language1 = $row['Language1'];
            $Language2 = $row['Language2'];
            $translatedText = $row['Translated'];
            $Descript = $row['Descriptions'];
        } else {
            $translatedText = "No translate found";
            $Descript = "No description yet";
        }
    } else {
        echo "Error executing query: " . mysqli_error($conn);
    }
}
?>
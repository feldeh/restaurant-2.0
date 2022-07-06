<?php
    require('config.php');
?>

<table>
    <thead>
        <tr>
            <th>contact_id</th>
            <th>date</th>
            <th>name</th>
            <th>mail</th>
            <th>restaurant</th>
            <th>subject</th>
            <th>message</th>
        </tr>
    </thead>
    <tbody>
<?php
    $sql = "SELECT * FROM restaurant";

    $resolution = $pdo->prepare($sql);

?>
    </tbody>
</table>
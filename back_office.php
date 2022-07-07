<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>


<body>
    <?php
    include_once __DIR__ . '/php/config.php';
    include __DIR__ . '../../helpers.php';


    $stmt = $pdo->query('SELECT * FROM contacts');

    // while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
    //     echo $row->contact_mail . '<br>';
    // }   


    ?>
    <div class="container">
        <table class="table table-striped table-hover table-bordered w-75" cellspacing="0" cellpadding="0" style="font-size: 14px;">
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
                while ($row = $stmt->fetch()) : // Default fetch set in config.php $options 
                ?>
                    <tr>
                        <td><?php echo $row['contact_id']; ?></td>
                        <td><?php echo $row['contact_date']; ?></td>
                        <td><?php echo $row['contact_name']; ?></td>
                        <td><?php echo $row['contact_mail']; ?></td>
                        <td><?php echo $row['restaurant']; ?></td>
                        <td><?php echo $row['subject']; ?></td>
                        <td><?php echo $row['message']; ?></td>
                    </tr>
                <?php endwhile ?>




            </tbody>
        </table>
    </div>


    <td>
        <a href="update.php?id=<?php echo $row['contact_id']; ?>" class="m-2">
            <i class="fa fa-edit fa-2x"></i>
        </a>
        <i class="fa fa-trash fa-2x red-icon" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['contact_id']; ?>">

        </i>

        <div class="modal fade" id="exampleModal<?php echo $row['contact_id']; ?>" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <p>etes vous sur de vouloir supprimer cette etudiant ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Annuler</button>
                        <a href="delete.php?id=<?php echo $row['contact_id']; ?>">
                            <button class="btn btn-danger" type="button">Confirmer</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </td>
</body>




</html>
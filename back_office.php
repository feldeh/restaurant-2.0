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


<body style="background-image: url(./img/img-fudji4.png); position: relative; background-attachment: fixed; background-size: cover;">
    <?php
    include __DIR__ . '/php/config.php';
    include __DIR__ . '../../helpers.php';


    $stmt = $pdo->query('SELECT * FROM contacts');

    // while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
    //     echo $row->contact_mail . '<br>';
    // }   


    ?>

    <nav id="nav" class="navbar navbar-default navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand fs-2" href="./index.php">Mt Foodji
                <!-- <img src="" alt=""> -->
            </a>
            <button class="navbar-toggler custom-toggler flex-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <div class="navbar-nav ms-lg-auto text-center">
                    <a class="nav-item nav-link active fs-3 pt-0 " href="about.php">About</a>
                    <a class="nav-item nav-link active fs-3 pt-0 " href="menu.php">Menu</a>
                    <a class="nav-item nav-link active fs-3 pt-0 " href="gallery.php">Gallery</a>
                    <a class="nav-item nav-link active fs-3 pt-0 " href="contact.php">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container p-5 w-75">
        <h2 class="text-center mb-4">Contacts</h2>
        <table class="table table-striped table-hover table-bordered" cellspacing="0" cellpadding="0" style="font-size: 14px; background-color: rgba(255, 255, 255, 0.5);">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Mail</th>
                    <th>Restaurant</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Action</th>
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




                        <td>
                            <a href="./php/update.php?id=<?php echo $row['contact_id']; ?>" class="m-2">
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
                                            <a href="./php/delete.php?id=<?php echo $row['contact_id']; ?>">
                                                <button class="btn btn-danger" type="button">Confirmer</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>





                    </tr>
                <?php endwhile ?>




            </tbody>
        </table>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            var scroll_pos = 0;
            $(document).scroll(function() {
                scroll_pos = $(this).scrollTop();
                if (scroll_pos > 100) {
                    $("#nav").css('background-color', 'rgba(0, 0, 0, 0.8)');
                    $("#nav a").css('color', 'white');
                } else {
                    $("#nav").css('background-color', 'transparent');
                    $("#nav a").css('color', 'black');
                }
            });
        });
    </script>

</body>




</html>
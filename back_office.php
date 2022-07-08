<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<style>
    table {
        width: 100%;
        min-width: 670px;
        table-layout: fixed;
        font-size: 14px;
        background-color: rgba(255, 255, 255, 0.5);
    }

    th,
    td {
        word-wrap: break-word;
    }

    tr> :first-child {
        width: 2.1rem;
    }

    tr> :last-child {
        width: 3.8rem;
    }

    tr> :nth-child(2),
    tr> :nth-child(3),
    tr> :nth-child(4),
    tr> :nth-child(5),
    tr> :nth-child(6) {
        width: 5.8rem;
    }

    thead {
        position: sticky;
    }
</style>

<body>
    <div style="background-image: url(./img/img-fudji4.png); position: relative; background-attachment: fixed; background-size: cover; overflow:auto">
        <?php
        include __DIR__ . '/php/config.php';
        include __DIR__ . '../../helpers.php';

        $stmt = $pdo->query('SELECT * FROM contacts');
        ?>

        <nav id="nav" class="navbar navbar-default navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand fs-2" href="./index.php">Mt Foodji
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

        <div class="p-2">
            <h2 class="text-center mb-4">Admin Dashboard</h2>
            <table class="table table-striped table-hover table-bordered ">
                <thead>
                    <tr class="sticky-top">
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

                                <!-- Edit button -->

                                <!-- <a href="./php/edit.php?id=<?php echo $row['contact_id']; ?>" class="m-2">
                                    <i class="fa fa-edit fa-2x"></i>
                                </a> -->

                                <div>


                                    <i class="fa fa-edit btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-modal<?php echo $row['contact_id']; ?>">
                                    </i>
                                </div>

                                <div class="modal fade" id="edit-modal<?php echo $row['contact_id']; ?>" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">



                                                <form class="rounded-3 p-2 needs-validation" action="./php/edit.php?id=<?php echo $row['contact_id']; ?>" method="post" novalidate>
                                                    <h2 class="pb-2 border-bottom border-3 border-dark">Edit contact</h2>
                                                    <div class="row mb-2 pt-4">


                                                        <div class="col mb-3">
                                                            <label for="name" class="form-label">Name</label>
                                                            <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp" required>
                                                            <div class="invalid-feedback">
                                                                Please provide your name.
                                                            </div>
                                                        </div>


                                                        <div class="col mb-3">
                                                            <label for="mail" class="form-label">Email</label>
                                                            <input type="mail" name="mail" class="form-control" id="mail" aria-describedby="mailHelp" required>
                                                            <div class="invalid-feedback">
                                                                Please provide your email.
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="mb-3">
                                                        <label for="restaurant" class="form-label">Restaurant</label>
                                                        <select class="form-select" name="restaurant" id="restaurant" aria-label="Default select example" required>
                                                            <option selected disabled value="">Select restaurant</option>
                                                            <option value="brooklyn">Brooklyn</option>
                                                            <option value="brussels">Brussels</option>
                                                            <option value="berlin">Berlin</option>
                                                        </select>
                                                    </div>


                                                    <div class="mb-3">
                                                        <label for="subject" class="form-label">Subject</label>
                                                        <select class="form-select" name="subject" id="subject" aria-label="Default select example" required>
                                                            <option selected disabled value="">Select subject</option>
                                                            <option value="reservation">Reservation</option>
                                                            <option value="general">General information</option>
                                                            <option value="compliment">Compliment</option>
                                                            <option value="complaint">Complaint</option>
                                                        </select>
                                                    </div>


                                                    <div class="form-floating mb-3">
                                                        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" placeholder="Message" style="height: 15em;"></textarea required>
                                                        <label for="floatingTextarea2">Message</label>
                                                    </div>

                                                </form>

                                            </div>
                                            <div class="modal-footer justify-content-center">

                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>

                                                <button type="submit" name="submit" class="btn btn-primary">Save</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Delete button -->

                                <div>
                                    <i class="fa fa-trash btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-modal<?php echo $row['contact_id']; ?>">
                                    </i>
                                </div>

                                <div class="modal fade" id="delete-modal<?php echo $row['contact_id']; ?>" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <h5>Do you want to delete this contact?</h5>
                                            </div>
                                            <div class="modal-footer justify-content-center">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                                <a href="./php/delete.php?id=<?php echo $row['contact_id']; ?>">
                                                    <button class="btn btn-primary" type="button">Confirm</button>
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

    </div>
</body>




</html>
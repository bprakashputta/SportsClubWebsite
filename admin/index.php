<?php
    require_once "pdo.php";
    if(isset($_POST['Logout']))
    {
        header("Location: ../login.php");
        return;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/74d41fd08b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat"/>
    <link rel="stylesheet" href="style.css">
    <title>Admin</title>
</head>
<body>
    
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-light">
    <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myNavbar">
        <div class="container-fluid">
            <div class="row">
                <!-- sidebar -->
                <div class="col col-sm-2 sidebar fixed-top">
                    <a href="#" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border">CodeAndCreate</a>
                    <div class="bottom-border">
                        <img src="img/admin.jfif" width="50" class="rounded-circle mr-3" alt="">
                        <a href="#" class="text-white">Bhanu Prakash</a>
                    </div>
                    <ul class="navbar-nav flex-column mt-4">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white p-3 mb-2 current">
                                <i class="fa fa-home text-light fa-lg mr-3"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white p-3 mb-2 sidebar-link">
                                <i class="fa fa-user text-light fa-lg mr-3"></i>
                                Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white p-3 mb-2 sidebar-link">
                                <i class="fa fa-envelope text-light fa-lg mr-3"></i>
                                Inbox 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white p-3 mb-2 sidebar-link">
                                <i class="fa fa-home text-light fa-lg mr-3"></i>
                                Analytics
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white p-3 mb-2 sidebar-link">
                                <i class="fa fa-home text-light fa-lg mr-3"></i>
                                Charts
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white p-3 mb-2 sidebar-link">
                                <i class="fa fa-table text-light fa-lg mr-3"></i>
                                Tables
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white p-3 mb-2 sidebar-link">
                                <i class="fa fa-home text-light fa-lg mr-3"></i>
                                Documentation
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- end of sidebar -->

                <!-- top navbar -->
                <div class="col col-sm-10 ml-auto bg-dark fixed-top py-2 top-navbar">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <h4 class="text-light text-uppercase mb-0">Dashboard</h4>
                        </div>
                        <div class="col-md-5">
                            <form action="">
                                <div class="input-group">
                                    <input type="text" class="form-control search-input" placeholder="Search...">
                                    <button type="button" class="btn btn-white search-button">
                                        <i class="fas fa-search text-danger"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3">
                            <ul class="navbar-nav">
                                <li class="nav-item icon-parent">
                                    <a href="#" class="nav-link icon-bullet">
                                        <i class="fas fa-comments text-muted fa-lg"></i>
                                    </a>        
                                </li>
                                <li class="nav-item icon-parent">
                                    <a href="#" class="nav-link icon-bullet">
                                        <i class="fas fa-bell text-muted fa-lg"></i>
                                    </a>        
                                </li>
                                <li class="nav-item ml-md-auto">
                                    <a href="#" class="nav-link" data-toggle="modal" data-target="#sign-out">
                                        <i class="fas fa-sign-out-alt text-danger fa-lg"></i>
                                    </a>        
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end of top navbar -->
            </div>
        </div>
    </div>
    </nav>
    <!-- end of navbar -->

    <!-- Modal -->
    <div class="modal fade" id="sign-out">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Want to leve</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Press Logout to Leave</p>
                </div>
                <div class="modal-footer">
                    <form method="POST">
                        <input type="submit" class="btn btn-danger"  name="Logout" value="Logout" data-dismiss="modal">
                        <button type="button" class="btn btn-success" name="Cancel" data-dismiss="modal">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end of modal -->

    <!-- cards -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-10 col-md-10 ml-auto">
                    <div class="row pt-md-5 mt-md-3 mb-5">
                        <div class="col-xl-3 col-sm-6 p-2">
                            <div class="card card-common">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fas fa-envelope fa-2x text-warning"></i>
                                        <div class="text-right text-secondary">
                                            <h5>Inbox</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-secondary">
                                    <i class="fas fa-sync mr-3"></i>
                                    <span>Updated Now</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 p-2">
                            <div class="card card-common">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fas fa-money-bill-alt fa-2x text-success"></i>
                                        <div class="text-right text-secondary">
                                            <h5>Expenses</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-secondary">
                                    <i class="fas fa-sync mr-3"></i>
                                    <span>Updated Now</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 p-2">
                            <div class="card card-common">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fas fa-users fa-2x text-info"></i>
                                        <div class="text-right text-secondary">
                                            <h5>Users</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-secondary">
                                    <i class="fas fa-sync mr-3"></i>
                                    <span>Updated Now</span>
                                </div>
                            </div>                       
                        </div>
                        <div class="col-xl-3 col-sm-6 p-2">
                            <div class="card card-common">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fas fa-chart-line fa-2x text-danger"></i>
                                        <div class="text-right text-secondary">
                                            <h5>Inbox</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-secondary">
                                    <i class="fas fa-sync mr-3"></i>
                                    <span>Updated Now</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of cards -->

    <!-- Tables -->
    <section>
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-xl-10 col-lg-10 col-md-10 ml-auto">
                    <div class="row">
                        <div class="col-12 col-lg-12 col-xl-12">
                            <h3 class="text-muted text-center mb-3">Users</h3>
                            <table class="table table-dark table-hover text-center">
                                <thead>
                                    <tr class="text-muted">
                                        <th>#</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Contact</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>admin</td>
                                        <td>admin@sports.iiitm.ac.in</td>
                                        <td>admin3467admin&</td>
                                        <td><button type="button" class="btn btn-info btn-sm"><a href="tel:-8978843077" class="text-light">Call</a></button></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Prasoon458</td>
                                        <td>secretary@sports.iiitm.ac.in</td>
                                        <td>prsect3754&Pra</td>
                                        <td><button type="button" class="btn btn-info btn-sm"><a href="tel:-8978843077" class="text-light">Call</a></button></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Rajjo345</td>
                                        <td>secretary@sports.iiitm.ac.in</td>
                                        <td>aysect8475&Ayu</td>
                                        <td><button type="button" class="btn btn-info btn-sm"><a href="tel:-8978843077" class="text-light">Call</a></button></td>
                                    </tr>
                                </tbody>
                            </table>

                            <!-- Pagination -->
                            <nav>
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            <span>&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link py-2 px-3">
                                        1
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                        2
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                        3
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            <span>&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- End of pagination -->
                        </div>
                        <div class="col-12 col-lg-12 col-xl-12">
                            <h3 class="text-muted text-center mb-3">Edit Post</h3>
                            <table class="table table-dark table-hover text-center">
                                <thead>
                                    <tr class="row text-muted">
                                        <th class="col-1 col-sm-1">#</th>
                                        <th class="col-3 col-sm-2">Heading</th>
                                        <th class="col-6 col-sm-7">Text</th>
                                        <th class="col-1 col-sm-1">Edit</th>
                                        <th class="col-1 col-sm-1">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="row">
                                        <td class="col-1 col-sm-1">1</td>
                                        <td class="col-3 col-sm-2">Urja</td>
                                        <td class="col-6 col-sm-7">URJA2K19 is set to begin from the 17th of November,2019. 
                                            The four houses have immersed themselves in the arens. As, 
                                            this year once again marks us for one of the best tournaments
                                            of the decade.  
                                        </td>
                                        <td class="col-1 col-sm-1"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit-post">Edit</button></i></td>
                                        <td class="col-1 col-sm-1"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-post">Delete</button></td>
                                    </tr>
                                    <tr class="row">
                                    <td class="col-1 col-sm-1">2</td>
                                        <td class="col-3 col-sm-2">Twaran</td>
                                        <td class="col-6 col-sm-7">TWARAN2K20 is set to begin from the 2nd of April,2020. 
                                            The four houses have immersed themselves in the arens. As, 
                                            this year once again marks us for one of the best tournaments
                                            of the decade.  
                                        </td>
                                        <td class="col-1 col-sm-1"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit-post">Edit</button></i></td>
                                        <td class="col-1 col-sm-1"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-post">Delete</button></td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- Pagination -->
                            <nav>
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            <span>&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link py-2 px-3">
                                        1
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                        2
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                        3
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            <span>&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- End of pagination -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Tables -->
    <!-- Modal -->
    <div class="modal fade" id="edit-post">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit the Post</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="post">
                        <input type="text" name="edit-post-text" size="40" maxlength="10">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end of modal -->
    <!-- Modal -->
    <div class="modal fade" id="delete-post">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Are you sure to Delete the post ?</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Press 'Delete' to delte the post</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Delete</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end of modal -->
    
    <!-- Progress / Create New Post -->
    
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-10 col-md-10 ml-auto">
                    <div class="row mb-4">
                        <div class="col-xl-6 col-12">
                        <h4>Create A New Post</h4>
                        </div>
                        <div class="col-xl-6 col-12">
                            <div class="bg-dark text-white p-4 rounded">
                                <h4 class="mb-5">Conversion Rate</h4>
                                <h6 class="mb-3">Google Chrome</h6>
                                <div class="progress mb-4" style="height: 20px">
                                    <div class="progress-bar progress-bar-striped font-weight-bold" style="width: 91%;">
                                        91% 
                                    </div>
                                </div>
                                <h6 class="mb-3">Mozilla Firefox</h6>
                                <div class="progress mb-4" style="height: 20px">
                                    <div class="progress-bar progress-bar-striped font-weight-bold bg-success" style="width:82%;">
                                        82% 
                                    </div>
                                </div>
                                <h6 class="mb-3">Safari</h6>
                                <div class="progress mb-4" style="height: 20px">
                                    <div class="progress-bar progress-bar-striped font-weight-bold bg-danger" style="width: 67%;">
                                        67% 
                                    </div>
                                </div>
                                <h6 class="mb-3">Microsoft Edge</h6>
                                <div class="progress mb-4" style="height: 20px">
                                    <div class="progress-bar progress-bar-striped font-weight-bold" style="width: 96%;">
                                        96% 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- End of Progress / Create New Post -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

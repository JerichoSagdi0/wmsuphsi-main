<?php

    //resume session here to fetch session values
    session_start();
    /*
        if user is not login then redirect to login page,
        this is to prevent users from accessing pages that requires
        authentication such as the dashboard
    */
    if (!isset($_SESSION['logged-in'])){
        header('location: ../home.php');
    }
    //if the above code is false then html below will be displayed

    require_once '../tools/variables.php';
    $page_title = 'Call for Actions | WMSU - Peace and Human Security Institute';
    $phsi_action = 'active';

    require_once '../includes/admin-header.php';
?>

<body>

    <?php require_once '../includes/admin-topnav.php'; ?>

    <div class="container-fluid">
        <div class="row">

            <?php require_once '../includes/admin-sidebar.php'; ?>

            <main class="col-md-9 ms-sm-auto col-lg-9 col-xl-10 p-md-4">
                <div class="w-100">
                    <h5 class="col-12 fw-bold mb-3 mt-3 mt-md-0">Call for Actions | WMSU - Peace and Human Security Institute</h5>
                    <ul class="nav nav-tabs application">

                        <li class="nav-item active" id="li-pending">
                            <a class="nav-link">Call for Actions<span class="counter" id="counter-all">3</span></a>
                        </li>

                        <li class="nav-item" id="add-account">
                            <a class="nav-link" id="add-new">Add New</a>
                        </li>
                    </ul>
                    <div class="table-responsive py-3 table-container">
                    <div class="row g-2 mb-2 ">
                        
                    <div id="MyButtons" class="d-flex mb-md-2 mb-lg-0 col-12 col-md-auto"></div>
                    
                    <div class="input-group search-keyword col-12 flex-lg-grow-1">
                        <input type="text" name="keyword" id="keyword" placeholder="Search Name" class="form-control">
                        <button class="btn btn-outline-secondary background-color-green" type="button"><i class="fas fa-search white"></i></button>
                    </div>
                </div>
                
                <table class="table table-hover col-12" id="table-pending" style="width: 100%;">
                <thead>
                    <tr>
                        <th scope="col">Action</th>
                        <th scope="col">Type</th>
                        <th scope="col">Thumbnail</th>
                        <th scope="col">Title</th>
                        <th scope="col">Details</th>
                    </tr>
                </thead>
                <tbody id="fetch"></tbody>
            </table>
        </div>
        
        <div id="edit-modal" class="modal"></div>

<div id="add-modal" class="admin-modal">
    <div class="admin-modal-content">
        <span class="close">&times;</span>
        <h3 class="admin-modal-title">CALL FOR ACTIONS</h3>
        <hr>
        <form id="addform" class="form-class" method="post" enctype="multipart/form-data">
            
            <label for="action_type" class="form-label">Call for Action | Type</label>
            <div class="input-group">
                <select name="action_type" id="action_type" required>
                    <option value="Call for Donations" >Call for Donations</option>
                    <option value="Call for Volunteers">Call for Volunteers</option>
                </select>
            </div>

            <label for="title" class="form-label">Title</label>
            <div class="input-group">
                <input class="form-control" type="text" name="title" id="title" required>
            </div>
            
            <label for="file">Upload Image</label>
            <div class="preview">
                <img id="file-preview">
            </div>
            
            <div class="input-group">
                <input type="file" name="fileupload" id="fileupload" accept="image/*" onchange="showPreview(event)" required>
            </div>

            <label for="details" class="form-label">Details</label>
            <div class="input-group">
                <textarea class="form-control" type="text" name="details" id="details" rows="4" cols="50" required> </textarea>
            </div>

            <div class="input-group">
                <input type="submit" id="submit" name="submit" value="Save Image" class="form-btn btn-primary">
                <input type="reset" id="btn-reset" name="btn-reset" hidden>
            </div>
        </form>
    </div>
</div>
</section>
<!--MISSION AND VISION END-->


<!-- Custom Js file link  -->
<script src="js/script.js"></script>    

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="../js/phsi_action.js"></script>



       
<?php
    require_once '../includes/admin-footer.php';
?>





    
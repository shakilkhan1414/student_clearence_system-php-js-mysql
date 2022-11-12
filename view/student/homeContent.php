<?php
    require_once "../../model/requestModel.php";
    session_start();

    $requests=getAllRequest();

    $myRequests=[];

    foreach ($requests as $request) {
        if($request['req_from']==$_SESSION['id']){
            array_push($myRequests, $request); 
        }
    }
    $myRequests=sizeof($myRequests);

?>

<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body d-flex flex-column align-items-start">
                <h5 class="card-title"><?=$myRequests?></h5>
                <p class="card-text">My Requests</p>
                <a onclick="myRequests()" class="btn btn-primary btn-sm">See all</a>
            </div>
        </div>
    </div>
</div>
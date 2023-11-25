
<?php
ob_start();
?>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">  Add USER </button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form action="insertUser.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label">username</label>
                        <input type="text" name='username' class="form-control" id="exampleInputEmail" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" name='email' class="form-control" id="exampleInputEmail1" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name='password' class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<table class="table">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody>
    <?php 
    while($User = $listUser->fetch_assoc()){
    ?>
    <tr>
        <th scope="row"><?=$User["UserID"]?></th>
        <td><?=$User["userame"]?></td>
        <td><?=$User["email"]?></td>
    </tr>
    <?php 
    }
    ?>
</table>
<?php 
$content = ob_get_clean();
include_once "HeaderVue.php";
?>
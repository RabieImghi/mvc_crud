
<?php
ob_start();
?>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">  Add USER </button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form action="index.php" method="post">
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
                    <input type="hidden" name="action" value='addUser'>
                    <button type="submit" name='submit' class="btn btn-primary">Add User</button>
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
            <th scope="col">Action</th>
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
        <td class='d-flex gap-3'>
            <div class="divv">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$User["UserID"]?>">  Update </button>
                <div class="modal fade" id="exampleModal<?=$User["UserID"]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <form action="index.php" method="post">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail" class="form-label">username</label>
                                        <input type="text" value='<?=$User["userame"]?>' name='username' class="form-control" id="exampleInputEmail" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="email" name='email' value='<?=$User["email"]?>' class="form-control" id="exampleInputEmail1" >
                                    </div>
                                    <input type="hidden" name='idUser' value='<?=$User["UserID"]?>'>
                                    <input type="hidden" name="action" value='updateUser'>
                                    <button type="submit" name='submit' class="btn btn-primary">Update User</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <form action="index.php" method='post'>
                <input type="hidden" name='idUser' value='<?=$User["UserID"]?>'>
                <input type="hidden" name="action" value='deletUser'>
                <button type="submit" name='submit' class="btn btn-primary">Delet User</button>
            </form>
        </td>
    </tr>
    <?php 
    }
    ?>
</table>
<?php 
$content = ob_get_clean();
include_once "HeaderVue.php";
?>

<?php
ob_start();
?>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">  Add Class </button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form action="index.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label">Classe Name</label>
                        <input type="text" name='classename' class="form-control" id="exampleInputEmail" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Level</label>
                        <input type="text" name='level' class="form-control" id="exampleInputEmail1" >
                    </div>
                    <input type="hidden" name="action" value='addClass'>
                    <button type="submit" name='submit' class="btn btn-primary">Add Class</button>
                </form>
            </div>
        </div>
    </div>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Claas Name</th>
            <th scope="col">Class Level</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php 
    while($Clsse = $listClasse->fetch_assoc()){
    ?>
    <tr>
        <th scope="row"><?=$Clsse["ClassID"]?></th>
        <td><?=$Clsse["ClassName"]?></td>
        <td><?=$Clsse["ClasseLevel"]?></td>
        <td class='d-flex gap-3'>
            <div class="divv">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$Clsse["ClassID"]?>">  Update </button>
                <div class="modal fade" id="exampleModal<?=$Clsse["ClassID"]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <form action="index.php" method="post">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail" class="form-label">Classe Name</label>
                                        <input type="text" value='<?=$Clsse["ClassName"]?>' name='classename' class="form-control" id="exampleInputEmail" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Level</label>
                                        <input type="email" name='email' value='<?=$Clsse["ClasseLevel"]?>' class="form-control" id="exampleInputEmail1" >
                                    </div>
                                    <input type="hidden" name='idUser' value='<?=$Clsse["ClassID"]?>'>
                                    <input type="hidden" name="action" value='updateClass'>
                                    <button type="submit" name='submit' class="btn btn-primary">Update User</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <form action="index.php" method='post'>
                <input type="hidden" name='idClass' value='<?=$Clsse["ClassID"]?>'>
                <input type="hidden" name="action" value='deletClass'>
                <button type="submit" name='submit' class="btn btn-primary">Delet Class</button>
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
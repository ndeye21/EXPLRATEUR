<tr>
          
    <td><?php echo $no++ ?></td>
        <td>
        <a href="#">
            <div style="width: 100%; height: 100%; background-color: white">
            <?php echo $th ?>
            </div>
        </a>
        </td>
    
    <td>
    <div>
        <a href="?edit=<?php echo $th ?>&p=edit" title="editer"><img src="images/edit.png" alt="del" width="30" height="30"> </a>
        </div>
        <div>
        <a href="?rename=<?php echo $th ?>&p=rename" title="renommer/deplacer"><img src="images/rename.png" alt="del" width="30" height="30"></a>
        </div>
        <div>
        <a href="?copy=<?php echo $th ?>&p=copy" title="copier"><img src="images/copy.png" alt="del" width="30" height="30"></a>
        </div>
        <div>
        <a href="?delete=<?php echo $th ?>" title="supprimer" ><img src="images/delete.png" alt="del" width="30" height="30"></a>
        </div>
    </td>
    </tr>














    <div class="cadre">
            <div class="row">
                <div class="col-md-1">
                    <a href="" >
                        <img src="public/images/back.png" width="50" height="50" alt="">
                    </a>
                </div>
                <div class="col-md-5 col-md-offset-2"></div>
                <div class="col-md-1">
                    <a href="">
                        <img src="public/images/delete.png" width="50" height="50" alt="">
                    </a>
                </div>
                <div class="col-md-1">
                    <a href="">
                        <img src="public/images/rename.png" width="50" height="50" alt="">
                    </a>
                </div>
                <div class="col-md-1">
                    <a href="">
                        <img src="public/images/new_folder.png" width="50" height="50" alt="">
                    </a>
                </div>
                <div class="col-md-1">
                    <a href="">
                        <img src="public/images/download.png" width="50" height="50" alt="">
                    </a>
                </div>
                <div class="col-md-1">
                    <a href="">
                        <img src="public/images/upload.png" width="50" height="50" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="cadre1"> 
            <div class="row container">
                <?php
                    require_once 'post.php';
                    show_folders("C:/wamp/www/");
                    
                    $nom = "ALSO";
                ?>
            </div>
        </div>
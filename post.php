<?php

// telecharger
function download_file(){

    $doc = !empty($_GET['doc']) ? trim($_GET['doc']) : '';
    if(!empty($doc) && file_exists($doc)) {

        $mime = 'application/octet-stream';
        $taille = filesize($doc);

        // Téléchargement du fichier
        header("Content-disposition: attachment; filename=\"$doc\"");
        header("Content-Type: $mime");
        header("Content-Transfer-Encoding: binary");
        header("Content-Length: $taille");
        header("Pragma: no-cache");
        header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
        header("Expires: 0");
        readfile($doc);
        
    //}

}
}
/**
 * show folders and files
 */
function show_folders($root_folder) {
    $folder = "";
    if(isset($_GET['folder'])) {
        $folder = $root_folder . '' . $_GET['folder'] . "/";
    }
    else {
        $folder = $root_folder;
    }

    test($folder, $root_folder);  
   
                     
}

function test($folder_path, $root_folder) {
    if($dossier = opendir($folder_path)) {
        ?>

        <div style="width: 100%; background-color: #c1f8f5; margin-bottom: 10px">
            <?php
            
                if($folder_path == $root_folder) {
                    echo 'root/';
                }
                else {
                    echo str_replace($root_folder,"root/", $folder_path);
                }

            ?>
        </div>

        <?php
        

        while(false !== $fichier = readdir($dossier)) {
            if($fichier != '.' && $fichier != "..") {
                ?>

                <tr style="width: 100%">

                <?php
                if(is_dir($folder_path . '' . $fichier)) {
                    if(isset($_GET['folder'])) {
                        ?>
                        <td class="file_zone">
                            <a href="index.php?folder=<?= $_GET['folder']  . '/' . $fichier ?>" class="folder_style">
                                <img src="public/images/icone_dossier.png" alt="" width="30" height="30">
                                <p style="font-size: 14px;"><?= $fichier ?></p>
                            </a>
                        </td>
                        <td class="action_btn">
                            <a href="actions/action.php?action=telecharger" title="telecharger">
                                <img src="public/images/download.png" alt="" width="30" height="30">
                            </a>
                            <a href="actions/action.php?action=renommer" title="Renommer">
                                <img src="public/images/rename.png" alt="" width="30" height="30">
                            </a>
                            <a href="actions/action.php?action=copier" title="Copier">
                                <img src="public/images/copy.png" alt="" width="30" height="30">
                            </a>
                            <a href="actions/action.php?action=supprimer" title="Supprimer">
                                <img src="public/images/delete.png" alt="" width="30" height="30">
                            </a>
                        </td>
                        <?php
                    }

                    else {
                        ?>
                            <td>
                                <a href="index.php?folder=<?= $fichier ?>">
                                    <img src="public/images/icone_dossier.png" alt="" width="30" height="30">
                                    <p style="font-size: 14px;"><?= $fichier ?></p>
                                </a>
                            </td>
                            <td class="action_btn">
                          
                                <a href="actions/action.php?action=telecharger" title="telecharger">
                                    <img src="public/images/download.png" alt="" width="30" height="30">
                                </a>
                            
                                <a href="actions/action.php?action=renommer" title="Renommer">
                                    <img src="public/images/rename.png" alt="" width="30" height="30">
                                </a>
                                <a href="actions/action.php?action=copier" title="Copier">
                                    <img src="public/images/copy.png" alt="" width="30" height="30">
                                </a>
                                <a href="actions/action.php?action=supprimer" title="Supprimer">
                                    <img src="public/images/delete.png" alt="" width="30" height="30">
                                </a>
                            </td>
                        <?php
                    }
                }
                else {
                    ?>
                        <td>
                            <img src="public/images/file.png" alt="" width="40" height="40">
                            <p style="font-size: 14px;"><?= $fichier ?></p>
                        </td>
                        <td class="action_btn">
                            <a href="actions/action.php?action=telecharger&doc=<?="C:/wamp64/www/"?>" title="telecharger">
                                <img src="public/images/download.png" alt="" width="30" height="30">
                            </a>
                            <a href="actions/action.php?action=renommer" title="Renommer">
                                <img src="public/images/rename.png" alt="" width="30" height="30">
                            </a>
                            <a href="actions/action.php?action=copier" title="Copier">
                                <img src="public/images/copy.png" alt="" width="30" height="30">
                            </a>
                            <a href="actions/action.php?action=supprimer" title="Supprimer">
                                <img src="public/images/delete.png" alt="" width="30" height="30">
                            </a>
                        </td>
                    <?php  
                    //echo '<li>"' . $fichier . '"</li>';
                }
                ?>

                </tr>
                
                <?php
                
            }
        }
        closedir($dossier);
    }
}

?>

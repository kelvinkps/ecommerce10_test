<?php 
session_start();
function mostraMensagem(){
    if(isset($_SESSION["danger"])) {
        ?>
        <div class="alert alert-danger">
                    <span><?= $_SESSION["danger"]?></span>
                    <button class="close" data-close="alert"></button>
                    
                </div>
        <?php
                unset($_SESSION["danger"]);
             }
         }


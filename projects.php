<!DOCTYPE html>

<html>
    
    <?php include('./inc/app-heading.php');?>
    
    <body>
        <div>
            <div class="ui borderless main menu">
                <?php include('./inc/app-nav.php');?>
            </div>  

            <div class="ui main text container">
                <h1 class="ui header">Projects</h1>
                <p>This example shows how to use lazy loaded images, a sticky menu, and a simple text container</p>
            </div>
        
        </div>

        <script src="./scripts/nav.js?<?php echo time(); ?>"></script>
        <?php //include('./inc/app-scripts.php');?>
    </body>

</html>
<!DOCTYPE html>

<html>
    
    <?php include('./inc/app-meta.php');?>
    
    <body>
        <header>
            <div class="nav">
                <?php include('./inc/app-nav.php');?>
            </div>

            <div class="container">
                <h1 class="header">About</h1>
                <div>What you talkin' bout?</div>
                <div class="split"> </div>
            </div>
        </header>

        <section>
            <div class="container">
                <p>
                    Hello Hello! My Name is the famous! I am computer science and digiatl media studies
                    major. I play in two ensembles on campus and assist in others when I have time
                    or when ensembles need extra people. I play trumpet as a musical instrument. (Well
                    what else would you do with it? - On second thought, don't answer that, I have seen American Pie).
                    I draw when I have free time so not very often. I work in two research labs. One in the 
                    ROC HCI lab in Wegmans under the guidance of Ehsan Hoque. I also work in the digial scholarschip lab
                    in Rush Reeves library near the rare bare sections. 
                </p>

                <p>
                    I am a senior at the University of Rochester, aiming to go to graduate school. I would
                    like to attend a PhD programme, preferably in the UK. My dream university is U.C.L., University
                    College of London. They do some really cool work in digitzation and gamification. I would like to work 
                    under the guidance of Diane Carr.
                </p>

                <p>
                    Currently I am completeing a capstone in Digital media studies. It is a two 
                    semester process with the first semester being about ideation and forming groups.
                    The second semester will be really hammering down the actual code for the project. 
                    Not sure what I plan to do but I try to make it something grand that helps me get into 
                    gradute school! I'll give it my all and am really looking forward to working 
                    with the cool people in my capstone project. I have known them since my first year 
                    of undergraduate or at least most of them. They are all really amazing artist, coders,
                    marketers, and every other skill you can imagine.
                </p>
                
                <img class="ui medium right floated image" data-src="assets/images/wireframe/square-image.png">
                <div class="split"> </div>
            </div>
        </section>

        <footer>
            <?php include('./inc/app-footer.php'); ?>
        </footer>

        <script src="./scripts/nav.js?<?php echo time(); ?>"></script>
        <?php //include('./inc/app-scripts.php');?>
    </body>

</html>
<?php
    include 'header.php';
    include 'vars.php';
    ?>
    <main>
        <section class="grid-central">
            <div class="skills">
                <h2 class="main-blocks-titles"><span class="first-letter">C</span>ompétences</h2>
                <ul>
                <?php
                include 'vars.php';
                foreach ($skillsFR as $skill) {
                    echo ("<li class='skills-items'>$skill</li>");
                }
                ?>
                </ul>
            </div>
            <div class="experiences">
                <div class="experiences-header">
                <p></p>
                <h2 class="main-blocks-titles"><span class="first-letter">E</span>xpériences</h2>
                <p><i class='fas fa-plus experience-button plus-buttons'></i></p>
                </div>
                <ul>
                <?php
                for ($i=0;$i<count($experiencesFR);$i++) {
                    echo ("<li class='experiences-items'>");
                    echo ("$experiencesFR[$i]</li>");
                    echo ("<p class='experience-details'>$experienceDetailsFR[$i]</p>");
                };
                ?>
                </ul>
            </div>
            <div class="hobbies">
                <h2 class="main-blocks-titles">
                    <span class="first-letter">L</span>oisirs
                </h2>
                <ul>
                <?php
                foreach ($hobbiesFR as $hobbie) {
                    echo ("<li class='hobbies-items'>$hobbie</li>");
                };
                ?>
                </ul>

            </div>
            <div class="common-questions-container">
                <h2 class="main-blocks-titles">
                    <span class="first-letter">Q</span>uestions fréquentes
                </h2>
                <div class="question-answer-block">
                    <?php
                for ($i=0;$i<count($questionsFR);$i++) {
                    echo ("<div class='question-block$i'>");
                    echo ("<h3 class='questions question$i'>$questionsFR[$i]</h3>");
                    echo ("<i class='fas fa-minus fa-plus plus-buttons button$i questions-buttons'></i>");
                    echo ("</div>");
                    echo ("<p class='answers answer$i'>$answersFR[$i]</p>");
                };
                ?>
                </div>
                <div class='contact-container'>
                    <i class="fas fa-envelope"></i><a class="contact-btn" href="form.php">Contactez moi</a><i class="fas fa-envelope"></i>
                </div>
            </div>
            
       
        </section>
        <?php 
    include 'partie3Helene.php'
    ?>
    </main>
    <?php
    include 'footer.php';
    ?>
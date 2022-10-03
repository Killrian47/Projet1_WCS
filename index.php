    <?php
    include 'header.php'
    ?>
    <main>
        <section class="grid-central">
            <div class="skills">
                <h2 class="main-blocks-titles"><span class="first-letter">S</span>kills</h2>
                <ul>
                <?php
                include 'vars.php';
                foreach ($skillsEN as $skill) {
                    echo ("<li class='skills-items'>$skill</li>");
                }
                ?>
                </ul>
            </div>
            <div class="experiences">
                <div class="experiences-header">
                <p></p>
                <h2 class="main-blocks-titles"><span class="first-letter">E</span>xperiences</h2>
                <p><i class='fas fa-plus experience-button plus-buttons'></i></p>
                </div>
                <ul>
                <?php
                for ($i=0;$i<count($experiencesEN);$i++) {
                    echo ("<li class='experiences-items'>");
                    echo ("$experiencesEN[$i]</li>");
                    echo ("<p class='experience-details'>$experienceDetailsEN[$i]</p>");
                };
                ?>
                </ul>
            </div>
            <div class="hobbies">
                <h2 class="main-blocks-titles">
                    <span class="first-letter">H</span>obbies
                </h2>
                <ul>
                <?php
                foreach ($hobbiesEN as $hobbie) {
                    echo ("<li class='hobbies-items'>$hobbie</li>");
                };
                ?>
                </ul>

            </div>
            <div class="common-questions-container">
                <h2 class="main-blocks-titles">
                    <span class="first-letter">C</span>ommon questions
                </h2>
                <div class="question-answer-block">
                    <?php
                for ($i=0;$i<count($questionsEN);$i++) {
                    echo ("<div class='question-block$i'>");
                    echo ("<h3 class='questions question$i'>$questionsEN[$i]</h3>");
                    echo ("<i class='fas fa-minus fa-plus plus-buttons button$i questions-buttons'></i>");
                    echo ("</div>");
                    echo ("<p class='answers answer$i'>$answersEN[$i]</p>");
                };
                ?>
                </div>
                <a class="contact-btn" href="">Contact me</a>
            </div>
            
       
        </section>
        <?php 
    include 'partie3Helene.php'
    ?>
    </main>
    <?php
    include 'footer.php';
    ?>
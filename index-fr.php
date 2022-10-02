<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">

    <title>Curriculum Vitae de Superman</title>
</head>
<body>
    <?php
    include 'header.php'
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
                <h2 class="main-blocks-titles"><span class="first-letter">E</span>xpériences</h2>
                <ul>
                <?php
                for ($i=0;$i<count($experiencesFR);$i++) {
                    echo ("<li class='experiences-items'>");
                    echo ("<span class='hovertext' data-hover='$textHoverFR[$i]'>");
                    echo ("$experiencesFR[$i]</span></li>");
                }
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
                    echo ("<h3 class='question$i'>$questionsFR[$i]</h3>");
                    echo ("<button class='button$i'>+</button>");
                    echo ("</div>");
                    echo ("<p class='answer$i'>$answersFR[$i]</p>");
                };
                ?>
                </div>
                <a class="contact-btn" href="">Contactez moi</a>
            </div>
            
       
        </section>
        <?php 
    include 'partie3Helene.php'
    ?>
    </main>
    <script src="script.js"></script>
</body>
</html>
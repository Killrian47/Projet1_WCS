<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">

    <title>Superman Curriculum Vitae</title>
</head>
<body>
    <div class='switch-language'>BOUTON</div>
    <main>
        <section class="grid-central">
            <div class="skills">
                <h2><span class="first-letter">S</span>kills</h2>
                <ul>
                <?php
                include 'vars.php';
                foreach ($skills as $skill) {
                    echo ("<li class='skills-items'>$skill</li>");
                }
                ?>
                </ul>
            </div>
            <div class="experiences">
                <h2><span class="first-letter">E</span>xperience</h2>
                <ul>
                <?php
                foreach ($experiences as $experience) {
                    echo ("<li class='experiences-items'>$experience</li>");
                }
                ?>
                </ul>
            </div>
            <div class="hobbies">
                <h2>
                    <span class="first-letter">H</span>obbies
                </h2>
                <ul>
                <?php
                foreach ($hobbies_en as $hobbie) {
                    echo ("<li class='hobbies-en-items'>$hobbie</li>");
                };
                foreach($hobbies_fr as $hobbie) {
                    echo ("<li class='hobbies-fr-items'>$hobbie</li>");
                };
                ?>
                </ul>

            </div>
            <div class="common-questions-container">
                <h2>
                    <span class="first-letter">C</span>ommon questions
                </h2>
                <div class="question-answer-block">
                <?php
                for ($i=0;$i<count($questions_fr);$i++) {
                    echo ("<div class='question-block$i'>");
                    echo ("<h3 class='question$i'>$questions_fr[$i]</h3>");
                    echo ("<p class='button$i'> + </p>");
                    echo ("</div>");
                    echo ("<p class='answer$i'>$answers_fr[$i]</p>");
                    };
                ?>
                </div>
                <a class="contact-btn" href="">Contact me</a>
            </div>

        </section>
    </main>
    <script src="script.js"></script>
</body>
</html>
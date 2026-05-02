<!DOCTYPE html>
<html lang="<?php echo Theme::lang(); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo Theme::metaTags('title'); ?>
    <?php echo Theme::metaTags('description'); ?>
    <?php echo Theme::css('css/style.css'); ?>
</head>

<body>

    <nav>
        <a href="javascript:history.back()" class="back-button">Tilbake</a>
    </nav>

    <main class="container">

        <section class="hero">
            <p class="hero-eyebrow"></p>
            <h1><?php echo $page->title(); ?></h1>
            <?php if ($page->description()): ?>
                <p class="hero-sub"><?php echo $page->description(); ?></p>
            <?php endif; ?>
            <p class="hero-meta"></p>
        </section>

        <article>
            <?php echo $page->content(); ?>
        </article>
    </main>

    <footer>
        <p>&copy; 2026 William Berge Grønsberg | <a href="/kilder.html">Kilder</a></p>
    </footer>

    <button id="a11y-btn" onclick="toggleA11y()">Aa&nbsp; Tilgjengelighet</button>

    <div id="a11y-panel">
        <div class="a11y-title">Skrifttype</div>
        <button class="a11y-option" id="opt-normal" onclick="setFont('normal')">Standard (Georgia)</button>
        <button class="a11y-option dyslexic-option" id="opt-dyslexic" onclick="setFont('dyslexic')">OpenDyslexic</button>
        <button class="a11y-option comic-option" id="opt-comic" onclick="setFont('comic')">Comic Sans</button>
    </div>

    <?php echo Theme::js('js/a11y.js'); ?>

</body>
</html>

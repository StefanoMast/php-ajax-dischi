<main>
    <section class="container">
        
            <?php foreach($database as $element) { ?>
                <div class="container-card">
                    <img src="<?php echo $element["poster"]; ?>" alt="<?php echo $element["title"] ?>" />
                    <h2><?php echo $element["title"]; ?></h2>
                    <h3><?php echo $element["author"]; ?></h3>
                    <h4><?php echo $element["year"]; ?></h4>
                </div>
            <?php } ?>
        
    </section>
</main>
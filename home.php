<main>
    <section class="container">
        <div class="container-card">
            <?php foreach($database as $database) { ?>
                <h2><?php echo $database["poster"]; ?></h2>
                <h2><?php echo $database["title"]; ?></h2>
                <h3><?php echo $database["author"]; ?></h3>
                <h4><?php echo $database["year"]; ?></h4>
            <?php } ?>
        </div>
    </section>
</main>
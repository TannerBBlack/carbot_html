<?php include 'header.php'; ?>
<main>
    <div class="your-class">
        <picture><source media="(max-width: 450px" srcset="<?php echo get_template_directory_uri(); ?>/images/cruise1small.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/cruise1.jpg"></picture>
        <picture><source media="(max-width: 450px" srcset="<?php echo get_template_directory_uri(); ?>/images/cruise2small.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/cruise2.jpg"></picture>
        <picture><source media="(max-width: 450px" srcset="<?php echo get_template_directory_uri(); ?>/images/carnival-magic-ship-aerial-featsmall.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/carnival-magic-ship-aerial-feat.jpg"></picture>
        <picture><source media="(max-width: 450px" srcset="<?php echo get_template_directory_uri(); ?>/images/cruise-ship-2small.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/cruise-ship-2.jpg"></picture>
    </div>

    <h2>Recent Blog Posts</h2>

    <div class="blog-posts">
        <div class="card column small-6 medium-4 large-3">
            <figure>
                <a href="#"><img src="images/room.jpg" alt="beach"></a>
            </figure>
            <p class="title">Find the best vacation!</p>
        </div>
        <div class="card column small-6 medium-4 large-3">
            <figure>
                <a href="#"><img src="images/fruit.jpg" alt="beach"></a>
            </figure>
            <p class="title">Try these top local food!</p>
        </div>
        <div class="card column small-6 medium-4 large-3">
            <div class="post-title"></div>
            <figure>
                <a href="#"><img src="images/restraunt.jpg" alt="beach"></a>
            </figure>
            <p class="title">Pick the best restraunts</p>
        </div>
        <div class="card column small-6 medium-4 large-3">
            <figure>
                <a href="#"><img src="images/beach.jpg" alt="beach"></a>
            </figure>
            <p class="title">Best beach in the caribean</p>
        </div>
    </div>
</main>
<?php include 'footer.php'; ?>
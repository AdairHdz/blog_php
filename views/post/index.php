<?php
require_once "views/layout/header.php";
?>

<section class="banner">
    <div class="banner_text">
        <p class="banner_title">Mr Yum blog</p>
        <p class="banner_message">
            Get business insights, receive industry tips, stories from
            venue owners, new product information, and more.
        </p>
    </div>
</section>
<div class="container">
    <section>
        <p class="articles_header">Latest articles</p>
        <nav class="articles_nav">
            <ul class="articles_ul">
                <li class="articles_li"><a class="articles_link" href="">Operations</a></li>
                <li class="articles_li"><a class="articles_link" href="">Marketing</a></li>
                <li class="articles_li"><a class="articles_link" href="">News</a></li>
                <li class="articles_li"><a class="articles_link" href="">Insights</a></li>
            </ul>
        </nav>
        <div class="articles_cards_grid">
            <?php foreach ($this->posts as $post) : ?>
                <a class="card_link" href="<?=constant('URL')?>/post/index?post_id=<?=$post['id']?>">
                    <div class="card">
                        <figure class="card_image-container">                            
                            <img class="card_image" src="<?= constant('URL') ?>/<?=$post['cover_photo']?>" alt="">
                        </figure>
                        <div class="card_body">
                            <p class="card_title">
                                <?=$post["title"]?>
                            </p>
                            <p class="card_text">
                                <?=$post["introduction"]?>
                            </p>
                        </div>
                        <footer class="card_footer">
                            <span class="card_category">News</span>
                            <span class="card_duration"><i class="far fa-clock"></i> <?=$post["average_time"]?> min read</span>
                        </footer>
                    </div>
                </a>
            <?php endforeach ?>
        </div>
        <button class="btn-transparent">
            Next
        </button>
    </section>
</div>
<?php
require_once "views/layout/footer.php";
?>
<?php
require_once "views/layout/header.php";
?>
<?php if (isset($_SESSION["comment_success_message"])) : ?>
    <div class="alert">
        <p class="alert-title">Comentario registrado</p>
        <p class="alert-text">
            <?= $_SESSION["comment_success_message"] ?>
        </p>
    </div>
    <?php unset($_SESSION["comment_success_message"]); ?>
<?php endif ?>
<section>
    <header class="post_header">
        <img src="<?= constant('URL') ?>/<?= $this->post['cover_photo'] ?>" alt="" class="post_header-image">
        <div class="post_text">
            <p class="post_title">
                <?= $this->post["title"] ?>
            </p>
            <p class="post_author">Por Adair Hernández</p>
        </div>
    </header>
    <div class="container">
        <p class="post_body">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum consequatur, eum quam animi ratione pariatur temporibus magni quibusdam deserunt eligendi in debitis, quis reprehenderit voluptates nemo perspiciatis vero id molestias?
            Iusto dolore dolor, architecto quaerat recusandae numquam tenetur sunt deleniti dolorum minus fugiat sint. Est quidem expedita doloremque! Voluptas atque beatae, expedita suscipit corporis rem quibusdam reprehenderit nisi libero harum?
            Veniam quasi corrupti, iure, ab labore iusto neque rerum architecto reiciendis sed animi nihil enim eligendi deserunt tempore quas libero exercitationem amet sapiente officia. Esse harum et exercitationem non facilis.
            Laboriosam, accusantium nobis! Hic asperiores voluptate perferendis excepturi aspernatur, iusto atque qui adipisci rerum quasi maiores reprehenderit ex provident sapiente incidunt consequuntur? Tenetur officia atque consequuntur, modi commodi sit eligendi!
            Magnam laborum error reprehenderit modi necessitatibus, incidunt illum fugit excepturi voluptatibus tempore nesciunt? Saepe mollitia quia libero sunt harum, ducimus expedita provident rem perferendis neque cum nostrum sed a maiores!
            Omnis magnam voluptatibus ducimus unde, voluptates asperiores quidem itaque nam, dignissimos ab tempora nostrum accusamus reprehenderit quibusdam nulla voluptatum incidunt. Debitis corrupti ipsam perferendis sapiente atque quae consequuntur laudantium voluptatibus?
            Rerum corrupti ullam unde aliquam. Dolores labore debitis, cupiditate non, ipsam ipsum quaerat voluptatibus laudantium asperiores assumenda eius sed inventore soluta dolor nostrum, laborum sint! Numquam at nostrum rerum voluptate!
            Porro totam consequuntur dolorum necessitatibus molestias distinctio sint quia, quae non iste dignissimos deserunt voluptatum neque debitis consectetur fugit magnam repudiandae quos corrupti saepe! Enim quas ipsam eligendi natus pariatur.
            Blanditiis iure sint reiciendis quibusdam nobis recusandae, ducimus eum ullam vel, atque magnam? Ratione necessitatibus sunt minima odit inventore excepturi architecto, vero repellendus, doloribus dolorem unde accusantium nobis eius. Repellat!
            Libero vero minus nulla soluta! Nostrum eos esse optio laudantium nemo illum impedit, quia ex ad, a quisquam voluptates? Esse eius modi veritatis ut nobis quasi numquam voluptates quae perferendis!
        </p>
    </div>
</section>
<hr class="separator">
<section class="comments">
    <div class="container">
        <header class="comments_header">
            <p class="comments_header-title">Comentarios</p>
        </header>        
        <form action="<?= constant('URL') ?>/post/index" method="GET">
            <input type="hidden" name="post_id" value="<?=$_GET['post_id']?>">
            <label class="comments_form_input-label" for="title">Ver</label>
            <div class="comments_form_select-group">
                <select class="comments_form_input select" name="comment-order" id="commentOrder">
                    <option value="DESC">Más recientes</option>
                    <option value="ASC">Más antiguos</option>
                </select>
                <button type="submit" class="button">Buscar</button>
            </div>
        </form>
        <form action="<?= constant('URL') ?>/post/store_comment?post_id=<?= $_GET["post_id"] ?>" method="POST" class="comments_form">
            <div class="comments_form_input-group">
                <label class="comments_form_input-label" for="title">Título</label>
                <input class="comments_form_input" type="text" placeholder="Título del comentario" name="title" id="title">
            </div>
            <div class="comments_form_input-group">
                <label class="comments_form_input-label" for="comment">Comentario</label>
                <textarea class="comments_form_input" cols="10" rows="3" placeholder="Escriba su comentario aquí" name="comment" id="comment"></textarea>
            </div>
            <button class="button" type="submit">Enviar</button>
        </form>
        <div class="container comment_container">
            <?php foreach ($this->comments as $comment) : ?>
                <div class="comment">
                    <header class="comment_header">
                        <p class="comment_title">
                            <?= $comment["title"]; ?>
                        </p>
                        <p class="comment_date"><?= $comment["comment_date"]; ?></p>
                    </header>
                    <p class="comment_text">
                        <?= $comment["comment"]; ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php
require_once "views/layout/footer.php";
?>
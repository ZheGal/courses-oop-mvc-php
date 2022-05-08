<?php require APPROOT . '/views/inc/header.php'; ?>
    <h1>Hello from home page!</h1>
    <?php if (!empty($data['posts'])): ?>
        <ul>
            <?php foreach($data['posts'] as $post):?>
                <li><?=$post->title?></li>
            <?php endforeach;?>
        </ul>
    <?php endif;?>
<?php require APPROOT . '/views/inc/footer.php'; ?>
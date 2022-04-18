<?php $pager->setSurroundCount(2) ?>

<nav class="navigation pagination">
    <div class="nav-links">
        <!-- hasPrevious -->
        <?php if ($pager->hasPrevious()) : ?>
        <a href="<?= $pager->getPrevious() ?>" class="page-numbers">Previous</a>
        <?php endif ?>
        <!-- link -->
        <?php foreach ($pager->links() as $link) : ?>
        <a href="<?= $link['uri'] ?>"
            class="page-numbers <?= $link['active'] ? ' current' : '' ?>"><?= $link['title'] ?></a>
        <?php endforeach ?>
        <!-- hasNext -->
        <?php if ($pager->hasNext()) : ?>
        <a href="<?= $pager->getNext() ?>" class="page-numbers">Next</a>
        <?php endif ?>
    </div>
</nav>
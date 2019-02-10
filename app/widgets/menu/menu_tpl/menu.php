<li>
    <a href="?id=<?=$id;?>"> <?=$category['title'];?> </a>
    <?php if (isset($category['childs'])):?>
    <ul>
        <?= $this->getMenutml($category['childs']);?>
    </ul>
    <?php endif; ?>
</li>


<?php foreach ($list as $item) : ?>

    <h1>
        <a href="<?php echo Yii::$app->urlManager->createUrl(['test/view', 'id' => $item['id']]); ?>">
            <?php echo $item['title']; ?>
        </a>
    </h1>
    <p><?php echo $item['content']; ?></p>

    <hr>

<?php endforeach;?>

<h3>For counting quantity of news <a href=<?php echo Yii::$app->urlManager->createUrl('test/quantity')?>>Push here!</a></h3>

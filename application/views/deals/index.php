<div id="slider">
    <ul>
        <?php foreach ($deals as $key => $deal) : ?>
            <?php if ($key > 0) :
                $visible = 'display:none';
            else :
                $visible = 'display:block';
            endif; ?>
            <li class="single_deal" style='<?=$visible?>;'>
                <h1><?=$deal->title;?></h1>
                <p><?=$deal->description;?></p>
                <h2><?=$deal->business_name;?></h2>
            </li>
        <?php endforeach; ?>
    </ul>
</div><!-- #slider -->
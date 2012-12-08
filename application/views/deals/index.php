<?php //var_dump($deals); ?>
<div id="slider">
    <ul>
        <?php foreach ($deals as $key => $deal) : ?>
            <?php if ($key > 0) :
                $visible = 'display:none';
            else :
                $visible = 'display:block';
            endif; ?>
            <li class="single_deal" style='<?=$visible?>;'>
                <h1><?=$deal->business_name;?></h1>
                <h2><?=$deal->title;?></h2>
                <p><?=$deal->description;?></p>
                <p><?=$deal->address_1;?></p>
                <p><?=$deal->address_2;?></p>
                <p><?=$deal->city;?></p>
                <p><?=$deal->state;?></p>
                <p><?=$deal->zip_code;?></p>
                <p><?=$deal->phone;?></p>
                <div class="map">
                    <?php if(isset($deal->map['map'])) :
                        echo $deal->map['map']['js'];
                        echo $deal->map['map']['html'];
                    endif; ?>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</div><!-- #slider -->
<?php //var_dump($deals); ?>
<div id="single_deal_<?=$deals[0]->id?>" class="single_view">
    <?php foreach ($deals as $key => $deal) : ?>
        <div class="single_deal deal">
            <img class="spot12" src="<?=site_url();?>img/12.12.12-spot.png">
            <h1><?=$deal->business_name;?></h1>
            <h2><?=$deal->title;?></h2>
            <p class="description"><?=$deal->description;?></p>

            <?php if ($deal->address_1) : ?>
                <address>
                  <div class="street"><?=$deal->address_1;?><?php if($deal->address_2) : echo ', '.$deal->address_2; endif;?></div>
                  <div class="state"><?=$deal->city;?>, <?=$deal->state;?>  <?=$deal->zip_code;?></div>
                  <?php if(isset($deal->phone_formatted)) : ?>
                    <div class="telnum"><a href="<?='tel:'.$deal->phone;?>"><?=$deal->phone_formatted;?></a></div>
                  <?php endif; ?>
               </address>
           <?php endif; ?>
            <div class="map cf">
                <?php if(isset($deal->map['map'])) :
                    echo $deal->map['map']['js'];
                    echo $deal->map['map']['html'];
                endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
    <footer id="deal_footer" class="indent">
        <a class="minimal-indent" href="<?=site_url()?>">See the full list</a>
    </footer>
</div><!-- #slider -->
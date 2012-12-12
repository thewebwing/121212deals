<?php //var_dump($deals); ?>
<div id="container">
    <?php foreach ($deals as $key => $deal) : ?>
        <div class="deal <?=$deal->tags;?>">
            <h1><?=anchor("deals/single/$deal->id", $deal->business_name);?></h1>
            <h2><?=$deal->title;?></h2>
            <p><?=$deal->description;?></p>

            <?php if ($deal->address_1) : ?>
                <address>
                  <a class="cupid-green" href="<?=site_url().'deals/single/'.$deal->id;?>">Map</a>
                  <div class="cb street"><?=$deal->address_1;?><?php if($deal->address_2) : echo ', '.$deal->address_2; endif;?></div>
                  <div class="state"><?=$deal->city;?>, <?=$deal->state;?>  <?=$deal->zip_code;?></div>
                  <div class="telnum"><a href="<?='tel:'.$deal->phone;?>"><?=$deal->phone_formatted;?></a></div>
               </address>
           <?php endif; ?>
        </div>
    <?php endforeach; ?>
    <div id="submit_deal_box" class="deal single_deal_submit">
    <img class="spot12" src="<?=site_url();?>img/12.12.12-spot.png">
        <h1>Don't see your deal here?</h1>
        <p> Submit one below and spread the word!</p>
        <div class="information">
            <div class="indent"><a href="<?=site_url()?>deals/submit" class="minimal-indent">Submit A Deal</a></div>
        </div>
    </div>
</div><!-- #slider -->
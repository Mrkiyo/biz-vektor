<?php global $options_bizvektor; ?>
<div class="optionNav" style="display:none;">
<ul>
    <li id="btn_design"><a href="#design"><?php echo _x( 'Design', 'BizVektor option tab label', 'biz-vektor' ); ?></a></li>
    <li id="btn_contactInfo"><a href="#contactInfo"><?php echo _x( 'Contact', 'BizVektor option tab label', 'biz-vektor' ); ?></a></li>
    <li id="btn_prBox"><a href="#prBox"><?php echo _x( 'TopPR', 'BizVektor option tab label', 'biz-vektor' ); ?></a></li>
    <li id="btn_postSetting"><a href="#postSetting"><?php echo _x( 'Posts', 'BizVektor option tab label', 'biz-vektor'); ?></a></li>
    <?php do_action('biz_vektor_options_nav_tab'); ?>
</ul>
</div>
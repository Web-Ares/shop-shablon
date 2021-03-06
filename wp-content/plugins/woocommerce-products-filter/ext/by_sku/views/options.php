<?php
if (!defined('ABSPATH'))
    die('No direct access allowed');
?>

<li data-key="<?php echo $key ?>" class="woof_options_li">

    <?php
    $show = 0;
    if (isset($woof_settings[$key]['show']))
    {
        $show = (int)$woof_settings[$key]['show'];
    }
    ?>

    <a href="#" class="help_tip" data-tip="<?php _e("drag and drope", 'woocommerce-products-filter'); ?>"><img src="<?php echo WOOF_LINK ?>img/move.png" alt="<?php _e("move", 'woocommerce-products-filter'); ?>" /></a>

    <strong style="display: inline-block; width: 176px;"><?php _e("Search by SKU", 'woocommerce-products-filter'); ?>:</strong>

    <img class="help_tip" data-tip="<?php _e('Show textinput for searching by products sku', 'woocommerce-products-filter') ?>" src="<?php echo WP_PLUGIN_URL ?>/woocommerce/assets/images/help.png" height="16" width="16" />

    <div class="select-wrap">
        <select name="woof_settings[<?php echo $key ?>][show]" class="woof_setting_select">
            <option value="0" <?php echo selected($show, 0) ?>><?php _e('No', 'woocommerce-products-filter') ?></option>
            <option value="1" <?php echo selected($show, 1) ?>><?php _e('Yes', 'woocommerce-products-filter') ?></option>
        </select>
    </div>

    <input type="button" value="<?php _e('additional options', 'woocommerce-products-filter') ?>" data-key="<?php echo $key ?>" data-name="<?php _e("Search by SKU", 'woocommerce-products-filter'); ?>" class="woof-button js_woof_options js_woof_options_<?php echo $key ?>" />

    <?php
    if (!isset($woof_settings[$key]['logic']))
    {
        $woof_settings[$key]['logic'] = 'LIKE';
    }


    if (!isset($woof_settings[$key]['title']))
    {
        $woof_settings[$key]['title'] = '';
    }

    if (!isset($woof_settings[$key]['placeholder']))
    {
        //just for compatibility from 2.1.2 to 2.1.3
        if (isset($woof_settings['search_by_sku_placeholder_txt']))
        {
            $woof_settings[$key]['placeholder'] = $woof_settings['search_by_sku_placeholder_txt'];
        } else
        {
            $woof_settings[$key]['placeholder'] = '';
        }
    }

    if (!isset($woof_settings[$key]['image']))
    {
        //just for compatibility from 2.1.2 to 2.1.3
        if (isset($woof_settings['sku_submit_image']))
        {
            $woof_settings[$key]['image'] = $woof_settings['sku_submit_image'];
        } else
        {
            $woof_settings[$key]['image'] = '';
        }
    }
    ?>

    <input type="hidden" name="woof_settings[<?php echo $key ?>][logic]" value="<?php echo $woof_settings[$key]['logic'] ?>" />
    <input type="hidden" name="woof_settings[<?php echo $key ?>][title]" value="<?php echo $woof_settings[$key]['title'] ?>" />
    <input type="hidden" name="woof_settings[<?php echo $key ?>][placeholder]" value="<?php echo $woof_settings[$key]['placeholder'] ?>" />
    <input type="hidden" name="woof_settings[<?php echo $key ?>][image]" value="<?php echo $woof_settings[$key]['image'] ?>" />

    <div id="woof-modal-content-<?php echo $key ?>" style="display: none;">

        <div style="display: none;">
            <div class="woof-form-element-container">

                <div class="woof-name-description">
                    <strong><?php _e('Title text', 'woocommerce-products-filter') ?></strong>
                    <span><?php _e('Leave it empty if you not need this', 'woocommerce-products-filter') ?></span>
                </div>

                <div class="woof-form-element">
                    <input type="text" class="woof_popup_option" data-option="title" placeholder="" value="" />
                </div>

            </div>
        </div>

        <div class="woof-form-element-container">

            <div class="woof-name-description">
                <strong><?php _e('Placeholder text', 'woocommerce-products-filter') ?></strong>
                <span><?php _e('Leave it empty if you not need this', 'woocommerce-products-filter') ?></span>
                <span><?php _e('SKU textinput placeholder. Set "none" if you want leave it empty on the front.', 'woocommerce-products-filter') ?></span>
            </div>

            <div class="woof-form-element">
                <input type="text" class="woof_popup_option" data-option="placeholder" placeholder="" value="" />
            </div>

        </div>

        <div class="woof-form-element-container">

            <div class="woof-name-description">
                <strong><?php _e('Conditions logic', 'woocommerce-products-filter') ?></strong>
                <span><?php _e('LIKE or Equally', 'woocommerce-products-filter') ?></span>
            </div>

            <div class="woof-form-element">
                <?php
                $logic = array(
                    '=' => __('Equally', 'woocommerce-products-filter'),
                    'LIKE' => __('LIKE', 'woocommerce-products-filter')
                );
                ?>

                <div class="select-wrap">
                    <select class="woof_popup_option" data-option="logic">
                        <?php foreach ($logic as $key => $value) : ?>
                            <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

            </div>

        </div>

        <div class="woof-form-element-container">

            <div class="woof-name-description">
                <strong><?php _e('Image', 'woocommerce-products-filter') ?></strong>
                <span><?php _e('Image for sku search button which appears near input when users typing there any symbols. Better use png. Size is: 20x20 px.', 'woocommerce-products-filter') ?></span>
                <span><?php _e('Example', 'woocommerce-products-filter') ?>: <?php echo WOOF_LINK ?>img/eye-icon1.png</span>
            </div>

            <div class="woof-form-element">
                <input type="text" class="woof_popup_option" data-option="image" placeholder="" value="" />
                <a href="#" style="margin: 5px 0 0 0; clear: both;" class="woof-button woof_select_image"><?php _e('Select Image', 'woocommerce-products-filter') ?></a>
            </div>

        </div>

    </div>

</li>
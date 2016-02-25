<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="register-block">
                    <a href="#">Log In</a>
                    <span>or</span>
                    <a href="#">Register</a>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-12">
                <h1 class='brand'><a href="<?php echo get_site_url(); ?>">Stolcomp</a></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="wrapper-block">
                    <div class="row">
                        <div class="col-sm-10">
                            <nav role='main-nav'>
                                <ul class='main-nav'>

                                    <?php
                                    $locations = get_nav_menu_locations();
                                    $menu_items = wp_get_nav_menu_items($locations['menu']);

                                    foreach ((array)$menu_items as $key => $menu_item) { ?>
                                        <li class="<?php if ($post->ID == $menu_item->object_id) {
                                            echo ' '.'active';
                                        }?>">
                                            <a href="<?php echo $menu_item->url; ?>"><?php echo $menu_item->title; ?></a>
                                        </li>

                                    <?php }; ?>

                                </ul>
                            </nav>
                        </div>
                        <div class="col-sm-2">
                            <div class="input-group search-block">
                                <input type="text" class="form-control" placeholder="Search here">
                                    <span class="input-group-btn">
                                      <button class="btn btn-default" type="button"><span class='glyphicon glyphicon-search'></span></button>
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="pt-3 pb-3 sub-navbar">
    <div class="container">
        <div class="columns">
            <div class="column">
                <div class="tabs">
                    <ul>
                        <?php
                        foreach ($this->getContentNavigationClassic()['associated-pages'] as $key => $tab) {
                            if (strpos($tab['class'], 'selected') !== false)
                                echo '<li class="is-active">';
                            else
                                echo '<li>';
                            // echo http_build_query($tab,'',', ');
                            echo $this->makeLink($key, $tab, array(
                                'link-class' => 'tablink'
                            ));
                            echo '</li>';
                        } ?>
                    </ul>
                </div>
            </div>
            <div class="column is-narrow is-flex is-justify-content-flex-end mt-2">
                <?php
                foreach ($this->getContentNavigationClassic() as $group => $tabs) {
                    $menuId = sprintf('dropdown-menu-%s', $group);
                    if (!empty($tabs) && $group != 'associated-pages') { ?>
                        <div class="dropdown is-right is-hoverable ml-2">
                            <div class="dropdown-trigger">
                                <button class="button is-small is-danger" aria-haspopup="true" aria-controls="<?php echo $menuId; ?>">
                                    <span><?php echo $group; ?></span>
                                    <span class="icon is-small">
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </span>
                                </button>
                                <!-- <a href="#" aria-haspopup="true" aria-controls="<?php echo $menuId; ?>">
                                <?php echo $group; ?>
                            </a> -->
                            </div>
                            <div class="dropdown-menu" id="<?php echo $menuId; ?>" role="menu">
                                <div class="dropdown-content">
                                    <?php
                                    foreach ($tabs as $key => $item) {
                                        echo $this->makeLink($key, $item, array(
                                            'link-class' => 'dropdown-item'
                                        ));
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                <?php }
                } ?>
            </div>
        </div>
    </div>
</div>
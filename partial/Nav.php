<div class="navbar-wrapper">
    <nav class="navbar container" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="<?php echo $this->data['nav_urls']['mainpage']['href']; ?>">
                <img alt="<?php echo $this->text('sitename'); ?>" class="top-bar-logo" src="<?php echo $this->text('logopath') ?>" height="25">
                <span class="site-title"><?php echo $this->text('sitename'); ?></span>
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="main-navbar">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="main-navbar" class="navbar-menu">
            <div class="navbar-start">
                <div class="navbar-item">
                    <form action="<?php $this->text('wgScript'); ?>" id="searchform" class="mw-search">
                        <div class="buttons">
                            <div class="field">
                                <div class="control is-small">
                                    <?php echo $this->makeSearchInput(array(
                                        'placeholder' => wfMessage('searchsuggest-search')->text(),
                                        'id' => 'searchInput',
                                        'class' => 'input is-small'
                                    )); ?>
                                </div>
                            </div>
                            <button type="submit" class="button is-danger is-small">
                                <?php echo wfMessage('search')->text() ?>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="navbar-end">
                <?php foreach ($this->getSidebar() as $boxName => $box) {
                    if (($box['header'] != wfMessage('toolbox')->text())) { ?>
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link"><?php echo htmlspecialchars($box['header']); ?></a>
                            <?php if (is_array($box['content'])) { ?>
                                <div class="navbar-dropdown">
                                    <?php foreach ($box['content'] as $key => $item) { ?>
                                        <a class="navbar-item" href='<?php echo $item['href'] ?>'><?php echo $item['text'] ?></a>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                <?php }
                } ?>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link"><i class="fa fa-cogs"></i></a>
                    <div class="navbar-dropdown is-right">
                        <?php foreach ($this->data['sidebar']['TOOLBOX'] as $key => $item) {
                            echo $this->makeLink($key, $item, array('link-class' => 'navbar-item'));
                        } ?>
                    </div>
                </div>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link"><i class="fa fa-user"></i></a>
                    <div class="navbar-dropdown is-right">
                        <?php foreach ($this->getPersonalTools() as $key => $item) {
                            foreach ($item['links'] ?? [] as $linkKey => $link) {
                                $href = $link['href'] ?? null;
                                if ( $href ) {
                                    echo $this->makeLink($linkKey, $link, array('link-class' => 'navbar-item'));
                                }
                            }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
<?php
/**
 * 秋水
 * 
 * @package Autumn
 * @author Bakumon
 * @version 1.0
 * @link https://www.bakumon.me
 */
 
 $this->need('header.php');
 ?>

    <div id="main">
        <div id="content-container" class="layout-full">
            <div id="content" role="main">
<?php while ($this->next()): ?>
                <article class="post">
                    <header>
                        <h1 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
                        <p class="post-info"><?php $this->category(' / '); ?> Posted by <a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a><span class="comments"> / <a href="<?php $this->permalink(); ?>#comments"><?php $this->commentsNum('0', '1', '%d'); ?></a> comments</span></p>
                        <div class="post-date"><span><?php dateConvert($this->date->month); ?></span><span><?php $this->date('d'); ?></span></div>
                    </header>
                    <footer></footer>
                </article>
<?php endwhile; ?>
                
                <nav id="pagination">
                    <?php $this->pageNav(); ?>

                </nav>
            </div>
            <div class="clear"></div>
        </div>
    </div>
<?php $this->need('footer.php'); ?>

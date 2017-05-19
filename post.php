<?php $this->need('header.php'); ?>

    <div id="main">
        <div id="content-container" class="layout-full">
            <div id="content" role="main">
                <article class="post">
                    <header>
                        <h1 class="post-title"><?php $this->title() ?></h1>
                        <p class="post-info"><?php $this->category(' / '); ?> Posted by <a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a><span class="comments"> / <a href="<?php $this->permalink(); ?>#comments"><?php $this->commentsNum('0', '1', '%d'); ?></a> comments</span></p>
                        <div class="post-date"><span><?php dateConvert($this->date->month); ?></span><span><?php $this->date('d'); ?></span></div>
                    </header>
                    <section class="post-content">
                        <?php $this->content(); ?>
                        <hr>
                        <p>
                        本文由 <a href="<?php $this->author->permalink(); ?>"><?php $this->author() ?></a> 创作，采用 <a href="https://creativecommons.org/licenses/by/4.0/" target="_blank" rel="external nofollow">知识共享署名4.0</a> 国际许可协议进行许可<br>本站文章除注明转载/出处外，均为本站原创或翻译，转载前请务必署名<br>最后编辑时间
为: <?php echo date('Y/n/j H:i' , $this->modified); ?>
                        </p>
                    </section>
                    <footer></footer>
                </article>

<?php $this->need('comments.php'); ?>
            </div>
        
            <div class="clear"></div>
        </div>
    </div>
<?php $this->need('footer.php'); ?>

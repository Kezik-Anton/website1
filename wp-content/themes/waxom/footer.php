    </main>
</div>




<footer class="footer">
    <section class="footer-top">
        <div class="footer-top-block">
            <div class="block-info">
                <?php if( has_custom_logo() ): the_custom_logo(); ?>
                <?php else: ?>
                    <a  href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
                <?php endif; ?>
                <?php if(is_active_sidebar('company-info')): ?>
                    <ul>
                        <?php dynamic_sidebar('company-info'); ?>
                    </ul>
                    <a class="link-block-info" href="<?=home_url();?>/company">Подробнее</a>
                <?php endif; ?>
            </div>
            <div class="recent-block">
                <?php if(is_active_sidebar('recent-block')): ?>
                    <div class="sidebar">
                        <ul>
                            <?php dynamic_sidebar('recent-block'); ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
            
            <?php if(is_active_sidebar('contacts-block')): ?>
                <div class="contacts">
                    <ul>
                        <?php dynamic_sidebar('contacts-block'); ?>
                    </ul>
                </div>
            <?php endif; ?>
                
            
        </div>
    </section>

    <div class="footer-bottom">
        <div class="footer-bottom-block">
            <div class="block-copyright">
                <p>© <?php bloginfo('name'); ?> <?php echo date ( 'Y' ) ; ?></p>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>
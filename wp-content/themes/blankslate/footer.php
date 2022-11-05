<div class="back-call-phone">
    <?php echo do_shortcode("[contact-form-7 id=\"116\" title=\"Заказать звонок 2\"]"); ?>
</div>
<div class="star-back-call">
    <a href="tel:<?php echo preg_replace("/[ \-\(\)]/", "", get_field('phone', 'option')); ?>" title="<?php the_field('phone', 'option'); ?>" class="mobile-only"></a>
    <div class="wrap">
        <img src="<? bloginfo('template_url') ?>/images/callback_phone.png">
    </div>
</div>
<footer>
    <div class="container">
        <div class="wrapper">
            <div class="address">
                <img src="<? bloginfo('template_url') ?>/images/address.png">
                <span class="address-text"><?php the_field('address', 'option'); ?></span>
            </div>
            <div class="phone">
                <img src="<? bloginfo('template_url') ?>/images/phone.png">
                <a href="tel:<?php echo preg_replace("/[ \-\(\)]/", "", get_field('phone', 'option')); ?>" title="<?php the_field('phone', 'option'); ?>">
                    <span class="phone-text">
                        <?php the_field('phone', 'option'); ?>
                    </span>
                </a>
            </div>
            <div class="social">
                <a href="<?php the_field('ig', 'option'); ?>"><img src="<? bloginfo('template_url') ?>/images/insta.png"></a>
                <a href="<?php the_field('vk', 'option'); ?>"><img src="<? bloginfo('template_url') ?>/images/vk.png"></a>
            </div>
        </div>
    </div>
</footer>
<div class="overlay"></div>
<div class="modal modal-card">
    <div class="modal-bg">
        <div class="top-left-img"></div>
        <div class="bottom-right-img"></div>
    </div>
    <div class="logo-img">
        <img src="<?php the_field("logo", "option"); ?>" alt="<?php bloginfo("name"); ?>">
    </div>
    <div class="delimiter"></div>
    <div class="girl-img">
        <img src="<? bloginfo('template_url') ?>/images/program_1.png">
    </div>
    <div class="right-block">
        <span class="title">аэробика</span>
        <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s</p>
        <a href="#order" class="btn btn-red btn-join">записаться</a>
    </div>
</div>
<div class="modal">

    <section class="order">
        <div class="container bgyellow shadow">
            <div class="wrapper">
                <h2 class="title">
                    <img class="star-left" src="<? bloginfo('template_url') ?>/images/star_left.png">
                    <span> Абонемент </span>
                    <img class="star-right" src="<? bloginfo('template_url') ?>/images/star_right.png">
                </h2>
                <div class="order-form">

                    <?php echo $response; ?>
                    <form method="POST" action="" class="order-form-form" name="order-form">
                        <div class="girl-form-img"></div>
                        <div class="girl-text left"><span>любой</span></div>
                        <div class="girl-text right"><span>со скидкой <span class="percent"><?php the_field('discount'); ?></span></span></div>
                        <div class="clear mobile-only"></div>
                        <ul class="form-groups first-col">
                            <li class="form-img user-name">
                                <img src="<? bloginfo('template_url') ?>/images/user_name.png">
                            </li>
                            <li class="form-img user-phone">
                                <img src="<? bloginfo('template_url') ?>/images/user_phone.png">
                            </li>
                            <li class="form-img user-email">
                                <img src="<? bloginfo('template_url') ?>/images/user_email.png">
                            </li>
                        </ul>
                        <ul class="form-groups second-col">
                            <li class="form-group first-name">
                                <label for="firstName">Имя:</label>
                                <input type="text" value="<?php echo $name1; ?>" name="first-name" id="firstName">
                            </li>
                            <li class="form-group second-name short-field">
                                <label for="secondName">Фамилия:</label>
                                <input type="text" value="<?php echo $name2; ?>" name="second-name" id="secondName">
                            </li>
                            <li class="form-group phone">
                                <label for="phone">Тел.*:</label>
                                <input type="text" value="<?php echo $phone; ?>" name="phone" id="phone">
                            </li>
                            <li class="form-group email short-field">
                                <label for="email">E-mail*:</label>
                                <input type="text" value="<?php echo $email; ?>" name="email" id="email">
                            </li>
                        </ul>
                        <ul class="form-groups third-col">
                            <li class="form-group category short-field">
                                <label for="category">Категория:</label>
                                <select id="category" name="category">
                                    <?php
                                    if( have_rows('programs') ):
                                        while ( have_rows('programs') ) : the_row();
                                            ?>
                                            <option <?php if ($category == the_sub_field('title')) echo "checked=\"checked\""; ?> value="<?php the_sub_field('title'); ?>"><?php the_sub_field('title'); ?></option>
                                            <?php
                                        endwhile;
                                    endif;
                                    ?>
                                </select>
                            </li>
                            <li class="form-group lessons short-field">
                                <label for="lessons">Кол-во<br>занятий:</label>
                                <input type="text" value="<?php echo $lessons; ?>" name="lessons" id="lessons">
                            </li>
                            <li class="form-group comment short-field">
                                <label for="comment">Ваш<br>комментарий:</label>
                                <input type="text" value="<?php echo $comment; ?>" name="comment" id="comment">
                            </li>
                        </ul>
                        <input type="hidden" name="cf_submitted" value="yes">
                        <button type="submit" class="btn btn-red">Купить абонемент!</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

</div>
<script src="<? bloginfo('template_url') ?>/js/swiper/js/swiper.jquery.min.js"></script>
<script src="<? bloginfo('template_url') ?>/js/msdropdown/js/jquery.dd.min.js"></script>
<script src="<? bloginfo('template_url') ?>/js/jquery.mask.js"></script>
<script src="<? bloginfo('template_url') ?>/js/scripts.js"></script>
<?php wp_footer(); ?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter45887175 = new Ya.Metrika({
                    id:45887175,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/45887175" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
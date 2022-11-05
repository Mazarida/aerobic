<?php //Template Name: Главная ?>
<?php get_header();
global $response;
global $name1;
global $name2;
global $phone;
global $email;
global $category;
global $lessons;
global $comment;
if (!isset($name1) || empty($name1)) $name1 = '';
if (!isset($name2) || empty($name2)) $name2 = '';
if (!isset($phone) || empty($phone)) $phone = '';
if (!isset($email) || empty($email)) $email = '';
if (!isset($category) || empty($category)) $category = '';
if (!isset($lessons) || empty($lessons)) $lessons = '';
if (!isset($comment) || empty($comment)) $comment = '';
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section class="banner">
        <div class="container bgwhite shadow1">
            <h1 class="title">
                Аэробика
            </h1>
            <div class="types">
                <?php
                if( have_rows('types') ):
                    while ( have_rows('types') ) : the_row();
                        echo "<h2 class=\"aero-type\">";
                        the_sub_field('title');
                        echo "</h2>";
                    endwhile;
                endif;
                ?>
            </div>
            <div class="lines"></div>
            <div class="action-text">
                <span class="action"><?php the_field('action'); ?></span>
                <span class="discount"><?php the_field('discount'); ?></span>
                <span class="wow">вау!</span>
            </div>
            <div class="arrow"><?php the_field('arrow_text'); ?></div>
            <div class="timer">
                <p class="motivation">
                    <?php the_field("motivation"); ?>
                </p>
                <div id="countdown"></div>
                <!--p id="note"></p-->
            </div>
            <div class="girl"></div>
            <div class="men"></div>
            <p class="contacts">
                <?php the_field('address', 'option'); ?><span class="icon mark"></span><br>
                <a href="tel:<?php echo preg_replace("/[ \-\(\)]/", "", get_field('phone', 'option')); ?>" title="<?php the_field('phone', 'option'); ?>"> <?php the_field('phone', 'option'); ?><span class="icon phone"></span></a><br>
                <a href="https://t.me/<?php the_field('tg', 'option'); ?>">Telegram-чат<span class="icon tg"></span></a><br>
                <a href="<?php the_field('ig', 'option'); ?>"><span class="icon ig"></span></a><br>
                <a href="<?php the_field('vk', 'option'); ?>"><span class="icon vk"></span></a><br>
            </p>
            <a href="#" class="btn btn-yellow zayavka">Купить абонемент!</a>
        </div>
        <div class="brightlines"></div>
    </section>
    <section class="about">
        <div class="container bgwhite shadow">
            <div class="wrapper">
                <h2 class="title"><?php the_field('block1_name'); ?></h2>
                <div class="infographics">
                <?php
                if( have_rows('infographics') ): $i = 0;
                    while ( have_rows('infographics') ) : the_row(); $i++;
                    ?>
                        <div class="elem el<?php echo $i; ?>">
                            <div class="img-holder">
                                <img src="<?php the_sub_field('image'); ?>" alt="">
                            </div>
                            <p class="text">
                                <span class="header"><?php the_sub_field('header'); ?></span>
                                <?php the_sub_field('text'); ?></p>
                        </div>
                    <?php
                    endwhile;
                endif;
                ?>
                </div>
                <div class="text-center arrow02">
                    <a href="#card">
                        <img src="<?php bloginfo('template_url'); ?>/images/arrow02.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="wrapper-red">
        <div class="container">
            <div class="bg-red"></div>
        </div>
    </section>

    <section class="card" id="card">
        <div class="container shadow">
            <div class="left-ribbon-img"></div>
            <div class="right-ribbon-img">
                <span class="ribbon-text">Создайте свою карту <span class="ribbon-bold-text">aerobic star!</span></span>
            </div>
            <div class="wide-line-img"></div>
            <div class="wrapper">
                <h2 class="title">Ничего лишнего</h2>
                <div class="card-content">
                    <div class="card-img">
                        <img src="<? bloginfo('template_url') ?>/images/card.png" alt="Изображение карты">
                    </div>
                    <div class="order-block">
                        <div class="order-elems">
                            <p class="desc-card">Как часто Вы покупаете карту в фитнес клуб
                                и понимаете , что из всего ассортимента услуг,
                                Вам нужны только групповые программы???
                                <strong>
                                    Карту в AEROBIC STAR Вы создаете сами!
                                </strong>
                            </p>
                            <!--<?php
                            if( have_rows('card_adv') ):
                                while ( have_rows('card_adv') ) : the_row();
                                    ?>
                                    <div class="elem"><?php the_sub_field('adv_name'); ?></div>
                                    <?php
                                endwhile;
                            endif;
                            ?>-->
                        </div>
<!--                        <div class="schema-path"></div>-->
                        <div class="make-order zayavka-tel">Узнай как!</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wrapper-red">
        <div class="container">
            <div class="bg-red"></div>
        </div>
    </section>

    <section class="programs-new">
        <div class="container bgwhite shadow">
            <div class="wrapper">
                <h2 class="title">Программы</h2>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php
                        if( have_rows('programs') ):
                            while ( have_rows('programs') ) : the_row();
                                ?>
                                <div class="swiper-slide prog-click" data-title="<?php the_sub_field('title'); ?>" data-text="<?php the_sub_field('text'); ?>" data-img="<?php the_sub_field('image'); ?>">
                                    <div class="program-new-img">
                                        <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>">
                                    </div>
                                    <span class="program-new-text"><?php the_sub_field('title'); ?></span>
                                </div>
                                <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
                <div class="swiper-button-prev1"></div>
                <div class="swiper-button-next1"></div>
            </div>
        </div>
    </section>

<?php /*
    <section class="wrapper-red">
        <div class="container">
            <div class="bg-red"></div>
        </div>
    </section>
    <section class="trainers">
        <div class="container bggreen shadow">
            <div class="wrapper">
                <h2 class="title">Наши тренера</h2>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php
                        if( have_rows('trainers_slider') ):
                            while ( have_rows('trainers_slider') ) : the_row();
                                ?>
                                <div class="swiper-slide">
                                    <div class="trainer">
                                        <div class="star-girl">
                                            <img src="<?php the_sub_field('image'); ?>">
                                        </div>
                                        <h3 class="header">
                                            <?php the_sub_field('title1'); ?><br>
                                            <?php the_sub_field('title2'); ?>
                                        </h3>
                                        <p class="text"><?php the_sub_field('text'); ?></p>
                                    </div>
                                </div>
                                <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
                <div class="green-line"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
*/ ?>
    <section class="wrapper-red">
        <div class="container">
            <div class="bg-red" id="order"></div>
        </div>
    </section>

    <section class="order">
        <div class="container bgyellow shadow">
            <div class="wrapper">
                <h2 class="title">
                    <img class="star-left" src="<? bloginfo('template_url') ?>/images/star_left.png">
                    <span> Абонемент </span>
                    <img class="star-right" src="<? bloginfo('template_url') ?>/images/star_right.png">
                </h2>
                <div class="order-form">
                    <p class="resonse">
                        <?php echo $response; ?>
                    </p>
                    <form method="POST" action="/#order" class="order-form-form" name="order-form">
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
                                <input type="text" value="<?php echo !empty($phone) ? $phone : '+7('; ?>" name="phone" id="phone" class="phone">
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

    <section class="map">
        <div class="map-img">
            <?php the_field('map'); ?>
        </div>
        <div class="line-up-img"></div>
        <div class="line-down-img"></div>
    </section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>

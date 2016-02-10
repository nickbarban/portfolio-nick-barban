<?php get_header(); ?>
    <section id="about" class="s_about bg_light">
        <div class="section_header">
            <h2><?php echo get_cat_name(3) ?></h2>
            <div class="s_descr_wrap">
                <div class="s_descr"><?php echo category_description(3); ?></div>
            </div>
        </div>
        <div class="section_content">
            <div class="container">
                <div class="row">
                    <?php if (have_posts()) : query_posts('p=6');
                        while (have_posts()) : the_post(); ?>
                            <div class="col-md-4 col-md-push-4 animation_1">
                                <h3>Photo</h3>
                                <div class="person">

                                    <?php if (has_post_thumbnail()) : ?>
                                        <a class="popup"
                                           href="<?php
                                           $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                                           echo $large_image_url[0];
                                           ?>"
                                           title="<?php echo get_bloginfo('name'); ?>">
                                            <?php the_post_thumbnail(array(400, 400)); ?>
                                        </a>
                                    <?php endif; ?>

                                </div>
                            </div>
                            <div class="col-md-4 col-md-pull-4 animation_2">
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_content(); ?></p>
                            </div>
                        <? endwhile; endif;
                    wp_reset_query(); ?>


                    <div class="col-md-4 animation_3 personal_last_block">
                        <?php if (have_posts()) : query_posts('p=9');
                            while (have_posts()) : the_post(); ?>
                                <h3><?php the_title(); ?></h3>
                                <h2 class="personal_header"><?php the_title(); ?></h2>
                                <?php the_content(); ?>
                            <? endwhile; endif;
                        wp_reset_query(); ?>
                        <div class="social_wrap">
                            <ul>

                                <?php if (have_posts()) : query_posts('cat=4');
                                    while (have_posts()) : the_post(); ?>
                                        <li><a
                                                href="<?php echo get_post_meta($post->ID, "soc_url", true); ?>"
                                                target="_blank"
                                                title="<?php the_title(); ?>">
                                                <i class="fa <?php echo get_post_meta($post->ID, "fonts_awesome", true); ?>"></i>
                                            </a></li>
                                    <? endwhile; endif;
                                wp_reset_query(); ?>

                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <section id="resume" class="s_resume">
        <div class="section_header">
            <h2><?php echo get_cat_name(5) ?></h2>
            <div class="s_descr_wrap">
                <div class="s_descr"><?php echo category_description(5); ?></div>
            </div>
        </div>
        <div class="section_content">
            <div class="container">
                <div class="row">
                    <div class="resume_container">
                        <div class="col-md-6 col-sm-6 left">
                            <h3><?php echo get_cat_name(6) ?></h3>
                            <div class="resume_icon"><i class="icon-basic-case"></i></div>

                            <?php if (have_posts()) : query_posts('cat=6');
                                while (have_posts()) : the_post(); ?>
                                    <div class="resume_item">
                                        <div
                                            class="year"><?php echo get_post_meta($post->ID, "resume_period", true); ?></div>
                                        <div class="resume_description">
                                            <?php echo get_post_meta($post->ID, "resume_type", true); ?>
                                            <strong><?php the_title(); ?></strong>
                                        </div>
                                        <p><?php the_content(); ?></p>
                                    </div>
                                <? endwhile; endif;
                            wp_reset_query(); ?>

                        </div>
                        <div class="col-md-6 col-sm-6 right">
                            <h3><?php echo get_cat_name(7) ?></h3>
                            <div class="resume_icon"><i class="icon-basic-book-pen"></i></div>

                            <?php if (have_posts()) : query_posts('cat=7');
                                while (have_posts()) : the_post(); ?>
                                    <div class="resume_item">
                                        <div
                                            class="year"><?php echo get_post_meta($post->ID, "resume_period", true); ?></div>
                                        <div class="resume_description">
                                            <strong><?php the_title(); ?></strong>
                                            <?php echo get_post_meta($post->ID, "resume_type", true); ?>
                                        </div>
                                        <?php the_content(); ?>
                                    </div>
                                <? endwhile; endif;
                            wp_reset_query(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="s_portfolio bg_dark">
        <div class="section_header">
            <h2><?php echo get_cat_name(8) ?></h2>
            <div class="s_descr_wrap">
                <div class="s_descr"><?php echo category_description(8); ?></div>
            </div>
        </div>
        <div class="section_content">
            <div class="container">
                <div class="row">
                    <div class="filter_div controls">
                        <ul>
                            <li class="filter active" data-filter="all">All projects</li>
                            <li class="filter" data-filter=".Back-ends">Back-ends</li>
                            <li class="filter" data-filter=".Front-ends">Front-ends</li>
                            <li class="filter" data-filter=".Full-stack">Full-stack projects</li>
                        </ul>
                    </div>
                    <div id="portfolio_grid">

                        <?php if (have_posts()) : query_posts('cat=8');
                            while (have_posts()) : the_post(); ?>
                                <div class="mix col-md-3 col-sm-6 col-xs-12 portfolio_item <?php
                                $tags = wp_get_post_tags($post->ID);
                                if ($tags) {
                                    foreach ($tags as $tag) {
                                        echo ' '.$tag->name;
                                    }
                                }
                                ?>">
                                    <?php the_post_thumbnail(array(800, 600)); ?>
                                    <div class="port_item_cont">
                                        <h3><?php the_title(); ?></h3>
                                        <?php the_excerpt(); ?>
                                        <a href="#" class="popup_content">Look up</a>
                                    </div>
                                    <div class="hidden">
                                        <div class="podrt_descr">
                                            <div class="modal-box-content">
                                                <button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
                                                <h3><?php the_title(); ?></h3>
                                                <?php the_content(); ?>
                                                <p><a href="<?php echo get_post_meta($post->ID, 'src_link', true); ?>" target="_blank">Source code</a></p>
                                                <img src="
                                                    <?php $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                                                echo $large_image_url[0];
                                                ?>" alt="<?php the_title(); ?>"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <? endwhile; endif;
                        wp_reset_query(); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contacts" class="s_contacts bg_light">
        <div class="section_header">
            <h2>Контакты</h2>
            <div class="s_descr_wrap">
                <div class="s_descr">
                    <p>Оставьте ваше сообщение</p>
                </div>
            </div>
        </div>
        <div class="section_content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="contact_box">
                            <div class="contacts_icon icon-basic-geolocalize-05"></div>
                            <h3>Адрес:</h3>
                            <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.</p>
                        </div>
                        <div class="contact_box">
                            <div class="contacts_icon icon-basic-smartphone"></div>
                            <h3>Телефон:</h3>
                            <p>+7 999 999 99 99</p>
                        </div>
                        <div class="contact_box">
                            <div class="contacts_icon icon-basic-webpage-img-txt"></div>
                            <h3>Веб-сайт:</h3>
                            <p><a href="//webdesign-master.ru" target="_blank">webdesign-master.ru</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <form action="http://formspree.io/agragregra@ya.ru" class="main_form" novalidate target="_blank"
                              method="post">
                            <label class="form-group">
                                <span class="color_element">*</span> Ваше имя:
                                <input type="text" name="name" placeholder="Ваше имя"
                                       data-validation-required-message="Вы не ввели имя" required/>
                                <span class="help-block text-danger"></span>
                            </label>
                            <label class="form-group">
                                <span class="color_element">*</span> Ваш E-mail:
                                <input type="email" name="email" placeholder="Ваш E-mail"
                                       data-validation-required-message="Не корректно введен E-mail" required/>
                                <span class="help-block text-danger"></span>
                            </label>
                            <label class="form-group">
                                <span class="color_element">*</span> Ваше сообщение:
                                <textarea name="message" placeholder="Ваше сообщение"
                                          data-validation-required-message="Вы не ввели сообщение" required></textarea>
                                <span class="help-block text-danger"></span>
                            </label>
                            <button>Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
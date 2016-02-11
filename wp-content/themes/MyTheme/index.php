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
                            <div class="col-md-4 col-md-push-4 animation_1 photo_second_block">
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
                            <div class="col-md-4 col-md-pull-4 animation_2 biography_first_block">
                                <h3><?php the_title(); ?></h3>
                                <?php the_content(); ?></p>
                            </div>
                        <? endwhile; endif;
                    wp_reset_query(); ?>


                    <div class="col-md-4 animation_3 personal_last_block">

                        <?php if (have_posts()) : query_posts('p=9');
                            while (have_posts()) : the_post(); ?>
                                <h3><?php the_title(); ?></h3>
                            <? endwhile; endif;
                        wp_reset_query(); ?>


                        <div class="container">
                            <div class="panel-group" id="accordion">

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><u>Bases:</u></a>
                                        </h4>
                                    </div>
                                    <div id="collapse1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <li>JavaCore</li>
                                                <li>Java8</li>
                                                <li>OOP</li>
                                                <li>Patterns</li>
                                                <li>Algorithms</li>
                                                <li>Networks</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><u>Databases:</u></a>
                                        </h4>
                                    </div>
                                    <div id="collapse2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <li>Postgresql</li>
                                                <li>MySql</li>
                                                <li>MongoDB</li>
                                                <li>Redis</li>
                                                <li>H2db</li>
                                                <li>UML</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion"
                                               href="#collapse3"><u>Web:</u></a>
                                        </h4>
                                    </div>
                                    <div id="collapse3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <li>Json</li>
                                                <li>XML</li>
                                                <li>XPath</li>
                                                <li>CSS-Selector</li>
                                                <li>HTML+CSS+SASS</li>
                                                <li>PHP(familiar)</li>
                                                <li>JavaScript(familiar)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><u>Testing:</u></a>
                                        </h4>
                                    </div>
                                    <div id="collapse4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <li>Junit</li>
                                                <li>TestNG</li>
                                                <li>Mockito</li>
                                                <li>Selenide</li>
                                                <li>Jaunt</li>
                                                <li>HTMLUnit</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5"><u>JavaEE:</u></a>
                                        </h4>
                                    </div>
                                    <div id="collapse5" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <li>J2EE</li>
                                                <li>REST API</li>
                                                <li>ServletAPI</li>
                                                <li>Spring</li>
                                                <li>Hibernate</li>
                                                <li>JSP</li>
                                                <li>Thymeleaf</li>
                                                <li>Guava</li>
                                                <li>DBUnit</li>
                                                <li>Jackson</li>
                                                <li>JSoup</li>
                                                <li>Lombok</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse6"><u>Tools:</u></a>
                                        </h4>
                                    </div>
                                    <div id="collapse6" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <li>Git</li>
                                                <li>Maven</li>
                                                <li>Ant</li>
                                                <li>Trello</li>
                                                <li>Eclipse</li>
                                                <li>Idea</li>
                                                <li>PhpStorm</li>
                                                <li>Sublime-text</li>
                                                <li>Koala</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse7"><u>Servers:</u></a>
                                        </h4>
                                    </div>
                                    <div id="collapse7" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <li>Tomcat</li>
                                                <li>Jersey</li>
                                                <li>JBoss</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse8"><u>English:
                                                    upper-intermediate</u></a>
                                        </h4>
                                    </div>
                                    <div id="collapse8" class="panel-collapse collapse">
                                        <div class="panel-body">

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="social_wrap">
                            <ul>

                                <?php if (have_posts()) : query_posts('cat=4');
                                    while (have_posts()) : the_post(); ?>
                                        <li><a
                                                href="<?php echo get_post_meta($post->ID, "soc_url", true); ?>"
                                                title="<?php the_title(); ?>"
                                                target="_blank">
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
                                        echo ' ' . $tag->name;
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
                                                <p><a href="<?php echo get_post_meta($post->ID, 'src_link', true); ?>"
                                                      target="_blank">Source code</a></p>
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
            <h2><?php echo get_cat_name(12) ?></h2>
            <div class="s_descr_wrap">
                <div class="s_descr">
                    <p><?php echo category_description(12); ?></p>
                </div>
            </div>
        </div>
        <div class="section_content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="contact_box">
                            <div class="contacts_icon icon-basic-geolocalize-05"></div>
                            <h3>Adress:</h3>
                            <p><?php
                                $options = get_option('sample_theme_options');
                                echo $options['adress']; ?>
                            </p>
                        </div>
                        <div class="contact_box">
                            <div class="contacts_icon icon-basic-smartphone"></div>
                            <h3>Phone:</h3>
                            <p><?php
                                $options = get_option('sample_theme_options');
                                echo $options['phonenumber']; ?>
                            </p>
                        </div>
                        <div class="contact_box">
                            <div class="contacts_icon icon-basic-webpage-img-txt"></div>
                            <h3>Web-site:</h3>
                            <p><a href="<?php $options = get_option('sample_theme_options');
                                echo $options['website']; ?>"
                                  target="_blank"><?php $options = get_option('sample_theme_options');
                                    echo $options['website']; ?>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <form action="http://formspree.io/<?php $options = get_option('sample_theme_options');
                        echo $options['customemail']; ?>" class="main_form" novalidate
                              target="_blank"
                              method="post">
                            <label class="form-group">
                                <span class="color_element">*</span> Your name:
                                <input type="text" name="name" placeholder="Your name"
                                       data-validation-required-message="You have NOT inputed your name" required/>
                                <span class="help-block text-danger"></span>
                            </label>
                            <label class="form-group">
                                <span class="color_element">*</span> Your E-mail:
                                <input type="email" name="email" placeholder="Your E-mail"
                                       data-validation-required-message="Inputed E-mail is NOT CORRECT" required/>
                                <span class="help-block text-danger"></span>
                            </label>
                            <label class="form-group">
                                <span class="color_element">*</span> Your message:
                                <textarea name="message" placeholder="Type your messageе"
                                          data-validation-required-message="You have NOT typed your message"
                                          required></textarea>
                                <span class="help-block text-danger"></span>
                            </label>
                            <button>Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
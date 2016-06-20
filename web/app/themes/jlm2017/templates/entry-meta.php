<time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
dans <a href="<?= get_category_link(get_the_category()[0]->cat_ID); ?>"><?= get_the_category()[0]->name; ?></a>

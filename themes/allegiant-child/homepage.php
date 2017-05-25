<?php
/*
 *  Template Name: Homepage
 */

/**
 * Created by PhpStorm.
 * User: hrvojeantunovic
 * Date: 22.05.17.
 * Time: 13:37
 */

get_header();
?>
<section id="download">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3>Free</h3>
                <h3>This text needs to motivate user to do action we wish, in this case, to pick one of the price
                    plans.</h3>

            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <a href="https://twitter.com/Dave_Conner" class="cta cta-btn-1">
                    <svg>
                        <rect x="0" y="0" fill="none" width="100%" height="100%"/>
                    </svg>
                    Download now
                </a>

            </div>
        </div>

    </div>
</section>
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="section-heading">About Myself</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <p>Since day one, my priority has been to help people transform themselves. Over time, my schedule
                    has gotten busier, and so for a little while, I did take this service off — but only so I could
                    reevaluate the way I approached it and offer it in an even more engaging way. I want to make
                    sure I never lose sight of my primary goal, which is to personally help people transform their
                    lives.</p>
                <p> In the interest of a more personal touch, I’m only going to be taking a handful of clients at a
                    time. With this new approach, I’m going to be focusing on giving a select group of individuals
                    the most personal experience possible in the online coaching world. I wish I could accept all
                    inquiries, but I can’t stress enough how I want to make sure those I’m working with are taken
                    care of, by me, personally.</p>
                <p> Regardless of what the response may be — whether we’re able to work together or not — I’ll be in
                    touch with you within 24-48 hours. But by all means, I absolutely encourage you to inquire
                    below. You can read the details below for more information. I’m looking forward to hearing from
                    you!</p>
            </div>
        </div>

        <div class="clear"></div>

    </div>
</section>
<section id="instagram_feed" style="background-color:#eee;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="instagram" data-userid="31013960" data-limit="8">ig feed</div>

                <div class="igviewer hidden"><img src=""></div>
            </div>
            <div class="col-xs-12">
               <!-- <div class="social-icons-services" style="">
                    <div class="social-figure" style=" height: 50px; width: 60%;">
                        <div class="facebook" style="text-align: center;">
                            <h2 class="entypo-facebook">Me @insta</h2>
                        </div>
                        <div class="social-hover">
                            <h2 class="entypo-facebook"><a style="text-decoration: none;;" href="https://www.instagram.com/jonathanajohansson/">Click to open</a></h2>
                        </div>
                    </div>
                    <div class="social-figure" style="
    width: 10%;
">
                        <div class="twitter">
                            <h2 class="entypo-twitter"></h2>
                        </div>
                        <div class="social-hover">
                            <h2 class="entypo-twitter"></h2>
                        </div>
                    </div>
                    <div class="social-figure" style="
    width: 10%;
">
                        <div class="gplus">
                            <h2 class="entypo-gplus"></h2>
                        </div>
                        <div class="social-hover">
                            <h2 class="entypo-gplus"></h2>
                        </div>
                    </div>
                    <div class="social-figure" style="
    width: 10%;
">
                        <div class="pinterest">
                            <h2 class="entypo-pinterest"></h2>
                        </div>
                        <div class="social-hover">
                            <h2 class="entypo-pinterest"></h2>
                        </div>
                    </div>
                    <div class="social-figure" style="
    width: 10%;
">
                        <div class="vimeo">
                            <h2 class="entypo-vimeo"></h2>
                        </div>
                        <div class="social-hover">
                            <h2 class="entypo-vimeo"></h2>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>

    </div>
</section>
<section id="offer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="section-heading">What I offer</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <p>Since day one, my priority has been to help people transform themselves. Over time, my schedule
                    has gotten busier, and so for a little while, I did take this service off — but only so I could
                    reevaluate the way I approached it and offer it in an even more engaging way. I want to make
                    sure I never lose sight of my primary goal, which is to personally help people transform their
                    lives.</p>
                <p> In the interest of a more personal touch, I’m only going to be taking a handful of clients at a
                    time. With this new approach, I’m going to be focusing on giving a select group of individuals
                    the most personal experience possible in the online coaching world. I wish I could accept all
                    inquiries, but I can’t stress enough how I want to make sure those I’m working with are taken
                    care of, by me, personally.</p>
                <p> Regardless of what the response may be — whether we’re able to work together or not — I’ll be in
                    touch with you within 24-48 hours. But by all means, I absolutely encourage you to inquire
                    below. You can read the details below for more information. I’m looking forward to hearing from
                    you!</p>
            </div>
        </div>

        <div class="clear"></div>

    </div>
</section>

<section id="price_plans">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="section-heading">Select A Plan</h1>
            </div>
        </div>

        <div class="row">

            <?php
            $query = new WP_Query(array('post_type' => 'price_plans', 'orderby' => 'rand', 'posts_per_page' => 3));

            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();

                $image_before = get_field('image_before');


                ?>
                <div class="col-xs-12 col-md-4 plan-item">
                    <div class="plan-item-container">
                        <div class="plan-item-top-header">
                            <h2 class="plan-item-header-h3"><?php echo the_title(); ?></h2>
                        </div>
                        <div class="plan-item-content">
                            <h3 class="plan-item-feature-h3">Features</h3>
                            <ul>
                                <li><i class="fa fa-check"></i><?php echo get_field('feature_1'); ?></li>
                                <li><i class="fa fa-check"></i><?php echo get_field('feature_2'); ?></li>
                                <li><i class="fa fa-check"></i><?php echo get_field('feature_3'); ?></li>
                                <li><i class="fa fa-check"></i><?php echo get_field('feature_4'); ?></li>
                            </ul>
                            <h3 class="plan-item-feature-h3">Price</h3>
                            <h2 class="plan-item-price"><i>$</i><?php echo get_field('price'); ?>.00</h2>
                        </div>
                        <div class="plan-item-footer">
                            <div class="plan-item-footer-button">
                                <a href="<?php echo get_permalink(get_page_by_path('sign-up')); ?>?plan=<?php echo $post->post_name; ?>"
                                   class="cta cta-btn-1 apply">
                                    <svg>
                                        <rect x="0" y="0" fill="none" width="100%" height="100%"/>
                                    </svg>
                                    APPLY
                                </a>


                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>


            <?php else : ?>


            <?php endif;

            ?>

        </div>
        <div class="row">
            <div class="col-xs-12">
                <div>
                    <ul class="detail-list">
                        <li>Each and every application is read by me to determine if we should work together.</li>
                        <li>If I’m unable to work with you for any reason, I’ll let you know and make a
                            recommendation for another coach who I think will suit your needs better.
                        </li>
                        <li>If I’m able to work with you, great! I’ll send you an email letting you know, and we’ll
                            go over the details there.
                        </li>
                        <li>All communication will be handled via email, for your convenience. For all clients,
                            replies to questions and general messages will be guaranteed within 36 hours.
                        </li>
                        <li>If we’re able to work together, we will be in contact multiple times per week. I’m
                            committed to offering you as personal of a service as I can, and I'm extremely confident
                            you will be more than satisfied with what we accomplish together.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clear"></div>

    </div>
</section>
<section id="clients" class="clients">
    <div class="container">

        <div class="row">
            <div class="col-xs-12">
                <div>
                    <h1 class="section-heading">Clients</h1>
                </div>
            </div>
            <div class="col-xs-12">
                <ul class="grid">

                    <?php
                    $query = new WP_Query(array('post_type' => 'clients', 'orderby' => 'rand', 'posts_per_page' => 4));

                    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();

                        $image_before = get_field('image_before');


                        ?>
                        <li>
                            <div class="first"
                                 style="background-image: url('<?php echo get_field('image_before')["url"]; ?>'); background-repeat: no-repeat; background-size:cover;">
                                <div class="thumb-content">
                                    <p class="client-title"><?php echo the_title(); ?></p>
                                    <p class="client-period">before</p>
                                </div>

                            </div>

                            <div class="second toggleHide"
                                 style="background-image: url('<?php echo get_field('image_after')["url"]; ?>'); background-repeat: no-repeat; background-size:cover;">
                                <div class="thumb-content">
                                    <p class="client-title"><?php echo the_title(); ?></p>
                                    <p class="client-period">after</p>

                                </div>

                            </div>
                        </li>

                        <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

                        </div>

                    <?php endwhile; ?>


                    <?php else : ?>


                    <?php endif;

                    ?>

                </ul>
            </div>
        </div>

        <div class="clear"></div>

    </div>
</section>

<?php
get_footer();

?>
<script type="text/javascript">
    $('.grid li').mouseenter(function () {
        $(this).find(".first").addClass('toggleHide');
        $(this).find(".second").removeClass('toggleHide');


    })
    $('.grid li').mouseleave(function () {
        $(this).find(".first").removeClass('toggleHide');
        $(this).find(".second").addClass('toggleHide');

    })

    var ig = {};
    // !!! USE YOUR OWN TOKEN
    ig.token = '1425191271.3a81a9f.087685a349414b88ad17316992a05069';

    ig.init = function () {
        $('.instagram').each(function (i) {
            var args = {};
            args.container = $(this);
            args.userid = args.container.data('userid');
            args.limit = args.container.data('limit');
            args.feedurl = 'https://api.instagram.com/v1/users/' + args.userid + '/media/recent/?access_token=' + ig.token + '&count=' + args.limit + '&callback=?';
            args.html = '';
            // PASS ARGS TO QUERY
            ig.query(args);
        });
    }

    ig.query = function (args) {
        $.getJSON(args.feedurl, {}, function (data) {
            // PASS QUERY DATA TO BUILDER
            ig.build(data, args);
        });
    }


    ig.build = function (data, args) {

        $.each(data.data, function (i, item) {
            console.log(item);
            if (item.caption) var caption = item.caption.text;
            var thumb = item.images.low_resolution.url;
            var img = item.images.standard_resolution.url;
            //get 1280 size photo [hack until avail in api]
            var hires = img.replace('s640x640', '1080x1080');
            args.html += '<a href="' + item.link + '"class="image" style="background-image: url(' + thumb + ');"  >';
            if (caption) args.html += '<span class="caption">' + caption + '</span>';
            args.html += '</a>';
            // PASS TO OUTPUT
            ig.output(args);
        });
    }

    ig.output = function (args) {
        args.container.html(args.html);
    }

    ig.view = {
        viewer: $('.igviewer'),
        image: $('.igviewer img'),
        open: function (img) {
            ig.view.viewer.removeClass('hidden');
            ig.view.image.attr('src', img);
        },
        close: function () {
            ig.view.viewer.addClass('hidden');
            ig.view.image.attr('src', '');
        }
    }

    ig.init();

    //Listeners
    $('.instagram').on('click', '.image', function () {
        var img = this.dataset.img;
        ig.view.open(img);
    });
    $('.igviewer').on('click', function () {
        ig.view.close();
    });
</script>

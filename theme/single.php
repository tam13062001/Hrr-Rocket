<?php get_header() ?>

<div class="w-full relative hidden">
    <img class="absolute top-0 object-cover h-full w-full" src="<?php echo get_stylesheet_directory_uri().'/assets/images/img.png' ?>" />
    <div class="container mx-auto h-[542px] relative">
        <div class="relative h-full">
            <div class="h-full flex justify-center items-center">
                <div class="banner-title text-white mb-[20px] lg:mb-[44px] text-center">
                    News
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-white py-[50px]">
    <div class="container mx-auto lg:flex lg:space-x-5">
        <div class="lg:w-3/4 lg:pr-[144px]">
            <div class="flex flex-col lg:flex-row font-exo lg:space-x-5 justify-between mb-[40px]">
                <div class="flex flex-wrap flex-1 lg:flex-row">
                    <div class="font-light mr-4">
                        <a href="/">Home</a>
                    </div>
                    <div class="mr-4">/</div>
                    <div class="underline font-semibold uppercase truncate overflow-hidden max-w-[400px]">
                        <?php the_title() ?>
                    </div>
                </div>
                <div class="font-exo shrink-0 mt-4 lg:mt-0">Date <?php echo get_the_date('d.m.Y') ?></div>
            </div>
            <div class="mb-[50px] lg:mb-[75px]">
                <?php if (has_post_thumbnail()) { ?>
                    <div class="mb-[48px] lg:mb-[54px] max-h-[500px] hidden">
                        <img class="rounded-[10px]" src="<?php echo get_the_post_thumbnail_url() ?>" alt="Cover" />
                    </div>
                <?php } ?>

                <div class="text-title text-primary mb-4">
                    <?php the_title() ?>
                </div>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>

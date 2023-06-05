<?php 
/**
 * The template for displaying the header
 * 
 * @package Day Six theme
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?> | <?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class( 'page-block ' ); ?> id="up">
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/ScrollTrigger.min.js"></script>

<header class="fixed top-2 right-2 left-2 lg:right-[15px] lg:left-[15px] h-[66px] p-[6px] lg:p-[8px] rounded-full grid grid-cols-4 bg-green z-40">
    <div class="col-span-2 md:col-span-1 justify-start pl-2 lg:pl-4 items-center flex max-w-[240px]">
        <a href="/"><img src="/wp-content/themes/crossfitsiargao-theme/img/local/logo.png" alt="" class="h-auto w-[240px] mb-[8px]"></a>
    </div>
    <div class="col-span-2 md:col-span-3 flex justify-end flex-row">
        <div class="hidden lg:flex justify-end flex-row">
            <a class="text-white text-18 leading-30 font-heebo-medium mr-2 lg:mr-[35px] flex justify-center items-center hover:opacity-[0.8]" href="#about-us">
                About us
            </a>
            <a class="text-white text-18 leading-30 font-heebo-medium mr-2 xl:mr-[35px] flex justify-center items-center hover:opacity-[0.8]" href="#classes">
                Classes
            </a>
            <a class="text-white text-18 leading-30 font-heebo-medium mr-2 xl:mr-[35px] flex justify-center items-center hover:opacity-[0.8]" href="#information">
                Information
            </a>
           
        </div>
        <div class="flex flex-row">
             <a class="text-white text-18 leading-30 font-heebo-medium mr-[15px] xl:mr-[15px] flex justify-center items-center hover:opacity-[0.8]" href="https://instagram.com/crossfitsiargao" target="_blank">
            <?php include get_template_directory() . '/img/icons/linkedin-white.php'; ?>
            </a>
            <a class="text-white text-18 leading-30 font-heebo-medium mr-2 xl:mr-[35px] flex justify-center items-center hover:opacity-[0.8]" href="https://facebook.com/crossfitsiargao" target="_blank">
            <?php include get_template_directory() . '/img/icons/facebook-white.php'; ?>
            </a>
        </div>
       
    </div>
</header>
  



<?php
/**
 * Template name: Homepage
 */


 get_header(); ?>
 

<main class="overflow-x-hidden">
    <!-- header -->
    <section class="h-screen w-full relative flex">
        <div class="bg-black/[0.3] w-full h-full absolute top-0 right-0 z-[1]"></div>
        <picture >
            <source srcset="/wp-content/themes/crossfitsiargao-theme/img/local/5.jpg"
                    media="(min-width: 800px)">
            <img class="absolute top-0 right-0 w-full h-full object-cover z-0" src="/wp-content/themes/crossfitsiargao-theme/img/local/5.jpg" />
        </picture>
        <div class="container relative z-[2] my-auto">
            <a href="/"><img src="/wp-content/themes/crossfitsiargao-theme/img/local/logo.png" alt="" class="h-auto w-[400px] mx-auto"></a>
            <h1 class="text-white text-30 leading-50 md:text-60 font-heebo-extrabold md:leading-70 text-center mx-auto mb-4 md:px-5 pt-1">#buildingastrongerisland</h1>
            
        </div>
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 z-[3] bounce-animation">
            <a href="#down"><?php include get_template_directory() . '/img/icons/arrow-hero.php'; ?></a>
        </div>
    </section>
    <!-- ABOUT US -->
    <section class="bg-green relative overflow-x-hidden" id="about-us">
        <div class="grain"></div>
        <div class="container relative z-10" id="down">
            <div class="pt-10 mb-10">
                <h2 class="text-white text-50 leading-50 font-heebo-extrabold text-center lg:w-2/3 mx-auto mb-4 md:px-5">About us</h2>
                <p class="text-white text-26 leading-38 font-heebo-regular text-center lg:w-[855px] mx-auto md:px-4">CrossFit Siargao is a place where locals, tourists, travelers, backpackers, athletes, surfers and coaches can work on their fitness and health goals, create a better lifestyle and be part of a community with a like minded common purpose. To move better!<br><br>We are the first official affiliate in Siargao, The Philippines and open 7 days a week to offer you an unique workout experience on a remote island in the South Pacific. Come and join one of our group classes, book your personal training session and join our community for some pre or post workout drinks on our roof terrace under the Siargao sun.<br><br>Together with all of you our mission is simple #buildingastrongerisland</p>
            </div>
            <div class="grid grid-cols-2 gap-[20px] md:gap-4 pb-10 max-w-[800px] mx-auto">
                <div class="col-span-1 md:col-span-1">
                    <img class="w-full h-auto object-cover rounded-3xl element-fade-in box-1" src="/wp-content/themes/crossfitsiargao-theme/img/local/Siargao_Mike.jpg" alt="">
                </div>
                <div class="col-span-1 md:col-span-1">
                    <img class="w-full h-auto object-cover rounded-3xl element-fade-in box-2" src="/wp-content/themes/crossfitsiargao-theme/img/local/Siargao_Daphne.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- CLASSES -->
<section class="bg-[#fdfdfd] py-10 relative overflow-x-hidden start-car-animtion" id="classes">
        <div class="grain"></div>
        <div class="container relative  z-10">
            <h2 class="text-green text-50 leading-50 font-heebo-extrabold text-center md:w-2/3 mx-auto mb-4 md:px-5">Our classes</h2>
            <div class="grid grid-cols-2 mt-9 md:mt-12">
                <div class="col-span-2 md:col-span-1">
                    <h3 class="text-green text-40 leading-40 font-heebo-bold md:hidden text-center mb-[35px] px-2">CrossFit</h3>
                    <img class="w-full h-auto object-cover rounded-3xl mb-4 md:mb-0" src="/wp-content/themes/crossfitsiargao-theme/img/local/3.jpg" alt="">
                </div>
                <div class="col-span-2 md:col-span-1 md:pl-6 lg:pr-6 flex flex-col justify-center">
                    <h3 class="text-green text-40 leading-40 font-heebo-bold mb-3 hidden md:block">CrossFit</h3>
                    <p class="text-black text-18 leading-26 font-heebo-regular text-center md:text-start">Just like CrossFit defines it; this class is all about constantly varied functional movements executed at a high intensity</p>
                </div>
            </div>
            <div class="grid grid-cols-2 mt-9">
                <div class="col-span-2 md:col-span-1 md:pl-6 md:pr-6 flex flex-col justify-center order-2 md:order-1">
                    <h3 class="text-green text-40 leading-40 font-heebo-bold mb-3 text-center md:text-start px-4 md:px-0 hidden md:block">CFS Sweat</h3>
                    <p class="text-black text-18 leading-26 font-heebo-regular mb-3 text-center md:text-start">This is a 60-minutes HIIT based class divided in a lower, upper and full body workout depending on the day. Whether you are looking for weight loss, improving your fitness, gaining strength, this new training method in CFS will drag you out of your comfort zone and into your results fast. Also a great way to start your fitness journey!</p>
                </div>
                <div class="col-span-2 md:col-span-1 order-1 md:order-2">
                <h3 class="text-green text-40 leading-40 font-heebo-bold mb-3 text-center md:text-start px-2 md:px-0 md:hidden">CFS Sweat</h3>
                    <img class="w-full h-auto object-cover rounded-3xl mb-4 md:mb-0" src="/wp-content/themes/crossfitsiargao-theme/img/local/6.jpg" alt="">
                </div>
            </div>
            <div class="grid grid-cols-2 mt-9 md:mt-12">
                <div class="col-span-2 md:col-span-1">
                    <h3 class="text-green text-40 leading-40 font-heebo-bold md:hidden text-center mb-[35px] px-2">Open Gym</h3>
                    <img class="w-full h-auto object-cover rounded-3xl mb-4 md:mb-0" src="/wp-content/themes/crossfitsiargao-theme/img/local/4.jpg" alt="">
                </div>
                <div class="col-span-2 md:col-span-1 md:pl-6 lg:pr-6 flex flex-col justify-center">
                    <h3 class="text-green text-40 leading-40 font-heebo-bold mb-3 hidden md:block">Open Gym</h3>
                    <p class="text-black text-18 leading-26 font-heebo-regular text-center md:text-start">Besides classes CrossFit Siargao also gives you the opportunity to have your own training during our open gym hours.</p>
                </div>
            </div>
            <div class="grid grid-cols-2 mt-9">
                <div class="col-span-2 md:col-span-1 md:pl-6 md:pr-6 flex flex-col justify-center order-2 md:order-1">
                    <h3 class="text-green text-40 leading-40 font-heebo-bold mb-3 text-center md:text-start px-4 md:px-0 hidden md:block">Personal Training</h3>
                    <p class="text-black text-18 leading-26 font-heebo-regular mb-3 text-center md:text-start">If you prefer customized one-on-one training, goal orientated in the long term or working on a specific skill while visiting the island, all options can be discussed.</p>
                </div>
                <div class="col-span-2 md:col-span-1 order-1 md:order-2">
                <h3 class="text-green text-40 leading-40 font-heebo-bold mb-3 text-center md:text-start px-2 md:px-0 md:hidden">Personal Training</h3>
                    <img class="w-full h-auto object-cover rounded-3xl mb-4 md:mb-0" src="/wp-content/themes/crossfitsiargao-theme/img/local/1.jpg" alt="">
                </div>
            </div>
            <div class="grid grid-cols-2 mt-9 md:mt-12">
                <div class="col-span-2 md:col-span-1">
                    <h3 class="text-green text-40 leading-40 font-heebo-bold md:hidden text-center mb-[35px] px-2">Group & Company Training</h3>
                    <img class="w-full h-auto object-cover rounded-3xl mb-4 md:mb-0" src="/wp-content/themes/crossfitsiargao-theme/img/local/5.jpg" alt="">
                </div>
                <div class="col-span-2 md:col-span-1 md:pl-6 lg:pr-6 flex flex-col justify-center">
                    <h3 class="text-green text-40 leading-40 font-heebo-bold mb-3 hidden md:block">Group & Company Training</h3>
                    <p class="text-black text-18 leading-26 font-heebo-regular text-center md:text-start">CrossFit Siargao also offers personal group training and company training. Please contact us to learn more.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- LOCATIES -->
    <section class="pt-12 bg-green  relative z-20" id="information">
        <div class="grain"></div>
        <div class="container relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="col-span-1 order-3 lg:order-1">
                    <h2 class="text-white text-35 leading-45 font-heebo-extrabold">About Fitness</h2>
                    <div class="pt-2">
                        <p class="text-white text-18 leading-24 font-heebo-normal">“Eat meat and vegetables, nuts and seeds, some fruit, little starch and no sugar. Keep intake to levels that will support exercise, but not body fat. Practice and train the major lifts: Deadlift, Clean, Squat, Presses, Clean and Jerk and Snatch. Similarly, master the basics of gymnastics: Pullups, Dips, Rope Climb, Push Ups, Presses to Handstand, Pirouettes, Flips, Splits and Holds. Bike, Run, Swim, Row, etc. Hard and Fast. 5 or 6 days per week mix these elements in as many combinations and patterns as creativity will allow. Routine is the enemy. Keep workouts short and intense. Regularly learn and play new sports.”</p>
                        <p class="text-white text-14 leading-24 font-heebo-normal opacity-40 pt-1">Fitness in 100 words</p>
                    </div>
                </div>
                <div class="col-span-1 order-1 lg:order-2">
                    <h2 class="text-white text-35 leading-45 font-heebo-extrabold">Rates</h2>
                     <div class="pt-2">
                        <p class="text-white text-18 leading-24 font-heebo-normal">Please note membership can not be placed on hold except in case of injury.</p>
                    </div>
                    <div class="grid grid-cols-3 gap-1 max-w-[350px] pt-2">
                        <div class="col-span-2 bg-transparent w-full h-[38px] rounded-xl"></div>
                        <div class="col-span-1 bg-[#e3d9d7] w-full h-[38px] flex items-center justify-center rounded-xl"><p class="text-black text-18 leading-24 font-heebo-bold">PHP</p></div>
                        <div class="col-span-2 bg-[#e3d9d7] w-full h-[38px] flex items-center justify-center rounded-xl"><p class="text-black text-18 leading-24 font-heebo-bold">1 Session</p></div>
                        <div class="col-span-1 bg-[#9ea489] w-full h-[38px] flex items-center justify-center rounded-xl"><p class="text-black text-18 leading-24 font-heebo-normal">400</p></div>
                        <div class="col-span-2 bg-[#e3d9d7] w-full h-[38px] flex items-center justify-center rounded-xl"><p class="text-black text-18 leading-24 font-heebo-bold">1 Week Unlimited</p></div>
                        <div class="col-span-1 bg-[#9ea489] w-full h-[38px] flex items-center justify-center rounded-xl"><p class="text-black text-18 leading-24 font-heebo-normal">1.750</p></div>
                        <div class="col-span-2 bg-[#e3d9d7] w-full h-[38px] flex items-center justify-center rounded-xl"><p class="text-black text-18 leading-24 font-heebo-bold">1 Month Unlimited</p></div>
                        <div class="col-span-1 bg-[#9ea489] w-full h-[38px] flex items-center justify-center rounded-xl"><p class="text-black text-18 leading-24 font-heebo-normal">3.500</p></div>
                        <div class="col-span-2 bg-[#e3d9d7] w-full h-[38px] flex items-center justify-center rounded-xl"><p class="text-black text-18 leading-24 font-heebo-bold">3 Months Unlimited</p></div>
                        <div class="col-span-1 bg-[#9ea489] w-full h-[38px] flex items-center justify-center rounded-xl"><p class="text-black text-18 leading-24 font-heebo-normal">9.500</p></div>
                    </div>
                    <h2 class="text-white text-35 leading-45 font-heebo-extrabold pt-3">Our location</h2>
                     <div class="pt-2">
                        <p class="text-white text-18 leading-24 font-heebo-normal">Find us on Tourism Road across Bravo Resort</p>
                    </div>
                </div>
                <div class="col-span-1 order-2 lg:order-3">
                    <h2 class="text-white text-35 leading-45 font-heebo-extrabold">Opening hours</h2>
                    <div class="grid grid-cols-2 gap-1 max-w-[350px] pt-2">
                        <div class="col-span-1 bg-[#e3d9d7] w-full h-[38px] flex items-center justify-center rounded-xl"><p class="text-black text-18 leading-24 font-heebo-bold">Day</p></div>
                        <div class="col-span-1 bg-[#e3d9d7] w-full h-[38px] flex items-center justify-center rounded-xl"><p class="text-black text-18 leading-24 font-heebo-bold">Hour</p></div>
                        <div class="col-span-1 bg-[#9ea489] w-full h-[38px] flex items-center justify-center rounded-xl"><p class="text-black text-18 leading-24 font-heebo-bold">Monday</p></div>
                        <div class="col-span-1 bg-[#b6baa4] w-full h-[38px] flex items-center justify-center rounded-xl"><p class="text-black text-18 leading-24 font-heebo-normal">7 am - 7 pm</p></div>
                        <div class="col-span-1 bg-[#bcb2b2] w-full h-[38px] flex items-center justify-center rounded-xl"><p class="text-black text-18 leading-24 font-heebo-bold">Tuesday</p></div>
                        <div class="col-span-1 bg-[#c9c0c0] w-full h-[38px] flex items-center justify-center rounded-xl"><p class="text-black text-18 leading-24 font-heebo-normal">7 am - 7 pm</p></div>
                        <div class="col-span-1 bg-[#9ea489] w-full h-[38px] flex items-center justify-center rounded-xl"><p class="text-black text-18 leading-24 font-heebo-bold">Wednesday</p></div>
                        <div class="col-span-1 bg-[#b6baa4] w-full h-[38px] flex items-center justify-center rounded-xl"><p class="text-black text-18 leading-24 font-heebo-normal">7 am - 7 pm</p></div>
                        <div class="col-span-1 bg-[#bcb2b2] w-full h-[38px] flex items-center justify-center rounded-xl"><p class="text-black text-18 leading-24 font-heebo-bold">Thursday</p></div>
                        <div class="col-span-1 bg-[#c9c0c0] w-full h-[38px] flex items-center justify-center rounded-xl"><p class="text-black text-18 leading-24 font-heebo-normal">7 am - 7 pm</p></div>
                        <div class="col-span-1 bg-[#9ea489] w-full h-[38px] flex items-center justify-center rounded-xl"><p class="text-black text-18 leading-24 font-heebo-bold">Friday</p></div>
                        <div class="col-span-1 bg-[#b6baa4] w-full h-[38px] flex items-center justify-center rounded-xl"><p class="text-black text-18 leading-24 font-heebo-normal">7 am - 7 pm</p></div>
                        <div class="col-span-1 bg-[#bcb2b2] w-full h-[38px] flex items-center justify-center rounded-xl"><p class="text-black text-18 leading-24 font-heebo-bold">Saturday</p></div>
                        <div class="col-span-1 bg-[#c9c0c0] w-full h-[38px] flex items-center justify-center rounded-xl"><p class="text-black text-18 leading-24 font-heebo-normal">7 am - 12 noon</p></div>
                        <div class="col-span-1 bg-[#9ea489] w-full h-[38px] flex items-center justify-center rounded-xl"><p class="text-black text-18 leading-24 font-heebo-bold">Sunday</p></div>
                        <div class="col-span-1 bg-[#b6baa4] w-full h-[38px] flex items-center justify-center rounded-xl"><p class="text-black text-18 leading-24 font-heebo-normal">7 am - 12 noon</p></div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
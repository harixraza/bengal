<?php

/**
 * Template name: Homepage
 */
get_header();
?>
<body>
<section>
        <div class="w-screen">
            <nav class=" w-full h-20 flex  justify-center items-center font-heebo">
                <div class="flex"> 
                <div class="w-24 h-5 flex lg:items-center">
                    <img class="w-full h-5 cursor-pointer" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/social.svg" alt="Social Icon" />
                </div>
                <div class="lg:w-24 w-7 h-6 flex items-center sm:justify-center lg:rounded-md lg:ml-7 lg:px-2 bg-primary">
                    <img class="w-4 h-4 " src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Path 10.svg" alt="Path 10" />
                    <label class="hidden sm:block pl-1 text-white text-base font-bold cursor-pointer"> *9096</label>
                </div>
            </div>
                <!-- Menu for large screens (hidden on small screens) -->
                <ul id="menu" class="md:flex hidden h-10 items-center space-x-10 lg:ml-24">
                    <li class="w-20 h-6 font-medium cursor-pointer">
                        <span class="text-base font-medium"> צור קשר</span>
                    </li>
                    <li class="flex w-20 cursor-pointer"> 
                        <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/down.svg" alt="Arrow Down" />
                        <span class="text-base font-medium"> מידע נוסף</span>
                    </li>
                    <li class="flex cursor-pointer "> 
                        <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/down.svg" alt="Arrow Down" />
                        <span class="text-base font-medium"> חנות אונליין</span>
                    </li>
                    <li class="flex w-20 cursor-pointer "> 
                        <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/down.svg" alt="Arrow Down" />
                        <span class="text-base font-medium"> שירותים</span>
                    </li>
                    <li class="flex cursor-pointer"> 
                        <span class="text-base font-medium">אודות החברה</span>
                    </li>
                    <li class="flex cursor-pointer "> 
                        <span class="text-base font-medium">בן גל</span>
                    </li>
                </ul>
                <div class="flex  lg:ml-10">   
                <div class="flex w-16 h-11  cursor-pointer">
                    <img class="relative left-5" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-logo.svg" alt="Logo" />
                </div>
                <div class="w-[70px] h-10 flex-col lg:flex-row justify-between items-center">
                    <text class="text-[25px] font-bold l    eading-3 ">Ben<a class="text-primary">Gal</a> </text>
        
                    <text class="text-[14px] font-bold relative left-5 -top-2 ">שירותי דרך</text>
                    
                </div>
            </div>

                <div id="menu-icon" class="lg:hidden cursor-pointer">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Group 112.svg" alt="Menu" />
                </div>
            </nav>
            <div >
            <div class="w-full h-[500px] bg-cover bg-center bg-blend-darken flex justify-end items-center font-heebo" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bannerbg.png')">
                <div class="w-[400px] h-[157px] mr-[345px]">
                    <div class="w-[450px] h-6  ">
                        <text class="text-4xl leading-3 font-bold text-white"> ?תיקון פנצ'ר באמצע הדרך </text>
                    </div>
                    <div class=" h-6 pt-2 text-end">
                        <text class="text-white font-heebo  text-xl font-normal "> ?זקוקים לשירות החלפת גלגל</text>
                    </div>
                    <div class="h-6 pt-4 flex items-center justify-end ">
                        <text class="text-white font-heebo text-24 font-normal">
                          השירות הינו בפריסה ארצית
                        </text>
                        <div class="text-white">
                          24/6
                        </div>
                        <img class="text-white w-4 h-4 ml-1" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Path 22.svg" />
                    </div>
                    <div class="h-6 mt-4 flex items-center justify-end">
                        <div class="w-40 h-9 bg-primary rounded-md flex items-center ">
                          <img class="text-white w-4 h-4 ml-1" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Path 20.svg" />
                          <text class="text-white font-heebo text-24 font-normal">
                            *:הזמנת שירות
                          </text>
                          <span class="text-white font-heebo text-24 font-normal ml-1">9096</span>
                        </div>
                      
                        <div class="w-20 h-9 ml-4 bg-white flex justify-center items-center rounded-md">
                            <text class="text-black font-heebo text-24 font-normal"> צור קשר</text>
                          </div>
                          
                      </div> 
                      
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="container">
        <div class="lg:flex flex-row w-full  items-center justify-center  relative lg:-top-14 md:-top-14 sm:top-0 sm:mt-[20px] space-x-20">
        <div class="grid lg:grid-cols-4 sm:grid-cols-1 gap-4 ">
            <div class="text-center bg-[#EB2F19] bg-opacity-95 rounded-md px-14 py-8 text-[#fff]" >
            <svg class="mb-[8px]" xmlns="http://www.w3.org/2000/svg" width="100%" height="43.998" viewBox="0 0 55.776 43.998">
            <path id="Car_battery_replacement" data-name="Car battery replacement" d="M236.411,359.806h18.414v2.565h1.863v-2.6a1.409,1.409,0,0,0-1.581-1.371H236.165a1.409,1.409,0,0,0-1.581,1.371v2.6h1.863v-2.565Zm-7.028,4.6a.676.676,0,0,0-.668-.7h-.808v-2.144a.676.676,0,0,0-.668-.7h-3.62a.7.7,0,0,0-.668.7v2.144h-.808a.7.7,0,0,0-.668.7v.738h7.837v-.738Zm35.493,11.632H262.7v2.46h-2.46v2.179h2.46v2.46h2.179v-2.46h2.46V378.5h-2.46Zm4.779-11.632a.676.676,0,0,0-.668-.7h-.808v-2.144a.676.676,0,0,0-.668-.7h-3.62a.7.7,0,0,0-.668.7v2.144h-.808a.7.7,0,0,0-.668.7v.738h7.837v-.738Zm3.831,37.5-.6-1.722a.878.878,0,0,0-.808-.492h-.035V371.157H219.191v28.535h-.035a.841.841,0,0,0-.808.492l-.6,1.722c-.105.281.105.492.492.492h54.751C273.345,402.4,273.556,402.187,273.485,401.906Zm-46.106-17.29a5.06,5.06,0,1,1,5.06-5.06A5.062,5.062,0,0,1,227.379,384.616ZM240.065,399.8l4.393-10.824-6.888,1.335,11.773-17.22-4.393,11.491,8.188-1.617Zm23.756-15.181a5.06,5.06,0,1,1,5.06-5.06A5.062,5.062,0,0,1,263.821,384.616ZM223.9,380.645H231v-2.179h-7.1Zm-5.236-10.437h53.873a.667.667,0,0,0,.668-.668v-2.917a.667.667,0,0,0-.668-.668H259.147v-2.6a.667.667,0,0,0-.668-.668H232.721a.667.667,0,0,0-.668.668v2.565H218.664a.667.667,0,0,0-.668.668V369.5A.7.7,0,0,0,218.664,370.208Z" transform="translate(-217.723 -358.4)" fill="#fff"/>
            </svg>
            <span class="mt-[8px]">
            החלפת מצברים בדרכים
            </span>
            </div>
            <div class="text-center bg-[#EB2F19] bg-opacity-95 rounded-md px-14 py-8 text-[#fff]" >
            <svg class="mb-[8px]" xmlns="http://www.w3.org/2000/svg" width="100%" height="43.998" viewBox="0 0 55.776 43.998">
            <path id="Car_battery_replacement" data-name="Car battery replacement" d="M236.411,359.806h18.414v2.565h1.863v-2.6a1.409,1.409,0,0,0-1.581-1.371H236.165a1.409,1.409,0,0,0-1.581,1.371v2.6h1.863v-2.565Zm-7.028,4.6a.676.676,0,0,0-.668-.7h-.808v-2.144a.676.676,0,0,0-.668-.7h-3.62a.7.7,0,0,0-.668.7v2.144h-.808a.7.7,0,0,0-.668.7v.738h7.837v-.738Zm35.493,11.632H262.7v2.46h-2.46v2.179h2.46v2.46h2.179v-2.46h2.46V378.5h-2.46Zm4.779-11.632a.676.676,0,0,0-.668-.7h-.808v-2.144a.676.676,0,0,0-.668-.7h-3.62a.7.7,0,0,0-.668.7v2.144h-.808a.7.7,0,0,0-.668.7v.738h7.837v-.738Zm3.831,37.5-.6-1.722a.878.878,0,0,0-.808-.492h-.035V371.157H219.191v28.535h-.035a.841.841,0,0,0-.808.492l-.6,1.722c-.105.281.105.492.492.492h54.751C273.345,402.4,273.556,402.187,273.485,401.906Zm-46.106-17.29a5.06,5.06,0,1,1,5.06-5.06A5.062,5.062,0,0,1,227.379,384.616ZM240.065,399.8l4.393-10.824-6.888,1.335,11.773-17.22-4.393,11.491,8.188-1.617Zm23.756-15.181a5.06,5.06,0,1,1,5.06-5.06A5.062,5.062,0,0,1,263.821,384.616ZM223.9,380.645H231v-2.179h-7.1Zm-5.236-10.437h53.873a.667.667,0,0,0,.668-.668v-2.917a.667.667,0,0,0-.668-.668H259.147v-2.6a.667.667,0,0,0-.668-.668H232.721a.667.667,0,0,0-.668.668v2.565H218.664a.667.667,0,0,0-.668.668V369.5A.7.7,0,0,0,218.664,370.208Z" transform="translate(-217.723 -358.4)" fill="#fff"/>
            </svg>
            <span class="mt-[8px]">
            החלפת מצברים בדרכים
            </span>
            </div>
            <div class="text-center bg-[#EB2F19] bg-opacity-95 rounded-md px-14 py-8 text-[#fff]" >
            <svg class="mb-[8px]" xmlns="http://www.w3.org/2000/svg" width="100%" height="43.998" viewBox="0 0 55.776 43.998">
            <path id="Car_battery_replacement" data-name="Car battery replacement" d="M236.411,359.806h18.414v2.565h1.863v-2.6a1.409,1.409,0,0,0-1.581-1.371H236.165a1.409,1.409,0,0,0-1.581,1.371v2.6h1.863v-2.565Zm-7.028,4.6a.676.676,0,0,0-.668-.7h-.808v-2.144a.676.676,0,0,0-.668-.7h-3.62a.7.7,0,0,0-.668.7v2.144h-.808a.7.7,0,0,0-.668.7v.738h7.837v-.738Zm35.493,11.632H262.7v2.46h-2.46v2.179h2.46v2.46h2.179v-2.46h2.46V378.5h-2.46Zm4.779-11.632a.676.676,0,0,0-.668-.7h-.808v-2.144a.676.676,0,0,0-.668-.7h-3.62a.7.7,0,0,0-.668.7v2.144h-.808a.7.7,0,0,0-.668.7v.738h7.837v-.738Zm3.831,37.5-.6-1.722a.878.878,0,0,0-.808-.492h-.035V371.157H219.191v28.535h-.035a.841.841,0,0,0-.808.492l-.6,1.722c-.105.281.105.492.492.492h54.751C273.345,402.4,273.556,402.187,273.485,401.906Zm-46.106-17.29a5.06,5.06,0,1,1,5.06-5.06A5.062,5.062,0,0,1,227.379,384.616ZM240.065,399.8l4.393-10.824-6.888,1.335,11.773-17.22-4.393,11.491,8.188-1.617Zm23.756-15.181a5.06,5.06,0,1,1,5.06-5.06A5.062,5.062,0,0,1,263.821,384.616ZM223.9,380.645H231v-2.179h-7.1Zm-5.236-10.437h53.873a.667.667,0,0,0,.668-.668v-2.917a.667.667,0,0,0-.668-.668H259.147v-2.6a.667.667,0,0,0-.668-.668H232.721a.667.667,0,0,0-.668.668v2.565H218.664a.667.667,0,0,0-.668.668V369.5A.7.7,0,0,0,218.664,370.208Z" transform="translate(-217.723 -358.4)" fill="#fff"/>
            </svg>
            <span class="mt-[8px]">
            החלפת מצברים בדרכים
            </span>
            </div>
            <div class="text-center bg-[#EB2F19] bg-opacity-95 rounded-md px-14 py-8 text-[#fff]" >
            <svg class="mb-[8px]" xmlns="http://www.w3.org/2000/svg" width="100%" height="43.998" viewBox="0 0 55.776 43.998">
            <path id="Car_battery_replacement" data-name="Car battery replacement" d="M236.411,359.806h18.414v2.565h1.863v-2.6a1.409,1.409,0,0,0-1.581-1.371H236.165a1.409,1.409,0,0,0-1.581,1.371v2.6h1.863v-2.565Zm-7.028,4.6a.676.676,0,0,0-.668-.7h-.808v-2.144a.676.676,0,0,0-.668-.7h-3.62a.7.7,0,0,0-.668.7v2.144h-.808a.7.7,0,0,0-.668.7v.738h7.837v-.738Zm35.493,11.632H262.7v2.46h-2.46v2.179h2.46v2.46h2.179v-2.46h2.46V378.5h-2.46Zm4.779-11.632a.676.676,0,0,0-.668-.7h-.808v-2.144a.676.676,0,0,0-.668-.7h-3.62a.7.7,0,0,0-.668.7v2.144h-.808a.7.7,0,0,0-.668.7v.738h7.837v-.738Zm3.831,37.5-.6-1.722a.878.878,0,0,0-.808-.492h-.035V371.157H219.191v28.535h-.035a.841.841,0,0,0-.808.492l-.6,1.722c-.105.281.105.492.492.492h54.751C273.345,402.4,273.556,402.187,273.485,401.906Zm-46.106-17.29a5.06,5.06,0,1,1,5.06-5.06A5.062,5.062,0,0,1,227.379,384.616ZM240.065,399.8l4.393-10.824-6.888,1.335,11.773-17.22-4.393,11.491,8.188-1.617Zm23.756-15.181a5.06,5.06,0,1,1,5.06-5.06A5.062,5.062,0,0,1,263.821,384.616ZM223.9,380.645H231v-2.179h-7.1Zm-5.236-10.437h53.873a.667.667,0,0,0,.668-.668v-2.917a.667.667,0,0,0-.668-.668H259.147v-2.6a.667.667,0,0,0-.668-.668H232.721a.667.667,0,0,0-.668.668v2.565H218.664a.667.667,0,0,0-.668.668V369.5A.7.7,0,0,0,218.664,370.208Z" transform="translate(-217.723 -358.4)" fill="#fff"/>
            </svg>
            <span class="mt-[8px]">
            החלפת מצברים בדרכים
            </span>
            </div>
            </div>

        </div>
    </section>

    <section class="container">
        <div class="grid lg:grid-cols-2 md:grid-cols-2 gap-4 sm:grid-cols-1">
            <div class="p-4">
                <div class="flex-col">
                    <img width="100%" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Group 62.png" />
                </div>
            </div>
            <div class="p-4">
                <div class="text-right">
                    <tex class="text-black text-xl font-heebo ps-4  font-bold">  אודות בן גל שירותי דרך </tex>
                    <p class="text-black font-heebo ps-4 text-base mt-2 font-normal "> 
                        אנחנו מתמחים בכל פתרונות שיורתי דרך, שירותי החלפת גלגל
                        ותיקון פנצ׳ר לכל סוגי הרכבים בדרכים. נגיע במהירות לכל מקום
                        . ברשותנו פנצ’ריות ניידות מאובזרות בכלי24/6ובכל שעה 
                        העבודה החדישים והיעילים ביותר בענף. ברשותינו שירותי דרך
                        לכל סוגי רכב תקוע/תקול בצורה המהירה ביותר. אנו מציעים
                        שירותי חילוצי רכב בכל חלקי הארץ, מהצפון ועד אילת. אנחנו
                        שעות, בכל מזג24נגיע אליך בכל מצב. שירות החלפת גלגל 
                        אוויר, לכל נקודה בצורה מיידית.אנחנו מתמחים בכל פתרונות
                        שיורתי דרך, שירותי החלפת גלגל ותיקון פנצ׳ר לכל סוגי הרכבים
                        . ברשותנו24/6בדרכים. נגיע במהירות לכל מקום ובכל שעה 
                        פנצ’ריות נייד
                    </p>
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center gap-x-10 p-4">
        <svg id="Z0n3SD.tif" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="77.848" height="27.061" viewBox="0 0 77.848 27.061">
        <defs>
            <pattern id="pattern" preserveAspectRatio="none" width="100%" height="100%" viewBox="0 0 82 28">
            <image width="82" height="28" xlink:href="data:image/png;base64,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"/>
            </pattern>
        </defs>
        <rect id="Layer_0" data-name="Layer 0" width="77.848" height="27.061" fill="url(#pattern)"/>
        </svg>
        <svg id="Z0n3SD.tif" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="77.848" height="27.061" viewBox="0 0 77.848 27.061">
        <defs>
            <pattern id="pattern" preserveAspectRatio="none" width="100%" height="100%" viewBox="0 0 82 28">
            <image width="82" height="28" xlink:href="data:image/png;base64,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"/>
            </pattern>
        </defs>
        <rect id="Layer_0" data-name="Layer 0" width="77.848" height="27.061" fill="url(#pattern)"/>
        </svg>
        <svg id="Z0n3SD.tif" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="77.848" height="27.061" viewBox="0 0 77.848 27.061">
        <defs>
            <pattern id="pattern" preserveAspectRatio="none" width="100%" height="100%" viewBox="0 0 82 28">
            <image width="82" height="28" xlink:href="data:image/png;base64,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"/>
            </pattern>
        </defs>
        <rect id="Layer_0" data-name="Layer 0" width="77.848" height="27.061" fill="url(#pattern)"/>
        </svg>
        <svg id="Z0n3SD.tif" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="77.848" height="27.061" viewBox="0 0 77.848 27.061">
        <defs>
            <pattern id="pattern" preserveAspectRatio="none" width="100%" height="100%" viewBox="0 0 82 28">
            <image width="82" height="28" xlink:href="data:image/png;base64,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"/>
            </pattern>
        </defs>
        <rect id="Layer_0" data-name="Layer 0" width="77.848" height="27.061" fill="url(#pattern)"/>
        </svg>
        <svg id="Z0n3SD.tif" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="77.848" height="27.061" viewBox="0 0 77.848 27.061">
        <defs>
            <pattern id="pattern" preserveAspectRatio="none" width="100%" height="100%" viewBox="0 0 82 28">
            <image width="82" height="28" xlink:href="data:image/png;base64,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"/>
            </pattern>
        </defs>
        <rect id="Layer_0" data-name="Layer 0" width="77.848" height="27.061" fill="url(#pattern)"/>
        </svg>
        <svg id="Z0n3SD.tif" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="77.848" height="27.061" viewBox="0 0 77.848 27.061">
        <defs>
            <pattern id="pattern" preserveAspectRatio="none" width="100%" height="100%" viewBox="0 0 82 28">
            <image width="82" height="28" xlink:href="data:image/png;base64,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"/>
            </pattern>
        </defs>
        <rect id="Layer_0" data-name="Layer 0" width="77.848" height="27.061" fill="url(#pattern)"/>
        </svg>
        <svg id="Z0n3SD.tif" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="77.848" height="27.061" viewBox="0 0 77.848 27.061">
        <defs>
            <pattern id="pattern" preserveAspectRatio="none" width="100%" height="100%" viewBox="0 0 82 28">
            <image width="82" height="28" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFIAAAAcCAYAAADyfuiHAAAAAXNSR0IArs4c6QAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAUqADAAQAAAABAAAAHAAAAABbF0v6AAANNElEQVRoBe1ZB1gU1xaemS3D9oUFlgVREEFEVBAUUVFpahBLVBTLs8YW5UU/8elLokbURI3RqDGW6IsCUUPsimLXWBBsoKDCshTpsLRl+055M8TBLaxi3meevu9dvvnOPef+59x7/zm3zALiOA5QZf3aL2h3H90T9uznxXd0teVxhBwOgqJslUHNViMY69G9fBuIAdrQWTQbGovGAmgATOeQOh0m/4qlNcyG+mYYYkIwxAVgGpsG0xgQg8Fm0HEEh9gsJsKmMwyo1qDVq1EtqsTUxJ/G1VWstLPnKrUNepVObmhUVquKXR0cCjU1SA2iRrShYWE4imDA+NiprwZLDfo9kaAxke9qTL8dSoZsBHQm286GXVhYxG1obhRyHJlCnhOPf/v6IyHbiSHCWaAoX1rmYOPMcCwsqHVEeIgTnc/gYVqCdoJQvVxXbWjUV+obdFWQBqhwEPEqITVQ6evrpfTx68xkgiyss0vnaj7NoS48Mgp5V3OxFvcvIdJa52+yX05LhSABIkjPyBQ7ePGds57mdaQ70d2Kays9SuvqPXAx5EGsELpGpinSyrXlAAYimB5R62o1pRJbYZl3D3fA28NDwdGyc7tJuj8fETVB86Y+/2z7e0nkT8e3+J+SXY1jwQx9lCR088yYvxe0NcHCAin4pDDDvkJV1u15TaFvXkWZTyND1cPgCPoR2wtTJVVKdXXacpBwxjBcp6/RVfYb4qN3gR3yenXonhnQqX92r559DW3Fflvbe0dk6rUjktV5u55BbLqAnIyuWle6yX9J92ER45rbO7nsJxmMjOc3fTJLsgfmKcrD1BIklM5j2iIqg6I5T/EY06MqInsxHMNQZ7FIG9jJ+5afXffz08fE5be3D3OcVSIfZN5nlBSVMMwd2tKJfRbr2MlF1yc42OIwuJJ2CW5qUtCM/Qg8TuC1beEnfjY+tiiw8TDw8hAEIRDwyhJGfzX3m/NZD7OYIAhBxrHaU5fKnjOv5NwKkaG1McJQzkg6lyEk/Uhim7IbM1ANooRwGo1hz3T0c3K7GtapX8rcmPjs9sSmMFaJ7DM4/mBBE3cKBXyDxHBUp4KRmiejBnrsW79udpKjWNxCqsBrbi7Edu5q5o/hiFbJwuuf9vXiHjiw78v9tiI7fEnc+vBDt25M6rQEnUHgW8jHDKhauomeEjvA7/tf05FTICzsYBar3WoHuDZ5/56YuMvStOi0ZxkTtZ3AKAAEGeTLQnWIWvNQeUlXp6sSedm6ITBuH8DvnBLaacDhSaPmlr6pE6tvFwRpZDaSk2nPwwBpsFAPu4Ycu284MGz08rVUxyBkw28jBnFE2NhqGc4DbhYL9i5b/uNUEp9brB0JgQGR8HV4raZcLQPkhqd1BwxbcMytV0SY/xMAojHbiNWe8dFwVKtY+smAlX39hjR/HrPh8O+rro2ZbzPK261ZuAdHMT3EoLE5QYLRomjxPJQHusDlWFpJbZXTRllienhCZNKuXzb6kGO0VqwS2cWFeQXHDM1WHiUREAUAchs3LcSqBYuU4nkXzp5paeQx1dlkDGKpEleStvFZ+fURsvx8MFNaN0KLwR2fZPb4jHVx4F3t0cDnjYqw+OCudidjpk7BXLmaS22NByCMpqP4QwNBoj/MoMIRtXxiEDx5xpzJpca4WRMXF6YsPDZ/GjjUD3qBXCMzE8dwABLTfdH+rC+qBaoJ4nL2DlAFlO/XnM+I3jjip9/vn3c0jkHVrS5tEpCSnGSVaKUSFyf89PhME8oNoIJREtcrKi7uG9+hb//+eOadO2BxoQxsatLbL9uZkwUyBRIKR0kfe8W26R8H7F2xryCHfBGU/aVEV4wVeC1ftaSQ1Nsa08bdd7YVKsWLzPwAHlBz9bv4AUP5Qj42LHqkxf5tjC8qLoC+Orly+TO7GnI1kVneUkhy6ZXobZcK/uZi16ZvEAYmiub5f5owY9tRCkPK1xJpDDyZcoItdnKGggcFkdnYUvoMWry/QCGcRemUlDCqk5/e2/U3SidloVQG9R69swxk8k2IJLMmth9jbHF5fZf0F9xNxj5knWmoul+du7uPud1YF3RdkAexxF7GNjL7o3vR4pIOfvmDqf312rwN0yY/ci4/SKDoxkikGanzkzvPKRM3LG1kG4IlJexNiZ8lfi7g27a8oDYzLvtBNvzp/HVjQiKX/SDuNueOsPuymplfZzdt2Hp8JhW8UCoFpTX6QZROSZKY8EBJIqVT8szpm/4QbJmNOIZooob2vJLzQjeSwhrLPl72Z4118/ruHYneNJaTp7mdXKRBfuJUc/ub9D0rEg95VYiWk5loXOg8uuixS1WSl0KyAatAcqrcNStm7p6xmcK0SWTktD23j2SgJ3JqOQv1sEswyOA4EONCY8f0PkI5Xr6Y2Y3IAg9KpySma6ocN3bANUqn5OXbspHEsqXUVsnDq3+vKK9kNuN2/VqNLyvkS4kc6HHG3G6sX74li8YBi+0AYKANuYuWzCkyxra3/uPCPd9DJcgNczxxyefcZhTsDcE8F6FaRFXurFqydOf8ySTOgsidW/d5IAyxv/mkeUDt7UnTJ9ZSwU9eyIpuYz8DPB2AtCGR4cTBYloy8+TRphZSA4Eh/h3P5uYrhxP3Q4s7K6ZrLIseFZJl6ffKcq/NuADQw9XmrbORisrn2WLj3AclmGcl2c6whyWl7PpYpxLOViIvwCu63G/TLh3jWhCZW6AIJ96whb2Pt+MlqiNSPi/TRhrrZB0kiQl0N8GR9kMHD9vrGeJeZN24EAmH+/nYX05/XB5B9Gnc1FL3cqRd8fDsglk0vDScOX6ap8BFlplMjKOvr9hiHNbitGUfGTD+hq5eU2XRRrBXxKqb4g25JhI3ERR2hJ2PPjgxyWRDJZ0upecRBJmcB8SdFQT8u9ldpoKePnaK04Dwg83zmSAD8e7CvVYnr6f98/N9s/QoZE/6FJY1dAEBJt2cLFRdld+jZ1BBwsFnYSB5QzQq5EsJ7ilp7dOoqbV6/WZeCAjRYPPVg6G65mFDB6e3Av9EpWvXnii8H7qJC4EYc3c6hyHo4Olsq3yW9YzbleNbKWyKMiEy+8Fjm1q9XSRoYiWuYrrG8slTpj6kAt68LQsFaUyO+QSYhsr7EcNnygdFrzlUqbWb8Io4ctWaZhxJVD9PblJObkVPCLZzNY9FfHUaunvx06g+25KZuXJi32VZNDkwG64OjhjyH//SI+ELZBWAZRjyrllYVdbJS+KYWwGofPW2NG8Tyg4eTA2BGDYC80l5OmDnOnt6tC6xjNxaYgKwxQQCu9idnTl/y4pKnTGJFrAWA0lUWJAk+cqtguk4bpaOBIIH1t+du2iNvG1vAJBJC6AnpdooEDYlknxBYQFurz3prcU0twuU3Ax9Cf6zuZ3UbTmCF411TVf1DahawGXLTYisrq2mu7OU28wdQwPdDxnbGmplRZ3ZfDMcsfy93Y6lXq+c5s5SmbUZe7fU8eGD+6QvXzmv5LfgKQoPnmiPOcLHjfPabLx/94HQw1Z9QuTIA7p2f7X9kpeWj4dIXnvSm/dlTT+44chJoo18rJUMomEv2djuC7m1SG9r33JgTW8niVg3edj83Lf1fZ/xJqfzmPWjNo5aFb3uXQ140Y7Zs08V31jh5x7U8rn3rvr5b8RtXdrpmVc4paKmuZP4g8ZRA/nX6a2B3u6+lf17RJaTtmlrY+egKlTz0dDBhUq5Wjlp6CdPBEI701OEwP18eLuzAlS4C+j86hnj//h1O2HfsmF3m6ULE6dsH+jj6We5g1OdfqCydWmvToqffFX+aPHZ2UeDyO/HcxeOclaV7aylqfDS7/ut6t2okQtXSn/MHw74T6+sr7F/AJV8YQfY5Owa/11MV7deSmr+8ZsXhEttymdBNJBerKsfaIvAj+N7zB+fULAzG69GZf3duqVGuIceHREaW0H5/C/I1qV950XOyAldQtdQH+GPau6HEgcgADXipcmPk+N+fXhqhm0989xY/4knerl6P5zFieqtQA0dvkxas8SYiLiJS6+XvKgRdcYkp2azR/grHbCIcw/SwkUVNslCAUd1rTF3+er83c/iv/10mLHfh15vJbI6pyZ/6sAF56gJZchzY/hFtCNfR/4jtri4gjWkY1BKytxfYq/LzoUlG67f2is/e4vBpXPdxU4llA8pEy/uGQr34ERKhA6VTXhDZ32doWps6Me3U9ef/+rC0vNjtwet9ACasJICfWm4sd+HXm/ZI/+2fcpKoUQgsLUVtex3x88kicq5zaPnOI8ICQ0eISee1dREf8m8NHt271G9aj3rehuUBu26T7Ydo9pImf+iRBzEdh8Tv3zttYR98cMWiMb0X7Jj1aION3Z2MIAYv6S6RuLJkZz+esqad3aoGY/nr6q37JFxu+bMY+I05fBuUannn5yPytJIp0I6sPbyqkvTzQfy4H46FBAY3Ho5N2+3pp86dRimMSF69EcTVdYwH7K99bAhJ1FQ9BRaenGlN/FpDazstzgvoGcI8e+E/5f2MPBvOoSv7OaF3KAAAAAASUVORK5CYII="/>
            </pattern>
        </defs>
        <rect id="Layer_0" data-name="Layer 0" width="77.848" height="27.061" fill="url(#pattern)"/>
        </svg>
        <svg id="Z0n3SD.tif" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="77.848" height="27.061" viewBox="0 0 77.848 27.061">
        <defs>
            <pattern id="pattern" preserveAspectRatio="none" width="100%" height="100%" viewBox="0 0 82 28">
            <image width="82" height="28" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFIAAAAcCAYAAADyfuiHAAAAAXNSR0IArs4c6QAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAUqADAAQAAAABAAAAHAAAAABbF0v6AAANNElEQVRoBe1ZB1gU1xaemS3D9oUFlgVREEFEVBAUUVFpahBLVBTLs8YW5UU/8elLokbURI3RqDGW6IsCUUPsimLXWBBsoKDCshTpsLRl+055M8TBLaxi3meevu9dvvnOPef+59x7/zm3zALiOA5QZf3aL2h3H90T9uznxXd0teVxhBwOgqJslUHNViMY69G9fBuIAdrQWTQbGovGAmgATOeQOh0m/4qlNcyG+mYYYkIwxAVgGpsG0xgQg8Fm0HEEh9gsJsKmMwyo1qDVq1EtqsTUxJ/G1VWstLPnKrUNepVObmhUVquKXR0cCjU1SA2iRrShYWE4imDA+NiprwZLDfo9kaAxke9qTL8dSoZsBHQm286GXVhYxG1obhRyHJlCnhOPf/v6IyHbiSHCWaAoX1rmYOPMcCwsqHVEeIgTnc/gYVqCdoJQvVxXbWjUV+obdFWQBqhwEPEqITVQ6evrpfTx68xkgiyss0vnaj7NoS48Mgp5V3OxFvcvIdJa52+yX05LhSABIkjPyBQ7ePGds57mdaQ70d2Kays9SuvqPXAx5EGsELpGpinSyrXlAAYimB5R62o1pRJbYZl3D3fA28NDwdGyc7tJuj8fETVB86Y+/2z7e0nkT8e3+J+SXY1jwQx9lCR088yYvxe0NcHCAin4pDDDvkJV1u15TaFvXkWZTyND1cPgCPoR2wtTJVVKdXXacpBwxjBcp6/RVfYb4qN3gR3yenXonhnQqX92r559DW3Fflvbe0dk6rUjktV5u55BbLqAnIyuWle6yX9J92ER45rbO7nsJxmMjOc3fTJLsgfmKcrD1BIklM5j2iIqg6I5T/EY06MqInsxHMNQZ7FIG9jJ+5afXffz08fE5be3D3OcVSIfZN5nlBSVMMwd2tKJfRbr2MlF1yc42OIwuJJ2CW5qUtCM/Qg8TuC1beEnfjY+tiiw8TDw8hAEIRDwyhJGfzX3m/NZD7OYIAhBxrHaU5fKnjOv5NwKkaG1McJQzkg6lyEk/Uhim7IbM1ANooRwGo1hz3T0c3K7GtapX8rcmPjs9sSmMFaJ7DM4/mBBE3cKBXyDxHBUp4KRmiejBnrsW79udpKjWNxCqsBrbi7Edu5q5o/hiFbJwuuf9vXiHjiw78v9tiI7fEnc+vBDt25M6rQEnUHgW8jHDKhauomeEjvA7/tf05FTICzsYBar3WoHuDZ5/56YuMvStOi0ZxkTtZ3AKAAEGeTLQnWIWvNQeUlXp6sSedm6ITBuH8DvnBLaacDhSaPmlr6pE6tvFwRpZDaSk2nPwwBpsFAPu4Ycu284MGz08rVUxyBkw28jBnFE2NhqGc4DbhYL9i5b/uNUEp9brB0JgQGR8HV4raZcLQPkhqd1BwxbcMytV0SY/xMAojHbiNWe8dFwVKtY+smAlX39hjR/HrPh8O+rro2ZbzPK261ZuAdHMT3EoLE5QYLRomjxPJQHusDlWFpJbZXTRllienhCZNKuXzb6kGO0VqwS2cWFeQXHDM1WHiUREAUAchs3LcSqBYuU4nkXzp5paeQx1dlkDGKpEleStvFZ+fURsvx8MFNaN0KLwR2fZPb4jHVx4F3t0cDnjYqw+OCudidjpk7BXLmaS22NByCMpqP4QwNBoj/MoMIRtXxiEDx5xpzJpca4WRMXF6YsPDZ/GjjUD3qBXCMzE8dwABLTfdH+rC+qBaoJ4nL2DlAFlO/XnM+I3jjip9/vn3c0jkHVrS5tEpCSnGSVaKUSFyf89PhME8oNoIJREtcrKi7uG9+hb//+eOadO2BxoQxsatLbL9uZkwUyBRIKR0kfe8W26R8H7F2xryCHfBGU/aVEV4wVeC1ftaSQ1Nsa08bdd7YVKsWLzPwAHlBz9bv4AUP5Qj42LHqkxf5tjC8qLoC+Orly+TO7GnI1kVneUkhy6ZXobZcK/uZi16ZvEAYmiub5f5owY9tRCkPK1xJpDDyZcoItdnKGggcFkdnYUvoMWry/QCGcRemUlDCqk5/e2/U3SidloVQG9R69swxk8k2IJLMmth9jbHF5fZf0F9xNxj5knWmoul+du7uPud1YF3RdkAexxF7GNjL7o3vR4pIOfvmDqf312rwN0yY/ci4/SKDoxkikGanzkzvPKRM3LG1kG4IlJexNiZ8lfi7g27a8oDYzLvtBNvzp/HVjQiKX/SDuNueOsPuymplfZzdt2Hp8JhW8UCoFpTX6QZROSZKY8EBJIqVT8szpm/4QbJmNOIZooob2vJLzQjeSwhrLPl72Z4118/ruHYneNJaTp7mdXKRBfuJUc/ub9D0rEg95VYiWk5loXOg8uuixS1WSl0KyAatAcqrcNStm7p6xmcK0SWTktD23j2SgJ3JqOQv1sEswyOA4EONCY8f0PkI5Xr6Y2Y3IAg9KpySma6ocN3bANUqn5OXbspHEsqXUVsnDq3+vKK9kNuN2/VqNLyvkS4kc6HHG3G6sX74li8YBi+0AYKANuYuWzCkyxra3/uPCPd9DJcgNczxxyefcZhTsDcE8F6FaRFXurFqydOf8ySTOgsidW/d5IAyxv/mkeUDt7UnTJ9ZSwU9eyIpuYz8DPB2AtCGR4cTBYloy8+TRphZSA4Eh/h3P5uYrhxP3Q4s7K6ZrLIseFZJl6ffKcq/NuADQw9XmrbORisrn2WLj3AclmGcl2c6whyWl7PpYpxLOViIvwCu63G/TLh3jWhCZW6AIJ96whb2Pt+MlqiNSPi/TRhrrZB0kiQl0N8GR9kMHD9vrGeJeZN24EAmH+/nYX05/XB5B9Gnc1FL3cqRd8fDsglk0vDScOX6ap8BFlplMjKOvr9hiHNbitGUfGTD+hq5eU2XRRrBXxKqb4g25JhI3ERR2hJ2PPjgxyWRDJZ0upecRBJmcB8SdFQT8u9ldpoKePnaK04Dwg83zmSAD8e7CvVYnr6f98/N9s/QoZE/6FJY1dAEBJt2cLFRdld+jZ1BBwsFnYSB5QzQq5EsJ7ilp7dOoqbV6/WZeCAjRYPPVg6G65mFDB6e3Av9EpWvXnii8H7qJC4EYc3c6hyHo4Olsq3yW9YzbleNbKWyKMiEy+8Fjm1q9XSRoYiWuYrrG8slTpj6kAt68LQsFaUyO+QSYhsr7EcNnygdFrzlUqbWb8Io4ctWaZhxJVD9PblJObkVPCLZzNY9FfHUaunvx06g+25KZuXJi32VZNDkwG64OjhjyH//SI+ELZBWAZRjyrllYVdbJS+KYWwGofPW2NG8Tyg4eTA2BGDYC80l5OmDnOnt6tC6xjNxaYgKwxQQCu9idnTl/y4pKnTGJFrAWA0lUWJAk+cqtguk4bpaOBIIH1t+du2iNvG1vAJBJC6AnpdooEDYlknxBYQFurz3prcU0twuU3Ax9Cf6zuZ3UbTmCF411TVf1DahawGXLTYisrq2mu7OU28wdQwPdDxnbGmplRZ3ZfDMcsfy93Y6lXq+c5s5SmbUZe7fU8eGD+6QvXzmv5LfgKQoPnmiPOcLHjfPabLx/94HQw1Z9QuTIA7p2f7X9kpeWj4dIXnvSm/dlTT+44chJoo18rJUMomEv2djuC7m1SG9r33JgTW8niVg3edj83Lf1fZ/xJqfzmPWjNo5aFb3uXQ140Y7Zs08V31jh5x7U8rn3rvr5b8RtXdrpmVc4paKmuZP4g8ZRA/nX6a2B3u6+lf17RJaTtmlrY+egKlTz0dDBhUq5Wjlp6CdPBEI701OEwP18eLuzAlS4C+j86hnj//h1O2HfsmF3m6ULE6dsH+jj6We5g1OdfqCydWmvToqffFX+aPHZ2UeDyO/HcxeOclaV7aylqfDS7/ut6t2okQtXSn/MHw74T6+sr7F/AJV8YQfY5Owa/11MV7deSmr+8ZsXhEttymdBNJBerKsfaIvAj+N7zB+fULAzG69GZf3duqVGuIceHREaW0H5/C/I1qV950XOyAldQtdQH+GPau6HEgcgADXipcmPk+N+fXhqhm0989xY/4knerl6P5zFieqtQA0dvkxas8SYiLiJS6+XvKgRdcYkp2azR/grHbCIcw/SwkUVNslCAUd1rTF3+er83c/iv/10mLHfh15vJbI6pyZ/6sAF56gJZchzY/hFtCNfR/4jtri4gjWkY1BKytxfYq/LzoUlG67f2is/e4vBpXPdxU4llA8pEy/uGQr34ERKhA6VTXhDZ32doWps6Me3U9ef/+rC0vNjtwet9ACasJICfWm4sd+HXm/ZI/+2fcpKoUQgsLUVtex3x88kicq5zaPnOI8ICQ0eISee1dREf8m8NHt271G9aj3rehuUBu26T7Ydo9pImf+iRBzEdh8Tv3zttYR98cMWiMb0X7Jj1aION3Z2MIAYv6S6RuLJkZz+esqad3aoGY/nr6q37JFxu+bMY+I05fBuUannn5yPytJIp0I6sPbyqkvTzQfy4H46FBAY3Ho5N2+3pp86dRimMSF69EcTVdYwH7K99bAhJ1FQ9BRaenGlN/FpDazstzgvoGcI8e+E/5f2MPBvOoSv7OaF3KAAAAAASUVORK5CYII="/>
            </pattern>
        </defs>
        <rect id="Layer_0" data-name="Layer 0" width="77.848" height="27.061" fill="url(#pattern)"/>
        </svg>
        <svg id="Z0n3SD.tif" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="77.848" height="27.061" viewBox="0 0 77.848 27.061">
        <defs>
            <pattern id="pattern" preserveAspectRatio="none" width="100%" height="100%" viewBox="0 0 82 28">
            <image width="82" height="28" xlink:href="data:image/png;base64,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"/>
            </pattern>
        </defs>
        <rect id="Layer_0" data-name="Layer 0" width="77.848" height="27.061" fill="url(#pattern)"/>
        </svg>
        <svg id="Z0n3SD.tif" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="77.848" height="27.061" viewBox="0 0 77.848 27.061">
        <defs>
            <pattern id="pattern" preserveAspectRatio="none" width="100%" height="100%" viewBox="0 0 82 28">
            <image width="82" height="28" xlink:href="data:image/png;base64,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"/>
            </pattern>
        </defs>
        <rect id="Layer_0" data-name="Layer 0" width="77.848" height="27.061" fill="url(#pattern)"/>
        </svg>
        <svg id="Z0n3SD.tif" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="77.848" height="27.061" viewBox="0 0 77.848 27.061">
        <defs>
            <pattern id="pattern" preserveAspectRatio="none" width="100%" height="100%" viewBox="0 0 82 28">
            <image width="82" height="28" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFIAAAAcCAYAAADyfuiHAAAAAXNSR0IArs4c6QAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAUqADAAQAAAABAAAAHAAAAABbF0v6AAANNElEQVRoBe1ZB1gU1xaemS3D9oUFlgVREEFEVBAUUVFpahBLVBTLs8YW5UU/8elLokbURI3RqDGW6IsCUUPsimLXWBBsoKDCshTpsLRl+055M8TBLaxi3meevu9dvvnOPef+59x7/zm3zALiOA5QZf3aL2h3H90T9uznxXd0teVxhBwOgqJslUHNViMY69G9fBuIAdrQWTQbGovGAmgATOeQOh0m/4qlNcyG+mYYYkIwxAVgGpsG0xgQg8Fm0HEEh9gsJsKmMwyo1qDVq1EtqsTUxJ/G1VWstLPnKrUNepVObmhUVquKXR0cCjU1SA2iRrShYWE4imDA+NiprwZLDfo9kaAxke9qTL8dSoZsBHQm286GXVhYxG1obhRyHJlCnhOPf/v6IyHbiSHCWaAoX1rmYOPMcCwsqHVEeIgTnc/gYVqCdoJQvVxXbWjUV+obdFWQBqhwEPEqITVQ6evrpfTx68xkgiyss0vnaj7NoS48Mgp5V3OxFvcvIdJa52+yX05LhSABIkjPyBQ7ePGds57mdaQ70d2Kays9SuvqPXAx5EGsELpGpinSyrXlAAYimB5R62o1pRJbYZl3D3fA28NDwdGyc7tJuj8fETVB86Y+/2z7e0nkT8e3+J+SXY1jwQx9lCR088yYvxe0NcHCAin4pDDDvkJV1u15TaFvXkWZTyND1cPgCPoR2wtTJVVKdXXacpBwxjBcp6/RVfYb4qN3gR3yenXonhnQqX92r559DW3Fflvbe0dk6rUjktV5u55BbLqAnIyuWle6yX9J92ER45rbO7nsJxmMjOc3fTJLsgfmKcrD1BIklM5j2iIqg6I5T/EY06MqInsxHMNQZ7FIG9jJ+5afXffz08fE5be3D3OcVSIfZN5nlBSVMMwd2tKJfRbr2MlF1yc42OIwuJJ2CW5qUtCM/Qg8TuC1beEnfjY+tiiw8TDw8hAEIRDwyhJGfzX3m/NZD7OYIAhBxrHaU5fKnjOv5NwKkaG1McJQzkg6lyEk/Uhim7IbM1ANooRwGo1hz3T0c3K7GtapX8rcmPjs9sSmMFaJ7DM4/mBBE3cKBXyDxHBUp4KRmiejBnrsW79udpKjWNxCqsBrbi7Edu5q5o/hiFbJwuuf9vXiHjiw78v9tiI7fEnc+vBDt25M6rQEnUHgW8jHDKhauomeEjvA7/tf05FTICzsYBar3WoHuDZ5/56YuMvStOi0ZxkTtZ3AKAAEGeTLQnWIWvNQeUlXp6sSedm6ITBuH8DvnBLaacDhSaPmlr6pE6tvFwRpZDaSk2nPwwBpsFAPu4Ycu284MGz08rVUxyBkw28jBnFE2NhqGc4DbhYL9i5b/uNUEp9brB0JgQGR8HV4raZcLQPkhqd1BwxbcMytV0SY/xMAojHbiNWe8dFwVKtY+smAlX39hjR/HrPh8O+rro2ZbzPK261ZuAdHMT3EoLE5QYLRomjxPJQHusDlWFpJbZXTRllienhCZNKuXzb6kGO0VqwS2cWFeQXHDM1WHiUREAUAchs3LcSqBYuU4nkXzp5paeQx1dlkDGKpEleStvFZ+fURsvx8MFNaN0KLwR2fZPb4jHVx4F3t0cDnjYqw+OCudidjpk7BXLmaS22NByCMpqP4QwNBoj/MoMIRtXxiEDx5xpzJpca4WRMXF6YsPDZ/GjjUD3qBXCMzE8dwABLTfdH+rC+qBaoJ4nL2DlAFlO/XnM+I3jjip9/vn3c0jkHVrS5tEpCSnGSVaKUSFyf89PhME8oNoIJREtcrKi7uG9+hb//+eOadO2BxoQxsatLbL9uZkwUyBRIKR0kfe8W26R8H7F2xryCHfBGU/aVEV4wVeC1ftaSQ1Nsa08bdd7YVKsWLzPwAHlBz9bv4AUP5Qj42LHqkxf5tjC8qLoC+Orly+TO7GnI1kVneUkhy6ZXobZcK/uZi16ZvEAYmiub5f5owY9tRCkPK1xJpDDyZcoItdnKGggcFkdnYUvoMWry/QCGcRemUlDCqk5/e2/U3SidloVQG9R69swxk8k2IJLMmth9jbHF5fZf0F9xNxj5knWmoul+du7uPud1YF3RdkAexxF7GNjL7o3vR4pIOfvmDqf312rwN0yY/ci4/SKDoxkikGanzkzvPKRM3LG1kG4IlJexNiZ8lfi7g27a8oDYzLvtBNvzp/HVjQiKX/SDuNueOsPuymplfZzdt2Hp8JhW8UCoFpTX6QZROSZKY8EBJIqVT8szpm/4QbJmNOIZooob2vJLzQjeSwhrLPl72Z4118/ruHYneNJaTp7mdXKRBfuJUc/ub9D0rEg95VYiWk5loXOg8uuixS1WSl0KyAatAcqrcNStm7p6xmcK0SWTktD23j2SgJ3JqOQv1sEswyOA4EONCY8f0PkI5Xr6Y2Y3IAg9KpySma6ocN3bANUqn5OXbspHEsqXUVsnDq3+vKK9kNuN2/VqNLyvkS4kc6HHG3G6sX74li8YBi+0AYKANuYuWzCkyxra3/uPCPd9DJcgNczxxyefcZhTsDcE8F6FaRFXurFqydOf8ySTOgsidW/d5IAyxv/mkeUDt7UnTJ9ZSwU9eyIpuYz8DPB2AtCGR4cTBYloy8+TRphZSA4Eh/h3P5uYrhxP3Q4s7K6ZrLIseFZJl6ffKcq/NuADQw9XmrbORisrn2WLj3AclmGcl2c6whyWl7PpYpxLOViIvwCu63G/TLh3jWhCZW6AIJ96whb2Pt+MlqiNSPi/TRhrrZB0kiQl0N8GR9kMHD9vrGeJeZN24EAmH+/nYX05/XB5B9Gnc1FL3cqRd8fDsglk0vDScOX6ap8BFlplMjKOvr9hiHNbitGUfGTD+hq5eU2XRRrBXxKqb4g25JhI3ERR2hJ2PPjgxyWRDJZ0upecRBJmcB8SdFQT8u9ldpoKePnaK04Dwg83zmSAD8e7CvVYnr6f98/N9s/QoZE/6FJY1dAEBJt2cLFRdld+jZ1BBwsFnYSB5QzQq5EsJ7ilp7dOoqbV6/WZeCAjRYPPVg6G65mFDB6e3Av9EpWvXnii8H7qJC4EYc3c6hyHo4Olsq3yW9YzbleNbKWyKMiEy+8Fjm1q9XSRoYiWuYrrG8slTpj6kAt68LQsFaUyO+QSYhsr7EcNnygdFrzlUqbWb8Io4ctWaZhxJVD9PblJObkVPCLZzNY9FfHUaunvx06g+25KZuXJi32VZNDkwG64OjhjyH//SI+ELZBWAZRjyrllYVdbJS+KYWwGofPW2NG8Tyg4eTA2BGDYC80l5OmDnOnt6tC6xjNxaYgKwxQQCu9idnTl/y4pKnTGJFrAWA0lUWJAk+cqtguk4bpaOBIIH1t+du2iNvG1vAJBJC6AnpdooEDYlknxBYQFurz3prcU0twuU3Ax9Cf6zuZ3UbTmCF411TVf1DahawGXLTYisrq2mu7OU28wdQwPdDxnbGmplRZ3ZfDMcsfy93Y6lXq+c5s5SmbUZe7fU8eGD+6QvXzmv5LfgKQoPnmiPOcLHjfPabLx/94HQw1Z9QuTIA7p2f7X9kpeWj4dIXnvSm/dlTT+44chJoo18rJUMomEv2djuC7m1SG9r33JgTW8niVg3edj83Lf1fZ/xJqfzmPWjNo5aFb3uXQ140Y7Zs08V31jh5x7U8rn3rvr5b8RtXdrpmVc4paKmuZP4g8ZRA/nX6a2B3u6+lf17RJaTtmlrY+egKlTz0dDBhUq5Wjlp6CdPBEI701OEwP18eLuzAlS4C+j86hnj//h1O2HfsmF3m6ULE6dsH+jj6We5g1OdfqCydWmvToqffFX+aPHZ2UeDyO/HcxeOclaV7aylqfDS7/ut6t2okQtXSn/MHw74T6+sr7F/AJV8YQfY5Owa/11MV7deSmr+8ZsXhEttymdBNJBerKsfaIvAj+N7zB+fULAzG69GZf3duqVGuIceHREaW0H5/C/I1qV950XOyAldQtdQH+GPau6HEgcgADXipcmPk+N+fXhqhm0989xY/4knerl6P5zFieqtQA0dvkxas8SYiLiJS6+XvKgRdcYkp2azR/grHbCIcw/SwkUVNslCAUd1rTF3+er83c/iv/10mLHfh15vJbI6pyZ/6sAF56gJZchzY/hFtCNfR/4jtri4gjWkY1BKytxfYq/LzoUlG67f2is/e4vBpXPdxU4llA8pEy/uGQr34ERKhA6VTXhDZ32doWps6Me3U9ef/+rC0vNjtwet9ACasJICfWm4sd+HXm/ZI/+2fcpKoUQgsLUVtex3x88kicq5zaPnOI8ICQ0eISee1dREf8m8NHt271G9aj3rehuUBu26T7Ydo9pImf+iRBzEdh8Tv3zttYR98cMWiMb0X7Jj1aION3Z2MIAYv6S6RuLJkZz+esqad3aoGY/nr6q37JFxu+bMY+I05fBuUannn5yPytJIp0I6sPbyqkvTzQfy4H46FBAY3Ho5N2+3pp86dRimMSF69EcTVdYwH7K99bAhJ1FQ9BRaenGlN/FpDazstzgvoGcI8e+E/5f2MPBvOoSv7OaF3KAAAAAASUVORK5CYII="/>
            </pattern>
        </defs>
        <rect id="Layer_0" data-name="Layer 0" width="77.848" height="27.061" fill="url(#pattern)"/>
        </svg>
        <svg id="Z0n3SD.tif" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="77.848" height="27.061" viewBox="0 0 77.848 27.061">
        <defs>
            <pattern id="pattern" preserveAspectRatio="none" width="100%" height="100%" viewBox="0 0 82 28">
            <image width="82" height="28" xlink:href="data:image/png;base64,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"/>
            </pattern>
        </defs>
        <rect id="Layer_0" data-name="Layer 0" width="77.848" height="27.061" fill="url(#pattern)"/>
        </svg>

        </div>
    </section>
    <section class="bg-[#FAFAFA] p-8">
        <div class="text-center"> 
            <text class="text-black font-heebo ps-4 text-2xl font-bold">
                למי ניתן השירות
            </text>
        </div>
        
        <div class="flex flex-col md:flex-row justify-center items-center space-x-5 mt-5">
            
            <div class="w-42 h-40 relative mb-4 md:mb-0">
                <img class="w-42 h-40 object-cover" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sec4.1.png" alt="Logo" />
                <div class="absolute bottom-0 left-0 right-0 bg-white bg-opacity-80 text-black text-center py-2">
                    למנופים
                </div>
            </div>
            <div class="w-42 h-40 relative mb-4 md:mb-0 bg-[#E0E0E0]">
                <img class="w-42 h-40 object-cover" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sec4.2.png" alt="Logo" />
                <div class="absolute bottom-0 left-0 right-0 bg-white bg-opacity-80 text-black text-center py-2">
                    לטרקטורים וצמ״ה
                </div>
            </div>
            <div class="w-42 h-40 relative">
                <img class="w-42 h-40 object-cover" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sec4.3.png" alt="Logo" />
                <div class="absolute bottom-0 left-0 right-0 bg-white bg-opacity-80 text-black text-center py-2">
                    למשאיות ואוטבוסים
                </div>
            </div>
            <div class="w-42 h-40 relative">
                <img class="w-42 h-40 object-cover" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sec4.4.png" alt="Logo" />
                <div class="absolute bottom-0 left-0 right-0 bg-white bg-opacity-80 text-black text-center leading-5">
                    <span>למי ניתן השירות</span> 
                    <span>לרכבים פרטיים</span>
                    <span>החלפת גלגל/צמיג ותיקון</span>
                    <span>לכל סוגי הרכבים בדרכים</span>

                </div>
            </div>
        </div>
        
        
    </section>
    <section>
        <div style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/roadbanner.png')" class=" text-center bg-[#000000c4] w-full h-[400px]  bg-cover bg-center flex justify-center items-center font-heebo">
            <div class="text-center space-y-4"> 
                <p class="font-heebo text-2xl text-white">ניידות שירות שלנו בפריסה ארצית</p>
                <p class="font-heebo text-7xl font-bold text-white">45 דקות</p>
                <p class="text-white font-normal">ניידות שירות שלנו בפריסה ארצית</p>
                <p class="text-white font-light">ניידות שירות שלנו בפריסה ארצית</p>
                <p class="flex justify-center">
                <button class="bg-primary flex justify-center items-center gap-4 text-[#fff] rounded-md ">
                <svg xmlns="http://www.w3.org/2000/svg" width="12.577" height="12.578" viewBox="0 0 12.577 12.578">
                <path id="Path_24" data-name="Path 24" d="M479.825,1351.256l1.235-1.936s-1.127-1.122-1.5-1.493l-1.848-1.848-1.581,1.585c-.876.872-.793,2.9,3.429,7.124s6.25,4.3,7.123,3.428l1.581-1.585-1.581-1.582c-.442-.439-1.758-1.758-1.758-1.758l-1.935,1.234C482.2,1353.631,479.825,1351.256,479.825,1351.256Z" transform="translate(-475.69 -1345.979)" fill="#fff"/>
                </svg>
                <span>
                חייגו עכשיו: *9096
                </span>
                </button>
                </p>
            </div>
        </div>        
    </section>
    <section class="container py-4 ">
    <div class="grid lg:grid-cols-2 sm:grid-cols-1">
        <div>
            <div class="grid grid-cols-2 ml-auto">
                <div style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bgicon1.svg')" class="bg-left-bottom bg-inherit py-8 border h-[165px] border-gray-100 rounded-md bg-no-repeat bg-center p-2 m-2 flex flex-col justify-center items-center">
                    <span class="text-center text-lg font-normal">אזורי שירות</span>
                    <div class="bg-black my-1"></div>
                    <span class="text-center text-base font-normal">פריסה ארצית</span>
                </div>
                
                <div style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bgicon2.svg')" class="bg-left-bottom bg-inherit py-8 border h-[165px] border-gray-100 rounded-md  bg-no-repeat bg-center p-2 m-2 flex flex-col justify-center items-center">
                    <span class="text-center text-lg font-normal">שעות פעילות</span>
                    <div class="bg-black my-1"></div>
                    <span class="text-center text-base font-normal"> 24/6</span>
                </div>
                <div style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bgicon3.svg')" class="bg-left-bottom bg-inherit py-8 border h-[165px] border-gray-100 rounded-md  bg-no-repeat bg-center p-2 m-2 flex flex-col justify-center items-center">
                    <span class="text-center text-lg font-normal">מרכזי התקנה</span>
                    <div class="bg-black my-1"></div>
                    <span class="text-center text-base font-normal">180</span>
                </div>
                <div style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bgicon4.svg')" class="bg-left-bottom bg-inherit py-8 border h-[165px] border-gray-100 rounded-md  bg-no-repeat bg-center p-2 m-2 flex flex-col justify-center items-center">
                    <span class="text-center text-lg font-normal">מס׳ שירותי דרך</span>
                    <div class="bg-black my-1"></div>
                    <span class="text-center text-base font-normal">45,543</span>
                </div>
            </div>
        </div>
        <div>
        <div class="p-4">
                <div class="accordion shadow-sm border text-right border-[#E0E0E0] rounded-md">
                    <div class="accordion-header shadow-sm border border-[#E0E0E0] p-1 cursor-pointer flex justify-end items-center">
                        <h2 class="text-lg font-medium text-right">היתרונות שלנו</h2>
                        <span class="accordion-icon text-2xl">+</span>
                    </div>
                    <div class="accordion-content bg-white p-2">
                        <p class="text-right">החיים יכולים להפתיע אותנו ולא תמיד באופן חיובי. אחד
                            המצבים הכי לא צפויים בחיים הוא מצב בו יש לנו תיקון פנצ'ר.
                            תקר בגלגל יכול לגרום לנו לחוש לחץ, חרדה וחשש ולא תמיד
                            יש לנו את היכולת או את הידע להחליף לבד את הגלגל ולחזור
                            לנסיעה רגילה.
                            החלפת גלגל/פנצ'ריה ניידת יכולים לאפשר לנו לשוב כמ
                            שיותר מהר לשגרה ולתכניות שלו. השירותים יכולים להיות
                            מגוונים מאוד והם כוללים בעיקר תיקון מקצועי ומהיר של
                            פנצ'ר בגלגל בכל מקום בו הוא קרה לנו בין אם אנחנו במרכז
                            הארץ בגוש דן או באזור השרון או הצפון.
                        </p>
                    </div>
                </div>
    
                <div class="accordion">
                    <div class="accordion-header shadow-sm border text-right border-[#E0E0E0] p-1 cursor-pointer flex justify-end items-center">
                        <h2 class="text-lg font-medium">איך השירות יכול לעזור</h2>
                        <span class="accordion-icon text-2xl">+</span>
                    </div>
                    <div class="accordion-content hidden bg-white p-2">
                        <p> החיים יכולים להפתיע אותנו ולא תמיד באופן חיובי. אחד
                            המצבים הכי לא צפויים בחיים הוא מצב בו יש לנו תיקון פנצ׳ר.
                            תקר בגלגל יכול לגרום לנו לחוש לחץ, חרדה וחשש ולא תמיד
                            יש לנו את היכולת או את הידע להחליף לבד את הגלגל ולחזור
                            לנסיעה רגילה.
                             החלפת גלגל/פנצ'ריה ניידת יכולים לאפשר לנו לשוב כמ
                            שיותר מהר לשגרה ולתכניות שלו. השירותים יכולים להיות
                            מגוונים מאוד והם כוללים בעיקר תיקון מקצועי ומהיר של
                            פנצ׳ר בגלגל בכל מקום בו הוא קרה לנו בין אם אנחנו במרכז
                            הארץ בגוש דן או באזור השרון או הצפון.
                            </p>
                    </div>
                </div>
    
                <div class="accordion">
                    <div class="accordion-header shadow-sm border text-right border-[#E0E0E0]  p-1 cursor-pointer flex justify-end items-center">
                        <h2 class="text-lg font-medium">מה זה שירותי דרך</h2>
                        <span class="accordion-icon text-2xl">+</span>
                    </div>
                    <div class="accordion-content hidden bg-white p-2">
                        <p class="w-100">החיים יכולים להפתיע אותנו ולא תמיד באופן חיובי. אחד
                            המצבים הכי לא צפויים בחיים הוא מצב בו יש לנו תיקון פנצ׳ר.
                            תקר בגלגל יכול לגרום לנו לחוש לחץ, חרדה וחשש ולא תמיד
                            יש לנו את היכולת או את הידע להחליף לבד את הגלגל ולחזור
                            לנסיעה רגילה.
                             החלפת גלגל/פנצ'ריה ניידת יכולים לאפשר לנו לשוב כמ
                            שיותר מהר לשגרה ולתכניות שלו. השירותים יכולים להיות
                            מגוונים מאוד והם כוללים בעיקר תיקון מקצועי ומהיר של
                            פנצ׳ר בגלגל בכל מקום בו הוא קרה לנו בין אם אנחנו במרכז
                            הארץ בגוש דן או באזור השרון או הצפון.
                            </p>
                    </div>
                </div>
    
                <div class="accordion">
                    <div class="accordion-header shadow-sm border text-right border-[#E0E0E0]  p-1 cursor-pointer flex justify-end items-center">
                        <h2 class="text-lg font-medium">הזמנות אונליין</h2>
                        <span class="accordion-icon text-2xl">+</span>
                    </div>
                    <div class="accordion-content hidden bg-white p-2">
                        <p>החיים יכולים להפתיע אותנו ולא תמיד באופן חיובי. אחד
                            המצבים הכי לא צפויים בחיים הוא מצב בו יש לנו תיקון פנצ׳ר.
                            תקר בגלגל יכול לגרום לנו לחוש לחץ, חרדה וחשש ולא תמיד
                            יש לנו את היכולת או את הידע להחליף לבד את הגלגל ולחזור
                            לנסיעה רגילה.
                             החלפת גלגל/פנצ'ריה ניידת יכולים לאפשר לנו לשוב כמ
                            שיותר מהר לשגרה ולתכניות שלו. השירותים יכולים להיות
                            מגוונים מאוד והם כוללים בעיקר תיקון מקצועי ומהיר של
                            פנצ׳ר בגלגל בכל מקום בו הוא קרה לנו בין אם אנחנו במרכז
                            הארץ בגוש דן או באזור השרון או הצפון.
                            </p>
                    </div>
                </div>
                <div class="accordion">
                    <div class="accordion-header shadow-sm border text-right border-[#E0E0E0]  p-1 cursor-pointer flex justify-end items-center">
                        <h2 class="text-lg font-medium">הזמנות אונליין</h2>
                        <span class="accordion-icon text-2xl">+</span>
                    </div>
                    <div class="accordion-content hidden bg-white p-2">
                        <p>החיים יכולים להפתיע אותנו ולא תמיד באופן חיובי. אחד
                            המצבים הכי לא צפויים בחיים הוא מצב בו יש לנו תיקון פנצ׳ר.
                            תקר בגלגל יכול לגרום לנו לחוש לחץ, חרדה וחשש ולא תמיד
                            יש לנו את היכולת או את הידע להחליף לבד את הגלגל ולחזור
                            לנסיעה רגילה.
                             החלפת גלגל/פנצ'ריה ניידת יכולים לאפשר לנו לשוב כמ
                            שיותר מהר לשגרה ולתכניות שלו. השירותים יכולים להיות
                            מגוונים מאוד והם כוללים בעיקר תיקון מקצועי ומהיר של
                            פנצ׳ר בגלגל בכל מקום בו הוא קרה לנו בין אם אנחנו במרכז
                            הארץ בגוש דן או באזור השרון או הצפון.
                            </p>
                    </div>
                </div>
                
              </div>
        </div>
    </div>
    </section>
    <section class="" style="backgroud-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/road.jpg');">   

    </section>

    <section class="container">
        <div class="text-center p-4"> 
            <text class="text-black font-heebo ps-4 text-2xl font-bold">
                לקוחות ממליצים
            </text>
        </div>
        <div class="m-auto" style="width:80%">
            <div class="swiper mySwiper mx-auto">
                <div class="swiper-wrapper reviewSlider">
                    <div class="swiper-slide  bg-white text-center text-2xl flex items-center justify-center">
                        <div class="w-[250px] h-[300px] review bg-black text-white text-right p-1 opacity-90">
                            <div class="text-left">
                                <span class="text-base text-yellow-500">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            </div>
                            <p class="text-sm mt-2 p-2"> 
                                החיים יכולים להפתיע
                                אותנו ולא תמיד באופן
                                חיובי. אחד המצבים הכי לא
                                צפויים בחיים הוא מצב בו
                                יש לנו תיקון פנצ׳ר. תקר
                                בגלגל יכול לגרום לנו לחוש
                                לחץ, חרדה וחשש ולא תמיד
                                יש לנו את היכולת או את
                                הידע להחליף לבד את
                                הגלגל ולחזור לנסיעה
                                רגילה.

                            </p>
                            
                        </div>
                    </div>
                    <div class="swiper-slide bg-white text-center text-2xl flex items-center justify-center">
                        <div class="w-[250px] h-[300px] review bg-black text-white text-right p-1 opacity-90">
                            <div class="text-left">
                                <span class="text-base text-yellow-500">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            </div>
                            <p class="text-sm mt-2 p-2"> 
                                החיים יכולים להפתיע
                                אותנו ולא תמיד באופן
                                חיובי. אחד המצבים הכי לא
                                צפויים בחיים הוא מצב בו
                                יש לנו תיקון פנצ׳ר. תקר
                                בגלגל יכול לגרום לנו לחוש
                                לחץ, חרדה וחשש ולא תמיד
                                יש לנו את היכולת או את
                                הידע להחליף לבד את
                                הגלגל ולחזור לנסיעה
                                רגילה.

                            </p>
                            
                        </div>
                    </div>
                    <div class="swiper-slide bg-white text-center text-2xl flex items-center justify-center">
                        <div class="w-[250px] h-[300px] review bg-black text-white text-right p-1 opacity-90">
                            <div class=" flex justify-between items-center ">
                            <div class="text-left">
                                <span class="text-base text-yellow-500">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            </div>
                            <div class="text-right">
                                <span class="text-[22px]">״</span>
                            </div>
                            </div>
                            <p class="text-sm mt-2 p-2"> 
                                החיים יכולים להפתיע
                                אותנו ולא תמיד באופן
                                חיובי. אחד המצבים הכי לא
                                צפויים בחיים הוא מצב בו
                                יש לנו תיקון פנצ׳ר. תקר
                                בגלגל יכול לגרום לנו לחוש
                                לחץ, חרדה וחשש ולא תמיד
                                יש לנו את היכולת או את
                                הידע להחליף לבד את
                                הגלגל ולחזור לנסיעה
                                רגילה.

                            </p>
                            
                        </div>
                    </div>
                    <div class="swiper-slide bg-white text-center text-2xl flex items-center justify-center">
                        <div class="w-[250px] h-[300px] review bg-black text-white text-right p-1 opacity-90">
                            <div class="text-left">
                                <span class="text-base text-yellow-500">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            </div>
                            <p class="text-sm mt-2 p-2"> 
                                החיים יכולים להפתיע
                                אותנו ולא תמיד באופן
                                חיובי. אחד המצבים הכי לא
                                צפויים בחיים הוא מצב בו
                                יש לנו תיקון פנצ׳ר. תקר
                                בגלגל יכול לגרום לנו לחוש
                                לחץ, חרדה וחשש ולא תמיד
                                יש לנו את היכולת או את
                                הידע להחליף לבד את
                                הגלגל ולחזור לנסיעה
                                רגילה.

                            </p>
                            
                        </div>
                    </div>
                    <div class="swiper-slide bg-white text-center text-2xl flex items-center justify-center">
                        <div class="w-[250px] h-[300px] review bg-black text-white text-right p-1 opacity-90">
                            <div class="text-left">
                                <span class="text-base text-yellow-500">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            </div>
                            <p class="text-sm mt-2 p-2"> 
                                החיים יכולים להפתיע
                                אותנו ולא תמיד באופן
                                חיובי. אחד המצבים הכי לא
                                צפויים בחיים הוא מצב בו
                                יש לנו תיקון פנצ׳ר. תקר
                                בגלגל יכול לגרום לנו לחוש
                                לחץ, חרדה וחשש ולא תמיד
                                יש לנו את היכולת או את
                                הידע להחליף לבד את
                                הגלגל ולחזור לנסיעה
                                רגילה.

                            </p>
                            
                        </div>
                    </div>
                    <div class="swiper-slide bg-white text-center text-2xl flex items-center justify-center">
                        <div class="w-[250px] h-[300px] review bg-black text-white text-right p-1 opacity-90">
                            <div class="text-left">
                                <span class="text-base text-yellow-500">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            </div>
                            <p class="text-sm mt-2 p-2"> 
                                החיים יכולים להפתיע
                                אותנו ולא תמיד באופן
                                חיובי. אחד המצבים הכי לא
                                צפויים בחיים הוא מצב בו
                                יש לנו תיקון פנצ׳ר. תקר
                                בגלגל יכול לגרום לנו לחוש
                                לחץ, חרדה וחשש ולא תמיד
                                יש לנו את היכולת או את
                                הידע להחליף לבד את
                                הגלגל ולחזור לנסיעה
                                רגילה.

                            </p>
                            
                        </div>
                    </div>
                    
                    
                    <div class="swiper-slide bg-white text-center text-2xl flex items-center justify-center">
                        <div class="w-[250px] h-[300px] review bg-black text-white text-right p-1 opacity-90">
                            <div class="text-left">
                                <span class="text-base text-yellow-500">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            </div>
                            <p class="text-sm mt-2 p-2"> 
                                החיים יכולים להפתיע
                                אותנו ולא תמיד באופן
                                חיובי. אחד המצבים הכי לא
                                צפויים בחיים הוא מצב בו
                                יש לנו תיקון פנצ׳ר. תקר
                                בגלגל יכול לגרום לנו לחוש
                                לחץ, חרדה וחשש ולא תמיד
                                יש לנו את היכולת או את
                                הידע להחליף לבד את
                                הגלגל ולחזור לנסיעה
                                רגילה.

                            </p>
                            
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next text-black focus:font-extrabold rounded-full p-2 cursor-pointer"></div>
                <div class="swiper-button-prev  text-black rounded-full  focus:font-extrabold p-2 cursor-pointer"></div>
    

            </div>
            </div>
            

        </div>

           
    </section>

    <section>
        <div class=" relative bg-contain  bg-center w-full  h-[230px] flex justify-center space-x-12 items-center" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/road.jpg');">
        <div class="car absolute top-[-190px] bottom-0 right-[-210px] overflow-hidden" style="top:-190px;right:-210px">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/car.png" alt="">
        </div>
            <div class="p-2 w-[250px] h-28 flex flex-col justify-end">
                    <span id="counter1" class="text-center text-white text-4xl font-bold">0</span>
                <p class="text-center text-white text-lg font-normal">מרכזי התקנה</p>
            </div>
            
            
            <div class=" p-2 w-[250px] h-28 flex flex-col justify-end">
                <span id="counter2" class="text-center text-white text-4xl font-bold">0</span>
                <p class="text-center text-white text-lg font-normal">החלפות צמיגים</p>
            </div>
            <div class="  p-2 w-[250px] h-28 flex flex-col justify-end">
                <span id="counter3" class="text-center text-white text-4xl font-bold">0</span>
                <p class="text-center text-white text-lg font-normal"> תיקוני פאנצ׳ר</p>
            </div>
            <div class=" p-2 w-[250px] h-28 flex flex-col justify-end">
                <span id="counter4" class="text-center text-white text-4xl font-bold">9000</span>
                <p class="text-center text-white text-lg font-normal"> החלפות גלגל</p>
            </div>
        </div>
        
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        
    
    </section>


    <section class=" container">
        <div class="text-center p-5 "> 
            <text class="text-black font-heebo text-2xl font-bold">
            מאמרים אחרונים
            </text>
        </div>
        <div class="w-full lg:px-20 pb-10">
            <div class="swiper mySwiper h-fit"> <!-- Set your desired width and height here -->
                <div class="swiper-wrapper">
                    <!-- Swiper slides go here -->
                    <div class="swiper-slide w-full h-fit bg-white text-center text-2xl">
                    <div class="text-end flex-col border border-gray-100 rounded-md mx-0">
                        <div class="relative">
                            <img class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/swiper.png" alt="Image" />
                            
                        </div>
                        <div class="flex justify-between items-center pt-1 px-1 flex-col md:flex-row">
                            <text class="mr-1 text-xs md:text-sm">19/10/2020   </text>
                            <div class="flex items-center px-4">
                                <span class="text-sm font-heebo font-bold text-black pl-4  "> קריאה להמשך</span>
                            </div>
                        </div>
                        <p class="text-base font-normal font-heebo p-2">החיים יכולים להפתיע אותנו ולא תמיד באופן חיובי. אחד המצבים הכי לא צפויים בחיים הוא מצב בו יש לנו תיקון פנצ׳ר. תקר בגלגל יכול לגרום לנו לחוש לחץ, חרדה וחשש ולא תמיד יש לנו את היכולת או את הידע להחליף לבד את הגלגל ולחזור לנסיעה רגילה. החלפת גלגל/פנצ'ריה נייד</p>
                        
                    </div>
                    </div>
                    <div class="swiper-slide w-full h-fit bg-white text-center text-2xl">
                    <div class="text-end flex-col border border-gray-100 rounded-md mx-0">
                        <div class="relative">
                            <img class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/swiper.png" alt="Image" />
                            
                        </div>
                        <div class="flex justify-between items-center pt-1 px-1 flex-col md:flex-row">
                            <text class="mr-1 text-xs md:text-sm">19/10/2020   </text>
                            <div class="flex items-center px-4">
                                <span class="text-sm font-heebo font-bold text-black pl-4  "> קריאה להמשך</span>
                            </div>
                        </div>
                        <p class="text-base font-normal font-heebo p-2">החיים יכולים להפתיע אותנו ולא תמיד באופן חיובי. אחד המצבים הכי לא צפויים בחיים הוא מצב בו יש לנו תיקון פנצ׳ר. תקר בגלגל יכול לגרום לנו לחוש לחץ, חרדה וחשש ולא תמיד יש לנו את היכולת או את הידע להחליף לבד את הגלגל ולחזור לנסיעה רגילה. החלפת גלגל/פנצ'ריה נייד</p>
                        
                    </div>
                    </div>
                    <div class="swiper-slide w-full h-fit bg-white text-center text-2xl">
                    <div class="text-end flex-col border border-gray-100 rounded-md mx-0">
                        <div class="relative">
                            <img class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/swiper.png" alt="Image" />
                            
                        </div>
                        <div class="flex justify-between items-center pt-1 px-1 flex-col md:flex-row">
                            <text class="mr-1 text-xs md:text-sm">19/10/2020   </text>
                            <div class="flex items-center px-4">
                                <span class="text-sm font-heebo font-bold text-black pl-4  "> קריאה להמשך</span>
                            </div>
                        </div>
                        <p class="text-base font-normal font-heebo p-2">החיים יכולים להפתיע אותנו ולא תמיד באופן חיובי. אחד המצבים הכי לא צפויים בחיים הוא מצב בו יש לנו תיקון פנצ׳ר. תקר בגלגל יכול לגרום לנו לחוש לחץ, חרדה וחשש ולא תמיד יש לנו את היכולת או את הידע להחליף לבד את הגלגל ולחזור לנסיעה רגילה. החלפת גלגל/פנצ'ריה נייד</p>
                        
                    </div>
                    </div>
                    <div class="swiper-slide w-full h-fit bg-white text-center text-2xl">
                    <div class="text-end flex-col border border-gray-100 rounded-md mx-0">
                        <div class="relative">
                            <img class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/swiper.png" alt="Image" />
                            
                        </div>
                        <div class="flex justify-between items-center pt-1 px-1 flex-col md:flex-row">
                            <text class="mr-1 text-xs md:text-sm">19/10/2020   </text>
                            <div class="flex items-center px-4">
                                <span class="text-sm font-heebo font-bold text-black pl-4  "> קריאה להמשך</span>
                            </div>
                        </div>
                        <p class="text-base font-normal font-heebo p-2">החיים יכולים להפתיע אותנו ולא תמיד באופן חיובי. אחד המצבים הכי לא צפויים בחיים הוא מצב בו יש לנו תיקון פנצ׳ר. תקר בגלגל יכול לגרום לנו לחוש לחץ, חרדה וחשש ולא תמיד יש לנו את היכולת או את הידע להחליף לבד את הגלגל ולחזור לנסיעה רגילה. החלפת גלגל/פנצ'ריה נייד</p>
                        
                    </div>
                    </div>
                    <div class="swiper-slide w-full h-fit bg-white text-center text-2xl">
                    <div class="text-end flex-col border border-gray-100 rounded-md mx-0">
                        <div class="relative">
                            <img class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/swiper.png" alt="Image" />
                            
                        </div>
                        <div class="flex justify-between items-center pt-1 px-1 flex-col md:flex-row">
                            <text class="mr-1 text-xs md:text-sm">19/10/2020   </text>
                            <div class="flex items-center px-4">
                                <span class="text-sm font-heebo font-bold text-black pl-4  "> קריאה להמשך</span>
                            </div>
                        </div>
                        <p class="text-base font-normal font-heebo p-2">החיים יכולים להפתיע אותנו ולא תמיד באופן חיובי. אחד המצבים הכי לא צפויים בחיים הוא מצב בו יש לנו תיקון פנצ׳ר. תקר בגלגל יכול לגרום לנו לחוש לחץ, חרדה וחשש ולא תמיד יש לנו את היכולת או את הידע להחליף לבד את הגלגל ולחזור לנסיעה רגילה. החלפת גלגל/פנצ'ריה נייד</p>
                        
                    </div>
                    </div>
                    
                    
                    <!-- Add more slides as needed -->
                </div>
                <div class="swiper-pagination "></div>
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 2,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 2000, // Delay in milliseconds between slides
                disableOnInteraction: false, // Allow user interaction to pause autoplay
            },
            breakpoints: {
            300: {
                slidesPerView: 1,
                spaceBetween: 0,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 0,
            },
            1024:{
                slidesPerView: 3,
                spaceBetween: 0,
            }
            },

            speed: 1000, // Adjust the speed (in milliseconds)
            effect: "slide"
        });
    </script>
  
    <script>
        const accordions = document.querySelectorAll('.accordion');

        accordions.forEach(accordion => {
            const header = accordion.querySelector('.accordion-header');
            const content = accordion.querySelector('.accordion-content');
            const icon = header.querySelector('.accordion-icon');

            header.addEventListener('click', () => {
                // Close all accordions first
                accordions.forEach(a => {
                    const aContent = a.querySelector('.accordion-content');
                    const aIcon = a.querySelector('.accordion-icon');
                    if (aContent !== content) {
                        aContent.classList.add('hidden');
                        aIcon.textContent = '+';
                    }
                });

                content.classList.toggle('hidden');
                icon.textContent = content.classList.contains('hidden') ? '+' : '-';
            });
        });
    </script>
    <script>
    // Function to start the counter when the element is in the viewport
    function startCounterWhenVisible(targetId, finalValue) {
        const counter = document.getElementById(targetId);
        let currentValue = 0;
        const increment = finalValue / 100; // Adjust the increment as needed

        const options = {
            root: null,
            rootMargin: '0px',
            threshold: 0.5, // Trigger when at least 50% of the element is visible
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    observer.unobserve(entry.target);
                    const interval = setInterval(() => {
                        if (currentValue >= finalValue) {
                            clearInterval(interval);
                        } else {
                            currentValue += increment;
                            counter.textContent = Math.floor(currentValue);
                        }
                    }, 20); // Adjust the interval duration as needed
                }
            });
        }, options);

        observer.observe(counter);
    }

    // Start the counters when the page loads
    window.addEventListener("load", () => {
        startCounterWhenVisible("counter1", 250);
        startCounterWhenVisible("counter2", 4454);
            startCounterWhenVisible("counter3", 9445);
            startCounterWhenVisible("counter4", 10459);
        // Add similar calls for other counters
    });
</script>

<script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 2,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            
            breakpoints: {
            300: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 0,
            },
            1024:{
                slidesPerView: 3,
                spaceBetween: 30,
            }
            },

            speed: 1000, // Adjust the speed (in milliseconds)
            effect: "slide"
        });
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>

        
    </body>
    <?php
    get_footer();
    ?>
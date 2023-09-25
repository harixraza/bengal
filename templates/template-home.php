<?php

/**
 * Template name: Homepage
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Add custom CSS to style the navigation buttons using Tailwind CSS classes -->


    


    <title>Bengal</title>
</head>
<body>
    <section>
        <div class="w-screen">
            <nav class=" w-full h-20 flex  justify-center items-center font-heebo">
                <div class="flex"> 
                <div class="w-24 h-5 flex lg:items-center">
                    <img class="w-full h-5 cursor-pointer" src="./img/social.svg" alt="Social Icon" />
                </div>
                <div class="lg:w-24 w-7 h-6 flex items-center sm:justify-center lg:rounded-md lg:ml-7 lg:px-2 bg-primary">
                    <img class="w-4 h-4 " src="./img/Path 10.svg" alt="Path 10" />
                    <label class="hidden sm:block pl-1 text-white text-base font-bold cursor-pointer"> *9096</label>
                </div>
            </div>
                <!-- Menu for large screens (hidden on small screens) -->
                <ul id="menu" class="md:flex hidden h-10 items-center space-x-10 lg:ml-24">
                    <li class="w-20 h-6 font-medium cursor-pointer">
                        <span class="text-base font-medium"> צור קשר</span>
                    </li>
                    <li class="flex w-20 cursor-pointer"> 
                        <img class="" src="./img/down.svg" alt="Arrow Down" />
                        <span class="text-base font-medium"> מידע נוסף</span>
                    </li>
                    <li class="flex cursor-pointer "> 
                        <img class="" src="./img/down.svg" alt="Arrow Down" />
                        <span class="text-base font-medium"> חנות אונליין</span>
                    </li>
                    <li class="flex w-20 cursor-pointer "> 
                        <img class="" src="./img/down.svg" alt="Arrow Down" />
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
                    <img class="relative left-5" src="./img/icon-logo.svg" alt="Logo" />
                </div>
                <div class="w-[70px] h-10 flex-col lg:flex-row justify-between items-center">
                    <text class="text-[25px] font-bold l    eading-3 ">Ben<a class="text-primary">Gal</a> </text>
        
                    <text class="text-[14px] font-bold relative left-5 -top-2 ">שירותי דרך</text>
                    
                </div>
            </div>

                <div id="menu-icon" class="lg:hidden cursor-pointer">
                    <img src="./img/Group 112.svg" alt="Menu" />
                </div>
            </nav>
            <div >
            <div class="w-full h-[500px] bg-[url('./img/homepagebg.webp')] bg-cover bg-center bg-blend-darken flex justify-center items-center font-heebo">
                <div class="w-[400px] h-[157px]  ">
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
                        <img class="text-white w-4 h-4 ml-1" src="./img/Path 22.svg" />
                    </div>
                    <div class="h-6 mt-4 flex items-center justify-end">
                        <div class="w-40 h-9 bg-primary rounded-md flex items-center ">
                          <img class="text-white w-4 h-4 ml-1" src="./img/Path 20.svg" />
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
    
    <section>
        <div class="lg:flex flex-row w-full  items-center justify-center  relative -top-14 space-x-20">
            <div class="flex items-center justify-around  space-x-20 ">  
            <div class="flex-col w-48 h-28 rounded-md items-center justify-center bg-primary border-4 border-primary">
                <div class="flex items-center justify-center">
                  <img class="text-white w-14 h-11  mt-1" src="./img/Car battery replacement.svg" />
                </div>
                <text class="text-white font-heebo ps-4 text-base font-normal">
                  החלפת מצברים בדרכים
                </text>
            </div>
            
            
            <div class="flex-col w-48 h-28  rounded-md items-center justify-center bg-primary border-4 border-primary">
                <div class="flex items-center justify-center">
                  <img class="text-white w-14 h-11  mt-1" src="./img/frame2.png" />
                </div>
                <text class="text-white font-heebo ps-4 text-base font-normal">
                    החלפת גלגל בדרכים
                </text>
            </div>
            </div>
        

            <div class="flex items-center justify-center space-x-20 pt-4 pr-4 lg:pt-0 lg:pr-0">  
            <div class="flex-col w-48 h-28  rounded-md items-center justify-center bg-primary border-4 border-primary">
                <div class="flex items-center justify-center">
                  <img class="text-white w-14 h-11  mt-1" src="./img/frame3.png" />
                </div>
                <text class="text-white font-heebo ps-4 text-base font-normal">
                    מכירת צמיגים בדרכים
                </text>
            </div>
              <div class="flex-col w-48 h-28  rounded-md items-center justify-center bg-primary border-4 border-primary">
                <div class="flex items-center justify-center">
                  <img class="text-white w-14 h-11  mt-1" src="./img/frame4.png" />
                </div>
                <text class="text-white font-heebo ps-4 text-base font-normal">
                    תיקון פנצ׳ר בדרכים
                </text>
              </div>
            </div>
        </div>
    </section>

    <section>
        <div class="flex  justify-center bg-white ">
            <div class="w-[425px] h-64 flex-col">
                <img class="w-425px h-64" src="./img/Group 62.png" />
                
            </div>
            <div class=" w-[425px] h-64 text-right  ">
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
        <div class="w-full flex justify-center space-x-10 mt-10 pb-3">
            <img class="hidden sm:block" src="./img/Group 11087.webp" />
        </div>
        
    </section>
    <section class="bg-gray-100 h-80 pt-10">
        <div class="text-center"> 
            <text class="text-black font-heebo ps-4 text-2xl font-bold">
                למי ניתן השירות
            </text>
        </div>
        
        <div class="flex flex-col md:flex-row justify-center items-center space-x-5 mt-5">
            
            <div class="w-52 h-40 relative mb-4 md:mb-0">
                <img class="w-52 h-40 object-cover" src="./img/sec4.1.png" alt="Logo" />
                <div class="absolute bottom-0 left-0 right-0 bg-white bg-opacity-80 text-black text-center py-2">
                    למנופים
                </div>
            </div>
            <div class="w-52 h-40 relative mb-4 md:mb-0 bg-gray-300">
                <img class="w-52 h-40 object-cover" src="./img/sec4.2.png" alt="Logo" />
                <div class="absolute bottom-0 left-0 right-0 bg-white bg-opacity-80 text-black text-center py-2">
                    לטרקטורים וצמ״ה
                </div>
            </div>
            <div class="w-52 h-40 relative">
                <img class="w-52 h-40 object-cover" src="./img/sec4.3.png" alt="Logo" />
                <div class="absolute bottom-0 left-0 right-0 bg-white bg-opacity-80 text-black text-center py-2">
                    למשאיות ואוטבוסים
                </div>
            </div>
            <div class="w-52 h-40 relative">
                <img class="w-52 h-40 object-cover" src="./img/sec4.4.png" alt="Logo" />
                <div class="absolute bottom-0 left-0 right-0 bg-white bg-opacity-80 text-black text-center leading-3">
                    למי ניתן השירות
                    לרכבים פרטיים
                    החלפת גלגל/צמיג ותיקון
                    לכל סוגי הרכבים בדרכים

                </div>
            </div>
        </div>
        
        
    </section>
    <section>
        <div class="w-full h-[400px] bg-[url('./img/sec5bg.png')] bg-cover bg-center flex justify-center items-center font-heebo">
            <div class="text-center space-y-4"> 
                <p class="font-heebo text-2xl text-white">ניידות שירות שלנו בפריסה ארצית</p>
                <p class="font-heebo text-7xl font-bold text-white">45 דקות</p>
                <p class="text-white font-normal">ניידות שירות שלנו בפריסה ארצית</p>
                <p class="text-white font-light">ניידות שירות שלנו בפריסה ארצית</p>
            </div>
        </div>        
    </section>




    
       
    <section class=" mt-4 flex justify-center ">
                
        <div class="w-[500px]   p-4 font-heebo">
            <div class="flex flex-row justify-between mb-4">
                <div class="w-1/2 h-[130px] border border-gray-100 rounded-md bg-[url('./img/bgicon1.svg')] bg-no-repeat bg-center p-2 m-2 flex flex-col justify-center items-center">
                    <p class="text-center text-lg font-normal">אזורי שירות</p>
                    <div class="w-20 h-[2px] bg-black my-1"></div>
                    <p class="text-center text-base font-normal">פריסה ארצית</p>
                </div>
                
                <div class="w-1/2 h-[130px] border border-gray-100 rounded-md bg-[url('./img/bgicon2.svg')] bg-no-repeat bg-center p-2 m-2 flex flex-col justify-center items-center">
                    <p class="text-center text-lg font-normal">שעות פעילות</p>
                    <div class="w-20 h-[2px] bg-black my-1"></div>
                    <p class="text-center text-base font-normal"> 24/6</p>
                </div>
            </div>
            <div class="flex flex-row justify-between mt-4">
                <div class="w-1/2 h-[130px] border border-gray-100 rounded-md bg-[url('./img/bgicon3.svg')] bg-no-repeat bg-center p-2 m-2 flex flex-col justify-center items-center">
                    <p class="text-center text-lg font-normal">מרכזי התקנה</p>
                    <div class="w-20 h-[2px] bg-black my-1"></div>
                    <p class="text-center text-base font-normal">180</p>
                </div>
                <div class="w-1/2 h-[130px] border border-gray-100 rounded-md bg-[url('./img/bgicon4.svg')] bg-no-repeat bg-center p-2 m-2 flex flex-col justify-center items-center">
                    <p class="text-center text-lg font-normal">מס׳ שירותי דרך</p>
                    <div class="w-20 h-[2px] bg-black my-1"></div>
                    <p class="text-center text-base font-normal">45,543</p>
                </div>
            </div>
        </div>
        
        
        
              <div class="w-[500px] p-4">
                <div class="accordion shadow-sm border text-right border-gray-300 rounded-md">
                    <div class="accordion-header shadow-sm border border-gray-300 p-1 cursor-pointer flex justify-between items-center">
                        <h2 class="text-lg font-medium text-right">היתרונות שלנו</h2>
                        <span class="accordion-icon text-2xl">+</span>
                    </div>
                    <div class="accordion-content hidden bg-white p-2">
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
                    <div class="accordion-header shadow-sm border text-right border-gray-300 p-1 cursor-pointer flex justify-between items-center">
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
                    <div class="accordion-header shadow-sm border text-right border-gray-300  p-1 cursor-pointer flex justify-between items-center">
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
                    <div class="accordion-header shadow-sm border text-right border-gray-300  p-1 cursor-pointer flex justify-between items-center">
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
                    <div class="accordion-header shadow-sm border text-right border-gray-300  p-1 cursor-pointer flex justify-between items-center">
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
            
            
    </section>

    <section class=" p-11 ">
        <div class="text-center p-4"> 
            <text class="text-black font-heebo ps-4 text-2xl font-bold">
                לקוחות ממליצים
            </text>
        </div>
        <div class="w-full ml-5  lg:px-72 ">
            <div class="swiper mySwiper mx-auto h-[500px] ">
                <div class="swiper-wrapper reviewSlider">
                    <div class="swiper-slide  bg-white text-center text-2xl flex items-center justify-center">
                        <div class="w-[250px] h-[300px] review bg-black text-white text-right p-1 opacity-90">
                            <div class="text-center">
                                <span class="text-base text-yellow-500">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            </div>
                            <p class="text-sm mt-2"> 
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
                            <div class="text-center">
                                <span class="text-base text-yellow-500">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            </div>
                            <p class="text-sm mt-2"> 
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
                            <div class="text-center">
                                <span class="text-base text-yellow-500">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            </div>
                            <p class="text-sm mt-2"> 
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
                            <div class="text-center">
                                <span class="text-base text-yellow-500">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            </div>
                            <p class="text-sm mt-2"> 
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
                            <div class="text-center">
                                <span class="text-base text-yellow-500">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            </div>
                            <p class="text-sm mt-2"> 
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
                            <div class="text-center">
                                <span class="text-base text-yellow-500">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            </div>
                            <p class="text-sm mt-2"> 
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
                            <div class="text-center">
                                <span class="text-base text-yellow-500">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            </div>
                            <p class="text-sm mt-2"> 
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
                <div class="swiper-pagination -my-3"></div>
                <div class="swiper-button-next text-black focus:font-extrabold rounded-full p-2 cursor-pointer"></div>
                <div class="swiper-button-prev  text-black rounded-full  focus:font-extrabold p-2 cursor-pointer"></div>
    

            </div>
            </div>
            

        </div>

           
    </section>

    <section>
        <div class=" relative bg-[url('./img/raod.jpg')] bg-cover  bg-center w-full  h-48 flex justify-center space-x-12 items-center">
            <div class="p-2 w-[250px] h-28 flex flex-col justify-end">
                <p class="text-center text-white text-4xl font-bold">
                    <span id="counter1">0</span>
                </p>
                <p class="text-center text-white text-lg font-normal">מרכזי התקנה</p>
            </div>
            
            
            <div class=" p-2 w-[250px] h-28 flex flex-col justify-end">
                <p class="text-center text-white text-4xl font-bold">
                    <span id="counter2">0</span>
                </p>

                <p class="text-center text-white text-lg font-normal">החלפות צמיגים</p>
            </div>
            <div class="  p-2 w-[250px] h-28 flex flex-col justify-end">
                <p class="text-center text-white text-4xl font-bold">
                    <span id="counter3">0</span>
                </p>

                <p class="text-center text-white text-lg font-normal"> תיקוני פאנצ׳ר</p>
            </div>
            <div class=" p-2 w-[250px] h-28 flex flex-col justify-end">
                <p class="text-center text-white text-4xl font-bold">
                    <span id="counter4">9000</span>

                </p>

                <p class="text-center text-white text-lg font-normal"> החלפות גלגל</p>
            </div>
        </div>
        
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        
    
    </section>


    <section class=" p-11 ">
        <div class="text-center p-4"> 
            <text class="text-black font-heebo ps-4 text-2xl font-bold">
                לקוחות ממליצים
            </text>
        </div>
        <div class="w-full ml-5  lg:px-56 ">
            <div class="swiper mySwiper mx-auto ">
                <div class="swiper-wrapper">
                    <div class="swiper-slide bg-white text-center text-2xl flex items-center justify-center">
                        <div class="w-52 h-40 relative mb-4 md:mb-0">
                            <img class="w-52 h-40 object-cover" src="./img/sec4.1.png" alt="Logo" />
                            <div class="absolute bottom-0 left-0 right-0 bg-white  text-black text-center py-2">
                                למנופים
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white text-center text-2xl flex items-center justify-center">
                        <div class="w-52 h-40 relative mb-4 md:mb-0">
                            <img class="w-52 h-40 object-cover" src="./img/sec4.1.png" alt="Logo" />
                            <div class="absolute bottom-0 left-0 right-0 bg-white  text-black text-center py-2">
                                למנופים
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white text-center text-2xl flex items-center justify-center">
                        <div class="w-52 h-40 relative mb-4 md:mb-0">
                            <img class="w-52 h-40 object-cover" src="./img/sec4.1.png" alt="Logo" />
                            <div class="absolute bottom-0 left-0 right-0 bg-white  text-black text-center py-2">
                                למנופים
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white text-center text-2xl flex items-center justify-center">
                        <div class="w-52 h-40 relative mb-4 md:mb-0">
                            <img class="w-52 h-40 object-cover" src="./img/sec4.1.png" alt="Logo" />
                            <div class="absolute bottom-0 left-0 right-0 bg-white  text-black text-center py-2">
                                למנופים
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white text-center text-2xl flex items-center justify-center">
                        <div class="w-52 h-40 relative mb-4 md:mb-0">
                            <img class="w-52 h-40 object-cover" src="./img/sec4.1.png" alt="Logo" />
                            <div class="absolute bottom-0 left-0 right-0 bg-white  text-black text-center py-2">
                                למנופים
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white text-center text-2xl flex items-center justify-center">
                        <div class="w-52 h-40 relative mb-4 md:mb-0">
                            <img class="w-52 h-40 object-cover" src="./img/sec4.1.png" alt="Logo" />
                            <div class="absolute bottom-0 left-0 right-0 bg-white  text-black text-center py-2">
                                למנופים
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide bg-white text-center text-2xl flex items-center justify-center">
                        <div class="w-52 h-40 relative mb-4 md:mb-0">
                            <img class="w-52 h-40 object-cover" src="./img/sec4.1.png" alt="Logo" />
                            <div class="absolute bottom-0 left-0 right-0 bg-white  text-black text-center py-2">
                                למנופים
                            </div>
                        </div>
                    </div>
                    
                    
                   
                </div>
                <div class="swiper-pagination -my-4"></div>
                

            </div>
            </div>
            

        </div>

           
    </section>

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

    
    
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>

        
    </body>
</html>
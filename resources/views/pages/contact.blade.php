<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!--NAVIGATION -->
    <x-navigation.topBar />
    <!--NAVIGATION -->


    <main
        class='bgi bgi--two w-full h-full text-white  bg-overlayColor bg-blend-multiply bg-center px-10 md:px-0 pt-16 md:pt-36 pb-16 md:pb-36 '>

        <!--CONTAINER -->
        <div class="max-w-screen-xl mx-auto ">
            <div
                class="relative flex lg:block flex-col m-2 xs:m-6 md:m-12 mb-6 lg:mb-0  bg-mainColor-400 lg:bg-transparent  text-white ">
                <!--FORM-->
                <div class="lg:w-1/2 m-4 sm:m-6 lg:border-4 border-secondaryColor  overflow-hidden box-shadow--img p-8 order-1 lg:order-0">

                    <div
                        class="p-4 sm:px-8 lg:px-2 xl:px-6 space-y-2 sm:space-y-3 lg:space-y-5 text-left text-base font-light">
                        <h2 class=" text-3xl lg:text-4xl text-bold text-center pb-6">Skontaktuj się z nami</h2>


                        <x-form.form />
                    </div>
                </div>
                <!--CONTACT BOX-->
                <div
                    class="lg:absolute  lg:w-1/2 lg:top-1/2 lg:right-4 lg:transform lg:-translate-y-1/2 w-full md:px-6 md:mb-12 lg:mb-0 lg:p-6 bgi bgi--one bg-overlayColor bg-blend-multiply z-10 box-shadow--img2 py-8 lg:py-4">


                    <div
                        class="p-4 sm:px-8 lg:px-2 xl:px-6 space-y-2 sm:space-y-10 lg:space-y-12 text-left text-base font-light flex flex-col justify-center items-center pb-4">
                        <img src="{{ asset('assets/logo--white.png') }}" alt="" class=" " loading="lazy"
                            width="250px">

                        <div class="flex flex-col gap-6">
                            <div class="flex justify-start items-center gap-4"><img
                                    src="{{ asset('assets/icons/pin.png') }}" alt="" width="40px"><a
                                    href="" class="text-lg">testowa 123<br>34-400 Nowy Targ</a></div>
                            <div class="flex justify-start items-center gap-4"><img
                                    src="{{ asset('assets/icons/phone.png') }}" alt="" width="40px"><a
                                    href="" class="text-lg">123-456-789</a> </div>
                            <div class="flex justify-start items-center gap-4"><img
                                    src="{{ asset('assets/icons/envelope.png') }}" alt="" width="40px"><a
                                    href="" class="text-lg">test@gmail.com</a></div>
                        </div>
                        
                        

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d20643.52647893982!2d20.4131107!3d49.7025024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1statralight!5e0!3m2!1spl!2spl!4v1695271321124!5m2!1spl!2spl"
                                 style="border:0;" allowfullscreen="" loading="lazy" class="w-full h-64"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        
                    </div>
                </div>
            </div>
        </div>
        </div>




    </main>
    <x-footer />
</body>

</html>

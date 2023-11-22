<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Offer</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!--NAVIGATION -->
    <x-navigation.topBar />
    <!--NAVIGATION -->
    <main>
        <x-secondarySection.container class="bgi--one bg-overlayColor pt-32 lg:pt-48">
            <x-secondarySection.text>
             <h2 class=" heading mb-4 text-secondaryColor">Odkryj świat TatraLight: Mistrzowie Reklamy Świetlnej</h2>
             <p class="text-white">W TatraLight, pasja do tworzenia wyjątkowej reklamy świetlnej stanowi serce naszej działalności. Jesteśmy z Nowego Targu, miejscowości otoczonej malowniczymi Tatrami, co inspiruje nas do kreowania rozwiązań, które przyciągają wzrok i wzbudzają emocje. Nasza firma to miejsce, gdzie nauka, kreatywność i innowacje spotykają się, tworząc unikalne projekty oświetleniowe, które pomagają naszym klientom wyróżnić się w gąszczu konkurencji.</p>
         
            </x-secondarySection.text>
                 <x-secondarySection.cards>
                     <x-offerCard :src="'https://th.bing.com/th/id/OIG.mSWV3Vwe_LD2bgJiX623?pid=ImgGn'" :heading="'Reklama Świetlna, Która Przyciąga Spojrzenia'" class="text-white">Nasze innowacyjne rozwiązania w reklamie świetlnej to klucz do uwagi Twojego klienta. Nasze światła nie tylko oświetlają, ale też przyciągają, nadając Twojej firmie niepowtarzalny blask, który sprawi, że zostaniesz zapamiętany na długo.</x-offerCard>
                     <x-offerCard :src="'https://th.bing.com/th/id/OIG.T3.2_sdcrGDgG_ZEes3A?pid=ImgGn'" :heading="'Oświetlenie Wnętrz, które Tworzy Wyjątkową Atmosferę'" class="lg:mt-24 text-white">Nasze rozwiązania oświetleniowe wnętrz to klucz do kreowania niezapomnianych atmosfer w każdym pomieszczeniu. Dzięki nowoczesnym LED-om i innowacyjnym projektom, potrafimy przekształcić każde wnętrze w przestrzeń pełną wyrazu i nastroju.</x-offerCard>
                     <x-offerCard :src="'https://th.bing.com/th/id/OIG.ppep874WXBG3x8ZD7oaz?pid=ImgGn'" :heading="'Napisy LED - Twoja Wiadomość, Nasze Światło'" class="lg:mt-6 text-white">Napisy LED to potężne narzędzie komunikacji, które pomaga Twojej firmie wyróżnić się i przyciągnąć uwagę w każdym otoczeniu. W TatraLight oferujemy napisy LED najwyższej jakości, które można dostosować do Twoich unikalnych potrzeb.</x-offerCard>
         
                 </x-secondarySection.cards>
         
         
              <div class="py-16 flex justify-center items-center ">
         
                <x-buttons.primary>Dowiedz się więcej</x-buttons.primary>
         
              </div>
             
         </x-secondarySection.container>
       
          <!--FIRST SECTION-->
 <x-primarySection.primarySection class="bgi--gradient">
    <!--IMAGES-->
    <x-primarySection.imageDark class="md:order-1"
    :srcOne="'https://th.bing.com/th/id/OIG.wQsdRxjQa11q_DB4kdAA?pid=ImgGn'"
    :altOne="''"
    :srcTwo="'https://th.bing.com/th/id/OIG.shs4jn5H99nL5Tq_0MJx?pid=ImgGn'"
    :altTwo="''"
    :srcThree="'https://th.bing.com/th/id/OIG.yUOXr6b69ipWrzC1mYPj?pid=ImgGn'"
    :altThree="''"
    />
       
    <!--TEXT-->
    <x-primarySection.text>
        <h3 class="heading">Nowoczesna Technologia W Służbie Światła</h3>
        <p class="mb-8">W TatraLight stawiamy na najnowocześniejsze rozwiązania technologiczne, aby dostarczać naszym
            klientom oświetlenie najwyższej jakości. Nasza firma opiera się na zaawansowanych maszynach i
            narzędziach, które pozwalają nam tworzyć precyzyjne, skomplikowane projekty oświetleniowe.</p>

        <p class="mb-8">Korzystamy z najnowszych technologii LED, które nie tylko zapewniają energooszczędność, ale także
            pozwalają na wyjątkową kontrolę nad intensywnością i kolorem światła. To daje naszym projektom
            wyjątkową elastyczność i możliwość dostosowania oświetlenia do konkretnych potrzeb i atmosfery.</p>

        <p>Nasze materiały to wyłącznie wysokiej jakości surowce, które gwarantują trwałość i niezawodność
            naszych produktów. Połączenie zaawansowanej technologii, kreatywności oraz dbałości o jakość pozwala
            nam tworzyć innowacyjne rozwiązania oświetleniowe, które spełniają najwyższe standardy i
            pozostawiają niezapomniane wrażenia. W TatraLight łączymy pasję do światła z zaawansowaną
            technologią, aby kreować światło, które przekracza granice wyobraźni.</p>

    </x-primarySection.text>
</x-primarySection.primarySection>
    
 <!--SECOND SECTION-->
 <x-primarySection.primarySection class="bgi--two bg-overlayColor">
    <!--IMAGES-->
    <x-primarySection.image
    :srcOne="'https://th.bing.com/th/id/OIG.wQsdRxjQa11q_DB4kdAA?pid=ImgGn'"
    :altOne="''"
    :srcTwo="'https://th.bing.com/th/id/OIG.shs4jn5H99nL5Tq_0MJx?pid=ImgGn'"
    :altTwo="''"
    :srcThree="'https://th.bing.com/th/id/OIG.yUOXr6b69ipWrzC1mYPj?pid=ImgGn'"
    :altThree="''"
    />
    <!--TEXT-->
    <x-primarySection.text>
        <img src="{{ asset('assets/logo--white.png') }}" alt="" width="350px" class="mb-12">
        <p class="text-white">Jesteśmy zespołem pasjonatów z TatraLight, którzy od lat oddają się fascynacji światłem i sztuką
            oświetlenia. Nasza historia zaczęła się w malowniczym Nowym Targu, gdzie otaczające nas Tatry
            zainspirowały nas do tworzenia niezwykłych projektów oświetleniowych. Dzięki naszemu zaangażowaniu i
            ekspertyzie, TatraLight stała się miejscem, gdzie nauka, kreatywność i innowacje spotykają się, by
            tworzyć niepowtarzalne rozwiązania oświetleniowe. Naszym celem jest przekształcanie światła w
            wyjątkowe
            doświadczenia, które przyciągają uwagę i pozostawiają trwałe wrażenia. Dołącz do nas na tej
            pasjonującej
            podróży przez świat oświetlenia.</p>
        <x-timeline />
    </x-primarySection.text>
</x-primarySection.primarySection>
    
     <!--THIRD SECTION-->
 <x-primarySection.primarySection class="bgi--gradient">
    <!--IMAGES-->
    <x-primarySection.imageDark class="md:order-1"
    :srcOne="'https://th.bing.com/th/id/OIG.wQsdRxjQa11q_DB4kdAA?pid=ImgGn'"
    :altOne="''"
    :srcTwo="'https://th.bing.com/th/id/OIG.shs4jn5H99nL5Tq_0MJx?pid=ImgGn'"
    :altTwo="''"
    :srcThree="'https://th.bing.com/th/id/OIG.yUOXr6b69ipWrzC1mYPj?pid=ImgGn'"
    :altThree="''"
    />
       
    <!--TEXT-->
    <x-primarySection.text>
        <h3 class="heading">Nowoczesna Technologia W Służbie Światła</h3>
        <p class="mb-8">W TatraLight stawiamy na najnowocześniejsze rozwiązania technologiczne, aby dostarczać naszym
            klientom oświetlenie najwyższej jakości. Nasza firma opiera się na zaawansowanych maszynach i
            narzędziach, które pozwalają nam tworzyć precyzyjne, skomplikowane projekty oświetleniowe.</p>

        <p class="mb-8">Korzystamy z najnowszych technologii LED, które nie tylko zapewniają energooszczędność, ale także
            pozwalają na wyjątkową kontrolę nad intensywnością i kolorem światła. To daje naszym projektom
            wyjątkową elastyczność i możliwość dostosowania oświetlenia do konkretnych potrzeb i atmosfery.</p>

        <p>Nasze materiały to wyłącznie wysokiej jakości surowce, które gwarantują trwałość i niezawodność
            naszych produktów. Połączenie zaawansowanej technologii, kreatywności oraz dbałości o jakość pozwala
            nam tworzyć innowacyjne rozwiązania oświetleniowe, które spełniają najwyższe standardy i
            pozostawiają niezapomniane wrażenia. W TatraLight łączymy pasję do światła z zaawansowaną
            technologią, aby kreować światło, które przekracza granice wyobraźni.</p>

    </x-primarySection.text>
</x-primarySection.primarySection>
   
    
       
    </main>
    <x-footer />
</body>

</html>

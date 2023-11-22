<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    @vite(['resources/css/app.css','resources/scss/app.scss', 'resources/js/app.js',])
</head>

<body>
    <!--NAVIGATION -->
    <x-navigation.topBar />
    <!--NAVIGATION -->

    
    <main>
        <!--FIRST SECTION-->
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


        
 <!--SECOND SECTION-->
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
<x-layout>
    <section class="bg-white dark:bg-gray-900 font-Almarai">
        <div class="container px-6 py-16 mx-auto text-center">
            <div class="max-w-lg mx-auto">
                <h1 class="text-3xl font-semibold text-gray-800 dark:text-white lg:text-4xl">شركة ارم ستار للتجارة
                    والمقاولات العامة</h1>

                <p class="mt-6 text-gray-500 dark:text-gray-300 text-justify">
                    شركة ارم ستار شركة غنية عن التعريف في مجال
                    تحـظـى
                    شـركـة إرم ستـار بـخـبرة طويـلـة فـي مـجـال الـمـشـاريـع والإنشـاءات اكتسبتهـا مـن خلال العمـل
                    المستـمـر وثقة العملاء بالإضافة الى سمعتها الكبيرة كونهـا شـركـة يـمـكـنهـا إتمام المشـاريـع ذات
                    الطابع الدقيق والـمـعـقـد وهـي إحـدى الـشـركـات اليـمـنـيـة الـرائـدة المتخصصة فـي مـجـال
                    الـمـقـاولات والإنـشـاءات، كـانـت انطلاقتـنـا في عام 1996 مرتـكزين على قـاعدة قوية من الخبرات
                    والامكانيات الفكرية والابداعية.

                    حققنـا النـجـاحـات تـلـو الـنـجـاحـات بـفـضـل الإمكانات والعقول البشرية الـذي ،والـطـاقـات
                    الـبـشـريـة المتميزة ،راضين عن أدائنا وما حققناه طوال السنوات ونـطـمـح الـى المـزيـد وهـذا مـا
                    نـعـمـل عـليـة ، تمتلكها الـشـركـة وهـذا ليس ما نقوله نحن بل عملائنا من مختلف القطـاعـات الحكومية
                    والخاصة منظمات محلية و دولـيـة. ويعود ذلك الثنـاء والشكر لحسن الأداء وجـودة الـعـمل وسرعة التنفيذ و
                    الايـفـاء بـالـمـواعـيـد
                </p>
            </div>

            <x-achievements :achievments="$achievments" />
            <x-customers :customers="$customers" />
            <x-services :services="$services" />


        </div>
    </section>
</x-layout>

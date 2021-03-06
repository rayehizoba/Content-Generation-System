<div>
    <div class="px-3 bg-#FAFAFA">
        <div class="flex justify-between items-center">
            <a href="#">
                <i class="mdi mdi-chevron-left text-4xl"></i>
            </a>
            <a href="#" class="p-3">
                <i class="mdi mdi-help-circle text-4xl text-#4B93F5"></i>
            </a>
        </div>

        <textarea class="w-full px-5 py-3 focus:outline-none text-3xl font-bold bg-transparent"
                  rows="3" placeholder="Write your question here..." x-model="question"></textarea>
    </div>

    <ul class="bg-#FAFAFA text-white font-bold flex pb-1 whitespace-nowrap overflow-x-auto">
        <li>
            <div class="h-10 w-8 mb-3">&nbsp;</div>
        </li>
        <li>
            <div class="rounded-full bg-#2EC98D px-5 h-10 flex items-center mb-3">
                Queen Elizabeth II
            </div>
        </li>
        <li>
            <div class="h-10 w-4 mb-3">&nbsp;</div>
        </li>
        <li>
            <div class="rounded-full bg-#2EC9C3 px-5 h-10 flex items-center mb-3">
                QEII
            </div>
        </li>
        <li>
            <div class="h-10 w-8 mb-3">&nbsp;</div>
        </li>
    </ul>

    <ul class="flex text-xs font-bold overflow-hidden">
        <li class="flex-grow pointer bg-#4B65F5 border-#4B65F5 z-40">
            <div>
                <p class="text-#A7CCFF">Study</p>
                <p class="text-white">Modern Age</p>
            </div>
        </li>
        <li class="flex-grow pointer bg-#3F5AEB border-#3F5AEB z-30">
            <div>
                <p class="text-#A7CCFF">Audience</p>
                <p class="text-white">UK</p>
            </div>
        </li>
        <li class="flex-grow pointer bg-#3551E6 border-#3551E6 z-20">
            <div>
                <p class="text-#A7CCFF">Difficulty</p>
                <p class="text-white">Very Easy</p>
            </div>
        </li>
        <li class="flex-grow pointer bg-#2E4ADB border-#2E4ADB z-10">
            <div>
                <p class="text-#A7CCFF">Question Type</p>
                <p class="text-white">UAQ</p>
            </div>
        </li>
    </ul>

{{--    <div x-show="step === 1" class="p-5 py-8 min-h-screen-1/2">--}}
{{--        <p class="font-bold">--}}
{{--            Please enter the answer--}}
{{--        </p>--}}
{{--        <ul>--}}
{{--            <li class="mt-5">--}}
{{--                <div class="rounded-md border p-3 pl-0 flex items-center transition-gpu h-12"--}}
{{--                     @mouseenter="correctAnswerFocus =true" @mouseleave="correctAnswerFocus =false"--}}
{{--                     :class="{ 'border-#D5D5D5': !correctAnswerFocus, 'border-#4B93F5': correctAnswerFocus, 'border-#2EC98D': !correctAnswerFocus && correctAnswer.length }">--}}
{{--                    <div class="h-6 w-8 rounded-tr rounded-br flex items-center justify-center transition-gpu"--}}
{{--                         :class="{ 'bg-#D5D5D5': !correctAnswerFocus, 'bg-#4B93F5': correctAnswerFocus, 'bg-#2EC98D': !correctAnswerFocus && correctAnswer.length, 'text-white': correctAnswer.length || correctAnswerFocus, 'text-#888686': !correctAnswerFocus && !correctAnswer.length }">--}}
{{--                        A--}}
{{--                    </div>--}}
{{--                    <input type="text" placeholder="Enter the correct answer" x-model="correctAnswer"--}}
{{--                           class="px-2 flex-grow focus:outline-none font-semibold text-sm" />--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li x-show="showSynonymAnswer" class="mt-5">--}}
{{--                <div class="rounded-md border p-3 pl-0 flex items-center transition-gpu h-12"--}}
{{--                     @mouseenter="synonymAnswerFocus =true" @mouseleave="synonymAnswerFocus =false"--}}
{{--                     :class="{ 'border-#D5D5D5': !synonymAnswerFocus, 'border-#4B93F5': synonymAnswerFocus, 'border-#2EB7C9': !synonymAnswerFocus && synonymAnswer.length }">--}}
{{--                    <div class="h-6 w-8 rounded-tr rounded-br flex items-center justify-center transition-gpu"--}}
{{--                         :class="{ 'bg-#D5D5D5': !synonymAnswerFocus, 'bg-#4B93F5': synonymAnswerFocus, 'bg-#2EC9C3': !synonymAnswerFocus && synonymAnswer.length, 'text-white': synonymAnswer.length || synonymAnswerFocus, 'text-#888686': !synonymAnswerFocus && !synonymAnswer.length }">--}}
{{--                        B--}}
{{--                    </div>--}}
{{--                    <input type="text" placeholder="Enter synonym or equivalent answer" x-model="synonymAnswer"--}}
{{--                           class="px-2 flex-grow focus:outline-none font-semibold text-sm" />--}}
{{--                    <i @click="synonymAnswer =''; showSynonymAnswer =false" class="mdi mdi-trash-can text-#FF8383 text-lg"></i>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li x-show="!showSynonymAnswer" class="mt-5">--}}
{{--                <button @click="showSynonymAnswer =true" type="button" class="rounded-md border border-dashed border-#4B93F5 p-3 pl-0 flex items-center focus:outline-none w-full h-12">--}}
{{--                    <div class="-ml-px mr-px h-6 w-8 text-white bg-#4B93F5 rounded-tr rounded-br flex items-center justify-center">--}}
{{--                        <i class="mdi mdi-plus text-2xl"></i>--}}
{{--                    </div>--}}
{{--                    <p class="text-sm font-bold px-2 text-#4B93F5">--}}
{{--                        Add synonyms or equivalent answers--}}
{{--                    </p>--}}
{{--                </button>--}}
{{--            </li>--}}
{{--        </ul>--}}

{{--        <div class="p-3 py-8">--}}
{{--            <div x-show="!showSynonymAnswer" class="rounded-full p-1 py-2 flex items-center bg-#4B93F5 bg-opacity-10 border-#707070">--}}
{{--                <i class="mdi mdi-information text-3xl text-#4B93F5"></i>--}}
{{--                <p class="text-sm mx-5">--}}
{{--                    Add alternative answer with tap add synonyms button--}}
{{--                </p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div x-show="step === 2" class="p-5 py-8 min-h-screen-1/2">--}}
{{--        <p class="font-bold">--}}
{{--            Now please enter 3 incorrect answers--}}
{{--        </p>--}}
{{--        <ul>--}}
{{--            <li class="mt-5">--}}
{{--                <div class="rounded-md border p-3 pl-0 flex items-center transition-gpu"--}}
{{--                     @mouseenter="wrongFocusB =true" @mouseleave="wrongFocusB =false"--}}
{{--                     :class="{ 'border-#D5D5D5': !wrongFocusB && !wrongAnswerB.length, 'border-#2B2B2B': wrongFocusB || wrongAnswerB.length }">--}}
{{--                    <div class="h-6 w-8 rounded-tr rounded-br flex items-center justify-center transition-gpu"--}}
{{--                         :class="{ 'bg-#D5D5D5 text-#888686': !wrongFocusB && !wrongAnswerB.length, 'bg-#2B2B2B text-white': wrongFocusB || wrongAnswerB.length }">--}}
{{--                        B--}}
{{--                    </div>--}}
{{--                    <input type="text" placeholder="Enter a wrong answer" x-model="wrongAnswerB"--}}
{{--                           class="px-2 flex-grow focus:outline-none font-semibold text-sm" />--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li class="mt-5">--}}
{{--                <div class="rounded-md border p-3 pl-0 flex items-center transition-gpu"--}}
{{--                     @mouseenter="wrongFocusC =true" @mouseleave="wrongFocusC =false"--}}
{{--                     :class="{ 'border-#D5D5D5': !wrongFocusC && !wrongAnswerC.length, 'border-#2B2B2B': wrongFocusC || wrongAnswerC.length }">--}}
{{--                    <div class="h-6 w-8 rounded-tr rounded-br flex items-center justify-center transition-gpu"--}}
{{--                         :class="{ 'bg-#D5D5D5 text-#888686': !wrongFocusC && !wrongAnswerC.length, 'bg-#2B2B2B text-white': wrongFocusC || wrongAnswerC.length }">--}}
{{--                        C--}}
{{--                    </div>--}}
{{--                    <input type="text" placeholder="Enter a wrong answer" x-model="wrongAnswerC"--}}
{{--                           class="px-2 flex-grow focus:outline-none font-semibold text-sm" />--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li class="mt-5">--}}
{{--                <div class="rounded-md border p-3 pl-0 flex items-center transition-gpu"--}}
{{--                     @mouseenter="wrongFocusD =true" @mouseleave="wrongFocusD =false"--}}
{{--                     :class="{ 'border-#D5D5D5': !wrongFocusD && !wrongAnswerD.length, 'border-#2B2B2B': wrongFocusD || wrongAnswerD.length }">--}}
{{--                    <div class="h-6 w-8 rounded-tr rounded-br flex items-center justify-center transition-gpu"--}}
{{--                         :class="{ 'bg-#D5D5D5 text-#888686': !wrongFocusD && !wrongAnswerD.length, 'bg-#2B2B2B text-white': wrongFocusD || wrongAnswerD.length }">--}}
{{--                        D--}}
{{--                    </div>--}}
{{--                    <input type="text" placeholder="Enter a wrong answer" x-model="wrongAnswerD"--}}
{{--                           class="px-2 flex-grow focus:outline-none font-semibold text-sm" />--}}
{{--                </div>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </div>--}}

{{--    <div x-show="step === 3" class="p-5 py-32" @click="step++">--}}
{{--        <p class="font-bold text-3xl text-#3099FF text-center">--}}
{{--            Duplicate search...--}}
{{--        </p>--}}
{{--        <p class="text-xs opacity-50 text-center">--}}
{{--            [ Click here to fake success ]--}}
{{--        </p>--}}
{{--    </div>--}}

{{--    <div x-show="step === 4">--}}
{{--        <div class="sticky top-0 p-5 shadow-md bg-white">--}}
{{--            <p x-show="step === 4" class="font-bold leading-tight text-lg"--}}
{{--               x-transition:enter="transition ease-out duration-300 transform-gpu"--}}
{{--               x-transition:enter-start="-translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100">--}}
{{--                Please check if your question does not already exist--}}
{{--            </p>--}}
{{--        </div>--}}

{{--        <ul x-show="step === 4" class="px-5 pt-3"--}}
{{--            x-transition:enter="transition ease-out duration-300 transform-gpu"--}}
{{--            x-transition:enter-start="translate-y-40 opacity-0" x-transition:enter-end="translate-y-0 opacity-100">--}}
{{--            <template x-for="i in 10" :key="i">--}}
{{--                <li>--}}
{{--                    <div class="rounded-md border border-#2B2B2B p-3 shadow mb-3">--}}
{{--                        <p class="font-semibold mb-3">--}}
{{--                            Who is the present Queen of England ?--}}
{{--                        </p>--}}
{{--                        <ul class="flex">--}}
{{--                            <div class="rounded-full bg-#2EC98D px-5 h-8 flex items-center text-sm text-white font-bold">--}}
{{--                                Queen Elizabeth II--}}
{{--                            </div>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--            </template>--}}
{{--        </ul>--}}
{{--    </div>--}}

{{--    <div x-show="step !== 3" class="p-5 sticky bottom-0 bg-white origin-bottom z-40" :class="step === 4 && '-shadow-md'"--}}
{{--         x-transition:enter="transition ease-out duration-300 transform-gpu"--}}
{{--         x-transition:enter-start="translate-y-full" x-transition:enter-end="translate-y-0">--}}
{{--        <button x-show="step === 4" @click="step =1" type="button" class="mb-4 w-full rounded-md p-3 font-bold text-center border border-#4B93F5 text-#4B93F5">--}}
{{--            Modify Question--}}
{{--        </button>--}}
{{--        <button @click="step < 4 && step++" type="button" class="w-full rounded-md p-3 font-bold text-center bg-#4B93F5 text-white" x-text="step === 4 ? 'Submit' : 'Next'">--}}
{{--            Next--}}
{{--        </button>--}}
{{--    </div>--}}
</div>

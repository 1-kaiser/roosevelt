<div class="">
    <div id="FAQs" class="pt-20 ml-10">
        <strong class="text-3xl">Frequently Asked Questions</strong>
        <p>Our courses and services are backed by four decades of experience.</p>
      </div>
    
      <div class="relative font-inter antialiased">
    
        <main class="mt-16 flex flex-col justify-center overflow-hidden">
            <div class="w-full max-w-2xl mx-auto px-4 md:px-6">
    
                <!-- Accordion component -->
                <div class="divide-y divide-slate-200">
                    <!-- Accordion item -->
                    <div x-data="{ expanded: false }" class="py-2">
                        <h2>
                            <button
                                id="faqs-title-01"
                                type="button"
                                class="flex items-center justify-between w-full text-left font-semibold py-2"
                                @click="expanded = !expanded"
                                :aria-expanded="expanded"
                                aria-controls="faqs-text-01"
                            >
                                <span>1. How much does your Practical Driving Course (PDC) cost?</span>
                                <svg class="fill-indigo-500 shrink-0 ml-8" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out" :class="{'!rotate-180': expanded}" />
                                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out" :class="{'!rotate-180': expanded}" />
                                </svg>
                            </button>
                        </h2>
                        <div
                            id="faqs-text-01"
                            role="region"
                            aria-labelledby="faqs-title-01"
                            class="grid text-sm text-slate-600 overflow-hidden transition-all duration-300 ease-in-out"
                            :class="expanded  'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'"
                            >
                            <div class="overflow-hidden">
                                <p class="pb-3">
                                  Our course fees are designed depending on your level of need: Beginner (20-30 Hours), Intermediate (10-15 Hours) or Refresher (8 Hours). Fees starts at P4,000. Visit our Courses page for more info.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion item -->
                    <div x-data="{ expanded: false }" class="py-2">
                        <h2>
                            <button
                                id="faqs-title-02"
                                type="button"
                                class="flex items-center justify-between w-full text-left font-semibold py-2"
                                @click="expanded = !expanded"
                                :aria-expanded="expanded"
                                aria-controls="faqs-text-02"
                            >
                                <span>2. What do I need to bring during my practical driving sessions?</span>
                                <svg class="fill-indigo-500 shrink-0 ml-8" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out" :class="{'!rotate-180': expanded}" />
                                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out" :class="{'!rotate-180': expanded}" />
                                </svg>
                            </button>
                        </h2>
                        <div
                            id="faqs-text-02"
                            role="region"
                            aria-labelledby="faqs-title-02"
                            class="grid text-sm text-slate-600 overflow-hidden transition-all duration-300 ease-in-out"
                            :class="expanded ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'"
                            >
                            <div class="overflow-hidden">
                                <p class="pb-3">
                                  All students are required to bring their student permit or driver’s license (with LTO O.R.), A-1 ID and O.R. as proof of payment during actual driving lessons. Please wear proper clothing and footwear; sleeveless shirt, short pants, slippers and sandals are strictly not allowed.
                                  <br /><br />
                                  For security reasons, do not bring firearms or any deadly weapons and valuable belongings (ex: jewelries). A-1 Driving shall not be liable for any lost belongings.
                                </p>
                            </div>
                        </div>
                    </div> 
                    <!-- Accordion item -->
                    <div x-data="{ expanded: false }" class="py-2">
                        <h2>
                            <button
                                id="faqs-title-03"
                                type="button"
                                class="flex items-center justify-between w-full text-left font-semibold py-2"
                                @click="expanded = !expanded"
                                :aria-expanded="expanded"
                                aria-controls="faqs-text-03"
                            >
                                <span>3. What happens if I didn’t attend my scheduled practical driving session?</span>
                                <svg class="fill-indigo-500 shrink-0 ml-8" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out" :class="{'!rotate-180': expanded}" />
                                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out" :class="{'!rotate-180': expanded}" />
                                </svg>
                            </button>
                        </h2>
                        <div
                            id="faqs-text-03"
                            role="region"
                            aria-labelledby="faqs-title-03"
                            class="grid text-sm text-slate-600 overflow-hidden transition-all duration-300 ease-in-out"
                            :class="expanded ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'"
                            >
                            <div class="overflow-hidden">
                                <p class="pb-3">
                                  All students must arrive 15 minutes before the scheduled driving session at the training station.
                                  <br /><br />
                                  For cancellation of schedule, student should call the registrar at least 48 hours prior to their scheduled driving lesson. Your absence without informing A-1 Driving will be considered counted.
                                </p>
                            </div>
                        </div>
                    </div> 
                    <!-- Accordion item -->
                    <div x-data="{ expanded: false }" class="py-2">
                        <h2>
                            <button
                                id="faqs-title-04"
                                type="button"
                                class="flex items-center justify-between w-full text-left font-semibold py-2"
                                @click="expanded = !expanded"
                                :aria-expanded="expanded"
                                aria-controls="faqs-text-04"
                            >
                                <span>4. Why do I need to start my first few practical driving sessions inside the training center?</span>
                                <svg class="fill-indigo-500 shrink-0 ml-8" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out" :class="{'!rotate-180': expanded}" />
                                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out" :class="{'!rotate-180': expanded}" />
                                </svg>
                            </button>
                        </h2>
                        <div
                            id="faqs-text-04"
                            role="region"
                            aria-labelledby="faqs-title-04"
                            class="grid text-sm text-slate-600 overflow-hidden transition-all duration-300 ease-in-out"
                            :class="expanded ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'"
                            >
                            <div class="overflow-hidden">
                                <p class="pb-3">
                                  Our modern Training Centers have many advantages:
                                  <br /><br />
                                  * Complete training ground away from daily motoring traffic <br>
                                  * Safe and secure environment <br>
                                  * Free from distractions from other road users <br>
                                  * Develop confidence and skill <br>
                                  * Actual road signs, traffic lights & pavement markings are present in the facility <br>
                                  * Can easily review backing, maneuvering, parking and hanging lessons <br>
                                  * Facility is also suitable for night driving <br>
                                </p>
                            </div>
                        </div>
                    </div>                                                                        
                </div>
                <!-- End: Accordion component -->
            </div>
        </main>
      </div>
</div>

{{-- <style>
    .faqs_bg {
        background: url('img/faqs_bg.svg') no-repeat;
        background-size: cover; 
    }
</style> --}}
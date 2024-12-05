<section style="background-color: #C5EEC4;" class="py-12">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-serif font-bold text-center mb-6">Frequently Asked Questions</h2>
        <div class="space-y-4">
            @if (isset($faqs) && $faqs->count())
                @foreach ($faqs as $faq)
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <div class="p-4 cursor-pointer text-lg font-medium flex justify-between items-center"
                            style="background-color: #00404D; color: white; " onclick="toggleAnswer(this)">
                            <h2 class="font-bold" style="font-size: 20px;">{{ $faq->question }}</h2>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-white transition-transform transform" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4" />
                            </svg>
                        </div>
                        <div class="answer p-4 hidden bg-gray-50 text-gray-800">
                            <p class="font-serif">{{ $faq->answer }}</p>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="text-center text-gray-600">No FAQs available.</p>
            @endif

        </div>
    </div>
</section>

<!-- Script to Toggle the Answer Visibility -->
<script>
    function toggleAnswer(element) {
        const answer = element.nextElementSibling;
        const icon = element.querySelector('svg');

        // Toggle answer visibility
        answer.classList.toggle('hidden');

        // Rotate icon when the answer is shown/hidden
        if (answer.classList.contains('hidden')) {
            icon.classList.remove('rotate-180'); // Default rotation
        } else {
            icon.classList.add('rotate-180'); // Rotated when open
        }
    }
</script>

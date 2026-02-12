<?php
$reviews = [
    ["name" => "VENKATESHA MURTHY", "date" => "a Year ago", "rating" => 5, "text" => "The proprietor himself is a technically qualified person with good knowledge of computer systems. Himself and his field assistants take-up on-site repairs. His charges are reasonable and also provides tally assistance. Used systems Branded are available for a good price."],
    ["name" => "Badri BR", "date" => "5 Years ago", "rating" => 5, "text" => "I have had all my 3 laptops serviced here, Dinesh G the owner and the cheif technician is vastly knowledged and experienced in hardware repair, he has returned to good working order laptops which were returned as unservicable by the authorised service center. Very reasonable when it comes to costs as well"],
    ["name" => "Shiva Shankar", "date" => "5 Years ago", "rating" => 5, "text" => "Best and deal with friendly cost and service is very good. You buy anything in laptop spares and desktop.Repairs chip level fabulous 👌And branded system and laptop it's very and low cost. I am bieng costumer here for long time"],
    ["name" => "Mahesh S", "date" => "5 Years ago", "rating" => 5, "text" => "Quick, highly efficient,and cost-effective service brought to you by really nice people. I'd recommend them far and wide to everyone!. Great service with great team!..What else could a customer ask for?"],
    ["name" => "Pramod Sridhar", "date" => "3 Years ago", "rating" => 5, "text" => "Fast, accurate, Very reliable and prompt service. My go-to place for any computer/laptop related issues. Thanks and keep up the good service."],
    ["name" => "Malathi S", "date" => "5 Years ago", "rating" => 5, "text" => "Quick to identify the problem on my DELL Computer and also resolved it immediately. I liked the cordial way in which resolved the issue."],
    ["name" => "Karthik M", "date" => "3 days ago", "rating" => 5, "text" => "Purchased a refurbished Dell laptop from here. It's in mint condition and performing flawlessly. Best value for money."],
    ["name" => "Meera Nair", "date" => "1 day ago", "rating" => 5, "text" => "Excellent service for printer repair. They even guided me on how to maintain it to avoid future issues. Very helpful."],
    ["name" => "Sandeep J", "date" => "4 days ago", "rating" => 5, "text" => "Best PC component prices in the area. Got my gaming rig upgraded here. Dinesh's cable management is top-notch!"],
    ["name" => "Anil", "date" => "5 years ago", "rating" => 5, "text" => "Accurate solutions no false promises on time delivery I happy with their punchality"],
    ["name" => "Yogesh Sharma J", "date" => "4 years ago", "rating" => 5, "text" => "Good staff and Nice place to buy all types of computer items"]
];

// Duplicate for scroll
$scrollReviews = array_merge($reviews, $reviews);
?>

<section class="py-20 md:py-28 bg-gradient-to-b from-background to-gray-50 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
        <div class="absolute top-[20%] right-[-10%] w-[500px] h-[500px] bg-primary/10 blur-[120px] rounded-full"></div>
        <div class="absolute bottom-[10%] left-[-10%] w-[400px] h-[400px] bg-secondary/10 blur-[100px] rounded-full"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <!-- Header -->
        <div class="text-center mb-16 max-w-2xl mx-auto" data-aos="fade-up">
            <h2 class="text-3xl md:text-5xl font-bold tracking-tight mb-4">
                What Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-accent">Clients Say</span>
            </h2>
            <p class="text-gray-600 text-lg">Real reviews from our satisfied customers on Google.</p>
        </div>

        <!-- Reviews Continuous Scroll -->
        <div class="relative flex overflow-hidden py-10 mask-fade-edges group/scroll">
            <div class="flex gap-6 whitespace-nowrap animate-scroll group-hover/scroll:paused">
                <?php foreach ($scrollReviews as $review): ?>
                <div class="p-8 rounded-3xl bg-white border border-gray-200 hover:border-primary/50 transition-all duration-300 hover:shadow-lg flex flex-col w-[350px] md:w-[450px] h-[320px] shrink-0 whitespace-normal relative">
                    <div class="absolute -top-6 left-8 bg-white border border-gray-200 p-3 rounded-2xl shadow-lg z-20">
                        <i data-lucide="quote" class="text-accent w-6 h-6 fill-accent/20"></i>
                    </div>

                    <!-- Stars -->
                    <div class="flex gap-1 mb-6 mt-4">
                        <?php for ($k = 0; $k < 5; $k++): ?>
                            <i data-lucide="star" class="w-5 h-5 <?php echo ($k < $review['rating']) ? 'text-yellow-400 fill-yellow-400' : 'text-gray-600'; ?>"></i>
                        <?php endfor; ?>
                    </div>

                    <!-- Text -->
                    <div class="flex-grow overflow-hidden">
                        <p class="text-gray-600 leading-relaxed line-clamp-4">"<?php echo $review['text']; ?>"</p>
                    </div>

                    <!-- Author -->
                    <div class="flex items-center gap-4 mt-6 pt-6 border-t border-gray-100">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-primary to-secondary flex items-center justify-center text-white font-bold shrink-0">
                            <?php echo substr($review['name'], 0, 1); ?>
                        </div>
                        <div class="min-w-0">
                            <h4 class="font-semibold text-gray-900 truncate"><?php echo $review['name']; ?></h4>
                            <p class="text-xs text-gray-500"><?php echo $review['date']; ?></p>
                        </div>
                        <div class="ml-auto shrink-0">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg" alt="Google" class="w-5 h-5 opacity-50 hover:opacity-100 transition-opacity">
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- See More Button -->
        <div class="mt-16 text-center" data-aos="fade-up">
            <a href="https://maps.app.goo.gl/pMncUKVnUiTzceBx6" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-white border border-gray-200 hover:bg-gray-50 hover:scale-105 transition-all duration-300 font-medium text-gray-900 shadow-sm">
                Read more reviews on <span class="font-bold flex items-center gap-1">Google Maps <i data-lucide="star" class="w-4 h-4 text-yellow-400 fill-yellow-400"></i></span>
            </a>
        </div>
    </div>
</section>

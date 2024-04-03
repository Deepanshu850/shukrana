<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Dropdown Header</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </link>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>

</head>
<style>
html {
    scroll-behavior: smooth;
}
</style>
<script>
// Listen for a click on any anchor tag
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault(); // Prevent the default anchor behavior

        // Use the history API to update the URL without a page refresh
        if (history.pushState) {
            history.pushState(null, null, this.getAttribute('href'));
        } else {
            location.hash = this.getAttribute('href');
        }

        // Smooth scroll to the linked section
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
</script>


<body class="bg-white font-sans leading-normal tracking-normal">
    <style>
    .menu {
        transition: transform 0.3s ease;
        display: none;
        /* Initially hide the menu */
    }

    .mobile-menu-button {
        display: none;
        /* Hide button on desktop */
        cursor: pointer;
        /* Optional: Changes the cursor on hover */
    }

    .mobile-menu-button .menu-bar {
        display: block;
        width: 25px;
        /* Width of menu bars */
        height: 3px;
        /* Height of menu bars */
        background-color: white;
        /* Color of menu bars */
        margin: 5px 0;
        /* Spacing between bars */
    }

    @media (max-width: 768px) {
        .mobile-menu-button {
            display: block;
            /* Show button on mobile */
        }

        .menu {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background-color: #8e43f0;
            /* Match header background */
            flex-direction: column;
            align-items: flex-start;
            padding-top: 20px;
            /* Space for menu items */
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }

        .menu.active {
            display: flex;
            transform: translateX(0);
            /* Move into view */
        }

        .menu-item {
            padding: 10px;
            color: white;
            /* Ensuring text is visible */
        }
    }
    </style>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('menuBtn').addEventListener('click', function() {
            document.querySelector('.menu').classList.toggle('active');
        });
    });
    </script>
    <header style="background-color: #8e43f0;" class="p-4 text-white">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <!-- Placeholder for the logo -->
                <a href="#" class="text-xl font-bold mr-8">LOGO</a>
            </div>
            <div class="flex items-center space-x-4">
                <a href="#home" class="text-white no-underline hover:text-white hover:no-underline">HOME</a>
                <a href="#founder" class="text-white no-underline hover:text-white hover:no-underline">OUR FOUNDER</a>
                <a href="#vision" class="text-white no-underline hover:text-white hover:no-underline">SHUKRANA’S
                    VISION</a>
                <a href="#mission" class="text-white no-underline hover:text-white hover:no-underline">MISSION</a>
                <a href="#ideology" class="text-white no-underline hover:text-white hover:no-underline">THE IDEOLOGY</a>
                <a href="#journey" class="text-white no-underline hover:text-white hover:no-underline">SHUKRANA
                    JOURNEY</a>
                <a href="#contact" class="text-white no-underline hover:text-white hover:no-underline">CONTACT US</a>
                <!-- Dropdown Menu -->

            </div>
            <!-- Menu button for mobile view -->
            <button id="menuBtn" class="mobile-menu-button">
                <span class="menu-bar"></span>
                <span class="menu-bar"></span>
                <span class="menu-bar"></span>
            </button>
            <!-- Menu items container -->
            <div class="flex items-center space-x-4 menu">
                <a href="#home" class="menu-item">HOME</a>
                <a href="#founder" class="menu-item">OUR FOUNDER</a>
                <a href="#vision" class="menu-item">SHUKRANA’S VISION</a>
                <!-- Add the rest of the links here -->
                <a href="#journey" class="menu-item">SHUKRANA JOURNEY</a>
                <a href="#contact" class="menu-item">CONTACT US</a>
            </div>
        </div>
    </header>


    <!-- Rest of the webpage content -->


    <main class="p-8">
        <div id="home" class="hero-section">
            <div class="slider" id="slider">
                <div class="slide">
                    <img src="https://via.placeholder.com/1200x500" alt="Placeholder Image 1">
                </div>
                <div class="slide">
                    <img src="https://via.placeholder.com/1200x500/ff7f7f" alt="Placeholder Image 2">
                </div>
                <div class="slide">
                    <img src="https://via.placeholder.com/1200x500/7f7fff" alt="Placeholder Image 3">
                </div>
            </div>
            <div class="quote">
                Smile And Say SHUKRANA, Your Life Is Better Than Millions
                <br>
                -Sachin Arora (Founder Of SHUKRANA)
            </div>
        </div>
        <div id="home" class="welcome-section">
            <h1>WELCOME TO SHUKRANA</h1>
            <p>The core of SHUKRANA is providing support, resources, and medical assistance to underprivileged
                individuals, especially children, who lack the means to access proper education and basic
                necessities.
                We strive to improve their quality of life and empower them to overcome their challenges.</p>
            <p>SHUKRANA: Bless More is an initiative to take this step to the next level. Now we are sharing this
                blessing with you and other helping hands. The aim of this booklet is to spread the message to all
                the
                fellow people to take a step forward in nurturing the underprivileged. Our belief is not to earn the
                numbers in currency but to take care and to take a step forward to help those in need.</p>
            <p>We are grateful that God made us a channel to support such people, and we pray that we can help them
                more. We aspire to have those smiles never fade away, and we wish them good luck. <em>RAB tera
                    SHUKRANA.</em> May we bless more.</p>
        </div>

        <div id="vision" style="background-color: #cda6ff;" class="vision-section">
            <div class="vision-content">
                <h2>VISION</h2>
                <p>To help for living in a good, healthy, and safe environment to those in society who are not able
                    to
                    attain this by themselves by offering a helping hand for all the things where they are lacking
                    and
                    uplifting their standard in society, either its moral, financial, or physical health, which may
                    work
                    like a bridge to connect with a normal life from a painful living and also will be a little
                    contribution to the mankind towards more humanity by following “Parhit Saras” and “Vasudhaiv
                    Kutumbkam” while adding some more values to this by spreading some more smile in different ways.
                </p>
            </div>
            <div class="vision-image">
                <img src="https://via.placeholder.com/500" alt="Vision Image">
            </div>
        </div>



        <div id="mission" class="mission-section">
            <div class="mission-image">
                <img src="https://via.placeholder.com/500" alt="Mission Image">
            </div>
            <div class="mission-content">
                <h2>MISSION</h2>
                <p>Our Mission to bring more awareness in society to work on brightening at the darker side of it
                    and to
                    built a new space to live by contributing our little efforts towards a common goal to make this
                    planet such beautiful where, there is no hunger left unfed, no wound left to be cure, no talent
                    left
                    to be skilled and no soul left to be healed, by adopting all such activities as per our
                    capabilities
                    which may help to attain this Nobel goal either sooner or longer by working on all areas
                    wherever is
                    required then either be it feeding or upskilling or enclothing or enriching or enhancing or
                    empowering or energizing or inspiring or providing all resources to let it be as we believe that
                    a
                    healthy society is the route of a strong nation it will also be a small contribution to building
                    a
                    strong and new Bharat (Nation).</p>
            </div>
        </div>

        <div class="slider-container">
            <div class="slider">
                <div class="slide"><img src="https://via.placeholder.com/160x90" alt="Image 1"></div>
                <div class="slide"><img src="https://via.placeholder.com/160x90" alt="Image 2"></div>
                <div class="slide"><img src="https://via.placeholder.com/160x90" alt="Image 3"></div>
                <div class="slide"><img src="https://via.placeholder.com/160x90" alt="Image 4"></div>
                <div class="slide"><img src="https://via.placeholder.com/160x90" alt="Image 5"></div>
                <!-- Add more slides if necessary -->
            </div>
            <button class="prev">&#10094;</button>
            <button class="next">&#10095;</button>
        </div>


        <div id="ideology" style="background-color: #cda6ff;" class="ideology-section">
            <h2 class="ideology-heading">Our Ideology: How It Begins</h2>
            <p>I used to go to temple oftenly in Noida from over a decade. One evening I went there with my wife to
                perform prayers and about to set back to my way and then I saw one kid, coming towards me, I asked
                his
                name and took him with me to a nearby shop. there we sat and shared some meals and balloons. He went
                back with a warm heart that give me a vision to nurture that smile. The very next week when I
                visited
                there, I saw some more children at the same temple. then I got some extra treat meals for those
                children
                and we sat there and talked. I remember, when I used to go there, there were almost negligible
                people
                who used to come at that temple to pray and I like the peace that place holds. My father used to
                believe
                that we should always pay SHUKRANA to god for what we have and we should help others if god has
                chosen
                our us to do so. And thats how it started and the head counts of those children increases. Now, its
                almost more than 50+ children with those warm smile, just like the very first, i saw that day. My
                father
                used to cherish young souls and always blessed them. I kept his legacy forward. Its just that, now
                that
                legacy comes under the name of SHUKRANA.</p>
        </div>


        <div id="journey" class="journey-section">
            <h2 class="journey-heading">The Journey Towards SHUKRANA</h2>
            <p>
                During the initial days when I started paying my regular visit to temples dedicatedly for those
                young
                hearts, some of the people who crossed over with me, shared their greets and gestures. Some of them
                even
                told me that, its an inspiration to them and how they likely started doing the same with their local
                children, how they oftenly try to spread smiles to such young faces. Some of my colleagues and
                teammates
                showed their interest too. That thing motivate me to keep this more often because I believed if
                people
                feel heart-warmth with this and cherish one more children, see how many children could be helped and
                feel blessed. this thing kept me going and since then, there was not even a single saturday that
                left
                uncherished those smiles. There are some days of the year when I could be out of city or country,
                even
                then as well my househelpers and driver is sent with treat meals to that temple because now i know
                that
                those children wait for me every saturday and i dont want to left them unattended. BY GOD GRACE, HE
                GAVE
                ME THE CHANCE TO KEEP THINGS GOING AND HENCE WE STARTED SHUKRANA. Shukrana is a name under which not
                only my temple visit kept going, but it provides these children a proper place to study basic
                education
                and computer. There are some fresh washrooms has been built separately different for girls and boys,
                which was once a major issue for them. Also, we provide them with necessity and stationaries and
                meals.
                We try over best to help underprivileged people, by offering assistance for medical treatments and
                healthcare services for those who cannot afford them. I try my best to keep it going and take it to
                another level for more such people.<span class="highlight">MAY GOD BLESS ALL OF US TO SPREAD
                    HAPPINESS
                    AND COMFORT TO THOSE WHO COULDN'T
                    AFFORD.</span></p>
        </div>

        <div id="founder" class="founders-section">
            <div class="founder">
                <img src="https://via.placeholder.com/150" alt="Founder Image" class="founder-image">
                <h3 class="founder-name">Founder's Name</h3>
                <p class="founder-title">Founder</p>
            </div>
            <div class="co-founder">
                <img src="https://via.placeholder.com/150" alt="Co-Founder Image" class="founder-image">
                <h3 class="founder-name">Co-Founder's Name</h3>
                <p class="founder-title">Co-Founder</p>
            </div>
        </div>

        <div class="video-gallery">
            <div class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/video1" frameborder="0"
                    allowfullscreen></iframe>
            </div>
            <div class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/video2" frameborder="0"
                    allowfullscreen></iframe>
            </div>
            <!-- Add more videos as needed -->
            <div class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/video1" frameborder="0"
                    allowfullscreen></iframe>
            </div>

        </div>

        <div class="collage-section">
            <div class="image-container">
                <img src="https://via.placeholder.com/200" alt="Image 1">
            </div>
            <div class="image-container">
                <img src="https://via.placeholder.com/200" alt="Image 1">
            </div>
            <div class="image-container">
                <img src="https://via.placeholder.com/200" alt="Image 1">
            </div>
            <div class="image-container">
                <img src="https://via.placeholder.com/200" alt="Image 1">
            </div>
            <div class="image-container">
                <img src="https://via.placeholder.com/200" alt="Image 1">
            </div>
            <div class="image-container">
                <img src="https://via.placeholder.com/200" alt="Image 1">
            </div>
            <div class="image-container">
                <img src="https://via.placeholder.com/200" alt="Image 1">
            </div>
            <div class="image-container">
                <img src="https://via.placeholder.com/200" alt="Image 1">
            </div>
            <div class="image-container">
                <img src="https://via.placeholder.com/200" alt="Image 1">
            </div>
            <div class="image-container">
                <img src="https://via.placeholder.com/200" alt="Image 1">
            </div>
            <div class="image-container">
                <img src="https://via.placeholder.com/200" alt="Image 1">
            </div>
            <div class="image-container">
                <img src="https://via.placeholder.com/200" alt="Image 1">
            </div>
            <div class="image-container">
                <img src="https://via.placeholder.com/200" alt="Image 1">
            </div>
            <div class="image-container">
                <img src="https://via.placeholder.com/200" alt="Image 1">
            </div>
            <!-- Repeat this div for each additional image -->
        </div>



    </main>

    <footer style="background-color: #8e43f0;" class=" text-white pt-8 pb-6">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex flex-wrap justify-between">
                <div class="w-full sm:w-1/3 mb-6 sm:mb-0">
                    <h3 class="text-lg font-bold mb-2">SHUKRANA </h3>
                    <address class="not-italic">
                        Floor no-2, Tapasya Corp Heights, <br>
                        Subarea, Sector 126, <br>
                        Noida, Uttar Pradesh 201303
                    </address>
                    <div class="mt-4">
                        <!-- Social Links -->
                    </div>
                </div>

                <div class="w-full sm:w-1/3 mb-6 sm:mb-0">
                    <h3 class="text-lg font-bold mb-2">Useful Links</h3>
                    <ul class="list-none footer-links">
                        <li class="mb-2"><a href="#" class="text-white">Home</a></li>
                        <li class="mb-2"><a href="#" class="text-white">Portfolio</a></li>
                        <li class="mb-2"><a href="#" class="text-white">About Us</a></li>
                        <li class="mb-2"><a href="#" class="text-white">Expert Team</a></li>
                        <li class="mb-2"><a href="#" class="text-white">Latest News</a></li>
                    </ul>
                </div>

                <div class="w-full sm:w-1/3 mb-6 sm:mb-0">
                    <h3 class="text-lg font-bold mb-2">Subscribe</h3>
                    <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                    <div class="mt-4">
                        <input type="email" placeholder="Email Address" class="p-2 w-2/3">
                        <button class="bg-yellow-600 text-white p-2 w-1/3">Click</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <p>&copy; 2024 SHUKRANA. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
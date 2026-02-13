<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Valentine's Date</title>
    <style>
        body {
            background-color: #fff0f5;
            font-family: 'Georgia', serif; /* More romantic font */
            margin: 0;
            padding-bottom: 50px;
            overflow-x: hidden;
        }

        /* Header Section */
        .header {
            height: 60vh;
            background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('https://images.unsplash.com/photo-1518199266791-5375a83190b7?q=80&w=2000');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }

        .header h1 {
            font-size: 2.5rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        /* Timeline Container */
        .timeline {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Individual Plan Item */
        .plan-item {
            display: flex;
            flex-direction: column; /* Stack on mobile */
            background: white;
            margin-bottom: 40px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            
            /* Initial state for animation */
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.8s ease-out;
        }

        /* This class is added by JS when scrolled into view */
        .plan-item.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .plan-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .plan-text {
            padding: 25px;
            text-align: center;
        }

        .plan-text h2 {
            color: #d81b60;
            margin-top: 0;
        }

        .plan-text p {
            color: #555;
            line-height: 1.6;
        }

        /* Desktop Adjustments (optional, if viewed on PC) */
        @media (min-width: 768px) {
            .plan-item {
                flex-direction: row;
                align-items: center;
            }
            .plan-item:nth-child(even) {
                flex-direction: row-reverse; /* Zig-zag layout */
            }
            .plan-img {
                width: 50%;
                height: 300px;
            }
            .plan-text {
                width: 50%;
            }
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>Walk Trip tayo x Binondo Date 💖</h1>
    </div>

    <div class="timeline">
        
        <div class="plan-item">
            <img src="https://upload.wikimedia.org/wikipedia/en/2/26/SM_City_Manila_%28A._Villegas%2C_Manila%3B_11-23-2019%29.jpg" class="plan-img" alt="SM City Manila">
            <div class="plan-text">
                <h2>SM City Manila</h2>
                <p>Start tayo dito sa SM City Manila. Kasi lalakarin natin from intra to binondo.</p>
            </div>
        </div>

        <div class="plan-item">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Rizal_Monument_at_Rizal_Park.jpg/1280px-Rizal_Monument_at_Rizal_Park.jpg" class="plan-img" alt="Luneta Park">
            <div class="plan-text">
                <h2>Luneta Park</h2>
                <p>Pwede tayo mag luneta park orrr...</p>
            </div>
        </div>

        <div class="plan-item">
            <img src="{{asset('sm-luneta.png')}}" class="plan-img" alt="SM City Manila - Luneta Park Google Maps">
            <div class="plan-text">
                <h2>SM City Manila - Luneta Park</h2>
                {{-- <p>Pwede rin tayo dito sa Arroceros Park na known as "Manila's Last Lung" kasi di pa tayo dito napupunta</p> --}}
            </div>
        </div>
        
        <div class="plan-item">
            <img src="https://images.squarespace-cdn.com/content/v1/6284ae28ba19530f06620d18/b2bdef11-b2fb-41ff-a1a8-a805955cc81e/sian-labay-Bp1x6U4Z7dU-unsplash.jpg" class="plan-img" alt="Arroceros Park">
            <div class="plan-text">
                <h2>Arroceros Park</h2>
                <p>Pwede rin tayo dito sa Arroceros Park na known as "Manila's Last Lung" kasi di pa tayo dito napupunta</p>
            </div>
        </div>

        <div class="plan-item">
            <img src="{{asset('sm-arroceros.png')}}" class="plan-img" alt="SM City Manila - Arroceros Park Google Maps">
            <div class="plan-text">
                <h2>SM City Manila - Arroceros Park</h2>
                {{-- <p>Pwede rin tayo dito sa Arroceros Park na known as "Manila's Last Lung" kasi di pa tayo dito napupunta</p> --}}
            </div>
        </div>

        <div class="plan-item">
            <img src="https://zimminaroundtheworld.com/wp-content/uploads/2025/08/DSC_5200.jpg" class="plan-img" alt="Intramuros">
            <div class="plan-text">
                <h2>Intramuros</h2>
                <p>After that tawid lang tayo papuntang Intramuros kung saan man tayo galing kase walking distance lang lahat</p>
            </div>
        </div>

        <div class="plan-item">
            <img src="https://img1.wsimg.com/isteam/ip/69028723-7e61-4e1e-b2ce-d7fa90a3be54/IMG20230430112627.jpg/:/rs=w:1280" class="plan-img" alt="Cafe">
            <div class="plan-text">
                <h2>Cafe Shops!</h2>
                <p>From here madami na tayong mapupuntahang cafes</p>
            </div>
        </div>

        <div class="plan-item">
            <img src="https://manilacathedral.com.ph/img/full-slider/full-slide2.jpg" class="plan-img" alt="Manila Cathedral">
            <div class="plan-text">
                <h2>Manila Cathedral</h2>
                <p>We can visit churches din and other historical sites</p>
            </div>
        </div>
        
        <div class="plan-item">
            <img src="https://juancarlo.ph/wp-content/uploads/2024/04/Rectangle-111-min.jpg" class="plan-img" alt="San Agustin Church">
            <div class="plan-text">
                <h2>San Agustin Church</h2>
                <p>We've been here before pero g pa rin</p>
            </div>
        </div>
        
        <div class="plan-item">
            <img src="{{asset('san agustin-manila cathedral.png')}}" class="plan-img" alt="San Agustin Church - Manila Cathedral Google Maps">
            <div class="plan-text">
                <h2>San Agustin Church - Manila Cathedral</h2>
            </div>
        </div>
        
        <div class="plan-item">
            <img src="https://preview.redd.it/ux5a48fk06541.jpg?auto=webp&s=a9e52befee94d9538d23f9939e4cca8e24029b9b" class="plan-img" alt="Jones Bridge">
            <div class="plan-text">
                <h2>Jones Bridge</h2>
                <p>Eto na yon!! Medyo madilim na siguro once makadating tayo dito so istetik na sya. Kabila nito is foodtrip-an na sa Binondo!</p>
            </div>
        </div>
        
        <div class="plan-item">
            <img src="{{asset('manila cathedral-jones bridge.png')}}" class="plan-img" alt="Manila Cathedral - Jones Bridge Google Maps">
            <div class="plan-text">
                <h2>Manila Cathedral - Jones Bridge</h2>
            </div>
        </div>
        
        <div class="plan-item">
            <img src="https://www.theurbanroamer.com/wp-content/uploads/2015/07/19355763722_4d3a8d3778_b1.jpg" class="plan-img" alt="Chinatown Arch">
            <div class="plan-text">
                <h2>Binondo Chinatown Arch</h2>
                <p>Pagtawid natin sa Jones Bridge, nasa Binondo na tayoooo :></p>
            </div>
        </div>

        <div class="plan-item">
            <img src="https://cdn.sanity.io/images/ul272611/production/cf9c8a059c49536b55a2a3f07aa8e892629d7e51-2170x1684.jpg?rect=243,0,1684,1684&w=600&h=600&fit=max&auto=format" class="plan-img" alt="Chinatown Arch">
            <div class="plan-text">
                <h2>Ongpin Street</h2>
                <p>Pwede tayo pumunta dito sa Ongpin Street kung saan di umano (ayon sa tiktok) madaming food trip</p>
            </div>
        </div>
        
        <div class="plan-item">
            <img src="{{asset('chinatown arch-ongpin.png')}}" class="plan-img" alt="Chinatown Arch - Ongpin Street Google Maps">
            <div class="plan-text">
                <h2>Chinatown Arch - Ongpin Street</h2>
            </div>
        </div>

        <div class="plan-item">
            <img src="https://images.squarespace-cdn.com/content/v1/5fa1522044bdda192713063c/7d441830-6e51-4414-b4b7-fbf432686fd6/Binondo%2C+Manila+Chinese+New+Year" class="plan-img" alt="Binondo">
            <div class="plan-text">
                <h2>Binondo</h2>
                <p>Tapos from here di ko na alam hehe ikaw na lang mag gala sakin and mag suggest kasi di ko na alam tong lugar na to :></p>
            </div>
        </div>
        
    </div>

    <script>
        // Intersection Observer for Scroll Animation
        const observerOptions = {
            threshold: 0.2 // Trigger when 20% of the item is visible
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    // Optional: Stop observing once it's visible so it doesn't fade out again
                    observer.unobserve(entry.target); 
                }
            });
        }, observerOptions);

        // Select all items to animate
        const items = document.querySelectorAll('.plan-item');
        items.forEach(item => {
            observer.observe(item);
        });
    </script>
</body>
</html>
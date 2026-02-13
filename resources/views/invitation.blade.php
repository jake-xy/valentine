<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For You ❤️</title>
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
    <style>
        body {
            background-color: #fce4ec; /* Light Pink */
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden; /* Prevent scrolling on this page */
        }
        
        .card {
            background: white;
            padding: 2rem;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            text-align: center;
            width: 90%;
            max-width: 400px;
            position: relative;
            transition: all 0.3s ease;
            min-height: 300px; /* Ensure space for button moving */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        h1 {
            color: #d81b60;
            margin-bottom: 2rem;
            font-size: 1.8rem;
        }

        .btn-group {
            margin-top: 1rem;
            display: flex;
            gap: 20px;
            justify-content: center;
        }

        button {
            padding: 12px 24px;
            border: none;
            border-radius: 50px;
            font-size: 1rem;
            cursor: pointer;
            transition: transform 0.2s;
        }

        #yes-btn {
            background-color: #d81b60;
            color: white;
            font-weight: bold;
        }

        #no-btn {
            background-color: #e0e0e0;
            color: #333;
            position: relative; /* Starts relative, becomes absolute on click */
            transition: all 0.5s ease;
        }

        #subtext {
            margin-top: 20px;
            font-size: 0.9rem;
            color: #888;
            height: 20px; /* Prevent layout jump */
        }

        /* Mobile Optimization */
        @media (max-width: 600px) {
            .card {
                padding: 1.5rem;
            }
            h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>

    <div class="card" id="main-card">
        <h1>Will you be my Valentine? 🌹</h1>
        
        <div class="btn-group">
            <button id="yes-btn" onclick="handleYes()">Yes</button>
            <button id="no-btn" onclick="handleNo()">No</button>
        </div>

        <p id="subtext"></p>
    </div>

    <script>
        const noBtn = document.getElementById('no-btn');
        const subtext = document.getElementById('subtext');
        const card = document.getElementById('main-card');
        
        const texts = [
            "Are you sure?", 
            "Really sure?", 
            "Think again!", 
            "Last chance!", 
            "You might regret this!", 
            "Are you absolutely surely 99.999% certain?",
            "BABI :<",
            "Cold naman! Ice Queen yarn?",
            "Sige na fleece",
            "Is that your final answer?",
            "babyyyy ;(", 
            "Loveee :<"
        ];
        
        let clickCount = 0;
        let currentFontSize = 16;

        function handleNo() {
            clickCount++;
            
            // 1. Change text
            subtext.innerHTML = texts[clickCount % texts.length];
            subtext.style.color = "red";
            
            // 2. Increase Font Size
            if (clickCount < texts.length)
            currentFontSize += 4; // Increase by 4px per click
            subtext.style.fontSize = currentFontSize + "px";

            // 3. Move Button Logic
            
            // If it's the first click, we need to switch from relative to absolute
            if (clickCount === 1) {
                // Get current position before switching to absolute to prevent jumping
                const rect = noBtn.getBoundingClientRect();
                const cardRect = card.getBoundingClientRect();
                
                // Switch to absolute
                noBtn.style.position = 'absolute';
                // Set initial position to where it currently is relative to card
                noBtn.style.left = (rect.left - cardRect.left) + 'px';
                noBtn.style.top = (rect.top - cardRect.top) + 'px';
            }

            // Small delay to allow the 'absolute' switch to render before moving
            setTimeout(() => {
                const cardRect = card.getBoundingClientRect();
                const btnRect = noBtn.getBoundingClientRect();

                // Define boundaries (stay within card with padding)
                const padding = 30;
                const maxX = cardRect.width - btnRect.width - padding;
                const maxY = cardRect.height - btnRect.height - padding;

                const randomX = Math.max(padding, Math.random() * maxX);
                const randomY = Math.max(padding, Math.random() * maxY);

                noBtn.style.left = randomX + 'px';
                noBtn.style.top = randomY + 'px';
            }, 10);
        }

        function handleYes() {
            subtext.style.fontSize = "24px";
            subtext.innerHTML = "Yay! Love you so much! ❤️";
            subtext.style.color = "#d81b60";
            noBtn.style.display = "none";
            
            // Confetti Effect
            confetti({
                particleCount: 150,
                spread: 70,
                origin: { y: 0.6 }
            });

            // Redirect after 2 seconds
            setTimeout(() => {
                window.location.href = "{{ route('date.plan') }}";
            }, 2000);
        }
    </script>
</body>
</html>
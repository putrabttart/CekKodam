<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Kodam</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");

        body {
            font-family: Arial, sans-serif;
            background: url('https://wallpapercave.com/wp/wp6674590.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            backdrop-filter: blur(10px) saturate(150%);
            -webkit-backdrop-filter: blur(10px) saturate(150%);
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
            color: #2c3e50;
            max-width: 500px;
            width: 100%;
        }

        h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .form-group label {
            font-size: 1.2rem;
            color: #2c3e50;
        }

        .btn-primary {
            background-color: #3498db;
            border: none;
        }

        .btn-primary:hover {
            background-color: #2980b9;
        }

        #result {
            font-size: 1.5rem;
            color: #ff0000;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            padding: 10px;
            margin-top: 10px;
        }

        footer {
            margin-top: 30px;
            text-align: center;
            font-size: 1rem;
            color: #2c3e50;
        }

        .footer i {
            color: #e74c3c;
        }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<div class="container mt-5">
    <h4>Cek Kodam TikTok <span class="font-weight-bold">@hallomasarya</span></h4>
    <form id="myForm">
        <div class="form-group">
            <label for="inputText">Masukkan nama:</label>
            <input type="text" class="form-control" id="inputText" placeholder="Masukkan nama di sini">
        </div>
        <button type="submit" class="btn btn-primary">Cek</button>
    </form>
    <div class="mt-3">
        <h4>Hasil:</h4>
        <p id="result" class="border p-3 font-weight-bold"></p>
    </div>

    <footer id="footer" class="footer">
        <div class="copyright">
            Made with Love <i class="bi bi-heart-fill text-danger"></i> by <strong><span>Arya Dwinata</span></strong>
        </div>
    </footer>
</div>

<!-- Bootstrap JS and dependencies (optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Custom Script -->
<script>
    document.getElementById('myForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah form dari submit default

        // Array kata-kata acak
        const words = [
            "Kodam Jin Bolot",
            "Kodam Jin Kocak",
            "Kodam Jin Mager",
            "Kodam Tuyul Tajir",
            "Kodam Pocong Kocak",
            "Kodam Arwah Opa-Oma",
            "Kodam Genderuwo Ganteng",
            "Kodam Harimau Garang",
            "Kodam Naga Unyu",
            "Kodam Burung Gagak Narsis",
            "Kodam Kunti Cantik",
            "Kodam Kuntilanak Ceria",
            "Kodam Suster Ngesot",
            "Kodam Wewe Gombel Lucu",
            "Kodam Leak Ganteng",
            "Kodam Sundel Bolong Ceria",
            "Kodam Pocong Joyo",
            "Kodam Tuyul Rock n Roll",
            "Kodam Kuntilanak Jomblo",
            "Kodam Genderuwo Ganteng Gaul",
            "Kodam Harimau Muda",
            "Kodam Naga Keprok",
            "Kodam Burung Gagak Terbang Rendah",
            "Kodam Kuntilanak Modis",
            "Kodam Suster Cantik",
            "Kodam Wewe Gombel Kece",
            "Kodam Leak Hipster",
            "Kodam Sundel Bolong Ramah",
            "Kodam Pocong Gokil",
            "Kodam Tuyul Gemesin",
            "Kodam Kuntilanak Kawaii",
            "Kodam Genderuwo Asyik",
            "Kodam Harimau Baper",
            "Kodam Naga Santuy",
            "Kodam Burung Gagak Kesepian",
            "Kodam Kuntilanak Trendy",
            "Kodam Suster Gaul",
            "Kodam Wewe Gombel Manis",
            "Kodam Leak Fashionable",
            "Kodam Sundel Bolong Modis",
            "Kodam Pocong Terbang",
            "Kodam Tuyul Bahagia",
            "Kodam Kuntilanak Cerewet",
            "Kodam Genderuwo Mullet",
            "Kodam Harimau Gagah",
            "Kodam Naga Bongar",
            "Kodam Burung Gagak Modern",
            "Kodam Kuntilanak Kasual",
            "Kodam Suster Jaim",
            "Kodam Wewe Gombel Stylish",
            "Kodam Leak Suka Selfie",
            "Kodam Sundel Bolong Sopan",
            "Kodam Pocong Seru",
            "Kodam Tuyul Lucu",
            "Kodam Kuntilanak Modis",
            "Kodam Genderuwo Santai",
            "Kodam Harimau Mullet",
            "Kodam Naga Kece",
            "Kodam Burung Gagak Misterius",
            "Kodam Kuntilanak Modern",
            "Kodam Suster Modis",
            "Kodam Wewe Gombel Elegan",
            "Kodam Leak Gaya",
            "Kodam Sundel Bolong Asik",
            "Kodam Pocong Lucu",
            "Kodam Tuyul Menggemaskan",
            "Kodam Kuntilanak Trendsetter",
            "Kodam Genderuwo Modern",
            "Kodam Harimau Kece",
            "Kodam Naga Modis",
            "Kodam Burung Gagak Terbang Tinggi",
            "Kodam Kuntilanak Fashionista",
            "Kodam Suster Kece",
            "Kodam Wewe Gombel Chic",
            "Kodam Leak Trendi",
            "Kodam Sundel Bolong Fashion",
            "Kodam Pocong Mullet",
            "Kodam Tuyul Kawaii",
            "Kodam Kuntilanak Stylish",
            "Kodam Genderuwo Ciamik",
            "Kodam Harimau Stylish",
            "Kodam Naga Gaya",
            "Kodam Burung Gagak Trendy",
            "Kodam Kuntilanak Modern",
            "Kodam Suster Kece",
            "Kodam Wewe Gombel Hipster",
            "Kodam Leak Elegan",
            "Kodam Sundel Bolong Anggun",
            "Kodam Pocong Kasual",
            "Kodam Tuyul Berkelas",
            "Kodam Kuntilanak Glamor",
            "Kodam Genderuwo Tren",
            "Kodam Harimau Modis",
            "Kodam Naga Mullet",
            "Kodam Burung Gagak Ceria",
            "Kodam Kuntilanak Chic",
            "Kodam Suster Trendi",
            "Kodam Wewe Gombel Gaya",
            "Kodam Leak Stylish",
            "Kodam Sundel Bolong Mullet",
            "Kodam Pocong Modis"
        ];

        var inputText = document.getElementById('inputText').value;

        if (inputText.trim() === "") {
            document.getElementById('result').innerText = "Masukkan nama terlebih dahulu!";
            return;
        }

        // Memilih kata acak
        var randomIndex = Math.floor(Math.random() * words.length);
        var randomWord = words[randomIndex];

        // Menampilkan hasil
        var resultText = inputText + " " + randomWord;
        document.getElementById('result').innerText = resultText;

        // Membaca hasil dengan suara wanita (cewek) dalam bahasa Indonesia
        var utterance = new SpeechSynthesisUtterance(resultText);

        // Cari suara wanita dalam bahasa Indonesia di daftar suara yang tersedia
        var voices = window.speechSynthesis.getVoices();
        var femaleIndonesianVoice = voices.find(function(voice) {
            return voice.lang === 'id-ID' && voice.gender === 'female';
        });

        // Set suara menjadi suara wanita dalam bahasa Indonesia jika tersedia, jika tidak, gunakan suara default
        utterance.voice = femaleIndonesianVoice || voices[0]; // Jika tidak ada suara wanita bahasa Indonesia, gunakan suara pertama dalam daftar

        window.speechSynthesis.speak(utterance);

        // Mengosongkan input form setelah submit
        document.getElementById('inputText').value = "";
    });

    // Event saat suara tersedia (biasanya setelah beberapa saat halaman dimuat)
    speechSynthesis.onvoiceschanged = function() {
        var voices = speechSynthesis.getVoices();
        console.log(voices); // Cek konsol untuk melihat daftar suara yang tersedia
    };
</script>
</body>
</html>

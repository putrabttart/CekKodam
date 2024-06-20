<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Kodam</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Cek Kodam</h2>
        <form id="myForm">
            <div class="form-group">
                <label for="inputText">Masukkan nama:</label>
                <input type="text" class="form-control" id="inputText" placeholder="Masukkan nama di sini">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div class="mt-3">
            <h4>Hasil:</h4>
            <p id="result" class="border p-3"></p>
        </div>
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
                "kodam ikan lele",
                "kodam badut lucu",
                "kodam lintah darat",
                "kodam kucing kawin",
                "kodam pintu doraemon",
                "kodam burung hantu",
                "kodam kelinci loncat",
                "kodam serigala melolong",
                "kodam tikus mencuri",
                "kodam gajah bermain",
                "kodam singa berkuasa",
                "kodam kura-kura",
                "kodam bebek berenang",
                "kodam ayam berkokok",
                "kodam sapi makan",
                "kodam kuda berlari",
                "kodam domba berkumpul",
                "kodam rusa melompat",
                "kodam buaya berjemur",
                "kodam burung pipit",
                "kodam panda makan",
                "kodam elang terbang",
                "kodam paus berenang",
                "kodam anjing menjaga",
                "kodam kucing tidur",
                "kodam kuda nil",
                "kodam harimau mengintai",
                "kodam kupu-kupu",
                "kodam belalang melompat",
                "kodam laba-laba",
                "kodam ikan paus",
                "kodam ular melingkar",
                "kodam kera bergelantungan",
                "kodam kucing liar",
                "kodam babi hutan",
                "kodam beaver membangun",
                "kodam kanguru melompat",
                "kodam penguin berjalan",
                "kodam badak berkubang",
                "kodam serangga mengerumuni",
                "kodam ikan mas",
                "kodam kucing anggora",
                "kodam tupai mengumpulkan",
                "kodam kelelawar terbang",
                "kodam burung beo",
                "kodam ikan hiu",
                "kodam lebah mengumpulkan",
                "kodam burung camar",
                "kodam iguana berjemur",
                "kodam gajah merobohkan",
                "kodam harimau berlari",
                "kodam kura berenang",
                "kodam ikan berenang",
                "kodam ular berbisa",
                "kodam kuda galak",
                "kodam burung berkicau",
                "kodam bebek jalan",
                "kodam rusa lari",
                "kodam gajah tidur",
                "kodam badak makan",
                "kodam panda tidur",
                "kodam kucing makan",
                "kodam anjing bermain",
                "kodam burung terbang",
                "kodam bebek mandi",
                "kodam kuda minum",
                "kodam ikan tidur",
                "kodam kelinci makan",
                "kodam ular makan",
                "kodam kucing manis",
                "kodam sapi jalan",
                "kodam ayam lari",
                "kodam bebek lari",
                "kodam ikan jalan",
                "kodam ayam tidur",
                "kodam ayam makan",
                "kodam sapi tidur",
                "kodam sapi makan",
                "kodam bebek tidur",
                "kodam burung makan",
                "kodam ayam bermain",
                "kodam ayam berenang",
                "kodam sapi berenang",
                "kodam ayam berjalan",
                "kodam bebek bermain",
                "kodam sapi bermain",
                "kodam ayam minum",
                "kodam kucing jalan",
                "kodam burung makan",
                "kodam anjing jalan",
                "kodam ayam terbang",
                "kodam kuda makan",
                "kodam ayam terbang",
                "kodam bebek terbang",
                "kodam ayam makan",
                "kodam sapi makan"
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
            document.getElementById('result').innerText = inputText + " " + randomWord;
        });
    </script>
</body>
</html>

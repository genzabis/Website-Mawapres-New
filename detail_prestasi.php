<?php
require_once 'includes/config.php'; // Sesuaikan path config database Anda

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$stmt = $pdo->prepare("SELECT * FROM featured_achievements WHERE id = ?");
$stmt->execute([$id]);
$data = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$data) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($data['title']) ?> - Detail Prestasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .footer-gradient {
            background: linear-gradient(135deg, #0c3d5c 0%, #1e5a8e 100%);
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <nav class="bg-white shadow-sm py-4">
        <div class="container mx-auto px-4">
            <a href="index.php" class="flex items-center text-gray-600 hover:text-blue-600 transition">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                Kembali ke Beranda
            </a>
        </div>
    </nav>

    <main class="container mx-auto px-4 py-8 md:py-12 max-w-4xl">
        <div class="rounded-2xl overflow-hidden shadow-lg mb-8 bg-gray-200 aspect-video relative">
            <img src="<?= htmlspecialchars($data['image_path']) ?>" alt="<?= htmlspecialchars($data['title']) ?>" class="w-full h-full object-cover">
            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-6 md:p-10">
                <h1 class="text-3xl md:text-4xl font-bold text-white mb-2"><?= htmlspecialchars($data['title']) ?></h1>
                <p class="text-gray-200 text-sm"><?= date('d F Y', strtotime($data['created_at'])) ?></p>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-md p-6 md:p-10">
            <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                <?= nl2br(htmlspecialchars($data['content_detail'])) ?>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>

</body>
</html>
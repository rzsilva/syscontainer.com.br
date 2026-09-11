<?php
$pageTitle = "Blog SYSContainer — Gestão de locadoras de containers, banheiros químicos e andaimes";
$pageDescription = "Artigos práticos sobre gestão, financeiro, precificação, manutenção e segurança para locadoras de containers, banheiros químicos e andaimes.";

$postsFile = __DIR__ . '/data/posts.json';
$posts = json_decode(file_get_contents($postsFile), true);
if (!is_array($posts)) {
    $posts = array();
}

include __DIR__ . '/partials/header.php';
?>

<header class="sc-blog-hero">
    <div class="container">
        <span class="sc-post-tag">Blog</span>
        <h1>Conteúdo prático para locadoras de containers, banheiros químicos e andaimes</h1>
        <p class="sc-lead">Gestão, financeiro, precificação, manutenção e segurança — tudo o que você precisa saber para profissionalizar sua locadora.</p>
    </div>
</header>

<section class="sc-blog-grid">
    <div class="container">
        <div class="row sc-blog-cards">
            <?php foreach ($posts as $post): ?>
            <div class="col-md-4">
                <a class="sc-blog-card" href="<?php echo htmlspecialchars($post['slug']); ?>">
                    <span class="sc-blog-card-tag"><?php echo htmlspecialchars($post['tag']); ?></span>
                    <h3><?php echo htmlspecialchars($post['title']); ?></h3>
                    <p><?php echo htmlspecialchars($post['description']); ?></p>
                    <span class="sc-blog-card-cta">Ler artigo <i class="fa fa-arrow-right"></i></span>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>

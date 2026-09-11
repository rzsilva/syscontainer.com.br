<?php
$postsFile = dirname(__FILE__) . '/data/posts.json';
$posts = json_decode(file_get_contents($postsFile), true);
if (!is_array($posts)) {
    $posts = array();
}

$slug = isset($_GET['slug']) ? $_GET['slug'] : '';
$post = null;
foreach ($posts as $p) {
    if ($p['slug'] === $slug) {
        $post = $p;
        break;
    }
}

if (!$post) {
    header('HTTP/1.1 404 Not Found');
    $pageTitle = "Artigo não encontrado | Blog SYSContainer";
    $pageDescription = "O artigo que você procura não foi encontrado.";
    include dirname(__FILE__) . '/partials/header.php';
    ?>
    <header class="sc-post-hero">
        <div class="container">
            <h1>Artigo não encontrado</h1>
            <p class="sc-post-meta"><a href="index.php">&larr; Voltar para o blog</a></p>
        </div>
    </header>
    <?php
    include dirname(__FILE__) . '/partials/footer.php';
    exit;
}

$pageTitle = $post['title'] . " | Blog SYSContainer";
$pageDescription = $post['description'];
include dirname(__FILE__) . '/partials/header.php';
?>

<header class="sc-post-hero">
    <div class="container">
        <span class="sc-post-tag"><?php echo htmlspecialchars($post['tag']); ?></span>
        <h1><?php echo htmlspecialchars($post['title']); ?></h1>
        <p class="sc-post-meta">ADALINE Sistemas e Tecnologia</p>
    </div>
</header>

<article class="sc-post-body">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 sc-post-content">
                <?php echo $post['content_html']; ?>
            </div>
        </div>
    </div>
</article>

<?php include dirname(__FILE__) . '/partials/footer.php'; ?>

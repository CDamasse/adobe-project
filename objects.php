<?php
include 'header.php'
?>
    <!doctype html>
    <html>
    <head>
        <title>Mon premier rendu 3D avec Three.js</title>
        <meta charset="utf-8">
        <link  href="scss/style.css" rel="stylesheet"/>
        <style>
            body { margin: 0;}
            #canvas { width: 30px; height: 30px;}
        </style>
    </head>
<body>
<?php
include 'navbar.php';
?>

    <canvas id="canvas"></canvas>


    <script>
        var name = "<?php echo $_GET['name']; ?>";
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/87/three.min.js"></script>
    <script src="/js/OrbitControls.js"></script>
    <script src="/js/OBJLoader.js"></script>
    <script src="/js/MTTLoader.js"></script>
    <script src="/js/script.js"></script>

<?php
include 'footer.php';
?>
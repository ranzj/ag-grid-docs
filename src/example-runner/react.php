<?php
include 'utils.php';
$example = getExampleInfo('react');
?>
<html>
<head>
    <title>ag-Grid React Example</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<?php if (isset($_GET['fontawesome'])) { ?>
    <!-- font awesome -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<?php } ?>

<?php if (!$example['preview']) { ?>
    <style> html, body { margin: 0; padding: 0; } </style>
<?php } ?>
<?php renderStyles($example['styles']); ?>
</head>
<body>
    <div id="root">Loading ...</div>
    
    <script>
        var appLocation = '<?= $example['appLocation'] ?>';
        var boilerplatePath = '<?= $example['boilerplatePath'] ?>';
        var systemJsMap = <?= json_encode($systemJsMap) ?>
    </script>

    <script src="https://unpkg.com/systemjs@0.19.39/dist/system.src.js"></script>
    <script src="<?=$example['boilerplatePath']?>systemjs.config.js"></script>

    <script>
      System.import('<?=$example['appLocation']?>index.jsx').catch( function(err) {
        console.error(err);
      })
    </script>
</body>
</html>
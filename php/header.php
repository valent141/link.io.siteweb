<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>Link.IO</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,400italic,700' rel='stylesheet' type='text/css'>

    <?php if (isset($css)) foreach ($css as $cssFile): ?>
        <link rel="stylesheet" href="<?php echo "css/$cssFile.css"; ?>">
    <?php endforeach;?>

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/site.js"></script>

    <?php if (isset($js))
        foreach ($js as $jsFile):?>
            <script type="text/javascript" src="<?php echo "js/$jsFile.js"; ?>"></script>
        <?php endforeach;?>

    <?php if (isset($rawJs))
        foreach ($rawJs as $jsFile):?>
            <script type="text/javascript" src="<?php echo "$jsFile"; ?>"></script>
        <?php endforeach;?>

</head>
<body id="app">
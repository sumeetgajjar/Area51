
<!DOCTYPE html>
<html lang="en">
<head>
	<!--<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Elastic Grid | JQuery Responsive Porfolio</title>
	<meta name="description" content="Elastic Grid | JQuery Responsive Porfolio" />
	<meta name="keywords" content="responsive grid, responsive gallery, porfolio, thumbnails, grid, preview, google image search, jquery, image grid, expanding, preview, portfolio" />
	<meta name="author" content="Vu Khanh Truong | porfolio.bonchen.net" />-->
	<link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/img/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/img/elastic_grid.min.css" />
</head>
<body style="background:#fff;">
<div id="elastic_grid_demo"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/img/modernizr.custom.js"></script>
<script src="js/img/classie.js"></script>
<!--- uncompress-->

<script type="text/javascript" src="js/img/jquery.elastislide.js"></script>
<script type="text/javascript" src="js/img/jquery.hoverdir.js"></script>
<script type="text/javascript" src="js/img/elastic_grid.js"></script>
<!-- compress version
<script type="text/javascript" src="js/elastic_grid.min.js"></script>
-->
    <div class="btn" align="top right">
    <h3><a href="index.php"> BACK </a></h3>
    </div>
    <div>
<script type="text/javascript">
    $(function(){
        $("#elastic_grid_demo").elastic_grid({
            'showAllText' : 'All',
            'filterEffect': 'popup', // moveup, scaleup, fallperspective, fly, flip, helix , popup
            'hoverDirection': true,
            'hoverDelay': 0,
            'hoverInverse': false,
            'expandingSpeed': 500,
            'expandingHeight': 500,
            'items' :
            [
                 {
                    'title'         : 'drops',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['img/works/e.jpg','img/works/f.jpg','img/works/g.jpg'],
                    'large'         : ['img/works/e.jpg','img/works/f.jpg','img/works/g.jpg'],
                    'img_title'     : ['jquery elastic grid 1 ', 'jquery elastic grid 2', 'jquery elastic grid 3'],
                    'button_list'   :
                    [
                        { 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/', 'new_window' : true },
                        { 'title':'Download', 'url':'http://porfolio.bonchen.net/', 'new_window' : false}
                    ],
                    'tags'          : ['Drops Survey']
                },
                 {
                    'title'         : 'drops',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['img/works/f.jpg','img/works/g.jpg','img/works/e.jpg'],
                    'large'         : ['img/works/f.jpg','img/works/g.jpg','img/works/e.jpg'],
                    'img_title'     : ['jquery elastic grid 1 ', 'jquery elastic grid 2', 'jquery elastic grid 3'],
                    'button_list'   :
                    [
                        { 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/', 'new_window' : true },
                        { 'title':'Download', 'url':'http://porfolio.bonchen.net/', 'new_window' : false}
                    ],
                    'tags'          : ['Drops Survey']
                },
                {
                    'title'         : 'drops',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['img/works/g.jpg','img/works/e.jpg','img/works/f.jpg'],
                    'large'         : ['img/works/g.jpg','img/works/e.jpg','img/works/f.jpg'],
                    'img_title'     : ['jquery elastic grid 1 ', 'jquery elastic grid 2', 'jquery elastic grid 3'],
                    'button_list'   :
                    [
                        { 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/', 'new_window' : true },
                        { 'title':'Download', 'url':'http://porfolio.bonchen.net/', 'new_window' : false}
                    ],
                    'tags'          : ['Drops Survey']
                },
                 {
                    'title'         : 'drops',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['img/works/c.jpg','img/works/j.jpg','img/works/l.jpg'],
                    'large'         : ['img/works/c.jpg','img/works/j.jpg','img/works/l.jpg'],
                    'img_title'     : ['jquery elastic grid 1 ', 'jquery elastic grid 2', 'jquery elastic grid 3'],
                    'button_list'   :
                    [
                        { 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/', 'new_window' : true },
                        { 'title':'Download', 'url':'http://porfolio.bonchen.net/', 'new_window' : false}
                    ],
                    'tags'          : ['Rig Inspection']
                },
                 {
                    'title'         : 'drops',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['img/works/j.jpg','img/works/l.jpg','img/works/c.jpg'],
                    'large'         : ['img/works/j.jpg','img/works/l.jpg','img/works/c.jpg'],
                    'img_title'     : ['jquery elastic grid 1 ', 'jquery elastic grid 2', 'jquery elastic grid 3'],
                    'button_list'   :
                    [
                        { 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/', 'new_window' : true },
                        { 'title':'Download', 'url':'http://porfolio.bonchen.net/', 'new_window' : false}
                    ],
                    'tags'          : ['Rig Inspection']
                },
                 {
                    'title'         : 'drops',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['img/works/l.jpg','img/works/c.jpg','img/works/j.jpg'],
                    'large'         : ['img/works/l.jpg','img/works/c.jpg','img/works/j.jpg'],
                    'img_title'     : ['jquery elastic grid 1 ', 'jquery elastic grid 2', 'jquery elastic grid 3'],
                    'button_list'   :
                    [
                        { 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/', 'new_window' : true },
                        { 'title':'Download', 'url':'http://porfolio.bonchen.net/', 'new_window' : false}
                    ],
                    'tags'          : ['Rig Inspection']
                },
                {
                    'title'         : 'drops',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['img/works/h.jpg','img/works/k.jpg'],
                    'large'         : ['img/works/h.jpg','img/works/k.jpg'],
                    'img_title'     : ['jquery elastic grid 1 ', 'jquery elastic grid 2' ],
                    'button_list'   :
                    [
                        { 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/', 'new_window' : true },
                        { 'title':'Download', 'url':'http://porfolio.bonchen.net/', 'new_window' : false}
                    ],
                    'tags'          : ['Electrical survey']
                },
                 {
                    'title'         : 'drops',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['img/works/k.jpg','img/works/h.jpg'],
                    'large'         : ['img/works/k.jpg','img/works/h.jpg'],
                    'img_title'     : ['jquery elastic grid 1 ', 'jquery elastic grid 2' ],
                    'button_list'   :
                    [
                        { 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/', 'new_window' : true },
                        { 'title':'Download', 'url':'http://porfolio.bonchen.net/', 'new_window' : false}
                    ],
                    'tags'          : ['Electrical survey']
                },
                {
                    'title'         : 'drops',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                   'thumbnail'     : ['img/works/a.jpg','img/works/i.jpg','img/works/d.jpg'],
                    'large'         : ['img/works/a.jpg','img/works/i.jpg','img/works/d.jpg'],
                    'img_title'     : ['jquery elastic grid 1 ', 'jquery elastic grid 2', 'jquery elastic grid 3'],
                    'button_list'   :
                    [
                        { 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/', 'new_window' : true },
                        { 'title':'Download', 'url':'http://porfolio.bonchen.net/', 'new_window' : false}
                    ],
                    'tags'          : ['Energy Audit']
                },
                 {
                    'title'         : 'drops',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                   'thumbnail'     : ['img/works/i.jpg','img/works/a.jpg','img/works/d.jpg'],
                    'large'         : ['img/works/i.jpg','img/works/a.jpg','img/works/d.jpg'],
                    'img_title'     : ['jquery elastic grid 1 ', 'jquery elastic grid 2', 'jquery elastic grid 3'],
                    'button_list'   :
                    [
                        { 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/', 'new_window' : true },
                        { 'title':'Download', 'url':'http://porfolio.bonchen.net/', 'new_window' : false}
                    ],
                    'tags'          : ['Energy Audit']
                },
                 {
                    'title'         : 'drops',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                   'thumbnail'     : ['img/works/d.jpg','img/works/i.jpg','img/works/a.jpg'],
                    'large'         : ['img/works/d.jpg','img/works/i.jpg','img/works/a.jpg'],
                    'img_title'     : ['jquery elastic grid 1 ', 'jquery elastic grid 2', 'jquery elastic grid 3'],
                    'button_list'   :
                    [
                        { 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/', 'new_window' : true },
                        { 'title':'Download', 'url':'http://porfolio.bonchen.net/', 'new_window' : false}
                    ],
                    'tags'          : ['Energy Audit']
                },
             

            ]
        });
    });
</script>
    </div>
    </body>
</html>
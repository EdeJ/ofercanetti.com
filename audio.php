<?php
$pageTitle = 'Audio';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Latest compiled and minified CSS -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">        <!-- Optional theme -->
        <!--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">-->
        <link rel='stylesheet' href='//fonts.googleapis.com/css?family=Open+Sans%3A400italic%2C400%2C600%2C700%7CRoboto+Slab%3A400%2C300%2C700&#038;ver=4.2.2' type='text/css' media='all' />
        <link rel="stylesheet" type="text/css" href="styles.css?v=1?v=1">
        <link href="skin/jplayer.blue.monday.css" rel="stylesheet" type="text/css" />
        <style>
            a.jp-playlist-item bold {
                font-weight: bold;

            }
            div.jp-audio {
                width: 100%;
            }
        </style>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <title>Ofer Canetti - Audio</title>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.jplayer.min.js"></script>
        <script type="text/javascript" src="js/jplayer.playlist.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {

                new jPlayerPlaylist({
                    jPlayer: "#jquery_jplayer_1",
                    cssSelectorAncestor: "#jp_container_1"
                }, [
                    {
                        title: "Webern-Langsamersatz (Testore Quartet, Vienna 2013)",
                        mp3: "audiofiles/01 רצועה 1.mp3",
                        oga: "audiofiles/01 רצועה 1.ogg"
                    },
                    {
                        title: "<bold>Kodaly-Duo for Violin and Violoncello, op. 7 (Susanne Schaeffer, Ofer Canetti, Vienna 2014)</bold><br/>Allegro serioso, non troppo.",
                        mp3: "audiofiles/KodalyDuo1.mp3",
                        oga: "audiofiles/KodalyDuo1.ogg"
                    },
                    {
                        title: "Adagio",
                        mp3: "audiofiles/KodalyDuo2.mp3",
                        oga: "audiofiles/KodalyDuo2.ogg"
                    },
                    {
                        title: "Maestoso e largemente, ma non troppo lento.",
                        mp3: "audiofiles/KodalyDuo3.mp3",
                        oga: "audiofiles/KodalyDuo3.ogg"
                    },
                    {
                        title: "<bold>Beethoven-Quartet, op. 18/4 in C minor (Testore Quartet, Salzburg 2013)</bold><br/>Allegro ma non tanto",
                        mp3: "audiofiles/02 רצועה 2.mp3",
                        oga: "audiofiles/02 רצועה 2.ogg"
                    },
                    {
                        title: "Andante scherzoso quasi allegretto",
                        mp3: "audiofiles/03 רצועה 3.mp3",
                        oga: "audiofiles/03 רצועה 3.mp3"
                    },
                    {
                        title: "Menuetto: Allegretto",
                        mp3: "audiofiles/04 רצועה 4.mp3",
                        oga: "audiofiles/04 רצועה 4.ogg"
                    },
                    {
                        title: "Allegro – Prestissimo",
                        mp3: "audiofiles/05 רצועה 5.mp3",
                        oga: "audiofiles/05 רצועה 5.ogg"
                    },
                    {
                        title: "<bold>Brahms-Quintet for Clarinet and strings, op. 115 in B minor (Testore Quartet, Dario Zingales, Salzburg 2013)</bold><br/>Allegro",
                        mp3: "audiofiles/06 רצועה 6.mp3",
                        oga: "audiofiles/06 רצועה 6.ogg"
                    },
                    {
                        title: "Adagio",
                        mp3: "audiofiles/07 רצועה 7.mp3",
                        oga: "audiofiles/07 רצועה 7.ogg"
                    },
                    {
                        title: "Andantino",
                        mp3: "audiofiles/08 רצועה 8.mp3",
                        oga: "audiofiles/08 רצועה 8.ogg"
                    },
                    {
                        title: "Con moto",
                        mp3: "audiofiles/09 רצועה 9.mp3",
                        oga: "audiofiles/09 רצועה 9.ogg"
                    },
                    {
                        title: "<bold>Brahms-Sonata for Piano and Violoncello, op. 99 in F amjor (Andrei Gologan, Ofer Canetti, Salzburg 2014)</bold><br/>Allegro vivace",
                        mp3: "audiofiles/01 J Brahms - Sonate Nr 2 - Allegro vivace.mp3",
                        oga: "audiofiles/01 J Brahms - Sonate Nr 2 - Allegro vivace.ogg"
                    },
                    {
                        title: "Adagio affettuoso",
                        mp3: "audiofiles/02 J Brahms - Sonate Nr 2 - Adagio affettuoso.mp3",
                        oga: "audiofiles/02 J Brahms - Sonate Nr 2 - Adagio affettuoso.ogg"
                    },
                    {
                        title: "Allegro passionato",
                        mp3: "audiofiles/03 J Brahms - Sonate Nr 2 - Allegro passionato.mp3",
                        oga: "audiofiles/03 J Brahms - Sonate Nr 2 - Allegro passionato.ogg"
                    },
                    {
                        title: "Allegro molto",
                        mp3: "audiofiles/04 J Brahms - Sonate Nr 2 - Allegro molto.mp3",
                        oga: "audiofiles/04 J Brahms - Sonate Nr 2 - Allegro molto.ogg"
                    }

                ], {
                    swfPath: "js",
                    supplied: "oga, mp3",
                    wmode: "window",
                    smoothPlayBar: true,
                    keyEnabled: true
                });
            });
        </script>
    </head>
    <body>
<?php include_once 'navbar.php'; ?>

        <div class='container'>
            <div class="container main-content-area">
                <div class="row">
                    <div class="main-content-inner col-sm-12 col-md-12 pull-left">
                        <div class="content-area" id="primary">
                            <main role="main" class="site-main" id="main">
                                <div class="post-inner-content">
                                    <article>
                                        <div id='content'>
                                            <h1>Audio</h1>


                                            <div id='audioPlayer'>
                                                <div id="jquery_jplayer_1" class="jp-jplayer"></div>
                                                <div id="jp_container_1" class="jp-audio">
                                                    <div class="jp-type-playlist">
                                                        <div class="jp-gui jp-interface">
                                                            <ul class="jp-controls">
                                                                <li><a href="javascript:;" class="jp-previous" tabindex="1">previous</a></li>
                                                                <li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
                                                                <li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
                                                                <li><a href="javascript:;" class="jp-next" tabindex="1">next</a></li>
                                                                <li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
                                                                <li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
                                                                <li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
                                                                <li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
                                                            </ul>
                                                            <div class="jp-progress">
                                                                <div class="jp-seek-bar">
                                                                    <div class="jp-play-bar"></div>
                                                                </div>
                                                            </div>
                                                            <div class="jp-volume-bar">
                                                                <div class="jp-volume-bar-value"></div>
                                                            </div>
                                                            <div class="jp-time-holder">
                                                                <div class="jp-current-time"></div>
                                                                <div class="jp-duration"></div>
                                                            </div>
                                                            <ul class="jp-toggles">
                                                                <li><a href="javascript:;" class="jp-shuffle" tabindex="1" title="shuffle">shuffle</a></li>
                                                                <li><a href="javascript:;" class="jp-shuffle-off" tabindex="1" title="shuffle off">shuffle off</a></li>
                                                                <li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
                                                                <li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="jp-playlist">
                                                            <ul>
                                                                <li></li>
                                                            </ul>
                                                        </div>
                                                        <div class="jp-no-solution">
                                                            <span>Update Required</span>
                                                            To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </article>
                                </div>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <footer class="footer">
            <div class="container">
                <p class="text-muted"><span class='domain pull-right' >&copy; <?= date('Y') ?> ofercanetti.com</span></p>
            </div>
        </footer>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    </body>
</html>

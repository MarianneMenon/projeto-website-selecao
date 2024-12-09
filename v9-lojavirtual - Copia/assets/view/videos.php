<?php

include("header.php");

?>

<link rel="stylesheet" href="assets/lib/plyr/dist/plyr.css">
    <section>
        <div id="call-to-action">        
            <div id="news" class="container">
                <div class="row text-center">
                    <h2>Vídeos</h2>
                    <hr>
                </div>
                <br>
                <div class="row">
                    <div class="player">
                        <video src="assets/videos/CopadoMundoFutebol2002.mp4" controls  poster="assets/images/poster-CopadoMundoFutebol2002.JPG"></video>
                    </div>
                </div>
                <br>

                <button type="button" id="btn-play-pause" class="btn btn-success"></button>

                <br>

                <div class="row thumbnails owl-carousel owl-theme">
                    
                    <div class="item" data-video="CopadoMundoFutebol2002">
                        <div class="item-inner">
                            <img src="assets/images/poster-CopadoMundoFutebol2002.JPG" alt="Finalda Copa do Mundo de Futebol de 2002" width="280px">
                            <h3>Final da Copa de 2002</h3>
                        </div>
                    </div>

                    <div class="item" data-video="GolsCopa2002">
                        <div class="item-inner">
                            <img src="assets/images/poster-GolsCopa2002.JPG" alt="Gols da Copa 2002" width="280px">
                            <h3>Final da Copa de 2002</h3>
                        </div>
                    </div>

                    <div class="item" data-video="CopadoMundoFutebol2002">
                        <div class="item-inner">
                            <img src="assets/images/poster-CopadoMundoFutebol2002.JPG" alt="Finalda Copa do Mundo de Futebol de 2002" width="280px">
                            <h3>Final da Copa de 2002</h3>
                        </div>
                    </div>

                    <div class="item" data-video="GolsCopa2002">
                        <div class="item-inner">
                            <img src="assets/images/poster-GolsCopa2002.JPG" alt="Gols da Copa 2002" width="280px">
                            <h3>Final da Copa de 2002</h3>
                        </div>
                    </div>

                    <div class="item" data-video="CopadoMundoFutebol2002">
                        <div class="item-inner">
                            <img src="assets/images/poster-CopadoMundoFutebol2002.JPG" alt="Finalda Copa do Mundo de Futebol de 2002" width="280px">
                            <h3>Final da Copa de 2002</h3>
                        </div>
                    </div>

                    <div class="item" data-video="GolsCopa2002">
                        <div class="item-inner">
                            <img src="assets/images/poster-GolsCopa2002.JPG" alt="Gols da Copa 2002" width="280px">
                            <h3>Final da Copa de 2002</h3>
                        </div>
                    </div>

                    <div class="item" data-video="CopadoMundoFutebol2002">
                        <div class="item-inner">
                            <img src="assets/images/poster-CopadoMundoFutebol2002.JPG" alt="Finalda Copa do Mundo de Futebol de 2002" width="280px">
                            <h3>Final da Copa de 2002</h3>
                        </div>
                    </div>

                    <div class="item" data-video="GolsCopa2002">
                        <div class="item-inner">
                            <img src="assets/images/poster-GolsCopa2002.JPG" alt="Gols da Copa 2002" width="280px">
                            <h3>Final da Copa de 2002</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

   <?php
   include("footer.php");

   ?>

   <script src="assets/lib/plyr/dist/plyr.js"></script>

    <script>
        (function(d, p){
            var a = new XMLHttpRequest(),
                b = d.body;
            a.open("GET" , p, true);
            a.send();
            a.onload = function(){
                var c = d.createElement("div");
                c.style.display = "none";
                c.innerHTML = a.responseText;
                b.insertBefore(c, b.childNodes[0]);
            }
        })(document, "assets/lib/plyr/dist/sprite.svg");
    </script>
    
    <script>
        $(document).ready(function(){
            $(".thumbnails .item").on("click", function(){
                console.log($(this).data('video'));
                $("video").attr({
                    "src":"assets/videos/"+$(this).data('video')+".mp4",
                    "poster":"assets/images/"+"poster-"+$(this).data('video')+".jpg"
                });
            });

            $("#btn-play-pause").on('click', function() {
                var video = $("video")[0];
                if ($(this).hasClass("btn-success")) {
                    video.play();
                    $(this).text("PAUSE");
                } else  {
                    video.pause();
                    $(this).text("PLAY");
                }
                $(this).toggleClass("btn-success btn-danger");
            });

            plyr.setup();

        });
    </script>
</body>
</html>
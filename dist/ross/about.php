<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../output.css" />
  </head>

  <body>
    <div class="h-full flex justify-start">
      <div class="hidden lg:inline">
        <img
          class="h-screen"
          src="../assets/img/insignia-king-ross.svg"
          alt="insignia king ross"
        />
      </div>
      <div class="lg:h-40 h-24 lg:w-1/2 w-2/3  place-content-center mx-auto mt-10">
        <div class="lg:h-40 h-24 lg:w-full w-full bg-king_pink grid place-content-center mx-auto mt-10 rounded-3xl">
          <div>
            <p class="white-border font-lato lg:text-7xl md:text-small_main text-tiny_main">
              About Ross
            </p>
          </div>
        </div>
        <div id="content" class="mt-10 font-lato">
          <div class="flex justify-center">
            <div class="w-1/2 bg-king_blue text-king_white p-6 mx-10 rounded-xl">
                <p class="text-4xl flex justify-center">Gaming</p>
                <br>
                <div>
                  <?php 
                    include("./../../steam.php");
                    echo $apikey;
                  ?>
                  [steam API]
                  <br><br>
                  I like to game, you must read a lot of applications that say this. I'm not into shooters though, mostly resource management and/or city builders.
                  Games like Cities Skylines, Factorio and Kerbal Space Program.
                </div> 
            </div>
            <div class="w-1/2 bg-king_blue text-king_white p-6 mx-10 rounded-xl">
                    <p class="text-4xl flex justify-center">3D Printing</p>
                <div>
                  For my 3D printer I either download cool prints from <a href="https://www.thingiverse.com">Thingiverse</a> or I make them myself.
                  I use both Blender and Cinema4D. I'm not fluent in either of these, but I know my way around them.
                  <br><br>
                  When I design my own it's not something overly complicated, just functional. For example a stand for a server monitor, or a fan. 
                  I have also tried to make my own board game with it, in the process to make the rules now.
                </div>
            </div>
            
        </div>
        
        </div>
      </div>

    </div>
  </body>
</html>

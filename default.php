<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css" />
    <script src="https://kit.fontawesome.com/174520243e.js" crossorigin="anonymous"></script>

    <title>Thomas Casse</title>

    <meta name="description" content="I’m a software developer currently focusing on front end web development along with search engine optimization.
	I studied at Conestoga and I have experience developing and maintaining web sites through personal projects, school work and freelance work.
    I am currently looking for freelance work from small businesses who also specialize in software development. "/>
    
    <meta name="keywords" content="Softeware Developer, Software Company, Software Design, Software, Programming Software,
    Software Development Company, Business Software, Web Design Software, Mobile Development, Application Development, Coding Software,
    Software Companies Near Me, App Development Software, Software Engineers, Software Development Methodologies, Website Design Software,
    Game Developer, Game Development Software, Top Software Companies, Could Based Software, Software Programmer, Software Maker">

    <meta name="author" content="Thomas Casse">
</head>

<body>
    <header>
        <h1>Thomas Casse</h1>
        <h2>Software Developer</h2>

        <ul class="icons">
            <li><a href="mailto:AlexTcp@Hotmail.com.com" class="fas fa-envelope fa-3x"></a></li>
            <li><a href="https://www.linkedin.com/in/thomascasse/" target="_blank" class="fab fa-linkedin fa-3x"></a></li>
            <li><a href="https://github.com/Aileron64" target="_blank" class="fab fa-github fa-3x"></a></li>
            <li><a href="https://twitter.com/Aileron64" target="_blank" class="fab fa-twitter fa-3x"></a></li>             
        </ul>

        <div id="nav">
            <a href="#web">Web Projects</a>
            <a href="#desktop">Mobile & Desktop</a>
            <a href="#game">Game Projects</a>
        </div>
    </header>

    <!-- About Me -->
    <section style="background-image: url('images/about-background.jpg');">

        <div class="about">
            <h2>I am a freelance developer currently focusing on front end web development along with search engine optimization</h2>
            <h2></h2>
        </div>
    </section>
        
    <section style="padding: 10em;"></section>
    <section style="background-image: url('images/mboard-background.jpg');">
        <div id="main-columns">

            <div class="column">
                <i class="fas fa-laptop-code fa-5x"></i>
                <h2>Web Development</h2>

                <h3>Languages</h3>
                <ul>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>Javascript</li>
                    <li>Sass</li>
                    <li>PHP</li>
                </ul>

                <h3>Dev Tools</h3>
                <ul>
                    <li>React</li>
                    <li>ASP.Net</li>
                    <li>Node Js</li>   
                    <li>Express</li>
                    <li>Word Press</li>
                    <li>MongoDB</li>
                    <li>Firebase</li>
                </ul>
            </div>

            <div class="column">
                <i class="fas fa-desktop fa-5x"></i>
                <h2>Mobile & Desktop Applications</h2>
              
                <h3>Languages</h3>
                <ul>
                    <li>C#</li>
                    <li>C</li>
                    <li>Java</li>
                    <li>SQL</li>
                </ul>

                <h3>Dev Tools</h3>
                <ul>
                    <li>.Net</li>
                    <li>WPF</li>
                    <li>Xamarin</li>
                    <li>Android Studio</li>
                </ul>
            </div>

            <div class="column">
                <i class="fas fa-gamepad fa-5x"></i>
                <h2>Game Development</h2>
            
                <h3>Languages</h3>
                <ul>
                    <li>C#</li>
                    <li>C++</li>
                </ul>

                <h3>Dev Tools</h3>
                <ul>
                    <li>Unity</li>
                    <li>OpenGL</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Section -->
    <section id="web">
        <h2>Web Development</h2>
        <div>
            <article>
                <img src="images/forum.jpg" alt=""/>
                                
                <h3>Node JS Web Forum
                    <a href="https://github.com/Aileron64/NodeJS_EJS_Forum" target="_blank" class="icon fab fa-github"></a>
                </h3>

                <p>An example forum created using NodeJS, Express, EJS and a MangoDB Database</p>
            </article>

            <article>
                <img src="images/tictactoe.jpg" alt=""/>

                <h3>TicTacToe Chatbot
                    <a href="https://tictactoe-chatbot.herokuapp.com/" target="_blank" class="icon fas fa-external-link-alt"></a>
                    <a href="https://github.com/Aileron64/TicTacToe_Chatbot" target="_blank" class="icon fab fa-github"></a>            
                </h3>
                <p>A simple chat bot that beats you at tic tac toe, and makes fun of you while doing so</p>
            </article>

            <article>
                <img src="images/wishlist.jpg" alt=""/>

                <h3>Firebase WishList
                    <a href="https://prog8110-project2.web.app/" target="_blank" class="icon fas fa-external-link-alt"></a>
                    <a href="https://github.com/Aileron64/WishList" target="_blank" class="icon fab fa-github"></a>                
                </h3>
                <p>A Basic website which uses a Firebase database for saving your own personal wishlist </p>
            </article>
        </div>
        
        <br><br>
        <p>I've also worked on a number of small mobile friendly websites, such as this one</p>
            <div>
                <ul>  
                    <li><a href="http://stanwayconstruction.ca/" class="button" target="_blank">Stanway Construction</a></li>
                    <li><a href="http://stuckonstuccotoronto.com/" class="button" target="_blank">Stuck on Stucco</a></li>
                    <li><a href="http://glassshowers.ca/" class="button" target="_blank">Glass Showers</a></li>
                    <li><a href="http://vizconconstruction.com/" class="button" target="_blank">Vizcon Construction</a></li>
                </ul> 
            </div>   
    </section>

    <section style="background-image: url('images/code-background.jpg');">
        <h2>Tabletop.Digital</h2>
        
        <div>
            <div class="right">
                <img src="images/tabletop.JPG" alt="" />
            </div>

            <div class="left">

                <p>Tabletop.Digital was capstone project at Conestoga, it was designed to be a platform for playing simple tabletop games
                    online or in person using each individual's mobile device as a controller</p>

                <p>It was built using React for the front end, and ASP.Net on the backend, it also made use of Microsoft's SignalR
                    libary in order to handle web socket management
                </p>
            
                <ul class="actions">
                    <li><a href="https://github.com/Aileron64/Tabletop_Digital" target="__blank" class="icon fab fa-github fa-3x"></a></li>
                </ul>
            </div>
        </div>
    </section>

    <section id="desktop">
        <h2>WPF Applications</h2><br>
        <div>
            <article>
                <img src="images/firetruck.jpg" alt=""/>
                                
                <h3>Firetruck Recursion
                    <a href="https://github.com/Aileron64/Firetruck" target="_blank" class="icon fab fa-github"></a>
                </h3>

                <p>A program designed to take a spesific text input representing a list of connections between nodes along with a
                    target destination node.</p>
                <p>It will then display every posible path to the target</p>
                </p>
            </article>

            <article>
                <img src="images/kinectic.jpg" alt=""/>

                <h3>Kinectic Energy
                    <a href="https://github.com/Aileron64/KineticEnergy" target="_blank" class="icon fab fa-github"></a>
                </h3>

                <p>A basic physic's demontration, which displays the kinetic energy of moving ball as they collide into each other</p>
            </article>

            <article>
                <img src="images/color-sort.jpg" alt=""/>

                <h3>Color Sorting
                    <a href="https://github.com/Aileron64/Color_Sorting" target="_blank" class="icon fab fa-github"></a>
                </h3>
                <p>A visual diplay of differnt sorting methods</p>
            </article>
        </div>
    </section>

    <!-- Solar Core -->
    <section id="game" style="background-image: url('images/solarcore-background.jpg');">

        <h2>Solar Core</h2>
        
        <div>
            <div class="right">
                <img src="images/solarCore.png" alt="" />
            </div>

            <div class="left">

                <p>Solar Core is by far my most prestigious project to date.  It originates from a global game jam submission,
                    of which I took the art I made and turned into 3D models.</p>

                <p>It was my final capstone project at Humber College, and after graduation I continued to work on it in order to
                    release it fully.  In March 2016 it was accepted onto steam through it's greenlight program, and is currently
                    in it's final stages of completion.</p>
            
                <ul>
                    <li><a href="https://store.steampowered.com/app/637340/Solar_Core/" target="_blank" class="icon fab fa-steam fa-3x"></a></li>
                    <li><a href="https://github.com/Aileron64/SolarCore" target="_blank" class="icon fab fa-github fa-3x"></a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Section -->
    <section>
        <h2>Smaller Game Projects</h2><br>
        <div>
            <article>
                <img src="images/starTunnel.png" alt=""/>
                                
                <h3>Star Tunnel
                    <a href="https://github.com/Aileron64/StarTunnel" target="_blank" class="icon fab fa-github"></a>
                </h3>

                <p>A small android game I created using android studio. Based on a simple concept of dodgeing projectiles,
                    except you can only control your movement horizontally while you constanltly bounce up and down</p>
            </article>

            <article>
                <img src="images/territories.png" alt=""/>

                <h3>Territories
                    <a href="https://github.com/Aileron64/Territories" target="_blank" class="icon fab fa-github"></a>
                </h3>

                <p>An online multiplayer game created in Unity as a group effort.  I had a smaller role involved mostly
                    with ui, updating and syncing the map as it changed</p>
            </article>

            <article>
                <img src="images/lasers.png" alt=""/>

                <h3>Lasers N Stuff
                    <a href="https://github.com/Aileron64/LaserNStuff" target="_blank" class="icon fab fa-github"></a>
                </h3>
                <p>A multiplayer game summited to the Global Game Jam 2015, created in 48 hours in Unity.  I created the
                    art and design for the game, along with programming differnt AI for the enemies</p>
            </article>
        </div>
        <div>
            <article>
                <img src="images/possessed.png" alt="" />
                <h3>Possessed
                    <a href="https://github.com/Aileron64/Possesed" target="_blank" class="icon fab fa-github"></a>
                </h3>
                <p>A group project build in Unity. A platformer where you play as a ghost and can take control of enemies
                    by possesing them</p>
            </article>

            <article>
                <img src="images/dreamDef.png" alt="" />
                <h3>Dream Defence
                    <a href="https://github.com/Aileron64/DreamDefence" target="_blank" class="icon fab fa-github"></a>
                </h3>
                <p>My team's submission for great canadian appathon in 2014. Created using unity and plays like a tower
                    defence where you control a slingshot using the touch screen</p>
            </article>

            <article>
                <img src="images/tank.png" alt="" />
                <h3>Tank Corps
                    <a href="https://github.com/Aileron64/TankCorps" target="_blank" class="icon fab fa-github"></a>
                </h3>
                <p>The first game I created in Unity, heavily inspired by an N64 game, Blast Corps, where you have to
                    destroy a path in order for an unstopable explosive vehicle to make it through with out colliding into anything</p>
            </article>
        </div>

        <footer id="footer">
            <div>
                <a href="mailto:AlexTcp@Hotmail.com.com" class="fas fa-envelope fa-2x icon"></a>
                <a href="https://www.linkedin.com/in/thomascasse/" target="_blank" class="fab fa-linkedin fa-2x icon"></a>
                <a href="https://github.com/Aileron64" target="_blank" class="fab fa-github fa-2x icon"></a>
                <a href="https://twitter.com/Aileron64" target="_blank" class="fab fa-twitter fa-2x icon"></a>  
            </div>

            <p class="copyright">&copy; Thomas Casse</p>
        </footer>
    </section>
</body>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.scrollex.min.js"></script>
    <script src="js/jquery.scrolly.min.js"></script>
    <script src="js/main.js"></script>
</html>

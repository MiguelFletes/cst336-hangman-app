<!DOCTYPE html>
<html>
    <head>
        <title>Hangman</title>
        <link  href="css/styles.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
    </head>
    <body>
        <?php
        ?>
        <div class='container text-center'>
            <header>
               <h1>Hangman</h1>
            </header>
            
            <div id="word">
                
            </div>
            
            <div id="letters">
                <!--<input type="text" id="letterbox" size="3"/>-->
                <!--<button id="letterbtn">Submit</button>-->
                <button class="letter" id="A">A</button>
                <button class="letter" id="B">B</button>
                <button class="letter" id="C">C</button>
                <button class="letter" id="D">D</button>
                <button class="letter" id="E">E</button>
                <button class="letter" id="F">F</button>
                <button class="letter" id="G">G</button>
                <button class="letter" id="H">H</button>
                <button class="letter" id="I">I</button>
                <button class="letter" id="J">J</button>
                <button class="letter" id="K">K</button>
                <button class="letter" id="L">L</button>
                <button class="letter" id="M">M</button>
                <button class="letter" id="N">N</button>
                <button class="letter" id="O">O</button>
                <button class="letter" id="P">P</button>
                <button class="letter" id="Q">Q</button>
                <button class="letter" id="R">R</button>
                <button class="letter" id="S">S</button>
                <button class="letter" id="T">T</button>
                <button class="letter" id="U">U</button>
                <button class="letter" id="V">V</button>
                <button class="letter" id="W">W</button>
                <button class="letter" id="X">X</button>
                <button class="letter" id="Y">Y</button>
                <button class="letter" id="Z">Z</button>
                
            </div>
            
            <div id="man">
               <img src="img/stick_0.png" id="hangImg">
            </div>
        </div>
    </body>
    <script>
            var selectedWord = ""//word to guess;
            var selectedHint = ""
            var board = [] // array
            var remainingGuesses = 6
            var words = ["snake", "beetle", "monkey", "horse", "whale"]
            
            //alert("First word: " + words[0])
            //console.log("First word: " + words[0])
            
            function pickWord(){
                var randomInt = Math.floor(Math.random() *  words.length);
                selectedWord = words[randomInt];
            }
            
            function updateBoard(){
               for(var letter of board){
                    document.getElementById("word").innerHTML += letter + " ";
                    //$("#word").html()
                } 
            }
            
            function initBoard(){
                for(var i=0;i<selectedWord.length;i++){
                    board.push("_");
                }
            }
            
            //EVENTS
            
            //$("#letterbtn").click( function(){ alert("hi")});
            
            $(".letter").click( function(){alert($(this).attr("id"))});
            
            
            
            startGame();
            
            function startGame() {
                pickWord();
                initBoard();
                updateBoard();
            }
        </script>
</html>